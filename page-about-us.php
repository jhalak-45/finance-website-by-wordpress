<?php get_header(); ?>
<div class="container-fluid container-about">

<p class="text-dark title-sub p-1"><a class="link text-primary" href="<?php bloginfo(); ?>">Home »</a> <?php the_title()?></p>
    <h2 class="h2 text-center p-1 mt-2 mb-2 title"><?php the_title() ?></h2>
    <div class="title p-1 mb-3">
        <!-- <h2 class="h2 text-center mt-1 text-primary mb-0"><?php the_title() ?> Us</h2> -->
        <!-- <p class="text-center  m-0 text-danger sub-title"> Who We are</p> -->
    </div>
    <!-- <hr> -->
    <div class="introduction mt-2">

        <h4 class="h4 text-danger "><?php the_field('introduction_title', 14) ?></h4>
        <div class="row p-2">
            <div class="col-6">
                <p class="text-justify">
                    <?php the_field('introduction_text', 14) ?>
                </p>
            </div>
            <div class="col-6">
                <img src="<?php the_field('image_of_organization', 14) ?>" alt="our image" height="100%" width="100%">
            </div>
        </div>

        <div class="mission row p-2">
            <div class="col p-1 container-mission">
                <h5 class="h5 ">
                    Our Mission
                </h5>
                <p class="text">
                    <?php the_field('mission_text', 14) ?>
                </p>
            </div>
            <div class="col p-1 container-vision">
                <h5 class="h5 ">
                    Our Vision
                </h5>
                <p class="text">
                    <?php the_field('vision_text', 14) ?>
                </p>

            </div>

        </div>
        <div class="goal">
            <h5 class="h5">Our Goal</h5>
            <p class="text">
                <?php the_field('goal_text', 14) ?>
            </p>
        </div>

        <!-- </div> -->
        <!-- <div class="directors p-3  mt-4 container-fluid row justify-content-center">
            <div class="title">
                <h3 class="h3 text-center text-danger">Our Staffs</h3>
            </div>
            <div class="card p-1 m-1 w-25">
                <img src="<?php the_field('image_of_organization', 14) ?>" alt="org img" height="100%">
                <div class="about">
                    <h4 class="h4">xyz Dhami</h4>
                    <p class="text-muted">Director</p>
                    <p>9859595959</p>
                </div>
                <span>facebook whats app</span>
            </div>
            <div class="card p-0 m-1 w-25">
                <img src="<?php the_field('image_of_organization', 14) ?>" alt="org img" height="100%">
                <div class="about">
                    <h4 class="h4">xyz Dhami</h4>
                    <p class="text-muted">Director</p>
                    <p>9859595959</p>
                </div>
                <span>facebook whats app</span>
            </div>
            <div class="card p-1 m-1 w-25">
                <img src="<?php the_field('image_of_organization', 14) ?>" alt="org img" height="100%">
                <div class="about p-2 text-center">
                    <h4 class="h4 text-center mt-0">xyz Dhami</h4>
                    <p class="text-muted text-center">Director</p>
                    <p class=" text text-center">9859595959</p>
                </div>
                <span>facebook whats app</span>
            </div>
            <div class="card p-1 m-1 w-25">
                <img src="<?php the_field('image_of_organization', 14) ?>" alt="org img" height="100%">
                <div class="about">
                    <h4 class="h4">xyz Dhami</h4>
                    <p class="text-muted">Director</p>
                    <p>9859595959</p>
                </div>
                <span>facebook whats app</span>
            </div>


        </div> -->
        <div class="our-workingarea">
            <h5 class="title h5">Our Working Areas</h5>
            <?php the_field('working_areas', 14) ?>

        </div>
    </div>


    <?php get_footer(); ?>
</div>