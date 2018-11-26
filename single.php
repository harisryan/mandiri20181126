<?php get_header();?>
<div id="page-container">
	<div id="masthead" class="row relative p-all-0">
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
		<div id="page-head" class="relative m-top-120" style="background:#fcfdff url(<?php bloginfo('template_url');?>/images/header-news.jpg) no-repeat top right">
			<!-- <div class="separate-large absolute"></div>
 -->			<div class="box absolute set-1">
				<p class="f-30 fw-bold c-bluemandiri">Media</p>
				<!-- <p class="f-24">Cari tahu informasi dan berita terbaru<br>mengenai AXA Indonesia</p> -->
			</div>
		</div>
	</div><!--end masthead-->
	<div class="row p-all-0">
	<div id="page-box" class="sections white clearfix">
		<section id="page-half" class="bg-white">
			<div class="large-8 columns">
				<h1 class="f-24"><?php the_title();?></h1>
				<div class="meta-info m-bottom-20 clearfix"><div class="date left"><?php the_time('j F Y'); ?> | </div>
					<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style addthis_16x16_style left">
						<a class="addthis_button_facebook"></a>
						<a class="addthis_button_twitter"></a>
						<a class="addthis_button_google_plusone_share"></a>
						<a class="addthis_button_email"></a>
						</div>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-52e220892ac1220f"></script>
						<!-- AddThis Button END -->
				 </div>
				<?php if( have_posts() ) : the_post(); ?>
					 <div id="featured-image" class="m-bottom-20"><?php the_post_thumbnail('news_large');?></div>
					 <?php the_content();
					 	$this_post = $post;
					    $category = get_the_category(); 
					    $category = $category[0]; 
					    $category = $category->cat_ID;

				    	if($category == 1214) {
						    $args = [
					    				'post__not_in' => array(get_the_ID()),
										'numberposts' => 5,
										'offset' => 0,
										'orderby' => rand,
										'order' => DESC,
										'category' => $category,
										'date_query' => array(
											'before' => $post->post_date 
										),
						            ];
						    $posts = get_posts($args);

						    
						    if ( $posts ) { ?>
							<h4>Artikel Terkait :</h4>	
								<ol>
							<?php foreach ( $posts as $post ) {
									echo '<li><a title="'.get_the_title().'" href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
								} ?>
								</ol> <?php
						    }
						};
					 ?>
				<?php endif; wp_reset_postdata();?>
			</div>

			<div class="cp-display--none">
				<h2>AXA Mandiri</h2>
			</div>
			<aside class="columns w-322">
				<div class="widget"><?php get_template_part("widget/sidebar-berita-terbaru");?></div>
				<div class="widget"><?php get_template_part("widget/sidebar-berita-terpopuler");?></div>
				<div class="widget"><?php get_template_part("widget/sidebar-socmed");?></div>
				<!-- <div class="widget"><?php get_template_part("widget/footer-banner-right");?></div> -->
			</aside>
		</section>
	</div>
	<?php get_template_part("widget/breadcrumbs");?>
	</div>
	<?php get_template_part("widget/hargaunit");?>
</div>
<?php get_footer();?>