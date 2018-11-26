<?php
get_header();
?>
<div class="page-container">

	<!-- component -->
	<div class="agency-team-cmpnt">

		<div class="row p-all-0">

			<div class="agency-team-experts">

				<?php 
				while ( have_posts() ) : the_post(); 

				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) , 'large');
				$promoCode = get_field("promo_code"); 
				$periodeMulai = get_field("periode_mulai"); 
				$periodeBerakhir = get_field("periode_berakhir"); 
				$promoLink = get_field("periode_link"); 	
				?>
				
				<div class="agency-team-expert">	
					<a href="<?php echo get_the_permalink(); ?>">
					<div class="agency-team-expert-picture" style=" background-image: url('<?php echo $thumbnail[0]; ?>'); "></div>
					</a>
					<h5 class="agency-team-profession">
						<span class="icon" style="float: left;margin-right: 10px;">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 213.888 213.888"><path d="M152.886,45.949c-7.453,0-14.577,1.41-21.184,3.873v12.096c6.059-2.886,12.695-4.707,19.808-4.905v4.838h1.145    l-7.38,14.77h5.006v30.339c0,0.244,0.2,0.408,0.268,0.633c0.049,0.22-0.043,0.451,0.085,0.658l9.969,17.263l-4.33,2.503    l14.206,9.377l-1.022-16.988l-4.33,2.502l-9.62-16.653V76.621h5.005l-7.38-14.77h1.108l0.024-4.838    c8.086,0.222,15.643,2.46,22.347,6.116l-2.362,4.077l2.387,1.364l2.381-4.144c6.68,4.113,12.27,9.7,16.386,16.386l-4.135,2.398    l1.37,2.357l4.062-2.357c3.654,6.717,5.889,14.261,6.132,22.348h-4.841v2.74h4.841c-0.243,8.104-2.478,15.655-6.132,22.371    l-4.062-2.362l-1.357,2.375l4.128,2.393c-4.128,6.68-9.724,12.27-16.397,16.386l-2.387-4.128l-2.363,1.352l2.351,4.08    c-6.716,3.653-14.248,5.9-22.347,6.113v-4.829h-2.74v4.829c-7.112-0.188-13.768-2.01-19.82-4.908v12.105    c6.606,2.46,13.73,3.873,21.184,3.873c33.631,0,61.002-27.365,61.002-61.014C213.888,73.311,186.517,45.949,152.886,45.949z" fill="#7f7f7f"/>
		<path d="M107.851,34.072H14.578C6.534,34.072,0,40.6,0,48.644v116.601c0,8.044,6.534,14.571,14.578,14.571h93.273    c8.05,0,14.577-6.527,14.577-14.571V48.644C122.428,40.606,115.901,34.072,107.851,34.072z M113.076,165.25    c0,2.881-2.344,5.219-5.225,5.219H14.578c-2.88,0-5.225-2.338-5.225-5.219V48.65c0-2.88,2.344-5.219,5.225-5.219h93.273    c2.88,0,5.225,2.338,5.225,5.219V165.25z" fill="#7f7f7f"/>
		<path d="M100.1,73.917H22.329c-1.48,0-2.676,1.185-2.676,2.673c0,1.492,1.19,2.682,2.676,2.682H100.1    c1.486,0,2.676-1.19,2.676-2.682C102.776,75.101,101.585,73.917,100.1,73.917z" fill="#7f7f7f"/>
		<path d="M100.1,86.125H22.329c-1.48,0-2.676,1.19-2.676,2.673c0,1.48,1.19,2.677,2.676,2.677H100.1    c1.486,0,2.676-1.19,2.676-2.677C102.776,87.316,101.585,86.125,100.1,86.125z" fill="#7f7f7f"/>
		<path d="M100.1,98.322H22.329c-1.48,0-2.676,1.197-2.676,2.68c0,1.485,1.19,2.676,2.676,2.676H100.1    c1.486,0,2.676-1.19,2.676-2.676C102.776,99.519,101.585,98.322,100.1,98.322z" fill="#7f7f7f"/>
		<path d="M69.368,110.528H22.329c-1.48,0-2.676,1.199-2.676,2.68c0,1.485,1.19,2.679,2.676,2.679h47.033    c1.482,0,2.673-1.182,2.673-2.679C72.041,111.727,70.844,110.528,69.368,110.528z" fill="#7f7f7f"/>
		<path d="M60.146,134.635H22.329c-1.48,0-2.676,1.187-2.676,2.673c0,1.485,1.19,2.679,2.676,2.679h37.817    c1.482,0,2.673-1.188,2.673-2.679C62.819,135.822,61.628,134.635,60.146,134.635z" fill="#7f7f7f"/></svg>
						</span>
						<?php
						echo date('d M Y', strtotime($periodeMulai)) ?> - <?php echo date('d M Y', strtotime($periodeBerakhir));
						?>
					</h5>
					<a href="<?php echo get_the_permalink(); ?>">
					<?php the_title('<h3 class="agency-team-expert">',"</h3>"); ?>
					</a>
					<p class="agency-team-expert-description">
						<?php echo CustomExcerpt(20); ?>
					</p>
					<a href="<?php echo get_the_permalink(); ?>" class="link red agency-team-expert-link">
						View Detail
						<svg class="icon right" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 32 32"><path d="M18.8 5.733c-0.8 0.8-0.8 2.067 0 2.8l5.467 5.467h-21.333c-2.6 0-2.6 4 0 4h21.333l-5.467 5.467c-1.8 1.8 1 4.667 2.8 2.8l8.867-8.867c0.8-0.733 0.8-2.067 0-2.8l-8.867-8.867c-0.733-0.8-2-0.8-2.8 0z"></path></svg>
					</a>
				</div>

				<?php endwhile; ?>

			</div>
			
			

		</div>

	</div>
	<!-- / component -->

</div>
<?php
get_footer();
