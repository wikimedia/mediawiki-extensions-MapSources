<?php

class MapSourcesHooks {
	public static function parserHooks( Parser $parser ) {
		$parser->setFunctionHook( 'dd2dms', 'MapSourcesHooks::wfdd2dms' );
		$parser->setFunctionHook( 'deg2dd', 'MapSourcesHooks::wfdeg2dd' );
		$parser->setFunctionHook( 'geoLink', 'MapSourcesHooks::wfgeoLink' );
		return true;
	}

	/**
	 * @param Parser $parser
	 * @param string ...$args
	 * @return string
	 */
	public static function wfdeg2dd( Parser $parser, ...$args ) {
		$precision = -1;
		if ( count( $args ) < 1 ) {
			return wfMessage( 'mapsources-math-missing-operand' )->inContentLanguage()->text();
		}

		$coord = array_shift( $args );
		foreach ( $args as $arg ) {
			$parts = array_map( 'trim', explode( '=', $arg, 2 ) );
			if ( count( $parts ) == 2 ) {
				switch ( $parts[0] ) {
					case 'precision':
						$precision = $parts[1];

						if ( !is_numeric( $precision ) ) {
							$precision = -1;
						}
						break;
				}
			}
		}

		$geo = new MapSourcesMath( $coord, $precision, '', 2 );
		if ( $geo->error < 0 ) {
			return wfMessage( 'mapsources-math-incorrect-input' )->inContentLanguage()->text();
		}
		return $geo->coord['dec'];
	}

	/**
	 * @param Parser $parser
	 * @param string ...$args
	 * @return string
	 */
	public static function wfdd2dms( Parser $parser, ...$args ) {
		$plus = '';
		$minus = '';
		$precision = 4;
		if ( count( $args ) < 1 ) {
			return wfMessage( 'mapsources-math-missing-operand' )->inContentLanguage()->text();
		}

		$coord = array_shift( $args );
		foreach ( $args as $arg ) {
			$parts = array_map( 'trim', explode( '=', $arg, 2 ) );
			if ( count( $parts ) == 2 ) {
				switch ( $parts[0] ) {
					case 'plus':
						$plus = $parts[1];
						break;
					case 'minus':
						$minus = $parts[1];
						break;
					case 'precision':
						$precision = $parts[1];
						if ( !is_numeric( $precision ) ) {
							$precision = 4;
						}
						break;
				}
			}
		}

		$geo = new MapSourcesMath( $coord, $precision, '', 2 );
		if ( $geo->error < 0 ) {
			return wfMessage( 'mapsources-math-incorrect-input' )->inContentLanguage()->text();
		}
		return $geo->getDMSString( $plus, $minus );
	}

	/**
	 * @param Parser $parser
	 * @param string ...$args
	 * @return string
	 */
	public static function wfgeoLink( Parser $parser, ...$args ) {
		$plusLat = '';
		$minusLat = '';
		$plusLong = '';
		$minusLong = '';
		$lat = 0;
		$long = 0;
		$precision = 4;
		if ( count( $args ) < 1 ) {
			return wfMessage( 'mapsources-math-missing-operand' )->inContentLanguage()->text();
		}

		$pattern = array_shift( $args );
		foreach ( $args as $arg ) {
			$parts = array_map( 'trim', explode( '=', $arg, 2 ) );
			if ( count( $parts ) == 2 ) {
				switch ( $parts[0] ) {
					case 'lat':
						$lat = $parts[1];
						break;
					case 'long':
						$long = $parts[1];
						break;
					case 'plusLat':
						$plusLat = $parts[1];
						break;
					case 'minusLat':
						$minusLat = $parts[1];
						break;
					case 'plusLong':
						$plusLong = $parts[1];
						break;
					case 'minusLong':
						$minusLong = $parts[1];
						break;
					case 'precision':
						$precision = $parts[1];

						if ( !is_numeric( $precision ) ) {
							$precision = 4;
						}
						break;
				}
			}
		}

		$args = [];
		$lat = new MapSourcesMath( $lat, $precision, 'lat', 2 );
		$long = new MapSourcesMath( $long, $precision, 'long', 2 );

		if ( $lat->error == 0 ) {
			$args[] = abs( $lat->dec ) . '_' . $lat->coord['NS'];
		} else {
			$args[] = '0_N';
		}

		if ( $long->error == 0 ) {
			$args[] = abs( $long->dec ) . '_' . $long->coord['EW'];
		} else {
			$args[] = '0_E';
		}

		if ( $lat->error == 0 ) {
			$args[] = $lat->getDMSString( $plusLat, $minusLat );
		} else {
			$args[] = wfMessage( 'mapsources-math-incorrect-input' )->inContentLanguage()->text();
		}

		if ( $long->error == 0 ) {
			$args[] = $long->getDMSString( $plusLong, $minusLong );
		} else {
			$args[] = wfMessage( 'mapsources-math-incorrect-input' )->inContentLanguage()->text();
		}

		if ( $lat->error == 0 ) {
			$args[] = $lat->dec;
		} else {
			$args[] = '0';
		}

		if ( $long->error == 0 ) {
			$args[] = $long->dec;
		} else {
			$args[] = '0';
		}

		return wfMsgReplaceArgs( $pattern, $args );
	}
}
