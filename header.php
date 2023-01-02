<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo(); ?></title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid mt-0 m-0 p-0">
        <nav class="navbar navbar-expand-lg navbar-light  mt-0 p-1 navbar-sticky sticky-top">

            <div class="p-2 px-auto logo">
                <?php the_custom_logo(); ?>

            </div>
            <a href="<?php site_url(); ?>"><?php bloginfo(); ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-2" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'container_class' => 'collapse navbar-collapse justify-content-left ml-2',
                    'container_id'    => 'primarymenu',
                    'menu_class'      => 'navbar-nav   primary-menu menu-item',
                    'a_class' => 'dropdown-toggle',
                    'li_class' => 'nav-item dropdown',
                    'active_class' => 'active',
                    // 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    // 'walker'            => new WP_Bootstrap_Navwalker(),
                   
                ));
                ?>
            </div>
        </nav>