<div id="mainSlider">
		<div class="row box">
			<div class="large-11">
				<ul id="separate" class="personal">
					<li class="selected"><a href="#">Personal</a></li>
					<li><a href="#">Bisnis</a></li>
				</ul>
				<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
			</div>
		</div>
		<ul id="slideContent" class="owl-carousel hide-on-tablet">
			<?php
				$args = array("post_type" => "slide_personal",
							"posts_per_page" =>10,
							'tax_query'=>array(
								array('taxonomy'=>"tipe_layar",
										'field'=>'slug',
										'terms'=>'desktop'
										)
								) );
				query_posts( $args );
				if(have_posts()): while(have_posts()):the_post();
			?>

			<?php if(get_field('video_slide')):?>
			<li class="relative">
				<div class="slideBG">
					 <video class="video-bg" width="100%" loop autoplay>
					    <source src="<?php the_field('video_slide');?>" type="video/webm">
					    <source src="<?php the_field('video_mp4');?>" type='video/mp4'/>
					    <source src="<?php the_field('video_ogv');?>" type="video/ogg"/>
					  </video>
					<div class="row">
						<div class="caption">
							<?php if(get_the_title() != ""): ?>
								<h3 style="color:<?php the_field('color_picker'); ?>"><?php the_title();?></h3>
							<?php endif; ?>
							<?php $slide_url = get_field("slide_url"); ?>
							<a href="<?=(isset($slide_url) && $slide_url != "") ? $slide_url : 'javascript:void(0);'?>" class="playvideo buttons" style="border-color:<?php the_field('color_picker'); ?>;color:<?php the_field('color_picker'); ?>"> <i style="color:<?php the_field('button_color'); ?>;background:<?php the_field('color_picker'); ?>" class="fa fa-chevron-right"></i> <?php the_field("slide_button_text");?></a>
						</div>
					</div>
				</div>
				<iframe title="youtube" id="ytvideo" class="cp-display--none" width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field('slide_video_url');?>?enablejsapi=1&version=3&playerapiid=ytvideo?rel=0&controls=1&fs=0&modestbranding=1&showinfo=0" frameborder="0" wmode="Opaque" allowfullscreen></iframe>

				<a href="#" class="closeVideo cp-display--none">X</a>
			</li>
			<?php elseif(get_field('slider_image')):?>
			<li class="relative">
				<?php if (get_field('use_youtube_video')) {?>
					<a class="various fancybox.iframe" href="https://www.youtube.com/embed/<?php the_field('youtube_id'); ?>?autoplay=1">
				<?php } else { ?>
					<a href="<?php the_field("slide_url");?>">
				<?php }  ?>

					<div class="slideBG lazyOwl" data-src="<?php the_field('slider_image');?>">
						<div class="row">
							<div class="caption">
								<?php if(get_the_title() != ""): ?>
									<h3 style="color:<?php the_field('color_picker'); ?>"><?php the_title();?></h3>
								<?php endif; ?>
								<?php if(get_field('slide_button_text')!=''):?>
									<span class="buttons" style="border-color:<?php the_field('color_picker'); ?>;color:<?php the_field('color_picker'); ?>"> <i style="color:<?php the_field('button_color'); ?>;background:<?php the_field('color_picker'); ?>" class="fa fa-chevron-right"></i> <?php the_field("slide_button_text");?></span>
								<?php endif;?>
							</div>

							<div class="call-action">
								<?php if(get_field('headline_message') != ''): ?>
								<div class="headline_message">
									<img style="width: 25px;margin-top: -8px" src="<?php echo home_url(); ?>/wp-content/themes/axamandiri/images/widget/red-separator.png" alt="text-identity">
									<?php the_field('headline_message') ?>
								</div>
								<?php endif; ?>

								<?php if(get_field('call_to_action') != ''): ?>
								<div class="call_to_action"><?php the_field('call_to_action') ?></div >
								<?php endif; ?>

								<?php if(get_field('merchant_partner') != ''): ?>
								<img class="merchant_partner" src="<?php the_field('merchant_partner') ?>" alt="Merchant Partner">
								<?php endif; ?>

								<?php if(get_field('skb_show')): ?>
									<div class="syarat_dan_ketentuan"><?php _e('*Syarat & ketentuan berlaku.'); ?></div>
								<?php endif; ?>


							</div>

						</div>
					</div>
				</a>
			</li>
			<?php endif;?>
			<?php endwhile;?>
		</ul>
		<?php endif;?>

		<ul id="mobile-slide" class="tablet-content owl-carousel">
			<?php
				$args = array("post_type" => "slide_personal",
							"posts_per_page" =>8,
							'tax_query'=>array(
													array('taxonomy'=>"tipe_layar",
															'field'=>'slug',
															'terms'=>'mobile'
															)
													) );
				query_posts( $args );
				if(have_posts()): while(have_posts()):the_post();
			?>
			<?php if(get_field('video_slide')):?>
			<li class="relative">

				<div class="slideBG lazyOwl" data-src="<?php the_field('slider_image');?>">
					<div class="video-bg"></div>
					<div class="row">
						<div class="caption">
							<?php if(get_the_title() != ""): ?>
								<h3 style="color:<?php the_field('color_picker'); ?>"><?php the_title();?></h3>
							<?php endif; ?>
							<?php $slide_url = get_field("slide_url"); ?>
							<a href="<?=(isset($slide_url) && $slide_url != "") ? $slide_url : 'javascript:void(0);'?>" class="playvideo buttons" style="border-color:<?php the_field('color_picker'); ?>;color:<?php the_field('color_picker'); ?>"> <i style="color:<?php the_field('button_color'); ?>;background:<?php the_field('color_picker'); ?>" class="fa fa-chevron-right"></i> <?php the_field("slide_button_text");?></a>
						</div>
					</div>
				</div>
				<iframe title="Ytvideo Mobile"> id="ytvideo-mobile" class="cp-display--none" width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field('slide_video_url');?>?enablejsapi=1&version=3&playerapiid=ytvideo-mobile&rel=0&controls=1&fs=0&modestbranding=1&showinfo=0&autoplay=0" frameborder="0" wmode="Opaque" allowfullscreen></iframe>
				<a href="#" class="closeVideo" class="cp-display--none">X</a>
			</li>
			<?php elseif(get_field('slider_image')):?>
			<li class="relative">

					<?php if (get_field('use_youtube_video')) {?>
						<a class="various fancybox.iframe" href="https://www.youtube.com/embed/<?php the_field('youtube_id'); ?>?autoplay=1">
					<?php } else { ?>
						<a href="<?php the_field("slide_url");?>">
					<?php }  ?>
						<div class="slideBG"  style="background-image:url(<?php the_field('slider_image');?>);">
							<div class="row">
								<div class="caption">
									<?php if(get_the_title() != ""): ?>
										<h3 style="color:<?php the_field('color_picker'); ?>"><?php the_title();?></h3>
									<?php endif; ?>
									<?php if(get_field('slide_button_text')!=''):?>
									<span class="buttons" style="border-color:<?php the_field('color_picker'); ?>;color:<?php the_field('color_picker'); ?>"> <i style="color:<?php the_field('button_color'); ?>;background:<?php the_field('color_picker'); ?>" class="fa fa-chevron-right"></i> <?php the_field("slide_button_text");?></span>
									<?php endif; ?>
								</div>

								<div class="call-action">
									<?php if(get_field('headline_message') != ''): ?>
									<div class="headline_message">
										<img src="<?php echo home_url(); ?>/wp-content/themes/axamandiri/img/Supergrafis.png" alt="text-identity">
										<?php the_field('headline_message') ?>
									</div>
									<?php endif; ?>

									<?php if(get_field('call_to_action') != ''): ?>
									<div class="call_to_action"><?php the_field('call_to_action') ?></div >
									<?php endif; ?>

									<?php if(get_field('merchant_partner') != ''): ?>
									<img class="merchant_partner" src="<?php the_field('merchant_partner') ?>" alt="Merchant Partner">
									<?php endif; ?>

									<?php if(get_field('skb_show')): ?>
									<div class="syarat_dan_ketentuan"><?php _e('*Syarat & ketentuan berlaku.'); ?></div>
									<?php endif; ?>
								</div>

							</div>
						</div>
					</a>
				
			</li>

			<?php endif;?>
			<?php endwhile;?>

		</ul>
		<?php endif;?>
	</div>

<style>

	.headline_message {
	    font-size: 36px;
	    line-height: 1;
	    font-family: MyriadProRegular,"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;
	    color: #053584;
	}

	.call_to_action {
	    font-size: 96px;
	    font-weight: 700;
	    padding: 0;
	    color: #053584 !important;
	    margin: 0;
	    line-height: 1;
	    font-family: MyriadPro-Semibold,"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;
	}

	.call-action img.merchant_partner{
		width: 200px;
		max-height: 200px;
		margin-top: 10px;
	}

	.syarat_dan_ketentuan{
		margin-top: 30px;
		font-size: 12px;
		color:#444 !important;
	}

	.call-action{
		width: 500px;
	    float: right;
	    text-align: right;
	    margin-top: 115px;
	    margin-right: 50px;
	}

	@media screen and (max-width: 768px){
		.headline_message{
			font-size: 18px;
		}
		.call_to_action{
			font-size: 52px;
		}
		.call-action img.merchant_partner{
			width: 100px;
			max-height: 100px;
		}
		.call-action{
			margin-top: 50px;
		    margin-right: 35px;
		    width: 250px;
		}

		.syarat_dan_ketentuan{
			font-size: 10px;
		}
	}

</style>