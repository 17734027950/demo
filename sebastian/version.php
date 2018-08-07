<?php
	require_once __DIR__.'/../vendor/autoload.php';

	$version = new SebastianBergmann\Version(
	  '3.7.10', 'a'
	);

	var_dump($version->getVersion());
?>