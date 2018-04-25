<?php
	require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader, array(
	    'cache' => 'cache',
	    'debug'=>'debug'
	));
	$template = $twig->loadTemplate('index.html');
	echo $template->render(array('the' => 'variables', 'go' => 'here'));
?>