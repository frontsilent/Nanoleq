<!-- activity-performance -->
<section data-theme="white" id="activity-performance-1" class="section activity-performance-section">
    <div class="container">
        <div class="activity-performance">
            <?php if (get_field('activity_performance_title')) : ?>
                <div class="activity-performance__title el-title el-title--black-orange">
                    <?php echo get_field('activity_performance_title'); ?>
                </div>
            <?php endif; ?>
            <?php if (get_field('activity_performance_subtitle')) : ?>
                <div class="activity-performance__subtitle">
                    <?php echo get_field('activity_performance_subtitle'); ?>
                </div>
            <?php endif; ?>
            <div class="activity-performance__info">
                <!--LEFT ADVANTAGES ICONS-->
                <div class="activity-performance__part activity-performance__part--small">
                    <div class="activity-performance__item activity-performance__item--left">
                        <div class="activity-performance__item-desc">
                            <div class="activity-performance__item-title el-subtitle">
                                <p>ECG</p>
                            </div>
                            <div class="activity-performance__item-text">
                                Specifically engineered electrodes that detect the slightest change of impedance for a clinical-grade electrocardiogram.
                            </div>
                        </div>
                        <div class="activity-performance__item-icon">
                            <img src="img/ecg.svg" alt="image">
                        </div>
                    </div>
                    <div class="activity-performance__item activity-performance__item--left">
                        <div class="activity-performance__item-desc">
                            <div class="activity-performance__item-title el-subtitle">
                                <p>Heart rate</p>
                            </div>
                            <div class="activity-performance__item-text">
                                Most accurate heart rate monitoring based on your electrocardiogram. Reliable even under extreme conditions.
                            </div>
                        </div>
                        <div class="activity-performance__item-icon">
                            <img src="img/heart-rate-b.svg" alt="image">
                        </div>
                    </div>
                </div>
                <!--PRODUCT-->
                <div class="activity-performance__part activity-performance__part--image">
                    <img class="activity-performance__image" src="img/shirt-1.png" alt="product">
                    <img class="activity-performance__circles" src="img/circle-lines.svg" alt="image">
                    <img class="activity-performance__swiss activity-performance__swiss--run" src="img/swiss-transparent.png" alt="swiss">
                    <div class="activity-performance__item activity-performance__item--center">
                        <div class="activity-performance__item-desc">
                            <div class="activity-performance__item-icon">
                                <img src="img/heart-rate-variability.svg" alt="image">
                            </div>
                            <div class="activity-performance__item-title el-subtitle">
                                <p>heart rate variability</p>
                            </div>
                            <div class="activity-performance__item-text">
                                Reconnect to your body by understanding the state of your nervous system.
                            </div>
                        </div>
                    </div>
                </div>
                <!--RIGHT ADVANTAGES ICONS-->
                <div class="activity-performance__part activity-performance__part--small">
                    <div class="activity-performance__item activity-performance__item--right activity-performance__item--tooltip">
                        <div class="activity-performance__item-icon">
                            <img src="img/gps.svg" alt="image">
                        </div>
                        <div class="activity-performance__item-desc">
                            <div class="activity-performance__item-title el-subtitle">
                                <p>GPS</p>
                                <div class="activity-performance__item-tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="info_1_" width="18" height="18" viewBox="0 0 18 18">
                                        <defs>
                                            <style>
                                                #info_1_ .cls-1{fill:#fbb316}
                                            </style>
                                        </defs>
                                        <g id="info_1_2">
                                            <path id="Path_7895" d="M9 18a9 9 0 1 1 9-9 9 9 0 0 1-9 9zM9 2.25A6.75 6.75 0 1 0 15.75 9 6.75 6.75 0 0 0 9 2.25z" class="cls-1"/>
                                            <path id="Path_7896" d="M204.215 121.676a1.125 1.125 0 0 1-1.125-1.125v-3.375a1.125 1.125 0 0 1 2.25 0v3.375a1.125 1.125 0 0 1-1.125 1.125z" class="cls-1" transform="translate(-195.215 -111.551)"/>
                                            <circle id="Ellipse_3137" cx="1.125" cy="1.125" r="1.125" class="cls-1" transform="translate(7.875 11.25)"/>
                                        </g>
                                    </svg>
                                    <p>
                                        If connected to a smartphone or GPS device.
                                    </p>
                                </div>
                            </div>
                            <div class="activity-performance__item-text">
                                Track your records and adventures with precise geopositioning.
                            </div>
                        </div>
                    </div>
                    <div class="activity-performance__item activity-performance__item--right activity-performance__item--tooltip">
                        <div class="activity-performance__item-icon">
                            <img src="img/speed.svg" alt="image">
                        </div>
                        <div class="activity-performance__item-desc">
                            <div class="activity-performance__item-title el-subtitle">
                                <p>Speed</p>
                                <div class="activity-performance__item-tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="info_1_" width="18" height="18" viewBox="0 0 18 18">
                                        <defs>
                                            <style>
                                                #info_1_ .cls-1{fill:#fbb316}
                                            </style>
                                        </defs>
                                        <g id="info_1_2">
                                            <path id="Path_7895" d="M9 18a9 9 0 1 1 9-9 9 9 0 0 1-9 9zM9 2.25A6.75 6.75 0 1 0 15.75 9 6.75 6.75 0 0 0 9 2.25z" class="cls-1"/>
                                            <path id="Path_7896" d="M204.215 121.676a1.125 1.125 0 0 1-1.125-1.125v-3.375a1.125 1.125 0 0 1 2.25 0v3.375a1.125 1.125 0 0 1-1.125 1.125z" class="cls-1" transform="translate(-195.215 -111.551)"/>
                                            <circle id="Ellipse_3137" cx="1.125" cy="1.125" r="1.125" class="cls-1" transform="translate(7.875 11.25)"/>
                                        </g>
                                    </svg>
                                    <p>
                                        If connected to a smartphone or GPS device.
                                    </p>
                                </div>
                            </div>
                            <div class="activity-performance__item-text">
                                Train effectively by knowing your speed, distance, duration and more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>