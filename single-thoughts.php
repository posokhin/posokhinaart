<?the_post()?>
<?get_header()?>
<section class="main">
            <div class="container">
                <div class="main__wrap">
                    <section class="content">
                        <section class="content__top">
                            <h1 class="content__title"><?the_title()?></h1>
                            <div class="content__desk">
                                <div class="content__date"><? echo get_the_date()?></div>
                                <div class="content__dot"></div>
                                <div class="content__post-type">лайфхак</div>
                            </div>
                        </section>
                        <section class="content__middle"><p><? the_content ()?></p></section>
                    </section>
                    <?get_sidebar()?>
                </div>
            </div>
        </section>
        <?get_footer()?>