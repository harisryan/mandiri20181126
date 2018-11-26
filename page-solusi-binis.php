<?php/** * Template Name: Solusi Archive:Bisnis */?>
<?php get_header();
$bandingkanSlug = $post->post_name;
?>
<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php the_field('header_image');?>);"></div>
		<div class="content large-6">
			<!--<h1><?php the_title(); ?></h1>-->
            <h1 class="header1"><?php the_title(); ?></h1>

			<!--<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>-->
			<div class="header2" style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></div>
			<ul id="separate" class="bisnis relative cp-position--top0">
				<?php $slug = basename(get_permalink());?>
				<li class="selected"><a href="<?php echo site_url('/') .$slug;?>">Personal</a></li>
				<li><a href="<?php echo site_url('bisnis/') . $slug;?>">Bisnis</a></li>
			</ul>
		</div><!--end large 6-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div id="wrapper" class="row">
		<section id="content-details" class="clearfix">
			<?php if( have_posts() ) : the_post(); ?>
				<div class="large-9 columns f-16"><?php the_content();?></div>
				<div class="large-3 columns slides">
					<h3 role="heading" aria-level="3" class="c-blue">Tahukah Anda?</h3>
					<div id="tahukah-anda">
						<?php while(has_sub_field('tahukah_anda')): ?>
							<div class="elements">
								<img src="<?php the_sub_field('image');?>" class="block" alt="tahukah-anda"><br>
								<p><?php the_sub_field('description');?></p>
							</div>
						<?php endwhile;?>
					</div>
				</div>
			<?php endif;?>
		</section>

		<section id="body-2" class="blue-sections clearfix text-white" style="background-image:url(<?php the_field('blue_sections_images');?>);">
			<span class="blue-sections-cover-left"></span>
			<?php if(get_field('solusi_archive_body_2')): ?>
				<?php while(has_sub_field('solusi_archive_body_2')): ?>
					<div class="large-6 columns">
						<?php the_sub_field("content");?>
					</div>
					<div class="large-6 columns text-center">
						<?php if(get_sub_field('image')!=''):?>
						<img src="<?php the_sub_field('image');?>" alt="image-solusi"/>
						<?php else:?>
						<?php endif; ?>
					</div>
				<?php endwhile;?>
			<?php endif;?>
			<?php wp_reset_postdata();?>
			<span class="blue-sections-cover-right"></span>
		</section>

		<section id="manfaat-luas" class="clearfix sections background-vector">
			<div  class="m-bottom-45 header2_solusibisnis"><?php /* _e("<!--:en-->Extensive Benefits<!--:--><!--:id-->Manfaat Luas<!--:-->"); */
											 _e("Manfaat Luas"); ?></div>
			<?php if(get_field('solusi_archive_manfaat')): ?>
			<ul class="list-with-icon small-block-grid-1 medium-block-grid-2 large-block-grid-3 clearfix">
				<?php while(has_sub_field('solusi_archive_manfaat')): ?>
				<li><div class="clearfix h-85 o-hidden">
						<div class="bg-manfaat-right icon-95x86">
							<span class="" style="background: url(<?php the_sub_field('image');?>) right no-repeat;" alt="<?php echo (!empty(get_sub_field('alt')))?get_sub_field('alt') : 'manfaat';?>"></span>
						</div>
						<h3 class="m-all-0 p-top-25"><?php the_sub_field('title');?></h3>
					</div>
				</li>
				<?php endwhile;?>
			</ul>
			<?php endif;?>
			<?php wp_reset_postdata();?>
		</section><!--end manfaat luas-->


		<section id="product-listing" class="clearfix sections bg-white2 radius-bottom-5">
			<a href="<?php echo site_url('bandingkan-produk/bisnis/'. $bandingkanSlug);?>" class="button blue floating"><?php /* _e("<!--:en-->Compare Products<!--:--><!--:id-->Bandingkan Produk<!--:-->"); */
																										_e("Bandingkan Produk"); ?></a>
			<h3><?php /* _e("<!--:en-->Special products for you<!--:--><!--:id-->Produk Khusus untuk Anda<!--:-->"); */
						_e("Produk Khusus untuk Anda"); ?></h3>
			<h4 class="small-title m-bottom-45"><?php /* _e("<!--:en-->Select AXA Mandiri products according to your requirements<!--:--><!--:id-->Pilih produk AXA Mandiri sesuai dengan kebutuhan Anda<!--:-->"); */
														 _e("Pilih produk AXA Mandiri sesuai dengan kebutuhan Anda"); ?></h4>
			<?php
			$posts = get_field('solusi_relationship');
			if( $posts ): ?>
			    <ul id="listing-items" class="clearfix desktop-content">
			    <?php foreach( $posts as $post):?>
			        <?php setup_postdata($post); ?>
			        <?php $term = wp_get_post_terms( $post->ID, "matrix_section" ); ?>
			        <li class="clearfix elements <?=$term[0]->slug?>" data-category="<?=$term[0]->slug?>">
			        	<div class="box w-244 h-315 radius-all-5 bg-white relative">
			        	<a href="<?php the_permalink(); ?>" class="postThumbnail h-80 block relative">
							<span class="separate-small absolute"></span>
							<?php 
							$thumbnail_custom_pm = get_field('thumbnail_custom_pm',$post->ID);
							if($thumbnail_custom_pm != null): 
							?>
								<img src="<?php echo $thumbnail_custom_pm ?>" alt="<?php echo get_the_title() ?>" />
							<?php else: ?>
								<?php the_post_thumbnail('matrix_small',  array( 'alt' => get_the_title() ) );  ?>
							<?php endif; ?>
						</a>

						<div class="title">
							<h2 class="f-14 c-blue"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>

						<div class="details p-all-20">
			            	<!-- <h5 class="f-16 c-blue"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5> -->
			            	<ul class="list-grey">
			            	<?php $count = 1; while(has_sub_field('matrix_manfaat')): ?>
			            	<?php if($count < 4): ?>
			            		<li class="f-12"><?php the_sub_field('title');?></li>
			            	<?php endif; ?>
			            	<?php $count++; endwhile;?>
			           	 	</ul>
			            </div>
			            <a href="<?php the_permalink(); ?>" class="view-more bg-greylight4 block text-center p-all-10 f-13 absolute"><i class="fa fa-chevron-circle-right"></i>Lebih Lanjut</a>
			        </div>
			        </li>
			    <?php endforeach; ?>
			    </ul>
			    <?php wp_reset_postdata();?>
			<?php endif; ?>

			<form id="product-listing-mobile" class="mobile-content" action="">
				<?php
					$posts = get_field('solusi_relationship');
					if( $posts ): ?>
				<select name="" class="" tabindex="1">

					<option value="0"><?php /* _e("<!--:en-->Choose Product<!--:--><!--:id-->Pilih Produk<!--:-->"); */
												_e("Pilih Produk"); ?></option>
					<?php foreach( $posts as $post):?>
				        <?php setup_postdata($post); ?>
				        <?php $term = wp_get_post_terms( $post->ID, "matrix_section" ); ?>
					<option value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
					<?php endforeach; ?>
				</select>
				 <?php wp_reset_postdata();?>
				 <button type="submit" class="button blue">Lihat Produk</button>
				  <a href="<?php echo site_url('bandingkan-produk');?>" class="button bg-bandingkan"><?php /* _e("<!--:en-->Compare<!--:--><!--:id-->Bandingkan<!--:-->"); */
				  																								_e("Bandingkan");?></a>
			</form>
			<?php endif; ?>

		</section><!--end product listing-->
		<script type="text/javascript">
			$("#product-listing-mobile select").change(function(){
				$("#product-listing-mobile").attr("action", this.value);
			});
		</script>



		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page-container-->

<?php get_footer();?>
