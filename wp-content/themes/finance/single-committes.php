<?php //Template Name: Executive committes
get_header();
?>
<section class="p-2  pt-3 container-fluid justify-content-center">
    <p class="text-dark title-sub ml-1 p-1"><a class="link text-primary" href="<?php bloginfo(); ?>">Home </a> » About » <?php the_title() ?></p>
    <h2 class="h2 title text-center p-3"><?php the_title() ?></h2>
    <div class="committe-content p-3  inline-flex px-auto ">

        <?php
        $args = array(
            'post_type'      => 'committe',
            'posts_per_page' => 10,
            'post_status'=>'publish',

        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) {
            $loop->the_post();
        ?>

            <div class="card mx-auto my-2 ">
                <div class="image text-center">
                    <img src=" <?php the_field('image_of_member') ?>" alt="image of mempers" class="img-responsive text-center card-img-top" height="150px" width="150px">
                </div>
                <div class="details card-body">
                    <h4 class="h4 text-center p-2 name"> <?php the_field('name_of_member') ?>
                    </h4>
                    <p class="text-muted text-center post"> <?php the_field('post_of_member') ?>
                    </p>
                    <p class=" text-center email"><i class='bx bx-envelope text-danger' ></i>  <?php the_field('email_of_member') ?>
                    <p class="text-center address"><i class='bx bx-location-plus text-info' ></i>  <?php the_field('address_of_member') ?>
                </div>
            </div>

        <?php
        } ?>
    </div>

</section>
<?php

get_footer();
?>