<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https:///home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/admin /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/includes /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/index.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/languages /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/LICENSE.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/public /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/README.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uninstall.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uri_of_page_describing_plugin_and_updates.php
 * @since             1.0.0
 * @package           Badge_Wp
 *
 * @wordpress-plugin
 * Plugin Name:       BadgeWP
 * Plugin URI:        https:///home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/admin /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/includes /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/index.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/languages /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/LICENSE.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/public /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/README.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uninstall.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uri_of_page_describing_plugin_and_updates.php
 * Description:       This plug in allows you to add a badge to your WP site without code.
 * Version:           1.0.0
 * Author:            Andrew
 * Author URI:        https:///home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/admin /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/includes /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/index.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/languages /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/LICENSE.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/public /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/README.txt /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uninstall.php /home/baldur/Downloads/URI_Of_Page_Describing_Plugin_and_Updates/uri_of_page_describing_plugin_and_updates/uri_of_page_describing_plugin_and_updates.php/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       badge-wp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BADGE_WP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-badge-wp-activator.php
 */
function activate_badge_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-badge-wp-activator.php';
	Badge_Wp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-badge-wp-deactivator.php
 */
function deactivate_badge_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-badge-wp-deactivator.php';
	Badge_Wp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_badge_wp' );
register_deactivation_hook( __FILE__, 'deactivate_badge_wp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-badge-wp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_badge_wp() {

	$plugin = new Badge_Wp();
	$plugin->run();

}
run_badge_wp();

// Add an admin menu for the badge placement settings
function badge_admin_menu() {
    add_menu_page(
        'Badge Settings',
        'Badge Settings',
        'manage_options',
        'badge-settings',
        'badge_settings_page_html',
        'dashicons-admin-generic'
    );
}

add_action('admin_menu', 'badge_admin_menu');

// Function to display the badge settings page
function badge_settings_page_html() {
    ?>
    <div class="wrap">
        <h1>Badge Settings</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('badge-settings');
            do_settings_sections('badge-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register settings
function badge_settings_init() {
    register_setting('badge-settings', 'badge_placement');

    add_settings_section(
        'badge_settings_section',
        'Badge Placement',
        '',
        'badge-settings'
    );

    add_settings_field(
        'badge-placement',
        'Place Badge in the',
        'badge_placement_callback',
        'badge-settings',
        'badge_settings_section'
    );
}

add_action('admin_init', 'badge_settings_init');

// Callback to display the option field
function badge_placement_callback() {
    $setting = get_option('badge_placement');
    ?>
    <select name="badge_placement">
        <option value="header" <?php selected($setting, 'header'); ?>>Header</option>
        <option value="footer" <?php selected($setting, 'footer'); ?>>Footer</option>
    </select>
    <?php
}

// Function to add badge based on the user setting.
function add_image_badge() {
    $badge_url = plugins_url('assets/badge.jpg', __FILE__);
    $badge_placement = esc_html(get_option('badge_placement', 'header'));

    if ($badge_placement == 'header') {
        echo '<div><img src="' . esc_url($badge_url) . '" alt="Badge" /></div>';
    }
}

function add_image_badge_footer() {
    $badge_url = plugins_url('assets/badge.jpg', __FILE__);
    $badge_placement = esc_html(get_option('badge_placement', 'header'));

    if ($badge_placement == 'footer') {
        echo '<div><img src="' . esc_url($badge_url) . '" alt="Badge" /></div>';
    }
}

add_action('wp_head', 'add_image_badge');
add_action('wp_footer', 'add_image_badge_footer');
