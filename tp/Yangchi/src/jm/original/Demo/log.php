<?php
	$dir = dirname(__FILE__);
	$require_url = $dir."/../../../";

	require_once $require_url."vendor/autoload.php";

	use Yangchi\Yangchi;

	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;
	use Monolog\Handler\ErrorLogHandler;
	use Monolog\Formatter\JsonFormatter;
	 
	// create a log channel
	$log = new Logger('test_log');
	$time = date('Y_m_d',time());
	// $log->pushHandler(new StreamHandler("path/$time.log", Logger::WARNING));
	$log->pushHandler(new StreamHandler("path/$time.log", Logger::INFO));

	// add records to the log
	// $log->addWarning('Foo');
	// $log->addError('Bar');

	$yang = new Yangchi;

	$res = $yang->getAll();

	$log->info($res);

	print_r($res);
?>