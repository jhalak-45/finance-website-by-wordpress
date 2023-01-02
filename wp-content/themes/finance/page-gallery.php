<div class="container-fluid mt-0 m-0 p-0">
<?php //Template Name:Gallery?>
<?php get_header();?>

<div class="container-gallery p-2 mt-4">
    <?php
    if (function_exists('photo_gallery')) {
        photo_gallery(1);
    }
    // the_content();
    ?>
</div>
<?php get_footer();?>
</div>