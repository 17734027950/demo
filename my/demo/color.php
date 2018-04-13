<?php
error_reporting(0);

require_once __DIR__.'/../vendor/autoload.php';

$climate = new League\CLImate\CLImate;

echo $climate->out('This prints to the terminal.');

?>