<?php get_header(); ?>
    <main>
        <div class="container">
            <?php 
                $categories = get_the_category(); 
            ?>
            <div class=" <?php  echo $categories[0]->cat_name; ?>">
                <div class="post-thumb">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-10">
                            <div class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url();?>" alt=""> 
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-1 "></div>
                <div class="col-12 col-lg-8 pr-lg-5">
                    <div class="content-info">
                        <p class="tag"><?php the_category( ' ' ); ?></p>
                        <h2 class="post--title">
                            <?php the_title(); ?>
                        </h2>
                        <h3 class="sub--title">
                            <?php dynamic_sidebar( 'post-sub');?>
                        </h3>
                    </div>
                    <?php dynamic_sidebar( 'socials');?>
                    <div class="date">
                        <div class="post-date">
                            <p><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row no-gutters">
                <div class="most-read">
                    <div class="row no-gutters">
                        <div class="col-1"></div>
                        <div class="col-12 col-lg-8">
                            <div class="row no-gutters">
                                <div class="most-read--title">
                                    <h2> Mais lidos</h2>
                                    <h3 class="category"><?php  echo $categories[0]->cat_name; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row no-gutters carousel">
                        <!-- Smalls Images -->
                            <?php
                            $categorie = get_the_category();
                            $category_id = $categorie[0]->cat_ID;
                            $medium = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                                'cat' => $category_id,
                                'order' => 'DESC',
                            ));
                            if( $medium->have_posts()):
                                while($medium->have_posts()): $medium->the_post();
                            ?>
                            
                                <div class="col-12 col-lg-6">
                                    <div class="content-box box-medium">
                                        <?php get_template_part('template-parts/content', 'medium') ?>
                                    </div>
                                
                                </div>
                                
                            <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            ?>
                        <!-- End Small Images -->
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>