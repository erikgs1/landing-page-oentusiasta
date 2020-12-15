<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
    <?php 
        $tags = get_the_tags(); 
    ?>
    <header  class="<?php echo $tags[0]->name; ?>">
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
                <input  type="checkbox">
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
                                <div class="subjects">
                                     <?php 
                                        wp_nav_menu( 
                                            array( 
                                                'theme_location' => 'my_main_menu_left' 
                                            ) 
                                        ); 
                                    ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <span class="title-menu">Conheça</span>
                                <div class="about">
                                    <?php 
                                        wp_nav_menu( 
                                            array( 
                                                'theme_location' => 'my_main_menu_right' 
                                            ) 
                                        ); 
                                    ?>
                                </div>
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