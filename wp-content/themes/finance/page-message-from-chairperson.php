<?php get_header(); ?>
<div class="container-fluid message">
    <p class="text-dark title-sub ml-1 p-3 mt-1"><a class="link text-primary" href="<?php bloginfo(); ?>">Home </a> » About » <?php the_title() ?></p>
    <h2 class="h2 text-center p-3 mt-2 mb-3 title"><?php the_title() ?></h2>
    <div class="message-container">
        <div class="image-of-chairperson">
            <img src="<?php the_field('image_of_chairperson', 26); ?>" alt="image of chairperson" class="img-responsive">
        </div>
        <div class="message-of-chairperson">
            <?php the_field('message_of_chairperson', 26); ?>
        </div>
    </div>
    <div class="last-paragraph p-3 mt-0  ">
        <?php the_field('second_message',26); ?>

        <h5 class="h5 mt-3 "> <?php the_field('name_of_chairperson', 26) ?> <br>
        </h2>
        <?php the_field('post_of_chairperson', 26) ?>


    </div>

</div>
<?php the_content() ?>

<?php get_footer(); ?>