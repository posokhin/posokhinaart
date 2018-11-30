<?php
//регестрирую посты мысли
add_action( 'init', 'register_post_type' );

register_post_type('thoughts', array(
    'label'  => null,
    'labels' => array(
        'name'               => 'Мысли', // основное название для типа записи
        'singular_name'      => 'Статью о мысли', // название для одной записи этого типа
        'add_new'            => 'Добавить статью', // для добавления новой записи
        'add_new_item'       => 'Добавление Мысли', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование Мысль', // для редактирования типа записи
        'new_item'           => 'Новая Мысль', // текст новой записи
        'view_item'          => 'Смотреть Мысли', // для просмотра записи этого типа.
        'search_items'       => 'Искать Мысль', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Мысли', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => null, // зависит от public
    'exclude_from_search' => null, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => null,
    'menu_icon'           => null, 
    'hierarchical'        => false,
    'supports'            => array('title','editor','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => array('slug'=>'mysli'),
    'query_var'           => true,
) );

register_post_type('creativity', array(
    'label'  => null,
    'labels' => array(
        'name'               => 'Креативность', // основное название для типа записи
        'singular_name'      => 'Статью о креативности', // название для одной записи этого типа
        'add_new'            => 'Добавить статью', // для добавления новой записи
        'add_new_item'       => 'Добавление Креативность', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование Креативности', // для редактирования типа записи
        'new_item'           => 'Новая Креативность', // текст новой записи
        'view_item'          => 'Смотреть Креативности', // для просмотра записи этого типа.
        'search_items'       => 'Искать Креативность', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Креативность', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => null, // зависит от public
    'exclude_from_search' => null, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => null,
    'menu_icon'           => null, 
    'hierarchical'        => false,
    'supports'            => array('title','editor','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => array('slug'=>'kreativnost'),
    'query_var'           => true,
) );

register_post_type('brain', array(
    'label'  => null,
    'labels' => array(
        'name'               => 'Наш мозг', // основное название для типа записи
        'singular_name'      => 'Статью о мозге', // название для одной записи этого типа
        'add_new'            => 'Добавить статью', // для добавления новой записи
        'add_new_item'       => 'Добавление статьи', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование статьи', // для редактирования типа записи
        'new_item'           => 'Новая статья', // текст новой записи
        'view_item'          => 'Смотреть статью', // для просмотра записи этого типа.
        'search_items'       => 'Искать статью', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Наш мозг', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => null, // зависит от public
    'exclude_from_search' => null, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => null,
    'menu_icon'           => null, 
    'hierarchical'        => false,
    'supports'            => array('title','editor','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => array('slug'=>'nash-mozg'),
    'query_var'           => true,
) );

?>