<?php/** * Template Name: Page Builder : Homepage */?>
<?php get_header(); ?>
<div class="row box">
	<div class="large-11">
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>
</div>
<?php the_content(); ?>
<?php get_footer();?>