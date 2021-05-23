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

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Blog options',
        'menu_title'	=> 'Blog',
        'menu_slug' 	=> 'blog-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}

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

//loadMore
function load_more_scripts() {

    global $wp_query;
    // register our main script but do not enqueue it yet
    wp_register_script( 'loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );

    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'loadmore', 'loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );

    wp_enqueue_script( 'loadmore' );
}

add_action( 'wp_enqueue_scripts', 'load_more_scripts' );

function loadmore_ajax_handler()
{

    // prepare our arguments for the query
    $args = json_decode(stripslashes($_POST['query']), true);
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';

    // it is always better to use WP_Query but not here
    query_posts($args);

    if (have_posts()) :

        // run the loop
        while (have_posts()): the_post();

            ?>
            <div class="blog-list__item blog-item blog-item--black">
                <?php get_template_part('template-parts/blog-item', get_post_format()); ?>
            </div>
        <?php
        endwhile;

    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}



add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

//search

function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="blog-list__search" action="' . home_url( '/' ) . '" >
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18.644" viewBox="0 0 18 18.644">
        <path fill="#fff" d="M18.71 16.982l-4.437-4.615a7.525 7.525 0 1 0-5.761 2.688 7.447 7.447 0 0 0 4.313-1.362l4.471 4.65a.982.982 0 1 0 1.415-1.361zM8.512 1.964a5.564 5.564 0 1 1-5.564 5.564 5.57 5.57 0 0 1 5.564-5.564z" transform="translate(-.984)"/>
    </svg>
    <input type="hidden" name="post_type" value="post" />
    <input name="s" value="' . get_search_query() . '" type="text" id="s" placeholder="Search" />
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

function __search_by_title_only($search, $wp_query)
{
    global $wpdb;
    if (empty($search)) return $search;
    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? '' : '%';
    $search = $searchand = '';
    foreach ((array)$q['search_terms'] as $term) {
        $term = esc_sql(like_escape($term));
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if (!empty($search)) {
        $search = " AND ({$search}) ";
        if (!is_user_logged_in()) $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}

add_filter('posts_search', '__search_by_title_only', 500, 2);


//searchLive
function ba_ajax_search(){
    $args = array(
        's' => $_POST['term'],
        'post_type' => 'post',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            ?>
            <div class="blog-list__item blog-item blog-item--black">
                <?php echo get_template_part('template-parts/blog-item');?>
            </div>
            <?php
        }
    } else {
        ?>
        <div class="text-group text-group--black">
            <h3><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h3>
        </div>
        <?php
    }
    exit;
}
add_action('wp_ajax_nopriv_ba_ajax_search','ba_ajax_search');
add_action('wp_ajax_ba_ajax_search','ba_ajax_search');


?>