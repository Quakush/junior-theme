<footer class="main-footer">
    <div class="container">

        <?php get_template_part('/includes/block', 'getnews');?>

        <section class="contact-us">
            <h4 class="contact-us__title title-fourth">Связаться с нами:</h4>
            <ul class="contact-us__list">
                <li class="contact-us__item">
                    <a href="mailto:office@jscorp.ru?subject=Feedback">office@jscorp.ru</a>
                </li>
                <li class="contact-us__item  contact-us__item--fb">
                    <a href="#">
                        <svg><use xlink:href="/wp-content/themes/js-corp/images/svg/sprite.svg#fb"></use></svg>
                    </a>
                </li>
                <li class="contact-us__item  contact-us__item--vk">
                    <a href="#">
                        <svg><use xlink:href="/wp-content/themes/js-corp/images/svg/sprite.svg#vk"></use></svg>
                    </a>
                </li>
            </ul>
            <div class="contact-us__download-links">
                <a class="contact-us__download-item  contact-us__download-item--apple" href="https://apps.apple.com/ru/app/sokrat/id1548987952">
                    <img src="/wp-content/themes/js-corp/images/icons/icon-download-apple.svg">
                </a>
                <a class="contact-us__download-item  contact-us__download-item--google" href="#">
                    <img src="/wp-content/themes/js-corp/images/icons/icon-download-google.svg">
                </a>
            </div>
        </section>
        <nav class="footer-menu">
           <!-- <?php wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-menu__list'
                )
            );?> ?-->
        </nav>
        <div class="footer-info">
            <div class="footer-info__logo">
                <a href="/">
                    <svg><use xlink:href="/wp-content/themes/js-corp/images/svg/sprite.svg#logo"></use></svg>
                    <span>corp.</span>
                </a>
            </div>
             <p class="footer-info__company">2019-2021 © Junior Specialists Corporation llc.
             </p>
             <div class="footer-info__polity-box">
                <a href="#" class="footer-info__polity">Политика конфиденциальности</a>
                <span>|</span>
                <a href="#" class="footer-info__polity">Условия использования</a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>
