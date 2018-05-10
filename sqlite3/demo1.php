<?php
require_once __DIR__."/../vendor/autoload.php";

$nsql = new NoSQLite\NoSQLite('mydb.sqlite');


$store = $nsql->getStore('movies');

$store->set(uniqid(), json_encode(array('title' => 'Good Will Hunting', 'director' => 'Gus Van Sant')));


$all = $store->getAll();

var_dump($all);

?>