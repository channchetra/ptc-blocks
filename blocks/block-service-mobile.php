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
        'id' => 324,
        'title' => 'Service Mobile',
        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.25" width="15" height="15" rx="4" transform="matrix(-1 0 0 1 22 7)" fill="currentColor" />
    <rect width="15" height="15" rx="4" transform="matrix(-1 0 0 1 17 2)" fill="currentColor" />
    </svg>
    ',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/service-mobile',
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
            'control_7ac8a14e8b' => array(
                'type' => 'text',
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
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_47e8b0454f' => array(
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
            'control_92391d46aa' => array(
                'type' => 'text',
                'name' => 'service-name',
                'default' => '',
                'label' => 'Service name',
                'help' => '',
                'child_of' => 'control_47e8b0454f',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_c958954c1e' => array(
                'type' => 'url',
                'name' => 'url',
                'default' => '',
                'label' => 'Url',
                'help' => '',
                'child_of' => 'control_47e8b0454f',
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
            'use_php' => false,
        ),
        'condition' => array(
            0 => 'page',
        ),
    ) );
    
endif;


// filter for Frontend output.
add_filter( 'lazyblock/block-service/frontend_callback', 'ptc_service_mobile_output', 10, 2 );
// filter for Editor output.
add_filter( 'lazyblock/block-service/editor_callback', 'ptc_service_mobile_output', 10, 2 );
if ( ! function_exists( 'ptc_service_mobile_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     * 
     */
    function ptc_service_mobile_output( $output, $attributes ) {
        ob_start();    
        // WP_Query arguments
        ?>
        <div class="tab-content" id="accordion-tab-collapse">
							
            <div class="tab-pane show active" id="tab-01" role="tabpanel" aria-labelledby="tab-collapse-01">
                <div class="collapse-title" id="heading-01">
                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapse-01" aria-expanded="true" aria-controls="collapse-01">
                        គោលនយោបាយ
                    </button>
                </div>
                <div id="collapse-01" class="collapse show" aria-labelledby="heading-01" data-parent="#accordion-tab-collapse">
                    <ul class="b-2 row wrap pb-0 primary-color tab-s-3">
                        <li class="b-item-wrap col-12">
                            <div class="b-item">
                                <div class="b-title-wrap">
                                    <div class="b-title margin-bottom-15"><a href="#">ការងាររដ្ឋបាលសម្រាប់ការចេញលិខិតអនុញ្ញាតបំពេញអាចម៍ដីកម្មសិទ្ធិឯកជនមិនលើសពី១០០០ម៉ែត្រការ៉េ ១. ដីក្នុងរាជធានីភ្នំពេញ ឬក្នុងក្រុងនៃខេត្តកណ្តាល ខេត្តព្រះសីហុន និងខេត្តសៀមរាបដែលមានទំហំដីក្រោម ១០០ម៉ែត្រការ៉េ</a></div>
                                    <div class="b-cat"><span class="oi oi-eye"></span><a href="#">មើល</a><span class="oi oi-cloud-download"></span><a href="#">ទាញយក</a><span>ថ្ងៃ សៅរ៍ ទី ០២ ខែ កុម្ភៈ ឆ្នាំ ២០១៩</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="b-item-wrap col-12">
                            <div class="b-item">
                                <div class="b-title-wrap">
                                    <div class="b-title margin-bottom-15"><a href="#">ការងាររដ្ឋបាលសម្រាប់ការចេញលិខិតអនុញ្ញាតបំពេញអាចម៍ដីកម្មសិទ្ធិឯកជនមិនលើសពី១០០០ម៉ែត្រការ៉េ ២. ដីក្នុងរាជធានីភ្នំពេញ ឬក្នុងក្រុងនៃខេត្តកណ្តាល ខេត្តព្រះសីហុន និងខេត្តសៀមរាបដែលមានទំហំចាប់ពី ១០០ម៉ែត្រការ៉េ ដល់ក្រោម ៥០០ម៉ែត្រការ៉េ</a></div>
                                    <div class="b-cat"><span class="oi oi-eye"></span><a href="#">មើល</a><span class="oi oi-cloud-download"></span><a href="#">ទាញយក</a><span post-date="2019/01/28" class="">05 ថ្ងៃមុន</span><span>ថ្ងៃ សៅរ៍ ទី ០២ ខែ កុម្ភៈ ឆ្នាំ ២០១៩</span></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        

        </div>
        <?php
        // Return code
        return ob_get_clean();
    }
endif;
// disable block frontend wrapper.
add_filter( 'lazyblock/block-service/frontend_allow_wrapper', '__return_false' );