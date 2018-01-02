<?php
	$dir = dirname(__FILE__);
	$require_url = $dir."/../../../";

	require_once $require_url."vendor/autoload.php";

	$Captcha = new \Yangchi\Captcha(['setZh'=>false,'length'=>4]);

	// print_r($Captcha);


	// $Captcha = new Yangchi\Captcha();
	echo $Captcha->createImg('user');
?>