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

class MapsourcesPage extends SpecialPage {

	var $lat = 0;
	var $long = 0;
	var $params = '';
	var $par;
	var $errorMsgs;
	var $locName = '';

	var $google = 0.1;
	var $mapquest = 9;
	var $msn = 1;
	var $multimap = 100000;
	var $osmzoom = 12;
	var $osmzoommap = 10;

	public function __construct() {
		parent::__construct( 'Mapsources' );
	}

	# used by $this->setHeaders()
	function getDescription() {
		return wfMsg( 'mapsources' );
	}

	public function execute( $par ) {
		global $wgOut;

		$this->setHeaders();

		if ( $this->getParams( $par ) == 0 ) {
			$this->makeForm( true );
			$title = Title::makeTitleSafe( NS_PROJECT, wfMsg( 'mapsources' ) );
			if ( is_object( $title ) && $title->exists() ) {
				$rev = Revision::newFromTitle( $title );
				$wgOut->addWikiText( $this->replaceText( $rev->getText() ) );
				return true;
			} else {
				$title = Title::makeTitleSafe( NS_PROJECT, wfMsgForContent( 'mapsources' ) );
				if ( is_object( $title ) && $title->exists() ) {
					$rev = Revision::newFromTitle( $title );
					$wgOut->addWikiText( $this->replaceText( $rev->getText() ) );
					return true;
				} else $this->errorMsgs[] = wfMsg( 'mapsources-nopage', wfMsgForContent( 'mapsources' ) );
			}
		} else $this->makeForm( false );

		$this->outputErrorMsgs();
	}

	# makeForm() code by Rob Church <robchur@gmail.com>

	private function makeForm( $noErrors = false ) {
		global $wgScript, $wgOut;

		$wgOut->addWikiText( wfMsgNoTrans( 'mapsources-summary' ) );

		if ( $noErrors ) $input = $this->params;
		else $input = '0,0,scale=100000';

		$title = self::getTitleFor( 'Mapsources' );
		$form = '<fieldset><legend>' . wfMsgHtml( 'mapsources-search-legend' ) . '</legend>';
		$form .= Xml::openElement( 'form', array( 'method' => 'get', 'action' => $wgScript ) );
		$form .= Html::hidden( 'title', $title->getPrefixedText() );
		$form .= '<p>' . Xml::inputLabel( wfMsg( 'mapsources-coordinate' ), 'params', 'params', 80, $input );
		$form .= '&nbsp;' . Xml::submitButton( wfMsg( 'mapsources-go' ) ) . '</p>';
		$form .= Xml::closeElement( 'form' );
		$form .= '</fieldset>';

		$wgOut->addHtml( $form );
	}

	private function outputErrorMsgs() {
		global $wgOut;

		if ( count( $this->errorMsgs ) > 0 ) {
			$wgOut->addWikiText( '==' . wfMsg( 'mapsources-errormsgs' ) . '==' );
			foreach ( $this->errorMsgs as $msg ) $wgOut->addWikiText( '* ' . $msg );
		}
	}

	private function splitParameters() {
		$a = explode( ',', str_replace( ';', ',', $this->params ), 4 );
		$c = count( $a );
		if ( ( $c > 1 ) and ( $c < 4 ) ) {
			$this->lat = $a[0];
			$this->long = $a[1];
			if ( $c > 2 ) $args = $a[2]; else $args = '';
		} else {
			$a = explode( '_N_', $this->params, 2 );
			if ( count( $a ) < 2 ) {
				$a = explode( '_S_', $this->params, 2 );
				if ( count( $a ) < 2 ) return -1;
				$this->lat = $a[0] . '_S';
			} else $this->lat = $a[0] . '_N';
			$b = explode( '_E', $a[1], 2 );
			if ( count( $b ) < 2 ) {
				$b = explode( '_W', $a[1], 2 );
				if ( count( $b ) < 2 ) return -2;
				$this->long = $b[0] . '_W';
			} else $this->long = $b[0] . '_E';
			$args = $b[1];
		}

		$args = explode( " ", trim( str_replace( '=', ':', str_replace( '_', ' ', $args ) ) ) );
		$this->par = array();
		foreach ( $args as $arg ) {
			$parts = array_map( 'trim', explode( ':', $arg, 2 ) );
			if ( count( $parts ) == 2 && $parts[0] && $parts[1] ) $this->par[$parts[0]] = $parts[1];
		}
		if ( isset( $this->par['precision'] ) ) {
			$a = intval( $this->par['precision'] );
			if ( ( $a < 0 ) or ( $a > 12 ) ) $a = 6;
			$this->par['precision'] = $a;
		} else $this->par['precision'] = 6;

		return 0;
	}

