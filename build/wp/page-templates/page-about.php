<?php
/*
Template Name: About
*/
get_header();
$leadershipCountTop = 1;
$leadershipCountBottom = 1;
?>

<div class="page-body">

    <?php the_content(); ?>
    <!-- about-desc -->
    <section data-theme="white" id="about-desc" class="section about-desc-section">
        <div class="container">
            <div class="about-desc">
                <div class="about-desc__title el-subtitle"><?php echo get_field('about_desc_title'); ?></div>
                <div class="about-desc__info">
                    <div class="about-desc__img">
                        <?php if (get_field('about_desc_video')) : ?>
                            <video src="<?php echo get_field('about_desc_video'); ?>" playsinline autoplay muted loop></video>
                        <?php endif; ?>
                        <?php if (get_field('about_desc_img')) : ?>
                            <img src="<?php echo get_field('about_desc_img'); ?>" alt="about-img">
                        <?php endif; ?>
                    </div>
                    <div class="about-desc__text text-group text-group--black">
                        <?php echo get_field('about_desc_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-leadership -->
    <section data-theme="white" id="about-leadership" class="section about-leadership-section">
        <div class="container">
            <div class="about-leadership">
                <div class="about-leadership__title el-title el-title--black-orange">
                    Leadership
                </div>
                <!-- about-leadership-tab-header -->
                <div class="about-leadership-tab__header-wrap">
                    <div class="about-leadership--mobile">
                        <div class="about-leadership-tab__header about-leadership-tab__header--desk">
                            <?php if( have_rows('leadership_items_1')) :?>
                                <?php while( have_rows('leadership_items_1')) : the_row(); ?>
                                    <?php if (get_row_index() < 4) : ?>
                                        <div class="about-leadership-tab__top" data-tab-top="<?php echo $leadershipCountTop; ?>">
                                            <div class="about-leadership-member">
                                                <div class="about-leadership-member__img">
                                                    <img src="<?php echo get_sub_field('image'); ?>" alt="lead">
                                                </div>
                                                <div class="about-leadership-member__name el-subtitle"><?php echo get_sub_field('name'); ?></div>
                                                <div class="about-leadership-member__position"><?php echo get_sub_field('position_1'); ?></div>
                                            </div>
                                            <div class="about-leadership-tab__arrow">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                                                    <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                                        <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                                                        <path d="M17.25 5.832H.75"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (get_row_index() < 4) : $leadershipCountTop++; endif; endwhile; ?>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="about-leadership--desk">
                        <div class="about-leadership-tab__header about-leadership-tab__header--mob">
                            <?php $teamMobileTop = 1; ?>
                            <?php if( have_rows('leadership_items_1')) :?>
                                <?php while( have_rows('leadership_items_1')) : the_row(); ?>
                                    <div class="about-leadership-tab__top" data-tab-top="<?php echo $teamMobileTop; ?>">
                                            <div class="about-leadership-member">
                                                <div class="about-leadership-member__img">
                                                    <img src="<?php echo get_sub_field('image'); ?>" alt="lead">
                                                </div>
                                                <div class="about-leadership-member__name el-subtitle"><?php echo get_sub_field('name'); ?></div>
                                                <div class="about-leadership-member__position"><?php echo get_sub_field('position_1'); ?></div>
                                            </div>
                                            <div class="about-leadership-tab__arrow">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                                                    <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                                        <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                                                        <path d="M17.25 5.832H.75"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                <?php $teamMobileTop++; endwhile; ?>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="slider-arrow slider-arrow--prev leadership-slider__arrow leadership-slider__arrow--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                                <path d="M17.25 5.832H.75"/>
                            </g>
                        </svg>
                    </div>
                    <div class="slider-arrow leadership-slider__arrow leadership-slider__arrow--next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                                <path d="M17.25 5.832H.75"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-leadership-tab-desc -->
        <div class="about-leadership-tab__bottom-wrap">
            <div class="container">
                <div class="about-leadership--mobile">
                    <?php if( have_rows('leadership_items_1')) :?>
                        <?php while( have_rows('leadership_items_1')) : the_row(); ?>
                            <?php if (get_row_index() < 4) : ?>
                                <div class="about-leadership-tab__bottom" data-tab-bottom="<?php echo $leadershipCountBottom; ?>">
                                    <div class="about-leadership-tab__desc">
                                        <div class="about-leadership-tab__desc-left">
                                            <div class="about-leadership-tab__desc-name">
                                                <?php echo get_sub_field('name'); ?>
                                            </div>
                                            <div class="about-leadership-tab__desc-position">
                                                <?php echo get_sub_field('position_2'); ?>
                                            </div>
                                        </div>
                                        <div class="about-leadership-tab__desc-right">
                                            <?php echo get_sub_field('description'); ?>
                                        </div>
                                    </div>
                                    <svg class="about-leadership-tab__close" xmlns="http://www.w3.org/2000/svg" width="23.414" height="23.414" viewBox="0 0 23.414 23.414">
                                        <defs>
                                            <style>
                                                #Group_1090 .cls-1{fill:none;stroke:#707070;stroke-width:2px}
                                            </style>
                                        </defs>
                                        <g id="Group_1090" transform="translate(-1852.793 -2431.793)">
                                            <path id="Line_183" d="M22 0L0 22" class="cls-1" transform="translate(1853.5 2432.5)"/>
                                            <path id="Line_184" d="M0 0L22 22" class="cls-1" transform="translate(1853.5 2432.5)"/>
                                        </g>
                                    </svg>
                                </div>
                            <?php endif; ?>
                        <?php if (get_row_index() < 4) : $leadershipCountBottom++; endif; endwhile; ?>
                    <?php endif;?>
                </div>
                <div class="about-leadership--desk">
                    <?php $teamMobileBottom = 1; ?>
                    <?php if( have_rows('leadership_items_1')) :?>
                        <?php while( have_rows('leadership_items_1')) : the_row(); ?>
                            <div class="about-leadership-tab__bottom" data-tab-bottom="<?php echo $teamMobileBottom; ?>">
                                    <div class="about-leadership-tab__desc">
                                        <div class="about-leadership-tab__desc-left">
                                            <div class="about-leadership-tab__desc-name">
                                                <?php echo get_sub_field('name'); ?>
                                            </div>
                                            <div class="about-leadership-tab__desc-position">
                                                <?php echo get_sub_field('position_2'); ?>
                                            </div>
                                        </div>
                                        <div class="about-leadership-tab__desc-right">
                                            <?php echo get_sub_field('description'); ?>
                                        </div>
                                    </div>
                                    <svg class="about-leadership-tab__close" xmlns="http://www.w3.org/2000/svg" width="23.414" height="23.414" viewBox="0 0 23.414 23.414">
                                        <defs>
                                            <style>
                                                #Group_1090 .cls-1{fill:none;stroke:#707070;stroke-width:2px}
                                            </style>
                                        </defs>
                                        <g id="Group_1090" transform="translate(-1852.793 -2431.793)">
                                            <path id="Line_183" d="M22 0L0 22" class="cls-1" transform="translate(1853.5 2432.5)"/>
                                            <path id="Line_184" d="M0 0L22 22" class="cls-1" transform="translate(1853.5 2432.5)"/>
                                        </g>
                                    </svg>
                                </div>
                        <?php $teamMobileBottom++; endwhile; ?>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <!--about-leadership__team tab header-->
        <div class="about-leadership--mobile about-leadership__team-wrap">
            <div class="container">
                <div class="about-leadership__team">
                    <?php if( have_rows('leadership_items_1')) :?>
                        <?php while( have_rows('leadership_items_1')) : the_row(); ?>
                            <?php if (get_row_index() > 3) : ?>
                                <div class="about-leadership-tab__top" data-tab-top="<?php echo $leadershipCountTop;?>">
                                <div class="about-leadership-member">
                                    <div class="about-leadership-member__img">
                                        <img src="<?php echo get_sub_field('image'); ?>" alt="lead">
                                    </div>
                                    <div class="about-leadership-member__name el-subtitle"><?php echo get_sub_field('name'); ?></div>
                                    <div class="about-leadership-member__position"><?php echo get_sub_field('position_1'); ?></div>
                                </div>
                                <div class="about-leadership-tab__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                                        <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                            <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                                            <path d="M17.25 5.832H.75"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php if (get_row_index() > 3) : $leadershipCountTop++; endif;  endwhile; ?>
                    <?php endif;?>
                </div>
            </div>
            <div class="slider-arrow slider-arrow--prev team-slider__arrow team-slider__arrow--prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                    <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                        <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                        <path d="M17.25 5.832H.75"/>
                    </g>
                </svg>
            </div>
            <div class="slider-arrow team-slider__arrow team-slider__arrow--next">
                <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                    <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                        <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                        <path d="M17.25 5.832H.75"/>
                    </g>
                </svg>
            </div>
        </div>
        <!-- about-team-tab-desc -->
        <div class="about-leadership--mobile about-leadership-tab__bottom-wrap">
            <div class="container">
                <?php if( have_rows('leadership_items_1')) :?>
                    <?php while( have_rows('leadership_items_1')) : the_row(); ?>
                        <?php if (get_row_index() > 3) : ?>
                            <div class="about-leadership-tab__bottom" data-tab-bottom="<?php echo $leadershipCountBottom;?>">
                            <div class="about-leadership-tab__desc about-leadership-tab__desc--long">
                                <div class="about-leadership-tab__desc-left">
                                    <div class="about-leadership-tab__desc-name">
                                        <?php echo get_sub_field('name'); ?>
                                    </div>
                                    <div class="about-leadership-tab__desc-position">
                                        <?php echo get_sub_field('position_2'); ?>
                                    </div>
                                </div>
                                <div class="about-leadership-tab__desc-right">
                                    <?php echo get_sub_field('description'); ?>
                                </div>
                            </div>
                            <svg class="about-leadership-tab__close" xmlns="http://www.w3.org/2000/svg" width="23.414" height="23.414" viewBox="0 0 23.414 23.414">
                                <defs>
                                    <style>
                                        #Group_1090 .cls-1{fill:none;stroke:#707070;stroke-width:2px}
                                    </style>
                                </defs>
                                <g id="Group_1090" transform="translate(-1852.793 -2431.793)">
                                    <path id="Line_183" d="M22 0L0 22" class="cls-1" transform="translate(1853.5 2432.5)"/>
                                    <path id="Line_184" d="M0 0L22 22" class="cls-1" transform="translate(1853.5 2432.5)"/>
                                </g>
                            </svg>
                        </div>
                        <?php endif; ?>
                    <?php if (get_row_index() > 3) : $leadershipCountBottom++; endif; endwhile; ?>
                <?php endif;?>
            </div>
        </div>
        <!--about-leadership__advisors-->
        <div class="about-leadership__advisors-wrapper">
            <div class="container">
                <div class="about-leadership__advisors-title el-title el-title--black-orange">
                    Key <i>Shareholders</i> & <i>Advisors</i>
                </div>
                <div class="about-leadership__advisors-slider-wrap">
                    <div class="about-leadership__advisors">
                        <?php $advisorsTop = 20; ?>
                        <?php if( have_rows('leadership_items_3')) :?>
                            <?php while( have_rows('leadership_items_3')) : the_row(); ?>
                                <div class="about-leadership-tab__top-wrap">
                                    <div class="about-leadership-tab__top about-leadership-tab__top--advisor" data-tab-top="<?php echo $advisorsTop;?>">
                                        <div class="about-leadership-member">
                                            <div class="about-leadership-member__img">
                                                <img src="<?php echo get_sub_field('image'); ?>" alt="lead">
                                            </div>
                                            <div class="about-leadership-member__name el-subtitle"><?php echo get_sub_field('name'); ?></div>
                                            <div class="about-leadership-member__position"><?php echo get_sub_field('position_1'); ?></div>
                                        </div>
                                        <div class="about-leadership-tab__arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                                                <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                                    <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                                                    <path d="M17.25 5.832H.75"/>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            <?php $advisorsTop++; endwhile; ?>
                        <?php endif;?>
                    </div>
                    <div class="slider-arrow slider-arrow--prev advisors-slider__arrow advisors-slider__arrow--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                                <path d="M17.25 5.832H.75"/>
                            </g>
                        </svg>
                    </div>
                    <div class="slider-arrow advisors-slider__arrow advisors-slider__arrow--next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                                <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                                <path d="M17.25 5.832H.75"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-advisors-tab-desc -->
        <div class="about-leadership-tab__bottom-wrap">
            <div class="container">
                <?php $advisorsBottom = 20; ?>
                <?php if( have_rows('leadership_items_3')) :?>
                    <?php while( have_rows('leadership_items_3')) : the_row(); ?>
                        <div class="about-leadership-tab__bottom" data-tab-bottom="<?php echo $advisorsBottom;?>">
                            <div class="about-leadership-tab__desc about-leadership-tab__desc--long">
                                <div class="about-leadership-tab__desc-left">
                                    <div class="about-leadership-tab__desc-name">
                                        <?php echo get_sub_field('name'); ?>
                                    </div>
                                    <div class="about-leadership-tab__desc-position">
                                        <?php echo get_sub_field('position_2'); ?>
                                    </div>
                                </div>
                                <div class="about-leadership-tab__desc-right">
                                    <?php echo get_sub_field('description'); ?>
                                </div>
                            </div>
                            <svg class="about-leadership-tab__close" xmlns="http://www.w3.org/2000/svg" width="23.414" height="23.414" viewBox="0 0 23.414 23.414">
                                <defs>
                                    <style>
                                        #Group_1090 .cls-1{fill:none;stroke:#707070;stroke-width:2px}
                                    </style>
                                </defs>
                                <g id="Group_1090" transform="translate(-1852.793 -2431.793)">
                                    <path id="Line_183" d="M22 0L0 22" class="cls-1" transform="translate(1853.5 2432.5)"/>
                                    <path id="Line_184" d="M0 0L22 22" class="cls-1" transform="translate(1853.5 2432.5)"/>
                                </g>
                            </svg>
                        </div>
                    <?php $advisorsBottom++; endwhile; ?>
                <?php endif;?>
            </div>
        </div>
    </section>
    <!-- about-updates -->
    <section data-theme="white" id="about-updates" class="section about-updates-section">
        <div class="container">
            <div class="about-updates">
                <?php echo get_template_part('template-parts/updates');?>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();
?>
