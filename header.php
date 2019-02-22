<?php
/*
 * Header for the IS6120 theme.
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<?php
    if(is_front_page()):
    endif;
?>
    
<body <?php body_class(); ?>>
<header>
    <div>
        <?php if (has_custom_logo()): the_custom_logo(); endif;?>
    </div>
    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
</header>