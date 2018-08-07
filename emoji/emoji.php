<?php
	require_once __DIR__."/../vendor/autoload.php";
	
	use Hidehalo\Emoji\Parser;

$parser = new Parser();
$parser->parse($contents);
?>