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
// filter for Frontend output.
add_filter( 'lazyblock/block-slider/frontend_callback', 'my_block_output', 10, 2 );
// filter for Editor output.
add_filter( 'lazyblock/block-slider/editor_callback', 'my_block_output', 10, 2 );
if ( ! function_exists( 'my_block_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function my_block_output( $output, $attributes ) {
        ob_start();
        $atts = [
                'cat_id'			=> '',
                'posts_per_page'	=> 4 ];
    
        // WP_Query arguments
        $args = array(
            'post_type'			=> array( 'post' ),
            'post_status'		=> array( 'publish' ),
            'posts_per_page'	=> $atts['posts_per_page'],
            'cat'				=> $atts['cat_id']
        );
        
        // The Query
        $slider_query = new WP_Query( $args );
        // The Loop
        if ( $slider_query->have_posts() ) { ?>
        <!-- </div> -->
        <div class="slideshow">
            <div class="slick-slideshow">
        <?php
            while ( $slider_query->have_posts() ) :
                $slider_query->the_post(); ?>
                <div class="slick-item">
                    <div class="slick-photo">
                        <div class="aspect-ratio">
                            <div class="img" style="background-image: url(<?php echo ptc_get_the_post_thumbnail('large'); ?>);" ></div>
                        </div>
                    </div>
                    <div class="primary-background-color">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            <?php
            endwhile; ?>
            </div>
        </div>
        <!-- <div> -->
        <?php
        }
        // Restore original Post Data
        wp_reset_postdata();
        // Return code
        return ob_get_clean();
    }
endif;