<!-- footer -->
<footer id="footer" class="footer-section">
    <div class="container">
        <div class="footer">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="34.641" class="footer__logo">
                <path fill="#fbb316"
                      d="M15 34.641l-15-8.66V8.66l8.143-4.7 4.8 2.77a3.042 3.042 0 11-1.285 2.225L8.142 6.926 2.57 10.144V24.5l4.287 2.476V12.619l1.285-.742 12.43 7.177V6.185l-8.143-4.7L15 0l15 8.66v17.321l-8.143 4.7-4.8-2.769a3.042 3.042 0 111.285-2.225l3.512 2.027 5.575-3.214V10.144l-4.286-2.476v14.354l-1.285.742-12.43-7.177v12.869l8.142 4.7L15 34.641zm.315-10.358a1.136 1.136 0 10.983 1.7 1.136 1.136 0 00-.983-1.7zm-.63-16.2a1.136 1.136 0 10.567.152 1.14 1.14 0 00-.567-.152z"/>
            </svg>
            <ul class="footer__menu">
                <?php wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'menu_class' => 'footer__menu',
                    'container'       => false,
                ]); ?>
            </ul>
            <!--socials-->
            <div class="socials">
                <a href="https://www.linkedin.com/company/nanoleq/?originalSubdomain=ch" target="_blank" class="socials__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/ln.svg" alt="ln">
                </a>
                <a href="https://www.youtube.com/channel/UCdm8nVGd8fLCab_d7opqc4A" target="_blank" class="socials__item">
                    <img src="<?php bloginfo('template_url'); ?>/img/yt.svg" alt="yt">
                </a>
            </div>
            <div class="footer__bottom">
                © <?php echo date('Y') ?> - Nanoleq.com - All rights reserved.
            </div>
        </div>
    </div>
</footer>

</body>

<?php global $template; ?>

<?php if (is_front_page()) : ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/nanoleq-HTML5-Shipping.UE4.js"></script>
<?php elseif( basename( $template ) === 'page-contacts.php'
    or  basename( $template ) === 'page-order.php' ): ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/forms.js"></script>
<?php endif; ?>
<?php wp_footer(); ?>
</html>
