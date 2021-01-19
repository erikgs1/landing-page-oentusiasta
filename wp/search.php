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
                                <div class="pagination">
                                    <div class=" col-12">
                                        <?php wpex_pagination(); ?>
                                    </div>
                                </div>
                            <?php
                        else:
                        ?>
                            <div class="col-lg-2"></div>
                                <div class="col-12 col-lg-8">
                                    <div class="error-text">
                                        <p> Ops... Parece que nenhum resultado foi encontrado. </p>
                                        <p> Que tal <a href="<?php echo get_home_url(); ?>">voltar para a Home?</a> </p>
                                    </div>
                                </div>
                            <div class="col-lg-2"></div>
                        <?php endif; ?>

                    </div>
                    <!-- End medium Image-->
                
            </div>		
		</main>
	</div>
<?php get_footer(); ?>