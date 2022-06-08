<?php

/**
 * News query.
 * @return WP_Query
 */
function mts_query_news( $category = null ){
    $args = array(
        'post_type'         => 'news',
        'post_status'       => 'publish',
        'posts_per_page'    => 8
    );

    if( $category ){
        $args['category'] = $category;
    }

    return new WP_Query( $args );
}


/**
 * Getting News categories.
 * @return WP_Term[]|int[]|string[]|string|WP_Error
 */
function mts_get_news_categories(){
    return get_terms( array(
        'taxonomy'          => 'category',
        'hide_empty'        => true
    ) );
}