<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       https:///home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/admin /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/includes /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/index.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/languages /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/LICENSE.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/public /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/README.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uninstall.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uri_of_page_describing_plugin_and_updates.php
 * @since      1.0.0
 *
 * @package    Badge_Wp
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
