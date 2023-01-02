<?php get_header() ?>
<div class="container-fluid">
    <p class="text-dark p-2 title-sub"><a class="link text-primary" href="<?php bloginfo(); ?>">Home </a>» Gallery »<?php the_title() ?></p>

    <h2 class="h2 text-center p-3 mt-3 mb-3 title"><?php the_title() ?></h2>
    <div class="image-gallery  p-2 mt-1">
        <?php the_content(); ?>

    </div>
</div>


<?php get_footer() ?>