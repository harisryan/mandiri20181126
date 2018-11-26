<h3 role="heading" aria-level="3" class="c-blue f-16 uppercase">Berita Terbaru</h3>
<ul class="list-with-arrow">
	<?php
		$args1 = array("post_type" => "post","posts_per_page" =>5, 'category_name'=>'berita ,video');
		query_posts( $args1 );
		if(have_posts()): while(have_posts()):the_post();
	?>
	<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
<?php endwhile;?>
</ul>
<?php endif; wp_reset_query(); wp_reset_postdata();?>
