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
$option = new Ptc_Blocks();
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 268,
        'title' => 'PTC Videos Block',
        'icon' => 'dashicons dashicons-format-video',
        'keywords' => array(
            0 => 'Video',
            1 => 'Gallaries',
        ),
        'slug' => 'lazyblock/ptc-video-block',
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
            'control_13787549df' => array(
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
            'control_5fb94e407b' => array(
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
            'control_295aad4979' => array(
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
            'control_d549d246e0' => array(
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
add_filter( 'lazyblock/ptc-video-block/frontend_callback', 'ptc_video_block_output', 10, 2 );
// filter for Editor output.
add_filter( 'lazyblock/ptc-video-block/editor_callback', 'ptc_video_block_output', 10, 2 );
if ( ! function_exists( 'ptc_video_block_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function ptc_video_block_output( $output, $attributes ) {
        ob_start();
        $object = new Ptc_Blocks();
        // WP_Query arguments
        $args = array(
            'post_type'             => array( 'post' ),
            'post_status'           => array( 'publish' ),
            'posts_per_page'        => $attributes['posts_per_page'],
            // 'offset'        		=> $atts['offset'],
            'cat'					=> $attributes['cat_id']
        );
        $block_video_query = new WP_Query( $args );
        // The Loop
        if ( $block_video_query->have_posts() ) { 
            // To display the block title use the_block_title()
            if( $attributes['block_title'] != '' ){
                $arr = [
                    'cat_id'	=> $attributes['link_cat_id'], 
                    'title'	=> $attributes['block_title'],
                ];
                $object->ptc_the_block_title( $arr );
            } ?>

            <div class="b-2">

            <?php
            $min = 1;
            $data = array();
            while( $block_video_query -> have_posts() ) {
                $block_video_query->the_post();
                array_push( 
                    $data, 
                    array(
                        'title'		=> get_the_title(),
                        'permalink'	=> get_the_permalink(),
                        'date'		=> $object->ptc_posted_on(),
                        'img_thumb' => $object->ptc_post_thumbnail('large'),
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
            $html = '<ul class="b-item-wrap youtube-player">
                        <div class="b-item row">
                            <div class="b-thumnail-wrap col-sm-7 col-xs-12">
                                <div class="b-thumnail"><li class="embed-responsive embed-responsive-6by4"><div class="img" style="background-image: url(%s);left: 0;top: 0;right: 0;bottom: 0;position: absolute;background-size: cover;background-position: 50%%;background-repeat: no-repeat;"></div></li></div>
                            </div>
                            <div class="b-title-wrap col-sm-5 col-xs-12">
                                <a href="%s" class="b-title d-block">%s</a>
                                <div class="b-date">%s</div>
                            </div>
                        </div>
                    </ul>';
            foreach( $data as $arr ){
                printf( $html,  $arr['img_thumb'],  $arr['permalink'],  mb_strimwidth( $arr['title'], 0, 85, '...' ),  $arr['date'] );
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
add_filter( 'lazyblock/ptc-video-block/frontend_allow_wrapper', '__return_false' );