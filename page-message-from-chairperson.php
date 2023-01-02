<?php get_header(); ?>
<div class="container-fluid">
    <p class="text-dark title-sub mt-1 p-2"><a class="link text-primary" href="<?php bloginfo(); ?>">Home </a>» <?php the_title()?></p>
    <h2 class="h2 text-center p-3 mt-3 mb-3 title"><?php the_title() ?></h2>

    <div class="image-of-chairman col-md-4">
        <img src="<?php the_field('image_of_chairperson', 265); ?>" alt="image of chairperson">
    </div>
    <div class="message-of-chairperson col-md-8">
        <p class="text">
            <?php the_field('message_of_chairperson', 265); ?>
        </p>

    </div>
    
</div>
<?php the_content()?>

<?php get_footer(); ?>