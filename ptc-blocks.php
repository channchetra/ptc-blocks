<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.channchetra.com
 * @since             1.0.0
 * @package           Ptc_Blocks
 *
 * @wordpress-plugin
 * Plugin Name:       PTC Block
 * Plugin URI:        https://www.mptc.gov.kh
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Chann Chetra
 * Author URI:        https://www.channchetra.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ptc-blocks
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
define( 'PTC_BLOCKS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ptc-blocks-activator.php
 */
function activate_ptc_blocks() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ptc-blocks-activator.php';
	Ptc_Blocks_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ptc-blocks-deactivator.php
 */
function deactivate_ptc_blocks() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ptc-blocks-deactivator.php';
	Ptc_Blocks_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ptc_blocks' );
register_deactivation_hook( __FILE__, 'deactivate_ptc_blocks' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */

require plugin_dir_path( __FILE__ ) . 'includes/class-ptc-blocks.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-grid.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-slider.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-1.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-video.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-gallery.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-link.php';
// require plugin_dir_path( __FILE__ ) . 'blocks/block-slider-full.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-service-row.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-message.php';
// require plugin_dir_path( __FILE__ ) . 'blocks/block-explore.php';
// require plugin_dir_path( __FILE__ ) . 'blocks/block-link.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-other-link.php';
require plugin_dir_path( __FILE__ ) . 'blocks/block-video-two.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ptc_blocks() {

	$plugin = new Ptc_Blocks();
	$plugin->run();

}
run_ptc_blocks();
