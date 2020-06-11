<?php
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 14391,
        'title' => 'MPTC Search Box',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/mptc-search-box',
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
            'control_79188741c9' => array(
                'type' => 'text',
                'name' => 'title',
                'default' => 'ស្វែងរក',
                'label' => 'Title',
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
            'control_8d59b14f35' => array(
                'type' => 'text',
                'name' => 'placeholder',
                'default' => 'ស្វែងរក',
                'label' => 'Placeholder',
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
            'control_8d0b554490' => array(
                'type' => 'repeater',
                'name' => 'suggested-keywords',
                'default' => '',
                'label' => 'Suggested keywords',
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
            'control_971b934db3' => array(
                'type' => 'text',
                'name' => 'keywords',
                'default' => '',
                'label' => 'Keywords',
                'help' => '',
                'child_of' => 'control_8d0b554490',
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
            1 => 'service',
        ),
    ) );
    
endif;
// filter for Frontend output.
add_filter( 'lazyblock/mptc-search-box/frontend_callback', 'ptc_search_box_block_output', 10, 2 );

// filter for Editor output.
add_filter( 'lazyblock/mptc-search-box/editor_callback', 'ptc_search_box_block_output', 10, 2 );

if ( ! function_exists( 'ptc_search_box_block_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    
    function ptc_search_box_block_output( $output, $attributes ) {
        $object = new Ptc_Blocks();
        ob_start(); 
        $name = $attributes['title'];
        $placeholder = $attributes['placeholder'];
        if (function_exists('pll_home_url')) {
            $action = pll_home_url();
        } else {
            $action = get_home_url();
        }
        $form_val = get_search_query();
        $output_val = '<div class="form-search without-slideshow py-4 px-4 mb-0">
                            <form action="%s" method="get">
                                <div class="input-field input-group">
                                    <input type="search" class="text-field form-control" placeholder="%s" value="%s" name="s"/>
                                    <div class="input-group-append">
                                        <button type="submit" class="submit-field btn btn-primary"><span class="d-none d-md-inline">%s</span> <i class="icofont-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>';
        printf($output_val, $action, $placeholder, $form_val, $name);
        return ob_get_clean();
    }
endif;
// disable block frontend wrapper.
add_filter( 'lazyblock/mptc-search-box/frontend_allow_wrapper', '__return_false' );