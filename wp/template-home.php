<?php 

/*
Template Name: Home
*/

?>

<?php get_header(); ?>
    
    <!-- Main Content -->
    
    <main> 
        <div class="container">
                <!-- Medium Image-->
                    <?php 
                  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $query_Posts = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 10,
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
                                            <p style="background-color: red">
                                                
                                           <?php echo $count ?> </p>
                                            <div class="content-box box-medium border--left border--right">
                                                <?php get_template_part('template-parts/content', 'medium') ?>
                                            </div>
                                        </div>

                                    <?php
                                    }if($count==2){
                                    ?>
                                        <div class="col-12 col-lg-3"><p style="background-color: red">
                                                
                                                <?php echo $count ?> </p>
                                            <div class="content-box box-small">
                                                <?php get_template_part('template-parts/content', 'small') ?>
                                            </div>
                                        </div>
                                    <?php
                                    }if($count==3){
                                    ?>
                                        
                                        <div class="col-12 col-lg-3"><p style="background-color: red">
                                                
                                                <?php echo $count ?> </p>
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
                                                <?php echo $count ?> </p>
                                                <div class="content-box box-small  border--left border--right">
                                                    <?php get_template_part('template-parts/content', 'small') ?>
                                                </div>
                                            </div>

                                    <?php
                                    }if($count==5){
                                    ?>
                                            <div class="col-12 col-lg-8">
                                                <?php echo $count ?> </p>
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
                                                <?php echo $count ?> </p>
                                                <div class="content-box box-medium border--left border--right">
                                                    <?php get_template_part('template-parts/content', 'medium') ?>
                                                </div>
                                            </div>

                                    <?php
                                    }if($count==7){
                                    ?>
                                            <div class="col-12 col-lg-6">
                                                <?php echo $count ?> </p>
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
                                                <?php echo $count ?> </p>
                                                <div class="content-box box-small  border--left">
                                                    <?php get_template_part('template-parts/content', 'small') ?>
                                                </div>
                                            </div>

                                    <?php
                                    }if($count==9){
                                    ?>
                                        <div class="col-12 col-lg-6">
                                            <?php echo $count ?> </p>
                                            <div class="content-box box-medium border--left border--right">
                                                <?php get_template_part('template-parts/content', 'medium') ?>
                                            </div>
                                        </div>
                                    <?php
                                    }if($count==10){
                                    ?>
                                            <div class="col-12 col-lg-3">
                                                <?php echo $count ?> </p>
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
                    ?>
                    
                    
                    
                    <?php
                  
                            endwhile;
                            
                            wpex_pagination();
		
                            wp_reset_postdata();
                            

                        endif;
                    ?> 
                </div>
                <!-- End medium Image-->
                
        </div>
    </main>
<!-- //Main Content -->
<?php get_footer(); ?>