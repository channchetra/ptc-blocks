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
    $option = new Ptc_Blocks();
    lazyblocks()->add_block( array(
        'id' => 277,
        'title' => 'PTC Block Picture',
        'icon' => 'dashicons dashicons-format-gallery',
        'keywords' => array(
            0 => 'Photo',
            1 => 'Home Page',
        ),
        'slug' => 'lazyblock/ptc-block-picture',
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
            'control_83996a4a68' => array(
                'label' => 'Block Title',
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
            'control_aac8024828' => array(
                'label' => 'Category',
                'name' => 'cat_id',
                'type' => 'select',
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
                'choices' => $option->mptc_cat_listing(),
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
            'control_3f39b34f2e' => array(
                'label' => 'Link To',
                'name' => 'link_cat_id',
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
            'control_acdb814bd3' => array(
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
        ),
        'code' => array(
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
            'use_php' => true,
        ),
        'condition' => array(
            0 => 'page',
        ),
    ) );
    
endif;

// filter for Frontend output.
add_filter( 'lazyblock/ptc-block-picture/frontend_callback', 'ptc_picture_block_output', 10, 2 );
// filter for Editor output.
add_filter( 'lazyblock/ptc-block-picture/editor_callback', 'ptc_picture_block_output', 10, 2 );
if ( ! function_exists( 'ptc_picture_block_output' ) ) :
    /**
     * Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function ptc_picture_block_output( $output, $attributes ) {
        ob_start();    
        // WP_Query arguments
        $args = array(
            'post_type'             => array( 'post' ),
            'post_status'           => array( 'publish' ),
            'posts_per_page'        => $attributes['posts_per_page'],
            // 'offset'        		=> $atts['offset'],
            'cat'					=> $attributes['cat_id']
        );
        $block_picture_query = new WP_Query( $args );
        // The Loop
        if ( $block_picture_query->have_posts() ) { 
            // To display the block title use the_block_title()
            if( $attributes['block_title'] != '' ){
                $arr = [
                    'cat_id'	=> $attributes['link_cat_id'], 
                    'title'	=> $attributes['block_title'],
                ];
                ptc_the_block_title( $arr );
            } ?>

            <div class="b-1">

            <?php
            $min = 1;
            $data = array();
            while( $block_picture_query -> have_posts() ) {
                $block_picture_query->the_post();
                array_push( 
                    $data, 
                    array(
                        'title'		=> get_the_title(),
                        'permalink'	=> get_the_permalink(),
                        'date'		=> get_the_date(),
                        'img_thumb' => ptc_get_the_post_thumbnail('large'),
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
                            'img_thumb' => '',
                        )
                    );
                    $min --;
                }
            }
            $html = '<div class="b-item-wrap">
                        <div class="b-item">
                            <div class="b-thumnail"><img src="%s" /></div>
                            <div class="b-title no-date"><a href="%s">​​%s</a></div>
                        </div>
                    </div>';
            foreach( $data as $arr ){
                printf( $html,  $arr['img_thumb'],  $arr['permalink'],  mb_strimwidth( $arr['title'], 0, 85, '...' ));
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
// disable block frontend wrapper.
add_filter( 'lazyblock/ptc-block-picture/frontend_allow_wrapper', '__return_false' );