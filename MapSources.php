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

require_once( dirname( __FILE__ ) . '/GeoMath.php' );
require_once( dirname( __FILE__ ) . '/GeoTransform.php' );

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['MapSources'] = $dir . 'MapSources.i18n.php';

$wgExtensionCredits['specialpage']['MapSources'] = array( 
	'path' => __FILE__,
	'name' => 'MapSources',
	'url' => 'http://www.wikivoyage.org/tech/MapSources_extension',
	'description' => 'Map sources extension',
	'descriptionmsg' => 'mapsources-desc',
	'author' => 'Roland Unger, Egil Kvaleberg',
	'version' => '1.05' );

$wgAutoloadClasses['MapsourcesPage'] = dirname( __FILE__ ) . '/MapSources_body.php';
$wgSpecialPages['Mapsources'] = 'MapsourcesPage';

?>
