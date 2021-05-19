<!-- activity-performance -->
<section data-theme="white" id="activity-performance-1" class="section activity-performance-section">
    <div class="container">
        <div class="activity-performance">
            <?php if (get_field('activity_performance_title')) : ?>
                <div class="activity-performance__title el-title el-title--black-orange">
                    <?php echo get_field('activity_performance_title'); ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('activity_performance_subtitle')) : ?>
                <div class="activity-performance__subtitle">
                    <?php echo get_field('activity_performance_subtitle'); ?>
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
                    <img class="activity-performance__image" src="<?php echo get_field('activity_performance_product'); ?>" alt="product">
                    <img class="activity-performance__circles" src="<?php bloginfo('template_url'); ?>/img/circle-lines.svg" alt="image">
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
            </div>
        </div>
    </div>
</section>