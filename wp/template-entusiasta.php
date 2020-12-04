<?php 

/*
Template Name: Entusiasta
*/

?>
<?php get_header(); ?>
   <main>
       <div class="container-about">
           <div class="row no-gutters">
                <div class="col-12 col-lg-8 order-lg-2">
                    <div class="image">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-4 order-lg-1">
                   <div class="title">
                        <h2><?php the_title(); ?></h2>
                   </div>
                   <div class="discription">
                        <?php the_content(); ?>
                   </div>
               </div>
               
           </div>
       </div>
   </main>
<?php get_footer(); ?>