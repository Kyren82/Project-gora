<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
    <header>
        <h1 class="header-title">
            <?php 
                $header_link = get_field('header-title-link', 'option'); 
            ?>
            <a href="<?php echo esc_url($header_link["url"]); ?>"> <?php echo esc_html($header_link["title"]); ?> </a>
        </h1>
        <ul class="header-nav">
            <?php 
                $header_nav = get_field('header-nav', 'option');
                foreach ($header_nav as $value) : $nav_link = $value["nav-link"]?>
                    <li><a href="<?php echo(esc_url($nav_link["url"])); ?>"><?php echo(esc_html($nav_link["title"])); ?></a></li>
                <?php endforeach; ?>
        </ul>
    </header>