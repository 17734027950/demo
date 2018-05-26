<?php
require_once __DIR__."/../vendor/autoload.php";

use Goutte\Client;

$client = new Client();

// Go to the symfony.com website
$crawler = $client->request('GET', 'http://www.symfony.com/blog/');

?>