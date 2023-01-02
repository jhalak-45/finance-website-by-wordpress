<?php //Template Name: Ongoing Programs
get_header();
?>
<section class="p-2  pt-3 container-fluid justify-content-center">
    <p class="text-dark title-sub ml-1 p-1"><a class="link text-primary" href="<?php bloginfo(); ?>">Home </a> » <?php the_title() ?></p>
    <h2 class="h2 title text-center p-3"><?php the_title() ?></h2>
    <div class="committe-content p-3  inline-flex px-auto ">

        <?php
        $args = array(
            'post_type'      => 'ongoing_program',
            'posts_per_page' => 10,
            'post_status' => 'publish',

        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) {
            $loop->the_post();
        ?>

            <div class="news p-3 m-2">
                <div class="top-thumbnail row">
                    <div class="Thumbnail col-md-4">
                        <a href="<?php the_permalink(); ?>" height="100px" width="150px">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                        <div class="date mt-1 text-secondary">
                            <p>
                                <i class='bx bx-time-five'></i> <?php echo get_the_date() ?>
                            </p>
                        </div>

                    </div>
                    <div class="col-md-8 news-title">

                        <h2> <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="mt-3">
                            <p> <?php the_excerpt(); ?>
                            </p>

                        </div>
                    </div>
                </div>
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary m-0" style="font-size:13px;">
                    Read More...
                </a>
            </div>
        <?php
        } ?>
    </div>

</section>
<?php

get_footer();
?>