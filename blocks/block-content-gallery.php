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
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 20280,
        'title' => 'PTC Slick Gallery',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 19h10V4H7v15zm-5-2h4V6H2v11zM18 6v11h4V6h-4z" /></svg>',
        'keywords' => array(
            0 => 'Gallery',
            1 => 'MPTC',
            2 => 'PTC',
        ),
        'slug' => 'lazyblock/ptc-slick-gallery',
        'description' => 'Block ធ្វើការបង្ហាញបណ្ដុំរូបភាពជា Slick Slideshow',
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
            'control_d19bad4a7c' => array(
                'type' => 'text',
                'name' => 'block-title',
                'default' => '',
                'label' => 'Block Title',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => 'Add Block title',
                'characters_limit' => '',
            ),
            'control_198b054be6' => array(
                'type' => 'gallery',
                'name' => 'gallery-content',
                'default' => '',
                'label' => 'Gallery Content',
                'help' => 'Insert your images here',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
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
            0 => 'post',
            1 => 'page',
        ),
    ) );
    
endif;

add_filter( 'lazyblock/ptc-slick-gallery/frontend_callback', 'ptc_content_gallery_output', 10, 2 );
// filter for Editor output.
// add_filter( 'lazyblock/ptc-slick-gallery/editor_callback', 'ptc_content_gallery_output', 10, 2 );
if ( ! function_exists( 'ptc_content_gallery_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function ptc_content_gallery_output( $output, $attributes ) {
        ob_start();
        echo '<div data-slick=\'{"adaptiveHeight": true}\' class="slider-for">';
            foreach( $attributes['gallery-content'] as $image ):
                if ( isset( $image['id'] ) ):
                    $slider = wp_get_attachment_image( $image['id'], 'large');
                    echo '<div>'. $slider .'</div>';
                endif;
            endforeach;
            echo '</div>';
            echo '<div class="slider-nav">';
            foreach( $attributes['gallery-content'] as $image ):
                if ( isset( $image['id'] ) ):
                    $slider = wp_get_attachment_image( $image['id'], 'thumbnail');
                    echo '<div>'. $slider .'</div>';
                endif;
            endforeach;
        echo '</div>';
        return ob_get_clean();
    }
endif;
// disable block frontend wrapper.
add_filter( 'lazyblock/ptc-slick-gallery/frontend_allow_wrapper', '__return_false' );