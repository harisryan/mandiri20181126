<div id="social-media">
	<div class="box">
		<h4><?php /* _e("<!--:en-->CONNECT WITH AXA Mandiri<!--:--><!--:id-->TERHUBUNG DENGAN AXA Mandiri<!--:-->"); */
					 _e("TERHUBUNG DENGAN AXA Mandiri"); ?></h4>
			<p class="border-bottom"><?php /* _e("<!--:en-->Follow and join AXA Mandiri account to receive news updates and events from AXA Mandiri <!--:--><!--:id-->Follow dan bergabung dengan akun AXA Mandiri untuk mendapat update berita dan event dari AXA Mandiri<!--:-->"); */
												_e("Follow dan bergabung dengan akun AXA Mandiri untuk mendapat update berita dan event dari AXA Mandiri"); ?></p>
			<?php if(get_field('axa_indonesia_socmed', 'options')): ?>
				<?php while(has_sub_field('axa_indonesia_socmed', 'options')): ?>
				<div class="social-icons">
					<a href="<?php the_sub_field('facebook'); ?>" class="icons facebook"><i class="fa fa-facebook"></i></a>
					<a href="<?php the_sub_field('twitter'); ?>" class="icons twitter"><i class="fa fa-twitter"></i></a>
					<a href="<?php the_sub_field('youtube'); ?>" class="icons youtube"><i class="fa fa-youtube-play"></i></a>
					<a href="<?php the_sub_field('linkedin'); ?>" class="icons linkedin"><i class="fa fa-linkedin"></i></a>
				</div>
				<?php endwhile;?>
			<?php endif;?>

	</div>
</div>