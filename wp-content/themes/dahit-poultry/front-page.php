<?php get_header(); ?>
<div class="container-fluid px-0">
    <div class="row">
        <?php get_template_part('partials/section', 'slider'); ?>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <?php get_template_part('partials/section', 'information'); ?>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <?php get_template_part('partials/section', 'Vehicle'); ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php get_template_part('partials/section', 'mission'); ?>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <?php get_template_part('partials/section', 'whyBest'); ?>
    </div>
</div>

<?php get_footer(); ?>