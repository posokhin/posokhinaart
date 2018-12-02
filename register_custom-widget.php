<?php

class Random_Posts extends WP_Widget {

    function __construct() {
        parent::__construct(
        // widget ID
        'random_posts',
        // widget name
        __('Случайные Посты', ' random_posts_domain'),
        // widget description
        array( 'description' => __( 'Здесь будут случайные посты', 'random_posts_domain' ), )
        );
        }
    
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        //if title is present
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
        //output
    ?>
        <? $args = array(
            'post_type' => array('thoughts','creativity','brain'),
            'posts_per_page' => 3,
            'category'    => 0,
            'orderby'     => 'rand',
            'paged'       => $page,
            'suppress_filters' => true // подавление работы фильтров изменения SQL запроса);
        );
        ?>
        <?query_posts($args)?>
        <section class="new__story">
        <p class="new__story-title">Другие статьи</p>
            <div class="news__post-wrap">
        <? while(have_posts()):the_post();?>
                <div class="news__post">
                    <a href="<?the_permalink()?>" class="news__post-link">
                        <div class="news__post-img">
                           <? the_post_thumbnail('random_posts')?>
                        </div>
                        <div class="news__post-content">
                            <p class="news__post-title"><?the_title()?></p>
                            <p class="news__post-date"><?echo get_the_date()?></p>
                        </div>
                    </a>
                </div>
        <?endwhile?>
        <?wp_reset_query()?>
        </div>
        </section>
<?php
        }

        public function form( $instance ) {
            if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];
            else
            $title = __( 'Стандартный Заголовок', 'random_posts_domain' );
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <?php
        }

        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            return $instance;
        }
}

function random_posts_widget() {
    register_widget( 'random_posts' );
}
add_action( 'widgets_init', 'random_posts_widget' );



