<?php
/*
Template Name: Product JSON
*/
?>
<?php 
header('Content-Type: application/json');
$query = new WP_Query( 'post_type=product_matrix&direktori_entity='.$_GET['entity'].'&post_per_page=-1' );
    
if ( $query->have_posts() ) : 
	$output = array();
	while ( $query->have_posts() ) : $query->the_post(); 
		
			$location = get_field('rs_map');
			$coord = explode(",", $location['coordinates']);
			$data = '<div class="infowindow-data">
						<strong class="c-blue f-16 block m-bottom-10">'.get_the_title().'</strong>
						<div class="icon left '.get_post_type( $post_id ).'"><span></span></div>
						<div class="details left m-left-10 f-12">
							<div class="addressSmall">'.get_field('rs_alamat').'</div>
							<div class="phoneSmall">Phone: '.get_field('rs_telepon').'</div>
							<div class="faxSmall">Fax: '.get_field('rs_fax').'</div>
						</div>
					</div>';
			array_push($output, array('latLng'=>$coord,'data'=>$data, 'options'=>array('icon'=>'http://sudahdistaging.com/axamandiri/wp-content/themes/axamandiri/images/marker-rs.png')));
		

	endwhile;
	
endif;  

echo json_encode($output);

 ?>