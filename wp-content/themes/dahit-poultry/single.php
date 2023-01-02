<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php
            while (have_posts()) : the_post(); {
            ?>
                    <div class="post-title">
                        <h1 class="h3 fw-bold my-4 blog-title" style="color: Teal;"><?php the_title(); ?></h1>
                    </div>
                    <div class="img mt-3 ">
                        <?php if (has_post_thumbnail()) { ?>

                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(null, 'small'); ?>" alt="<?php the_title(); ?>">

                        <?php  } ?>
                    </div>
                    <div class="text-justify my-4 font-20px font-noto-sans " style="color: #5a769f;">
                        <?php the_content(); ?>
                    </div>
                    <?php echo do_shortcode('[TheChamp-FB-Comments]') ?>

            <?php
                }

            endwhile;
            ?>

        </div>
        <div class="col-md-3">
            <!-- <h4 class="mt-5"> Our Articles</h4> -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>