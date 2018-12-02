<?php 

show_admin_bar(false);

add_action( 'wp_enqueue_scripts', 'my_scripts' );
add_theme_support( 'menus' );
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


function my_scripts(){
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', "https://use.fontawesome.com/releases/v5.5.0/css/all.css" );
    wp_enqueue_style( 'font-google', "https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Playfair+Display:400,700&amp;subset=cyrillic" );


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri().'/assets/js/jquery-3.3.1.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'),null,true);
	wp_enqueue_script('main');
}

add_action('after_setup_theme', 'top_menu');
    
function top_menu(){
    register_nav_menu( 'top', 'Верхнее меню' );
}

add_action( 'widgets_init', 'right_sidebar' );
function right_sidebar(){
	register_sidebar( array(
		'name'          => 'Правая колонка',
		'id'            => "right",
		'description'   => 'Будет выводится в правой колонке',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
}
//возможность исполнять php внутри виджета
function php_in_widgets($widget_content) {
	if (strpos($widget_content, '<' . '?') !== false) {
		ob_start();
		eval('?' . '>' . $widget_content);
		$widget_content = ob_get_contents();
		ob_end_clean();
	}
	return $widget_content;
}
add_filter('widget_text', 'php_in_widgets', 99);

//Удаление названия сайта в конце заголовка
add_filter('document_title_parts', function( $parts ){
	if( isset($parts['site']) ) unset($parts['site']);
	return $parts;
});


load_template(dirname( __FILE__ ) .'/register_custom-posts.php', false);
load_template(dirname( __FILE__ ) .'/register_custom-widget.php', false);

//удаляем h2 в пагинации

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );

function my_navigation_template( $template, $class ){

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

add_image_size( 'random_posts', 138, 'auto', true );


?>