<?php/** * Template Name: Homepage */?>
<?php get_header();?>

<style>
	.fancybox-opened{
		z-index: 999999999;
	}
	#solusiWidget .large-block-grid-4>li{width:33%;}
	@media only screen and (max-width: 800px) { #solusiWidget ul li { width: 100% !important; } }
</style>
<span class="cp-display--none"><h1>AXA Mandiri</h1></span>


	<?php get_template_part('inc/slideshow'); ?>
	<div id="solusi_main" class="bg-greylight">
		<div class="row solusiContainer">
			<div id="solusiWidget">
				<div class="header2judulsolusikami m-bottom-30"><?php /* _e("<!--:en-->Our Solution<!--:--><!--:id-->Solusi Kami<!--:-->"); */
												_e("Solusi Kami");?></div>
				<ul class="clearfix large-block-grid-4 medium-block-grid-2 small-block-grid-1">
					<?php if(get_field('personal_page', 'options')): ?>
						<?php while(has_sub_field('personal_page', 'options')): ?>
							<?php if(get_sub_field('solusi_kami', 'options')): ?>
								<?php while(has_sub_field('solusi_kami', 'options')): ?>
									<?php if(get_sub_field('text_image')=='KESEHATAN'): ?>
										<?php $label_ga='Solusi kesehatan personal button'; ?>
									<?php elseif(get_sub_field('text_image')=='PROTEKSI'): ?>
										<?php $label_ga='Solusi proteksi personal button'; ?>
									<?php elseif(get_sub_field('text_image')=='UMUM'): ?>
										<?php $label_ga='Solusi umum personal button'; ?>
									<?php else: ?>
										<?php $label_ga=''; ?>
									<?php endif; ?>

									<?php if ($label_ga!=''): ?>
										<li>
											<a href="<?php the_sub_field('url'); ?>">
												<div id="solusi-kesehatan" class="img_background lazy" data-src="<?php the_sub_field('image'); ?>">
													<div class="title header2home1"><?php the_sub_field('text_image'); ?></div>
													<span class="icon-solusi-index" style="background-image:url(<?php the_sub_field('icon'); ?>)"></span>
													<span class="bg-cover-right-solusiindex"></span>
												</div>
											</a>

											<p class="show-for-large-only"><?php the_sub_field('excerpt'); ?></p>
											<a aria-label="<?php echo $label_ga; ?>" href="<?php the_sub_field('url'); ?>">
												<div class="solusi_button">
													<span class="f-14">
														<i class="fa fa-chevron-circle-right"></i><?php the_sub_field('button'); ?>
													</span>
												</div>
											</a>
										</li>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>

	<div id="sliderBanner" class="white p-all-30">
		<div class="row">
			<div class="box_slide">
				<ul id="main_slidebanner" class="clearfix">
					<?php
						$args = array("post_type" => "slide_banner","posts_per_page" =>5);
						query_posts( $args );
						if(have_posts()): while(have_posts()):the_post();
					?>
					<li class="box_images" class="large-3 columns">
						<div class="box_slide">
							<a href="<?php the_field("slide_url") ?>"><img class="img_banner lazy" data-src="<?php the_field('slider_image');?>" alt="<?php echo get_the_title(); ?>" aria-label="<?php echo get_the_title(); ?>"></a>
						</div>
					</li>
					<?php endwhile;?>
				</ul>
				<?php endif;?>
			</div>
		</div>
	</div>
	<div id="advisor-teaser">
		<div class="row">
			<div class="large-5 columns">
				<div class="header_solusi_untuk_anda"><span></span>Solusi untuk Anda</div>
				<div class="cp-display--none"><h2>AXA Mandiri</h2></div>
				<p>Cari tahu jenis perlindungan sesuai kebutuhan Anda</p>
			</div>
			<div class="large-6 columns">
				<form action="<?php echo site_url('solution-advisor');?>">
					<div class="large-9 columns p-all-0">
						<div class="teaser-slider">
							<label>Tahun ini saya berumur <strong>25</strong></label>
							<label>Saya butuh perlindungan <strong>Kesehatan</strong></label>
							<label>Status saya <strong>Menikah</strong></label>
						</div>
					</div>
					<!-- <input type="text" id="age" value="25"/> -->
					<div class="large-3 columns">
						<input type="submit" value="Mulai" class="button red"/>
					</div>
					<input type="hidden" name="age" id="hasil-age" value=""/>
				</form>
			</div>
		</div>
	</div>
	<?php get_template_part("widget/hargaunit");?>
	<div id="layanan" class="background-vector">
		<div class="row">
			<div class="large-11 column centered">
				<div class="header2_home_layanan"><?php /* _e("<!--:en-->SERVICE IN YOUR HAND<!--:--><!--:id-->LAYANAN DI TANGAN ANDA<!--:-->"); */
							_e("LAYANAN DI TANGAN ANDA"); ?></div>
				<ul class="clearfix">
					<?php if(get_field('layanan_home', 'options')): ?>
						<?php while(has_sub_field('layanan_home', 'options')): ?>
							<?php if(get_sub_field('layanan_anda_personal', 'options')): ?>
								<?php while(has_sub_field('layanan_anda_personal', 'options')): ?>
									<li class="large-4 columns premi">
										<div class="icon lazy" data-src="<?php the_sub_field('image'); ?>"></div>
										<div class="details">
											<div class="header2_list_home_layanan"><?php the_sub_field('title'); ?></div>
											<p class="show-for-large-only"><?php the_sub_field('excerpt'); ?></p>
											<a href="<?php the_sub_field('url'); ?>" class="button blue"><?php the_sub_field('button'); ?></a>
										</div>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<?php 
		// echo do_shortcode('[widget_inspirasi][/widget_inspirasi]');
	?>
	<div id="region-1">
		<div class="row">
				<div class="large-4 columns">
					<?php get_template_part("widget/berita-terbaru");?>
				</div>
				<div class="large-4 columns">
					<?php get_template_part("widget/bandingkan");?>
				</div>
				<div class="large-4 columns">
					<?php get_template_part("widget/karir");?>
				</div>
		</div>
	</div>
<?php get_footer();?>
