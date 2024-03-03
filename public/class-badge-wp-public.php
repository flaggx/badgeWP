<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https:///home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/admin /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/includes /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/index.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/languages /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/LICENSE.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/public /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/README.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uninstall.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uri_of_page_describing_plugin_and_updates.php
 * @since      1.0.0
 *
 * @package    Badge_Wp
 * @subpackage Badge_Wp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Badge_Wp
 * @subpackage Badge_Wp/public
 * @author     Andrew <flaggx@gmail.com>
 */
class Badge_Wp_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Badge_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Badge_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/badge-wp-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Badge_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Badge_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/badge-wp-public.js', array( 'jquery' ), $this->version, false );

	}

}
