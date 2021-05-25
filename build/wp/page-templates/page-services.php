<?php
/*
Template Name: Services
*/
get_header();
?>
<!-- page body -->
<div class="page-body">
    <?php the_content(); ?>

    <!-- Our Services -->
    <section data-theme="white" id="our-services" class="section our-services-section">
        <div class="our-services">

        <?php

            $os_heading = get_field('os_heading');
            $os_subheading = get_field('os_subheading');

            echo ( $os_heading ? '<div class="el-title">'.$os_heading.'</div>' : '');
            echo ( $os_subheading ? ' <h5>'.$os_subheading.'</h5>' : '');


            if( have_rows('os_services') ):

                echo '<div class="our-services__panels">';

                    while( have_rows('os_services') ) : the_row();
                        $service_icon = get_sub_field('icon', 'options');
                        $service_label = get_sub_field('label');
                        $service_title = get_sub_field('title');
                        $service_link = get_sub_field('link');

                        echo '<a href="#get-in-touch" class="our-services__panel">';
                        if($service_icon){
                            echo '<div class="our-services__panel__icon">';
                                 echo file_get_contents( $service_icon ); 
                            echo '</div>';
                        }
                        echo ( $service_label ? '<div class="our-services__panel__weOffer">'.$service_label.'</div>' : '');
                        echo ( $service_title ? '<div class="el-subtitle">'.$service_title.'</div>' : '');
                        echo ' <span class="our-services__panel__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5px">
                                    <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                    <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                </g>
                            </svg>
                        </span>';
                        echo '</a>';

                    endwhile;

                echo '</div>';
            else :
            endif;


        ?>
        </div>
    </section>

    <!-- Nanoleq Technology -->
    <section data-theme="dark" id="nanoleq-technology" class="section nanoleq-technology-section">
        <div  id="get-in-touch" class="nanoleq-technology">
            <?php
                $nt_title = get_field('nt_title');
                $nt_button = get_field('nt_button');;

                echo ( $nt_title ? '<h3 class="white-orange text-uppercase">'.$nt_title.'</h3>' : '');
                echo ( $nt_button ? '<a href="'.$nt_button['url'].'" class="wishlist-btn wishlist-btn--small" target="'.( $nt_button['target'] ? $nt_button['target'] : '_self').'">'.$nt_button['title'].'</a>' : '');

            ?>
        </div>
    </section>


    <!-- Our Services Row -->
    <section data-theme="white" id="our-services-row" class="section section--smallp our-services-row-section our-services-row-section--gray">
        <div class="container">
            <div class="our-services-row">
            <?php
                $p_c_title = get_field('p_c_title');
                $p_c_description = get_field('p_c_description');
                $p_c_image = get_field('p_c_image');

                echo '<div class="our-services-row__content">';
                    echo ( $p_c_title ? '<h3>'.$p_c_title.'</h3>' : '' );
                    echo ( $p_c_description ? '<div class="text-group">'.$p_c_description.'</div>' : '' );
                echo '</div>';
                if($p_c_image){
                    echo '<div class="our-services-row__image">';
                        echo '<img src="'.$p_c_image.'" alt="'.( $p_c_title ? $p_c_title : '' ).'" />';
                    echo '</div>';
                }
            ?>
            </div>
        </div>
    </section>

    <!-- Our Services Row -->
    <section data-theme="white" id="our-services-row" class="section section--smallp our-services-row-section">
        <div class="container">
            <div class="our-services-row our-services-row--reverse">
            <?php
                $e_s_title = get_field('e_s_title');
                $e_s_description = get_field('e_s_description');
                $e_s_image = get_field('e_s_image');

                echo '<div class="our-services-row__content">';
                    echo ( $e_s_title ? '<h3>'.$e_s_title.'</h3>' : '' );
                    echo ( $e_s_description ? '<div class="text-group">'.$e_s_description.'</div>' : '' );
                echo '</div>';
                if($e_s_image){
                    echo '<div class="our-services-row__image">';
                        echo '<img src="'.$e_s_image.'" alt="'.( $e_s_title ? $e_s_title : '' ).'" />';
                    echo '</div>';
                }
            ?>
            </div>
        </div>
    </section>



    <!-- Our Services Row -->
    <section data-theme="white" id="our-services-row" class="section section--smallp  our-services-row-section our-services-row-section--gray">
        <?php
        echo '<div class="container">';
            $l_t_title = get_field('l_t_title');
            $l_t_description = get_field('l_t_description');
            $l_t_image = get_field('l_t_image');
            $l_t_bottom_subheading = get_field('l_t_bottom_subheading');

            echo '<div class="our-services-row">';
                echo '<div class="our-services-row__content">';
                    echo ( $l_t_title ? '<h3>'.$l_t_title.'</h3>' : '');
                    echo ( $l_t_description ? '<div class="text-group">'.$l_t_description.'</div>' : '');
                echo '</div>';
                if($l_t_image){
                    echo '<div class="our-services-row__image">';
                        echo '<img src="'.$l_t_image.'" alt="'.( $l_t_title ? $l_t_title : '').'" />';
                    echo '</div>';
                }
            echo '</div>';
            
            echo '<div class="our-services-listPanels">';

                if( have_rows('basic_textile_choice') ):
                    echo '<div class="our-services-listPanels__panel our-services-listPanels__panel--2col">';
                        echo '<h6>Basic Textile Choice</h6>';
                        echo '<ul class="nq-list nq-list--small nq-list--2column">';
                            while( have_rows('basic_textile_choice') ) : the_row();
                                $item = get_sub_field('b_t_c_item');
                                echo '<li>'.$item.'</li>';
                            endwhile;
                        echo '</ul>';
                    echo '</div>';
                else :
                endif;


                if( have_rows('electronics_robustness') ):
                    echo '<div class="our-services-listPanels__panel">';
                        echo '<h6>Electronics Robustness</h6>';
                        echo '<ul class="nq-list nq-list--small">';
                            while( have_rows('electronics_robustness') ) : the_row();
                                $item = get_sub_field('e_r_item');
                                echo '<li>'.$item.'</li>';
                            endwhile;
                        echo '</ul>';
                    echo '</div>';
                else :
                endif;

                if( have_rows('chemical_resistance') ):
                    echo '<div class="our-services-listPanels__panel">';
                        echo '<h6>Electronics Robustness</h6>';
                        echo '<ul class="nq-list nq-list--small">';
                            while( have_rows('chemical_resistance') ) : the_row();
                                $item = get_sub_field('c_r_item');
                                echo '<li>'.$item.'</li>';
                            endwhile;
                        echo '</ul>';
                    echo '</div>';
                else :
                endif;

                if( have_rows('biocompatibility_testing') ):
                    echo '<div class="our-services-listPanels__panel">';
                        echo '<h6>Electronics Robustness</h6>';
                        echo '<ul class="nq-list nq-list--small">';
                            while( have_rows('biocompatibility_testing') ) : the_row();
                                $item = get_sub_field('b_c_item');
                                echo '<li>'.$item.'</li>';
                            endwhile;
                        echo '</ul>';
                    echo '</div>';
                else :
                endif;

            echo '</div>';

            
        echo '</div>';
        echo ( $l_t_bottom_subheading  ? '<h6>'.$l_t_bottom_subheading .'</h6>' : '');
        ?>
    </section>







    <!-- about-updates -->
    <section data-theme="white" id="about-updates" class="section about-updates-section">
        <div class="container">
            <div class="about-updates">
                <?php echo get_template_part('template-parts/updates');?>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>
