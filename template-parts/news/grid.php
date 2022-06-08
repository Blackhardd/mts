<?php

$news_loop = mts_query_news( $_GET['ch_cat'] );

if( $news_loop->have_posts() ) :
    echo '<div class="news-grid">';

    while( $news_loop->have_posts() ) :
        $news_loop->the_post();
        get_template_part( 'template-parts/news/card' );
    endwhile;
    
    echo '</div>';
else :
    echo '<h2>' . __( 'Новостей не найдено', 'mts' ) . '</h2>';
endif;

wp_reset_postdata();