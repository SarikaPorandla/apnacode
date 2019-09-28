<?php
function remove_var($url, $key) { 
	$url = preg_replace('/(.*)(?|&)' . $key . '=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&'); 
	$url = substr($url, 0, -1); 
	return $url; 
}

// The key to remove from the query string
$key = $_GET['remove'];

$strNewQS = remove_var($_SERVER['QUERY_STRING'], $key);

echo $strNewQS;


	