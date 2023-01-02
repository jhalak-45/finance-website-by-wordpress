<div class="container">
    <div class="row my-5">
        <h1 class="our-mission-header">Our Mission</h1>
        <p class="our-mission-content my-3">Our Goal is to provide Best pelete feed with best chicks so the farmers
            could maximize thier profit
        </p>
        <?php
        $wp_query = new WP_Query(array(
            'post_type' => 'mission',
            'posts_per_page' => 4,

        ));
        ?>
        <?php if ($wp_query->have_posts()) : ?>
            <!-- begin loop -->

            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="col-md-3 mt-4 text-center  ">
                    <div class="our-mission-img" style="width: 13rem;">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" class="img-fluid " alt="..." style="aspect-ratio:4/3">
                        </a>
                        <div class="card-body">
                            <h5 class="our-product-title text-center"><?php the_title(); ?></h5>

                        </div>
                    </div>
                </div>


            <?php endwhile; ?>

        <?php endif; ?>


    </div>
</div>