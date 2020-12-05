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
                        <p class="tag"><?php the_tags('', ', ' ); ?></p>
                        <h2 class="post--title">
                            <?php the_title(); ?>
                        </h2>
                        <p class="sub--title">
                            <?php dynamic_sidebar( 'post-sub');?>
                        </p>        
                    </div>
                    <div class="socials">
                        <ul>
                            <li>
                                <a href="#" class="m-0">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="date">
                        <div class="post-date">
                            <p> 20 Junho de 2020</p>
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
                                    <h3 class="category">Música</h3>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 carousel">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>