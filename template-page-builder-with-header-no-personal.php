<?php/** * Template Name: Page Builder : Header No Personal Bisnis */?>
<?php get_header(); ?>

<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php the_field('header_image');?>);"></div>
		<div class="content large-4">
			<!--<h1><?php the_title(); ?></h1>-->
            <h1 class="header1"><?php the_title(); ?></h1>

			<!--<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>-->
			<div class="header2" style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></div>
		</div><!--end large 6-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div id="wrapper" class="row">
		<?php the_content(); ?>		
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
<?php get_template_part("widget/hargaunit");?>
</div>

<?php get_footer();?>