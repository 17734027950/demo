<?php
	require_once __DIR__."/../vendor/autoload.php";
	// $transform = new Text2pic\Transform('by text2pic');
	// $result = $transform->generate("hello world");
	// print_r($result);
	
	$transform = new Text2pic\Transform('by text2pic','','','');
	$result = $transform->generate("hello world");
	print_r($result);
?>