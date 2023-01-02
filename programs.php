<?php //Template Name:Programs 

  ?>
  <?php get_header();
// the_title();
  ?>
  <?php
$args = array(
    'post_type' => 'programs',
    'post_status' => 'publish',
    'posts_per_page' => 6
);
$posts = new WP_Query( $args );
if ( $posts -> have_posts() ) {
    while ( $posts -> have_posts() ) {

        the_content();
        // Or your video player code here

    }
}
wp_reset_query();
?>
  <?php the_content(); ?>
  
  <?php get_footer();?>