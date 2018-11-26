<?php/** * Template Name: Beli Online */?>

<?php get_header('belionline');?>
			
	<div id="mainSlider">
		<ul id="slideContent" class="owl-carousel hide-on-tablet">
			<li class="relative">
				<a href="<?php echo site_url('asuransi-mandiri-proteksi-penyakit-tropis');?>">
					<div class="slideBG lazyOwl" data-src="<?php bloginfo('template_url');?>/belionline/images/banner-TropicalDisease-desktop.jpg">
						<div class="row">
							<div class="caption">
								<h3 style="color:#929292"></h3>
							</div>
						</div>
					</div>
				</a>
			</li>
			<!--
			<li class="relative">
				<a href="<?php echo site_url('asuransi-mandiri-secure-plan');?>">
					<div class="slideBG lazyOwl" data-src="<?php bloginfo('template_url');?>/belionline/images/banner-SecurePlan-desktop.jpg">
						<div class="row">
							<div class="caption">
								<h3 style="color:#929292"></h3>
							</div>
						</div>
					</div>
				</a>
			</li>
			-->
		</ul>
		
		<ul id="mobile-slide" class="tablet-content owl-carousel">
			<li class="relative">
				<a href="<?php echo site_url('asuransi-mandiri-proteksi-penyakit-tropis');?>">
					<div class="slideBG lazyOwl" data-src="<?php bloginfo('template_url');?>/belionline/images/banner-TropicalDisease-mobile.jpg">
						<div class="row">
							<div class="caption">
								<h3 style="color:#929292"></h3>
							</div>
						</div>
					</div>
				</a>
			</li>	
			<!--
			<li class="relative">
				<a href="<?php echo site_url('asuransi-mandiri-secure-plan');?>">
					<div class="slideBG lazyOwl" data-src="<?php bloginfo('template_url');?>/belionline/images/banner-SecurePlan-mobile.jpg">
						<div class="row">
							<div class="caption">
								<h3 style="color:#929292"></h3>
							</div>
						</div>
					</div>
				</a>
			</li>	
			-->
		</ul>
	</div>

<?php get_footer('belionline');?>						