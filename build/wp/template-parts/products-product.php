<?php
    $pageName = get_post_field( 'post_name', get_post() );
    $product_image = get_field('p_image');
    $product_title = get_field('p_title');
    $product_subtitle = get_field('p_subtitle');
    echo '<section data-theme="white" id="electroskin" class="section electroskin-section">';
        echo '<div class="electroskin electroskin--'.$pageName.'">';
            echo ($product_title ? '<div class="el-title el-title--black-orange">'.$product_title.'</div>' : '');
            echo ($product_subtitle ? '<div class="el-subtitle text-center">'.$product_subtitle.'</div>' : '');
            
            echo '<div class="electroskin__product">';
                if( have_rows('p_left_features') ):
                    echo '<div class="electroskin__feature  electroskin__feature--left">';
                        echo '<ul>';
                            while( have_rows('p_left_features') ) : the_row();
                            $feature_left_icon = get_sub_field('feature_left_icon');
                            $feature_left_title = get_sub_field('feature_left_title');
                            $feature_left_description = get_sub_field('feature_left_description');
                            echo '<li>';
                                echo ( $feature_left_icon ? '<img src="'.$feature_left_icon.'" alt="'.( $feature_left_title ? $feature_left_title : '').'" />' : '');
                                if($pageName == 'electroskin'){
                                    echo ( $feature_left_title ? '<div class="el-subtitle">'.$feature_left_title.'</div>' : '');
                                }else{
                                    echo ( $feature_left_title ? '<h6>'.$feature_left_title.'</h6>' : '');
                                   
                                }
                                echo ( $feature_left_description ? '<div class="text-group">'.$feature_left_description.'</div>' : '');
                                
                            echo '</li>';
                            endwhile;
                        echo '</ul>';
                    echo '</div>';
                else :
                endif;

                if($product_image){
                    echo '<div class="electroskin__image">';
                    if($pageName !== 'phantomtape'){
                        echo '<div class="electroskin__image__grayCircle"></div>';
                        echo '<div class="electroskin__image__orangeCircle"></div>';
                    } 
                    echo '<img src="'.$product_image.'" alt="'.($product_title ? $product_title : '').'" />';
                    echo '</div>';
                }
                if( have_rows('p_right_features') ):
                    echo '<div class="electroskin__feature">';
                        echo '<ul>';
                            while( have_rows('p_right_features') ) : the_row();
                            $feature_right_icon = get_sub_field('feature_right_icon');
                            $feature_right_title = get_sub_field('feature_right_title');
                            $feature_right_description = get_sub_field('feature_right_description');
                            echo '<li>';
                                echo ( $feature_right_icon ? '<img src="'.$feature_right_icon.'" alt="'.( $feature_right_title ? $feature_right_title : '').'" />' : '');
                                if($pageName == 'electroskin'){
                                    echo ( $feature_right_title ? '<div class="el-subtitle">'.$feature_right_title.'</div>' : '');
                                }else{
                                    echo ( $feature_right_title ? '<h6>'.$feature_right_title.'</h6>' : '');
                                }
                                echo ( $feature_right_description ? '<div class="text-group">'.$feature_right_description.'</div>' : '');
                            echo '</li>';
                            endwhile;
                        echo '</ul>';
                    echo '</div>';
                else :
                endif;
            echo '</div>';
        echo '</div>';
        /* PhantomTape and PhantomLink Special Section */
        if($pageName == 'phantomtape' || $pageName == 'phantomlink'){
            $banner_heading = get_field('banner_heading');
            $banner_link = get_field('banner_link');
            $download_brochure_link = get_field('download_brochure_link');
            $request_quote_link = get_field('request_quote_link');
            $banner_description = get_field('banner_description');
            echo '<div class="container">';
                echo '<div class="phantomlink-banner">';
                    echo ( $banner_heading ? '<h6 class="text-white">'. $banner_heading.'</h6>' : '');
                    if($banner_link){
                        echo '<a href="" class="btn btn--orange btn--small">
                            <span>SHOW DETAILS</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5px">
                                    <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                    <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                </g>
                            </svg>
                        </a>';
                    }
                echo '</div>';
                echo '<div class="phantomlink-description">';
                    echo ( $banner_description ? '<div class="text-group">'.$banner_description.'</div>' : '');
                    if($download_brochure_link){
                       echo '<a href="'.$download_brochure_link.'" class="btn btn--orange-black btn--small">
                            <span>Download brochure</span>
                            <svg width="11" height="16.047" viewBox="0 0 11 16.047">
                                <g id="_08_Cursor" transform="translate(-6.389 -5.23)">
                                    <path id="Path_7841" d="M237.025 111.018a1.025 1.025 0 0 1-1.025-1.025v-9.528a1.025 1.025 0 0 1 2.05 0v9.528a1.025 1.025 0 0 1-1.025 1.025z" fill="#0f0f0f" transform="translate(-225.136 -94.21)"/>
                                    <path id="Path_7842" d="M154.181 224.262a1.721 1.721 0 0 1-1.225-.507l-3.975-3.974a1.025 1.025 0 1 1 1.45-1.45l3.75 3.75 3.75-3.75a1.025 1.025 0 0 1 1.45 1.45l-3.975 3.974a1.721 1.721 0 0 1-1.225.507z" fill="#0f0f0f" transform="translate(-142.292 -206.723)"/>
                                    <path id="Path_7843" d="M158.655 374.61h-8.95a1.025 1.025 0 1 1 0-2.05h8.95a1.025 1.025 0 0 1 0 2.05z" fill="#0f0f0f" transform="translate(-142.291 -353.333)"/>
                                </g>
                            </svg>
                        </a>'; 
                    }
                    if($request_quote_link){
                        echo '<a href="'.$request_quote_link.'" class="btn btn--orange-black btn--small">
                            <span>request a quote</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                <g fill="none" stroke="#0f0f0f" stroke-linecap="round" stroke-width="1.5px">
                                    <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                    <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                </g>
                            </svg>
                        </a>';
                    }
                echo '</div>';
            echo '</div>';
        }
    echo '</section>';
?>
        