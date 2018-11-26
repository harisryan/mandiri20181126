<?php/** * Template Name: Media:twitter */?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/header-berita.jpg);"></div>
		<div class="content large-6">
			<h1>Media</h1>
			<h2 class="cp-color--white">Cari tahu informasi dan berita terbaru mengenai AXA Mandiri</h2>
		</div><!--end large 6-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->
	<div class="row">
		<section class="bg-white3 clearfix radius-top-5">
			<div class="sections">
				<h3 class="f-24"><?php /* _e("<!--:en-->AXA Mandiri Tweets<!--:--><!--:id-->Twitter AXA Mandiri<!--:-->"); */
										 	_e("Twitter AXA Mandiri"); ?></h3>
				<ul id="media-nav" class="clearfix small-block-grid-1 medium-block-grid-1 large-block-grid-3">
					<li class="semua uppercase"><a href="<?php echo site_url('media');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline">Semua</strong></a></li>
					<li class="berita uppercase"><a href="<?php echo site_url('media/berita');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline">Berita</strong></a></li>
					<li class="tweet uppercase selected"><a href="<?php echo site_url('media/tweet');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline">Tweet</strong></a></li>
				</ul>
			</div>
		</section>
		<section class="bg-white4">
			<div class="sections clearfix">
			<div id="blog">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array("post_type" => "post","posts_per_page" =>12, 'paged' => $paged, 'category_name'=>'tweet');
				query_posts( $args );
				if(have_posts()): while(have_posts()):the_post();
			?>
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'news_small' ); ?>
				<?php endif; ?>

				<?php if ( in_category(array('tweet'))):?>
				<div class="news-bucket tweet bg-bluetweet h-280 m-bottom-10 o-hidden w-240 radius-all-3">
					<div class="box p-all-20">
						<div class="f-16"><?php the_content();?></div>
					</div>
					<div class="meta-info absolute bottom-0 w-full p-all-10">
						<img src="<?php bloginfo('template_url');?>/images/logo-twitter-axa.jpg" class="left m-right-5">
						<div class="details">
							<span class="c-bluetwitter f-14 fw-bold block m-bottom-5">@AXAIndonesia</span>
							<span class="date f-12 block"><?php the_time('j F Y'); ?></span>
							<i class="fa fa-twitter f-30 absolute right-0 top-15 c-bluetwitter"></i>
						</div>
					</div>
				</div>
				<?php else:?>
				<div class="news-bucket white h-300 m-bottom-10 o-hidden w-240 radius-all-3">
					<div class="postThumbnail h-166 cover" style="background:#ebebeb url(<?php echo $image[0]; ?>);"><a class="block" href="<?php the_permalink();?>"></a></div>
					<p class="f-16 p-all-15 o-hidden lh-1 fw-bold"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
					<div class="meta-info absolute bottom-0 w-full bg-grey p-all-10">
						<span class="date f-12 left"><?php the_time('j F Y'); ?></span>
						<span class="f-12 right"><a href="<?php the_permalink();?>" class="c-red">Selengkapnya</a></span>
					</div>
				</div>
					<?php endif;?>
					<?php $image = ""; endwhile;?>
				</div>

			<?php endif;?>

			<div class="pagination text-center m-top-20 block"> <?php wp_pagenavi(); ?></div>
			</div>
		</section>

		<section id="contact-section" class="clearfix background-vector relative no-border">

			<div class="large-4 columns show-for-large-only first-child">
                <h4>Hubungan Media</h4>
                <p>Untuk informasi serta data lain yang bersifat peliputan media mengenai produk, layanan, maupun aktivitas AXA Mandiri, Anda dapat menghubungi bagian Corporate Communications. <br> Kirim permintaan Anda dan kami akan mengirimkan media kit kami</p>
				<a class="button blue small left" href="<?php echo site_url('hubungi-kami');?>">Hubungi Kami</a>

	        </div>
			<div class="right large-7">
				<div class="large-6 columns bg-greydark radius-all-5 w-48p">
					<div class="box p-all-15">
						<strong class="block m-bottom-10">Asuransi Jiwa</strong>
						<span>Luile Sawitri</span><br/>
						<ul class="clearfix">
							<li class="telepon">+62 21 3005 8888</li>
							<li class="fax">+62 21 3005 8500</li>
							<li class="mail"><a href="mailto:Luile.sawitri@axa-mandiri.co.id" class="c-default">Luile.sawitri@axa-mandiri.co.id</a></li>
						</ul>
					</div>
				</div>
				<div class="large-6 columns bg-greydark radius-all-5 w-48p">
					<div class="box p-all-15">
						<strong class="block m-bottom-10">Asuransi Umum</strong>
						<span>Bonifacio Renanda</span><br/>
						<ul class="clearfix">
							<li class="telepon">+62 21 30057612</li>
							<li class="fax">+62 21 30057600</li>
							<li class="mail"><a href="mailto:bonifacio.renanda@axa-mandiri.co.id " class="c-default">bonifacio.renanda@axa-mandiri.co.id</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
</div>
<?php get_footer();?>
