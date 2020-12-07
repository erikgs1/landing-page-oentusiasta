<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Entusiasta</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
    <?php 
        $categories = get_the_category(); 
    ?>
    <header  class="<?php  echo $categories[0]->cat_name; ?>">
        <div class="post-thumb">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="thumb">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt=""> 
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
        </div>
        <div class="buttons-menu">
            <div class="close-open">
                <span class="line line--one"></span>
                <span class="line line--two"></span>
            </div>
            <div class="search">
            </div>
        </div>
        <div class="main-menu menu-close">
            <div class="container">
                <div class="row d-block d-lg-flex no-gutters ">
                    <div class="col-6 pt-5 pt-lg-0" ></div>
                    <div class="col-6">
                        <div class="row d-block d-lg-flex no-gutters">
                            <div class="col-6">
                                <span class="title-menu">Assuntos</span>
                                <ul class="subjects">
                                    <li>
                                        <a href="#"> Arquitetura </a>
                                    </li>
                                    <li>
                                        <a href="#">Cinema</a>
                                    </li>
                                    <li>
                                        <a href="#">Gastronomia</a>
                                    </li>
                                    <li>
                                        <a href="#">Música</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <span class="title-menu">Conheça</span>
                                <ul class="about">
                                    <li>
                                        <a href="#">Quem faz?</a>
                                    </li>
                                    <li>
                                        <a href="#">Manifesto</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>   
        <div class="logo-container">
            <div class="container">
                <div class="logo">
                    <h2>O ENTUSIASTA</H2>
                </div> 
            </div>
        </div>
    </header>
    
    <!-- // Top -->