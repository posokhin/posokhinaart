<footer class="footer">
        <div class="container">
            <div class="footer__wrap">
                <section class="footer__author">© Posokhina Evgeniya,<?php echo get_the_date('Y');?></section>
                <section class="footer__logo"><a href=""><img src="<?php echo get_template_directory_uri()?>/assets/img/header/logo.png" alt=""></a></section>
                <section class="footer__social">
                    <div class="footer__links">
                        <a href="">
                            <i class="fab fa-instagram instag"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-vk"></i>
                        </a>
                    </div>
                    <p>Добро пожаловать</p>
                </section>
            </div>
        </div>
    </footer>
    <?php wp_footer()?>
</body>

</html>