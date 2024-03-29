<?php get_header(); ?>
			
<div id="content">
	<div id="inner-content" class="row">

	    <main id="main" class="large-8 medium-8 columns" role="main">
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'parts/loop', 'archive' ); ?>
			<?php endwhile; ?>	
				<?php joints_page_navi(); ?>
			<?php else : ?>					
				<?php get_template_part( 'parts/content', 'missing' ); ?>
			<?php endif; ?>																		
	    </main>
	    
	    <?php get_sidebar(); ?> 

	</div><!-- end .row -->
</div>

<?php get_footer(); ?>