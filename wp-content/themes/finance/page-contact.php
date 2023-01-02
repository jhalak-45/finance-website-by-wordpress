<?php get_header() ?>
<div class="container-fluid mt-5 contact-page p-2">

    <p class="text-dark title-sub"><a class="link text-primary" href="<?php bloginfo(); ?>">Home »</a> <?php the_title() ?></p>
    <h2 class="h2 text-center pt-2 mt-2 p-2 title"><?php the_title() ?></h2>
    <div class="container-contact row px-auto">
        <div class="col-md-5 information-container p-3">
            <div class="logo p-2 mb-4">
                <?php the_custom_logo() ?>
            </div>
            <div class="bloginfo">
                <h3 class="h3 text-danger"><?php the_field('name_of_org', 18); ?></h3>
            </div>
            <div class="address p-1">
                <h5 class="h5 text-primary">Our Location</h5>
                <p class="text"><?php the_field('address_1', 18);
                                echo ',';
                                the_field('address_2', 18) ?></p>

            </div>
            <div class="contact p-1">
                <h5 class="h5 text-primary">Contact Us</h5>
                <p class="text"><?php
                                the_field('contact_number_1', 18);
                                echo ' ,';
                                the_field('contact_number_2', 18);
                                echo ' , ';
                                the_field('contact_number_3', 18)   ?>
                </p>



            </div>
            <div class="email p-1">
                <h5 class="h5 text-primary">Email </h5>
                <p class="text"><?php the_field('email_address', 18) ?></p>
            </div>
            <div class="link-icons">
                <h5 class="h5 text-primary">Social Links</h5>
                <div class="links p-2">
                    <a href="<?php the_field('facebook_link', 18) ?>" class="link"><i class='bx bxl-facebook-circle facebook'></i></a>
                    <a href="<?php the_field('twitter_link', 18) ?>" class="link"><i class='bx bxl-twitter twitter'></i></a>
                    <a href="<?php the_field('linkedin_link', 18) ?>" class="link"><i class='bx bxl-linkedin linkedin'></i></a>
                    <a href="<?php the_field('instagram_link', 18) ?>" class="link"><i class='bx bxl-instagram instagram'></i></a>


                </div>
            </div>
        </div>
        <div class="col-md-7 contactform-container p-2 mt-1">
            <?php the_content(); ?>
        </div>
    </div>

    <div class="map-location">
        <h3 class="h3 text-primary p-2">Our Location
        </h3>
        <iframe src="<?php the_field('map_location', 18) ?>" width="100%" height="450" style="border:1;" allowfullscreen="true" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>
<?php get_footer(); ?>