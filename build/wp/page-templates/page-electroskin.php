<?php
/*
Template Name: ElectroSkin
*/
get_header();
?>
<!-- page body -->
<div class="page-body">
    <?php the_content(); ?>

    <!-- Product -->
    <?php get_template_part( 'template-parts/products', 'product' ); ?>

    <!-- Our Range -->
    <section data-theme="dark" id="our-range" class="section our-range-section">
        <div class="container">
            <?php 
                $heading = get_field('or_title');
                $read_more = get_field('read_more_link');
                $product_description = get_field('p_description');
                echo ( $product_description ? '<h6 class="text-white">'.$product_description.'</h6>' : '');
                echo ( $heading ? '<div class="el-title el-title--white">'.$heading.'</div>' : '');
                if( have_rows('ranges') ):
                    echo '<div class="our-range">';
                        while( have_rows('ranges') ) : the_row();
                            $range_title = get_sub_field('title');
                            $range_description = get_sub_field('description');
                            $range_link = get_sub_field('link');
                            echo '<a href="'.( $range_link ? $range_link : '').'" class="our-range__panel">';
                                echo '<svg width="40" height="32" viewBox="0 0 40 32">
                                    <g>
                                        <g>
                                            <path class="icon-fill" d="M34.4 42.667L14 63.267l-8.4-8.4-5.6 5.6 14 14.2 26-26.2z" transform="translate(0 -42.667) translate(0 42.667) translate(0 -42.667)"/>
                                        </g>
                                    </g>
                                </svg>';
                                echo (  $range_title ? '<h3 class="black-orange">'.$range_title.'</h3>' : '');
                                echo ( $range_description ? '<div class="text-group">'.$range_description.'</div>' : '');
                                echo '<span class="our-range__panel__arrow">
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
                    if($read_more):
                        echo '<a href="'.$read_more.'" class="btn btn--orange">
                            <span>READ MORE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5px">
                                    <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                    <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                </g>
                            </svg>
                        </a>';
                    endif;
                else :
                endif;
            ?>
        </div>
    </section>
    <!-- Why Electroskin -->
    <section data-theme="white" id="why-electroskin" class="section section--smallp why-electroskin-section">
        <div class="container">
            <div class="why-electroskin">
                <?php
                    echo '<div class="why-electroskin__content">';
                        $first_title = get_field('first_title');
                        $first_description = get_field('first_description');
                        $second_title = get_field('second_title');
                        $second_description = get_field('second_description');
                        $third_title = get_field('third_title');
                        $third_description = get_field('third_description');
                        $fourth_title = get_field('fourth_title');
                        $fourth_description = get_field('fourth_description');
                        echo ( $first_title ? '<h3 class="black-orange">'.$first_title.'</h3>' : '');
                        echo ( $first_description ? '<div class="text-group">'.$first_description.'</div>' : '');
                        echo ( $second_title ? '<h3 class="black-orange">'.$second_title.'</h3>' : '');
                        echo ( $second_description ? '<div class="text-group">'.$second_description.'</div>' : '');
                        echo ( $third_title ? '<h3 class="black-orange">'.$third_title.'</h3>' : '');
                        echo ( $third_description ? '<div class="text-group">'.$third_description.'</div>' : '');
                        echo ( $fourth_title ? '<h3 class="black-orange">'.$fourth_title.'</h3>' : '');
                        echo ( $fourth_description ? '<div class="text-group">'.$fourth_description.'</div>' : '');
                    echo '</div>';
                    echo '<div class="why-electroskin__image">';
                        $why_elec_image = get_field('w_e_image');
                        $brochure_link = get_field('brochure_link');
                        $quote_link = get_field('quote_link');
                        echo ( $why_elec_image ? '<img src="'.$why_elec_image.'" alt="Why Electroskin" />' : '');
                        echo '<div class="why-electroskin__controls">';
                            if($brochure_link):
                                echo '<a href="'.$brochure_link.'" class="btn btn--orange-black">
                                    <span>Download brochure</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="16.047" viewBox="0 0 11 16.047">
                                        <g id="_08_Cursor" transform="translate(-6.389 -5.23)" stroke-width="1.75px">
                                            <path id="Path_7841" d="M237.025 111.018a1.025 1.025 0 0 1-1.025-1.025v-9.528a1.025 1.025 0 0 1 2.05 0v9.528a1.025 1.025 0 0 1-1.025 1.025z" class="cls-1" transform="translate(-225.136 -94.21)"/>
                                            <path id="Path_7842" d="M154.181 224.262a1.721 1.721 0 0 1-1.225-.507l-3.975-3.974a1.025 1.025 0 1 1 1.45-1.45l3.75 3.75 3.75-3.75a1.025 1.025 0 0 1 1.45 1.45l-3.975 3.974a1.721 1.721 0 0 1-1.225.507z" class="cls-1" transform="translate(-142.292 -206.723)"/>
                                            <path id="Path_7843" d="M158.655 374.61h-8.95a1.025 1.025 0 1 1 0-2.05h8.95a1.025 1.025 0 0 1 0 2.05z" class="cls-1" transform="translate(-142.291 -353.333)"/>
                                        </g>
                                    </svg>
                                </a>';
                            endif;
                            if($quote_link):
                                echo '<a href="'.$quote_link.'" class="btn btn--orange-black">
                                        <span>request a quote</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                            <g fill="none" stroke="#0f0f0f" stroke-linecap="round" stroke-width="1.5px">
                                                <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                                <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                            </g>
                                        </svg>
                                    </a>';
                            endif;
                        echo '</div>';
                    echo '</div>';
                ?>
            </div>
        </div>
    </section>
    <!-- Combined Kit -->
    <?php get_template_part( 'template-parts/products', 'starter-kit' ); ?>
</div>
<?php
get_footer();
?>
