<?php
	require_once __DIR__."/../vendor/autoload.php";
	

	use OSS\OssClient;
	use OSS\Core\OssException;

	$accessKeyId = "<您从OSS获得的AccessKeyId>";
	$accessKeySecret = "<您从OSS获得的AccessKeySecret>";
	$endpoint = "<您选定的OSS数据中心访问域名，例如http://oss-cn-hangzhou.aliyuncs.com>";
	try {
	    $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
	    var_dump($ossClient);
	} catch (OssException $e) {
	    print $e->getMessage();
	}

	
?>