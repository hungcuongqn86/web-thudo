<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta name="description" content="<?php if (is_single()) {
        single_post_title('', true);
    } else {
        bloginfo('name');
        echo " - ";
        bloginfo('description');
    }
    ?>"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3" style="background: #ff9841;z-index: 999;height: 4px;"></div>
        <div class="col-sm-9 d-none d-md-block" style="background-color: #6d6e71;"></div>
    </div>
</div>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        ?>

        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"
           title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img
                    src="<?php echo esc_url($logo[0]); ?>"
                    alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown"
                aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarDropdown">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'navbar',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new b4st_walker_nav_menu()
            ));
            ?>

            <?php echo b4st_contact_menu(); ?>
        </div>

    </div>
</nav>
