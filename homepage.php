<?php/** * Template Name: Homepage */?>
<?php get_header();?>

<span class="cp-display--none"><h1>AXA Mandiri</h1></span>	
	<div id="solusi_main" class="">
		<div class="row solusiContainer">
			<div id="solusiWidget">
				<ul class="list-inline">
					<li>
						<a href="<?php echo site_url();?>/solusi-kesehatan-revamp">
							<div class="icon-solution-home">
								<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-kesehatan.png"/>
							</div><br/>KESEHATAN
						</a>
					</li>
					<li>
						<a href="#">
							<div class="icon-solution-home">
								<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-jiwa.png"/>
							</div><br/>JIWA</a>
					</li>
					<li><a href="#">
						<div class="icon-solution-home">
							<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-travel.png"/>
						</div><br/>PERJALANAN</a>
					</li>
					<li><a href="#">
						<div class="icon-solution-home">
							<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-property.png"/>
						</div><br/>PROPERTI</a>
					</li>
					<li><a href="#">
						<div class="icon-solution-home">
							<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-mobil.png"/>
						</div><br/>MOBIL</a>
					</li>
					<li><a href="#">
						<div class="icon-solution-home">
							<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-belanjaan.png"/>
						</div><br/>BELANJAAN</a>
					</li>
				</ul>
				<br/>
				<ul class="list-inline">
					<li>
						<a href="#">
							<div class="icon-solution-home">
								<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-unitlink.png"/>
							</div><br/>UNIT LINK
						</a>
					</li>
					<li>
						<a href="#">
							<div class="icon-solution-home">
								<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-pendidikan.png"/>
							</div><br/>PENDIDIKAN ANAK
						</a>
					</li>
					<li>
						<a href="#">
							<div class="icon-solution-home">
								<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-danapensiun.png"/>
							</div><br/>DANA PENSIUN
						</a>
					</li>
					<li>
						<a href="#">
							<div class="icon-solution-home">
								<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-rekomendasi.png"/>
							</div><br/>REKOMENDASI
						</a>
					</li>
					<li>
						<a href="#">
							<div class="icon-solution-home">
								<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-belionline.png"/>
							</div><br/>BELI ONLINE
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('solusi-untuk-anda'); ?>">
							<div class="icon-solution-home">
								<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-belionline.png"/>
							</div><br/>Corporate Solution
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
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
	
	<?php get_template_part('inc/slideshow'); ?>
	
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
	<?php get_template_part("widget/hargaunit");?>
<?php get_footer();?>
