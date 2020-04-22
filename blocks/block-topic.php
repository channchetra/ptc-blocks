<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://www.chanthaily.com
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
 * @author     Chan Thaily <thaily-chan@mptc.gov.kh>
 */
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 60,
        'title' => 'Block Topic',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm9 7h-6v13h-2v-6h-2v6H9V9H3V7h18v2z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/block-topic',
        'description' => '',
        'category' => 'common',
        'category_label' => 'common',
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
            'control_dfe81a426a' => array(
                'type' => 'url',
                'name' => 'image-link',
                'default' => '',
                'label' => 'image link',
                'help' => '',
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
            'control_941a7d4ba5' => array(
                'type' => 'image',
                'name' => 'image',
                'default' => '',
                'label' => 'image',
                'help' => '',
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
            'control_78eb874248' => array(
                'type' => 'text',
                'name' => 'title',
                'default' => '',
                'label' => 'title',
                'help' => '',
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
            'control_51eb5445c3' => array(
                'type' => 'textarea',
                'name' => 'description',
                'default' => '',
                'label' => 'description',
                'help' => '',
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
            'control_2ac95d49db' => array(
                'type' => 'url',
                'name' => 'image-link',
                'default' => '',
                'label' => 'Image Link',
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
            ),
            'control_d37a0b4c67' => array(
                'type' => 'image',
                'name' => 'image',
                'default' => '',
                'label' => 'Image',
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
            ),
            'control_37fa614faa' => array(
                'type' => 'text',
                'name' => 'title',
                'default' => '',
                'label' => 'Title',
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
            ),
            'control_705b94423e' => array(
                'type' => 'textarea',
                'name' => 'description',
                'default' => '',
                'label' => 'Description',
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
add_filter( 'lazyblock/block-topic/frontend_callback', 'ptc_topic_output', 10, 2 );
// filter for Editor output.
add_filter( 'lazyblock/block-topic/editor_callback', 'ptc_topic_output', 10, 2 );
if ( ! function_exists( 'ptc_topic_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function ptc_topic_output( $output, $attributes ) {
        ob_start();    
        // WP_Query arguments
        $args = [
            'post_type'			=> ['post'],
            'post_status'		=> ['publish'],
            'posts_per_page'	=> $attributes['posts_per_page'],
            'cat'				=> $attributes['cat_id']
        ];
        
        // The Query
        $slider_query = new WP_Query( $args );
        // The Loop
        if ( $slider_query->have_posts() ) { ?>
        <!-- </div> -->
        <section class=" class="main-slideshow slick-slideshow" data-slick='{"adaptiveHeight": false, "mobileFirst": true, "pauseOnDotsHover": true, "dots": true, "autoplay": true, "autoplaySpeed": 3000, "arrows": false, "cssEase": "ease-in-out"}'>
            <?php
                while ( $slider_query->have_posts() ) :
                    $slider_query->the_post(); ?>
                    <figure data-id="slide-01">
                        <div class="aspectratio-md-21-9 aspectratio-16-9">
                            <div class="img" style="background-image: url(<?php echo ptc_get_the_post_thumbnail('large'); ?>);" ></div>
                        </div>
                        <figcaption>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </figcaption>
                    </figure>
            <?php
            endwhile; ?>
           
        </section>
        <?php
        }
        // Restore original Post Data
        wp_reset_postdata();
        // Return code
        return ob_get_clean();
    }
endif;
// disable block frontend wrapper.
add_filter( 'lazyblock/block-topic/frontend_allow_wrapper', '__return_false' );