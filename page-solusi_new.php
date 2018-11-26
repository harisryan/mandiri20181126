<?php/** * Template Name: Solusi Archive New */?>
<?php get_header();?>
<?php 
	$slug = "solusi-kesehatan"; //basename(get_permalink());
	//echo($slug);
	$bandingkanSlug = $post->post_name == 'solusirencanakanlebih' ? 'solusi-kesehatan' : $post->post_name;
?>
<style>
	.bg-thumbnail{
		margin-bottom:10px;
		position:relative;
		min-width:220px;
		max-width:220px;
		min-height:220px;
		max-height:220px;
		text-align:center;
		background-size:contain;
		background-repeat:no-repeat;
	}
	.btn-hubungi{
		padding:10px!important;bottom: 0px!important;position: absolute!important;width:80%!important;margin:20px!important;border-radius:3px!important;
		background-color:#ef3e42c2!important;
	}
	#list-manfaat{
		margin-left:17px;
		margin-top:-10px;
		font-size:0.8em;
		content:'+';
		max-width:224px;
		margin-bottom:10px;
	}
	.list-inline-product{
		list-style:none;display:flex;
	}
	.list-inline-product li{
		margin-right: 15px;
	}
	.icon-product{
		position:absolute;
		width:73px;
		top:40px;
		right:70px;
	}
	.icon-product-rec{
		background-color: #f1c605;
		float: left;
		position: absolute;
		right:0px;
		top: 5px;
		width: 60px;
		padding-left: 0px;
		border-radius: 20px 0 0 20px;
	}
	.icon-product-rec img{
		width:30px;
	}
	.title-product{
		position:relative;
	}
	#product-listing-new{
		position:relative;
	}
	.box-product{
		padding:10px;
		width:240px;		
	}
	.recommended{
		background-color:#eae9e926;
	}
</style>

