<?php 
/* Template Name: Custom Template : Video Only */
get_header();
?>

<div id="page-container">	
	<div class="row">
		<section class="white clearfix sections" id="sc-content">
			<a target="_blank" href="https://www.research.net/r/KRJ2018">
			<video autoplay loop width="100%" height="100%">
				<?php the_content();?>
			</video>
			</a>
		</section>
		
	</div>
</div>
<style>
	@media only screen and (max-width: 450px) {
		.row{
			margin-bottom: -10px!important;
			padding: 0!important;
		}
		#page-container .sections{
			padding:0px!important;
		}
	}
	
	#sc-content{
		padding:0px!important;
	}
	 #sc-content img {
		width: 100%;
		margin-top: -20px;
		margin-bottom: -20px;
	 } 
	 #sc-content video {
		width: 100%;
		margin-top: -20px;
		margin-bottom: -25px;
	 } 
</style>
<?php get_footer('ExcludeLivechatOnlineSolution');?>