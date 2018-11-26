<?php
header("HTTP/1.1 200 OK");
$place = $_GET['post'];

if($place != 0):
include "../../../wp-blog-header.php";
$query = new WP_Query(array( 'post_type' => 'product_matrix',
							 'p' => $place,
					));

$arr = array();

if ( $query->have_posts() ) :
	while ( $query->have_posts() ) : $query->the_post();
		//var_dump($post);

?>
<div class="postwrap radius-all-5 h-198 m-bottom-10 bg-white relative">
	<a href="<?php the_permalink(); ?>" class="postThumbnail h-80 block relative">
		<span class="separate-small absolute"></span>
		<?php the_post_thumbnail('matrix_small');?>
	</a>
	<div class="details p-all-20"><h5 class="f-16 c-blue"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5></div>
	<a href="<?php the_permalink(); ?>" class="view-more bg-bluelight block text-center p-all-10 f-13 absolute w-full">Lebih Lanjut</a>
</div>
<div class="manfaat bg-bluedark h-322 radius-all-5 m-bottom-20 o-hidden">
	<div class="box p-all-15">
		<strong class="block c-white f-13">MANFAAT</strong>
		<ul class="list-grey">
        	<?php while(has_sub_field('matrix_manfaat')): ?>
        	<?php #if($count < 4): ?>
        		<li class="f-13 c-white"><?php the_sub_field('title');?></li>
        	<?php# endif; ?>
        	<?php endwhile;?>
   	 	</ul>
	 	</div>
</div>

<ul id="list-syarat" class="clearfix bandingkan-archive list-style-none m-all-0 cp-list--requirement">
	<?php while (has_sub_field('matrix_syarat2')):?>
		<?php if(get_sub_field('usia_masuk')!=""):?>
		<li class="usia-masuk h-55 m-bottom-10">
			<div class="bg-white o-hidden radius-all-5">
				<span class="icon-68x55"></span>
					<div class="details p-top-10">
						<p class="uppercase f-13 m-bottom-0"><strong>Usia Masuk</strong></p>
						<p class="f-12"><?php the_sub_field('usia_masuk');?></p>
					</div>
			</div>
		</li>
			<?php endif; ?>

			<?php if(get_sub_field('masa_pertanggungan')!=""):?>
		<li class="masa_pertanggungan h-55 m-bottom-10 clearfix">
			<div class="bg-white o-hidden radius-all-5">
				<span class="icon-68x55"></span>
					<div class="details p-top-10">
						<p class="uppercase f-13 m-bottom-0"><strong>Masa Pertanggungan</strong></p>
						<p class="f-12"><?php the_sub_field('masa_pertanggungan');?></p>
					</div>
			</div>
		</li>
		<?php endif; ?>
			<?php if(get_sub_field('mata_uang')!=""):?>
		<li class="mata_uang h-55 m-bottom-10 clearfix">
			<div class="bg-white o-hidden radius-all-5">
				<span class="icon-68x55"></span>
					<div class="details p-top-10">
						<p class="uppercase f-13 m-bottom-0"><strong>Mata Uang</strong></p>
						<p class="f-12"><?php the_sub_field('mata_uang');?></p>
					</div>
			</div>
		</li>
		<?php endif; ?>

			<?php if(get_sub_field('minimum_premi')!=""):?>
		<li class="minimum_premi h-55 m-bottom-10 clearfix">
			<div class="bg-white o-hidden radius-all-5">
				<span class="icon-68x55"></span>
					<div class="details p-top-10">
						<p class="uppercase f-13 m-bottom-0"><strong>Minimum Premi</strong></p>
						<p class="f-12"><?php the_sub_field('minimum_premi');?></p>
					</div>
			</div>
		</li>
		<?php endif; ?>

			<?php if(get_sub_field('pengembalian_premi')!=""):?>
		<li class="pengembalian_premi h-55 m-bottom-10 clearfix">
			<div class="bg-white o-hidden radius-all-5">
				<span class="icon-68x55"></span>
					<div class="details p-top-10">
						<p class="uppercase f-13 m-bottom-0"><strong>Pengembalian Premi</strong></p>
						<p class="f-12"><?php the_sub_field('pengembalian_premi');?></p>
					</div>
			</div>
		</li>
		<?php endif; ?>

			<?php if(get_sub_field('cara_bayar')!=""):?>
		<li class="cara_bayar h-55 m-bottom-10 clearfix">
			<div class="bg-white o-hidden radius-all-5">
				<span class="icon-68x55"></span>
					<div class="details p-top-10">
						<p class="uppercase f-13 m-bottom-0"><strong>Cara Bayar</strong></p>
						<p class="f-12"><?php the_sub_field('cara_bayar');?></p>
					</div>
			</div>
		</li>
			<?php endif; ?>

			<?php if(get_sub_field('family_discount')!=""):?>
		<li class="family_discount h-55 m-bottom-10 clearfix">
			<div class="bg-white o-hidden radius-all-5">
				<span class="icon-68x55"></span>
					<div class="details p-top-10">
						<p class="uppercase f-13 m-bottom-0"><strong>Family Discount</strong></p>
						<p class="f-12"><?php the_sub_field('family_discount');?></p>
					</div>
			</div>
		</li>
		<?php endif; ?>

			<?php if(get_sub_field('jalur_distribusi')!=""):?>
		<li class="jalur_distribusi h-55 m-bottom-10 clearfix">
			<div class="bg-white o-hidden radius-all-5">
				<span class="icon-68x55"></span>
					<div class="details p-top-10">
						<p class="uppercase f-13 m-bottom-0"><strong>Jalur Distribusi</strong></p>
						<p class="f-12"><?php the_sub_field('jalur_distribusi');?></p>
					</div>
			</div>
		</li>
		<?php endif; ?>

	<?php endwhile;?>

	<?php while (has_sub_field('custom_syarat_&_ketentuan')):?>
		<?php if(get_sub_field('content')!=""):?>
			<li class="rekening_reksadana h-55 m-bottom-10 clearfix">
					<div class="bg-white o-hidden radius-all-5">
					<img src="<?php the_sub_field('icon');?>" alt="icon" class="icon-68x55">
						<div class="details p-top-10">
							<p class="uppercase f-13 m-bottom-0"><strong><?php the_sub_field('title'); ?></strong></p>
							<p class="f-12"><?php the_sub_field('content');?></p>

						</div>
				</div>
			</li>
		<?php endif; ?>
		<?php endwhile; ?>
</ul>
<?php
	endwhile;
endif;
else:
?>
<div class="postThumbnail dashed-2 radius-all-5 h-198 m-bottom-10 bg-white">
	<strong class="f-16 text-center block m-top-65">Pilih produk perlindungan AXA untuk dibandingkan</strong>
</div>
<div class="manfaat dashed-2 h-322 radius-all-5 m-bottom-10 bg-white"></div>

<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
<div class="syarat dashed-2 h-55 radius-all-5 m-bottom-10 bg-white"></div>
<?php
endif;
?>
