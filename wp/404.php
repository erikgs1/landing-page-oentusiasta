<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
						<div class="col-12 col-lg-10">
							<div class="error-404">
								<header>
									<p>Opa! Algo deu errado... Infelizmente, a página que você tentou acessar não existe neste site.</p>
									<p>Que tal <a href="<?php echo get_home_url(); ?>">voltar a home?</a></p>
								</header>
							</div>
						</div>
					<div class="col-lg-1"></div>	
				</div>
			</div>	
		</main>
	</div>
<?php get_footer(); ?>
