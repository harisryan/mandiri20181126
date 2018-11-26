<?php/** * Template Name: Bisnis */?>
<?php get_header();?>
	<div id="mainSlider">
		<div class="row box">
			<div class="large-11">
				<ul id="separate" class="bisnis">
					<li class="selected"><a href="<?php echo site_url('home');?>">Personal</a></li>
					<li><a href="<?php echo site_url('bisnis');?>">Bisnis</a></li>
				</ul>	
				<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
			</div>
		</div>
		<ul id="slideContent" class="owl-carousel">
			<?php 
				$args = array("post_type" => "slide_bisnis","posts_per_page" =>5);
				query_posts( $args );
				if(have_posts()): while(have_posts()):the_post();
			?>
			<li>
				<div class="slideBG" style="background-image:url(<?php the_field('slider_image');?>);">
					<div class="row">
						<div class="caption">
							<h3 style="color:<?php the_field('color_picker'); ?>"><?php the_title();?></h3>
							<a href="<?php the_field("slide_url");?>" class="buttons" style="border-color:<?php the_field('color_picker'); ?>;color:<?php the_field('color_picker'); ?>"> <i style="color:<?php the_field('button_color'); ?>;background:<?php the_field('color_picker'); ?>" class="fa fa-chevron-right"></i> <?php the_field("slide_button_text");?></a>
						</div>
					</div>
				</div>
			</li>
			<?php endwhile;?>
		</ul>
		<?php endif;?>
	</div>

	<div id="solusi_main" class="bg-greylight">
		<div class="row solusiContainer">
			<div id="solusiWidget">
					<h3 class="m-bottom-30"><?php /* _e("<!--:en-->Our Solution<!--:--><!--:id-->Solusi Kami<!--:-->"); */
													_e("Solusi Kami"); ?></h3>
				<ul class="clearfix large-block-grid-3 medium-block-grid-1 small-block-grid-1">
					<?php if(get_field('bisnis_page', 'options')): ?>
						<?php while(has_sub_field('bisnis_page', 'options')): ?>
							<?php if(get_sub_field('solusi_kami', 'options')): ?>
								<?php while(has_sub_field('solusi_kami', 'options')): ?>
									<?php if(get_sub_field('text_image')=='KESEHATAN'): ?>

									<?php $label_ga='Solusi kesehatan bisnis button'; ?>
									
									<?php elseif(get_sub_field('text_image')=='PROTEKSI'): ?>
									
									<?php $label_ga='Solusi proteksi bisnis button'; ?>
									
									<?php elseif(get_sub_field('text_image')=='UMUM'): ?>
									
									<?php $label_ga='Solusi umum bisnis button'; ?>
									
									<?php else: ?>
									
									<?php $label_ga=''; ?>
									<?php endif; ?>
								<li>
									<div id="solusi-kesehatan" class="img_background" style="background-image:url(<?php the_sub_field('image'); ?>)">
										<a href="<?php the_sub_field('url'); ?>" class="clearfix" onClick="javascript:return tc_events_2(this,'interaction',{interaction_name:'button',interaction_detail:'<?=$label_ga?>'});">
											<!-- <span class="bg-cover-left-solusiindex"></span> -->
											<p class="title"><?php the_sub_field('text_image'); ?></p>
											<span class="icon-solusi-index" style="background-image:url(<?php the_sub_field('icon'); ?>)"></span>
											<span class="bg-cover-right-solusiindex"></span>
										</a>
									</div>
									<p class="show-for-large-only"><?php the_sub_field('excerpt'); ?></p>
									<div class="solusi_button">
										<a href="<?php the_sub_field('url'); ?>" class="f-14">
											<i class="fa fa-chevron-circle-right"></i><?php the_sub_field('button'); ?>
										</a>
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
								<img class="img_banner" src="<?php the_field('slider_image');?>" alt="<?php the_field('alt');?>">
							</div>
						</li>
						<?php endwhile;?>
					</ul>
					<?php endif;?>
				</div>
		</div>
	</div>

	<?php get_template_part("widget/hargaunit");?>


	<div id="layanan">
		<div class="row">
			<div class="large-11 column centered">
				<h3><?php /* _e("<!--:en-->SERVICE IN YOUR HAND<!--:--><!--:id-->LAYANAN DI TANGAN ANDA<!--:-->"); */
							_e("LAYANAN DI TANGAN ANDA"); ?></h3>
				<ul class="clearfix">
					<?php if(get_field('layanan_home', 'options')): ?>
						<?php while(has_sub_field('layanan_home', 'options')): ?>
							<?php if(get_sub_field('layanan_anda_bisnis', 'options')): ?>
								<?php while(has_sub_field('layanan_anda_bisnis', 'options')): ?>
									<li class="large-4 columns premi">
										<div class="icon" style="background-image:url(<?php the_sub_field('image'); ?>)"></div>
										<div class="details">
											<h4><?php the_sub_field('title'); ?></h4>
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

	<div id="region-1">
		<div class="row">
				<div class="large-4 columns">
					<?php get_template_part("widget/berita-terbaru");?>
				</div>
				<div class="large-4 columns">
					<?php get_template_part("widget/footer-direktori");?>
				</div>
				<div class="large-4 columns">
					<?php get_template_part("widget/karir");?>
				</div>			
		</div>
	</div>

<?php get_footer();?>