<?php
	require_once __DIR__."/../vendor/autoload.php";
	try {
	    $whoops = new \Whoops\Run();
	    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
	    $whoops->register();
	} catch (Exception $e) {
	    echo $e->getMessage();
	}
	file();
?>