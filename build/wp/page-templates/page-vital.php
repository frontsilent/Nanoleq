<?php
/*
Template Name: Vital
*/
get_header();

?>

<div class="page-body">
    <?php the_content(); ?>
    <!-- vital-desc -->
    <section id="vital-desc" data-theme="orange" class="section vital-desc-section">
        <div class="container">
            <div class="vital-desc">
                <div class="vital-desc__title el-title el-title--orange">
                    <?php echo get_field('vital_desc_title'); ?>
                </div>
            </div>
        </div>
        <div class="vital-desc-wrap">
            <img src="<?php bloginfo('template_url'); ?>/img/vital-desc-2.png" alt="image" class="vital-desc__img vital-desc__img--2">
            <img src="<?php bloginfo('template_url'); ?>/img/vital-desc-4.png" alt="image" class="vital-desc__img vital-desc__img--4">
            <img src="<?php bloginfo('template_url'); ?>/img/vital-desc-5.png" alt="image" class="vital-desc__img vital-desc__img--5">
            <div class="vital-desc__images">
                <img src="<?php bloginfo('template_url'); ?>/img/vital-desc-1.gif" alt="image" class="vital-desc__img vital-desc__img--1">
                <img src="<?php bloginfo('template_url'); ?>/img/vital-desc-3.gif" alt="image" class="vital-desc__img vital-desc__img--3">
            </div>
            <div class="vital-desc-connect">
                <div class="vital-desc-connect__title">
                    Connect to your favourite app.
                </div>
                <div class="vital-desc-connect__items">
                    <?php if( have_rows('vital_apps')) :?>
                        <?php while( have_rows('vital_apps')) : the_row(); ?>
                            <a href="<?php echo get_sub_field('link'); ?>" class="vital-desc-connect__item">
                                <img src="<?php echo get_sub_field('icon'); ?>" alt="img">
                            </a>
                        <?php endwhile; ?>
                    <?php endif;?>
                    <a href="<?php echo get_sub_field('vital_more_link'); ?>" class="vital-desc-connect__item">
                        <img src="<?php bloginfo('template_url'); ?>/img/more.svg" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- works -->
    <section data-theme="white" id="works" class="section works-section">
        <div class="container">
            <div class="works">
                <div class="works__title el-title"><?php echo get_field('works_title'); ?></div>
                <?php if (get_field('works_subtitle')) : ?>
                    <div class="works__subtitle el-subtitle"><?php echo get_field('works_subtitle'); ?></div>
                <?php endif; ?>
                <div class="btn-wrap">
                    <!-- <a href="" class="works__btn btn btn--orange-black">
                        <span>step by step manual</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11.791" height="15.811" viewBox="0 0 11.791 15.811">
                            <g fill="none" stroke="#000" stroke-linecap="round" stroke-width="1.5px">
                                <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="rotate(90 1837.989 447.239) rotate(45 -2045.228 2828)"/>
                                <path d="M12 0L0 0" transform="rotate(90 1837.989 447.239) translate(1391.5 2279.268)"/>
                            </g>
                        </svg>
                    </a> -->
                </div>
                <div class="works__items">
                    <?php if( have_rows('works')) :?>
                        <?php while( have_rows('works')) : the_row(); ?>
                            <div class="works__item">
                                <div class="works__item-top">
                                    <div class="works__item-number"><?php echo get_row_index(); ?></div>
                                    <img src="<?php echo get_sub_field('icon'); ?>" alt="works" class="works__item-icon">
                                </div>
                                <div class="works__item-title">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
    <!-- vital-advant -->
    <section data-theme="dark" id="vital-advant" class="section vital-advant-section">
        <?php if (have_rows('vital_advantages_1')) : ?>
            <div class="vital-advant__item-wrap vital-advant__item--1">
                <div class="container">
                    <div class="vital-advant__item">
                        <?php while (have_rows('vital_advantages_1')) : the_row(); ?>
                            <div class="vital-advant__item-img">
                                <?php if (get_sub_field('img')) : ?>
                                    <img src="<?php echo get_sub_field('img'); ?>" alt="image">
                                <?php endif; ?>
                                <?php if (get_sub_field('video')) : ?>
                                    <video src="<?php echo get_sub_field('video'); ?>" autoplay loop autobuffer muted playsinline></video>
                                <?php endif; ?>
                            </div>
                            <div class="vital-advant__item-desc">
                                <div class="vital-advant__item-title el-title el-title--white">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                                <div class="vital-advant__item-text text-group text-group--white">
                                    <?php echo get_sub_field('text'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (have_rows('vital_advantages_2')) : ?>
            <div class="vital-advant__item-wrap vital-advant__item--2">
                <div class="container">
                    <div class="vital-advant__item">
                        <?php while (have_rows('vital_advantages_2')) : the_row(); ?>
                            <div class="vital-advant__item-img">
                                <?php if (get_sub_field('img')) : ?>
                                    <img src="<?php echo get_sub_field('img'); ?>" alt="image">
                                <?php endif; ?>
                                <?php if (get_sub_field('video')) : ?>
                                    <video src="<?php echo get_sub_field('video'); ?>" autoplay loop autobuffer muted playsinline></video>
                                <?php endif; ?>
                            </div>
                            <div class="vital-advant__item-desc">
                                <div class="vital-advant__item-title el-title el-title--white">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                                <div class="vital-advant__item-text text-group text-group--white">
                                    <?php echo get_sub_field('text'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (have_rows('vital_advantages_3')) : ?>
            <div class="vital-advant__item-wrap vital-advant__item--3">
                <div class="container">
                    <div class="vital-advant__item ">
                        <?php while (have_rows('vital_advantages_3')) : the_row(); ?>
                            <div class="vital-advant__item-img">
                                <img src="<?php echo get_sub_field('image'); ?>" alt="image">
                            </div>
                            <div class="vital-advant__item-desc">
                                <div class="vital-advant__item-title el-title el-title--orange el-title--left">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                                <div class="vital-advant__item-bottom">
                                    <?php if( have_rows('items')) :?>
                                        <?php while( have_rows('items')) : the_row(); ?>
                                            <div class="vital-advant__item-details">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                                     viewBox="0 0 20 16">
                                                    <g>
                                                        <g>
                                                            <path fill="#fbb316"
                                                                  d="M17.2 42.667L7 52.967l-4.2-4.2-2.8 2.8 7 7.1 13-13.1z"
                                                                  transform="translate(0 -42.667) translate(0 42.667) translate(0 -42.667)"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span><?php echo get_sub_field('title'); ?></span>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>
    <?php if (have_rows('vital_gallery')) : ?>
        <!-- vital-slider -->
        <section data-theme="dark" id="vital-slider" class="section vital-slider-section">
            <div class="vital-slider-wrap">
                <div class="vital-slider">
                    <?php while (have_rows('vital_gallery')) : the_row(); ?>
                        <div class="vital-slider__item-wrap">
                            <div class="vital-slider__item">
                                <img src="<?php echo get_sub_field('img'); ?>" alt="">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="slider-arrow slider-arrow--prev vital-slider__arrow vital-slider__arrow--prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                        <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                            <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                            <path d="M17.25 5.832H.75"/>
                        </g>
                    </svg>
                </div>
                <div class="slider-arrow vital-slider__arrow vital-slider__arrow--next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791">
                        <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5">
                            <path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/>
                            <path d="M17.25 5.832H.75"/>
                        </g>
                    </svg>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- activities -->
    <section data-theme="white" id="activities" class="section activities-section">
        <div class="container">
            <div class="activities">
                <?php if (get_field('activities_title')) : ?>
                    <div class="activities__title el-title el-title--black"><?php echo get_field('activities_title'); ?></div>
                <?php endif; ?>
                <?php if (get_field('activities_subtitle')) : ?>
                    <div class="activities__desc text-group text-group--black">
                        <p><?php echo get_field('activities_subtitle'); ?></p>
                    </div>
                <?php endif; ?>
                <div class="activities__subtitle el-subtitle">
                    CHOOSE YOUR ACTIVITY
                </div>
            </div>
        </div>
        <!--activities items-->
        <div class="activities__items-wrap">
            <div class="container">
                <div class="activities__items">
                    <?php if( have_rows('activities')) :?>
                        <?php while( have_rows('activities')) : the_row(); ?>
                            <?php 
                                $activity = get_sub_field('item'); 
                                global $post;
                                $page_slug = $post->post_name;
                                $activity_waitlist_url = get_site_url().'/order?act='.$activity->post_name.'';
                            
                            ?>
                            <div class="activities__item">
                                <a href="<?php echo get_permalink($activity);?>" class="activities__item-img">
                                    <img src="<?php echo get_sub_field('image'); ?>" alt="img">
                                </a>
                                <div class="activities__item-bottom">
                                    <a href="<?php echo get_permalink($activity);?>" class="activities__item-title"><?php echo get_the_title($activity); ?></a>
                                    <?php if (get_sub_field('subtitle')) : ?>
                                        <div class="activities__item-text"><?php echo get_sub_field('subtitle'); ?></div>
                                    <?php endif; ?>
                                    <div class="activities__item-details">
                                        <a href="<?php echo get_permalink($activity);?>" class="activities__item-more">More Infos</a>
                                        <a href="<?php echo $activity_waitlist_url;?>" class="activities__item-join">Join Waitlist</a>
                                        <div class="activities__item-arrow">
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
                        <?php endwhile; ?>
                    <?php endif;?>
                    <?php if (get_field('activities_bottom')) : ?>
                        <div class="activities__bottom">
                            <?php echo get_field('activities_bottom'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('activities_link')) : ?>
                        <?php
                        $link = get_field('activities_link');
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <div class="activities__btn-wrap">
                            <a class="activities__btn btn btn--orange-black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <span><?php echo esc_html( $link_title ); ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                    <g fill="none" stroke="#000" stroke-linecap="round" stroke-width="1.5px">
                                        <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                        <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- updates-->
    <!-- vital-updates -->
    <section data-theme="white" id="vital-updates" class="section vital-updates-section">
        <div class="container">
            <div class="vital-updates">
                <?php echo get_template_part('template-parts/updates');?>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>
