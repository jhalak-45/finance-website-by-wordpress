<?php get_header() ?>
<div class="container-fluid">
    <p class="text-dark p-2 title-sub"><a class="link text-primary" href="<?php bloginfo(); ?>">Home </a>» <?php the_title() ?></p>

    <h2 class="h2 text-center p-3 mt-3 mb-3 title"><?php the_title() ?></h2>
    <?php if (function_exists('photo_gallery')) {
        photo_gallery(5);
    } ?>
</div>

<?php get_footer() ?>