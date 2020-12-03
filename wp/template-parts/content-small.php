<article <?php post_class(array('class' => 'featured' )); ?>>   
    <div class="feature-image " >
        <img class="img-small" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
    </div>
    <div class="content-info">
    <p class="tag"><?php the_tags('', ', ' ); ?></p>
    <h2 class="title--small">
        <?php the_title(); ?>
    </h2>
    <p class="description"><?php  the_excerpt()  ?></p>        
    </div>
</article>
