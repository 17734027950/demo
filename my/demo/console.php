<?php
require_once __DIR__."/../vendor/autoload.php";
\PhpConsole\OldVersionAdapter::register(); // register PhpConsole v1.x class emulator

// Call old PhpConsole v1 methods as is
PhpConsole::start(true, true, $_SERVER['DOCUMENT_ROOT']);
PhpConsole::debug('Debug using old method PhpConsole::debug()', 'some,tags');
debug('Debug using old function debug()', 'some,tags');
echo $undefinedVar;
PhpConsole::getInstance()->handleException(new Exception('test'));

// Call new PhpConsole methods, if you want :)
PhpConsole\Connector::getInstance()->setServerEncoding('cp1251');
PhpConsole\Helper::register();
PC::debug('Debug using new methods');
?>