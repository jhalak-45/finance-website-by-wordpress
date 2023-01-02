<div class="container-fluid mt-0 m-0 p-0 ">
    <?php get_header(); ?>
    <section class="news-container p-3 single-page">
        
        <div class="news-details p-2 mt-1">
        <p class="text-dark "><a class="link text-primary" href="<?php bloginfo(); ?>">Home»</a> <?php the_title()?></p>

            <?php include_once 'socialmedia.php' ?>
            <div class="thumnail">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
            <div class="posted-date row p-2">
                <div class="time col mb-2 p-2 bg-light text-danger">
                    <?php echo get_the_time() ?>
                </div>
                <div class="time col mb-2 p-2 bg-light text-danger">
                    <?php the_author() ?>
                </div>

            </div>

            <div class="excerpt">
                <?php the_excerpt(); ?>

            </div>
            <div class="news-content">
                <?php the_content(); ?>

            </div>
            <div class="comment-form">
                <?php comment_form(); ?>

            </div>
        </div>
       <?php get_sidebar();?>


    </section>

    <?php get_footer() ?>
</div>