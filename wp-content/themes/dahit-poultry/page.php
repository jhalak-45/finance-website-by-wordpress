<?php get_header(); ?>
<div class="container-fluid mt-2">
    <div class="container custom-tbl ">
        <!-- <h1 class="h4 text-center fw-bold mb-5"></h1> -->
        <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
        ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>