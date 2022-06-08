<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( 'template-parts/header/default' ); ?>

    <main class="site-content">
        <?php get_template_part( 'template-parts/page-header' ); ?>