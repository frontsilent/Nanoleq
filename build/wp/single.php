<?php
get_header();
global $post;
$postId = get_the_ID();
?>


<div class="page-body">
    <!-- blog-article -->
    <section id="blog-article" class="section blog-article-section">
        <div class="container">
            <div class="blog-article">
                <div class="blog-article__top">
                    <?php
                    $taxonomy_name = 'category';
                    $args = array(
                        'hide_empty' => false,
                    );
                    ?>
                    <?php $terms = get_the_terms($postId, $taxonomy_name, $args); ?>
                    <?php if ($terms) : ?>
                        <?php foreach ($terms as $term): ?>
                            <?php $term_name = $term->name; ?>
                            <a href="<?php echo get_term_link($term);?>" class="blog-article__cat"><?php echo $term_name; ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="blog-article__date">
                        <?php echo get_the_date('d'); ?>
                        <em><?php echo get_the_date('F, Y'); ?></em>
                    </div>
                </div>
                <div class="blog-article__info text-group text-group--black">
                    <h2 class="blog-article__title">
                        <div class="alignright">
                            <?php if (!get_field('video')) : ?>
                                <img src="<?php echo get_field('post_img'); ?>" alt="blog">
                            <?php else: ?>
                                <video src="<?php echo get_field('video_file'); ?>" autoplay muted loop></video>
                            <?php endif; ?>
                        </div>
                        <span><?php the_title(); ?></span>
                    </h2>
                    <?php echo get_field('post_text'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-social -->
    <section id="blog-social" class="section blog-social-section">
        <div class="container">
            <div class="blog-social">
                <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>" class="blog-social__item">
                   <span class="blog-social__item-icon">
                       <img src="<?php bloginfo('template_url'); ?>/img/fb-l.svg" alt="fb">
                   </span>
                    <p>Share</p>
                </a>
                <a target="_blank" href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()) ?>" class="blog-social__item">
                    <span class="blog-social__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/img/twitter.svg" alt="tw">
                    </span>
                    <p>Tweet</p>
                </a>
                <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()) ?>&title=<?php the_title();?>" class="blog-social__item">
                    <span class="blog-social__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/img/ln-logo.svg" alt="ln">
                    </span>
                    <p>Share</p>
                </a>
            </div>
        </div>
    </section>
    <!-- blog-other -->
    <section id="blog-other" class="section blog-other-section">
        <div class="container">
            <div class="blog-other">
                <div class="blog-other__title el-title el-title--black">you might find it interesting</div>
                <div class="blog-other__items">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'post__not_in' => array(get_the_ID()),
                    );
                    ?>
                    <?php $query = new WP_Query( $args ); ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="blog-other__item blog-item blog-item--black">
                                <?php echo get_template_part('template-parts/blog-item');?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
get_footer();
?>

