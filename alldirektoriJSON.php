<?php
/*
Template Name: All Direktori JSON
*/
?>
<?php 
	global $wpdb,$keyword;

	$keyword = ($_GET['q']) ? $_GET['q'] : '';
	$type = ($_GET['t'] && $_GET['t'] != 'all') ? array($_GET['t']) : array("rumah_sakit","kantorcabang");
	$tax = ($_GET['tax']) ? $_GET['tax'] : '';
	$wilayah = ($_GET['wilayah']) ? $_GET['wilayah'] : '';
	$providers = ($_GET['providers']) ? $_GET['providers'] : '-1';
	$nama_produk = ($_GET['nama_produk']) ? $_GET['nama_produk'] : '-1';
	$x =($_GET['x']) ? $_GET['x'] :'';
	$y =($_GET['y']) ? $_GET['y'] :'';
	$args = array();
	$new_array_post_id = array();
?>
<?php 
header('Content-Type: application/json');
if($wilayah != '' && $keyword == ''){
	$args = array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 'direktori_wilayah' => $wilayah );
	//$query = new WP_Query( array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 'direktori_wilayah' => $wilayah ));
}elseif($wilayah != '' && $keyword != ''){ 
	$args = array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 's' => $keyword, 'direktori_wilayah' => $wilayah );
	//$query = new WP_Query( array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 's' => $keyword, 'direktori_wilayah' => $wilayah ));
}elseif($tax != '' && $keyword == ''){
	$args = array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 'direktori_entity' => $tax );
	//$query = new WP_Query( array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 'direktori_entity' => $tax ));
}elseif($tax != '' && $keyword != ''){
	$args = array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 's' => $keyword, 'direktori_entity' => $tax );
	//$query = new WP_Query( array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 's' => $keyword, 'direktori_entity' => $tax ));
}elseif(isset($keyword) && $keyword != ''){
	$args = array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 's' => $keyword );
	//$query = new WP_Query( array( 'post_type' => $type, 'orderby' => 'title', 'order' => ASC, 'nopaging' => true, 's' => $keyword ));
}else{
	$args = array( 'post_type' => array('rumah_sakit','bengkel'),'orderby' => 'title', 'order' => ASC, 'nopaging' => true );
	//$query = new WP_Query( array( 'post_type' => array('rumah_sakit','bengkel'),'orderby' => 'title', 'order' => ASC, 'nopaging' => true ));
}
if ($x !='' && $y !='') {
	$post_id_and_distance=$wpdb->get_results("SELECT post_id, post_title, ( 6371 * ACOS( COS( RADIANS($x))*COS(RADIANS(latitude))*COS(RADIANS(longitude)-RADIANS($y))+SIN(RADIANS($x))*SIN(RADIANS(latitude)))) AS distance
																	FROM  `directory_coordinates` 
																	ORDER BY  `distance` ASC");	
	$post_id_and_distance = array_splice($post_id_and_distance, 0);	
	
	foreach($post_id_and_distance as $row => $value)
	{
		$new_array_post_id[] = intval($value->post_id);
		// $args = array(
		//    'post_type' 		=> array('rumah_sakit','bengkel'),
		//    'post__in'      	=> $new_array_post_id,
		//    'posts_per_page' => 10,
		//    'orderby' 		=> 'post__in',
		//    'order'			=> ASC,
		//    'paged'			=> $paged
		// );
	}

	$args['post__in'] = $new_array_post_id;
	$args['orderby'] = 'post__in';
	$args['paged']=$paged;
	$args['order']=ASC;
}
if($providers != '-1') {
	$args["tax_query"] = array(
								array(
									'taxonomy' => 'providers',
									'terms' => $providers
								)
							);
}
if($nama_produk != '-1') {
	$args["meta_query"] = array(
								array(
									'key' => 'nama_produk', // name of custom field
									'value' => '"'.$nama_produk.'"', // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							);
}
add_filter('posts_join', 'directory_search_join' );
add_filter('posts_where', 'directory_search_where' );
	$query = new WP_Query( $args );
remove_filter('posts_join', 'directory_search_join' );
remove_filter('posts_where', 'directory_search_where' );

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
				$wpurl = site_url();		
				if ($post->post_type == "rumah_sakit") {
				array_push($output, array('latLng'=>$coord,'data'=>$data, 'options'=>array('iconpng'=>$wpurl.'/wp-content/themes/axamandiri/images/marker-rs.png')));
				} else if ($post->post_type == "bengkel") {
				array_push($output, array('latLng'=>$coord,'data'=>$data, 'options'=>array('iconpng'=>$wpurl.'/wp-content/themes/axamandiri/images/marker-bengkel.png')));
				}else{
					array_push($output, array('latLng'=>$coord,'data'=>$data, 'options'=>array('iconpng'=>$wpurl.'/wp-content/themes/axamandiri/images/marker-kantor.png')));
				}


		endwhile;
		
	endif;  
	echo json_encode($output);

 ?>