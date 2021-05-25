<!-- intro -->
<section data-theme="dark" id="intro" class="section intro-section">
    <?php if (get_field('intro_img')) : ?>
        <div class="intro__img">
            <img src="<?php echo get_field('intro_img'); ?>" alt="image">
        </div>
    <?php endif; ?>
    <?php if (get_field('intro_video')) : ?>
        <video class="intro-video" id="intro-video" src="<?php echo get_field('intro_video'); ?>" playsinline autoplay loop></video>
    <?php endif; ?>
    <img src="<?php bloginfo('template_url'); ?>/img/scroll-btn.svg" alt="scroll" class="intro__scroll">
    <?php if (get_field('intro_video')) : ?>
        <div class="intro-video__buttons">
            <svg class="intro-video__unmute active" xmlns="http://www.w3.org/2000/svg" width="23.57" height="22"
                 viewBox="0 0 23.57 22">
                <defs>
                    <style>
                        .video-1 {
                            fill: #f9f9f9
                        }
                    </style>
                </defs>
                <g id="Group_1280" transform="translate(-1817 -1014)">
                    <g id="Group_1248" transform="translate(1817 1014)">
                        <g id="Group_1247">
                            <path id="Path_7941"
                                  d="M13.7 16.068a.783.783 0 0 0-.831.094l-7.646 6.115H1.571A1.574 1.574 0 0 0 0 23.848v6.285A1.574 1.574 0 0 0 1.571 31.7h3.652l7.642 6.114a.786.786 0 0 0 1.278-.614V16.777a.788.788 0 0 0-.443-.709zM4.714 30.133H1.571v-6.285h3.143zm7.857 5.435L6.285 30.54v-7.1l6.285-5.028z"
                                  class="video-1" transform="translate(0 -15.99)"/>
                        </g>
                    </g>
                    <g id="Group_1250" transform="translate(1833.782 1019.217)">
                        <g id="Group_1249">
                            <path id="Path_7942"
                                  d="M343.1 122.456a.786.786 0 1 0-1.1 1.117 6.275 6.275 0 0 1 0 8.878.785.785 0 1 0 1.1 1.116 7.843 7.843 0 0 0 0-11.111z"
                                  class="video-1" transform="translate(-341.76 -122.229)"/>
                        </g>
                    </g>
                    <g id="Group_1252" transform="translate(1835.998 1017.002)">
                        <g id="Group_1251">
                            <path id="Path_7943"
                                  d="M388.226 77.364a.786.786 0 1 0-1.106 1.116 9.382 9.382 0 0 1 0 13.309.786.786 0 1 0 1.106 1.116 10.952 10.952 0 0 0 0-15.541z"
                                  class="video-1" transform="translate(-386.888 -77.137)"/>
                        </g>
                    </g>
                </g>
            </svg>
            <svg class="intro-video__mute" xmlns="http://www.w3.org/2000/svg" width="27.436" height="22"
                 viewBox="0 0 27.436 22">
                <defs>
                    <style>
                        .video-2 {
                            fill: #fff;
                            stroke: #fff;
                            stroke-linecap: round;
                            stroke-width: 1.5px
                        }
                    </style>
                </defs>
                <g id="Group_1279" transform="translate(-1859.929 -1014)">
                    <g id="Group_1278" transform="translate(1859.929 1014)">
                        <g id="Group_1247">
                            <path id="Path_7941" fill="#f9f9f9"
                                  d="M13.7 16.068a.783.783 0 0 0-.831.094l-7.646 6.115H1.571A1.574 1.574 0 0 0 0 23.848v6.285A1.574 1.574 0 0 0 1.571 31.7h3.652l7.642 6.114a.786.786 0 0 0 1.278-.614V16.777a.788.788 0 0 0-.443-.709zM4.714 30.133H1.571v-6.285h3.143zm7.857 5.435L6.285 30.54v-7.1l6.285-5.028z"
                                  transform="translate(0 -15.99)"/>
                        </g>
                    </g>
                    <g id="Group_1253" transform="translate(1878.466 1021.082)">
                        <path id="Line_233" d="M0 0L7.838 7.838" class="video-2"/>
                        <path id="Line_234" d="M7.838 0L0 7.838" class="video-2"/>
                    </g>
                </g>
            </svg>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="intro">
            <div class="intro__title"><?php echo get_field('intro_title'); ?></div>
            <?php if (get_field('intro_text')) : ?>
                <div class="intro__text el-subtitle">
                    <?php echo get_field('intro_text'); ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('intro_bottom')) : ?>
                <div class="intro__bottom text-group">
                    <p><?php echo get_field('intro_bottom'); ?></p>
                </div>
            <?php endif; ?>
            <?php if (get_field('intro_btn')) : ?>
                <?php
                $link = get_field('intro_btn');
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="intro__btn btn btn--orange" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <span><?php echo esc_html( $link_title ); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                        <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5px">
                            <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                            <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                        </g>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>