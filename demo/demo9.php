<?php

require_once __DIR__.'/../vendor/autoload.php';

use Fluent\Logger\FluentLogger;
$logger = new FluentLogger("localhost","24224");
$logger->post("debug.test",array("hello"=>"world"));