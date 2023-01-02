<div class="container-fluid">
    <div class="row" style="background-color: lightskyblue;">
        <div class="col-md-2 footer-logo">
            <div class="d-flex justify-content-left mt-0">

                <div class="brand-logo">
                    <?php if (has_custom_logo()) :
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'large');
                    ?>
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img class="img-fluid" src="<?php echo $image['0']; ?>" alt="" style="max-height: 120px;margin:55px 0 0 30px;">
                        </a>
                    <?php endif ?>
                </div>

            </div>
            <h3 class="mt-3" style="text-align: center;font-weight:700;">Dahit Poultry Suppliers</h3>
        </div>
        <div class="col-md-4 mt-5 ">
            <h4>Contact Info </h4>
            <i class="fas fa-home"> Dahit Poultry Suppliers</i> <br>
            <i class="fas fa-map-marker-alt mt-2"> Bedkot-9 Lalpur </i><br>
            <i class="fas fa-mobile mt-2"> +9779810769717</i><br>
            <i class="fas fa-envelope mt-2"> dangauramukesh86@gmail.com</i> <br>
        </div>
        <div class="col-md-3 mt-5 ">
            <h4>partners</h4>
            <i class="fas fa-signature "> Rajesh Dangaura</i><br>
            <i class="fas fa-mobile"> +9779810769717</i><br>
            <i class="fas fa-signature mt-3"> Manoj Pandey</i><br>
            <i class="fas fa-mobile"> +9779810769717</i><br>

        </div>
        <div class="col-md-3 mt-4">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3491.1367091063503!2d80.22452941415347!3d28.95366937622643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1afc92cd7ca45%3A0xcbffaffd17b27538!2sDahit%20Poultry%20Suppliers%20Lalpur!5e0!3m2!1sne!2snp!4v1635314988703!5m2!1sne!2snp" width="270" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="row mt-0 " style="background-color: lightskyblue;">
        <p class="text-center">&copy; Dahit Poultry Suppliers 2021</p>
    </div>
</div>
<?php wp_footer(); ?>