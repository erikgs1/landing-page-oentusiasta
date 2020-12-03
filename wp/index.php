<?php get_header(); ?>
    
    <!-- Main Content -->
    
    <main> 
        <div class="container">
            <div class="row no-gutters">
                <!-- Medium Image-->
                <div class="col-12 col-lg-6">
                    <?php 
                        $medium = new WP_Query('post_type=post&posts_per_page=1');
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
                <!-- Fim medium Image-->

                <!-- Smalls Images -->
                <div class="col-12 col-lg-6">
                    <div class="row no-gutters">
                            <?php 
                                $small = new WP_Query('post_type=post&posts_per_page=2');
                                if( $small->have_posts()):
                                    while($small->have_posts()): $small->the_post();
                            ?>
                            
                            <div class="col-12 col-lg-6">

                                <div class="content-box box-small">
                                    <?php get_template_part('template-parts/content', 'small') ?>
                                </div>
                            
                            </div>
                            <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            ?>
                    </div>
                </div>

                    <!-- Fim Small Images -->
            </div>
        </div>
    </main>

<!-- //Main Content -->
<?php get_footer(); ?>