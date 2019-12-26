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

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_ptc_blockgrid' );
function add_ptc_blockgrid() {
    Block::make( __( 'PTC Row' ) )
    ->add_fields( array(
        Field::make( 'text', 'heading', __( 'Block Heading' ) ),
    ))
    ->set_category( 'custom-category', __( 'Custom Blocks' ), 'smiley' )
    ->set_icon( 'menu-alt' )
    ->set_inner_blocks( true )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>

        <!-- <div class="row"> -->
        <div class="block">
            <div class="block__heading">
                <h1><?php echo esc_html( $fields['heading'] ); ?></h1>
            </div><!-- /.block__heading -->
        </div><!-- /.block -->

        <?php
    } );
}