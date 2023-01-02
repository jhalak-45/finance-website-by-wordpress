<div class="container-fluid mt-5  ">
    <div class="row " style="background-color: lightblue; ">
        <div class="col-md-6 mt-1">
            <?php
            $wp_query = new WP_Query(array(
                'post_type' => 'Vehicle',
                'posts_per_page' => 1,

            ));
            ?>
            <?php if ($wp_query->have_posts()) : ?>
                <!-- begin loop -->
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="card-body  mt-4 mb-4">
                        <a href="<?php the_permalink(); ?>">
                            <h5 class="vehicle-section-title"><?php the_title(); ?></h5>
                        </a>
                        <p class="vehicle-section-content px-5 mt-5"><?php echo custom_excerpt(); ?></p>


                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>

        <div class="col-md-6">
            <?php
            $wp_query = new WP_Query(array(
                'post_type' => 'Vehicle',
                'posts_per_page' => 1,

            ));
            ?>
            <?php if ($wp_query->have_posts()) : ?>
                <!-- begin loop -->
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class=" my-3 img_link mb-3">
                        <a href="<?php the_permalink(); ?>">
                            <a href="<?php the_permalink(); ?>">
                                <img class="vehicle-img " style="width:100%;" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php the_title(); ?>"></a>
                        </a>

                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
    <div class=" widget d-flex justify-content-center mt-4 ms-5 ">
        <?php dynamic_sidebar('ads-three'); ?>
    </div>
</div>