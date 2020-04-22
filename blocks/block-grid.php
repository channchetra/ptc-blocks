<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://www.channchetra.com
 * @since      1.0.0
 *
 * @package    Ptc_Blocks
 * @subpackage Ptc_Blocks/blocks
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Ptc_Blocks
 * @subpackage Ptc_Blocks/blocks
 * @author     Chann Chetra <chetra-chann@mptc.gov.kh>
 */
add_filter( 'wp_bootstrap_blocks_container_classes', 'my_custom_container_classes', 10, 2 );
function my_custom_container_classes( $classes, $attributes ) {
    if ( ! empty( $attributes['className'] ) ) {
        return [ 'container', $attributes['className']];
    }else{
        return [ 'container', 'plr-lg-30', 'plr-md-30', 'mt-5p' ];
    }
}
add_filter( 'wp_bootstrap_blocks_container_default_attributes', 'my_container_default_attributes', 10, 1 );
function my_container_default_attributes( $default_attributes ) {
    $default_attributes['marginAfter'] = '';
    return $default_attributes;
}