<?php get_header();?>
<script src='//pixel.mathtag.com/event/js?mt_id=571619&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
			<h1>Layanan Nasabah</h1>
			<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div id="wrapper" class="row">  
		<?php get_template_part("widget/search-premi");?>
		<section id="page-half" class="grey sections clearfix">
			<div class="large-8 columns p-all-0">
				  <?php if( have_posts() ) : the_post(); ?>
				 
				 <?php 
				 $terms = get_the_terms( $post->ID, 'form_entity' );

				if ( $terms && ! is_wp_error( $terms ) ) : 
					$entity_name = $terms[0]->name;
				endif;
				  ?>
			
				<dl class="accordion" data-accordion="">

				  	<dd>
					    <a href="#<?=$term->slug?>"><?=$entity_name?></a>
					    <div id="<?=$term->slug?>" class="content <?php if($first == 0) echo "active"; ?>">
					    	<div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div>
					    	<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
					    		
					     		<li><a href="<?php the_field('forms_upload_file');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php the_title();?></strong><i class="fa fa-download right"></i></a></li>
					     		
					    	 </ul>
					    	 
					    </div>
				  	</dd>
				  	
				</dl>
				<?php endif;?>
			</div>
			<aside class="columns widget w-322"> 
				<div class="m-bottom-25">
					<?php get_template_part("widget/sidebar-pencarian-form");?>
				</div>
			</aside>

		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page container-->
<?php get_footer();?>