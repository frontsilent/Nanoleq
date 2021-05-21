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
        'header_menu' => 'Header menu',
        'footer_menu' => 'Footer menu',
    ) );
});

//Количество символов в сокращенном тексте записи
function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Текст тега more
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function trim_title_chars($count, $after) {
    $title = get_the_title();
    if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
    else $after = '';
    echo $title . $after;
}

//Удаляет слово АРХИВЫ, РУБРИКИ
add_filter( 'get_the_archive_title', function( $title ){
    return preg_replace('~^[^:]+: ~', '', $title );
});

//Оформление заказа
function getOrder(){

    $c = true;
    $project_name = trim($_POST["project_name"]);
    $admin_email  = trim($_POST["admin_email"]);
    $form_subject = trim($_POST["form_subject"]);
    foreach ( $_POST as $key => $value ) {
        if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" && $key != "action" && $key != 'request_type' ) {
            $message .= "
      " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
      </tr>";
        }
    }
    $message = "<table style='width: 100%;'>$message</table>";
    function adopt($text) {
        return '=?UTF-8?B?'.base64_encode($text).'?=';
    }
    $headers = "MIME-Version: 1.0" . PHP_EOL .
        "Content-Type: text/html; charset=utf-8" . PHP_EOL .
        'From: '.adopt($project_name).' <info@'.$_SERVER['HTTP_HOST'].'>' . PHP_EOL .
        'Reply-To: '.$admin_email.'' . PHP_EOL;
    mail($admin_email, adopt($form_subject), $message, $headers );

    die();

}

add_action('wp_ajax_nopriv_order', 'getOrder');
add_action('wp_ajax_order', 'getOrder');

?>