<?php
/*
 * Adds a new special page to the Wikivoyage project
 *
 * @package MediaWiki
 * @subpackage SpecialPage
 *
 * @author Egil Kvaleberg <egil@kvaleberg.no>
 * @copyright Copyright © 2005, Egil Kvaleberg <egil@kvaleberg.no>
 * http://tools.wikimedia.de/~magnus/common.php?common_source=geo/mapsources.php
 *
 * Used ideas from the special page SpecialBooksources.php by
 * Rob Church <robchur@gmail.com>
 *
 * @author Roland Unger
 * @copyright Copyright © 2007 - 2012, Roland Unger
 * v 1.04 of 2012/08/30
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

use MediaWiki\MediaWikiServices;
use MediaWiki\Revision\SlotRecord;

class MapSourcesPage extends SpecialPage {

	/** @var string|int|MapSourcesMath */
	public $lat = 0;

	/** @var string|int|MapSourcesMath */
	public $long = 0;

	/** @var string */
	public $params = '';

	/** @var array */
	public $par;

	/** @var array */
	public $errorMsgs = [];

	/** @var string */
	public $locName = '';

	/** @var float */
	public $google = 0.1;

	/** @var int */
	public $mapquest = 9;

	/** @var int */
	public $msn = 1;

	/** @var int */
	public $multimap = 100000;

	/** @var int */
	public $osmzoom = 12;

	/** @var int */
	public $osmzoommap = 10;

	public function __construct(
		$name = 'MapSources', $restriction = '', $listed = true,
		$function = false, $file = 'default', $includable = false
	) {
		parent::__construct( $name, $restriction, $listed, $function, $file, $includable );
	}

	public function execute( $subPage ) {
		$out = $this->getOutput();

		$this->setHeaders();

		$success = $this->getParams( $subPage );

		// build form, using submitted value (or if invalid, set default)
		$defaultValue = $success ? $this->params : '0,0,scale=100000';
		$this->makeForm( $defaultValue );

		if ( $success ) {
			// attempt to fetch title, either generic title or in-content-language title
			$title = Title::makeTitleSafe( NS_PROJECT, $this->msg( 'mapsources' )->text() );
			if ( $title === null || !$title->exists() ) {
				$title = Title::makeTitleSafe( NS_PROJECT,
					$this->msg( 'mapsources' )->inContentLanguage()->text() );
			}

			if ( $title !== null && $title->exists() ) {
				$rev = MediaWikiServices::getInstance()
					->getRevisionLookup()
					->getRevisionByTitle( $title );
				$text = ContentHandler::getContentText( $rev->getContent( SlotRecord::MAIN ) );
				$out->addWikiTextAsInterface( $this->replaceText( $text ) );
			} else {
				$this->errorMsgs[] = $this->msg( 'mapsources-nopage',
					$this->msg( 'mapsources' )->inContentLanguage()->escaped() )->text();
			}
		}

		// show error messages only when form is submitted
		if ( $this->params !== null ) {
			$this->outputErrorMsgs();
		}
	}

	# makeForm() code by Rob Church <robchur@gmail.com>
	private function makeForm( $defaultValue ) {
		$out = $this->getOutput();

		$out->addWikiMsg( 'mapsources-summary' );

		$formDescriptor = [
			'textbox' => [
				'type' => 'text',
				'name' => 'params',
				'id' => 'params',
				'label-message' => 'mapsources-coordinate',
				'size' => 80,
				'default' => $defaultValue,
			]
		];

		$context = new DerivativeContext( $this->getContext() );
		// Remove subpage
		$context->setTitle( $this->getPageTitle() );
		$htmlForm = HTMLForm::factory( 'ooui', $formDescriptor, $context );
		$htmlForm
			->setMethod( 'get' )
			->setSubmitText( $this->msg( 'mapsources-go' )->escaped() )
			->setWrapperLegend( $this->msg( 'mapsources-search-legend' )->text() )
			->prepareForm()
			->displayForm( false );
	}

	private function outputErrorMsgs() {
		$out = $this->getOutput();

		if ( count( $this->errorMsgs ) > 0 ) {
			$out->addWikiTextAsInterface( '==' . $this->msg( 'mapsources-errormsgs' )->plain() . '==' );

			$list = '';
			foreach ( $this->errorMsgs as $msg ) {
				$list .= '* ' . $msg . "\n";
			}
			# Emit entire list at once so that it becomes a single <ul>
			$out->addWikiTextAsInterface( $list );
		}
	}

	/**
	 * @return int
	 */
	private function splitParameters() {
		$a = explode( ',', str_replace( ';', ',', $this->params ), 4 );
		$c = count( $a );
		if ( ( $c > 1 ) && ( $c < 4 ) ) {
			$this->lat = $a[0];
			$this->long = $a[1];
			if ( $c > 2 ) {
				$args = $a[2];
			} else {
				$args = '';
			}
		} else {
			$a = explode( '_N_', $this->params, 2 );
			if ( count( $a ) < 2 ) {
				$a = explode( '_S_', $this->params, 2 );
				if ( count( $a ) < 2 ) {
					return -1;
				}
				$this->lat = $a[0] . '_S';
			} else {
				$this->lat = $a[0] . '_N';
			}
			$b = explode( '_E', $a[1], 2 );
			if ( count( $b ) < 2 ) {
				$b = explode( '_W', $a[1], 2 );
				if ( count( $b ) < 2 ) {
					return -2;
				}
				$this->long = $b[0] . '_W';
			} else {
				$this->long = $b[0] . '_E';
			}
			$args = $b[1];
		}

		$args = explode( " ", trim( str_replace( '=', ':', str_replace( '_', ' ', $args ) ) ) );
		$this->par = [];
		foreach ( $args as $arg ) {
			$parts = array_map( 'trim', explode( ':', $arg, 2 ) );
			if ( count( $parts ) == 2 && $parts[0] && $parts[1] ) {
				$this->par[$parts[0]] = $parts[1];
			}
		}
		if ( isset( $this->par['precision'] ) ) {
			$a = intval( $this->par['precision'] );
			if ( ( $a < 0 ) || ( $a > 12 ) ) {
				$a = 6;
			}
			$this->par['precision'] = $a;
		} else {
			$this->par['precision'] = 6;
		}

		return 0;
	}

	# setScales() code by Egil Kvaleberg <egil@kvaleberg.no>
	private function setScales() {
		if ( !isset( $this->par['scale'] ) || ( $this->par['scale'] < 100 ) ) {
			$scaleByType = [
				'country' => 10000000,
				'state' => 3000000,
				'adm1st' => 1000000,
				'adm2nd' => 300000,
				'city' => 100000,
				'mountain' => 100000,
				'isle' => 100000,
				'waterbody' => 100000,
				'airport' => 30000,
				'landmark' => 10000
			];
			if ( isset( $this->par['type'] ) && isset( $scaleByType[$this->par['type']] ) ) {
				$this->par['scale'] = $scaleByType[$this->par['type']];
			} else {
				$this->par['scale'] = 100000;
			}
		}

		/* Google and Tiger span */
		$this->google = $this->par['scale'] * 1.0 / 1000000;

		/* Mapquest zoom 0 ... 9 */
		$this->mapquest = intval( 18.0 - log( $this->par['scale'] ) );
		if ( $this->mapquest < 0 ) {
			$this->mapquest = 0;
		}
		if ( $this->mapquest > 9 ) {
			$this->mapquest = 9;
		}

		/* MSN altitude */
		$this->msn = intval( $this->par['scale'] * 143 / 1000000 );
		if ( $this->msn < 1 ) {
			$this->msn = 1;
		}

		/* Multimap fixed scales */
		$min = [ 1, 7000, 15000, 35000, 70000, 140000, 310000,
			700000, 1400000, 2800000, 6300000, 14000000, 30000000 ];
		$mm = [ 5000, 10000, 20000, 50000, 100000, 200000, 500000,
			1000000, 2000000, 4000000, 10000000, 20000000, 40000000 ];
		$i = 0;
		$c = count( $min );
		while ( ( $i < $c ) && ( $this->par['scale'] >= $min[$i] ) ) {
			$this->multimap = $mm[$i];
			$i++;
		}

		/* OSM zoom */
		$this->osmzoom = (int)round( log( 500000000 / $this->par['scale'], 2 ) );
		if ( $this->osmzoom < 0 ) {
			$this->osmzoom = 0;
		}
		if ( $this->osmzoom > 18 ) {
			$this->osmzoom = 18;
		}
		$this->osmzoommap = $this->osmzoom - 1;
		if ( $this->osmzoommap < 0 ) {
			$this->osmzoommap = 0;
		}
	}

	/**
	 * Get parameters
	 *
	 * @param string|null $param
	 * @return bool
	 */
	private function getParams( $param = null ) {
		global $wgServer, $wgArticlePath;
		$request = $this->getRequest();

		$this->locName = $request->getText( 'pagename' );
		if ( $this->locName == '' ) {
			$this->locName = $request->getText( 'locname' );
		}

		$referrer = $request->getVal( 'referrer' ) ?: $request->getHeader( 'referer' );
		if ( $this->locName == '' && $referrer ) {
			// check if internal referrer
			if ( strpos( $referrer, $wgServer ) !== false ) {
				// check if referrer is in format /index.php?title=<title>
				// otherwise, format should be /wiki/<title> (or whatever, based on $wgArticlePath)
				$url = parse_url( $referrer );

				$values = [];
				if ( isset( $url['query'] ) ) {
					parse_str( $url['query'], $values );
				}

				if ( isset( $values['title'] ) ) {
					$title = $values['title'];
				} else {
					$path = $url['path'] ?? '';
					$title = WebRequest::extractTitle( $path, $wgArticlePath );
					$title = $title['title'] ?? '';
				}

				// get text for referrer page
				$title = Title::newFromText( $title );
				if ( $title ) {
					$this->locName = $title->getText();
				}
			}
		}

		$this->params = $param;
		// check if form is submitted, otherwise leave params null
		if ( $param === null && in_array( 'params', $request->getValueNames() ) ) {
			$this->params = $request->getText( 'params' );
		}

		if ( $this->params === '' ) {
			$this->errorMsgs[] = $this->msg( 'mapsources-noparams' )->text();
			return false;
		} elseif ( $this->splitParameters() != 0 ) {
			$this->errorMsgs[] = $this->msg( 'mapsources-incorrectparams', $this->params )->text();
			return false;
		}

		$this->lat = new MapSourcesMath( $this->lat, $this->par['precision'], 'lat', 2 );
		if ( $this->lat->error != 0 ) {
			$this->errorMsgs[] = $this->msg( 'mapsources-incorrectlat' )->text();
			return false;
		}
		$this->long = new MapSourcesMath( $this->long, $this->par['precision'], 'long', 2 );
		if ( $this->long->error != 0 ) {
			$this->errorMsgs[] = $this->msg( 'mapsources-incorrectlong' )->text();
			return false;
		}
		$this->setScales();

		return true;
	}

	private function replaceText( $text ) {
		$origParams = abs( $this->lat->dec ) . '_' . $this->lat->coord['NS'] . '_'
			. abs( $this->long->dec ) . '_' . $this->long->coord['EW'];
		if ( count( $this->par ) > 0 ) {
			foreach ( $this->par as $key => $value ) {
				if ( $key != 'precision' ) {
					$origParams .= '_' . $key . ':' . $this->par[$key];
				}
			}
		}

		$geo = new MapSourcesTransform( $this->lat->dec, $this->long->dec );
		$errorMsg = '(' . $this->msg( 'mapsources-outofrange' )->inContentLanguage()->text() . ')';
		if ( $geo->utm['error'] == 0 ) {
			$utmError = '';
		} else {
			$utmError = $errorMsg;
		}
		if ( $geo->utm33['error'] == 0 ) {
			$utm33Error = '';
		} else {
			$utm33Error = $errorMsg;
		}
		if ( $geo->osgb36['error'] == 0 ) {
			$osgb36Error = '';
		} else {
			$osgb36Error = $errorMsg;
		}
		if ( $geo->ch1903['error'] == 0 ) {
			$ch1903Error = '';
		} else {
			$ch1903Error = $errorMsg;
		}
		if ( $geo->nztm['error'] == 0 ) {
			$nztmError = '';
		} else {
			$nztmError = $errorMsg;
		}

		$replace = [
			'{latdegdec}' => $this->lat->coord['dec'],
			'{latdegabs}' => abs( $this->lat->coord['deg'] ),
			'{latdegint}' => $this->lat->coord['deg'],
			'{latmindec}' => round( $this->lat->coord['min'] + $this->lat->coord['sec'] / 60, 4 ),
			'{latminint}' => $this->lat->coord['min'],
			'{latsecdec}' => $this->lat->coord['sec'],
			'{latsecint}' => round( $this->lat->coord['sec'] ),
			'{latNS}' => $this->lat->coord['NS'],

			'{londegdec}' => $this->long->coord['dec'],
			'{londegabs}' => abs( $this->long->coord['deg'] ),
			'{londegneg}' => -$this->long->dec,
			'{londegint}' => $this->long->coord['deg'],
			'{lonmindec}' => round( $this->long->coord['min'] + $this->long->coord['sec'] / 60, 4 ),
			'{lonminint}' => $this->long->coord['min'],
			'{lonsecdec}' => $this->long->coord['sec'],
			'{lonsecint}' => round( $this->long->coord['sec'] ),
			'{lonEW}' => $this->long->coord['EW'],

			'{scale}' => $this->par['scale'],
			'{mmscale}' => $this->multimap,
			'{altitude}' => $this->msn,
			'{zoom}' => $this->mapquest,
			'{span}' => $this->google,
			'{osmzoom}' => $this->osmzoom,
			'{osmzoommap}' => $this->osmzoommap,

			'{type}' => $this->par['type'] ?? '',
			'{region}' => $this->par['region'] ?? '',
			'{globe}' => $this->par['globe'] ?? '',
			'{params}' => $origParams,

			'{utmzone}' => $geo->utm['zone'] . $geo->utm['zoneLetter'],
			'{utmnorthing}' => round( $geo->utm['northing'] ),
			'{utmeasting}' => round( $geo->utm['easting'] ),
			'{utm33northing}' => round( $geo->utm33['northing'] ),
			'{utm33easting}' => round( $geo->utm33['easting'] ),
			'{osgb36ref}' => $geo->osgb36['ref'],
			'{osgb36northing}' => round( $geo->osgb36['northing'] ),
			'{osgb36easting}' => round( $geo->osgb36['easting'] ),
			'{ch1903northing}' => round( $geo->ch1903['northing'] ),
			'{ch1903easting}' => round( $geo->ch1903['easting'] ),
			'{nztmnorthing}' => round( $geo->nztm['northing'] ),
			'{nztmeasting}' => round( $geo->nztm['easting'] ),

			'{utmerror}' => $utmError,
			'{utm33error}' => $utm33Error,
			'{osgb36error}' => $osgb36Error,
			'{ch1903error}' => $ch1903Error,
			'{nztmerror}' => $nztmError,
			'{locname}' => $this->locName
		];

		return strtr( $text, $replace );
	}
}
