<?php/** * Template Name: Default Page With Sidebar */?>
<?php get_header();?>

<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative cp-height--100">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php the_field('header_image');?>);"></div>
		<div class="content large-4">
			<h1><?php the_title();?></h1>
			<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div id="wrapper" class="row">
		<section id="page-half" class="white clearfix sections radius-all-5">
			<div class="large-8 columns">
					 <?php
						 while ( have_posts() ) : the_post();
					 ?>
						<!-- <h3 class="m-bottom-30 f-24"><?php the_title();?></h3> -->
						<?php the_content(); ?>
						<?php the_field('scripts') ?>
					<?php
						  endwhile;
					 ?>
			</div><!--end large 8-->
			<aside class="columns w-322 m-top-45">
			<div class="widget">
				<strong class="c-blue">AXA Mandiri</strong><br>
				<ul class="office-details">
	           		<li class="address m-bottom-10"><?php the_field('office_address', 'option');?></li>
	           		<li class="phone"><?php the_field('office_phone', 'option');?></li>
	           		<li class="fax"><?php the_field('office_fax', 'option');?></li>
	           		<li class="email"><?php the_field('office_email', 'option');?></li>
           		</ul>
			 </div>
			 <div class="widget"><?php get_template_part("widget/sidebar-socmed");?></div>
			 <div class="widget"><?php get_template_part("widget/footer-banner-left");?></div>
			 <div class="widget"><?php get_template_part("widget/footer-banner-right");?></div>
			</aside>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page container-->
<?php get_footer();?>
