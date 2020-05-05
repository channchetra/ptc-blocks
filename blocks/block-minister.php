<?php
if ( function_exists( 'lazyblocks' ) ) :
    $option = new Ptc_Blocks();
    lazyblocks()->add_block( array(
        'id' => 14317,
        'title' => 'MPTC News lists',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 15h18v-2H3v2zm0 4h18v-2H3v2zm0-8h18V9H3v2zm0-6v2h18V5H3z" /></svg>',
        'keywords' => array(
            0 => 'MTPC',
            1 => 'List',
            2 => 'News',
        ),
        'slug' => 'lazyblock/mptc-news-lists',
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
            'control_be3a7f4803' => array(
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
            'control_877b6f4e6d' => array(
                'type' => 'image',
                'name' => 'block-header',
                'default' => '',
                'label' => 'Header Image',
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
            'control_3f897b4928' => array(
                'type' => 'select',
                'name' => 'category',
                'default' => '',
                'label' => 'Categroy',
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
                'choices' => $option->mptc_cat_listing(),
            ),
            'control_9f9a5147df' => array(
                'type' => 'url',
                'name' => 'link-to',
                'default' => '',
                'label' => 'Link to',
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
            'control_27cac342e4' => array(
                'type' => 'range',
                'name' => 'posts-per-page',
                'default' => '5',
                'label' => 'Posts per Page',
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
                'min' => '',
                'max' => '10',
            ),
            'control_da380d4dae' => array(
                'type' => 'range',
                'name' => 'char-limit',
                'default' => '100',
                'label' => 'Char Limit',
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
                'max' => '150',
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
            1 => 'wp_block',
        ),
    ) );
    
endif;
// filter for Frontend output.
add_filter( 'lazyblock/mptc-news-lists/frontend_callback', 'mptc_minister_block_output', 10, 2 );

// filter for Editor output.
add_filter( 'lazyblock/mptc-news-lists/editor_callback', 'mptc_minister_block_output', 10, 2 );

if ( ! function_exists( 'mptc_minister_block_output' ) ) :
    /**
     * Test Render Callback
     *
     * @param string $output - block output.
     * @param array  $attributes - block attributes.
     */
    function mptc_minister_block_output( $output, $attributes ) {
        $object = new Ptc_Blocks();
        ob_start();
        if ( isset( $attributes['block-header']['url'] ) ) :
            $header = $attributes['block-header']['url'] ;
        endif;
        $render_title = '<img class="avatar" src="%s" />
        <div class="block-title3 mb-0 primary-background-color">
            <a title="មានបន្ត" href="#">%s</a>
        </div>';
        printf($render_title, $header, $attributes['block-title']);
        
        $args = array(
            'post_type'             => array( 'post' ),
            'post_status'           => array( 'publish' ),
            'posts_per_page'        => $attributes['posts-per-page'],
            'cat'					=> $attributes['category']
        );
        $block_query = new WP_Query( $args );
        $outputs = [];
        if( $block_query->have_posts()) :
            echo '<ul class="b-2 bordered">';
            while ($block_query->have_posts()) :
                $block_query->the_post();
                $datas = [
                    'title' => get_the_title(),
                    'link'  => get_the_permalink(),
                    'metas'  => $object->ptc_posted_on()
                ];
                array_push( $outputs, $datas );
            endwhile;
            $render_content = '
            <li class="b-item-wrap">
                <div class="b-item">
                    <div class="b-title-wrap">
                        <div class="b-title margin-bottom-10"><a href="%s">%s</a></div>
                        <div class="b-cat">%s</div>
                    </div>
                </div>
            </li>';
            foreach($outputs as $output) :
                printf($render_content, $output['link'], $output['title'], $output['metas'] );
            endforeach;
            echo '</ul>';
        endif;
        wp_reset_postdata();
        return ob_get_clean();
    }
endif;