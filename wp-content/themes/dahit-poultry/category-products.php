<?php get_header(); ?>

<div class="container">

    <div class="row">
        <h3 class="mt-3" style="text-align: center; color:#4d4331; font-weight:700;">Our Products</h3>
        <!-- query -->
        <?php
        $wp_query = new WP_Query(array(
            'post_type' => 'post',
            'category_name' => 'products',
            'posts_per_page' => 10,
        ));
        ?>
        <?php if ($wp_query->have_posts()) : ?>
            <!-- begin loop -->
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <div class="col-md-3 mt-4">
                    <div class="" style="width: 13rem;">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" class="img-fluid" alt="..." style="aspect-ratio:4/3">
                        </a>
                        <div class="card-body">
                            <h5 class="text-center" style="color:#4d4331;"><?php the_title(); ?></h5>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>

    </div>
    <?php wp_reset_postdata(); ?>
    <!-- End Second Column -->

</div>

<?php get_footer(); ?>