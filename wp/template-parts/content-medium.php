<article <?php post_class(array('class' => 'featured' )); ?>>   
    <div class="feature-image " >
        <a href="<?php the_permalink() ?>"><img class="img-medium" src="<?php echo get_the_post_thumbnail_url();?>" alt=""></a>
    </div>
    <div class="content-info">
    <p class="tag"><?php the_tags('', ', ' ); ?></p>
    <h2 class="title--medium">
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h2>
    <p class="description"><?php  the_excerpt()  ?></p>        
    </div>
</article>
