<div class="small-2 medium-20 large-20 columns">
	<section class="unit--row-event link--unit-div">
		<section class="unit--featured">
			<figure>
				<a href="#" title=""><?php the_post_thumbnail('large'); ?></a>
			</figure>
		</section>
		<section class="square" style="background-color:<?php the_field('event_colour'); ?>;">
			<div class="unit--square-single">
				<div class="unit--content-single">
					<div class="unit--table-single">
						<div class="unit--table-cell">
							<p class="event--date-home"><?php echo date("M", strtotime(get_field('event_date_start'))); ?></p>
							<h2 class="event--title-home"><?php the_title();?></h2>
							<?php /*
							<p class="event--cta-home"><a href="#">Find out more</a></p>
							*/ ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<a class="link--unit" href="<?php the_field('event_link'); ?>" target="_blank" title="<?php the_title(); ?>">Link</a>
	</section>
</div>