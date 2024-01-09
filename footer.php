					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<!-- Add fig quote from old homepage -->
								<section class="block--contact">
									<section class="unit--contact">
										<h6 class="footer--title"><i class="far fa-envelope"></i>&nbsp;Contact us</h6>
										<p class="footer--details">To book a stay at the guest house, please contact:<br>
										Lady Lockett - 00 33 698 88 64 10 (English)<br>
										<a href="mailto:maggielockett@lamouissone.com" title="Email Lady Lockett">maggielockett@lamouissone.com</a><br>
									</section>
									<section class="unit--social">
										<h6 class="footer--title"><i class="fab fa-instagram"></i>&nbsp;Instagram</h6>
										<p class="footer--details">Keep up-to-date with La Mouissone, follow us on <a href="https://www.instagram.com/lamouissone/" title="La Mouissone on Instagram">Instagram</a></p>
									</section>
									<section class="unit--tourist">
										<h6 class="footer--title"><i class="far fa-compass"></i>&nbsp;Tourist Office</h6>
										<p class="footer--details">For more information on the local area, please visit:<br>
										<a href="http://www.grassetourisme.fr" title="Grasse Tourist Office" target="_blank">Grasse Tourist Office</a></p>
									</section>
									<section class="unit--coopyright">
										<p class="source-org copyright"><i>79 Chemin de St. Christophe, 06130 Grasse</i><br>
										&copy; <?php echo date('Y'); ?>. All rights reserved. <?php bloginfo('name'); ?>.<br>
										Illustrations by <a href="https://www.billsandersonart.com" title="Bill Sanderson Art">Bill Sanderson</a></p>
									</section>
								</section>
								<section class="block--weather">
								</section>
							</div>
						</div><!-- end #inner-footer -->
					</footer>
				</div><!-- end .main-content -->
			</div><!-- end .off-canvas-wrapper-inner -->
		</div><!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>

		<script>
		    $(window).load(function(){
		        $('#masonryContainer').masonry({  
		        itemSelector: '.masonry-brick'
		        });
		    });
		</script>
	</body>
</html>