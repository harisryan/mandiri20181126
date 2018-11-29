<?php/** * Template Name: Solusi Archive */?>
<?php get_header();?>
<?php 
	$slug = basename(get_permalink());
	$bandingkanSlug = $post->post_name == 'solusirencanakanlebih' ? 'solusi-kesehatan' : $post->post_name;
?>
<?php if($slug="solusi-kesehatan"):?>
	<script src='//pixel.mathtag.com/event/js?mt_id=570050&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<?php endif;?>
<div id="page-container">
	<div id="wrapper" class="row">
			<div id="masthead" class="row relative solusi-masterhead">
				<ul id="separate" class="personal relative cp-position--top0">
					<li class="selected"><a href="<?php echo site_url('/') .$slug;?>">Personal</a></li>
					<li><a href="<?php echo site_url('bisnis/') . $slug;?>">Bisnis</a></li>
				</ul>		
			</div>
			<!--Product listing-->
			<section id="product-listing" aria-label="Product Listing" class="clearfix sections bg-white radius-bottom-5">
			<div class="title-content">
				<h3 class="c-blue"><?php ( is_page( 'solusirencanakanlebih' ) ) ? _e("Solusi Khusus untuk Anda") : _e("Produk Kesehatan"); ?></h3>
				<img class="icon-product" src="<?php echo bloginfo('template_url');?>/images/revamp/icon-kesehatan.png" alt="" />
			</div>
			<div class="blue-underline"></div>

			<?php
			$posts_product = get_field('solusi_relationship');
			if( $posts_product ): ?>
			    <ul class="list-inline-product">
			    <?php foreach( $posts_product as $post):?>
			        <?php setup_postdata($post);?>
			        <?php $term = wp_get_post_terms( $post->ID, "matrix_section" ); ?>
			        <li class="product-item">
						<?php include(locate_template('widget/leadform.php')); ?>
						<div class="box-product">
							<?php 
							$thumbnail_custom_pm = get_field('image_square',$post->ID);				
							?>
							<div class="bg-thumbnail" style="background-image:url('<?php echo $thumbnail_custom_pm ?>');">
								<?php if ($thumbnail_custom_pm == null) 
									the_post_thumbnail('matrix_small',  array( 'alt' => get_the_title() ) );
								?>
								<a href="#" postid="<?php echo $post->ID ?>" class="btn-hubungi button red transparent block bottom">HUBUNGI SAYA </a>
							</div>
							<div>
								<h5 style="font-size:1.063em" class="c-blue"><?php the_title(); ?></h5> <p class="c-blue" style="line-height:5px;font-size: 16px;"></p>
								<ul id="list-manfaat">
									<?php $count = 1; 
									while(has_sub_field('matrix_manfaat')): ?>
									<?php if($count < 4): ?>
										<li><?php the_sub_field('title');?></li>
									<?php endif; ?>
									<?php $count++; endwhile;?>
								</ul>
								<div class="bottom-section">
									<a href="<?php the_permalink(); ?>" class="c-red" style="font-size:0.8em;line-height:10px;" onclick="javascript:return tc_events_2(this,'interaction',{interaction_name:'Havas_Lebih_lanjut_<?=$post->post_name?>',interaction_detail:'click'});">INFO SELENGKAPNYA <span class="fa fa-arrow-right"></span></a>	
									<br/>
									
									<a href="<?php echo site_url('bandingkan-produk/'.$bandingkanSlug);?>" class="c-red" style="font-size:0.8em;line-height:10px;" onclick="javascript:return tc_events_2(this,'interaction',{interaction_name:'Havas_Lebih_lanjut_<?=$post->post_name?>',interaction_detail:'click'});">BANDINGKAN PRODUK <span class="fa fa-arrow-right"></span></a>								</div>
							</div>
						</div>
			        </li>
			    <?php endforeach; ?>
			    </ul>
			    <?php wp_reset_postdata();?>
			<?php endif; ?>
		</section>
		<!--End product listing-->

		<section id="content-details" aria-label="Content Details" class="clearfix">
			<?php if( have_posts() ) : the_post(); ?>
				<div class="large-9 columns f-16"><?php the_content();?></div>
				<div class="large-3 columns slides">
					<h3 role="heading" aria-level="3" class="c-blue">Tahukah Anda?</h3>
					<div id="tahukah-anda">
						<?php while(has_sub_field('tahukah_anda')): ?>
							<div class="elements">
								<img src="<?php the_sub_field('image');?>" class="block" alt="tahukah anda"><br>
								<p><?php the_sub_field('description');?></p>
							</div>
						<?php endwhile;?>
					</div>
				</div>
			<?php endif;?>
		</section>

		<section id="body-2" aria-label="Body 2" class="blue-sections clearfix text-white" style="background-image:url(<?php the_field('blue_sections_images');?>);">
			<span class="blue-sections-cover-left"></span>
			<?php if(get_field('solusi_archive_body_2')): ?>
				<?php while(has_sub_field('solusi_archive_body_2')): ?>
					<div class="large-6 columns">
						<?php the_sub_field("content");?>
					</div>
					<div class="large-6 columns text-center">
						<?php if(get_sub_field('image')!=''): ?>
							<img src="<?php the_sub_field('image');?>"/>
						<?php endif;?>
					</div>
				<?php endwhile;?>
			<?php endif;?>
			<?php wp_reset_postdata();?>
			<span class="blue-sections-cover-right"></span>
		</section>

		<section id="manfaat-luas" aria-label="Manfaat Luas" class="clearfix sections background-vector">
			<h3 class="m-bottom-45"><?php /* _e("<!--:en-->Extensive Benefits<!--:--><!--:id-->Manfaat Luas<!--:-->"); */
											_e("Manfaat Luas"); ?></h3>
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

		<script type="text/javascript">
			$("#product-listing-mobile select").change(function(){
				$("#product-listing-mobile").attr("action", this.value);
			});
			
			$(".btn-hubungi").click(function(){
				$("#leadform_" + $(this).attr("postid")).show();
			})
		</script>



		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page-container-->
<?php get_template_part("widget/leadform");?>
<?php get_footer();?>