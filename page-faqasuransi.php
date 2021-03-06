<?php/** * Template Name: Layanan Nasabah: FAQ Asuransi */?>
<?php get_header();?>
<script src='//pixel.mathtag.com/event/js?mt_id=570158&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
			<h1 class="header1">Layanan Nasabah</h1>
			<div class="header2" style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></div>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div id="wrapper" class="row">
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>
		<section id="page-half" class="grey sections clearfix">
			<div class="large-8 columns p-all-0">
				<?php if( have_posts() ) : the_post(); ?>
				<?php the_content();?>
				<?php endif;?>

				<dl class="accordion" data-accordion="">
					<?php
				      $first = 0;
				      $terms = get_terms("faq_category");
				      $count = count($terms);
				      if ( $count > 0 ){
				        foreach ( $terms as $term ) {
				          if($term->slug != $slug){
				    ?>
					<dd>
					    <a href="#<?php echo $term->slug?>"><?php echo $term->name?></a>
					    <div id="<?=$term->slug?>" class="content">
					    	<div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div>
					    	<ul id="faq-list" class="two-list-content small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
					    		<?php
									$args = array("post_type" => "faq","posts_per_page" =>-1, "faq_category" =>$term->slug);
									query_posts( $args );
									if(have_posts()): while(have_posts()):the_post();
								?>
					     		<li class="m-bottom-5"><a href="<?php the_permalink();?>" title="<?php the_title();?>" class="f-13"><strong><?php the_title();?></strong></a></li>
					     		<?php endwhile;?>
					    	 </ul>
					    	 <?php endif;?>
					    </div>
					</dd>
				  	<?php
				        }
				      	$first++;
				      }
				    }
				  	?>
				</dl>
			</div>
			<aside class="columns widget w-322">
				<div class="m-bottom-25">
					<?php get_template_part("widget/sidebar-pengajuan-klaim");?>
				</div>
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
