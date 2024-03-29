<?php
$taxonomy_name = 'category';
$args = array(
    'hide_empty' => false,
);
?>
<a href="<?php echo get_permalink(); ?>" class="blog-item__img">
    <div class="blog-date blog-date--white">
        <?php echo get_the_date('d'); ?>
        <em><?php echo get_the_date('F, Y'); ?></em>
    </div>
    <?php if (!get_field('video')) : ?>
        <img src="<?php echo get_field('post_img'); ?>" alt="blog">
    <?php else: ?>
        <video src="<?php echo get_field('video_file'); ?>"></video>
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
<?php $terms = get_the_terms(get_the_ID(), $taxonomy_name, $args); ?>
<?php if ($terms) : ?>
    <?php foreach ($terms as $term): ?>
        <?php $term_name = $term->name; ?>
        <a class="blog-item__cat" href="<?php echo get_term_link($term); ?>"><?php echo $term_name; ?></a>
    <?php endforeach; ?>
<?php endif; ?>
<a href="<?php echo get_permalink(); ?>" class="blog-item__title"><?php the_title(); ?></a>
<div class="blog-item__text"><?php echo get_field('post_description'); ?></div>
<a href="<?php echo get_permalink(); ?>" class="blog-item__more">Read More</a>
