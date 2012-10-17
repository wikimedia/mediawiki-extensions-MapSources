<?php
/*
 * MapSources extension
 *
 * @package MediaWiki
 * @subpackage Extensions
 *
 * @author Roland Unger
 * @copyright Copyright © 2007-2012 Roland Unger
 * v 1.05 of 2012/08/30
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}

// autoloader
$wgAutoloadClasses['MapSourcesHooks'] = __DIR__ . '/MapSources.hooks.php';
$wgAutoloadClasses['MapSourcesPage'] = __DIR__ . '/MapSources_body.php';
$wgAutoloadClasses['MapSourcesMath'] = __DIR__ . '/MapSources_math.php';
$wgAutoloadClasses['MapSourcesTransform'] = __DIR__ . '/MapSources_transform.php';

// special page
$wgSpecialPages['Mapsources'] = 'MapSourcesPage';

// parser hooks
$wgHooks['ParserFirstCallInit'][] = 'MapSourcesHooks::parserHooks';

// extension & magic words i18n
$wgExtensionMessagesFiles['MapSources'] = __DIR__ . '/MapSources.i18n.php';
$wgExtensionMessagesFiles['MapSourcesMagic'] = __DIR__ . '/MapSources.i18n.magic.php';

// credits
$wgExtensionCredits['specialpage']['MapSources'] = array(
	'path' => __FILE__,
	'name' => 'MapSources',
	'url' => '//www.mediawiki.org/wiki/Extension:MapSources',
	'descriptionmsg' => 'mapsources-desc',
	'author' => array( 'Roland Unger', 'Egil Kvaleberg', 'Matthias Mullie' ),
	'version' => '1.07'
);
$wgExtensionCredits['parserhook']['MapSourcesMath'] = array(
	'path' => __FILE__,
	'name' => 'MapSourcesMath',
	'url' => '//www.mediawiki.org/wiki/Extension:MapSources',
	'descriptionmsg' => 'mapsources-math-desc',
	'author' => array( 'Roland Unger', 'Matthias Mullie' ),
	'version' => '1.07'
);
