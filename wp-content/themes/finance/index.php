<?php get_header(); ?>

<div class="container-fluid mt-0 m-0 p-0">

    <section class="news-container p-2 w-100 h-auto">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="news m-2">
                    <div class="top-thumbnail">
                        <div class="Thumbnail">
                            <a href="<?php the_permalink(); ?>" height="100px" width="200px">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>

                        </div>
                        <div class="news-title">
                            <h2> <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="mt-0">
                        <p> <?php the_excerpt(); ?>
                        </p>
                        <div class="date  text-secondary">
                            <p>
                                <i class='bx bx-time-five'></i> <?php echo get_the_date() ?>
                            </p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary m-0" style="font-size:13px;">
                            Read More...
                        </a>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>

    </section>


</div>
<?php get_footer() ?>