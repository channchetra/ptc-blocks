<?php
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 14246,
        'title' => 'Block other Links',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z" /></svg>',
        'keywords' => array(
            0 => 'MPTC',
        ),
        'slug' => 'lazyblock/block-other-links',
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
            'control_3beb9445a5' => array(
                'type' => 'text',
                'name' => 'block-title',
                'default' => 'Block title',
                'label' => 'Block title',
                'help' => 'Insert title for your block',
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
            'control_9bba634952' => array(
                'type' => 'repeater',
                'name' => 'items',
                'default' => '',
                'label' => 'Items',
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
                'rows_label' => '{{item-name}}',
                'rows_min' => '0',
                'rows_max' => '5',
            ),
            'control_2088324ca1' => array(
                'type' => 'text',
                'name' => 'item-name',
                'default' => '',
                'label' => 'Item name',
                'help' => '',
                'child_of' => 'control_9bba634952',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_6e0a024f93' => array(
                'type' => 'image',
                'name' => 'image',
                'default' => '',
                'label' => 'Image',
                'help' => '',
                'child_of' => 'control_9bba634952',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_4c4914428c' => array(
                'type' => 'url',
                'name' => 'link',
                'default' => 'https://mptc.gov.kh/',
                'label' => 'Link',
                'help' => '',
                'child_of' => 'control_9bba634952',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_b13b914b64' => array(
                'type' => 'text',
                'name' => 'item-name',
                'default' => '',
                'label' => 'Item name',
                'help' => '',
                'child_of' => 'control_0abb134f17',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_39cac6472a' => array(
                'type' => 'text',
                'name' => 'item-link',
                'default' => '',
                'label' => 'Item link',
                'help' => '',
                'child_of' => 'control_0abb134f17',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_32e8d842d7' => array(
                'type' => 'toggle',
                'name' => 'text-only',
                'default' => '',
                'label' => 'Text only',
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
                'alongside_text' => 'Link with no image',
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
add_filter( 'lazyblock/block-other-links/frontend_callback', 'ptc_other_link_block_output', 10, 2 );

// filter for Editor output.
// add_filter( 'lazyblock/block-other-links/editor_callback', 'ptc_other_link_block_output', 10, 2 );

if ( ! function_exists( 'ptc_other_link_block_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    
    function ptc_other_link_block_output( $output, $attributes ) {
        $object = new Ptc_Blocks();
        ob_start();
        if( $attributes['block-title'] != '' && $attributes['text-only'] == false ){
            $arr = [
                'cat_id'	=> '', 
                'title'	=> $attributes['block-title'],
            ];
            $object->ptc_the_block_title( $arr );
        }
        $output = '';
        $attributes['text-only'] ? $output .= '<div class="b-5">' : $output .= '<div class="b-4">';
        $output .= '<ul>'; 
        foreach( $attributes['items'] as $inner ):
            $output .= '<li>';
            if ( isset( $inner['image']['url'] ) ) :
                $output .= '<img src="' . esc_url($inner['image']['url']) . '" alt="'. esc_url($inner['image']['alt']) . '">';
            endif;
                $output .='<a href="' . esc_url($inner['link']) . '">' . $inner['item-name'] . '</a>';
            $output .= '</li>';
            endforeach;
        $output .= '</ul></div>';
        echo $output;
        return ob_get_clean();
    }
endif;