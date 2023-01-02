<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="d-flex justify-content-left ">

                    <div class="brand-logo">
                        <?php if (has_custom_logo()) :
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $image = wp_get_attachment_image_src($custom_logo_id, 'large');
                        ?>
                            <a href="<?php echo esc_url(home_url()); ?>">
                                <img class="img-fluid" src="<?php echo $image['0']; ?>" alt="" style="max-height: 120px;">
                            </a>
                        <?php endif ?>
                    </div>
                    <h2 id="site-title">Dahit Poultry<br> Suppliers</h2>
                </div>


            </div>
            <div class="col-md-3">
                <a href="https://www.facebook.com"><i class="fab fa-facebook p-1 mt-5 fa-2x"></i></a>
                <a href="https://www.twitter.com"><i class="fab fa-twitter  p-1 mt-5 fa-2x"></i></a>
                <a href="https://www.github.com"><i class="fab fa-github  p-1 mt-5 fa-2x"></i></a>
                <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in p-1  mt-5 fa-2x"></i></a>
<i class="fas fa-search"></i>
            </div>
        </div>

    </div>
    <nav class="navbar container-fluid  navbar-expand-md my-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primarymenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <?php
        wp_nav_menu(array(
            'theme_location'  => 'primary',
            'depth'           => 2,
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse justify-content-left',
            'container_id'    => 'primarymenu',
            'menu_class'      => 'navbar-nav   primary-menu',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>
    </nav>