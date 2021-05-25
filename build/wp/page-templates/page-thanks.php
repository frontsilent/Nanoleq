<?php
/*
Template Name: Thanks
*/
if(!isset($_COOKIE['order_user_name'])){wp_redirect( "/" ); exit;}
get_header();
?>
    <!-- intro -->
    <section data-theme="dark" id="intro" class="section intro-section intro-section--thanks">
        <div class="intro__img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/our-services-intro.jpg" alt="Thank You">
        </div>
        <div class="nq-thanks">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/success-icon.svg" alt="Success icon" />
            <div class="el-subtitle el-subtitle--black-orange">Thank You, <i><?php echo $_COOKIE['order_user_name'];?>!</i></div>
            <h6>We have received your request and will handle it as soon as possible. </h6>
        </div>
    </section>
<?php
get_footer();
?>