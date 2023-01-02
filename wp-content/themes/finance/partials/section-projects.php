<section class="container-fluid mt-0 p-3">
<div class="top-head  d-flex justify-content-between p-4">
    <div class="title p-2 ml-4">
        <h2 class="title p-2">All Programs</h2>
    </div>
    <div class="button mr-5">
        <button type="button" class="btn btn-primary  button-view"><a href="finance/ongoing-program/" class="link text-light"> View all</a></button>
    </div>
</div>
<div class="news-container justify-content-center p-2">
        <?php
        $args = array(
            'post_type' => 'ongoing_program',
            'posts_per_page' => 4,
        );
        $latest = new WP_Query($args);
        if ($latest->have_posts()) {
            while ($latest->have_posts()) : $latest->the_post();
        ?>
                <div class="news p-2 m-2">
                    <div class="top-thumbnail">
                        <div class="Thumbnail">
                            <a href="<?php the_permalink(); ?>" height="100%" width="100%">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>


                        </div>
                        <div class="news-title">
                            <h2> <a href="<?php the_permalink(); ?>">
                                    <?php the_excerpt(); ?>
                                </a>
                            </h2>
                            <div class="date mt-1 text-secondary">
                                <p>
                                    <i class='bx bx-time-five'></i> <?php echo get_the_date() ?>
                                </p>
                                </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary mt-1" style="font-size:13px;">
                        Read More...
                    </a>
                            </div>

                        </div>

                    
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        }
        ?>
                <?php
        $args = array(
            'post_type' => 'past_program',
            'posts_per_page' => 4,
        );
        $latest = new WP_Query($args);
        if ($latest->have_posts()) {
            while ($latest->have_posts()) : $latest->the_post();
        ?>
                <div class="news p-2 m-2">
                    <div class="top-thumbnail">
                        <div class="Thumbnail">
                            <a href="<?php the_permalink(); ?>" height="100%" width="100%">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>


                        </div>
                        <div class="news-title">
                            <h2> <a href="<?php the_permalink(); ?>">
                                    <?php the_excerpt(); ?>
                                </a>
                            </h2>
                            <div class="date mt-1 text-secondary">
                                <p>
                                    <i class='bx bx-time-five'></i> <?php echo get_the_date() ?>
                                </p>
                                </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary mt-1" style="font-size:13px;">
                        Read More...
                    </a>
                            </div>

                        </div>

                    
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        }
        ?>


    </div>


</section>