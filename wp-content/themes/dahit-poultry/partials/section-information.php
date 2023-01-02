<div class="container">
    <div class="row">
        <h3 class="information-header my-5">We Provide best chicks <br> ---and---- <br> Pelete feed in the city</h3>
        <div class="col-md-4">
            <h4 class="information-title " style="color: darkgoldenrod;">
                Our Products
                <span class="view-all"> <a href="category/products">view all </a></span>
            </h4>
            <hr style="height: 5px;background-color:crimson;">
            <?php
            $wp_query = new WP_Query(array(
                'post_type' => 'post',
                'category_name' => 'products',
                'posts_per_page' => 2,

            ));
            ?>
            <div>
                <?php if ($wp_query->have_posts()) : ?>
                    <!-- begin loop -->

                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <div class="col-md-3 mt-4 ">
                            <div class="information-img" style="width: 13rem;">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" class="img-fluid mx-auto" alt="..." style="aspect-ratio:4/3">
                                </a>
                                <div class="card-body">
                                    <h5 class="information-item-name"><?php the_title(); ?></h5>

                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>



        <div class="col-md-4">
            <h4 class="information-title" style="color: darkgoldenrod;">
                <span> Best Services </span>
                <span class="view-all"> <a href="category/services">view all</a></span>
            </h4>
            <hr style="height: 5px;background-color:green;">
            <?php
            $wp_query = new WP_Query(array(
                'post_type' => 'post',
                'category_name' => 'Services',
                'posts_per_page' => 2,

            ));
            ?>
            <div>
                <?php if ($wp_query->have_posts()) : ?>
                    <!-- begin loop -->

                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <div class="col-md-3 mt-4">
                            <div class="information-img" style="width: 13rem;">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" class="img-fluid" alt="..." style="aspect-ratio:4/3">
                                </a>
                                <div class="card-body">
                                    <h5 class="information-item-name"><?php the_title(); ?></h5>

                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>




        <div class="col-md-4">
            <h4 class="information-title " style="color: darkgoldenrod;">
                <span> Blogs </span>
                <span class="view-all"><a href="categoy/blog">view all</a></span>
            </h4>
            <hr style="height: 5px;background-color: darkblue;">
            <?php
            $wp_query = new WP_Query(array(
                'post_type' => 'post',
                'category_name' => 'blog',
                'posts_per_page' => 2,

            ));
            ?>
            <div>
                <?php if ($wp_query->have_posts()) : ?>
                    <!-- begin loop -->

                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <div class="col-md-3 mt-4">
                            <div class="information-img" style="width: 13rem;">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" class="img-fluid" alt="..." style="aspect-ratio:4/3">
                                </a>
                                <div class="card-body">
                                    <h5 class="information-item-name"><?php the_title(); ?></h5>

                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>



    </div>
</div>