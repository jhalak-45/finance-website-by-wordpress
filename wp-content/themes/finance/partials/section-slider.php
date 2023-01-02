<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="4300">
  <div class="carousel-inner">


    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 4,
    );
    $latest = new WP_Query($args);
    if ($latest->have_posts()) {
      $i = 0;
      while ($latest->have_posts()) : $latest->the_post();
        $i++;
    ?>
        <div class="<?php if ($i == 1) echo 'active' ?> carousel-item">

          <?php if (has_post_thumbnail()) : ?>
            <div class=" carousel-img text-center mb-4">
              <img height="auto" width="100%" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php the_title(); ?>">
              <div class="carousel-caption d-none d-md-block ">
                <div id="pop-up-div">
                  <h2 class="carousel-text  p-2"><?php the_title(); ?></h2>
                </div>

              </div>
            </div>
          <?php endif; ?>
        </div>
    <?php
      endwhile;
      wp_reset_postdata();
    }
    ?>
  </div>
</div>