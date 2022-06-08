<div class="news-card">
    <div class="news-card__cover">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <div class="news-card__body">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="news-card__date"><?=get_the_date( 'd F Y / H:m' ); ?></div>
    </div>
</div>