
<?php get_header(); ?>
    
    <!-- Main Content -->
    
    <main> 
        <div class="container">
                <!-- Medium Image-->
                    <?php 
                  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $query_Posts = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 14,
                            'paged' => $paged,
                        ));
                        if( $query_Posts->have_posts()):
                            $count = 0;
                            while($query_Posts->have_posts()): $query_Posts->the_post();
                            $count++;
                            // Iniciando linha 1 
                            if($count > 0 && $count < 4){
                                ?>

                                    <?php
                                    if($count==1){
                                    ?>

                                        <div class="row no-gutters">
                                        <div class="col-12 col-lg-6">
                                            <div class="content-box box-medium border--left border--right">
                                                <?php get_template_part('template-parts/content', 'medium') ?>
                                            </div>
                                        </div>

                                    <?php
                                    }if($count==2){
                                    ?>
                                        <div class="col-12 col-lg-3"><p style="background-color: red">
                                                
                                            <div class="content-box box-small">
                                                <?php get_template_part('template-parts/content', 'small') ?>
                                            </div>
                                        </div>
                                    <?php
                                    }if($count==3){
                                    ?>
                                        
                                        <div class="col-12 col-lg-3"><p style="background-color: red">
                                                
                                            <div class="content-box box-small  border--left">
                                                <?php get_template_part('template-parts/content', 'small') ?>
                                            </div>
                                        </div>
                                        
                                        </div>
                                        <?php
                                    }
                                    ?>
                                
                                <?php
                            } 
                            // Finalizando linha 1 


                            // Iniciando linha 2
                            if($count > 3 && $count < 6){
                                ?>

                                    <?php
                                    if($count==4){
                                    ?>

                                        <div class="row no-gutters">
                                            <div class="col-12 col-lg-3">
                                                <div class="content-box box-small  border--left border--right">
                                                    <?php get_template_part('template-parts/content', 'small') ?>
                                                </div>
                                            </div>

                                    <?php
                                    }if($count==5){
                                    ?>
                                            <div class="col-12 col-lg-8">
                                                <div class="content-box box-large border--right">   
                                                    <?php get_template_part('template-parts/content', 'large') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                
                                <?php
                            } 
                            // Finalizando linha 2

                            // Iniciando linha 3
                            if($count > 5 && $count < 8){
                                ?>

                                    <?php
                                    if($count==6){
                                    ?>

                                        <div class="row no-gutters">
                                            <div class="col-12 col-lg-6">
                                                <div class="content-box box-medium border--left border--right">
                                                    <?php get_template_part('template-parts/content', 'medium') ?>
                                                </div>
                                            </div>

                                    <?php
                                    }if($count==7){
                                    ?>
                                            <div class="col-12 col-lg-6">
                                                <div class="content-box box-medium border--right">
                                                    <?php get_template_part('template-parts/content', 'medium') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                
                                <?php
                            } 
                            // Finalizando linha 3

                            // Iniciando linha 4
                            if($count > 7 && $count < 11){
                                ?>

                                    <?php
                                    if($count==8){
                                    ?>

                                        <div class="row no-gutters">
                                            <div class="col-12 col-lg-3">
                                                <div class="content-box box-small  border--left">
                                                    <?php get_template_part('template-parts/content', 'small') ?>
                                                </div>
                                            </div>

                                    <?php
                                    }if($count==9){
                                    ?>
                                        <div class="col-12 col-lg-6">
                                            <div class="content-box box-medium border--left border--right">
                                                <?php get_template_part('template-parts/content', 'medium') ?>
                                            </div>
                                        </div>
                                    <?php
                                    }if($count==10){
                                    ?>
                                            <div class="col-12 col-lg-3">
                                                <div class="content-box box-small border--right">
                                                    <?php get_template_part('template-parts/content', 'small') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                
                                <?php
                            } 
                            // Finalizando linha 4
                            
                            // Iniciando linha 5
                            if($count > 10 && $count < 13){
                                ?>

                                    <?php
                                    if($count==11){
                                    ?>

                                        <div class="row no-gutters">
                                            <div class="col-12 col-lg-8">
                                                <div class="content-box box-large">   
                                                    <?php get_template_part('template-parts/content', 'large') ?>
                                                </div>
                                                </div>

                                    
                                    <?php
                                    }if($count==12){
                                    ?>
                                           <div class="col-12 col-lg-3">
                                                <div class="content-box box-small  border--left border--right">
                                                    <?php get_template_part('template-parts/content', 'small') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                
                                <?php
                            } 
                            // Finalizando linha 5

                            // Iniciando linha 6
                            if($count > 12 && $count < 15){
                                ?>

                                    <?php
                                    if($count==13){
                                    ?>

                                        <div class="row no-gutters">
                                            <!--  Espaço livre -->
                                            <div class="col-12 col-lg-2"></div>
                                            <!-- End espaço livre -->
                                            <div class="col-12 col-lg-3 item">
                                                <div class="content-box box-small  border--left">
                                                    <?php get_template_part('template-parts/content', 'small') ?>
                                                </div>
                                            </div>

                                    
                                    <?php
                                    }if($count==14){
                                    ?>
                                        <div class="col-12 col-lg-6">
                                                <div class="content-box box-medium border--left border--right">
                                                    <?php get_template_part('template-parts/content', 'medium') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                
                                <?php
                            } 
                            // Finalizando linha 6
                            ?>
                    <?php
                            endwhile;
                            ?>
                            <div class="row">
                                <div class="pagination">
                                    <div class="d-none d-lg-block col-2"></div>
                                    <div class=" col-12 col-lg-8">
                                        <?php wpex_pagination(); ?>
                                    </div>
                                    <div class="d-none d-lg-block col-2"></div>
                                </div>
                            </div>
                            <?php
                            wp_reset_postdata();
                            
                        else:
                            ?>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    Oops... Parece que algo deu errado... Que tal, <a href="<?php echo get_home_url(); ?>">Voltar para a Home?</a>
                                </div>
                                <div class="col-2"></div>
                            </div>

                            <?php
                        endif;
                    ?> 
                </div>
                <!-- End medium Image-->
                
        </div>
    </main>
<!-- //Main Content -->
<?php get_footer(); ?>