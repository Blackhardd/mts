<?php if( get_theme_mod( 'footer_logo' ) ) : ?>
    <div class="site-logo site-logo--footer">
        <?php $logo_image_src = wp_get_attachment_image_src( get_theme_mod( 'footer_logo' ), 'full' ); ?>
        <a href="<?=get_home_url(); ?>">
            <img src="<?=$logo_image_src[0]; ?>" width="<?=$logo_image_src[1]; ?>" height="<?=$logo_image_src[2]; ?>" alt="<?=get_bloginfo( 'name' ); ?>">
        </a>
    </div>
<?php endif; ?>