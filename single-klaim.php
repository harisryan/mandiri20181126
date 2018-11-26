<?php get_header();?>
<div id="page-container">
	<div id="masthead" class="row relative">
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
		<div id="page-head" class="relative" style="background:url(<?php bloginfo('template_url');?>/images/head-single-layanan.jpg);">
			<div class="box absolute">
				<h1 class="header1">Layanan Nasabah</h1>
				<div class="header2 f-45 c-bluemandiri">Pengajuan Klaim</div>
				<div class="cp-display--none">
					<h2>AXA Mandiri</h2>
				</div>
			</div>
		</div>
	</div><!--end masthead-->
	<div class="row p-all-0">
	<div id="page-box" class="sections white clearfix">
		<section id="page-half" class="bg-white">
		<div class="large-8 columns p-all-0">
			<!-- <section id="page-half" class="clearfix"> -->
				<?php if( have_posts() ) : the_post(); ?>
					<h3 class="f-24 m-bottom-50"><?php the_title();?></h3>
					 <dl class="accordion" data-accordion="">
						  <dd>
						    <a href="#prosedur">Prosedur</a>
						    <div id="prosedur" class="content active">
						    	<div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div>
								<?php the_field('klaim_prosedur');?>
						    </div>

						  </dd>
						  <dd>
						    <a href="#persyaratan">Persyaratan</a>
						    <div id="persyaratan" class="content">
						    <div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div>
								<?php the_field('klaim_persyaratan');?>
						    </div>

						  </dd>
						  <dd>
						    <a href="#dokumen">Dokumen Pendukung</a>
						    <div id="dokumen" class="content">
						    <div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div>
								<ul class="pdf-list small-block-grid-1 medium-block-grid-1 clearfix">
								<?php while (has_sub_field('klaim_dokumen')):?>
									<li><a href="<?php the_sub_field('file_pdf');?>" class="clearfix block white shadow-grey-3" target="_blank"><span class="icon"></span><strong><?php echo get_sub_field('nama_file') . ' ' . getFileDetail(get_sub_field('file_pdf'));?></strong><i class="fa fa-download right"></i></a></li>
								<?php endwhile;?>
								</ul>
						    </div>

						  </dd>
						</dl>
				 <?php endif;?>
			<!-- </section> -->
		</div>
		</section>

		<aside class="columns widget w-322">
			<div class="m-bottom-25">
				<?php get_template_part("widget/sidebar-pengajuan-klaim");?>
			</div>
			<div class="m-bottom-25">
				<div class="klaim-menu">
				<h3 class="f-16">Bukan Layanan yang Anda Cari?</h3>
				<p><?php /* _e("<!--:en-->Find the service you need from a selection of AXA Mandiri Customer Service<!--:--><!--:id-->Temukan layanan yang Anda butuhkan dari pilihan Layanan Nasabah AXA Mandiri<!--:-->"); */
							_e("Temukan layanan yang Anda butuhkan dari pilihan Layanan Nasabah AXA Mandiri"); ?></p>
				 <?php $layananmenu = array(
			                'theme_location'  => '',
			                'container'       => '',
			                'menu'            => 'Layanan Nasabah',
			                'echo'            => true,
			                'fallback_cb'     => 'wp_page_menu',
			                'items_wrap'      => '<ul id="" class="%2$s service-menu clearfix">%3$s</ul>',
			                'depth'           => 0,
			                'link_before' => '<div class="items"><span></span><p>', 'link_after' => '</p></div>'
			            );
			        wp_nav_menu( $layananmenu );?>
				</div>
			</div>
		</aside>
		</div>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
	<?php get_template_part("widget/hargaunit");?>
</div>
<?php get_footer();?>
