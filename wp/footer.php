
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="logo">
                        <h2>O Entusiasta</h2>
                        <h3>Crônicas de um correspondente das esquinas</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-3">
                    <!-- Espaço em branco -->
                </div>

                <!-- Menu Footer / Redes Sociais -->
                <div class="col-lg-6">
                    <div class="footer-menu">
                        <div class="row no-gutters">
                            <div class="col-12  col-lg-8">
                                <div class="row no-gutters border--bottom">
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
                            <div class="col-12 col-lg-4">
                                <span class="title-menu title--socials">Siga</span>
                                <?php dynamic_sidebar( 'socials');?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu Footer / Redes Sociais -->
                <div class="col-lg-3">
                    <!-- Espaço em branco -->
                </div>
            </div>
        </div>
    </footer>
    <!-- // Footer -->
    <script src="<?php bloginfo('template_url');?>/slick/slick.min.js"></script>
    <script type="text/javascript">
        (function($){
            $('.carousel').slick({
            infinite: false,
            arrows: false,
            slidesToShow: 2.2,
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    infinite: false,    
                    arrows: false,
                    slidesToShow: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    infinite: false,
                    arrows: false,
                    slidesToShow: 1
                }
                }
            ]
            });
        })(jQuery);
    </script>
    
    <?php wp_footer(); ?>
</body>
</html>