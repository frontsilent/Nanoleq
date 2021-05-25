<?php
/*
Template Name: Order
*/
get_header();
?>

<div class="page-body page-body--white">

    <!-- order -->
    <section id="order" data-theme="dark" class="section order-section section--fixHeightIntro">
        <div class="intro__img">
            <img src="<?php bloginfo('template_url'); ?>/img/contacts-intro.jpg" alt="image">
        </div>
        <div class="container">
            <div class="order">
                <div class="intro__title">
                    <em>Order</em> Now
                </div>
                <form id="order-form" method="post" action="<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php" class="order__info">

                    <?php
                    $prod_starter = $_GET['prod_kit'];
                    ?>

                    <input type="hidden" name="action" value="order">
                    <input type="hidden" name="project_name" value="Nanoleq">
                    <input type="hidden" name="form_subject" value="Request from order page">
                    <input type="hidden" name="admin_email" value="">
                    <input type="hidden" name="request_type" value="">

                    <div class="order__title">Select components for your smart textile application <em>*</em></div>
                    <div class="order__top">
                        <div class="order-top__element">
                            <!--Electroskin-->
                            <div class="order-top-item-wrap order-product-wrap input-wrap">
                                <input type="checkbox" id="prod-1" name="product-1" value="ElectroSkin"  class="order-product-input order-top-item__input" checked>
                                <div class="order-top-item">
                                    <label for="prod-1">
                                        <div class="order-checkbox">
                                            <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                        </div>
                                        <div class="order-top-item__img">
                                            <img src="<?php bloginfo('template_url'); ?>/img/order-1.png" alt="order">
                                        </div>
                                        <div class="order-title">ElectroSkin™</div>
                                    </label>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__title">Quantity</div>
                                        <div class="order-quantity__items">
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-1-quantity" value="50-299" class="form-item__input order-quantity__item__input" checked>
                                                <span>50-299</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-1-quantity" value="300-999" class="form-item__input order-quantity__item__input">
                                                <span>300-999</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-1-quantity" value="1000-4999" class="form-item__input order-quantity__item__input">
                                                <span>1000-4999</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-1-quantity" value=">5000" class="form-item__input order-quantity__item__input">
                                                <span>> 5000</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap">
                                                <input type="text" name="product-1-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--ElectroSkin Starter Kit-->
                            <label class="order-top-item-wrap input-wrap">
                                <input type="checkbox" name="product-1-kit" value="ElectroSkin starter kit" class="order-top-item__input">
                                <div class="order-top-item">
                                    <div class="order-checkbox">
                                        <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                    </div>
                                    <div class="order-title">ElectroSkin Starter Kit</div>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__items">
                                            <div class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap">
                                                <input type="text" name="product-1-kit-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="order-top__element">
                            <!--PhantomTape-->
                            <div class="order-top-item-wrap order-product-wrap input-wrap">
                                <input type="checkbox" id="prod-2" name="product-2" value="PhantomTape" class="order-top-item__input order-product-input">
                                <div class="order-top-item">
                                    <label for="prod-2">
                                        <div class="order-checkbox">
                                            <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                        </div>
                                        <div class="order-top-item__img">
                                            <img src="<?php bloginfo('template_url'); ?>/img/order-2.png" alt="order">
                                        </div>
                                        <div class="order-title">PhantomTape™</div>
                                    </label>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__title">Quantity (in metres)</div>
                                        <div class="order-quantity__items">
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-2-quantity" value="50-299" class="form-item__input order-quantity__item__input">
                                                <span>50-299</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-2-quantity" value="300-999" class="form-item__input order-quantity__item__input">
                                                <span>300-999</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-2-quantity" value="1000-4999" class="form-item__input order-quantity__item__input">
                                                <span>1000-4999</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-2-quantity" value=">5000" class="form-item__input order-quantity__item__input">
                                                <span>> 5000</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap">
                                                <input type="text" name="product-2-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--PhantomTape Starter Kit-->
                            <label class="order-top-item-wrap input-wrap">
                                <input type="checkbox" name="product-2-kit" value="PhantomTape Starter Kit" class="order-top-item__input">
                                <div class="order-top-item">
                                    <div class="order-checkbox">
                                        <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                    </div>
                                    <div class="order-title">PhantomTape Starter Kit</div>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__items">
                                            <div class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap">
                                                <input type="text" name="product-2-kit-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="order-top__element">
                            <!--Phantomlink-->
                            <div class="order-top-item-wrap order-product-wrap input-wrap">
                                <input type="checkbox" id="prod-3" name="product-3" value="Phantomlink" class="order-top-item__input order-product-input">
                                <div class="order-top-item">
                                    <label for="prod-3">
                                        <div class="order-checkbox">
                                            <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                        </div>
                                        <div class="order-top-item__img">
                                            <img src="<?php bloginfo('template_url'); ?>/img/order-3.png" alt="order">
                                        </div>
                                        <div class="order-title">Phantomlink</div>
                                    </label>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__title">Quantity</div>
                                        <div class="order-quantity__items">
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-3-quantity" value="50-299" class="form-item__input order-quantity__item__input">
                                                <span>50-299</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-3-quantity" value="300-999" class="form-item__input order-quantity__item__input">
                                                <span>300-999</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-3-quantity" value="1000-4999" class="form-item__input order-quantity__item__input">
                                                <span>1000-4999</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--big form-item--radio input-wrap">
                                                <input type="radio" name="product-3-quantity" value=">5000" class="form-item__input order-quantity__item__input">
                                                <span>> 5000</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap">
                                                <input type="text" name="product-3-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Combined Starter kit-->
                            <label class="order-top-item-wrap input-wrap">
                                <input type="checkbox" name="product-3-kit" value="Combined Starter kit" class="order-top-item__input">
                                <div class="order-top-item">
                                    <div class="order-checkbox">
                                        <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                    </div>
                                    <div class="order-title">Combined Starter kit</div>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__items">
                                            <div class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap">
                                                <input type="text" name="product-3-kit-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="order__title">Select your Vital Shirts <em>*</em></div>
                    <div class="order__bottom">
                        <?php
                        $activity = $_GET['act'];
                        ?>
                        <!--running-->
                        <div class="order-bottom__element">
                            <div class="order-bottom-item-wrap order-product-wrap input-wrap">
                                <input type="checkbox" id="prod-4" name="shirt-1" value="Running" class="order-bottom-item__input order-product-input" checked>
                                <div class="order-bottom-item">
                                    <label for="prod-4">
                                        <div class="order-checkbox">
                                            <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                        </div>
                                        <div class="order-bottom-item__img">
                                            <img src="<?php bloginfo('template_url'); ?>/img/order-4.png" alt="order">
                                        </div>
                                        <div class="order-title order-title--upper">running</div>
                                    </label>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__title">Quantity</div>
                                        <div class="order-quantity__items order-quantity__items--small">
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-1-quantity" value="5-49" class="form-item__input order-quantity__item__input" checked>
                                                <span>5-49</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-1-quantity" value="50-499" class="form-item__input order-quantity__item__input">
                                                <span>50-499</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-1-quantity" value="500" class="form-item__input order-quantity__item__input">
                                                <span>>500</span>
                                            </label>
                                            <div class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap small">
                                                <input type="text" name="shirt-1-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--cycling-->
                        <div class="order-bottom__element">
                            <div class="order-bottom-item-wrap order-product-wrap input-wrap">
                                <input type="checkbox" id="prod-5" name="shirt-2" value="Cycling" class="order-bottom-item__input order-product-input">
                                <div class="order-bottom-item">
                                    <label for="prod-5">
                                        <div class="order-checkbox">
                                            <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                        </div>
                                        <div class="order-bottom-item__img">
                                            <img src="<?php bloginfo('template_url'); ?>/img/order-5.png" alt="order">
                                        </div>
                                        <div class="order-title order-title--upper">cycling</div>
                                    </label>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__title">Quantity</div>
                                        <div class="order-quantity__items order-quantity__items--small">
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-2-quantity" value="5-49" class="form-item__input order-quantity__item__input">
                                                <span>5-49</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-2-quantity" value="50-499" class="form-item__input order-quantity__item__input">
                                                <span>50-499</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-2-quantity" value="500" class="form-item__input order-quantity__item__input">
                                                <span>>500</span>
                                            </label>
                                            <div class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap small">
                                                <input type="text" name="shirt-2-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--skiing-->
                        <div class="order-bottom__element">
                            <div class="order-bottom-item-wrap order-product-wrap input-wrap">
                                <input type="checkbox" id="prod-6" name="shirt-3" value="Skiing" class="order-bottom-item__input order-product-input">
                                <div class="order-bottom-item">
                                    <label for="prod-6">
                                        <div class="order-checkbox">
                                            <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                        </div>
                                        <div class="order-bottom-item__img">
                                            <img src="<?php bloginfo('template_url'); ?>/img/order-6.png" alt="order">
                                        </div>
                                        <div class="order-title order-title--upper">skiing </div>
                                    </label>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__title">Quantity</div>
                                        <div class="order-quantity__items order-quantity__items--small">
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-3-quantity" value="5-49" class="form-item__input order-quantity__item__input">
                                                <span>5-49</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-3-quantity" value="50-499" class="form-item__input order-quantity__item__input">
                                                <span>50-499</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-3-quantity" value="500" class="form-item__input order-quantity__item__input">
                                                <span>>500</span>
                                            </label>
                                            <div class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap small">
                                                <input type="text" name="shirt-3-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--GYM-->
                        <div class="order-bottom__element">
                            <div class="order-bottom-item-wrap order-product-wrap input-wrap">
                                <input type="checkbox" id="prod-7" name="shirt-4" value="GYM" class="order-bottom-item__input order-product-input">
                                <div class="order-bottom-item">
                                    <label for="prod-7">
                                        <div class="order-checkbox">
                                            <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                        </div>
                                        <div class="order-bottom-item__img">
                                            <img src="<?php bloginfo('template_url'); ?>/img/order-7.png" alt="order">
                                        </div>
                                        <div class="order-title order-title--upper">GYM</div>
                                    </label>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__title">Quantity</div>
                                        <div class="order-quantity__items order-quantity__items--small">
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-4-quantity" value="5-49" class="form-item__input order-quantity__item__input">
                                                <span>5-49</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-4-quantity" value="50-499" class="form-item__input order-quantity__item__input">
                                                <span>50-499</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-4-quantity" value="500" class="form-item__input order-quantity__item__input">
                                                <span>>500</span>
                                            </label>
                                            <div class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap small">
                                                <input type="text" name="shirt-4-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--vitalbra-->
                        <div class="order-bottom__element">
                            <div class="order-bottom-item-wrap order-product-wrap input-wrap">
                                <input type="checkbox" id="prod-8" name="shirt-5" value="Vitalbra" class="order-bottom-item__input order-product-input">
                                <div class="order-bottom-item">
                                    <label for="prod-8">
                                        <div class="order-checkbox">
                                            <img src="<?php bloginfo('template_url'); ?>/img/checked-icon-w.svg" alt="checked">
                                        </div>
                                        <div class="order-bottom-item__img">
                                            <span>coming soon</span>
                                        </div>
                                        <div class="order-title order-title--upper">vitalbra</div>
                                    </label>
                                    <!--quantity-->
                                    <div class="order-quantity">
                                        <div class="order-quantity__title">Quantity</div>
                                        <div class="order-quantity__items order-quantity__items--small">
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-5-quantity" value="5-49" class="form-item__input order-quantity__item__input">
                                                <span>5-49</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-5-quantity" value="50-499" class="form-item__input order-quantity__item__input">
                                                <span>50-499</span>
                                            </label>
                                            <label class="order-quantity__item order-quantity__item--small form-item--radio input-wrap">
                                                <input type="radio" name="shirt-5-quantity" value="500" class="form-item__input order-quantity__item__input">
                                                <span>>500</span>
                                            </label>
                                            <div class="order-quantity__item order-quantity__item order-quantity__item--full input-wrap small">
                                                <input type="text" name="shirt-5-quantity-self" class="form-item__input" placeholder="Enter specific quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order__title order__title--small-margin">Specify Your Application</div>
                    <div class="form-item input-wrap">
                        <input type="text" name="your_app" class="form-item__input">
                    </div>

                    <div class="order__title order__title--small-margin">Your Profile <em>*</em></div>

                    <div class="order-profile__items">
                        <label class="order-profile__item-wrap form-item--radio input-wrap">
                            <input type="radio" name="profile" value="I Represent a Brand or Business" class="form-item__input order-profile__item__input" checked>
                            <div class="order-profile__item">
                                <img src="<?php bloginfo('template_url'); ?>/img/checked.svg" alt="checked">
                                <span>I Represent a Brand or Business</span>
                            </div>
                        </label>
                        <label class="order-profile__item-wrap form-item--radio input-wrap">
                            <input type="radio" name="profile" value="I am a Private Sports and Health Enthusiast" class="form-item__input order-profile__item__input">
                            <div class="order-profile__item">
                                <img src="<?php bloginfo('template_url'); ?>/img/checked.svg" alt="checked">
                                <span>I am a Private Sports and Health Enthusiast</span>
                            </div>
                        </label>
                    </div>
                    <div class="order__title order__title--small-margin">Personal Information <em>*</em></div>
                    <div class="form__items">
                        <div class="form__part form__part--left">
                            <div class="form-item input-wrap">
                                <label>Full Name <em>*</em></label>
                                <input type="text" name="full_name" class="form-item__input" required>
                            </div>
                            <div class="form-item input-wrap">
                                <label>Phone</label>
                                <input type="tel" name="phone" class="form-item__input">
                            </div>
                            <div class="form-item input-wrap">
                                <label>Email <em>*</em></label>
                                <input type="email" name="email" class="form-item__input" required>
                            </div>
                            <div class="form-item input-wrap">
                                <label>Company <em>*</em></label>
                                <input type="text" name="company" class="form-item__input" required>
                            </div>
                        </div>
                        <div class="form__part form__part--right">
                            <div class="form-item form-item--textarea input-wrap">
                                <label>Message <em>*</em></label>
                                <textarea rows="5" name="message" class="form-item__input"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="order__buttons">
<!--                        <button class="btn order-btn-big product-submit-btn" data-email="sales@nanoleq.com" data-request-type="order" type="submit">order Now</button>-->
<!--                        <button class="btn btn--orange product-submit-btn" data-email="info@nanoleq.com" data-request-type="request" type="submit">-->
                        <button class="btn order-btn-big product-submit-btn" data-email="rudartem12@gmail.com" data-request-type="order" type="submit">order Now</button>
                        <button class="btn btn--orange product-submit-btn" data-email="rudartem12@gmail.com" data-request-type="request" type="submit">
                            <span>request a quote</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                <g fill="none" stroke="#000" stroke-linecap="round" stroke-width="1.5px">
                                    <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                    <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                </g>
                            </svg>
                        </button>
                </form>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();
?>
