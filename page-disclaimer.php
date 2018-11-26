
<?php/** * Template Name: Disclaimer */?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative cp-height--100-i">
		<div class="box absolute set-1">
			<p class="f-45 fw-bold c-bluemandiri"><h1>Disclaimer</h1></p>
		</div>
		<div class="cp-display--none">
			<h2>AXA Mandiri</h2>
		</div>
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div id="wrapper" class="row">
		<section id="content-details" class="clearfix">
			<?php if( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endif;?>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
<?php get_template_part("widget/hargaunit");?>
</div>
<?php get_footer();?>
