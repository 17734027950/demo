<?php
	require_once __DIR__."/../vendor/autoload.php";
	$headers = array('Accept' => 'application/json');
	$options = array('auth' => array('user', 'pass'));
	$url = "http://www.languagebnu.com/index.php?default-app-oauth&type=wxpc";
	$request = Requests::get($url, $headers, $options);

	// var_dump($request->status_code);
	// int(200)

	// var_dump($request->headers['content-type']);
	// string(31) "application/json; charset=utf-8"

	var_dump($request->body);
?>