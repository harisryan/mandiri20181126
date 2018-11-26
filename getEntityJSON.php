<?php
/*
Template Name: Entity Produk JSON
*/

$no_polis = htmlentities($_GET['no_polis']);

if (preg_match('/^001-000|001-001|001-002|001-003/', $no_polis)) {
	$entity = "AMFS";	
} elseif(preg_match('/^100-101/', $no_polis)) {
	$entity = "AMFS";	
} elseif(preg_match('/^100-102/', $no_polis)) {
	$entity = "AMFS";			
} elseif(preg_match('/^100-103/', $no_polis)) {
	$entity = "AMFS";			
} elseif(preg_match('/^100-104/', $no_polis)) {
	$entity = "AMFS";			
} elseif(preg_match('/^100-105/', $no_polis)) {
	$entity = "AMFS";			
} elseif(preg_match('/^100-106/', $no_polis)) {
	$entity = "AMFS";			
} elseif(preg_match('/^100-108/', $no_polis)) {
	$entity = "AMFS";	
} elseif(preg_match('/^310-|311-|510-|511-|512-|513-/', $no_polis)) {
	$entity = "AMFS";		
} elseif(preg_match('/^813-4|8134/', $no_polis)) {
	$entity = "AMFS";		
} elseif(preg_match('/^813-3|8133/', $no_polis)) {
	$entity = "AMFS";	
} elseif (preg_match('/^102-|103-|104-|105-|106-|107-|108-|109-|110-/',$no_polis)) {
	$entity = "MAGI";	
} else{
	$entity = "";
}

echo json_encode(array('entity' => $entity));
exit();
?>