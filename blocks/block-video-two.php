<?php
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 14153,
        'title' => 'PTC Video Layout 02',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM21 4H3c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15h-9V6h9v13z" /></svg>',
        'keywords' => array(
            0 => 'Video',
            1 => 'MPTC',
        ),
        'slug' => 'lazyblock/ptc-video-layout-two',
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
            'control_22d885480b' => array(
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
                'placeholder' => 'Block Title',
                'characters_limit' => '',
            ),
            'control_e86865470b' => array(
                'type' => 'number',
                'name' => 'category-id',
                'default' => '',
                'label' => 'Category ID',
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
            'show_preview' => 'selected',
            'single_output' => true,
            'use_php' => true,
        ),
        'condition' => array(
            0 => 'page',
        ),
    ) );
    
endif;

// filter for Frontend output.
add_filter( 'lazyblock/ptc-video-layout-two/frontend_callback', 'ptc_videotwo_output', 10, 2 );

// filter for Editor output.
add_filter( 'lazyblock/ptc-video-layout-two/editor_callback', 'ptc_videotwo_output', 10, 2 );

if ( ! function_exists( 'ptc_videotwo_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function ptc_videotwo_output( $output, $attributes ) {
        ob_start();
        ?>

        <div>
            Control value: <?php echo esc_html( $attributes['block-title'] ); ?>
        </div>

        <?php
        return ob_get_clean();
    }
endif;