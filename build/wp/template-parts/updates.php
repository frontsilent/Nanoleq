<div class="updates">
    <div class="updates__title">
        THE JOURNAL
    </div>
    <div class="updates__items">
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
                <div class="updates__item">
                    <a href="<?php echo get_permalink();?>" class="updates__item-left">
                        <img class="updates__item-img" src="<?php echo get_field('post_img'); ?>" alt="news">
                        <span class="updates__item-date blog-date blog-date--white">
                            <?php echo get_the_date('d'); ?> <em><?php echo get_the_date('F, Y'); ?></em>
                        </span>
                    </a>
                    <div class="updates__item-right">
                        <?php
                        $taxonomy_name = 'category';
                        $args = array(
                            'hide_empty' => false,
                        );
                        ?>
                        <?php $terms = get_the_terms(get_the_ID(), $taxonomy_name, $args); ?>
                        <?php if ($terms) : ?>
                            <?php foreach ($terms as $term): ?>
                                <?php $term_name = $term->name; ?>
                                <a class="updates__item-category" href="<?php echo get_term_link($term);?>"><?php echo $term_name; ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <a href="<?php echo get_permalink();?>" class="updates__item-title"><?php the_title(); ?></a>
                        <div class="updates__item-desc"><?php echo get_field('post_description'); ?></div>
                        <a href="<?php echo get_permalink();?>" class="updates__item-btn">Read More</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>