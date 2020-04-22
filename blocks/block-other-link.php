<?php
if ( function_exists( 'lazyblocks' ) ) :

lazyblocks()->add_block( array(
    'id' => 14119,
    'title' => 'PTC Other Links',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z" /></svg>',
    'keywords' => array(
    ),
    'slug' => 'lazyblock/ptc-other-links',
    'description' => 'GB Block for another link area...',
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
        'control_13a9fc4ad2' => array(
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
            'placeholder' => 'Block title',
            'characters_limit' => '',
        ),
        'control_9fab274ff0' => array(
            'type' => 'repeater',
            'name' => 'block_row',
            'default' => '',
            'label' => 'Row with icon',
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
        'control_d6ba024cfa' => array(
            'type' => 'text',
            'name' => 'title',
            'default' => '',
            'label' => 'Title',
            'help' => '',
            'child_of' => 'control_9fab274ff0',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_66ab2d48a3' => array(
            'type' => 'url',
            'name' => 'link',
            'default' => '',
            'label' => 'Link',
            'help' => '',
            'child_of' => 'control_9fab274ff0',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_01c84b4c47' => array(
            'type' => 'image',
            'name' => 'image',
            'default' => '',
            'label' => 'Image',
            'help' => '',
            'child_of' => 'control_9fab274ff0',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_010a0e4d6d' => array(
            'type' => 'repeater',
            'name' => 'row-no-icon',
            'default' => '',
            'label' => 'Row no icon',
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
        'control_c8e96d4266' => array(
            'type' => 'text',
            'name' => 'title',
            'default' => '',
            'label' => 'Title',
            'help' => '',
            'child_of' => 'control_010a0e4d6d',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_a24a584ecd' => array(
            'type' => 'url',
            'name' => 'link',
            'default' => '',
            'label' => 'Link',
            'help' => '',
            'child_of' => 'control_010a0e4d6d',
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
        0 => 'page',
    ),
) );

endif;

add_filter( 'lazyblock/ptc-other-links/fontend_callback', 'ptc_other_link', 10, 2 );
add_filter( 'lazyblock/ptc-other-links/editor_callback', 'ptc_other_link', 10, 2 );

if ( ! function_exists( 'ptc_other_link' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function ptc_other_link( $output, $attributes ) {
        ob_start();
        ?>

        <div>
            Control value: <?php echo esc_html( $attributes['test_control'] ); ?>
        </div>

        <?php
        return ob_get_clean();
    }
endif;