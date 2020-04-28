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
    $service_obj = new Ptc_Blocks();

    lazyblocks()->add_block( array(
        'id' => 380,
        'title' => 'Block Service',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 9h14V7H3v2zm0 4h14v-2H3v2zm0 4h14v-2H3v2zm16 0h2v-2h-2v2zm0-10v2h2V7h-2zm0 6h2v-2h-2v2z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/block-service',
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
            'control_71692e412d' => array(
                'type' => 'repeater',
                'name' => 'service-item',
                'default' => '',
                'label' => 'Service Item',
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
                'rows_add_button_label' => 'Add Service Items',
                'rows_label' => 'Service Row',
            ),
            'control_3398064d2b' => array(
                'type' => 'text',
                'name' => 'service',
                'default' => '',
                'label' => 'Service Title',
                'help' => '',
                'child_of' => 'control_71692e412d',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_4a5b744cd3' => array(
                'type' => 'select',
                'name' => 'service-category',
                'default' => '',
                'label' => 'Service category',
                'help' => '',
                'child_of' => 'control_71692e412d',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
                'choices' => $service_obj->mptc_cat_listing('service-type'),
            ),
            'control_412bbe4502' => array(
                'type' => 'number',
                'name' => 'posts-per-page',
                'default' => '',
                'label' => 'Posts per page',
                'help' => '',
                'child_of' => 'control_71692e412d',
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
            'single_output' => true,
            'use_php' => true,
        ),
        'condition' => array(
            0 => 'page',
        ),
    ) );
    
endif;


// filter for Frontend output.
add_filter( 'lazyblock/block-service/frontend_callback', 'ptc_service_row_output', 10, 2 );
// filter for Editor output.
// add_filter( 'lazyblock/block-service/editor_callback', 'ptc_service_row_output', 10, 2 );
if ( ! function_exists( 'ptc_service_row_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     * 
     */
    function ptc_service_row_output( $output, $attributes ) { 

        ob_start();
        echo '<div class="lg block-flex-tab d-lg-block d-none">';
        echo '<ul class="d-flex">';
        foreach ( $attributes['service-item'] as $attribute ) {
            // echo '<pre>';
            // print_r($attribute);
            // echo '</pre>';
            printf(
                '
                    <li class="flex-fill">
                    <h5><i class="icofont-users-alt-3"></i>%s</h5>
                    <ul>
                ',
                'Title'
            );
            $args = array(
                'post_type' => 'service',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service-type',
                        'field'    => 'id',
                        'terms'    => $attribute['service-category'],
                    ),
                ),
            );
            $query = new WP_Query( $args );
            // The Loop
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();

                    printf (
                        '
                        <li class="d-flex justify-content-between">
                            <a href="service-list.html">%s</a><i class="icofont-arrow-right"></i>
                        </li>
                        ',
                        get_the_title()
                    );


                }
                
            } else {
                // no posts found
                echo 'No Post';
            }
            wp_reset_postdata();
            
            
            
            echo '</ul>';
            echo '</li>';
                
        }
        echo '</ul>';
        echo '</div>';
        return ob_get_clean();

        
        
       
        
    }
endif;
// disable block frontend wrapper.
add_filter( 'lazyblock/block-service/frontend_allow_wrapper', '__return_false' );