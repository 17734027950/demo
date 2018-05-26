<?php
require_once __DIR__."/../vendor/autoload.php";

$texter = new nazmulpcc\Texter;
	$image = imagecreate(500, 300);
	imagecolorallocate($image, 255, 255, 255);
	$texter->startFrom(50, 90)->width(400)->on($image)->align('center')->fontSize(30)->color('333333');
	$texter->text('আমার সোনার বাংলা, আমি তোমায় ভালবাসি Lorem ipsum dolor sit amet.....')->write();

?>