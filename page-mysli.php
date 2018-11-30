<?php get_header()?>
        <section class="main">
            <div class="container">
                <div class="main__wrap">
                    <section class="posts">
                        <? $post_thoughts = get_posts(array   
                        (
                            'post_type' => 'thoughts',
                            'numberposts' => 5,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'suppress_filters' => true // подавление работы фильтров изменения SQL запроса);
                        ));
                        ?>
                        <? foreach($post_thoughts as $post):?>
                        <? setup_postdata($post);?>
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
                        <? endforeach?>
                        <? wp_reset_postdata(); ?>
                        <section class="pag">
                            <a href="" class="pag__prev"><i class="fas fa-angle-left row-left"></i>ТУДА</a>
                            <a href="" class="pag__next">СЮДА<i class="fas fa-angle-left row-right"></i></a>
                        </section>
                    </section>
                    <?php get_sidebar()?>
                </div>
            </div>
        </section>
    </div>
   <?php get_footer()?>