	# setScales() code by Egil Kvaleberg <egil@kvaleberg.no>

	private function setScales() {
		if ( !isset( $this->par['scale'] ) or ( $this->par['scale'] < 100 ) ) {
			$scaleByType = array(
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
			);
			if ( isset( $this->par['type'] ) and isset( $scaleByType[$this->par['type']] ) )
				$this->par['scale'] = $scaleByType[$this->par['type']];
			else $this->par['scale'] = 100000;
		}

		/* Google and Tiger span */
		$this->google = $this->par['scale'] * 1.0 / 1000000;

		/* Mapquest zoom 0 ... 9 */
		$this->mapquest = intval( 18.0 - log( $this->par['scale'] ) );
		if ( $this->mapquest < 0 ) $this->mapquest = 0;
		if ( $this->mapquest > 9 ) $this->mapquest = 9;

		/* MSN altitude */
		$this->msn = intval( $this->par['scale'] * 143 / 1000000 );
		if ( $this->msn < 1 ) $this->msn = 1;

		/* Multimap fixed scales */
		$min = array( 1, 7000, 15000, 35000, 70000, 140000, 310000,
			700000, 1400000, 2800000, 6300000, 14000000, 30000000 );
		$mm = array( 5000, 10000, 20000, 50000, 100000, 200000, 500000,
			1000000, 2000000, 4000000, 10000000, 20000000, 40000000 );
		$i = 0;
		$c = count( $min );
		while ( ( $this->par['scale'] >= $min[$i] ) and ( $i < $c ) ) {
			$this->multimap = $mm[$i];
			$i++;
		}

		/* OSM zoom */
		$this->osmzoom = round( log( 500000000 / $this->par['scale'], 2 ) );
		if ( $this->osmzoom < 0 ) $this->osmzoom = 0;
		if ( $this->osmzoom > 18 ) $this->osmzoom = 18;
		$this->osmzoommap = $this->osmzoom - 1;
		if ( $this->osmzoommap < 0 ) $this->osmzoommap = 0;
	}

	private function getParams( $par ) {
		global $wgRequest, $wgSitename;

		$this->errorMsgs = array();

		$this->locName = $wgRequest->getText( 'pagename' );
		if ( $this->locName == '' ) $this->locName = $wgRequest->getText( 'locname' );
		if ( ( $this->locName == '' ) and isset( $_SERVER['HTTP_REFERER'] ) ) {
			$pos = strpos( $_SERVER['HTTP_REFERER'], strtolower( $wgSitename ) );
			if ( $pos === false ) ;
			else {
				$this->locName = substr( strrchr( $_SERVER['HTTP_REFERER'], '/' ), 1 );
				$pos = strpos( $this->locName, 'title=' );
				if ( $pos === false ) ;
				else {
					$this->locName = substr( $this->locName, $pos + 6 ) . '&';
					$this->locName = substr( $this->locName, 0, strpos( $this->locName, '&' ) );
				}
				$this->locName = ':' . urldecode( str_replace( '_', ' ', $this->locName ) );
				$this->locName = substr( strrchr( $this->locName, ':' ), 1 );
			}
		}

		$this->params = $par ? $par : $wgRequest->getText( 'params' );
		if ( $this->params == '' ) {
			$this->errorMsgs[] = wfMsg( 'mapsources-noparams' );
			return -1;
		}
		if ( $this->splitParameters() != 0 ) {
			$this->errorMsgs[] = wfMsg( 'mapsources-incorrectparams' ) . ' ' . $this->params;
			return -1;
		}

		$this->lat = new GeoMath( $this->lat, $this->par['precision'], 'lat', 2 );
		if ( $this->lat->error != 0 ) {
			$this->errorMsgs[] = wfMsg( 'mapsources-incorrectlat' );
			return -1;
		}
		$this->long = new GeoMath( $this->long, $this->par['precision'], 'long', 2 );
		if ( $this->long->error != 0 ) {
			$this->errorMsgs[] = wfMsg( 'mapsources-incorrectlong' );
			return -1;
		}
		$this->setScales();
		return 0;
	}

