<?php/** * Template Name: Beli Asuransi Online */?>
<?php get_header();?>
<style>
	.sku-section li {
		float: left; 
	}
</style>
<div id="page-container" style="background-image:url(<?php home_url();?>/wp-content/uploads/2013/12/slide-1.jpg); background-position: 0 -115px;">
	<div id="masthead" class="row relative" style="min-height: 200px;">
		<div class="content large-6">
			<h1 style="color: white;"><?php _e("BELI ONLINE");?></h1>
			<h2 style="color: white !important;" class="c-default">Beli Secara Online produk Asuransi dari solusi AXA Mandiri dan cari produk yang terbaik untuk Anda</h2>
		</div>
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div class="row">
		<section class="sections bg-white clearfix">
			<div class="clearfix">
			</div>
			<ul id="listing-items" class="clearfix desktop-content sku-section">
				<li class="clearfix elements isotope-items" data-category="">
					<div class="box w-244 h-315 radius-all-5 bg-white relative">
						<a href="" class="postThumbnail h-80 block relative">
							<span class="separate-small absolute"></span>
							<img src="<?php home_url();?>/wp-content/uploads/2014/04/Product-Properti-244x80.jpg" alt="" />
						</a>
						<div class="title">
							<h2 class="f-14 c-blue"><a href="">Title Here</a></h2>
						</div>
						<div class="details p-all-20">
							<ul class="list-grey">
								<li class="f-12">Title sub</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="clearfix elements isotope-items" data-category="">
					<div class="box w-244 h-315 radius-all-5 bg-white relative">
						<a href="" class="postThumbnail h-80 block relative">
							<span class="separate-small absolute"></span>
							<img src="<?php home_url();?>/wp-content/uploads/2014/04/Product-Properti-244x80.jpg" alt="" />
						</a>
						<div class="title">
							<h2 class="f-14 c-blue"><a href="">Title Here</a></h2>
						</div>
						<div class="details p-all-20">
							<ul class="list-grey">
								<li class="f-12">Title sub</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
<?php get_template_part("widget/hargaunit");?>
</div>
<?php get_footer();?>