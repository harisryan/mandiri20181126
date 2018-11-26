<?php 
/* Template Name: Wanita Juara */
get_header();
?>

<div id="page-container">	
	<div class="row">
		<section class="white clearfix sections">
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
</style>
<?php get_footer();?>