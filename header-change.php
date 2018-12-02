<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head()?>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__wrap">
                <div class="progressbar"></div>
                <div class="header__top"><a href="<?php echo get_home_url()?>">posokhina evgeniya</a></div>
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
                            <div class="header__burger"><i class="fas fa-bars burger"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__alpaco-min"><img src="<?php echo get_template_directory_uri()?>/assets/img/header/alpaco-min.png" alt=""></div>
            <div class="header__alpaco-big"><img src="<?php echo get_template_directory_uri()?>/assets/img/header/alpaco-big.png" alt=""></div>
        </header>
        