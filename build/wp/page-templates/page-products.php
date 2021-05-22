<?php
/*
Template Name: Products
*/
get_header();
?>
<!-- page body -->
<div class="page-body">
    <?php the_content(); ?>
    <!-- why-d-textile -->
    <section data-theme="white" id="why-d-textile" class="section why-d-textile-section">
        <div class="container">
            <div class="why-d-textile">
                <?php 
                    /* Digital Textiles Fields */
                    $dt_title = get_field('dt_title');
                    $dt_description = get_field('dt_description');
                    $dt_subheading = get_field('dt_subheading');

                    echo '<div class="why-d-textile__content">';
                        echo ( $dt_title ? '<div class="el-title el-title--left el-title--black-orange mobile-hidden">'.$dt_title.'</div>' : '');

                        if($dt_description || $dt_subheading){
                            echo '<div class="text-group">';
                                echo $dt_description;
                                echo '<h5 class="black-orange">'.$dt_subheading.'</h5>';
                            echo '</div>';
                        }
                    echo '</div>';
                    /* Products Slider */
                    if( have_rows('dt_slider') ):
                        echo '<div class="why-d-textile__slider">';
                            echo ($dt_title ? '<div class="el-title el-title--black-orange desktop-hidden">'.$dt_title.'</div>' : '');
                            echo '<div class="products-slider">';
                            while( have_rows('dt_slider') ) : the_row();
                                $slide_image = get_sub_field('slide_image');
                                $slide_title = get_sub_field('slide_title');
                                $slide_left_icon = get_sub_field('slide_left_icon');
                                $slide_right_icon = get_sub_field('slide_right_icon');
                                echo '<div class="products-slider__slide">';
                                    echo ($slide_image ? '<div class="products-slider__imageWrapper"><img src="'.$slide_image.'" alt="'.$slide_title.'" /></div>' : '');
                                    echo ($slide_title ? '<div class="products-slider__title">'.$slide_title.'</div>' : '');
                                    echo ($slide_left_icon ? '<div class="products-slider__leftImage"><div class="floating-hexagon"><span></span></div><img src="'.$slide_left_icon.'" /></div>' : '');
                                    echo ($slide_right_icon ? '<div class="products-slider__rightImage"><div class="floating-hexagon"><span></span></div><img src="'.$slide_right_icon.'" /></div>' : '');
                                echo '</div>';
                            endwhile;
                            echo '</div>';
                        echo '</div>';
                    else :
                    endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Gold Standard -->
    <section data-theme="white" id="gold-standard" class="section gold-standard-section">
        <div class="container">
            <div class="gold-standard">
                <?php
                /* Gold Standard Fields */
                $gs_icon = get_field('gs_icon');
                $gs_title = get_field('gs_title');
                /* Left Panel */
                $left_panel = get_field('gs_left_panel');
                $lp_number = $left_panel['lp_number'];
                $lp_image = $left_panel['lp_image'];
                $lp_title = $left_panel['lp_title'];
                $lp_subheading = $left_panel['lp_subheading'];
                /* Right Panel */
                $right_panel = get_field('gs_right_panel');
                $rp_number = $right_panel['rp_number'];
                $rp_image = $right_panel['rp_image'];
                $rp_title = $right_panel['rp_title'];
                $rp_subheading = $right_panel['rp_subheading'];

                echo ($gs_icon ? '<div class="gold-standard__icon"><img src="'.$gs_icon.'" alt="'.$gs_title.'"></div>' : '');
                echo ( $gs_title ? '<div class="el-title">'.$gs_title.'</div>' : '');
                echo '<div class="gold-standard__panels">';

                    echo '<div class="gold-standard__panel">';
                        echo ($lp_number ? '<i>'.$lp_number.'</i>' : '');
                        echo ( $lp_image ? '<div class="gold-standard__panel__imageWrapper"><img src="'.$lp_image.'" alt="'.$lp_title.'" /></div>' : '');
                        echo ( $lp_title ? '<h3>'.$lp_title.'</h3>' : '' );
                        echo ($lp_subheading ? '<h6>'.$lp_subheading.'</h6>' : '');
                    echo '</div>';

                    echo '<div class="gold-standard__panel">';
                        echo ($rp_number ? '<i>'.$rp_number.'</i>' : '');
                        echo ( $rp_image ? '<div class="gold-standard__panel__imageWrapper"><img src="'.$rp_image.'" alt="'.$rp_title.'" /></div>' : '');
                        echo ( $rp_title ? '<h3>'.$rp_title.'</h3>' : '' );
                        echo ($rp_subheading ? '<h6>'.$rp_subheading.'</h6>' : '');
                    echo '</div>';
                echo '</div>';
                ?>
            </div>
        </div>
    </section>
    <!-- Our Products -->
    <section data-theme="dark" id="our-products" class="section our-products-section">
        <div class="container">
            <div class="our-products">
                <?php 
                    /* Our Products */
                    $our_p_title = get_field('our_p_title');
                    echo ($our_p_title ? '<div class="el-title el-title--white">'.$our_p_title.'</div>' : '');

                    /* Our Products Panel */
                    if( have_rows('our_p_product') ):
                        echo '<div class="our-products__panels">';
                            while( have_rows('our_p_product') ) : the_row();

                                $product_image = get_sub_field('product_image');
                                $product_title = get_sub_field('product_title');
                                $product_subheading = get_sub_field('product_subheading');
                                $product_link = get_sub_field('product_link');
                                echo '<div class="our-products__panel">';

                                    echo ( $product_image ? '<div class="our-products__panel__imageWrapper"><img src="'.$product_image.'" alt="'.$product_title.'" /></div>' : '');
                                    echo ( $product_title ? '<div class="el-subtitle el-subtitle--black-orange">'.$product_title.'</div>' : '');
                                    echo ( $product_subheading ? '<div class="our-products__panel__description">'.$product_subheading.'</div>' : '');

                                    if($product_link){
                                        echo '<a href="'.$product_link.'" class="explore-btn">
                                        <span>EXPLORE</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5px">
                                                <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                                <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                            </g>
                                        </svg>
                                    </a>';
                                    }

                                echo '</div>';

                            endwhile;
                        echo '</div>';
                    else :
                    endif;
                ?>
            </div>
        </div>
    </section>
    <?php get_template_part( 'template-parts/products', 'starter-kit' ); ?>
</div>

<?php
get_footer();
?>
