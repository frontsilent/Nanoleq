<?php
get_header();
?>

<div class="page-body">
    <?php the_content(); ?>
    <!--Activity performance top-->
    <?php if( have_rows('activity_performance_top')) :?>
        <?php while( have_rows('activity_performance_top')) : the_row(); ?>
            <!-- activity-performance -->
            <section data-theme="white" id="activity-performance-1" class="section activity-performance-section">
                <div class="container">
                    <div class="activity-performance">
                        <?php if (get_sub_field('activity_performance_title')) : ?>
                            <div class="activity-performance__title el-title el-title--black-orange">
                                <?php echo get_sub_field('activity_performance_title'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('activity_performance_subtitle')) : ?>
                            <div class="activity-performance__subtitle">
                                <?php echo get_sub_field('activity_performance_subtitle'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="activity-performance__info">
                            <!--LEFT ADVANTAGES ICONS-->
                            <div class="activity-performance__part activity-performance__part--small">
                                <?php if( have_rows('activity_performance_left_items')) :?>
                                    <?php while( have_rows('activity_performance_left_items')) : the_row(); ?>
                                        <div class="activity-performance__item activity-performance__item--left <?php if (get_sub_field('tooltip')) : ?>activity-performance__item--tooltip<?php endif; ?>">
                                            <div class="activity-performance__item-desc">
                                                <div class="activity-performance__item-title el-subtitle">
                                                    <p><?php echo get_sub_field('title'); ?></p>
                                                    <?php if (get_sub_field('tooltip')) : ?>
                                                        <div class="activity-performance__item-tooltip">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="info_1_" width="18" height="18" viewBox="0 0 18 18">
                                                                <defs>
                                                                    <style>
                                                                        #info_1_ .cls-1{fill:#fbb316}
                                                                    </style>
                                                                </defs>
                                                                <g id="info_1_2">
                                                                    <path id="Path_7895" d="M9 18a9 9 0 1 1 9-9 9 9 0 0 1-9 9zM9 2.25A6.75 6.75 0 1 0 15.75 9 6.75 6.75 0 0 0 9 2.25z" class="cls-1"/>
                                                                    <path id="Path_7896" d="M204.215 121.676a1.125 1.125 0 0 1-1.125-1.125v-3.375a1.125 1.125 0 0 1 2.25 0v3.375a1.125 1.125 0 0 1-1.125 1.125z" class="cls-1" transform="translate(-195.215 -111.551)"/>
                                                                    <circle id="Ellipse_3137" cx="1.125" cy="1.125" r="1.125" class="cls-1" transform="translate(7.875 11.25)"/>
                                                                </g>
                                                            </svg>
                                                            <p>
                                                                <?php echo get_sub_field('tooltip'); ?>
                                                            </p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if (get_sub_field('text')) : ?>
                                                    <div class="activity-performance__item-text">
                                                        <?php echo get_sub_field('text'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="activity-performance__item-icon">
                                                    <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif;?>
                            </div>
                            <!--PRODUCT-->
                            <div class="activity-performance__part activity-performance__part--image">
                                <img class="activity-performance__image" src="<?php echo get_sub_field('activity_performance_product'); ?>" alt="product">
                                <img class="activity-performance__circles" src="<?php bloginfo('template_url'); ?>/img/circle-lines.gif" alt="image">
                                <img class="activity-performance__swiss activity-performance__swiss--run" src="<?php bloginfo('template_url'); ?>/img/swiss-transparent.png" alt="swiss">
                                <?php if( have_rows('activity_performance_center_items')) :?>
                                    <?php while( have_rows('activity_performance_center_items')) : the_row(); ?>
                                        <div class="activity-performance__item activity-performance__item--center <?php if (get_sub_field('tooltip')) : ?>activity-performance__item--tooltip<?php endif; ?>">
                                            <div class="activity-performance__item-desc">
                                                <?php if (get_sub_field('icon')) : ?>
                                                    <div class="activity-performance__item-icon">
                                                        <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="activity-performance__item-title el-subtitle">
                                                    <p><?php echo get_sub_field('title'); ?></p>
                                                    <?php if (get_sub_field('tooltip')) : ?>
                                                        <div class="activity-performance__item-tooltip">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="info_1_" width="18" height="18" viewBox="0 0 18 18">
                                                                <defs>
                                                                    <style>
                                                                        #info_1_ .cls-1{fill:#fbb316}
                                                                    </style>
                                                                </defs>
                                                                <g id="info_1_2">
                                                                    <path id="Path_7895" d="M9 18a9 9 0 1 1 9-9 9 9 0 0 1-9 9zM9 2.25A6.75 6.75 0 1 0 15.75 9 6.75 6.75 0 0 0 9 2.25z" class="cls-1"/>
                                                                    <path id="Path_7896" d="M204.215 121.676a1.125 1.125 0 0 1-1.125-1.125v-3.375a1.125 1.125 0 0 1 2.25 0v3.375a1.125 1.125 0 0 1-1.125 1.125z" class="cls-1" transform="translate(-195.215 -111.551)"/>
                                                                    <circle id="Ellipse_3137" cx="1.125" cy="1.125" r="1.125" class="cls-1" transform="translate(7.875 11.25)"/>
                                                                </g>
                                                            </svg>
                                                            <p>
                                                                <?php echo get_sub_field('tooltip'); ?>
                                                            </p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if (get_sub_field('text')) : ?>
                                                    <div class="activity-performance__item-text">
                                                        <?php echo get_sub_field('text'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif;?>
                                <?php if (get_sub_field('wishlist_btn')) : ?>
                                    <div class="activity-performance__btn activity-performance__btn--desc wishlist-btn-wrap">
                                        <?php
                                        $link = get_sub_field('wishlist_btn');
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="wishlist-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                            <svg class="wishlist-btn__mail" xmlns="http://www.w3.org/2000/svg" width="32" height="22.5" viewBox="0 0 32 22.5">
                                                <g>
                                                    <g>
                                                        <path fill="#fff" d="M29.188 76H2.813A2.816 2.816 0 0 0 0 78.813v16.875A2.816 2.816 0 0 0 2.813 98.5h26.375A2.816 2.816 0 0 0 32 95.688V78.813A2.816 2.816 0 0 0 29.188 76zm-.432 1.875l-12.03 12.068a1.1 1.1 0 0 1-1.453 0L3.244 77.875zM1.875 95.343V79.157l8.067 8.093zm1.369 1.282l8.021-8.047 2.68 2.689a2.967 2.967 0 0 0 4.109 0l2.68-2.689 8.021 8.047zm26.881-1.282l-8.067-8.093 8.067-8.093z" transform="translate(0 -76) translate(0 76) translate(0 -76)"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span><?php echo esc_html( $link_title ); ?></span>
                                            <span class="wishlist-btn__arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"><path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/><path d="M17.25 5.832H.75"/></g></svg>
                                        </span>
                                        </a>
                                        <div class="wishlist-btn__text">
                                            <?php echo get_sub_field('wishlist_btn_text'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!--RIGHT ADVANTAGES ICONS-->
                            <div class="activity-performance__part activity-performance__part--small">
                                <?php if( have_rows('activity_performance_right_items')) :?>
                                    <?php while( have_rows('activity_performance_right_items')) : the_row(); ?>
                                        <div class="activity-performance__item activity-performance__item--right <?php if (get_sub_field('tooltip')) : ?>activity-performance__item--tooltip<?php endif; ?>">
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="activity-performance__item-icon">
                                                    <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                                </div>
                                            <?php endif; ?>
                                            <div class="activity-performance__item-desc">
                                                <div class="activity-performance__item-title el-subtitle">
                                                    <p><?php echo get_sub_field('title'); ?></p>
                                                    <?php if (get_sub_field('tooltip')) : ?>
                                                        <div class="activity-performance__item-tooltip">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="info_1_" width="18" height="18" viewBox="0 0 18 18">
                                                                <defs>
                                                                    <style>
                                                                        #info_1_ .cls-1{fill:#fbb316}
                                                                    </style>
                                                                </defs>
                                                                <g id="info_1_2">
                                                                    <path id="Path_7895" d="M9 18a9 9 0 1 1 9-9 9 9 0 0 1-9 9zM9 2.25A6.75 6.75 0 1 0 15.75 9 6.75 6.75 0 0 0 9 2.25z" class="cls-1"/>
                                                                    <path id="Path_7896" d="M204.215 121.676a1.125 1.125 0 0 1-1.125-1.125v-3.375a1.125 1.125 0 0 1 2.25 0v3.375a1.125 1.125 0 0 1-1.125 1.125z" class="cls-1" transform="translate(-195.215 -111.551)"/>
                                                                    <circle id="Ellipse_3137" cx="1.125" cy="1.125" r="1.125" class="cls-1" transform="translate(7.875 11.25)"/>
                                                                </g>
                                                            </svg>
                                                            <p>
                                                                <?php echo get_sub_field('tooltip'); ?>
                                                            </p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if (get_sub_field('text')) : ?>
                                                    <div class="activity-performance__item-text">
                                                        <?php echo get_sub_field('text'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif;?>
                            </div>
                            <?php if (get_sub_field('wishlist_btn')) : ?>
                                <!--WISHLIST MOB-->
                                <div class="activity-performance__btn activity-performance__btn--mob wishlist-btn-wrap">
                                    <?php
                                    $link = get_sub_field('wishlist_btn');
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="wishlist-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <svg class="wishlist-btn__mail" xmlns="http://www.w3.org/2000/svg" width="32" height="22.5" viewBox="0 0 32 22.5">
                                            <g>
                                                <g>
                                                    <path fill="#fff" d="M29.188 76H2.813A2.816 2.816 0 0 0 0 78.813v16.875A2.816 2.816 0 0 0 2.813 98.5h26.375A2.816 2.816 0 0 0 32 95.688V78.813A2.816 2.816 0 0 0 29.188 76zm-.432 1.875l-12.03 12.068a1.1 1.1 0 0 1-1.453 0L3.244 77.875zM1.875 95.343V79.157l8.067 8.093zm1.369 1.282l8.021-8.047 2.68 2.689a2.967 2.967 0 0 0 4.109 0l2.68-2.689 8.021 8.047zm26.881-1.282l-8.067-8.093 8.067-8.093z" transform="translate(0 -76) translate(0 76) translate(0 -76)"/>
                                                </g>
                                            </g>
                                        </svg>
                                        <span><?php echo esc_html( $link_title ); ?></span>
                                        <span class="wishlist-btn__arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"><path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/><path d="M17.25 5.832H.75"/></g></svg>
                                        </span>
                                    </a>
                                    <div class="wishlist-btn__text">
                                        <?php echo get_sub_field('wishlist_btn_text'); ?>
                                    </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if (get_sub_field('activity_performance_bottom')) : ?>
                            <div class="activity-performance__bottom">
                                <?php echo get_sub_field('activity_performance_bottom'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif;?>
    <!--Activity performance bottom-->
    <?php if( have_rows('activity_performance_bottom')) :?>
        <?php while( have_rows('activity_performance_bottom')) : the_row(); ?>
            <!-- activity-performance -->
            <section data-theme="white" id="activity-performance-2" class="section activity-performance-section" style="background-color: #f9f9f9;">
                <div class="container">
                    <div class="activity-performance">
                        <?php if (get_sub_field('activity_performance_title')) : ?>
                            <div class="activity-performance__title el-title el-title--black-orange">
                                <?php echo get_sub_field('activity_performance_title'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('activity_performance_subtitle')) : ?>
                            <div class="activity-performance__subtitle">
                                <?php echo get_sub_field('activity_performance_subtitle'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="activity-performance__info">
                            <!--LEFT ADVANTAGES ICONS-->
                            <div class="activity-performance__part activity-performance__part--small">
                                <?php if( have_rows('activity_performance_left_items')) :?>
                                    <?php while( have_rows('activity_performance_left_items')) : the_row(); ?>
                                        <div class="activity-performance__item activity-performance__item--left <?php if (get_sub_field('tooltip')) : ?>activity-performance__item--tooltip<?php endif; ?>">
                                            <div class="activity-performance__item-desc">
                                                <div class="activity-performance__item-title el-subtitle">
                                                    <p><?php echo get_sub_field('title'); ?></p>
                                                    <?php if (get_sub_field('tooltip')) : ?>
                                                        <div class="activity-performance__item-tooltip">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="info_1_" width="18" height="18" viewBox="0 0 18 18">
                                                                <defs>
                                                                    <style>
                                                                        #info_1_ .cls-1{fill:#fbb316}
                                                                    </style>
                                                                </defs>
                                                                <g id="info_1_2">
                                                                    <path id="Path_7895" d="M9 18a9 9 0 1 1 9-9 9 9 0 0 1-9 9zM9 2.25A6.75 6.75 0 1 0 15.75 9 6.75 6.75 0 0 0 9 2.25z" class="cls-1"/>
                                                                    <path id="Path_7896" d="M204.215 121.676a1.125 1.125 0 0 1-1.125-1.125v-3.375a1.125 1.125 0 0 1 2.25 0v3.375a1.125 1.125 0 0 1-1.125 1.125z" class="cls-1" transform="translate(-195.215 -111.551)"/>
                                                                    <circle id="Ellipse_3137" cx="1.125" cy="1.125" r="1.125" class="cls-1" transform="translate(7.875 11.25)"/>
                                                                </g>
                                                            </svg>
                                                            <p>
                                                                <?php echo get_sub_field('tooltip'); ?>
                                                            </p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if (get_sub_field('text')) : ?>
                                                    <div class="activity-performance__item-text">
                                                        <?php echo get_sub_field('text'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="activity-performance__item-icon">
                                                    <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif;?>
                            </div>
                            <!--PRODUCT-->
                            <div class="activity-performance__part activity-performance__part--image">
                                <img class="activity-performance__image" src="<?php echo get_sub_field('activity_performance_product'); ?>" alt="product">
                                <img class="activity-performance__circles" src="<?php bloginfo('template_url'); ?>/img/circle-lines.gif" alt="image">
                                <img class="activity-performance__swiss activity-performance__swiss--run" src="<?php bloginfo('template_url'); ?>/img/swiss-transparent.png" alt="swiss">
                                <?php if( have_rows('activity_performance_center_items')) :?>
                                    <?php while( have_rows('activity_performance_center_items')) : the_row(); ?>
                                        <div class="activity-performance__item activity-performance__item--center <?php if (get_sub_field('tooltip')) : ?>activity-performance__item--tooltip<?php endif; ?>">
                                            <div class="activity-performance__item-desc">
                                                <?php if (get_sub_field('icon')) : ?>
                                                    <div class="activity-performance__item-icon">
                                                        <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="activity-performance__item-title el-subtitle">
                                                    <p><?php echo get_sub_field('title'); ?></p>
                                                    <?php if (get_sub_field('tooltip')) : ?>
                                                        <div class="activity-performance__item-tooltip">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="info_1_" width="18" height="18" viewBox="0 0 18 18">
                                                                <defs>
                                                                    <style>
                                                                        #info_1_ .cls-1{fill:#fbb316}
                                                                    </style>
                                                                </defs>
                                                                <g id="info_1_2">
                                                                    <path id="Path_7895" d="M9 18a9 9 0 1 1 9-9 9 9 0 0 1-9 9zM9 2.25A6.75 6.75 0 1 0 15.75 9 6.75 6.75 0 0 0 9 2.25z" class="cls-1"/>
                                                                    <path id="Path_7896" d="M204.215 121.676a1.125 1.125 0 0 1-1.125-1.125v-3.375a1.125 1.125 0 0 1 2.25 0v3.375a1.125 1.125 0 0 1-1.125 1.125z" class="cls-1" transform="translate(-195.215 -111.551)"/>
                                                                    <circle id="Ellipse_3137" cx="1.125" cy="1.125" r="1.125" class="cls-1" transform="translate(7.875 11.25)"/>
                                                                </g>
                                                            </svg>
                                                            <p>
                                                                <?php echo get_sub_field('tooltip'); ?>
                                                            </p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if (get_sub_field('text')) : ?>
                                                    <div class="activity-performance__item-text">
                                                        <?php echo get_sub_field('text'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif;?>
                                <?php if (get_sub_field('wishlist_btn')) : ?>
                                    <div class="activity-performance__btn activity-performance__btn--desc wishlist-btn-wrap">
                                        <?php
                                        global $post;
                                        $page_slug = $post->post_name;
                                        $link = get_sub_field('wishlist_btn');
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="wishlist-btn" href="<?php echo site_url().'/order?act='.$page_slug.''; ?>">
                                            <svg class="wishlist-btn__mail" xmlns="http://www.w3.org/2000/svg" width="32" height="22.5" viewBox="0 0 32 22.5">
                                                <g>
                                                    <g>
                                                        <path fill="#fff" d="M29.188 76H2.813A2.816 2.816 0 0 0 0 78.813v16.875A2.816 2.816 0 0 0 2.813 98.5h26.375A2.816 2.816 0 0 0 32 95.688V78.813A2.816 2.816 0 0 0 29.188 76zm-.432 1.875l-12.03 12.068a1.1 1.1 0 0 1-1.453 0L3.244 77.875zM1.875 95.343V79.157l8.067 8.093zm1.369 1.282l8.021-8.047 2.68 2.689a2.967 2.967 0 0 0 4.109 0l2.68-2.689 8.021 8.047zm26.881-1.282l-8.067-8.093 8.067-8.093z" transform="translate(0 -76) translate(0 76) translate(0 -76)"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span><?php echo esc_html( $link_title ); ?></span>
                                            <span class="wishlist-btn__arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"><path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/><path d="M17.25 5.832H.75"/></g></svg>
                                        </a>
                                        <div class="wishlist-btn__text">
                                            <?php echo get_sub_field('wishlist_btn_text'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!--RIGHT ADVANTAGES ICONS-->
                            <div class="activity-performance__part activity-performance__part--small">
                                <?php if( have_rows('activity_performance_right_items')) :?>
                                    <?php while( have_rows('activity_performance_right_items')) : the_row(); ?>
                                        <div class="activity-performance__item activity-performance__item--right <?php if (get_sub_field('tooltip')) : ?>activity-performance__item--tooltip<?php endif; ?>">
                                            <?php if (get_sub_field('icon')) : ?>
                                                <div class="activity-performance__item-icon">
                                                    <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                                </div>
                                            <?php endif; ?>
                                            <div class="activity-performance__item-desc">
                                                <div class="activity-performance__item-title el-subtitle">
                                                    <p><?php echo get_sub_field('title'); ?></p>
                                                    <?php if (get_sub_field('tooltip')) : ?>
                                                        <div class="activity-performance__item-tooltip">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="info_1_" width="18" height="18" viewBox="0 0 18 18">
                                                                <defs>
                                                                    <style>
                                                                        #info_1_ .cls-1{fill:#fbb316}
                                                                    </style>
                                                                </defs>
                                                                <g id="info_1_2">
                                                                    <path id="Path_7895" d="M9 18a9 9 0 1 1 9-9 9 9 0 0 1-9 9zM9 2.25A6.75 6.75 0 1 0 15.75 9 6.75 6.75 0 0 0 9 2.25z" class="cls-1"/>
                                                                    <path id="Path_7896" d="M204.215 121.676a1.125 1.125 0 0 1-1.125-1.125v-3.375a1.125 1.125 0 0 1 2.25 0v3.375a1.125 1.125 0 0 1-1.125 1.125z" class="cls-1" transform="translate(-195.215 -111.551)"/>
                                                                    <circle id="Ellipse_3137" cx="1.125" cy="1.125" r="1.125" class="cls-1" transform="translate(7.875 11.25)"/>
                                                                </g>
                                                            </svg>
                                                            <p>
                                                                <?php echo get_sub_field('tooltip'); ?>
                                                            </p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if (get_sub_field('text')) : ?>
                                                    <div class="activity-performance__item-text">
                                                        <?php echo get_sub_field('text'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif;?>
                            </div>
                            <?php if (get_sub_field('wishlist_btn')) : ?>
                                <!--WISHLIST MOB-->
                                <div class="activity-performance__btn activity-performance__btn--mob wishlist-btn-wrap">
                                    <?php
                                    $link = get_sub_field('wishlist_btn');
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="wishlist-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <svg class="wishlist-btn__mail" xmlns="http://www.w3.org/2000/svg" width="32" height="22.5" viewBox="0 0 32 22.5">
                                            <g>
                                                <g>
                                                    <path fill="#fff" d="M29.188 76H2.813A2.816 2.816 0 0 0 0 78.813v16.875A2.816 2.816 0 0 0 2.813 98.5h26.375A2.816 2.816 0 0 0 32 95.688V78.813A2.816 2.816 0 0 0 29.188 76zm-.432 1.875l-12.03 12.068a1.1 1.1 0 0 1-1.453 0L3.244 77.875zM1.875 95.343V79.157l8.067 8.093zm1.369 1.282l8.021-8.047 2.68 2.689a2.967 2.967 0 0 0 4.109 0l2.68-2.689 8.021 8.047zm26.881-1.282l-8.067-8.093 8.067-8.093z" transform="translate(0 -76) translate(0 76) translate(0 -76)"/>
                                                </g>
                                            </g>
                                        </svg>
                                        <span><?php echo esc_html( $link_title ); ?></span>
                                        <span class="wishlist-btn__arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"><path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/><path d="M17.25 5.832H.75"/></g></svg>
                                        </span>
                                    </a>
                                    <div class="wishlist-btn__text">
                                        <?php echo get_sub_field('wishlist_btn_text'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (get_sub_field('activity_performance_bottom')) : ?>
                            <div class="activity-performance__bottom">
                                <?php echo get_sub_field('activity_performance_bottom'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif;?>
    <!-- activity-advantages -->
    <section id="activity-advantages" data-theme="white" class="section activity-advantages-section">
        <div class="activity-advantages-wrap activity-advantages--right">
            <div class="container">
                <div class="activity-advantages">
                    <div class="activity-advantages__part activity-advantages__part--image">
                        <img src="<?php echo get_field('activity_advantages_img_1'); ?>" alt="image" class="activity-advantages__image">
                        <?php if (get_field('activity_advantages_partner')) : ?>
                            <img src="<?php echo get_field('activity_advantages_partner'); ?>" alt="image" class="activity-advantages__image-app">
                        <?php endif; ?>
                    </div>
                    <div class="activity-advantages__part activity-advantages__part--text">
                        <div class="activity-advantages__top">
                            <?php if (get_field('activity_advantages_title_1')) : ?>
                                <div class="activity-advantages__title el-title el-title--white">
                                    <?php echo get_field('activity_advantages_title_1'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( have_rows('activity_advantages_list')) :?>
                                <?php while( have_rows('activity_advantages_list')) : the_row(); ?>
                                    <div class="activity-advantages__desc text-group text-group--white">
                                        <div class="activity-advantages__img">
                                            <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                        </div>
                                        <?php echo get_sub_field('text'); ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif;?>
                        </div>
                        <div class="activity-advantages__items">
                            <?php if( have_rows('activity_advantages_items')) :?>
                                <?php while( have_rows('activity_advantages_items')) : the_row(); ?>
                                    <div class="activity-advantages__item">
                                        <div class="activity-advantages__item-img">
                                            <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                        </div>
                                        <div class="activity-advantages__item-title"><?php echo get_sub_field('title'); ?></div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="activity-advantages-wrap activity-advantages--left">
            <?php if (get_field('activity_advantages_partner')) : ?>
                <img src="<?php echo get_field('activity_advantages_partner'); ?>" alt="image" class="activity-advantages__image-app">
            <?php endif; ?>
            <div class="container">
                <div class="activity-advantages">
                    <div class="activity-advantages__part activity-advantages__part--text">
                        <div class="activity-advantages__top">
                            <?php if (get_field('activity_advantages_title_2')) : ?>
                                <div class="activity-advantages__title el-title el-title--white">
                                    <?php echo get_field('activity_advantages_title_2'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('activity_advantages_btn')) : ?>
                            <div class="activity-advantages__btn-wrap">
                                <?php
                                $link = get_field('activity_advantages_btn');
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="activity-advantages__btn btn btn--orange" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <span><?php echo esc_html( $link_title ); ?></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"><path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/><path d="M17.25 5.832H.75"/></g></svg>
                                </a>
                            </div>
                            <?php endif; ?>

                            <div class="activity-advantages__apps">
                                <div class="activity-advantages__apps-title">
                                    Collected by your favorite App
                                </div>
                                <div class="activity-advantages__apps-items">
                                    <?php if (get_field('activity_advantages_ios')) : ?>
                                        <a href="<?php echo get_field('activity_advantages_ios'); ?>">
                                            <img src="<?php bloginfo('template_url'); ?>/img/apple.svg" alt="apple">
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_field('activity_advantages_android')) : ?>
                                        <a href="<?php echo get_field('activity_advantages_android'); ?>">
                                            <img src="<?php bloginfo('template_url'); ?>/img/google.svg" alt="google">
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="activity-advantages__partners">
                                <?php if( have_rows('activity_partners')) :?>
                                    <?php while( have_rows('activity_partners')) : the_row(); ?>
                                        <a href="<?php echo get_sub_field('link'); ?>">
                                            <img src="<?php echo get_sub_field('icon'); ?>" alt="adidas">
                                        </a>
                                    <?php endwhile; ?>
                                <?php endif;?>
                                <?php if (get_field('activity_more')) : ?>
                                    <a href="<?php echo get_field('activity_more'); ?>">
                                        <img src="<?php bloginfo('template_url'); ?>/img/more.svg" alt="more">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="activity-advantages__part activity-advantages__part--image">
                        <img src="<?php echo get_field('activity_advantages_img_2'); ?>" alt="image" class="activity-advantages__image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- activity-metrics -->
    <section id="activity-metrics" data-theme="white" class="section activity-metrics-section">
        <div class="container">
            <div class="activity-metrics">
                <?php if( have_rows('activity_metrics_product')) :?>
                    <?php while( have_rows('activity_metrics_product')) : the_row(); ?>
                        <div class="activity-metrics__part">
                            <div class="activity-metrics__top">
                                <div class="activity-metrics__title el-title el-title--black-orange">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                            </div>
                            <img class="activity-metrics__product" src="<?php echo get_sub_field('image'); ?>" alt="img">
                        </div>
                    <?php endwhile; ?>
                <?php endif;?>
                <?php if( have_rows('activity_metrics_part_1')) :?>
                    <?php while( have_rows('activity_metrics_part_1')) : the_row(); ?>
                        <div class="activity-metrics__part activity-metrics__part--center">
                            <div class="activity-metrics__top">
                                <div class="activity-metrics__title el-title el-title--black-orange">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                            </div>
                            <div class="activity-metrics__items">
                                <?php if( have_rows('items')) :?>
                                    <?php while( have_rows('items')) : the_row(); ?>
                                        <div class="activity-metrics__item">
                                            <div class="activity-metrics__item-icon">
                                                <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                            </div>
                                            <div class="activity-metrics__item-desc">
                                                <div class="activity-metrics__item-title"><?php echo get_sub_field('title'); ?></div>
                                                <div class="activity-metrics__item-text"><?php echo get_sub_field('text'); ?></div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif;?>
                <?php if( have_rows('activity_metrics_part_2')) :?>
                    <?php while( have_rows('activity_metrics_part_2')) : the_row(); ?>
                        <div class="activity-metrics__part">
                            <div class="activity-metrics__top">
                                <div class="activity-metrics__title el-title el-title--black-orange">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                            </div>
                            <div class="activity-metrics__items">
                                <?php if( have_rows('items')) :?>
                                    <?php while( have_rows('items')) : the_row(); ?>
                                        <div class="activity-metrics__item">
                                            <div class="activity-metrics__item-icon">
                                                <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                            </div>
                                            <div class="activity-metrics__item-desc">
                                                <div class="activity-metrics__item-title"><?php echo get_sub_field('title'); ?></div>
                                                <div class="activity-metrics__item-text"><?php echo get_sub_field('text'); ?></div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif;?>
            </div>

            <?php if (get_field('activity_metrics_wishlist')) : ?>
                <div class="wishlist-btn-wrap">
                <?php
                $link = get_field('activity_metrics_wishlist');
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="wishlist-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <svg class="wishlist-btn__mail" xmlns="http://www.w3.org/2000/svg" width="32" height="22.5" viewBox="0 0 32 22.5">
                            <g>
                                <g>
                                    <path fill="#fff" d="M29.188 76H2.813A2.816 2.816 0 0 0 0 78.813v16.875A2.816 2.816 0 0 0 2.813 98.5h26.375A2.816 2.816 0 0 0 32 95.688V78.813A2.816 2.816 0 0 0 29.188 76zm-.432 1.875l-12.03 12.068a1.1 1.1 0 0 1-1.453 0L3.244 77.875zM1.875 95.343V79.157l8.067 8.093zm1.369 1.282l8.021-8.047 2.68 2.689a2.967 2.967 0 0 0 4.109 0l2.68-2.689 8.021 8.047zm26.881-1.282l-8.067-8.093 8.067-8.093z" transform="translate(0 -76) translate(0 76) translate(0 -76)"/>
                                </g>
                            </g>
                        </svg>
                        <span><?php echo esc_html( $link_title ); ?></span>
                        <span class="wishlist-btn__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"><path stroke-linejoin="round" d="M13.415 1.06l4.835 4.836-4.835 4.835"/><path d="M17.25 5.832H.75"/></g></svg>
                            </span>
                    </a>
                    <div class="wishlist-btn__text">
                        <?php echo get_field('activity_metrics_wishlist_text'); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php
get_footer();
?>
