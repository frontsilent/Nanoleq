<?php
/*
Template Name: Main page
*/
get_header();
?>


<div class="page-body">
    <!-- intro -->
    <section data-theme="dark" id="intro" class="section intro-section">
        <?php if (get_field('intro_img')) : ?>
            <div class="intro__img">
                <img src="<?php echo get_field('intro_img'); ?>" alt="image">
            </div>
        <?php endif; ?>
        <?php if (get_field('intro_video')) : ?>
            <video class="intro-video" id="intro-video" src="<?php echo get_field('intro_video'); ?>" muted autoplay loop></video>
        <?php endif; ?>
        <img src="<?php bloginfo('template_url'); ?>/img/scroll-btn.svg" alt="scroll" class="intro__scroll">
        <?php if (get_field('intro_video')) : ?>
            <div class="intro-video__buttons">
                <svg class="intro-video__unmute" xmlns="http://www.w3.org/2000/svg" width="23.57" height="22"
                     viewBox="0 0 23.57 22">
                    <defs>
                        <style>
                            .video-1 {
                                fill: #f9f9f9
                            }
                        </style>
                    </defs>
                    <g id="Group_1280" transform="translate(-1817 -1014)">
                        <g id="Group_1248" transform="translate(1817 1014)">
                            <g id="Group_1247">
                                <path id="Path_7941"
                                      d="M13.7 16.068a.783.783 0 0 0-.831.094l-7.646 6.115H1.571A1.574 1.574 0 0 0 0 23.848v6.285A1.574 1.574 0 0 0 1.571 31.7h3.652l7.642 6.114a.786.786 0 0 0 1.278-.614V16.777a.788.788 0 0 0-.443-.709zM4.714 30.133H1.571v-6.285h3.143zm7.857 5.435L6.285 30.54v-7.1l6.285-5.028z"
                                      class="video-1" transform="translate(0 -15.99)"/>
                            </g>
                        </g>
                        <g id="Group_1250" transform="translate(1833.782 1019.217)">
                            <g id="Group_1249">
                                <path id="Path_7942"
                                      d="M343.1 122.456a.786.786 0 1 0-1.1 1.117 6.275 6.275 0 0 1 0 8.878.785.785 0 1 0 1.1 1.116 7.843 7.843 0 0 0 0-11.111z"
                                      class="video-1" transform="translate(-341.76 -122.229)"/>
                            </g>
                        </g>
                        <g id="Group_1252" transform="translate(1835.998 1017.002)">
                            <g id="Group_1251">
                                <path id="Path_7943"
                                      d="M388.226 77.364a.786.786 0 1 0-1.106 1.116 9.382 9.382 0 0 1 0 13.309.786.786 0 1 0 1.106 1.116 10.952 10.952 0 0 0 0-15.541z"
                                      class="video-1" transform="translate(-386.888 -77.137)"/>
                            </g>
                        </g>
                    </g>
                </svg>
                <svg class="intro-video__mute active" xmlns="http://www.w3.org/2000/svg" width="27.436" height="22"
                     viewBox="0 0 27.436 22">
                    <defs>
                        <style>
                            .video-2 {
                                fill: #fff;
                                stroke: #fff;
                                stroke-linecap: round;
                                stroke-width: 1.5px
                            }
                        </style>
                    </defs>
                    <g id="Group_1279" transform="translate(-1859.929 -1014)">
                        <g id="Group_1278" transform="translate(1859.929 1014)">
                            <g id="Group_1247">
                                <path id="Path_7941" fill="#f9f9f9"
                                      d="M13.7 16.068a.783.783 0 0 0-.831.094l-7.646 6.115H1.571A1.574 1.574 0 0 0 0 23.848v6.285A1.574 1.574 0 0 0 1.571 31.7h3.652l7.642 6.114a.786.786 0 0 0 1.278-.614V16.777a.788.788 0 0 0-.443-.709zM4.714 30.133H1.571v-6.285h3.143zm7.857 5.435L6.285 30.54v-7.1l6.285-5.028z"
                                      transform="translate(0 -15.99)"/>
                            </g>
                        </g>
                        <g id="Group_1253" transform="translate(1878.466 1021.082)">
                            <path id="Line_233" d="M0 0L7.838 7.838" class="video-2"/>
                            <path id="Line_234" d="M7.838 0L0 7.838" class="video-2"/>
                        </g>
                    </g>
                </svg>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="intro">
                <div class="intro__title"><?php echo get_field('intro_title'); ?></div>
                <?php if (get_field('intro_btn')) : ?>
                    <?php
                    $link = get_field('intro_btn');
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="intro__btn btn btn--orange" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <span><?php echo esc_html( $link_title ); ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5px">
                                <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                            </g>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- main-desc -->
    <section data-theme="orange" id="main-desc" class="section main-desc-section" style="background-image: url('<?php bloginfo('template_url'); ?>/img/main-desc-bg.jpg')">
        <div class="container">
            <div class="main-desc">
                <img class="main-desc__decor" src="<?php bloginfo('template_url'); ?>/img/main-desc.svg" alt="image">
                <div class="main-desc__title el-title el-title--big el-title--black el-title--left">
                    <?php if (get_field('main_desc_title')) : ?>
                        <?php echo get_field('main_desc_title'); ?>
                    <?php endif; ?>
                </div>
                <div class="main-desc__text text-group">
                    <?php if (get_field('main_desc')) : ?>
                        <?php echo get_field('main_desc'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- game-->
    <div data-theme="dark" class="section game-section">
        <div  class="wrapper game-main game-main-section" id="mainarea">
            <div class="alert alert-warning centered-axis-xy" style="min-height: 20px; display:none;" role="alert" id="compilingmessage">
                <div id='loadTasks'> </div>
            </div>
            <!-- The "tabindex=0" specifier on the canvas is important to allow it to capture keyboard focus when clicking on it with a mouse -->
            <canvas tabindex=0 id="canvas" class="emscripten" oncontextmenu="event.preventDefault()" style="display:none;"></canvas>
        </div>
    </div>
    <div class="row buttonarea text-center" id="buttonrow" style="display:none;">
        <div class="col-sm-2 text-center"></div>
        <div class="col-sm-2 text-center"><button type="button" class="btn btn-primary" onclick="try { Module['pauseMainLoop'](); } catch(e) {console.error(e);}">Pause</button></div>
        <div class="col-sm-2 text-center"><button type="button" class="btn btn-primary" onclick="try { Module['resumeMainLoop'](); } catch(e) {console.error(e);}">Resume</button></div>
        <div class="col-sm-2 text-center"><button type="button" class="btn btn-primary" onclick="var w = document.getElementById('logwindow'); w.style.display = w.style.display ? '' : 'none';">Toggle Log</button></div>
        <div class="col-sm-2 text-center"><button type="button" class="btn btn-primary" id='clear_indexeddb' onclick="try { deleteIndexedDBStorage(); } catch(e) {console.error(e);}">Clear IndexedDB</button></div>
        <div class="col-sm-2 text-center"><button type="button" class="btn btn-primary" id="fullscreen_request">FullScreen</button></div>
        <div class="col-sm-2 text-center"></div>
        <div class="col-sm-2 text-center"></div>
    </div>
    <div class="texthalf text-normal jumbotron " id="logwindow" style='display:none'></div>
    <!-- advantages -->
    <section data-theme="orange-white" id="advantages" class="section advantages-section">
        <div class="container">
            <div class="advantages">
                <div class="advantages__left">
                    <div class="advantages__title el-title el-title--big el-title--black el-title--left">
                        <?php if (get_field('advantages_title')) : ?>
                            <?php echo get_field('advantages_title'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="advantages__subtitle">
                        <?php if (get_field('advantages_subtitle')) : ?>
                            <?php echo get_field('advantages_subtitle'); ?>
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('advantages_items')) : ?>
                        <div class="advantages__items">
                            <?php while (have_rows('advantages_items')) : the_row(); ?>
                                <div class="advantages__item">
                                    <div class="advantages__item-icon">
                                        <img src="<?php echo get_sub_field('icon'); ?>" alt="image">
                                    </div>
                                    <div class="advantages__item-text">
                                        <?php echo get_sub_field('title'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="advantages__right">
                    <?php if (get_field('advantages_img')) : ?>
                        <img class="advantages__img" src="<?php echo get_field('advantages_img'); ?>" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- shirts -->
    <section data-theme="dark" id="shirts" class="section shirts-section">
        <div class="container">
            <div class="shirts">
                <div class="shirts__title el-title el-title--big el-title--white">
                    <i>Advanced</i> textile Engineering
                </div>
                <div class="shirts__items">
                    <a href="" class="shirts__item">
                        <div class="shirts__item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/shirt-1.png" alt="product">
                        </div>
                        <div class="shirts__item-title">
                            Vital Shirt
                            <i>Run</i>
                        </div>
                        <div class="shirts__item-subtitle">Faster For Longer</div>
                        <div class="shirts__item-bottom">
                            <p>explore</p>
                            <span><img src="<?php bloginfo('template_url'); ?>/img/arrow.svg" alt="arrow"></span>
                        </div>
                    </a>
                    <a href="" class="shirts__item">
                        <div class="shirts__item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/shirt-2.png" alt="product">
                        </div>
                        <div class="shirts__item-title">
                            Vital Shirt
                            <i>Bike</i>
                        </div>
                        <div class="shirts__item-subtitle">Push More Watts</div>
                        <div class="shirts__item-bottom">
                            <p>explore</p>
                            <span><img src="<?php bloginfo('template_url'); ?>/img/arrow.svg" alt="arrow"></span>
                        </div>
                    </a>
                    <a href="" class="shirts__item">
                        <div class="shirts__item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/shirt-3.png" alt="product">
                        </div>
                        <div class="shirts__item-title">
                            Vital Shirt
                            <i>Ski</i>
                        </div>
                        <div class="shirts__item-subtitle">New Heights</div>
                        <div class="shirts__item-bottom">
                            <p>explore</p>
                            <span><img src="<?php bloginfo('template_url'); ?>/img/arrow.svg" alt="arrow"></span>
                        </div>
                    </a>
                    <a href="" class="shirts__item">
                        <div class="shirts__item-img">
                            <img src="<?php bloginfo('template_url'); ?>/img/shirt-4.png" alt="product">
                        </div>
                        <div class="shirts__item-title">
                            Vital Shirt
                            <i>Gym</i>
                        </div>
                        <div class="shirts__item-subtitle">Make Your Move</div>
                        <div class="shirts__item-bottom">
                            <p>explore</p>
                            <span><img src="<?php bloginfo('template_url'); ?>/img/arrow.svg" alt="arrow"></span>
                        </div>
                    </a>
                    <div class="shirts__caption">
                        <p>Engineered in <i>Switzerland</i></p>
                        <img src="<?php bloginfo('template_url'); ?>/img/made.png" alt="swiss">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features -->
    <section data-theme="white" id="features" class="section features-section">
        <div class="container">
            <div class="features">
                <div class="features-directions">
                    <?php if( have_rows('features_cards')) :?>
                        <?php while( have_rows('features_cards')) : the_row(); ?>
                            <div class="features-directions__item
                            <?php if (get_row_index() == 1) : ?> features-directions__item--white
                            <?php elseif (get_row_index() == 2) : ?> features-directions__item--black<?php endif; ?>"
                            >
                                <div class="features-directions__item-title"><?php echo get_sub_field('title'); ?></div>
                                <?php if (get_sub_field('link')) : ?>
                                    <?php
                                    $link = get_sub_field('link');
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="features-directions__item-btn btn
                                    <?php if (get_row_index() == 1) : ?> btn--orange-black
                                    <?php elseif (get_row_index() == 2) : ?> btn--orange<?php endif; ?>"
                                       href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <span><?php echo esc_html( $link_title ); ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                            <g fill="none"
                                                <?php if (get_row_index() == 1) : ?>
                                                    stroke="#000"
                                                <?php elseif (get_row_index() == 2) : ?>
                                                    stroke="#fff"
                                                <?php endif; ?>
                                                stroke-linecap="round" stroke-width="1.5px">
                                                <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                                <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                            </g>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                <div class="features-directions__item-bottom">
                                    <?php echo get_sub_field('text_bottom'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif;?>
                </div>
                <div class="features-brands">
                    <div class="features-brands__title"><?php echo get_field('features_title'); ?></div>
                    <div class="features-brands__items">
                        <?php if( have_rows('features_brands')) :?>
                            <?php while( have_rows('features_brands')) : the_row(); ?>
                                <a href="<?php echo get_sub_field('link'); ?>" class="features-brands__item">
                                    <img src="<?php echo get_sub_field('logo'); ?>" alt="" class="features-brands__logo">
                                </a>
                            <?php endwhile; ?>
                        <?php endif;?>
                    </div>
                </div>
                <?php echo get_template_part('template-parts/updates');?>
            </div>
        </div>
    </section>
</div>


<?php
get_footer();
?>

