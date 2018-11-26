<?php 
/* Template Name: Custom Template : Image Only */
get_header();
?>

<div id="page-container">	
	<div class="row">
		<section class="white clearfix sections" id="sc-content">
			<?php the_content();?>
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
	 #sc-content video{
		width: 100%;
		margin-top: -20px;
		margin-bottom: -25px;
	 } 
</style>
<?php get_footer('ExcludeLivechatOnlineSolution');?>