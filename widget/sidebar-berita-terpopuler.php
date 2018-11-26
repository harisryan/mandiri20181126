<h3 class="c-blue f-16 uppercase">Berita Terpopuler</h3>
<ul class="list-with-arrow">
	<?php 
		$query_args  = array(
			'cat' => 1214,
			'post_type' => 'post',
			'orderby' => 'meta_value',
			'order' => 'DESC',
			'posts_per_page' => 5,
			'meta_query' => array(
			    'relation' => 'OR',
			     array(
			        'key' => 'Likes',
			        'compare' => 'NOT EXISTS'
			     ),
			     array(
			        'key' => 'Likes',
			        'compare' => 'EXISTS'
			     )
			 )
		);
		$loop = new WP_Query($query_args);
		if ($loop->have_posts()):
			while($loop->have_posts()):
				$loop->the_post(); ?>
				<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
<?php 		endwhile; ?>
</ul>
<?php 	endif; ?>

