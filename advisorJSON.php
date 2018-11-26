<?php
/*
Template Name: Produk Advisor JSON
*/
?>
<?php 
	global $wpdb,$keyword;
	// $produk=explode(',', $_GET['produk']);
	$p=($_GET['produk']) ? $_GET['produk'] :'';
	$produk=explode(',', $p);
	// var_dump($produk);
?>
<?php 
// header('Content-Type: application/json');
// if (isset($_GET['produk'])) {
	
// }

// $args=array('post_type' => 'product_matrix',
// 				'p'=>array(3335, 1951));
// $query = new WP_Query($args);
if ($p!='') {
	$query = new WP_Query( array( 'post_type' => 'product_matrix', 'post__in' =>$produk ) );
}else{
	$query = new WP_Query( array( 'post_type' => 'product_matrix', 'posts_per_page'=>-1 ) );	
}
// echo '<pre>';
// var_dump($query);
// //echo $myquery->request;


	if ( $query->have_posts() ) : 
		$output = array();
		while ( $query->have_posts() ) : $query->the_post(); 
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'matrix_small' );
				// var_dump($src);
				$title=get_the_title();
			
				$post = get_post($query->ID);
				$slug = $post->post_name;
				$count = 1; 
				$manfaat=array();
				
				$terms = wp_get_post_terms($post->ID, 'matrix_entity');
				$entity = '';
				// echo "<pre>";
				// var_dump($terms);
				foreach($terms as $term){
					$entity = $term->slug;
				}
				
				$solusi_category = wp_get_post_terms($post->ID, 'matrix_category');
				$solusi = '';
				// echo "<pre>";
				// var_dump($terms);
				foreach($solusi_category as $category){
					$solusi = $category->slug;
				}

				if ( $solusi == "solusi-kesehatan" ) {
			        $product_label = "Health";
			    } elseif ( $solusi == "solusi-proteksi" ) {
			        $product_label = "Protection";
			    } elseif ( $solusi == "solusi-invest" ) {
			        $product_label = "Others::Credit_Protection";
			    } elseif ( $solusi == "solusi-umum" ) {
			        $product_label = "General";
			    } else {
			        $product_label = "Travel";
			    }

				while(has_sub_field('matrix_manfaat')):
	            	
	            		$arr_manfaat=get_field('matrix_manfaat');
						foreach ($arr_manfaat as $key) {
							if($count < 4):
								// echo $key['title'];
								array_push($manfaat, $key['title']);
							endif;
	            		$count++; 
						}
	            	
            	endwhile;
				array_push($output, array('title'=>$title,'thumbnail'=>$thumbnail[0],'slug'=>$slug, 'ID'=>$post->ID,'entity'=>$entity, 'manfaat'=>$manfaat, 'solusi'=>$solusi, 'product_label' => $product_label));

				// if ($post->post_type == "rumah_sakit") {
				// } else {
				// array_push($output, array('latLng'=>$coord,'data'=>$data, 'options'=>array('iconpng'=>'https://axa.co.id/wp-content/themes/axaindonesia/images/marker-bengkel.png')));
				// }


		endwhile;
		
	endif;  
	echo json_encode($output);

 ?>