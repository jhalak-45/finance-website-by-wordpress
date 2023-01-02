<div class="container-fluid">
    <div class="row">
        <h3 style="text-align:center; font-weight:700;color: skyblue;" class="mb-5"> ---- Why We Are Best ----</h3>
        <div class="col-md-9">
            <div class="row">
                <?php
                $wp_query = new WP_Query(array(
                    'post_type' => 'whybest',

                    'posts_per_page' => 3,
                ));
                ?>
                <?php if ($wp_query->have_posts()) : ?>
                    <!-- begin loop -->
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                        <div class="col-md-4 mt-1">
                            <div class="" style="width: 18rem;">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" class="img-fluid" alt="..." style="aspect-ratio:4/3; ">
                                </a>
                            </div>
                        </div>
                        <div class=" card col-md-8 my-2" style="background: #f0f1f3;">
                            <div class="card-body">
                                <a href="<?php the_permalink(); ?>">
                                    <h5 class="whybest-title"><?php the_title(); ?></h5>
                                </a>

                                <p class="whybest-content"><?php echo custom_excerpt(); ?></p>

                            </div>
                        </div>





                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-3">
            <?php
            $wp_query = new WP_Query(array(
                'post_type' => 'post',
                'category_name' => 'blog',
                'posts_per_page' => 2,
            ));
            ?>
            <?php if ($wp_query->have_posts()) : ?>
                <!-- begin loop -->
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                    <div class=" col-md-3 mt-2">
                        <div class="" style="width: 18rem;">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" class="img-fluid" alt="..." style="aspect-ratio:4/3">
                            </a>
                            <div class="card-body mt-3 mb-4">
                                <h5 class="our-product-title text-center"><?php the_title(); ?></h5>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</div>