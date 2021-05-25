<?php
/**
 * nanoleq functions and definitions
 *
 * @package nanoleq
 */

function nanoleq_scripts() {

    // отменяем зарегистрированный jQuery
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');

    wp_enqueue_style( 'nanoleq-style', get_stylesheet_uri() );

    wp_enqueue_style( 'nanoleq-custom-st', get_template_directory_uri() . '/css/main.css', array(), '1.0');

    wp_enqueue_script( 'nanoleq-slick-js', get_template_directory_uri().'/js/slick.min.js', array(), '1.0', true );

    wp_enqueue_script( 'nanoleq-scripts', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );

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


//menu support
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

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'contacts', [
        'label'  => null,
        'labels' => [
            'name'               => 'Contacts', // основное название для типа записи
            'singular_name'      => 'Contacts request', // название для одной записи этого типа
            'add_new'            => 'Add contact', // для добавления новой записи
            'add_new_item'       => 'Add contact', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit contact', // для редактирования типа записи
            'new_item'           => 'New contact', // текст новой записи
            'view_item'          => 'See contact', // для просмотра записи этого типа.
            'search_items'       => 'Find contact', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Contacts', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => true,
        'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
    register_post_type( 'orders', [
        'label'  => null,
        'labels' => [
            'name'               => 'Orders', // основное название для типа записи
            'singular_name'      => 'Order', // название для одной записи этого типа
            'add_new'            => 'Add order', // для добавления новой записи
            'add_new_item'       => 'Add order', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit order', // для редактирования типа записи
            'new_item'           => 'New order', // текст новой записи
            'view_item'          => 'See order', // для просмотра записи этого типа.
            'search_items'       => 'Find order', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Orders', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => true,
        'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}

function themes_taxonomy() {
    register_taxonomy(
        'requests_type',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'contacts',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Request type', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => '',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
    register_taxonomy(
        'requests_type_orders',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'orders',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Request type', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => '',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'themes_taxonomy');

//get contacts
function getContacts(){

    $pageTitle = $_POST['form_subject'];
    $name = $_POST['full_name'];
    $phoneNumber = $_POST['phone'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $message = $_POST['message'];
    $type = $_POST['contact_form_type'];


    $post_data = array(
        'post_title' => $name . ', ' . $email,
        'post_type' => 'contacts',
        'post_status' => 'publish',
    );


    $post_id = wp_insert_post($post_data);

    wp_set_object_terms( $post_id, $type, 'requests_type' );

    $post = get_post($post_id);

    $clientInfo = array(
        'full_name' => $name,
        'phone' => $phoneNumber,
        'email' => $email,
        'company' => $company,
        'message' => $message,
    );

    $clientInfoArr[] = $clientInfo;


    update_field("order_date", get_the_date('j.m.Y', $post), $post);

    update_field("client_info", $clientInfoArr, $post);

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
    $mail_sent = mail($admin_email, adopt($form_subject), $message, $headers );

    if($mail_sent){
        setcookie('order_user_name', $_POST['full_name'], time()+3600, COOKIEPATH, COOKIE_DOMAIN);
    }
    die();

}

add_action('wp_ajax_nopriv_contacts', 'getContacts');
add_action('wp_ajax_contacts', 'getContacts');

//get order
function getOrder(){

    $pageTitle = $_POST['form_subject'];
    $name = $_POST['full_name'];
    $phoneNumber = $_POST['phone'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $message = $_POST['message'];
    $type = $_POST['request_type'];

    $post_data = array(
        'post_title' => $name . ', ' . $pageTitle,
        'post_type' => 'orders',
        'post_status' => 'publish',
    );


    $post_id = wp_insert_post($post_data);

    wp_set_object_terms( $post_id, $type, 'requests_type_orders' );

    $post = get_post($post_id);

    $clientInfo = array(
        'full_name' => $name,
        'phone' => $phoneNumber,
        'email' => $email,
        'company' => $company,
        'message' => $message,
        'products_info' => $name,
    );

    $clientInfoArr[] = $clientInfo;


    update_field("order_date", get_the_date('j.m.Y', $post), $post);

    update_field("client_info", $clientInfoArr, $post);

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
    $mail_sent = mail($admin_email, adopt($form_subject), $message, $headers );

    if($mail_sent){
        setcookie('order_user_name', $_POST['full_name'], time()+3600, COOKIEPATH, COOKIE_DOMAIN);
    }

    die();

}

add_action('wp_ajax_nopriv_order', 'getOrder');
add_action('wp_ajax_order', 'getOrder');

//loadMore
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
function custom_search_form_submit_current_page( $form ) {
    $form = '<form id="searchform" id="searchform" class="blog-list__search" action="' . home_url( '/wp-admin/admin-ajax.php' ) . '" >
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18.644" viewBox="0 0 18 18.644">
            <path fill="#fff" d="M18.71 16.982l-4.437-4.615a7.525 7.525 0 1 0-5.761 2.688 7.447 7.447 0 0 0 4.313-1.362l4.471 4.65a.982.982 0 1 0 1.415-1.361zM8.512 1.964a5.564 5.564 0 1 1-5.564 5.564 5.57 5.57 0 0 1 5.564-5.564z" transform="translate(-.984)"/>
        </svg>
        <input type="hidden" name="action" value="search_form" />
        <input type="hidden" name="post_type" value="post" />
        <input type="text" name="search_text" class="search-input" placeholder="Search" />
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'custom_search_form_submit_current_page' );

//search by title
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

//search in page
function search_form(){
    $search_text = $_POST['search_text'];
    $post_type = $_POST['post_type'];
    $args['paged'] = 1;
    query_posts(['post_type' => $post_type, 'paged' => $args['paged'], 's' => $search_text]);
    global $wp_query; ?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <div class="blog-list__item blog-item blog-item--black">
                <?php get_template_part('template-parts/blog-item', get_post_format()); ?>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="text-group text-group--black">
            <h3><?php _e('Sorry, no posts matched your criteria.'); ?></h3>
        </div>
    <?php endif;
    wp_reset_postdata(); ?>
    <?php die;
}
add_action("wp_ajax_search_form", "search_form");
add_action("wp_ajax_nopriv_search_form", "search_form");

?>