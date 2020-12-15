<?php get_header(); ?>
	<div class="content-area">
		<main>
            <div class="container">
                <div class="row no-gutters">
                    <!-- Medium Image-->
                    <?php 
                        // Se houver algum post
                        if( have_posts() ):
                            // Enquanto houver posts, mostre-os pra gente
                            while( have_posts() ): the_post();

                        ?>
                        
                            <?php get_template_part('template-parts/content', 'content') ?>
                        <?php 
                            endwhile;

                            ?>
                                
                            <?php
                        else:
                        ?>

                            <p><?php _e( 'There&rsquo;s nothing yet to be displayed...', 'wpcurso' ); ?></p>

                        <?php endif; ?>

                    </div>
                    <!-- End medium Image-->
                
            </div>		
		</main>
	</div>
<?php get_footer(); ?>