<?php
/*
 *	qCleaner is a script for undoing the mangling of content
 *	done by the qTranslate wordpress plugin. It retains the content in the language,
 *	while removing all other content translations.
 *
 *	Set your wordpress database credentials and language code for the language
 *	that you wish to retain, and run the script to remove all other language versions
 *	of your content, along with the qTranslate HTML comment markers.
 *
 *	This free software by Jonathan Weatherhead is provided as is and may be freely distributed,
 *	provided that no charge is levied, and that this disclaimer is always attached to it.
 *
 *	Jonathan Weatherhead http://jonathanweatherhead.com
 */

//***set these variables***

//the ip address of your database, and the database that wordpress is installed on
define('DB_HOST', 'mysql:host=localhost;dbname=axamandiri_live');

//a database user with sufficient credentials to SELECT and UPDATE the wordpress table
define('DB_USER', 'root');

//the password of said user
define('DB_PASS', '');

//the table where the wordpress content is stored. Don't change unless you are running a multi-site.
define('POST_TABLE', 'wp_posts');

//The qTranslate code for the language that you would like to keep
define('PRESERVE_LANGUAGE', 'id');

//The character encoding on your strings. You most likely want UTF-8
define('charset', 'UTF-8');

//that's all -----------------------------------------------------------

define('START_MARKER', '[:' . PRESERVE_LANGUAGE . ']');
define('END_MARKER', '[:en]');
mb_internal_encoding(charset);

//Test for PDO and then proceed to make the DB connection
echo 'connecting to DB...';
if(! extension_loaded('pdo') )
	die('PDO extension is required :(');
try {
	$dbh = new PDO(DB_HOST, DB_USER, DB_PASS);
}
catch(PDOException $e) {
	die('error connecting to DB. sorry :(');
}

echo 'fetching posts...';
try {
	$rows = $dbh->query('SELECT ID, post_title, post_content FROM ' . POST_TABLE);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

//Scan the title and contents of each post, cleaning and adding mangled fields to the update list
$tobecleansed = array();
foreach($rows->fetchAll(PDO::FETCH_NUM) as $row) {
	list($id, $title, $content) = $row;
	if( false !== $start = mb_strpos($title, START_MARKER) AND false !== $limit = mb_strpos($title, END_MARKER, $start) )
		$tobecleansed[$id]['post_title'] = mb_substr($title, $start + strlen(START_MARKER), $limit - $start - strlen(START_MARKER));

	if( false !== $start = mb_strpos($content, START_MARKER) AND false !== $limit = mb_strpos($content, END_MARKER, $start) )
		$tobecleansed[$id]['post_content'] = mb_substr($content, $start + strlen(START_MARKER), $limit - $start - strlen(START_MARKER));
}

//loop through the mangled fields, updating the post table with a cleaned version
echo 'cleaning posts...';
foreach($tobecleansed as $id=>$post) {
	$update = array();
	$vals = array();
	foreach($post as $property=>$value) {
		$update[] = "$property = :$property";
		$vals[":$property"] = $value;
	}

	$update = implode(', ', $update);
	$vals[':id'] = $id;

	try {
		$stmt = $dbh->prepare("UPDATE " . POST_TABLE . " SET $update WHERE ID = :id");
		$stmt->execute($vals);
		print_r($stmt->errorInfo());
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
}

echo 'great success! Fixed ' . count($tobecleansed) . ' posts';

?>