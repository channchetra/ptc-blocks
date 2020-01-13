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
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 158,
        'title' => 'PTC Block 1',
        'icon' => 'dashicons dashicons-welcome-widgets-menus',
        'keywords' => array(
            0 => 'List Post',
            1 => 'Style1',
        ),
        'slug' => 'lazyblock/ptc-block-1',
        'description' => '',
        'category' => 'lazyblocks',
        'category_label' => 'lazyblocks',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
            ),
        ),
        'controls' => array(
            'control_b04b724e77' => array(
                'label' => 'Title',
                'name' => 'block_title',
                'type' => 'text',
                'child_of' => '',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'inspector',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_1a6a644950' => array(
                'label' => 'Category ID',
                'name' => 'cat_id',
                'type' => 'number',
                'child_of' => '',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'inspector',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_d2190e430f' => array(
                'label' => 'Posts per Page',
                'name' => 'posts_per_page',
                'type' => 'range',
                'child_of' => '',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'inspector',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '1',
                'max' => '10',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_766ba645fe' => array(
                'label' => 'Link to',
                'name' => 'link_cat_id',
                'type' => 'text',
                'child_of' => '',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'inspector',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_cd297b4624' => array(
                'label' => 'Character',
                'name' => 'character',
                'type' => 'range',
                'child_of' => '',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'inspector',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '10',
                'max' => '150',
                'step' => '5',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
        ),
        'code' => array(
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => true,
            'use_php' => true,
        ),
        'condition' => array(
            0 => 'page',
        ),
    ) );
    
endif;

// filter for Frontend output.
add_filter( 'lazyblock/ptc-block-1/frontend_callback', 'ptc_block_01', 10, 2 );
// filter for Editor output.
add_filter( 'lazyblock/ptc-block-1/editor_callback', 'ptc_block_01', 10, 2 );
if ( ! function_exists( 'ptc_block_01' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function ptc_block_01( $output, $attributes ) {
        ob_start();    
        // WP_Query arguments
        $args = array(
            'post_type'             => array( 'post' ),
            'post_status'           => array( 'publish' ),
            'posts_per_page'        => $attributes['posts_per_page'],
            // 'offset'        		=> $atts['offset'],
            'cat'					=> $attributes['cat_id']
        );
        $block_2_query = new WP_Query( $args );
        // The Loop
        if ( $block_2_query->have_posts() ) { 
            // To display the block title use the_block_title()
            if( $attributes['block_title'] != '' ){
                $arr = [
                    'cat_id'	=> $attributes['link_cat_id'], 
                    'title'	=> $attributes['block_title'],
                ];
                ptc_the_block_title( $arr );
            } ?>

            <div class="b-2">

            <?php
            $min = 4;
            $data = array();
            while( $block_2_query -> have_posts() ) {
                $block_2_query->the_post();
                array_push( 
                    $data, 
                    array(
                        'title'		=> get_the_title(),
                        'permalink'	=> get_the_permalink(),
                        'date'		=> get_the_date(),
                    )
                );
                $min --;
            }
            if( $min > 0 ) {
                while( $min > 0 ) {
                    array_push( 
                        $data, 
                        array(
                            'title' 	=> '',
                            'permalink'	=> '',
                            'date'		=> '',
                        )
                    );
                    $min --;
                }
            }
            $html = '<div class="b-item-wrap">
                        <div class="b-item">
                            <div class="b-title margin-bottom-15"><a href="%s">%s</a></div>
                            <div class="b-cat">%s</div>
                        </div>
                    </div>';
            foreach( $data as $arr ){
                printf( $html, $arr['permalink'],  mb_strimwidth( $arr['title'], 0, 85, '...' ),  $arr['date'] );
            }
            ?>
        </div>
        <?php
        }
        wp_reset_postdata();
        // Return code
        return ob_get_clean();
    }
endif;