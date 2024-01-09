<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>
			
<div id="content">
	<div id="inner-content" class="row">

	    <main id="main" class="large-12 medium-12 columns" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'parts/loop', 'page' ); ?>
			<?php endwhile; endif; ?>							
		</main>
	    
	</div><!-- end .row -->
</div>

<?php get_footer(); ?>