	private function replaceText( $text ) {
		$origParams = abs( $this->lat->dec ) . '_' . $this->lat->coord['NS'] . '_'
			. abs( $this->long->dec ) . '_' . $this->long->coord['EW'];
		if ( count( $this->par ) > 0 )
			foreach ( $this->par as $key => $value )
				if ( $key != 'precision' )
					$origParams .= '_' . $key . ':' . $this->par[$key];

		$Geo = new GeoTransform( $this->lat->dec, $this->long->dec );
		$errorMsg = '(' . wfMsgForContent( 'mapsources-outofrange' ) . ')';
		if ( $Geo->utm['error'] == 0 ) $utmError = ''; else $utmError = $errorMsg;
		if ( $Geo->utm33['error'] == 0 ) $utm33Error = ''; else $utm33Error = $errorMsg;
		if ( $Geo->osgb36['error'] == 0 ) $osgb36Error = ''; else $osgb36Error = $errorMsg;
		if ( $Geo->ch1903['error'] == 0 ) $ch1903Error = ''; else $ch1903Error = $errorMsg;
		if ( $Geo->nztm['error'] == 0 ) $nztmError = ''; else $nztmError = $errorMsg;

		$search = array(
			'{latdegdec}', '{latdegabs}', '{latdegint}', '{latmindec}', '{latminint}', '{latsecdec}', '{latsecint}', '{latNS}',
			'{londegdec}', '{londegabs}', '{londegneg}', '{londegint}', '{lonmindec}', '{lonminint}', '{lonsecdec}',
			'{lonsecint}', '{lonEW}',
			'{scale}', '{mmscale}', '{altitude}', '{zoom}', '{span}', '{osmzoom}', '{osmzoommap}',
			'{type}', '{region}', '{globe}', '{params}',
			'{utmzone}', '{utmnorthing}', '{utmeasting}', '{utm33northing}', '{utm33easting}',
			'{osgb36ref}', '{osgb36northing}', '{osgb36easting}',
			'{ch1903northing}', '{ch1903easting}', '{nztmnorthing}', '{nztmeasting}',
			'{utmerror}', '{utm33error}', '{osgb36error}', '{ch1903error}', '{nztmerror}',
			'{locname}' );

		$replace = array(
			$this->lat->coord['dec'],
			abs( $this->lat->coord['deg'] ),
			$this->lat->coord['deg'],
			round( $this->lat->coord['min'] + $this->lat->coord['sec'] / 60, 4 ),
			$this->lat->coord['min'],
			$this->lat->coord['sec'],
			round( $this->lat->coord['sec'] ),
			$this->lat->coord['NS'],

			$this->long->coord['dec'],
			abs( $this->long->coord['deg'] ),
			-$this->long->dec,
			$this->long->coord['deg'],
			round( $this->long->coord['min'] + $this->long->coord['sec'] / 60, 4 ),
			$this->long->coord['min'],
			$this->long->coord['sec'],
			round( $this->long->coord['sec'] ),
			$this->long->coord['EW'],

			$this->par['scale'],
			$this->multimap,
			$this->msn,
			$this->mapquest,
			$this->google,
			$this->osmzoom,
			$this->osmzoommap,

			isset( $this->par['type'] ) ? $this->par['type'] : '',
			isset( $this->par['region'] ) ? $this->par['region'] : '',
			isset( $this->par['globe'] ) ? $this->par['globe'] : '',
			$origParams,

			$Geo->utm['zone'] . $Geo->utm['zoneLetter'],
			round( $Geo->utm['northing'] ),
			round( $Geo->utm['easting'] ),
			round( $Geo->utm33['northing'] ),
			round( $Geo->utm33['easting'] ),
			$Geo->osgb36['ref'],
			round( $Geo->osgb36['northing'] ),
			round( $Geo->osgb36['easting'] ),
			round( $Geo->ch1903['northing'] ),
			round( $Geo->ch1903['easting'] ),
			round( $Geo->nztm['northing'] ),
			round( $Geo->nztm['easting'] ),

			$utmError,
			$utm33Error,
			$osgb36Error,
			$ch1903Error,
			$nztmError,
			$this->locName
		);

		return str_replace( $search, $replace, $text );
	}
}
