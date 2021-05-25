<?php
/*
Template Name: Contacts
*/
get_header();

?>

<div class="page-body">
    <!-- contacts -->
    <section id="contacts" data-theme="dark" class="section contacts-section section--fixHeightIntro">
        <div class="intro__img">
            <img src="<?php echo get_field('contacts_background_image'); ?>" alt="image">
        </div>
        <div class="container">
            <div class="contacts">
                <div class="intro__title">
                    <em>Contact</em> Us
                </div>
                <div class="contacts__items">
                    <div class="contacts__item contacts__item--address">
                        <div class="contacts__item-icon">
                            <img src="<?php bloginfo('template_url'); ?>/img/gps.svg" alt="pin">
                        </div>
                        <div class="contacts__item-text">
                            <?php echo get_field('contacts_address'); ?>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__item-icon">
                            <img src="<?php bloginfo('template_url'); ?>/img/call.svg" alt="pin">
                        </div>
                        <a href="tel:<?php echo preg_replace('/[^a-zA-Z0-9_\.]/', '',  get_field('contacts_phone')); ?>" class="contacts__item-text"><?php echo get_field('contacts_phone'); ?></a>
                    </div>
                    <div class="contacts__item contacts__item--email">
                        <div class="contacts__item-icon">
                            <img src="<?php bloginfo('template_url'); ?>/img/email-yellow.svg" alt="">
                        </div>
                        <a href="mailto:<?php echo get_field('contacts_email'); ?>" class="contacts__item-text">
                            <?php echo get_field('contacts_email'); ?>
                        </a>
                    </div>
                </div>
                <form id="contacts-form" method="post" action="<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php" class="contacts__form">

                    <input type="hidden" name="action" value="contacts">
                    <input type="hidden" name="project_name" value="Nanoleq">
                    <input type="hidden" name="form_subject" value="Request from contacts page">
                    <input type="hidden" name="admin_email" value="<?php echo get_field('contacts_email','option'); ?>">

                    <div class="contacts__form-title el-title el-title--black-orange">
                        <?php echo get_field('contacts_form_title'); ?>
                    </div>
                    <?php if (get_field('contacts_subtitle')) : ?>
                        <div class="contacts__text">
                            <?php echo get_field('contacts_subtitle'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="form__items-title">
                        <label class="form-item form-item--radio input-wrap">
                            <input type="radio" value="Work at Nanoleq" name="contact_form_type" class="form-item__input" checked>
                            <p>Work at Nanoleq</p>
                        </label>
                        <label class="form-item form-item--radio input-wrap">
                            <input type="radio" value="Invest in Nanoleq" name="contact_form_type" class="form-item__input">
                            <p>Invest in Nanoleq</p>
                        </label>
                        <label class="form-item form-item--radio input-wrap">
                            <input type="radio" id="contact-order-nanoleq" value="Order From Nanoleq" name="contact_form_type" class="form-item__input">
                            <p>Order From Nanoleq</p>
                        </label>
                    </div>
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
                    <div class="form__btn">
                        <button type="submit" class="btn btn--small btn--orange-black">
                            <span>send message</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.311" height="11.791" viewBox="0 0 19.311 11.791">
                                <g fill="none" stroke="#000" stroke-linecap="round" stroke-width="1.5px">
                                    <path fill-rule="evenodd" stroke-linejoin="round" d="M0 0h6.838v6.838" transform="translate(6.25 1.061) rotate(45 3.583 8.649)"/>
                                    <path d="M16.5 0L0 0" transform="translate(6.25 1.061) translate(-5.5 4.771)"/>
                                </g>
                            </svg>
                        </button>
                    </div>
                </form>
                <?php if (get_field('contacts_map')) : ?>
                    <div class="map">
                        <?php echo get_field('contacts_map'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>
