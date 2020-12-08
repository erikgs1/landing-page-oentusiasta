<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<div class="container">
				<div class="row">
					<div class="col-lg-3"></div>
						<div class="col-12 col-lg-6">
							<div class="error-404">
								<header>
									<h1 class="mb-4">  Page not found</h1>
									<p>Opa! Algo deu errado... Infelizmente, a página que você tentou acessar não existe neste site</p>
								</header>
							</div>
						</div>
					<div class="col-lg-3"></div>	
				</div>
			</div>	
		</main>
	</div>
<?php get_footer(); ?>
