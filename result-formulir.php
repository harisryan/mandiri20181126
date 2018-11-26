<?php/** * Template Name: Result formulir */?>
<?php $title = $_POST['a']; ?>
<?php $slug = $_POST['b']; ?>
<?php get_header();?>
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
		<?php get_template_part("widget/layanan-submenu");?>
		<section id="page-half" class="grey sections clearfix">
			<div class="large-8 columns p-all-0">
				 <dl class="accordion" data-accordion="">
				  <dd>
				    <a class="title-accordion active" href="#debet"><?php echo $title; ?></a>
				    <?php #var_dump($title);?>
				    <div id="debet" class="content active">
				    	<!-- <div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div> -->
				    	<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
				    		<?php 
								$args = array("post_type" => "form","posts_per_page" =>-1, "formulir_category" =>$slug);
								query_posts( $args );
								if(have_posts()): while(have_posts()):the_post();
							?>
				     		<li><a href="<?php the_field('forms_upload_file');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php the_title();?></strong><i class="fa fa-download right"></i></a></li>
				     		<?php endwhile;?>
				    	 </ul>
				    	 <?php endif;?>
				    </div>

				  </dd>

				  	<?php 
						$terms = get_terms("form_entity");
						$count = count($terms);
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								if($term->slug != $slug){
					?>
				  <dd>
				    <a class="title-accordion" href="#<?=$term->slug?>"><?=$term->name?></a>
				    <div id="<?=$term->slug?>" class="content">
				    <!-- <div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div> -->
				      	<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
				        <?php 
				        $args = array("post_type" => "form","posts_per_page" =>-1, "tax" =>$slug);
				        query_posts( $args );
				        if(have_posts()): while(have_posts()):the_post();
				      ?>
				        <li><a href="<?php the_field('forms_upload_file');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php the_title();?></strong><i class="fa fa-download right"></i></a></li>
				        <?php endwhile;?>
				       </ul>
				       <?php endif;?>
				    </div>
				  </dd>
				  	<?php
				  				}
					    	}
					 	}
					?>
				</dl>

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