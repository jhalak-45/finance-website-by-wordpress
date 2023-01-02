<?php get_header(); ?>
<div class="container mt-5 ">
    <div class="row ">

        <?php
        $wp_query = new WP_Query(array(
            'post_type' => 'post',
            'category_name' => 'Services',
            'posts_per_page' => 12,

        ));
        ?>
        <?php if ($wp_query->have_posts()) : ?>
            <!-- begin loop -->
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="col-md-3 ml-5 mb-5">

                    <div class="card-body " style="background-color:#b2ebf2 ;">
                        <h5 class=" text-center" style="color:#295f78;"><?php the_title(); ?></h5>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <a href="<?php the_permalink(); ?>">
                            <img class="img-fluid" style="aspect-ratio:4/3; margin-top:10px; margin: bottom 30px;" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php the_title(); ?>"></a>
                    </a>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>

    </div>
    <?php wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>