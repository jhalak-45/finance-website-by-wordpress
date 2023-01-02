<?php get_header(); ?>
<h4 class="mt-5" style="color: brown;"> Our Articles </h4>
<?php
$wp_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category_name' => 'blog',
));
?>
<?php if ($wp_query->have_posts()) : ?>
    <!-- begin loop -->
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="card mb-3 mt-1">
            <a href="<?php esc_url(the_permalink()); ?>">
                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(null, ' '); ?>" class="img_fluid" alt="<?php the_title(); ?>">
            </a>
            <div class="card-body">
                <h5 class="sidebar-title" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            </div>
        </div>




    <?php endwhile; ?>

<?php endif; ?>