<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="wrapper" class="row">
		<section id="product-listing-new" aria-label="Product Listing" class="clearfix sections bg-white2 radius-bottom-5">	
			<div>
				<h3 class="c-blue"><?php ( is_page( 'solusirencanakanlebih' ) ) ? _e("Solusi Khusus untuk Anda") : _e("Produk Kesehatan"); ?></h3>
				<img class="icon-product" src="<?php echo bloginfo('template_url');?>/images/revamp/icon-kesehatan.png" alt="" />
			</div>
			<div style="max-width:40px;border-top:4px solid #00529b;margin-top:-10px;margin-bottom:10px;margin-left:1px;"></div>
			<h4 class="small-title m-bottom-45">
				<?php 
					(is_page( 'solusirencanakanlebih' ) ) ? _e("Pilih solusi AXA Mandiri sesuai dengan kebutuhan Anda") : _e("Pilih produk AXA Mandiri sesuai dengan kebutuhan Anda"); 
				?>
			</h4>
					
			<ul class="list-inline-product" class="list-inline-product">
				<li>
					<div class="box-product recommended">
						<div class="bg-thumbnail" style="background:url('<?php echo bloginfo('template_url');?>/images/revamp/sample1.jpg');">
							<div class="icon-product-rec">
								<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-rekomendasi.png" alt="">
							</div>
							<a href="#" id="myBtn" class="btn-hubungi button red block bottom">HUBUNGI SAYA </a>
						</div>
						<div>
							<div class="title-product">
								<h5 style="font-size:1.063em" class="c-blue">Asuransi Mandiri</h5> <p class="c-blue" style="line-height:5px;font-size: 16px;">Jaminan Kesehatan</p>
								
							</div>
							<ul id="list-manfaat">
								<li>Penggantian biaya rawat inap Rumah Sakit maks Rp. 1 Juta/hari</li>
								<li>Penggantian biaya kamar ICU Rumah Sakit maks Rp. 2 Juta/hari</li>
							</ul>
							<a href="#" class="c-red" style="font-size:0.8em;line-height:10px;">INFO SELENGKAPNYA <span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</li>
				
				<li>
					<div class="box-product">
						<div class="bg-thumbnail" style="background:url('<?php echo bloginfo('template_url');?>/images/revamp/sample2.jpg');">
							<a href="#" id="myBtn" class="btn-hubungi button red block bottom">HUBUNGI SAYA </a>
						</div>
						<div>
							<h5 style="font-size:1.063em" class="c-blue">Asuransi Mandiri</h5> <p class="c-blue" style="line-height:5px;font-size: 16px;">Kesehatan Prima</p>
							<ul id="list-manfaat">
								<li>Penggantian biaya rawat inap Rumah Sakit maks Rp. 1 Juta/hari</li>
								<li>Penggantian biaya kamar ICU Rumah Sakit maks Rp. 2 Juta/hari</li>
							</ul>
							<a href="#" class="c-red" style="font-size:0.8em;line-height:10px;">INFO SELENGKAPNYA <span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</li>
				
				<li>
					<div class="box-product">
						<div class="bg-thumbnail" style="background:url('<?php echo bloginfo('template_url');?>/images/revamp/sample3.jpg');">
							<a href="#" class="btn-hubungi button red block bottom">HUBUNGI SAYA </a>
						</div>
						<div>
							<h5 style="font-size:1.063em" class="c-blue">Asuransi Mandiri</h5> <p class="c-blue" style="line-height:5px;font-size: 16px;">Proteksi Kanker</p>
							<ul id="list-manfaat">
								<li>Penggantian biaya rawat inap Rumah Sakit maks Rp. 1 Juta/hari</li>
								<li>Penggantian biaya kamar ICU Rumah Sakit maks Rp. 2 Juta/hari</li>
							</ul>
							<a href="#" class="c-red" style="font-size:0.8em;line-height:10px;">INFO SELENGKAPNYA <span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</li>
				
				<li>
					<div class="box-product">
						<div class="bg-thumbnail" style="background:url('<?php echo bloginfo('template_url');?>/images/revamp/sample1.jpg');">
							<a href="#" class="btn-hubungi button red block bottom">HUBUNGI SAYA </a>
						</div>
						<div>
							<h5 style="font-size:1.063em" class="c-blue">Asuransi Mandiri</h5> <p class="c-blue" style="line-height:5px;font-size: 16px;">Hospitalife</p>
							<ul id="list-manfaat">
								<li>Penggantian biaya rawat inap Rumah Sakit maks Rp. 1 Juta/hari</li>
								<li>Penggantian biaya kamar ICU Rumah Sakit maks Rp. 2 Juta/hari</li>
							</ul>
							<a href="#" class="c-red" style="font-size:0.8em;line-height:10px;">INFO SELENGKAPNYA <span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</li>	
			</ul>
			<br/>
			<ul class="list-inline-product" class="list-inline-product">
				<li>
					<div class="box-product">
						<div class="bg-thumbnail" style="background:url('<?php echo bloginfo('template_url');?>/images/revamp/sample2.jpg');">
							<a href="#" class="btn-hubungi button red block bottom">HUBUNGI SAYA </a>
						</div>
						<div>
							<h5 style="font-size:1.063em" class="c-blue">Asuransi Mandiri</h5> <p class="c-blue" style="line-height:5px;font-size: 16px;">Jaminan Kesehatan</p>
							<ul id="list-manfaat">
								<li>Penggantian biaya rawat inap Rumah Sakit maks Rp. 1 Juta/hari</li>
								<li>Penggantian biaya kamar ICU Rumah Sakit maks Rp. 2 Juta/hari</li>
							</ul>
						</div>
						<a href="#" class="c-red" style="font-size:0.8em;line-height:10px;">INFO SELENGKAPNYA <span class="fa fa-arrow-right"></span></a>
					</div>
				</li>
				
				<li>
					<div class="box-product">
						<div class="bg-thumbnail" style="background:url('<?php echo bloginfo('template_url');?>/images/revamp/sample3.jpg');">
							<a href="#" class="btn-hubungi button red block bottom">HUBUNGI SAYA</a>
						</div>
						<div>
							<h5 style="font-size:1.063em" class="c-blue">Asuransi Mandiri</h5> <p class="c-blue" style="line-height:5px;font-size: 16px;">Kesehatan Prima</p>
							<ul id="list-manfaat">
								<li>Penggantian biaya rawat inap Rumah Sakit maks Rp. 1 Juta/hari</li>
								<li>Penggantian biaya kamar ICU Rumah Sakit maks Rp. 2 Juta/hari</li>
							</ul>
							<a href="#" class="c-red" style="font-size:0.8em;line-height:10px;">INFO SELENGKAPNYA <span class="fa fa-arrow-right"></span></a>
						</div>
					</div>
				</li>				
			</ul>
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
								<?php the_post_thumbnail('matrix_small',  array( 'alt' => get_the_title() ) );  ?>
							</a>
							<div class="title">
								<h2 class="f-14 c-blue"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="details p-all-20">
								<ul class="list-grey">
									<?php $count = 1; while(has_sub_field('matrix_manfaat')): ?>
									<?php if($count < 4): ?>
										<li class="f-12"><?php the_sub_field('title');?></li>
									<?php endif; ?>
									<?php $count++; endwhile;?>
								</ul>
							</div>
							<a href="<?php the_permalink(); ?>" class="view-more bg-greylight4 block text-center p-all-10 f-13 absolute"><i class="fa fa-chevron-circle-right" aria-label="<?php echo get_the_title(); ?>"></i>Lebih Lanjut</a>
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
						<option value="0"><?php _e("Pilih Produk"); ?></option>
						<?php foreach( $posts as $post):?>
							<?php setup_postdata($post); ?>
							<?php $term = wp_get_post_terms( $post->ID, "matrix_section" ); ?>
						<option value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
						<?php endforeach; ?>
					</select>
				<?php wp_reset_postdata();?>
				<button type="submit" class="button blue">Lihat Produk</button>
				<a href="<?php echo site_url('bandingkan-produk');?>" class="button bg-bandingkan"><?php _e("Bandingkan"); ?></a>
			</form>
			<?php endif; ?>

		</section><!--end product listing-->
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
		</script>
		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
	<?php get_template_part("widget/hargaunit");?>
</div><!--end page-container-->

<?php get_template_part("widget/leadform");?>

<?php get_footer();?>
