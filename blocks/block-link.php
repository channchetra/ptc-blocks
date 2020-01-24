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
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 289,
        'title' => 'PTC Other Links Block',
        'icon' => 'dashicons dashicons-editor-kitchensink',
        'keywords' => array(
            0 => 'MPTC',
        ),
        'slug' => 'lazyblock/ptc-other-links',
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
            'control_9df959412b' => array(
                'label' => 'Block Title',
                'name' => 'block_title',
                'type' => 'text',
                'child_of' => '',
                'default' => 'Block title',
                'characters_limit' => '',
                'placeholder' => 'Insert block title',
                'help' => '',
                'placement' => 'inspector',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_93a8c44d5d' => array(
                'label' => 'Link with Image',
                'name' => 'link_image',
                'type' => 'repeater',
                'child_of' => '',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'inspector',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '4',
                'rows_label' => 'Sub Block {{#}}',
                'rows_add_button_label' => '+Add more',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_02cbb24c85' => array(
                'label' => 'Sub Block title',
                'name' => 'sub_block_title',
                'type' => 'text',
                'child_of' => 'control_93a8c44d5d',
                'default' => 'Block title',
                'characters_limit' => '',
                'placeholder' => 'add block title',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_0e5a8b4403' => array(
                'label' => 'Select Image',
                'name' => 'select_image',
                'type' => 'image',
                'child_of' => 'control_93a8c44d5d',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_be385d4e2b' => array(
                'label' => 'Add Link',
                'name' => 'add_link',
                'type' => 'url',
                'child_of' => 'control_93a8c44d5d',
                'default' => '#',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_8c685847cb' => array(
                'label' => 'Link only text',
                'name' => 'link_only_text',
                'type' => 'repeater',
                'placement' => 'inspector',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '4',
                'rows_label' => 'Sub Block {{#}}',
                'rows_add_button_label' => '+ Add more',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_85c82640b4' => array(
                'label' => 'Text Link',
                'name' => 'text_link',
                'type' => 'text',
                'child_of' => 'control_8c685847cb',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_0d9bae47fb' => array(
                'label' => 'Link URL',
                'name' => 'url',
                'type' => 'url',
                'child_of' => 'control_8c685847cb',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
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

// filter for Frontend output.
add_filter( 'lazyblock/ptc-other-links/frontend_callback', 'ptc_other_links_output', 10, 2 );
// filter for Editor output.
add_filter( 'lazyblock/ptc-other-links/editor_callback', 'ptc_other_links_output', 10, 2 );
if ( ! function_exists( 'ptc_other_links_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function ptc_other_links_output( $output, $attributes ) {
        ob_start();
        // To display the block title use the_block_title()
        if( $attributes['block_title'] != '' ){
            echo '<div class="block-title2 primary-color">
                    <span class="primary-color">'. $attributes['block_title'] .'</span>
                </div>';
        } ?>
            <div class="b-4">
                <ul>
                <?php foreach( $attributes['link_image'] as $inner ): ?>
                    <img src="<?php echo esc_url( $inner['select_image']['url'] ); ?>" alt="<?php echo esc_attr( $inner['select_image']['alt'] ); ?>">
                    <a href="echo esc_url( $inner['add_link'] );">និយ័តករទូរគមនាគមន៍កម្ពុជា</a>
                <?php endforeach; ?>
                </ul>
            </div>
            <div class="b-5">
                <ul>
                    <li>
                        <a href="#">ភ្ជាប់ទៅកាន់គេហទំព័រដទៃ</a>
                    </li>
                    <li>
                        <a href="#">បណ្តុំតែមប្រៃសណីយ៍</a>
                    </li>
                </ul>
            </div>
        <?php
            // $html = '<div class="b-item-wrap">
            //             <div class="b-item">
            //                 <div class="b-thumnail"><img src="%s" /></div>
            //                 <div class="b-title no-date"><a href="%s">​​%s</a></div>
            //             </div>
            //         </div>';
            // foreach( $data as $arr ){
            //     printf( $html,  $arr['img_thumb'],  $arr['permalink'],  mb_strimwidth( $arr['title'], 0, 85, '...' ));
            // }
        }
        return ob_get_clean();
endif;
// disable block frontend wrapper.
add_filter( 'lazyblock/ptc-other-links/frontend_allow_wrapper', '__return_false' );