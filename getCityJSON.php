<?php
/*
Template Name: Get City JSON
*/

$tax = array('direktori_wilayah');
$args = array('order' => 'ASC', 'hide_empty' => true);
$term = get_terms( $tax, $args);

$html = '';

foreach($term as $term_tax)
{
	$name = $term_tax->name;
	$slug = $term_tax->slug;
	$html .= "<option value=\"".$slug."\">".$name."</option>";
}

echo json_encode([
	'result' => $html
]);