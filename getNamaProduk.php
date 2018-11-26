<?php
$slug = $_GET['place'];

include "../../../wp-blog-header.php";
echo "<option disabled=\"disabled\" value=\"\" selected=\"selected\">Pilih Produk</option>";
$query = new WP_Query(array( 'post_type' => 'product_matrix',
							 'direktori_entity' => $slug,
							 'orderby' => 'title',
							 'order' => ASC,
							 'hide_empty' => false,
							 'posts_per_page' => -1 ));
// $arr = array();
// var_dump($query);
query_posts($query);
// var_dump(query_posts($query));
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<option value="<?php echo $post->post_title;?>"><?php the_title();?></option>
<?php
	
	endwhile;

	// sort($arr);

	// $temp = "";
	// foreach($arr as $row)
	// {
	// 	if($temp != $row[1])
	// 		echo "<option value=\"".$row[1]."\">".$row[0]."</option>";

	// 	$temp = $row[1];
	// }

endif;



?>