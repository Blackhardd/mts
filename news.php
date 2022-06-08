<?php

/**
 * Template Name: News
 * 
 * @since MTS 1.0.0   
 */

get_header();

?>

<div class="container">
    <?php get_template_part( 'template-parts/news/categories' ); ?>
    <?php get_template_part( 'template-parts/news/grid' ); ?>
</div>

<?php

get_footer();