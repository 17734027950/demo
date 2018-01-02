<?php
	$dir = dirname(__FILE__);
	$require_url = $dir."/../../../";

	require_once $require_url."vendor/autoload.php";

	use Yangchi\Yangchi;

	$yang = new Yangchi;

	$res = $yang->getAll();

	print_r($res);
?>