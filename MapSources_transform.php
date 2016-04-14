<?php
/*
 * Convert latitude and longitude geographical coordinates to
 * Transverse Mercator coordinates.
 *
 * @package MediaWiki
 * @subpackage Extensions
 *
 * @author Egil Kvaleberg <egil@kvaleberg.no>
 * @copyright Copyright © 2005, Egil Kvaleberg <egil@kvaleberg.no>
 * @author Roger W Haworth
 * @copyright Copyright © 2005, Roger W Haworth
 * @author wikipedia:de:Benutzer:Meleager
 * @copyright Copyright © 2005, wikipedia:de:Benutzer:Meleager
 *
 * @author Roland Unger
 *
 * @copyright Copyright © 2007, Roland Unger
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * 2.0 or later
 *
 * ----------------------------------------------------------------------
 *
 * See also:
 * http://www.posc.org/Epicentre.2_2/DataModel/ExamplesofUsage/eu_cs34h.html
 * http://kanadier.gps-info.de/d-utm-gitter.htm
 * http://www.gpsy.com/gpsinfo/geotoutm/
 * http://www.colorado.edu/geography/gcraft/notes/gps/gps_f.html
 * http://search.cpan.org/src/GRAHAMC/Geo-Coordinates-UTM-0.05/
 * UK Ordnance Survey grid (OSBG36): http://www.gps.gov.uk/guidecontents.asp
 * Swiss CH1903: http://www.gps.gov.uk/guidecontents.asp
 *
 * ----------------------------------------------------------------------
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

class MapSourcesTransform {
	public $lat = 0;
	public $long = 0;

	public $ellWGS84 = array(
		'maxAxis'       => 6378137.0,
		'minAxis'       => 6356752.315,
		'ecc'           => 0.081819190843,
		'eccSquared'    => 0.006694379990,
		'flattening'    => 0.003352810665,
		'invFlattening' => 298.257223563
	);
	public $ellAiry1830 = array(
		'maxAxis'       => 6377563.396,
		'minAxis'       => 6356256.909,
		'ecc'           => 0.081673374328,
		'eccSquared'    => 0.006670540074,
		'flattening'    => 0.003340850640,
		'invFlattening' => 299.3249647
	);
	public $ellBessel1841 = array(
		'maxAxis'       => 6377397.155,
		'minAxis'       => 6356078.965,
		'ecc'           => 0.081696829804,
		'eccSquared'    => 0.006674372,
		'flattening'    => 0.003342773182,
		'invFlattening' => 299.1528128
	);

	public $utm = array(
		'easting'             => 0,
		'northing'            => 0,
		'error'               => -1,
		'zone'                => 0,
		'zoneLetter'          => '',
		'centralMeridian'     => 0,
		'scale'               => 0.9996,
		'eastingOffset'       => 500000.0,
		'northingOffset'      => 0.0,
		'northingOffsetSouth' => 10000000.0
	);
	public $utm33;
	public $osgb36 = array(
		'easting'             => 0,
		'northing'            => 0,
		'ref'                 => '',
		'error'               => -1,
		'scale'               => 0.9996013,
		'eastingOffset'       => 400000.0,
		'northingOffset'      => -100000.0,
		'northingOffsetSouth' => 0.0
	);
	public $ch1903 = array(
		'easting'             => 0,
		'northing'            => 0,
		'error'               => -1
	);
	public $nztm = array(
		'easting'             => 0,
		'northing'            => 0,
		'error'               => -1,
		'scale'               => 0.9996,
		'eastingOffset'       => 1600000.0,
		'northingOffset'      => 0.0,
		'northingOffsetSouth' => 10000000.0
	);


	public function __construct( $lat, $long ) {
		return $this->getValues( $lat, $long );
	}

	protected function getValues( $lat, $long ) {
		if ($lat < -90 || $lat > 90 || $long <= -180 || $long > 180) {
			return false;
		}

		$this->lat = $lat;
		$this->long = $long;

		$this->utm33 = $this->utm;
		$this->utm33['zone'] = 33;

		$this->getUTM( $this->utm );
		$this->getUTM33( $this->utm33 );
		$this->getOSGB36( $this->osgb36 );
		$this->getCH1903( $this->ch1903 );
		$this->getNZTM( $this->nztm );

		return true;
	}

	protected function deg2rad( $deg ) {
		return $deg * M_PI / 180;
	}

	protected function rad2deg( $rad ) {
		return $rad * 180 / M_PI;
	}

	protected function getCentralMeridian( $zone ) {
		return ( $zone * 6.0 ) - 183.0;
	}

	# Code by Egil Kvaleberg <egil@kvaleberg.no>
	protected function getUTMZone( &$utmArray ) {
		if ( $this->long >= 180 ) {
			$long = $this->long - 360;
		} else {
			$long = $this->long;
		}

		if ( $this->lat >= 56.0 && $this->lat < 64.0 && $long >= 3.0 && $long < 12.0 ) {
			$utmArray['zone'] = 32;
		} elseif ( $this->lat >= 72.0 && $this->lat < 84.0 && $long >= 0.0 && $long < 42.0 ) {
			if ( $long < 9.0 ) {
				$utmArray['zone'] = 31;
			} elseif ( $long < 21.0 ) {
				$utmArray['zone'] = 33;
			} elseif ( $long < 33.0 ) {
				$utmArray['zone'] = 35;
			} else {
				$utmArray['zone'] = 37;
			}
		} else {
			$utmArray['zone'] = floor( ( $long + 180.0 ) / 6 ) + 1;
		}

		$c = floor( ($this->lat + 96) / 8 );
		/*                                000000000011111111112222 */
		/*                                012345678901234567890134 */
		$utmArray['zoneLetter'] = substr( 'CCCDEFGHJKLMNPQRSTUVWXXX', $c, 1 );

		$utmArray['centralMeridian'] = $this->getCentralMeridian( $utmArray['zone'] );
	}

	# Code by Egil Kvaleberg <egil@kvaleberg.no>
	protected function getMeridianDistance( $radius, $lat, $e2 ) {
		$e4 = $e2 * $e2;
		$e6 = $e4 * $e2;

		return $radius * (
			   ( 1 - $e2 / 4 - 3 * $e4 / 64 - 5 * $e6 / 256 ) * $lat
			 - ( 3 * $e2 / 8 + 3 * $e4 / 32 + 45 * $e6 / 1024 ) * sin( 2 * $lat )
			 + ( 15 * $e4 / 256 + 45 * $e6 / 1024 ) * sin( 4 * $lat )
			 - ( 35 * $e6 / 3072 ) * sin( 6 * $lat )
		);
	}

	# Code by Egil Kvaleberg <egil@kvaleberg.no>
	protected function getTM( $latOrigin, $longOrigin, &$utmArray, &$model ) {
		if ( $this->lat < -80 || $this->lat > 84 || $this->long < -180 || $this->long > 180 ) {
			$utmArray['error'] = -1;
			return false;
		}

		if ( $this->long >= 180 ) {
			$long = $this->long - 360;
		} else {
			$long = $this->long;
		}

		$lat = $this->deg2rad( $this->lat );
		$long = $this->deg2rad( $long );
		$latOrig = $this->deg2rad( $latOrigin );
		$longOrig = $this->deg2rad( $longOrigin );

		$sinLat = sin( $lat );
		$sin2Lat = $sinLat * $sinLat;
		$cosLat = cos( $lat );
		$cos2Lat = $cosLat * $cosLat;
		$tanLat = $sinLat / $cosLat;
		$tan2Lat = $tanLat * $tanLat;

		$e2 = $model['eccSquared'];
		$e2pr = $e2 / (1 - $e2);
		$radius = $model['maxAxis'];

		$v = $radius / sqrt( 1 - $e2 * $sin2Lat );
		$t = $tan2Lat;
		$c = $e2pr * $cos2Lat;
		$a = ( $long - $longOrig ) * $cosLat;
		$m = $this->getMeridianDistance( $radius, $lat, $e2 );

		if ($latOrigin != 0) {
			$m0 = $this->getMeridianDistance( $radius, $latOrig, $e2 );
		} else {
			$m0 = 0.0;
		}

		$utmArray['northing'] = $utmArray['northingOffset'] +
			$utmArray['scale'] * ( ( $m - $m0 ) + $v * $tanLat * (
				$a * $a / 2 + ( 5 - $t + 9 * $c + 4 * $c * $c ) * pow( $a, 4 ) / 24
				+ ( 61 - 58 * $t + $t * $t + 600 * $c - 330 * $e2pr) * pow( $a, 6 ) / 720
			));

		if ($this->lat < 0) {
			$utmArray['northing'] += $utmArray['northingOffsetSouth'];
		}

		$utmArray['easting'] = $utmArray['eastingOffset'] +
			$utmArray['scale'] * $v * (
				$a + ( 1 - $t + $c ) * pow( $a, 3 ) / 6
				+ (5 - 18 * $t + pow( $t, 2 ) + 72 * $c - 58 * $e2pr) * pow( $a, 5 ) / 120
			);

		$utmArray['error'] = 0;

		return true;
	}

	protected function getUTM( &$utmArray ) {
		$this->getUTMZone( $utmArray );
		return $this->getTM( 0.0, $utmArray['centralMeridian'], $utmArray, $this->ellWGS84 );
	}

	protected function getUTM33( &$utmArray ) {
		$utmArray['zone'] = 33;
		$utmArray['zoneLetter'] = 'V';
		$utmArray['centralMeridian'] = $this->getCentralMeridian( 33 );
		return $this->getTM( 0.0, $utmArray['centralMeridian'], $utmArray, $this->ellWGS84 );
	}

	# Code by Egil Kvaleberg <egil@kvaleberg.no>
	# Fix by Roger W Haworth

	protected function getOSGB36( &$utmArray ) {
		$this->getUTMZone( $utmArray );
		if ( !$this->getTM( 49.0, -2.0, $utmArray, $this->ellAiry1830 ) ) {
			return false;
		}

		# fix by Roger W Haworth
		$gridX = floor( $utmArray['easting'] / 100000 );
		$gridY = floor( $utmArray['northing'] / 100000 );

		# outside area for OSGB36
		if ( $gridX < 0 || $gridX > 6 || $gridY < 0 || $gridY > 12 ) {
			$utmArray['error'] = -1;
			return false;
		}

		/*          0000000000111111111122222 */
		/*          0123456789012345678901234 */
		$letters = 'ABCDEFGHJKLMNOPQRSTUVWXYZ';

		$c1 = substr( $letters, ( 17 - intval( $gridY / 5 ) * 5 ) + intval( $gridX / 5 ), 1 );
		$c2 = substr( $letters, ( 20 - ( $gridY % 5 ) * 5 ) + $gridX % 5, 1 );
		$e = sprintf( "%05d", $utmArray['easting'] % 100000 );
		$n = sprintf( "%05d", $utmArray['northing'] % 100000 );

		$utmArray['error'] = 0;
		$utmArray['ref'] = $c1 . $c2 . $e . $n;

		return true;
	}

	# Code by [[wikipedia:de:Benutzer:Meleager]]
	protected function getCH1903( &$ch1903Array ) {
		# outside reasonable range
		if ( $this->lat < 45.5 || $this->lat > 48 || $this->long < 5.0 || $this->long > 11) {
			return false;
		}

		# Approximation formula according to
		# http://www.swisstopo.ch/pub/down/basics/geo/system/swiss_projection_de.pdf
		# chapter 4.1, page 11.
		$pp = ( $this->lat * 3600 - 169028.66 ) / 10000;
		$pp2 = $pp * $pp;
		$lp = ( $this->long * 3600 - 26782.5 ) / 10000;
		$lp2 = $lp * $lp;

		$ch1903Array['northing'] = 200147.07 + 308807.95 * $pp + 3745.25 * $lp2 +
			76.63 * $pp2 - 194.56 * $lp2 * $pp + 119.79 * $pp2 * $pp;
		$ch1903Array['easting'] = 600072.37 + 211455.93 * $lp - 10938.51 * $lp * $pp -
			0.36 * $lp * $pp2 - 44.54 * $lp2 * $lp;
		$ch1903Array['error'] = 0;

		return true;
	}

	# New Zealand Geodetic Datum 2000 (NZGD2000)
	# See also http://www.linz.govt.nz/core/surveysystem/geodeticinfo/geodeticdatums/
	# Northernmost point - Nugent Island, in the Kermadec Islands: -29° S
	# Southernmost point - Jacquemart Island (off the south coast of Campbell Island)
	# in the Campbell Island group: -53° S
	# Westernmost point - Cape Lovitt, Auckland Islands: 165° E
	# Easternmost point - Kahuitara Point, Pitt Island, in the Chatham Islands: 178° E
	protected function getNZTM( &$utmArray ) {
		# outside reasonable range
		if ( $this->lat > -29.0 || $this->lat < -53.0 || $this->long > 178.0 || $this->long < 165.0 ) {
			return false;
		}
		return $this->getTM( 0.0, 173.0, $utmArray, $this->ellWGS84 );
	}
}
