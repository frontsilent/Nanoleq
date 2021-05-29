<?php
/*
Template Name: Blog
*/
get_header();

$taxonomy_name = 'category';
$args = array(
    'hide_empty' => true,
);

?>

<div class="page-body">
    <!-- blog-top -->
    <section data-theme="dark" id="blog-top" class="section blog-top-section">
        <div class="container">
            <div class="blog-top">
                <div class="blog-top__left">
                    <?php $topArticle = get_field('top_article'); ?>
                    <?php $terms = get_the_terms($topArticle, $taxonomy_name, $args); ?>
                    <?php if ($terms) : ?>
                        <?php foreach ($terms as $term): ?>
                            <?php $term_name = $term->name; ?>
                            <a class="blog-top__category" href="<?php echo get_term_link($term); ?>"><?php echo $term_name; ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <a class="blog-top__title el-title el-title--white"><?php echo get_the_title($topArticle);?></a>
                    <div class="blog-top__text text-group text-group--white">
                        <?php $articleText = get_field('post_text', $topArticle); ?>
                        <p><?php echo mb_strimwidth(strip_tags($articleText), 0, 503, "..."); ?></p>
                    </div>
                    <a href="<?php echo get_permalink($topArticle);?>" class="blog-top__more">Read More</a>
                </div>
                <div class="blog-top__image">
                    <div class="blog-top__date blog-date blog-date--dark blog-date--big">
                        <?php echo get_the_date('d'); ?>
                        <em><?php echo get_the_date('F, Y'); ?></em>
                    </div>
                    <?php if (get_field('big_img',$topArticle)) : ?>
                        <img src="<?php echo get_field('big_img',$topArticle); ?>" alt="blog">
                    <?php else: ?>
                        <img src="<?php echo get_field('post_img', $topArticle); ?>" alt="blog">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-two -->
    <section id="blog-two" data-theme="dark" class="section blog-two-section">
        <div class="blog-two">
            <?php if( have_rows('two_articles')) :?>
                <?php while( have_rows('two_articles')) : the_row(); ?>
                    <div class="blog-two__item-wrap blog-two__item--left">
                        <div class="blog-two__item">
                            <?php $articleLeft = get_sub_field('article_1'); ?>
                            <div class="blog-item blog-item--white blog-two__item-desc">
                                <?php $terms = get_the_terms(get_the_ID(), $taxonomy_name, $args); ?>
                                <?php if ($terms) : ?>
                                    <?php foreach ($terms as $term): ?>
                                        <?php $term_name = $term->name; ?>
                                        <a class="blog-item__cat" href="<?php echo get_term_link($term);?>"><?php echo $term_name; ?></a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <a class="blog-item__title"><?php echo get_the_title($articleLeft); ?></a>
                                <div class="blog-item__text"><?php echo get_field('post_description', $articleLeft);?></div>
                                <a href="<?php echo get_permalink($articleLeft); ?>" class="blog-item__more">Read More</a>
                            </div>
                            <a href="<?php echo get_permalink($articleLeft); ?>" class="blog-two__item-img">
                                <?php if (!get_field('video', $articleLeft)) : ?>
                                    <img src="<?php echo get_field('post_img', $articleLeft); ?>" alt="blog">
                                <?php else: ?>
                                    <video src="<?php echo get_field('video_file', $articleLeft); ?>"></video>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89">
                                        <g>
                                            <g fill="rgba(26,26,26,0.4)" stroke-linejoin="round" opacity="0.6">
                                                <path d="M36.5 77c-5.466 0-10.77-1.071-15.766-3.184-4.823-2.04-9.154-4.96-12.872-8.678-3.718-3.718-6.638-8.05-8.678-12.872C-2.929 47.27-4 41.966-4 36.5c0-5.466 1.071-10.77 3.184-15.766 2.04-4.823 4.96-9.154 8.678-12.872 3.718-3.718 8.05-6.638 12.872-8.678C25.73-2.929 31.034-4 36.5-4c5.466 0 10.77 1.071 15.766 3.184 4.823 2.04 9.154 4.96 12.872 8.678 3.718 3.718 6.638 8.05 8.678 12.872C75.929 25.73 77 31.034 77 36.5c0 5.466-1.071 10.77-3.184 15.766-2.04 4.823-4.96 9.154-8.678 12.872-3.718 3.718-8.05 6.638-12.872 8.678C47.27 75.929 41.966 77 36.5 77z" transform="translate(-653 -1240) translate(661 1248)"/>
                                                <path fill="#fff" d="M36.5 0C16.342 0 0 16.342 0 36.5S16.342 73 36.5 73 73 56.658 73 36.5 56.658 0 36.5 0m0-8C61.037-8 81 11.963 81 36.5S61.037 81 36.5 81-8 61.037-8 36.5 11.963-8 36.5-8z" transform="translate(-653 -1240) translate(661 1248)"/>
                                            </g>
                                            <path fill="#fff" d="M11 0l11 18H0z" transform="translate(-653 -1240) rotate(90 -280.5 992.5)"/>
                                        </g>
                                    </svg>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                    <div class="blog-two__item-wrap blog-two__item--right">
                        <div class="blog-two__item">
                            <?php $articleRight= get_sub_field('article_2'); ?>
                            <div class="blog-item blog-item--white blog-two__item-desc">
                                <?php $terms = get_the_terms(get_the_ID(), $taxonomy_name, $args); ?>
                                <?php if ($terms) : ?>
                                    <?php foreach ($terms as $term): ?>
                                        <?php $term_name = $term->name; ?>
                                        <a class="blog-item__cat" href="<?php echo get_term_link($term);?>"><?php echo $term_name; ?></a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <a class="blog-item__title"><?php echo get_the_title($articleRight); ?></a>
                                <div class="blog-item__text"><?php echo get_field('post_description', $articleRight);?></div>
                                <a href="<?php echo get_permalink($articleRight); ?>" class="blog-item__more">Read More</a>
                            </div>
                            <a href="<?php echo get_permalink($articleRight); ?>" class="blog-two__item-img">
                                <?php if (!get_field('video', $articleRight)) : ?>
                                    <img src="<?php echo get_field('post_img', $articleRight); ?>" alt="blog">
                                <?php else: ?>
                                    <video src="<?php echo get_field('video_file', $articleRight); ?>"></video>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89">
                                        <g>
                                            <g fill="rgba(26,26,26,0.4)" stroke-linejoin="round" opacity="0.6">
                                                <path d="M36.5 77c-5.466 0-10.77-1.071-15.766-3.184-4.823-2.04-9.154-4.96-12.872-8.678-3.718-3.718-6.638-8.05-8.678-12.872C-2.929 47.27-4 41.966-4 36.5c0-5.466 1.071-10.77 3.184-15.766 2.04-4.823 4.96-9.154 8.678-12.872 3.718-3.718 8.05-6.638 12.872-8.678C25.73-2.929 31.034-4 36.5-4c5.466 0 10.77 1.071 15.766 3.184 4.823 2.04 9.154 4.96 12.872 8.678 3.718 3.718 6.638 8.05 8.678 12.872C75.929 25.73 77 31.034 77 36.5c0 5.466-1.071 10.77-3.184 15.766-2.04 4.823-4.96 9.154-8.678 12.872-3.718 3.718-8.05 6.638-12.872 8.678C47.27 75.929 41.966 77 36.5 77z" transform="translate(-653 -1240) translate(661 1248)"/>
                                                <path fill="#fff" d="M36.5 0C16.342 0 0 16.342 0 36.5S16.342 73 36.5 73 73 56.658 73 36.5 56.658 0 36.5 0m0-8C61.037-8 81 11.963 81 36.5S61.037 81 36.5 81-8 61.037-8 36.5 11.963-8 36.5-8z" transform="translate(-653 -1240) translate(661 1248)"/>
                                            </g>
                                            <path fill="#fff" d="M11 0l11 18H0z" transform="translate(-653 -1240) rotate(90 -280.5 992.5)"/>
                                        </g>
                                    </svg>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif;?>
        </div>
    </section>
    <!-- blog-list -->
    <section data-theme="white" class="section blog-list-section">
        <div class="blog-list__top-wrap">
            <div class="container">
                <div class="blog-list__top">
                    <ul class="blog-list__categories">
                        <li class="active"><a href="<?php echo get_permalink();?>">All</a></li>
                        <?php $terms = get_terms($taxonomy_name, $args); ?>
                        <?php if ($terms) : ?>
                            <?php foreach ($terms as $term): ?>
                                <?php $term_name = $term->name; ?>
                                <li><a href="<?php echo get_term_link($term);?>"><?php echo $term->name;?></a></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    <form action="" class="blog-list__search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18.644" viewBox="0 0 18 18.644">
                            <path fill="#fff" d="M18.71 16.982l-4.437-4.615a7.525 7.525 0 1 0-5.761 2.688 7.447 7.447 0 0 0 4.313-1.362l4.471 4.65a.982.982 0 1 0 1.415-1.361zM8.512 1.964a5.564 5.564 0 1 1-5.564 5.564 5.57 5.57 0 0 1 5.564-5.564z" transform="translate(-.984)"/>
                        </svg>
                        <input name="s" type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-list" id="blog-list">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'order' => 'DESC',
                    'orderby' => 'date',
                );
                ?>
                <?php $query = new WP_Query( $args ); ?>
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="blog-list__item blog-item blog-item--black">
                            <?php echo get_template_part('template-parts/blog-item');?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php if (  $query->max_num_pages > 1 ) : ?>
                    <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<?php echo serialize($query->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = '<?php echo $query->max_num_pages; ?>';
                    </script>
                    <div class="blog-list__more-wrap">
                        <button type="button" class="blog-list__more" id="loadmore">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="Sync" d="M9.429,18A.714.714,0,0,1,8,18a10.014,10.014,0,0,1,17.143-7.019V8.714a.714.714,0,0,1,1.429,0V13a.714.714,0,0,1-.714.714H21.571a.714.714,0,1,1,0-1.429h2.841A8.588,8.588,0,0,0,9.429,18Zm17.857-.714a.714.714,0,0,0-.714.714,8.588,8.588,0,0,1-14.984,5.714h2.841a.714.714,0,1,0,0-1.429H10.143A.714.714,0,0,0,9.429,23v4.286a.714.714,0,1,0,1.429,0V25.019A10.014,10.014,0,0,0,28,18,.714.714,0,0,0,27.286,17.286Z" transform="translate(-8 -8)" fill="#fbb316"/>
                            </svg>
                            <span>Load More</span>
                        </button>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- blog-dates -->
    <section id="blog-dates" data-theme="white" class="section blog-dates-section">
        <div class="container">
            <div class="blog-dates">
                <?php if (get_field('blog_dates_title')) : ?>
                    <div class="blog-dates__title">
                        <?php echo get_field('blog_dates_title'); ?>
                    </div>
                <?php endif; ?>
                <div class="blog-dates__items">
                    <a href="https://onlinelibrary.wiley.com/doi/abs/10.1002/adhm.201700994" target="_blank" class="blog-dates__item">
                        <div class="blog-dates__item-date">2018</div>
                        <div class="blog-dates__item-title">Skin Conformal Polymer Electrodes for Clinical ECG and EEG Recordings</div>
                        <div class="blog-dates__item-text">Stauffer, et al. Advanced Healthcare Materials</div>
                    </a>
                    <a href="https://pubmed.ncbi.nlm.nih.gov/29488263/" target="_blank" class="blog-dates__item">
                        <div class="blog-dates__item-date">2018</div>
                        <div class="blog-dates__item-title">High-Density Stretchable Electrode Grids for Chronic Neural Recording</div>
                        <div class="blog-dates__item-text">Tybrandt, Stauffer, et al. Advanced Materials</div>
                    </a>
                    <a href="https://www.nature.com/articles/srep25641" target="_blank" class="blog-dates__item">
                        <div class="blog-dates__item-date">2016</div>
                        <div class="blog-dates__item-title">Multilayer Patterning of High Resolution Intrinsically Stretchable Electronics</div>
                        <div class="blog-dates__item-text">Stauffer, et al. Nature Scientific reports 6</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>
