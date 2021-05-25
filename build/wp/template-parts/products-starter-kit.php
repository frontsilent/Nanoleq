<?php
    /* Combined Starter Kit */
    $pageName = get_post_field( 'post_name', get_post() );
    $cs_theme = get_field('cs_theme');
    $cs_title = get_field('cs_title');
    $cs_description = get_field('cs_description');
    $cs_ingredients = get_field('cs_ingredients');
    $cs_image = get_field('cs_image');
    $cs_price = get_field('cs_price');
    $cs_s_description = get_field('cs_s_description');
    $cs_order_link = get_field('cs_order_link');

    echo '<section data-theme="'.( $cs_theme == "dark" ? 'dark' : 'white').'" id="combined-kit" class="section combined-kit-section '.( $cs_theme == "dark" ? 'combined-kit-section--dark' : '').'">';
        echo '<div class="container">';
            echo '<div class="combined-kit '.( $pageName ? 'combined-kit--'.$pageName : '' ).'">';         
                echo '<div class="combined-kit__left">';
                    echo ( $cs_title ? '<div class="el-title '.( $cs_theme == "dark" ? 'el-title--white' : 'el-title--black-orange').' el-title--left">'.$cs_title.'</div>' : '');
                    echo ( $cs_description ? '<div class="text-group  '.( $cs_theme == "dark" ? 'text-group--white' : '').'">'.$cs_description.'</div>' : '');
                    /* Our Products Panel */
                    if( have_rows('cs_ingredients') ):
                        echo '<h3 class="el-title--uppercase '.( $cs_theme == "dark" ? 'text-white' : '').'">Ingredients:</h3>';
                        echo '<ul class="nq-list '.( $cs_theme == "dark" ? 'nq-list--white' : '').'">';
                            while( have_rows('cs_ingredients') ) : the_row();
                            $ingredient = get_sub_field('ingredient');
                            echo ( $ingredient? '<li>'.$ingredient.'</li>' : '');
                            endwhile;
                        echo '</ul>';
                    else :
                    endif;

                echo '</div>';
                echo '<div class="combined-kit__right">';
                    echo ($cs_image ? '<div class="starter-kit-image"><img src="'.$cs_image.'" alt="'.($cs_title ? $cs_title : '').'" /></div>' : '');
                    echo '<div class="starter-kit-description">';
                        echo ($cs_price ? '<div class="el-subtitle el-subtitle--black-orange">EUR <i>'.$cs_price.'</i></div>' : '');
                        echo ($cs_s_description ? '<div class="text-group">'.$cs_s_description.'</div>' : '');
                        echo '<a href="/order?prod_kit='.$pageName.'" class="order-btn">order your kit</a>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</section>';
?>