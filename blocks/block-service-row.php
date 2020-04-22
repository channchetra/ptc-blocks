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

    $type = new Ptc_Blocks();

    lazyblocks()->add_block( array(
        'id' => 58,
        'title' => 'Block Service',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-4 6V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1z" /></svg>',
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
            'control_c1cbcc4089' => array(
                'type' => 'textarea',
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
                'placeholder' => 'Title block lists',
                'characters_limit' => '',
            ),
            'control_c1cbcc4frd4' => array(
                'type' => 'select',
                'name' => 'service-type',
                'default' => '',
                'label' => 'Service Type',
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
                // 'choices' => [
                //     ['label' => 'Hello',
                //     'value' => 'hello']
                // ],
                'choices' => $type->mptc_cat_listing('service'),
                'multiple' => 'false',
            ),
            'control_fa288944b3' => array(
                'type' => 'repeater',
                'name' => 'service-item',
                'default' => '',
                'label' => 'Service item',
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
            'control_17eb8b4c61' => array(
                'type' => 'text',
                'name' => 'service-name',
                'default' => '',
                'label' => 'Service name',
                'help' => '',
                'child_of' => 'control_fa288944b3',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => 'Service name',
                'characters_limit' => '',
            ),
            'control_e639434dd2' => array(
                'type' => 'url',
                'name' => 'url',
                'default' => '',
                'label' => 'Url',
                'help' => '',
                'child_of' => 'control_fa288944b3',
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
add_filter( 'lazyblock/block-service/editor_callback', 'ptc_service_row_output', 10, 2 );
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
        // WP_Query arguments
        ?>
        <li class="flex-fill">
            <h5><?php echo $attributes['title']; ?></h5>
                <ul>
                <?php foreach( $attributes['service-item'] as $inner ): ?>
                    <li class="d-flex justify-content-between">
                        <a href="<?php echo esc_url( $inner['url']); ?>"><?php echo $inner['service-name']; ?></a>
                        <i class="icofont-arrow-right"></i>
                    </li>
                <?php endforeach; ?>
                </ul>
        </li>
        <?php
        // Return code
        return ob_get_clean();
    }
endif;
// disable block frontend wrapper.
add_filter( 'lazyblock/block-service/frontend_allow_wrapper', '__return_false' );