<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https:///home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/admin /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/includes /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/index.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/languages /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/LICENSE.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/public /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/README.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uninstall.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uri_of_page_describing_plugin_and_updates.php
 * @since      1.0.0
 *
 * @package    Badge_Wp
 * @subpackage Badge_Wp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Badge_Wp
 * @subpackage Badge_Wp/includes
 * @author     Andrew <flaggx@gmail.com>
 */
class Badge_Wp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'badge-wp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
