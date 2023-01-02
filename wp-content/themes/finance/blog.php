
<?php get_header(); ?>

<div class="news-container p-2 w-100 h-100">
<?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'full'); ?>
    </a>
    <p><?php the_excerpt(); ?></p>
<?php endwhile; endif; ?>
Output:

</div>

<?php get_footer() ?>