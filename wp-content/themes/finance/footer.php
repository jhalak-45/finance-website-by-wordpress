<footer class="outer-footer">
    <?php wp_footer()?>
    <div class="footer">
        <div class="first p-2">
            <h2 class="h2 text-left">Contact Information</h2>
            <div class="information-container">
                <div class="bloginfo">
                    <h4 class="h4"><?php the_field('org_name', 18); ?></h4>
                </div>
                <div class="address">
                    <h5 class="h5">Address</h5>
                    <p class="text"><?php the_field('address_1', 18);
                                    ?>
                </div>
                <div class="contact">
                    <p class="text"><?php
                                    the_field('contact_number_1', 18);
                                    echo ' ,';
                                    the_field('contact_number_2', 18);
                                    echo ' , ';
                                    the_field('contact_number_3', 18)
                                    ?>
                    </p>



                </div>
                <div class="email">
                    <h5 class="h5">Email </h5>
                    <p class="text"><?php the_field('email_address', 18) ?></p>
                </div>
                <div class="link-icons">
                    <h5 class="h5">Social Links</h5>
                    <div class="links p-3 button-group">
                        <a href="<?php the_field('social_link_facebook', 18) ?>" class="link mr-2"><i class='bx bxl-facebook-circle facebook'></i></a>
                        <a href="<?php the_field('social_link_twitter', 18) ?>" class="link mr-2"><i class='bx bxl-twitter twitter'></i></a>
                        <a href="<?php the_field('social_link_linkedin', 18) ?>" class="link mr-2"><i class='bx bxl-linkedin linkedin'></i></a>
                        <a href="<?php the_field('social_link_instagram', 18) ?>" class="link ml-2"><i class='bx bxl-instagram instagram'></i></a>


                    </div>
                    <?php //include 'socialmedia.php' ?>
                </div>
            </div>

        </div>
        <div class="second p-2">
            <?php dynamic_sidebar('footer-1') ?>
        </div>
        <div class="third p-2">
            <?php dynamic_sidebar('footer-2'); ?>
        </div>

    </div>
    <hr class="horizontal-line">
    <div class="last-footer">
        <p class="text-center">&copy; <?php bloginfo(); ?> NEPAL All Right Reserved 2022 and Developed by <a href="http://mohrain.com">Mohrain Websoft Pvt. Ltd. </a> Nepal</p>
    </div>




</footer>
<script type="text/javascript">
    $(document).ready(function() {
        $("#menu-toggler").click(function() {
            $("#navbarNav").toggle();
        });
    });
</script>

</body>

</html>