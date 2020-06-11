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
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 4l2 4h-3l-2-4h-2l2 4h-3l-2-4H8l2 4H7L5 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4h-4z" /></svg>',
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
            'control_videos_title' => array(
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
            'control_video_cat' => array(
                'type' => 'select',
                'name' => 'category',
                'default' => 'select',
                'label' => 'Category',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
                'choices' => $option->mptc_cat_listing(),
            ),
            'control_video_ppp' => array(
                'label' => 'Posts/Page',
                'name' => 'posts_per_page',
                'type' => 'range',
                'child_of' => '',
                'default' => '1',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => 'Change Posts count will change layout too',
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
                'max' => '3',
                'step' => '1',
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
            'cat'					=> $attributes['category']
        );
        $video_query = new WP_Query( $args );
        // The Loop
        if ( $video_query->have_posts() ) { 
            // To display the block title use the_block_title()
            if( $attributes['block_title'] != '' ){
                echo '<div class="block-title2 primary-color"><h3 class="primary-color" href="#">' . $attributes['block_title'] . '</h3></div>';
            } ?>

            <div class="b-2">
                <ul class="b-item-wrap youtube-player">
                    <div class="b-item row">
                        <?php
                        $step = 0;
                        $count = $attributes['posts_per_page'];
                        $data = [];
                        while( $video_query -> have_posts() ) {
                            $video_query->the_post();
                            $step++;
                            $step == 1 && $count != 2 ? $class = 'col-sm-12' : $class = 'col-sm-6';
                            $url = get_post_meta(get_the_ID(), '_mptc_video_url', true);
                            array_push($data, [
                                'class' => $class,
                                'frame' => $object->video_frame($url),
                                'title' => get_the_title()
                            ]);
                        }
                        $render = '<div class="b-thumnail-wrap %s col-xs-12">
                                        <div class="b-thumnail">
                                            <li class="embed-responsive embed-responsive-6by4">%s</li>
                                        </div>
                                        <p>%s</p>
                                    </div>';
                        foreach($data as $key){
                            printf($render, $key['class'], $key['frame'], $key['title']);
                        }
                        ?>
                    </div>
                </ul><?php
                $object->ptc_readmore($attributes['category']);
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