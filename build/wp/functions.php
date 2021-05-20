<?php
/**
 * nanoleq functions and definitions
 *
 * @package nanoleq
 */

function nanoleq_scripts() {

    wp_enqueue_style( 'nanoleq-style', get_stylesheet_uri() );


    wp_enqueue_style( 'nanoleq-custom-st', get_template_directory_uri() . '/css/main.css', array(), '1.0');

    wp_enqueue_script( 'nanoleq-slick-js', get_template_directory_uri().'/js/slick.min.js', array(), '', true );

    wp_enqueue_script( 'nanoleq-scripts', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );


}
add_action( 'wp_enqueue_scripts', 'nanoleq_scripts' );


//Добавление изображения для записи
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

register_sidebar(
    array(
        'name' => esc_html__('Shares', 'Nanoleq'),
        'id' => 'share-links',
        'before_widget' => '<div class="widget %1$s %2$s">',
        'after_widget' => '</div>',
    )
);

require get_template_directory() . '/acf-blocks.php';

//Пагинация
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>
    */

    return '
		<a >%3$s</a>
	';
}

## Поддержка меню
add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu' => 'Меню в шапке'
    ) );
});

//Удаляет слово АРХИВЫ, РУБРИКИ
add_filter( 'get_the_archive_title', function( $title ){
    return preg_replace('~^[^:]+: ~', '', $title );
});
?>