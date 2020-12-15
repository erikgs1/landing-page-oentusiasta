<?php 

/*
Template Name: Home
*/

?>

<?php get_header(); ?>
    
    <!-- Main Content -->
    
    <main> 
        <div class="container">
            <div class="row no-gutters">

                <!-- Medium Image-->
                    <?php 
                  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $medium = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 10,
                            'paged' => $paged,
                        ));
                        if( $medium->have_posts()):
                            $count = 0;
                            while($medium->have_posts()): $medium->the_post();
                            $count++;
                            if($count > 0 && $count < 4){
                                ?>
                                <div style="background-color: #000; display: block; width: 100%">

                                <?php
                                if($count==1){
                                    ?>
                                    <div style="background-color: red;"> 
                                        <?php get_template_part('template-parts/content', 'medium') ?>
                                    </div>
                                    <?php
                                }if($count==2){
                                    ?>
                                    <div style="background-color: blue;"> 
                                        <?php get_template_part('template-parts/content', 'small') ?>
                                    </div>
                                    <?php
                                }if($count==3){
                                    ?>
                                    <div style="background-color: blue;"> 
                                        <?php get_template_part('template-parts/content', 'small') ?>
                                    </div>
                                    <?php
                                }
                                ?>
                                
                                </div>
                                <?php
                            }
                           
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
        </div>
    </main>
<!-- //Main Content -->
<?php get_footer(); ?>