<?php if(get_row_layout() == 'single_image_link'): ?>
	<div class="small-6 medium-20 large-20 columns">
		<section>
			<a href="<?php the_sub_field('single_link'); ?>"><img class="border shadow" src="<?php the_sub_field('single_image'); ?>" /></a>
		</section>
	</div>
<?php endif; ?>
<?php if(get_row_layout() == 'single_text_bg'): ?>
	<div class="small-6 medium-20 large-20 columns">
		<section style="background-color:<?php the_sub_field('single_bgcolor'); ?>;">
			<h2><?php the_sub_field('single_text_head'); ?></h2>
			<p><?php the_sub_field('single_text_main'); ?></p>
			<p><?php the_sub_field('single_text_cta'); ?></p>
		</section>
	</div>
	<!-- template -->
<?php endif; ?>
<?php if(get_row_layout() == 'double_text_bg'): ?>
	<div class="small-6 medium-40 large-40 columns">
		<section>
			Z
		</section>
	</div>
	<!-- template -->
<?php endif; ?>