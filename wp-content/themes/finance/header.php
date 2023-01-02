<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo(); ?></title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class()?>>
        <nav class="navbar navbar-expand-lg navbar-light  mt-0 p-1 navbar-sticky sticky-top">

            <div class="p-2 px-auto logo">
                <?php the_custom_logo(); ?>

            </div>
            <div class="logo-text p-1">
                <a href="<?php site_url(); ?>"><?php bloginfo(); ?>

            </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navabrNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle-navigation">
                <span class="navbar-toggler-icon" id="menu-toggler"></span>
            </button>
            <div class="collapse navbar-collapse ml-2" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'container_class' => 'collapse navbar-collapse justify-content-left ml-2',
                    'container_id'    => 'primarymenu',
                    'menu_class'      => 'navbar-nav   primary-menu menu-item',
                    'a_class' => 'dropdown-toggle',
                    'li_class' => 'nav-item dropdown-item',
                    'active_class' => 'active',

                ));
                ?>
            </div>
        </nav>