<?php
/*
Template Name: Phantom
*/
get_header();
?>
<!-- page body -->
<div class="page-body">
    <?php the_content(); ?>
    <!-- Product -->
    <?php get_template_part( 'template-parts/products', 'product' ); ?>
    <!-- Combined Kit -->
    <?php get_template_part( 'template-parts/products', 'starter-kit' ); ?>
</div>

<?php
get_footer();
?>
