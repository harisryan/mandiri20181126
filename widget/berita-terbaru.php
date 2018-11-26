<div id="berita-terbaru" class="bg-greylight radius-all-5 h-255 text-left relative">
	<div class="box p-all-20">
	<div class="home_news_h4 f-18 c-blue m-bottom-20"><?php /* _e("<!--:en-->LATEST NEWS<!--:--><!--:id-->BERITA TERBARU<!--:-->"); */
												 _e("BERITA TERBARU"); ?></div>
		<ul class="clearfix list-style-none m-all-0">
			<?php
				$args = array("post_type" => "post","posts_per_page" =>2, 'category_name' => 'berita');
				query_posts( $args );
				if(have_posts()): while(have_posts()):the_post();
			?>
			<li class="clearfix">
				<p class="date"><?php the_time('d/m/y'); ?></p>
				<div class="home_list_news_h5"><a href="<?php the_permalink();?>" title="<?php the_title();?>">  <?php the_title();?></a></div>
			</li>
			<?php endwhile;?>
		</ul>
		<?php endif;?>
		<?php wp_reset_query(); ?>

		<a href="<?php echo site_url('media');?>" class="right absolute bottom-20 right-20 f-12 c-default fw-bold"><?php /* _e("<!--:en-->See all news<!--:--><!--:id-->Lihat semua berita <!--:-->"); */
																															_e("Lihat semua berita "); ?>&raquo;</a>
	</div>
</div>
