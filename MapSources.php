<?php
/*
 * MapSources extension
 *
 * @package MediaWiki
 * @subpackage Extensions
 *
 * @author Roland Unger
 * @copyright Copyright © 2007-2012 Roland Unger
 *
 * @license https://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'MapSources' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['MapSources'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['MapSourcesAlias'] = __DIR__ . '/MapSources.i18n.alias.php';
	$wgExtensionMessagesFiles['MapSourcesMagic'] = __DIR__ . '/MapSources.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for MapSources extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the MapSources extension requires MediaWiki 1.32+' );
}
