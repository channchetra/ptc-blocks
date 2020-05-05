<?php
if ( function_exists( 'lazyblocks' ) ) :
$option = new Ptc_Blocks();
    lazyblocks()->add_block( array(
        'id' => 14271,
        'title' => 'PTC Block Collapse',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M2 21h19v-3H2v3zM20 8H3c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h17c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1zM2 3v3h19V3H2z" /></svg>',
        'keywords' => array(
            0 => 'Collapse',
            1 => 'Tabs',
            2 => 'MPTC',
        ),
        'slug' => 'lazyblock/ptc-block-collapse',
        'description' => 'Block for showing Tab Collapse',
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
            'control_5bd80746bb' => array(
                'type' => 'text',
                'name' => 'block-title',
                'default' => 'Collapse Title',
                'label' => 'Block Title',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => 'Collapse Title',
                'characters_limit' => '',
            ),
            'control_646ac64e91' => array(
                'type' => 'repeater',
                'name' => 'collapse-items',
                'default' => '',
                'label' => 'Collapse Item',
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
                'rows_add_button_label' => 'Add Tab',
                'rows_label' => '{{tab-name}}',
            ),
            'control_aa383d4e23' => array(
                'type' => 'text',
                'name' => 'tab-name',
                'default' => 'Tab\'s title',
                'label' => 'Tab title',
                'help' => '',
                'child_of' => 'control_646ac64e91',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => 'Add title',
                'characters_limit' => '',
            ),
            'control_0d1bb04042' => array(
                'type' => 'select',
                'name' => 'taxonomy',
                'default' => '18',
                'label' => 'Select Taxonomy',
                'help' => '',
                'child_of' => 'control_646ac64e91',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
                'choices' => $option->mptc_cat_listing(),
            ),
            'control_83bb2f4c48' => array(
                'type' => 'toggle',
                'name' => 'use-tax-name',
                'default' => '',
                'label' => 'Use tax name',
                'help' => '',
                'child_of' => 'control_646ac64e91',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
                'alongside_text' => '',
                'checked' => 'true',
            ),
            'control_bc5b544f4f' => array(
                'type' => 'range',
                'name' => 'posts-per-page',
                'default' => '1',
                'label' => 'Posts per Page',
                'help' => '',
                'child_of' => 'control_646ac64e91',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
                'min' => '1',
                'max' => '6',
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
        ),
    ) );
    
endif;
// filter for Frontend output.
add_filter( 'lazyblock/ptc-block-collapse/frontend_callback', 'mptc_collapse_block_output', 10, 2 );

// filter for Editor output.
add_filter( 'lazyblock/ptc-block-collapse/editor_callback', 'mptc_collapse_block_output', 10, 2 );

if ( ! function_exists( 'mptc_collapse_block_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function mptc_collapse_block_output( $output, $attributes ) {
        $object = new Ptc_Blocks();
        // $tax_list = $object->get_mptc_custom_term;
        ob_start();
        if( $attributes['block-title'] != ''){
            $arr = [
                'cat_id'	=> '', 
                'title'	=> $attributes['block-title'],
            ];
            $object->ptc_the_block_title( $arr );
        }
        echo '<div class="d-md-flex flex-column tab-collapse">';
            echo '<div class="nav flex-row nav-collapse" id="tab-collapse" role="tablist" aria-orientation="vertical">';
            foreach($attributes['collapse-items'] as $key => $inner) :
                $tax = isset( $inner['taxonomy'] ) ? $inner['taxonomy'] : 'none';
                $tax_name = get_term( $tax );
                $use_name = isset($inner['use-tax-name']) ? $inner['use-tax-name'] : false;
                $tabs = isset( $inner['tab-name'] ) && !$use_name ? $inner['tab-name'] : $tax_name->name;
                $h_render = '<a class="primary-color %s" id="tab-collapse-0%d" data-toggle="pill" href="#tab-0%d" role="tab" aria-controls="tab-0%d" aria-selected="true">%s</a>';
                printf($h_render, $key == 0 ? 'active' : '', $key+1, $key+1, $key+1, $tabs);
                //end tab's header
            endforeach;
            echo '</div>';
            echo '<div class="tab-content" id="accordion-tab-collapse">';
            foreach($attributes['collapse-items'] as $c_key => $item) :
                printf('<div class="tab-pane %s" id="tab-0%d" role="tabpanel" aria-labelledby="tab-collapse-0%d​">', $c_key == 0 ? 'show active' : '', $c_key+1, $c_key+1);
                $cat_id = isset( $item['taxonomy'] ) ? $item['taxonomy'] : 'none';
                $collapse_ppp = isset( $item['posts-per-page'] ) ? $item['posts-per-page'] : 3;
                $render_content ='<div class="collapse-title" id="heading-0%d">
                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapse-0%d" aria-expanded="true" aria-controls="collapse-0%d">%s</button>
                                </div>';
                printf($render_content, $c_key+1, $c_key+1, $c_key+1, $item['tab-name']);
                // echo '</div>';
                $args = [
                    'post_type'             => ['post'],
                    'post_status'           => ['publish'],
                    'posts_per_page'        => $collapse_ppp,
                    'cat'					=> $cat_id
                ];
                $query = new WP_Query($args);
                $outputs = [];
                if( $query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                        $datas = [
                            'title' => get_the_title(),
                            'link'  => get_the_permalink(),
                            'metas'  => $object->ptc_posted_on()
                        ];
                        array_push( $outputs, $datas );
                    endwhile;
                    printf( '<div id="collapse-0%d" class="collapse %s" aria-labelledby="heading-0%d" data-parent="#accordion-tab-collapse">
                    <ul class="b-2 row wrap pb-0 primary-color tab-s-3">', $c_key+1, $c_key == 0 ? 'show active' : '', $c_key+1);
                    $render_inner = '
                            <li class="b-item-wrap col-12">
                                <div class="b-item">
                                    <div class="b-title-wrap">
                                        <div class="b-title margin-bottom-15"><a href="%s">%s</a></div>
                                        <div class="b-cat"><span>%s</span></div>
                                    </div>
                                </div>
                            </li>';
                        foreach($outputs as $output) :
                            printf( $render_inner, $output['link'], $output['title'], $output['metas']);
                        endforeach;
                    echo '</ul></div>';
                endif;
                // printf($c_render, $name);
                echo '</div>';
            endforeach;
            echo '</div>';
        echo '</div>';
        return ob_get_clean();
    }
endif;