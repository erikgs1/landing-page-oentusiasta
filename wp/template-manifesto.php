<?php 

/*
Template Name: Manifesto
*/

?>

<?php get_header(); ?>
    <main>
        <div class="container-about">
            <div class="row no-gutters">
                <div class="col-12 order-3 order-lg-1">
                    <div class="title title--manifest">
                        <h2><?php the_title() ?></h2>
                   </div>
                </div>
                <div class="col-12 order-2 order-lg-2">
                    <div class="col-lg-7">
                        <?php dynamic_sidebar( 'manifest-sub');?>
                    </div>
                </div>
                <div class="col-12 col-lg-5 order-4 order-lg-3">
                    <div class="col-lg-12">
                        <div class="description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-4 d-flex align-items-end">
                    <div class="col-12">
                        <div class="image">
                            <img class="image-manifest" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>