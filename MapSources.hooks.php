<?php

class MapSourcesHooks {
	public static function parserHooks( Parser &$parser ) {
		$parser->setFunctionHook( 'dd2dms', 'MapSourcesHooks::wfdd2dms' );
		$parser->setFunctionHook( 'deg2dd', 'MapSourcesHooks::wfdeg2dd' );
		$parser->setFunctionHook( 'geoLink', 'MapSourcesHooks::wfgeoLink' );
		$parser->setHook( 'slippymap', 'MapSourcesHooks::slippyMap' );
		return true;
	}

	/**
	 * This should be a temporary solution. In the long run, we should probably perform
	 * the required maintenance work on SlippyMap & set up wn own OSM tile server.
	 *
	 * In the meantime, this will find slippymap tags and convert them to something similar
	 * to https://de.wikipedia.org/w/index.php?title=MediaWiki:GeoHack.js
	 *
	 * @param string $input
	 * @param array $args
	 * @param Parser $parser
	 * @return string
	 */
	public static function slippyMap( $input, $args, Parser $parser ) {
		$span = 360.0 / ( 512.0 * pow( 2, $args['z'] ) ) * 720 / 2;
		$bbox =
			( $args['lon'] - $span * cos( $args['lat'] * 0.0175 ) ).','.
			( $args['lat'] - $span / 2 ).','.
			( $args['lon'] + $span * cos( $args['lat'] * 0.0175 ) ).','.
			( $args['lat'] + $span / 2 );

		return
			Html::element( 'iframe', array(
				// based on https://de.wikipedia.org/w/index.php?title=MediaWiki:GeoHack.js
				'src' => '//toolserver.org/~kolossos/openlayers/embed.html?' . http_build_query( array(
					'layer' => strtolower( $args['layer'] ),
					'bbox' => $bbox,
					'marker' => $args['lat'].','.$args['lon']
				) ),
				'width' => $args['w'],
				'height' => $args['h'],
			) );
	}

	/**
	 * @param Parser $parser
	 * @return String
	 */
	public static function wfdeg2dd( Parser &$parser ) {
		$precision = -1;
		$args = func_get_args();
		array_shift( $args );
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
	 * @return string
	 */
	public static function wfdd2dms( Parser &$parser ) {
		$plus = '';
		$minus = '';
		$precision = 4;
		$args = func_get_args();
		array_shift( $args );
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
						if ( !is_numeric( $precision ) ) $precision = 4;
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
	 * @return string
	 */
	public static function wfgeoLink( Parser &$parser ) {
		$plusLat = '';
		$minusLat = '';
		$plusLong = '';
		$minusLong = '';
		$lat = 0;
		$long = 0;
		$precision = 4;
		$args = func_get_args();
		array_shift( $args );
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

		$args = array();
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
		}
		else {
			$args[] = '0';
		}

		return wfMsgReplaceArgs( $pattern, $args );
	}
}