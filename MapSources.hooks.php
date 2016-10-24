<?php

class MapSourcesHooks {
	public static function parserHooks( Parser &$parser ) {
		$parser->setFunctionHook( 'dd2dms', 'MapSourcesHooks::wfdd2dms' );
		$parser->setFunctionHook( 'deg2dd', 'MapSourcesHooks::wfdeg2dd' );
		return true;
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
}
