<?php get_header(); ?>
			
	<div id="content">
		<div id="inner-content" class="row">
	
			<main id="main" class="large-8 medium-8 columns" role="main">
				<article id="content-not-found">
				
					<header class="article-header">
						<h1><?php _e( '404 - Page Not Found', 'jointswp' ); ?></h1>
					</header> <!-- end article header -->
			
					<section class="entry-content">
						<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
					</section> <!-- end article section -->

				</article>
			</main> <!-- end #main -->

		</div> <!-- end .row -->
	</div> <!-- end #content -->

<?php get_footer(); ?>