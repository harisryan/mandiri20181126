<?php/** * Template Name: Result Klaim */?>
<?php $title = $_POST['z']; ?>
<?php $slug = $_POST['q']; ?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
			<div class="header1">Layanan Nasabah</div>
			<div class="header2" style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></div>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div class="row">  
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>
		<section id="page-half" class="white sections clearfix">
			<div class="large-8 columns p-all-0">
				<dl class="accordion" data-accordion="">
					<p><strong>Lihat persyaratan dan tata cara pengajuan klaim produk AXA</strong></p>
				  	<dd>
					    <a href="#kesehatan"><?php echo $title; ?> </a>
					    <div id="kesehatan" class="content active">
					    	<div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div>
					    	<ul class="list-with-arrow column-2 ">
					    		<?php
									$args = array("post_type" => "klaim","posts_per_page" =>-1, "klaim_entity" =>$slug);
									query_posts( $args );
									if(have_posts()): while(have_posts()):the_post();
								?>
					     		<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					     		<?php endwhile;?>
					    	 </ul>
					    	 <?php endif;?>
					    </div>
					</dd>

					<?php 
						$terms = get_terms("klaim_entity");
						$count = count($terms);
						if ( $count > 0 ){
							foreach ( $terms as $term ) {
								if($term->slug != $slug){
					?>
					<dd>
					    <a href="#asuransi"><?=$term->name?></a>
					    <div id="asuransi" class="content">
					    <div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div>
					      	<ul class="list-with-arrow column-2 ">
					        <?php 
					        $args1 = array("post_type" => "klaim","posts_per_page" =>-1, "klaim_entity" =>$term->slug);
					        query_posts( $args1 );
					        if(have_posts()): while(have_posts()):the_post();
					      ?>
					        <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
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