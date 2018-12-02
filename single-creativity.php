<?the_post()?>
<?get_header('change')?>
<section class="main">
            <div class="container">
                <div class="main__wrap">
                    <section class="content">
                        <section class="content__top">
                            <h1 class="content__title"><?the_title()?></h1>
                            <div class="content__desk">
                                <div class="content__date"><? echo get_the_date()?></div>
                            </div>
                        </section>
                        <section class="content__middle"><p><? the_content ()?></p></section>
                    </section>
                    <?get_sidebar()?>
                </div>
            </div>
        </section>
        <div class="btn_up"><i class="fas fa-angle-up"></i></i></div>
        <?get_footer()?>