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
        'id' => 64,
        'title' => 'Block Message',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/block-message',
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
            'control_f92b214910' => array(
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
            'control_13fb864da3' => array(
                'type' => 'text',
                'name' => 'title',
                'default' => '',
                'label' => 'title',
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
            'control_df8a93493e' => array(
                'type' => 'rich_text',
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
            'control_c6997e4409' => array(
                'type' => 'url',
                'name' => 'link',
                'default' => '',
                'label' => 'link',
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
add_filter( 'lazyblock/block-message/frontend_callback', 'ptc_message_output', 10, 2 );
// filter for Editor output.
// add_filter( 'lazyblock/block-message/editor_callback', 'ptc_message_output', 10, 2 );
if ( ! function_exists( 'ptc_message_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function ptc_message_output( $output, $attributes ) {
        ob_start();    
        // WP_Query arguments
        $args = [
            'post_type'			=> ['post'],
            'post_status'		=> ['publish'],
            'posts_per_page'	=> $attributes['posts_per_page'],
            'cat'				=> $attributes['cat_id']
        ];
        
        // The Query
        $msg_query = new WP_Query( $args );
        // The Loop
        if ( $msg_query->have_posts() ) { ?>

        <!-- </div> -->
        <div class="block-list" data-id="block-list-01">
            <article class="wrap-item">
                <div class="row">
                    <div class="col-md-5">
                        <div class="thumbnail">
                            <figure class="m-0 aspectratio-sm-16-9 aspectratio-4-3">
                            <?php if ( isset( $attributes['image']['url'] ) ) : ?>
                                <img class="d-none" src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">
                                <div class="img" style="background-image: url(<?php echo esc_url( $attributes['image']['url'] ); ?>)"></div>
                            <?php endif; ?>
                                
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h5 class="title d-none">
                            <?php echo $attributes['title']; ?>
                        </h5>
                        <div class="excerpt">
                        <?php echo $attributes['description']; ?>
                        </div>
                        <div class="meta">
                            <a href="<?php echo esc_url( $attributes['link'] ); ?>">
                                Read More <i class="icofont-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <?php
        }
        // Restore original Post Data
        wp_reset_postdata();
        // Return code
        return ob_get_clean();
    }
endif;
// disable block frontend wrapper.
add_filter( 'lazyblock/block-message/frontend_allow_wrapper', '__return_false' );