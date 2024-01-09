<section>
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="row">
				<div class="small-12 medium-40 large-40 columns"">
					<section class="unit--row-event link--unit-div">
						<section class="unit--featured">
							<figure>
								<img src="<?php the_field('site_image');?>" title="<?php the_field('site_title');?>">
							</figure>
						</section>
						<section class="" style="background-color:<?php the_field('site_colour'); ?>;">
							<div class="unit--square-double">
								<div class="unit--content-double">
									<div class="unit--table-double">
										<div class="unit--table-cell">
											<h2 class="event--title-home"><?php the_field('site_title');?></h2>
											<p class="event--description-home"><?php the_field('site_description');?></p>
											<?php /*
											<p class="event--cta-home"><a href="http://<?php the_field('site_link');?>" title="<?php the_field('site_title');?>"><?php the_field('site_cta');?></a></p>
											*/ ?>
										</div>
									</div>
								</div>
							</div>
						</section>
						<a class="link--unit" href="<?php the_field('site_link');?>" title="<?php the_field('site_title');?>"><?php the_field('site_cta');?></a>
					</section>
				</div>

				<?php
			        $args=array(
			            'post_type' => 'event',
			            'post_status' => 'publish',
			            'order' => 'asc',
			            'posts_per_page' => 3
			        );
			        $my_query = null;
			        $my_query = new WP_Query($args);
			        if( $my_query->have_posts() ) {
			        while ($my_query->have_posts()) : $my_query->the_post(); ?>
			        	<!-- In here... we need an empty div/section + if statement ( or AND taxonomy of visibility) for to show on homepage -->
	            		<?php get_template_part('templates/event-home'); ?> 
			    	<?php endwhile; }
			    	wp_reset_query(); ?>

			</div><!-- end .row -->
		</div>
	</div><!-- end .row -->
</section>