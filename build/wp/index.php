<?php
/*
Template Name: Main page
*/
get_header();
?>


<div class="page-body">
    <?php the_content(); ?>
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
                    <?php echo get_field('shirts_title'); ?>
                </div>
                <div class="shirts__items">
                    <?php if( have_rows('shirts')) :?>
                        <?php while( have_rows('shirts')) : the_row(); ?>
                            <a href="<?php echo get_sub_field('link'); ?>" class="shirts__item">
                                <div class="shirts__item-img">
                                    <img src="<?php echo get_sub_field('image'); ?>" alt="product">
                                </div>
                                <div class="shirts__item-title">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                                <?php if (get_sub_field('subtitle')) : ?>
                                    <div class="shirts__item-subtitle"><?php echo get_sub_field('subtitle'); ?></div>
                                <?php endif; ?>
                                <div class="shirts__item-bottom">
                                    <p>explore</p>
                                    <span><img src="<?php bloginfo('template_url'); ?>/img/arrow.svg" alt="arrow"></span>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php endif;?>
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

