<?php

$page_link = get_permalink( get_the_ID() );
$terms = mts_get_news_categories();

$mark_html = '<svg width="19" height="19" fill="none"><rect x="2.5" y="2.5" width="14" height="14" rx="7" stroke="url(#a)" stroke-width="5"/><defs><linearGradient id="a" x1="0" y1="0" x2="0" y2="19" gradientUnits="userSpaceOnUse"><stop stop-color="#4493F3"/><stop offset="1" stop-color="#64A4F1"/></linearGradient></defs></svg>';

if( $terms ) :

    ?>
        <div class="news-categories">
            <a <?=isset( $_GET['ch_cat'] ) ? 'href="' . $page_link . '"' : ''; ?> <?=!isset( $_GET['ch_cat'] ) ? 'class="active"' : ''; ?>>
                <?=!isset( $_GET['ch_cat'] ) ? $mark_html : ''; ?>
                <span><?=__( 'Все новости', 'mts' ); ?></span>
            </a>

            <?php foreach( $terms as $term ) : ?>
                <?php
                    
                $is_active = $_GET['ch_cat'] === $term->slug;
                $category_link = add_query_arg( array( 'ch_cat' => $term->slug ), $page_link );
                
                ?>
                <a <?=!isset( $_GET['ch_cat'] ) || !$is_active ? 'href="' . $category_link . '"' : ''; ?> <?=$is_active ? 'class="active"' : ''; ?>>
                    <?=$is_active ? $mark_html : ''; ?>
                    <span><?=$term->name; ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    <?php

endif;