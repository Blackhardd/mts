<div class="site-logo site-logo--header">
    <?php if( get_theme_mod( 'custom_logo' ) && has_custom_logo() ) : ?>
        <a href="<?=get_home_url(); ?>">
            <?php $logo_image_src = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
            <img src="<?=$logo_image_src[0]; ?>" width="<?=$logo_image_src[1]; ?>" height="<?=$logo_image_src[2]; ?>" alt="<?=get_bloginfo( 'name' ); ?>">
        </a>
    <?php else : ?>
        <h1><?=get_bloginfo( 'name' ); ?></h1>
    <?php endif; ?>
</div>