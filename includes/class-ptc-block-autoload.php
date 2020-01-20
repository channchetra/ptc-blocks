<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.channchetra.com
 * @since      1.0.0
 *
 * @package    Ptc_Blocks
 * @subpackage Ptc_Blocks/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Ptc_Blocks
 * @subpackage Ptc_Blocks/includes
 * @author     Chann Chetra <chetra-chann@mptc.gov.kh>
 */

namespace PTCBlock;

class BlockOption{
        // Excerpt
        public function excerpt( $post_id, $limit = 55 ) {
            return apply_filters( 'the_excerpt', wp_trim_words( get_the_content( $post_id ) , $limit ) );
        }
    
        // Query Builder
        public function get_query($attr) {
            $query_args = array(
                'posts_per_page'    => isset($attr['queryNumber']) ? $attr['queryNumber'] : 3,
                'post_type'         => isset($attr['queryType']) ? $attr['queryType'] : 'post',
                'orderby'           => isset($attr['queryOrderBy']) ? $attr['queryOrderBy'] : 'date',
                'order'             => isset($attr['queryOrder']) ? $attr['queryOrder'] : 'desc',
                'paged'             => isset($attr['paged']) ? $attr['paged'] : 1,
            );
    
            if(isset($attr['queryOffset']) && $attr['queryOffset'] && !($query_args['paged'] > 1) ){
                $query_args['offset'] = isset($attr['queryOffset']) ? $attr['queryOffset'] : 0;
            }
    
            if(isset($attr['queryInclude']) && $attr['queryInclude']){
                $query_args['post__in'] = explode(',', $attr['queryInclude']);
            }
    
            if(isset($attr['queryExclude']) && $attr['queryExclude']){
                $query_args['post__not_in'] = explode(',', $attr['queryExclude']);
            }
    
            if(isset($attr['queryTax'])){
                if(isset($attr['queryCat'])){
                    if($attr['queryTax'] == 'category' && !empty($attr['queryCat'])){
                        $var = array('relation'=>'OR');
                        foreach (json_decode($attr['queryCat']) as $val) {
                            $var[] = array('taxonomy'=>'category', 'field' => 'slug', 'terms' => $val );
                        }
                        $query_args['tax_query'] = $var;
                    }
                }
                if(isset($attr['queryTag'])){
                    if($attr['queryTax'] == 'tag' && !empty($attr['queryTag'])){
                        $var = array('relation'=>'OR');
                        foreach (json_decode($attr['queryTag']) as $val) {
                            $var[] = array('taxonomy'=>'post_tag', 'field' => 'slug', 'terms' => $val );
                        }
                        $query_args['tax_query'] = $var;
                    }
                }
            }
            return $query_args;
        }
    
    
        public function get_page_number($attr, $post_number) {
            if($post_number > 0){
                $post_per_page = isset($attr['queryNumber']) ? $attr['queryNumber'] : 3;
                $pages = floor($post_number/$post_per_page);
                return $pages ? $pages : 1;
            }else{
                return 1;
            }
        }
    
        public function get_image_size() {
            $sizes = get_intermediate_image_sizes();
            $filter = array('full' => 'Full');
            foreach ($sizes as $value) {
                $filter[$value] = ucwords(str_replace(array('_', '-'), array(' ', ' '), $value));
            }
            return $filter;
        }
    
    
        // Pagination
        public function pagination($pages = '', $paginationNav, $range = 1) {
            $html = '';
            $showitems = 3;
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            if($pages == '') {
                global $wp_query;
                $pages = $wp_query->max_num_pages;
                if(!$pages) {
                    $pages = 1;
                }
            }
            $data = ($paged>=3?[($paged-1),$paged,$paged+1]:[1,2,3]);
    
     
            if(1 != $pages) {
                $html .= '<ul class="ultp-pagination">';            
                    $display_none = 'style="display:none"';
                    if($pages > 4) {
                        $html .= '<li class="ultp-prev-page-numbers" '.($paged==1?$display_none:"").'><a href="'.get_pagenum_link($paged-1).'">'.ultimate_post()->svg_icon('leftAngle2').' '.($paginationNav == 'textArrow'?__("Previous", "ultimate-post"):"").'</a></li>';
                    }
                    if($pages > 4){
                        $html .= '<li class="ultp-first-pages" '.($paged<2?$display_none:"").' data-current="1"><a href="'.get_pagenum_link(1).'">1</a></li>';
                    }
                    if($pages > 4){
                        $html .= '<li class="ultp-first-dot" '.($paged<2? $display_none : "").'><a href="#">...</a></li>';
                    }
                    foreach ($data as $i) {
                        if($pages >= $i){
                            $html .= ($paged == $i) ? '<li class="ultp-center-item pagination-active" data-current="'.$i.'"><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>':'<li class="ultp-center-item" data-current="'.$i.'"><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
                        }
                    }
                    if($pages > 4){
                        $html .= '<li class="ultp-last-dot" '.($pages<=$paged+1?$display_none:"").'><a href="#">...</a></li>';
                    }
                    if($pages > 4){
                        $html .= '<li class="ultp-last-pages" '.($pages<=$paged+1?$display_none:"").' data-current="'.$pages.'"><a href="'.get_pagenum_link($pages).'">'.$pages.'</a></li>';
                    }
                    if ($paged != $pages) {
                        $html .= '<li class="ultp-next-page-numbers"><a href="'.get_pagenum_link($paged + 1).'">'.($paginationNav == 'textArrow' ? __("Next", "ultimate-post") : "").ultimate_post()->svg_icon('rightAngle2').'</a></li>';
                    }
                $html .= '</ul>';
            }
            return $html;
        }
    
        public function excerpt_word($charlength = 200) {
            $html = '';
            $charlength++;
            $excerpt = get_the_excerpt();
            if ( mb_strlen( $excerpt ) > $charlength ) {
                $subex = mb_substr( $excerpt, 0, $charlength - 5 );
                $exwords = explode( ' ', $subex );
                $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
                if ( $excut < 0 ) {
                    $html = mb_substr( $subex, 0, $excut );
                } else {
                    $html = $subex;
                }
                $html .= '...';
            } else {
                $html = $excerpt;
            }
            return $html;
        }
    
    
        public function taxonomy( $prams = 'category' ) {
            $data = array();
            $terms = get_terms( $prams, array(
                'hide_empty' => true,
            ));
            if( !empty($terms) ){
                foreach ($terms as $val) {
                    $data[$val->slug] = $val->name;
                }
            }
            return $data;
        }
}