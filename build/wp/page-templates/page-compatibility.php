<?php
/*
Template Name: Compatibility
*/
get_header();

?>

<div class="page-body">

    <!-- compatibility -->
    <section data-theme="dark" id="compatibility-1" class="section compatibility-section">
        <div class="container">
            <div class="compatibility">
                <div class="compatibility__title el-title el-title--black-orange"><?php echo get_field('compatibility_app_title'); ?></div>
                <?php if (get_field('compatibility_app_subtitle')) : ?>
                    <div class="compatibility__subtitle"><?php echo get_field('compatibility_app_subtitle'); ?></div>
                <?php endif; ?>
                <div class="compatibility__items">
                    <?php if( have_rows('compatibility_app_items')) :?>
                        <?php while( have_rows('compatibility_app_items')) : the_row(); ?>
                            <div class="compatibility__item">
                                <div class="compatibility__item-logo">
                                    <img src="<?php echo get_sub_field('logo'); ?>" alt="logo">
                                </div>
                                <div class="compatibility__item-title"><?php echo get_sub_field('title'); ?></div>
                                <?php if (have_rows('apps')) : ?>
                                    <div class="compatibility__item-apps">
                                        <?php while (have_rows('apps')) : the_row(); ?>
                                            <?php if (get_sub_field('ios_link')) : ?>
                                                <a  href="<?php echo get_sub_field('ios_link'); ?>" target="_blank"  class="compatibility__item-app"><img src="<?php bloginfo('template_url'); ?>/img/ios.svg" alt="apple"></a>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('google_link')) : ?>
                                                <a href="<?php echo get_sub_field('google_link'); ?>" target="_blank" class="compatibility__item-app"><img src="<?php bloginfo('template_url'); ?>/img/playmarket.svg" alt="playmarket"></a>
                                            <?php endif; ?>
                                        <?php endwhile; ?></div>
                                <?php endif; ?>
                                </div>
                        <?php endwhile; ?>
                    <?php endif;?>
                </div>
                <?php if (get_field('compatibility_app_text')) : ?>
                    <div class="compatibility__bottom text-group">
                        <?php echo get_field('compatibility_app_text'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- compatibility -->
    <section data-theme="dark" id="compatibility-2" class="section compatibility-section compatibility-section--blue">
        <div class="container">
            <div class="compatibility">
                <div class="compatibility__title el-title el-title--black-orange">
                    <?php echo get_field('compatibility_devices_title'); ?>
                </div>
                <?php if (get_field('compatibility_devices_subtitle')) : ?>
                    <div class="compatibility__subtitle">
                        <?php echo get_field('compatibility_devices_subtitle'); ?>
                    </div>
                <?php endif; ?>
                <?php if( have_rows('compatibility_devices_items')) :?>
                <div class="compatibility__items">
                    <?php while( have_rows('compatibility_devices_items')) : the_row(); ?>
                        <a href="<?php echo get_sub_field('link'); ?>" target="_blank" class="compatibility__item compatibility__item--5">
                            <div class="compatibility__item-device">
                                <img src="<?php echo get_sub_field('logo'); ?>" alt="logo">
                            </div>
                            <div class="compatibility__item-title"><?php echo get_sub_field('title'); ?></div>
                            <div class="compatibility__item-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                                    <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                        <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                                        <path d="M17.25 5.832H.75"/>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php endif;?>
                <?php if (get_field('compatibility_devices_text')) : ?>
                    <div class="compatibility__bottom text-group">
                        <?php echo get_field('compatibility_devices_text'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();
?>
