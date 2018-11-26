<?php if(get_field('banner_right', 'options')): ?>
	<?php while(has_sub_field('banner_right', 'options')): ?>
		<a href="<?php the_sub_field('banner_url'); ?>"><img src="<?php the_sub_field('image'); ?>" class="banner" alt="<?php the_sub_field('alt'); ?>"/></a>
	<?php endwhile; ?>
<?php endif; ?>

