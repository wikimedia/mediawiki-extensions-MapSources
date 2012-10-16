<?php
/*
 * Adds new special page to the Wikivoyage project
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

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['MapSources'] = $dir . 'MapSources.i18n.php';
$wgAutoloadClasses['MapSourcesPage'] = $dir . 'MapSources_body.php';
$wgSpecialPages['Mapsources'] = 'MapSourcesPage';

$wgExtensionCredits['specialpage']['MapSources'] = array(
	'path' => __FILE__,
	'name' => 'MapSources',
	'url' => '//www.mediawiki.org/wiki/Extension:MapSources',
	'descriptionmsg' => 'mapsources-desc',
	'author' => array( 'Roland Unger', 'Egil Kvaleberg' ),
	'version' => '1.06'
);
