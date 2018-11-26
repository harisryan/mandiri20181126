<?php/** * Template Name: Penghargaan*/?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative">
		<div class="content large-4">
			<h1><?php the_title(); ?></h1>
			<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->


	<div id="wrapper" class="row">
		<section id="content-details" class="clearfix">
			<?php if( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endif;?>
		</section>
		<section class="penghargaan test">
			<div class="sections clearfix">
				<div id="page-half" class="clearfix">
					<div class="large-8 columns p-left-0">
						<dl class="accordion" data-accordion>
						<?php
							$args=array("post_type"=> "penghargaan");
							query_posts( $args );
							$a = 0;
							$results = new WP_Query( $args );
							if(have_posts()): while(have_posts()):the_post();
							var_dump($args);
							echo 'test';
						?>
						<dd>
								<a class="p-tb-15" href="#post-<?php echo $a ?>"><?php the_title() ?></a>
								<div class="content" id="post-<?php echo $a ?>">
									<ul id="awards" class="small-block-grid-1 medium-block-grid-1 large-block-grid-2 clearfix">
										<?php while(has_sub_field('penghargaan')) : ?>
											<li>
												<div class="box-penghargaan">
													<div class="label-awards">
														<span class="awards-icon"></span>
														<h4 class><?php the_sub_field('title');?></h4>
													</div>
													<p class="list-penghargaan"><?php the_sub_field('nama_penghargaan');?></p>
												</div>
											</li>

										<?php endwhile; ?>
									</ul>
								</div>
							</dd>
							<?php $a++; ?>
						<?php endwhile;?>
						<?php endif;?>
						</dl>

					</div>
					<aside class="columns w-322">
						 	<div class="widget"><?php get_template_part("widget/footer-banner-left");?></div>
						</aside>
				</div>
			</div>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page-container-->

<?php get_footer();?>
