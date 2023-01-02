<?php get_header() ?>
<div class="container-fluid px-0">
    <div class="row">
        <?php get_template_part('partials/section', 'slider'); ?>
    </div>
</div>
<div class="container-fluid px-0">
    <div class="row">
        <?php get_template_part('partials/section', 'message'); ?>
    </div>
</div>
<div class="container-fluid px-0">

    <div class="row">
        <?php get_template_part('partials/section', 'projects'); ?>
    </div>
</div>
<div class="container-fluid px-0">

    <div class="row">
        <?php get_template_part('partials/section', 'news'); ?>
    </div>
</div>


<?php get_footer() ?>