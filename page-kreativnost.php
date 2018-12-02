<?php
if ( is_front_page()){
	get_header();
}
else {
	get_header('change');
}
?>
        <section class="main">
            <div class="container">
                <div class="main__wrap">
                <section class="posts">
                        <?$page = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
                        <? $args = array(
                            'post_type' => 'creativity',
                            'numberposts' => 5,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'paged'       => $page,
                            'suppress_filters' => true // подавление работы фильтров изменения SQL запроса);
                        );
                        ?>
                        <?query_posts($args)?>
                        <?php while(have_posts()):the_post();?>
                        <div class="post">
                            <div class="post__img" style="background:url(<?php the_post_thumbnail_url ();?>) center no-repeat;background-size:contain;" style="background-size: cover;">
                            </div>
                            <div class="post__content">
                                <h2 class="post__title"><?php the_title()?></h2>
                                <p class="post__date"><?php echo get_the_date()?></p>
                                <div class="post__text"><?php the_excerpt()?></div>
                                <div class="btn_more"><a href="<?php the_permalink();?>">читать больше</a></div>
                            </div>
                        </div>
                        <?endwhile?>
                        <?wp_reset_postdata()?>
                        
                        <? the_posts_pagination(
                            array(
                                'show_all'     => true, // показаны все страницы участвующие в пагинации
                                'end_size'     => 1,     // количество страниц на концах
                                'mid_size'     => 1,     // количество страниц вокруг текущей
                                'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                                'prev_text'    => __('Предидущая'),
                                'next_text'    => __('Следующая'),
                                'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                                'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                                'screen_reader_text' => __( 'Posts navigation' ),
                            )
                        ) ?>
                    </section>
                    <div class="btn_up"><i class="fas fa-angle-up"></i></i></div>
                    <?php get_sidebar()?>
                </div>
            </div>
        </section>
    </div>
   <?php get_footer()?>