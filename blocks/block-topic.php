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
        'category' => 'egov-block',
        'category_label' => 'egov-block',
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
            'control_299a5748b6' => array(
                'type' => 'range',
                'name' => 'post-per-block',
                'default' => '1',
                'label' => 'Post per block',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => 'Show post per block',
                'characters_limit' => '',
                'min' => '1',
                'max' => '30',
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
        ?>
        <div class="block-topic">
            <table class="table table-bordered">
                <tbody>
                <?php 
                // the query
                $topic_query = new WP_Query( $args );
                
                if ( $topic_query->have_posts() ) : $i = 0 ?>
                
                    <!-- pagination here -->
                
                    <!-- the loop -->
                    <?php while ( $topic_query->have_posts() ) : $topic_query->the_post(); ?>
                    <?php if ($i % 3 == 0) {
                        echo '<tr>';
                    } ?>
                        <td>
                            <article>
                                <figure class="d-lg-flex">
                                    <a href="service-list.html">
                                        <img src="http://portal:8888/wp-content/themes/cambodia-portal/dist/images/content/health-icon.png" alt="Health">
                                    </a>
                                    <figcaption>
                                        <a href="service-list.html">
                                            <h5><?php the_title(); ?></h5>
                                        </a>
                                        <p class="d-none d-lg-block"><?php the_excerpt(); ?></p>
                                    </figcaption>
                                </figure>
                            </article>
                        </td>
                    <?php
                        $i++;
                        if ($i != 0 && $i % 3 == 0) {
                            echo '</tr>';
                        }
                    ?> 
                    <?php endwhile; ?>
                    <!-- end of the loop -->
                
                    <!-- pagination here -->
                
                    <?php wp_reset_postdata(); ?>
                
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php
        // Return code
        return ob_get_clean();
    }
endif;
// disable block frontend wrapper.
add_filter( 'lazyblock/block-topic/frontend_allow_wrapper', '__return_false' );