<?php
/*
 * Adds new math parser functions
 *
 * @package MediaWiki
 * @subpackage Extensions
 *
 * @author Roland Unger
 * @copyright Copyright © 2007 – 2012 Roland Unger
 *
 * @license https://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

class MapSourcesMath {

	/** @var int */
	public $dec;

	/** @var string 'long' (E-W), 'lat' */
	public $dir;

	/** @var int */
	public $prec;

	/** @var int */
	public $step;

	/** @var int */
	public $error;

	/** @var array */
	public $coord = [];

	public function __construct( $input, $precision = 4, $dir = '', $untilStep = 1 ) {
		$this->newCoord( $input, $precision, $dir );
		if ( $untilStep > 1 && $this->error == 0 ) {
			$this->setCoord();
		}
	}

	protected function newCoord( $input, $precision = 4, $dir = '' ) {
		if ( $dir == 'lat' || $dir == 'long' ) {
			$this->dir = $dir;
		} else {
			$this->dir = '';
		}

		$p = intval( $precision );
		if ( $p >= -1 && $p < 10 ) {
			$this->prec = $p;
		} else {
			$this->prec = 4;
		}
		if ( $precision == -1 ) {
			$this->prec = 9;
		}

		$this->dec = 0;
		$this->step = 0;
		$this->error = $this->toDec( $input );
	}

	protected function setCoord() {
		if ( $this->step > 1 ) {
			return true;
		}
		if ( $this->prec < 9 ) {
			$this->coord['dec'] = round( $this->dec, $this->prec );
		} else {
			$this->coord['dec'] = $this->dec;
		}

		if ( $this->dec < 0 ) {
			$sign = -1;
		} else {
			$sign = 1;
		}
		$angle = abs( $this->dec );
		$deg = floor( $angle );
		$min = ( $angle - $deg ) * 60;

		if ( $this->prec > 4 ) {
			$sec = round( ( $min - floor( $min ) ) * 60, $this->prec - 4 );
		} else {
			$sec = round( ( $min - floor( $min ) ) * 60 );
		}
		$min = floor( $min );
		if ( $sec >= 60 ) {
			$sec -= 60;
			$min++;
		}
		if ( $this->prec < 3 && $sec >= 30 ) {
			$min++;
		}
		if ( $this->prec < 3 ) {
			$sec = 0;
		}
		if ( $min >= 60 ) {
			$min -= 60;
			$deg++;
		}
		if ( $this->prec < 1 && $min >= 30 ) {
			$deg++;
		}
		if ( $this->prec < 1 ) {
			$min = 0;
		}

		$this->coord['dec'] = round( $this->dec, $this->prec );
		$this->coord['deg'] = $deg * $sign;
		$this->coord['min'] = $min;
		$this->coord['sec'] = $sec;

		if ( $sign > 0 ) {
			$this->coord['NS'] = 'N';
			$this->coord['EW'] = 'E';
		} else {
			$this->coord['NS'] = 'S';
			$this->coord['EW'] = 'W';
		}

		$this->step = 2;

		return true;
	}

	public function getDMSString( $plus = '', $minus = '' ) {
		if ( $this->step < 2 ) {
			$this->setCoord();
		}

		$deg = $this->coord['deg'];
		if ( $this->dec < 0 && ( $this->dir != '' || $minus != '' ) ) {
			$deg = abs( $deg );
		}

		$result = $deg . '°';
		if ( $this->prec > 0 ) {
			$result .= ' ' . $this->coord['min'] . "'";
		}
		if ( $this->prec > 2 ) {
			$result .= ' ' . $this->coord['sec'] . '&quot;';
		}

		$letter = '';
		if ( $this->dir == 'lat' ) {
			$letter = $this->coord['NS'];
		}
		if ( $this->dir == 'long' ) {
			$letter = $this->coord['EW'];
		}
		if ( $this->dec > 0 && $plus <> '' ) {
			$letter = $plus;
		}
		if ( $this->dec < 0 && $minus <> '' ) {
			$letter = $minus;
		}
		if ( $letter != '' ) {
			$result .= ' ' . $letter;
		}

		return $result;
	}

	protected function getErrorMsg() {
		$msg = [ 'no error', 'no parameter(s)', 'to many parameters', 'illegal characters',
			'to many numeric parameters', 'degree out of range', 'minute out of range',
			'degree no integer', 'second out of range', 'minute no integer',
			'direction not last parameter', 'invalid negative value', 'wrong direction',
			'latitude out of range', 'unknown error' ];

		$e = -$this->error;
		$c = count( $msg );

		if ( $e >= 0 && $e < ( $c - 1 ) ) {
			return $msg[$e];
		} else {
			return $msg[$c - 1] . ': ' . $this->error;
		}
	}

	protected function toDec( $input = '' ) {
		$units = [ '°', "'", '"', ' ' ];

		if ( $input == '' ) {
			return -1;
		}

		$w = str_replace( [ '‘', '’', '′' ], "'", $input );
		$w = str_replace( [ "''", '“', '”', '″' ], '"', $w );
		$w = str_replace( '−', '-', $w );
		$w = strtoupper( str_replace( [ '_', '/', "\t", "\n", "\r" ], ' ', $w ) );
		$w = str_replace( [ '°', "'", '"' ], [ '° ', "' ", '" ' ], $w );
		$w = trim( str_replace( [ 'N', 'S', 'E', 'W' ], [ ' N', ' S', ' E', ' W' ], $w ) );
		$w = preg_split( "/[\s]+/", $w, 5, PREG_SPLIT_NO_EMPTY );

		$c = count( $w );
		if ( $c < 1 || $c > 4 ) {
			return -2;
		}
		$res = [ 0, 0, 0, 1 ];

		for ( $i = 0; $i < $c; $i++ ) {
			$v = $w[$i];
			$pos = strpos( $v, $units[$i] );
			if ( $pos > 0 ) {
				$v = substr( $v, 0, $pos );
			}
			if ( is_numeric( $v ) ) {
				if ( $i > 2 ) {
					return -4;
				}

				switch ( $i ) {
					case 0:
						if ( $v <= -180 || $v > 180 ) {
							return -5;
						}

						$res[0] = $v;
						break;
					case 1:
						if ( $v < 0 || $v >= 60 ) {
							return -6;
						}
						if ( $res[0] != intval( $res[0] ) ) {
							return -7;
						}

						$res[1] = $v;
						break;
					case 2:
						if ( $v < 0 || $v >= 60 ) {
							return -8;
						}
						if ( $res[1] != intval( $res[1] ) ) {
							return -9;
						}

						$res[2] = $v;
						break;
				}
			} else {
				if ( $i != $c - 1 ) {
					return -10;
				}
				if ( $res[0] < 0 ) {
					return -11;
				}

				/** @phan-suppress-next-line PhanParamSuspiciousOrder */
				$pos = strpos( 'NSEW', $v );
				if ( strlen( $v ) != 1 || $pos === false ) {
					return -3;
				}

				switch ( $this->dir ) {
					case 'long':
						if ( $pos < 2 ) {
							return -12;
						}
						break;
					case 'lat':
						if ( $pos > 1 ) {
							return -12;
						}
						break;
					default:
						if ( $pos < 2 ) {
							$this->dir = 'lat';
						} else {
							$this->dir = 'long';
						}
				}

				if ( $this->dir == 'lat' && ( $res[0] < -90 || $res[0] > 90 ) ) {
					return -13;
				}

				if ( $v == 'S' || $v == 'W' ) {
					$res[3] = -1;
				}
			}
		}

		if ( $res[0] >= 0 ) {
			$v = ( $res[0] + $res[1] / 60 + $res[2] / 3600 ) * $res[3];
		} else {
			$v = ( $res[0] - $res[1] / 60 - $res[2] / 3600 ) * $res[3];
		}

		$this->dec = $v;
		$this->step = 1;

		return 0;
	}
}
