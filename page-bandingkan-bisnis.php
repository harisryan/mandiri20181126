<?php/** * Template Name: Bandingkan:Bisnis */?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php home_url();?>/wp-content/uploads/2013/12/slide-1.jpg);">
	<div id="masthead" class="row relative">
		<div class="content large-6">
			<h1><?php /* _e("<!--:en-->Compare Products<!--:--><!--:id-->Bandingkan Produk<!--:-->"); */
						  _e("Bandingkan Produk");?></h1>
			<h2 class="c-default">Sandingkan produk-produk dari solusi AXA Mandiri dan cari produk yang terbaik untuk Anda</h2>

			<ul id="separate" class="bisnis relative cp-position--top0">
				<?php $slug = basename(get_permalink());?>
				<li class="selected"><a href="<?php echo site_url('bandingkan-produk/')?>">Personal</a></li>
				<li><a href="<?php echo site_url('bandingkan-produk/bisnis/')?>">Bisnis</a></li>
			</ul>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div class="row">
		<section class="sections bg-white clearfix">
				<div class="clearfix">
					<h3 class="f-24" role="heading" aria-level="3"><?=$_GET['q']?>Temukan produk perlindungan AXA Mandiri yang terbaik untuk Anda</h3>

						<?php $bandingkanmenu = array(
				                'theme_location'  => '',
				                'container'       => '',
				                'menu'            => 'Bandingkan Bisnis',
				                'echo'            => true,
				                'fallback_cb'     => 'wp_page_menu',
				                'items_wrap'      => '<ul id="bandingkan-menu" class="%2$s ssmall-block-grid-1 medium-block-grid-1 large-block-grid-3 m-top-20 m-bottom-20">%3$s</ul>',
				                'depth'           => 0,
				                'link_before' => '<div class="block p-all-20 bg-greylight3 radius-all-5"><span class="icon"></span><strong class="uppercase">', 'link_after' => '</strong></div>'
				            );
				        wp_nav_menu( $bandingkanmenu );?>

					<ul id="dropdown" class="clearfix small-block-grid-1 medium-block-grid-1 large-block-grid-3">
						<?php for($i = 1; $i < 4; $i++){ ?>

							<li class="<?=$i == 1 ? '' : 'disable'?> relative">
								<select class="matrix-cat" name="matrixcat-<?=$i?>" id="matrixcat-<?=$i?>">
									<option value="0">Pilih produk</option>
								<?php
					     			$args = array("post_type" => "product_matrix","posts_per_page" =>-1, "matrix_category" => $slug."-bisnis");
									query_posts( $args );
									if(have_posts()): while(have_posts()):the_post();
								?>
										<option value="<?=$post->ID?>"><?php the_title(); ?></option>
								<?php
									endwhile; endif;
								?>
								</select>
							</li>
						<?php } ?>
					</ul>
					<div id="matrix-result">

					</div>
				</div>
		</section>
		<section class="sections bg-greylight2">
			<ul class="clearfix small-block-grid-1 medium-block-grid-1 large-block-grid-3">
				<li id="result-matrix-1">
					<div class="postThumbnail dashed-2 radius-all-5 h-198 m-bottom-10 bg-white">
						<strong class="f-16 text-center block m-top-65">Pilih produk perlindungan AXA Mandiri untuk dibandingkan</strong>
					</div>
					<div class="manfaat dashed-2 h-322 radius-all-5 m-bottom-10 bg-white"></div>

					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>

				</li>
				<li id="result-matrix-2">
					<div class="postThumbnail dashed-2 radius-all-5 h-198 m-bottom-10 bg-white">
						<strong class="f-16 text-center block m-top-65">Pilih produk perlindungan AXA Mandiri untuk dibandingkan</strong>
					</div>
					<div class="manfaat dashed-2 h-322 radius-all-5 m-bottom-10 bg-white"></div>

					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>

				</li>

				<li id="result-matrix-3">
					<div class="postThumbnail dashed-2 radius-all-5 h-198 m-bottom-10 bg-white">
						<strong class="f-16 text-center block m-top-65">Pilih produk perlindungan AXA Mandiri untuk dibandingkan</strong>
					</div>
					<div class="manfaat dashed-2 h-322 radius-all-5 m-bottom-10 bg-white"></div>

					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
					<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>

				</li>
			</ul>
		</section>


		<?php get_template_part("widget/breadcrumbs");?>
	</div>
<?php get_template_part("widget/hargaunit");?>
</div>
<?php get_footer();?>
