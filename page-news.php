<?php
/*
Template Name: Page - News
*/
get_header(); ?>

<section class="area--logo">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/images/la-mouissone-logo-general.png" alt="La Mouissone - Olive Grove logo">
		<!-- Social media links here. Or pinned to top. -->
	</figure>
</section>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-10 columns">
			<section class="block--news">
				<div id="masonryContainer">
					<div class="row">
				        <?php
				            $args=array(
				 				'post_type' => 'post',
								'order' => 'DESC',
								'post_status' => 'publish',
								'posts_per_page' => 3,
				            );
				            $my_query = null;
				            $my_query = new WP_Query($args);
				            if( $my_query->have_posts() ) {
				            while ($my_query->have_posts()) : $my_query->the_post(); ?>

			                    <div class="small-12 medium-6 large-4 columns masonry-brick">
			                        <?php get_template_part('templates/unit-news'); ?>
			                    </div>
				           		
				        <?php endwhile; }
				        wp_reset_query();  // Restore global post data stomped by the_post().
				        ?>

				        <?php /*
				        <!-- Instagram Template: to explore -->
	                    <div class="small-12 medium-6 large-4 columns masonry-brick">
	                        <div class="unit--news">
								<div class="row">
									<div class="small-12 medium-12 large-12 columns"><!-- incase we want to take the design to different proportions -->
										<section class="unit--news-container" >
							                <section class="item--news-image">
							                	<a href="https://www.instagram.com/lamouissone/" title="Find La Mouissone on Instagram">Instagram</a>
							                </section>
							            </section>
							        </div>
							    </div>
							</div>
	                    </div>
	                    */ ?>

				        <?php
				            $args=array(
				 				'post_type' => 'post',
								'order' => 'DESC',
								'post_status' => 'publish',
								'offset' => 3,
				            );
				            $my_query = null;
				            $my_query = new WP_Query($args);
				            if( $my_query->have_posts() ) {
				            while ($my_query->have_posts()) : $my_query->the_post(); ?>

			                    <div class="small-12 medium-6 large-4 columns masonry-brick">
			                        <?php get_template_part('templates/unit-news'); ?>
			                    </div>

				        <?php endwhile; }
				        wp_reset_query();  // Restore global post data stomped by the_post().
				        ?>
			        </div><!-- end .row -->
		        </div>

			</section>
		</div>
	</div><!-- end .row -->
</section>

<section class="area--contact">
	<?php get_template_part('contact'); ?>
</section>

<?php get_footer(); ?>