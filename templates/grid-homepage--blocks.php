<!-- Image / Single -->
<?php if(get_row_layout() == 'single_image_link'): ?>
	<div class="small-6 medium-4 large-20 columns">
		<section class="unit--grid-single">
			<figure>
				<a href="<?php the_sub_field('single_link'); ?>"><img class="border shadow" src="<?php the_sub_field('single_image'); ?>" /></a>
			</figure>
		</section>
	</div>
<?php endif; ?>

<!-- Block / Single -->
<?php if(get_row_layout() == 'single_text_bg'): ?>
	<div class="small-6 medium-4 large-20 columns">
		<section class="unit--grid-single square link--unit-div" style="background-color:<?php the_sub_field('single_bgcolor'); ?>;">
			<div class="unit--square-single">
				<div class="unit--content-single">
					<div class="unit--table-single">
						<div class="unit--table-cell">
							<p class="grid--head-home"><?php the_sub_field('single_text_head'); ?></p>
							<h2 class="grid--main-home"><?php the_sub_field('single_text_main'); ?></h2>
							<p class="grid--cta-home"><?php the_sub_field('single_text_cta'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<a class="link--unit" href="<?php the_sub_field('single_link_url'); ?>" title="<?php the_title(); ?>">Link</a>
		</section>
	</div>
<?php endif; ?>

<!-- Block / Double  -->
<?php if(get_row_layout() == 'double_text_bg'): ?>
	<div class="small-12 medium-4 large-40 columns">
		<section class="unit--grid-double square link--unit-div" style="background-color:<?php the_sub_field('double_bgcolor'); ?>;">	
			<div class="unit--square-double">
				<div class="unit--content-double">
					<div class="unit--table-double">
						<div class="unit--table-cell">
							<p class="grid--head-home"><?php the_sub_field('double_text_head'); ?></p>
							<h2 class="grid--main-home"><?php the_sub_field('double_text_main'); ?></h2>
							<p class="grid--cta-home"><?php the_sub_field('double_text_cta'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<a class="link--unit" href="<?php the_sub_field('double_link_url'); ?>" title="<?php the_title(); ?>">Link</a>
		</section>
	</div>
<?php endif; ?>