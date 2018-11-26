<?php/** * Template Name: Karir:Static */?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php bloginfo('template_url');?>/images/header-karir.jpg);">
	<div id="masthead" class="row relative">
		<div class="content large-6">
			<h1>Karir</h1>
			<h2 class="cp-color--gray">Bergabung dan mengembangkan karir dengan salah satu perusahaan asuransi terbesar di dunia</h2>
		</div><!--end large 6-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->
	<div class="row">
		<section class="bg-white clearfix radius-top-5">
			<div class="sections">
				<?php if( have_posts() ) : the_post(); ?>
						 <?php the_content();?>
				<?php endif; wp_reset_postdata();?>
			</div>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
</div>
<?php get_footer();?>
