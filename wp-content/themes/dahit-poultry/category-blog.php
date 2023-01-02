<?php get_header(); ?>

<div class="container">

    <div class="row">

        <!-- query -->
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'category_name' => 'blog',
            'posts_per_page' => 3,
            'paged' => $paged,
        );
        ?>
        <?php if ($wp_query->have_posts()) : ?>
            <!-- begin loop -->
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="col-md-8 mb-2">
                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>">
                            <h5 class="blog-title text-left"><?php the_title(); ?></h5>
                            <div class="blog-text"><?php echo custom_excerpt(); ?></div>
                        </a>

                    </div>
                </div>
                <div class="col-md-4 mt-4 mb-2">
                    <div class=" mt-3 " style="width: 13rem;">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" class="img-fluid" alt="..." style="aspect-ratio:4/3; ">
                        </a>

                    </div>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
    <?php wp_reset_postdata(); ?>
    <!-- End Second Column -->
    <?php get_template_part('partials/section', 'pagination'); ?>
</div>

<?php get_footer(); ?>