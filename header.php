<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posokhina Art</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Playfair+Display:400,700&amp;subset=cyrillic"
        rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__wrap">
                <div class="header__top">posokhina evgeniya</div>
                <div class="header__middle">
                    <div class="container">
                        <div class="header__middle-wrap">
                            <nav class="header__menu">
                                    <?php wp_nav_menu( array(
                                        'theme_location'  => 'top',
                                        'menu'            => 'top', 
                                        'container'       => 'null', 
                                        'container_class' => '', 
                                        'container_id'    => '',
                                        'menu_class'      => 'menu', 
                                        'menu_id'         => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth'           => 0,
                                        'walker'          => '',
                                    ) );
                                    ?>
                            </nav>
                            <div class="header__contancts">
                                <div class="header__social">
                                    <a href="">
                                        <i class="fab fa-instagram instag"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-vk"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="container">
                        <div class="header__bottom-wrap">
                            <p>welcome <br> to my world</p>
                            <div class="header__bottom-img"><img src="<?php echo get_template_directory_uri()?>/assets/img/header/bottom-logo.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__alpaco-min"><img src="<?php echo get_template_directory_uri()?>/assets/img/header/alpaco-min.png" alt=""></div>
            <div class="header__alpaco-big"><img src="<?php echo get_template_directory_uri()?>/assets/img/header/alpaco-big.png" alt=""></div>
            <?php wp_head()?>
        </header>