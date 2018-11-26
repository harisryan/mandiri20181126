	<?php //var_dump(get_field('hide_article')) ?>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'news_small' ); ?>
	<?php endif; ?>

	<?php if ( in_category(array('siaran-pers'))):?>
		<div class="small-12 medium-6 large-3 columns left p-left-10 p-right-10 m-bottom-10 <?php if (get_field('hide_article')) { echo 'hide hide-post'; } ?>">
			<div class="news-bucket siaran-pers h-300 m-bottom-10 o-hidden radius-all-3">
				<div class="box p-top-30 p-lr-20 p-bottom-20">
					<div class="f-16"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
				</div>
				<div class="meta-info absolute bottom-0 w-full p-all-10 cp-pers--one">
					<span class="date f-13 block c-blue m-bottom-5"><?php the_time('j F Y'); ?></span>
					<a href="<?php the_field('pdf_pers');?>" class="block f-13" target="_blank"><i class="fa fa-chevron-circle-right cp-margin--right5"></i>Download</a>
				</div>
			</div>
		</div>
	<?php else:?>
		<div class="small-12 medium-6 large-3 columns left p-left-10 p-right-10 m-bottom-10 <?php if (get_field('hide_article')) { echo 'hide hide-post'; } ?>">
			<div class="news-bucket white h-300 m-bottom-10 o-hidden radius-all-3">
				<div class="postThumbnail h-166 cover relative" style="background:#ebebeb url(<?php echo $image[0]; ?>);">
				</div>
				<div class="cat-name">
					<?php
					$category = get_the_category();
					echo $category[0]->cat_name;
					?>
				</div>
				<p class="f-16 p-all-15 o-hidden lh-1 fw-bold"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
				<div class="meta-info absolute bottom-0 w-full bghorizontal-yellow p-all-10">
					<span class="date f-12 left c-blue"><?php the_time('j F Y'); ?></span>
					<span class="f-12 right"><a href="<?php the_permalink();?>" class="c-blue"><i class="fa fa-chevron-circle-right cp-margin--right5"></i>Selengkapnya</a></span>
				</div>
			</div>
		</div>
	<?php endif;?>
