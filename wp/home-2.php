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
                <div class="col-12 col-lg-6">
                    <?php 
                    
                        $medium = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                        ));
                        if( $medium->have_posts()):
                            while($medium->have_posts()): $medium->the_post();
                    ?>
                    
                    <div class="content-box box-medium border--left border--right">
                        <?php get_template_part('template-parts/content', 'medium') ?>
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                </div>
                <!-- End medium Image-->

                <!-- Smalls Images -->
                <?php 
                        
                        $small = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => 1,
                        ));
                        if( $small->have_posts()):
                            while($small->have_posts()): $small->the_post();
                    ?>
                    
                    <div class="col-12 col-lg-3">

                        <div class="content-box box-small">
                            <?php get_template_part('template-parts/content', 'small') ?>
                        </div>
                    
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                <!-- End Small Images -->

                <!-- Smalls Images -->
                    <?php 
                        
                        $small = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => 2,
                        ));
                        if( $small->have_posts()):
                            while($small->have_posts()): $small->the_post();
                    ?>
                    
                    <div class="col-12 col-lg-3">

                        <div class="content-box box-small  border--left">
                            <?php get_template_part('template-parts/content', 'small') ?>
                        </div>
                    
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                <!-- End Small Images -->

            </div>

            <div class="row no-gutters">
                <!-- Smalls Images -->
                    <?php 
                        
                        $small = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => 3,
                        ));
                        if( $small->have_posts()):
                            while($small->have_posts()): $small->the_post();
                    ?>
                    
                    <div class="col-12 col-lg-3">

                        <div class="content-box box-small  border--left border--right">
                            <?php get_template_part('template-parts/content', 'small') ?>
                        </div>
                    
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                <!-- End Small Images -->

                <!-- Large Images -->
                    <?php 
                        
                        $large = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => 4,
                        ));
                        if( $large->have_posts()):
                            while($large->have_posts()): $large->the_post();
                    ?>
                    
                    <div class="col-12 col-lg-8">

                        <div class="content-box box-large border--right">   
                            <?php get_template_part('template-parts/content', 'large') ?>
                        </div>
                    
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                <!-- End Large Images -->
            </div>
            
            <div class="row no-gutters">
                <!-- Medium Image-->
                <div class="col-12 col-lg-6">
                    <?php 
                    
                        $medium = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => 5,
                        ));
                        if( $medium->have_posts()):
                            while($medium->have_posts()): $medium->the_post();
                    ?>
                    
                    <div class="content-box box-medium border--left border--right">
                        <?php get_template_part('template-parts/content', 'medium') ?>
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                </div>
                <!-- End medium Image-->
                
                <!-- Medium Image-->
                <div class="col-12 col-lg-6">
                    <?php 
                    
                        $medium = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => 6,
                        ));
                        if( $medium->have_posts()):
                            while($medium->have_posts()): $medium->the_post();
                    ?>
                    
                    <div class="content-box box-medium border--right">
                        <?php get_template_part('template-parts/content', 'medium') ?>
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                </div>
                <!-- End medium Image-->
            </div>

            <div class="row no-gutters">
                <!-- Smalls Images -->
                        <?php 
                            
                            $small = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 1,
                                'offset' => 7,
                            ));
                            if( $small->have_posts()):
                                while($small->have_posts()): $small->the_post();
                        ?>
                        
                        <div class="col-12 col-lg-3">

                            <div class="content-box box-small  border--left">
                                <?php get_template_part('template-parts/content', 'small') ?>
                            </div>
                        
                        </div>
                        <?php
                                endwhile;
                                wp_reset_postdata();
                                    
                            endif;
                        ?>
                <!-- End Small Images -->

                <!-- Medium Image-->
                <div class="col-12 col-lg-6">
                    <?php 
                    
                        $medium = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => 8,
                        ));
                        if( $medium->have_posts()):
                            while($medium->have_posts()): $medium->the_post();
                    ?>
                    
                    <div class="content-box box-medium border--left border--right">
                        <?php get_template_part('template-parts/content', 'medium') ?>
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                </div>
                <!-- End medium Image-->

                <!-- Smalls Images -->
                <?php 
                    
                    $small = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'offset' => 9,
                    ));
                    if( $small->have_posts()):
                        while($small->have_posts()): $small->the_post();
                ?>
                
                <div class="col-12 col-lg-3">

                    <div class="content-box box-small border--right">
                        <?php get_template_part('template-parts/content', 'small') ?>
                    </div>
                
                </div>
                <?php
                        endwhile;
                        wp_reset_postdata();
                                    
                    endif;
                ?>
                <!-- End Small Images -->
            </div>

            
            <div class="row no-gutters">
                <!-- Large Images -->
                <?php 
                        
                        $large = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => 10,
                        ));
                        if( $large->have_posts()):
                            while($large->have_posts()): $large->the_post();
                    ?>
                    
                    <div class="col-12 col-lg-8">

                        <div class="content-box box-large">   
                            <?php get_template_part('template-parts/content', 'large') ?>
                        </div>
                    
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                <!-- End Large Images -->

                <!-- Smalls Images -->
                <?php 
                            
                            $small = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 1,
                                'offset' => 11,
                            ));
                            if( $small->have_posts()):
                                while($small->have_posts()): $small->the_post();
                        ?>
                        
                        <div class="col-12 col-lg-3">

                            <div class="content-box box-small  border--left border--right">
                                <?php get_template_part('template-parts/content', 'small') ?>
                            </div>
                        
                        </div>
                        <?php
                                endwhile;
                                wp_reset_postdata();
                                    
                            endif;
                        ?>
                <!-- End Small Images -->



            </div>

            
            <div class="row no-gutters">
                <!--  Espaço livre -->
                <div class="col-12 col-lg-2">
                    
                </div>
                <!-- End espaço livre -->
                 <!-- Smalls Images -->
                 <?php 
                    
                    $small = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'offset' => 12,
                    ));
                    if( $small->have_posts()):
                        while($small->have_posts()): $small->the_post();
                ?>
                
                <div class="col-12 col-lg-3 item">

                    <div class="content-box box-small  border--left">
                        <?php get_template_part('template-parts/content', 'small') ?>
                    </div>
                
                </div>
                <?php
                        endwhile;
                        wp_reset_postdata();
                                    
                    endif;
                ?>
                <!-- End Small Images -->

                <!-- Medium Image-->
                <div class="col-12 col-lg-6">
                    <?php 
                    
                        $medium = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'offset' => 13,
                        ));
                        if( $medium->have_posts()):
                            while($medium->have_posts()): $medium->the_post();
                    ?>
                    
                    <div class="content-box box-medium border--left border--right">
                        <?php get_template_part('template-parts/content', 'medium') ?>
                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                                    
                        endif;
                    ?>
                </div>
                <!-- End medium Image-->
            </div>
                <?php 
                    if( wp_count_posts()->publish >= 14 ) : ?>
                    <div class="row no-gutters">
                        <!-- Medium Image-->
                            <?php 
                                $medium = new WP_Query( array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                    'offset' => 14,
                                ));
                                if( $medium->have_posts()):
                                    while($medium->have_posts()): $medium->the_post();
                            ?>
                            <div class="col-12 col-lg-6">
                                
                                <div class="content-box box-medium border--left border--right">
                                    <?php get_template_part('template-parts/content', 'medium') ?>
                                </div>
                            </div>
                            <?php
                                endwhile;
                                    wp_reset_postdata();
                                endif;
                            ?>
                            
                        <!-- End medium Image-->
                    </div>
                    <?php 
                    else:
                    endif;
                ?>
        </div>
    </main>
<!-- //Main Content -->
<?php get_footer(); ?>