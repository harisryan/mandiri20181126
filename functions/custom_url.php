<?php

add_action('init', function() {
	//Load Kota
	// custom_url('get-city', 'functions/load_kota.php');
});

function custom_url($slug, $file)
{
	$url_path = trim(parse_url(add_query_arg(array()), PHP_URL_PATH), '/');

  	if ( $url_path === $slug || $url_path == "axa-mandiri/".$slug ) {
		// load the file if exists
		$load = locate_template($file, true);
		
		if ($load) {
			exit(); // just exit if template was found and loaded
		}
  	}
}