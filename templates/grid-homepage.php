<section>
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			
			<!-- Row 01 -->
			<div class="row">
				<?php while(has_sub_field("row01_static")): ?>
					<?php get_template_part('templates/grid-homepage--blocks'); ?>
				<?php endwhile; ?>
				<!-- Show only on mobile to balance the blocks? -->
				<section class="show-for-small-only">
					<div class="small-6 columns">
						<?php /*
						<section class="unit--grid-single">
							Special mobile version
						</section>
						*/ ?>
					</div>
				</section>
			</div><!-- end .row -->
			
			<!-- Row 02 -->
			<!-- If odd = true, add spaecial block -->
			<!-- if 5 single, no double: small = 5 single + extra, medium = 3 single, 2 single + extra  -->
			<!-- if 3 single, one double: small = 3 single + extra, medium = 1 double -->
			<!-- if 1 single, two double: small = 1 + extra, medium = 1 single + 1 double, 1 double + extra -->
			<div class="row">
				<?php while(has_sub_field("row02_static")): ?>
					<?php get_template_part('templates/grid-homepage--blocks'); ?>
				<?php endwhile; ?>
				<section class="show-for-small-only">
					<div class="small-6 columns">
						<?php /*
						<section class="unit--grid-single">
							Special mobile version
						</section>
						*/ ?>
					</div>
				</section>
			</div><!-- end .row -->

			<!-- Row 03 -->
			<?php /*
			<div class="row">
				<?php while(has_sub_field("row03_static")): ?>
					<?php get_template_part('templates/grid-homepage--blocks'); ?>
				<?php endwhile; ?>
				<section class="show-for-small-only">
					<div class="small-6 columns">
						<section class="unit--grid-single">
							Special mobile version
						</section>
					</div>
				</section>
			</div><!-- end .row -->
			*/ ?>

			<!-- Row 04 -->
			<?php /*
			<div class="row">
				<?php while(has_sub_field("row04_static")): ?>
					<?php get_template_part('templates/grid-homepage--blocks'); ?>
				<?php endwhile; ?>
				<section class="show-for-small-only">
					<div class="small-6 columns">
						<section class="unit--grid-single">
							Special mobile version
						</section>
					</div>
				</section>
			</div><!-- end .row -->
			*/ ?>
			
		</div>
	</div>
</section>