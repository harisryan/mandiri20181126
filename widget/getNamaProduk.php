<?php
$slug = $_GET['place'];

include "../../../wp-blog-header.php";
echo "<option disabled=\"disabled\" value=\"\" selected=\"selected\">Pilih Produk</option>";
$query = new WP_Query(array( 'post_type' => 'product_matrix',
							 'direktori_entity' => $slug,
							 'orderby' => 'title',
							 'post_per_page'=>-1,
							 'order' => ASC
				));
$arr = array();
if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); 
		
		$terms = wp_get_post_terms( $post->ID, 'direktori_entity');

		foreach($terms as $term)
		{
			array_push($arr, array($term->name, $term->slug));
		}

	endwhile;

	sort($arr);

	$temp = "";
	foreach($arr as $row)
	{
		if($temp != $row[1])
			echo "<option value=\"".$row[1]."\">".$row[0]."</option>";

		$temp = $row[1];
	}

endif;



?>