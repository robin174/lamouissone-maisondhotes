<div class="block--design">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns"><!-- incase we want to take the design to different proportions -->
			<section class="unit-design">
                <section class="unit--design-image">
                    <figure class="shadow">
                        <?php the_post_thumbnail('normal'); ?>
                    </figure>
                </section>
                <section class="unit--design-info">
                	<h2 class="title"><?php the_title(); ?></h2>
                	<span class="date">Custom datex</span>
                     <section class="unit--design-additional">
                        <!-- What would we add here -->
                        <!-- AND Should we test flexbox? -->
                    </section>
                </section>
               
            </section>
        </div>
	</div><!-- end .row -->
</div>