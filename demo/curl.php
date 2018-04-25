<?php
	require_once __DIR__."/../vendor/autoload.php";
	$client = new \GuzzleHttp\Client();
    $res = $client->request('GET', 'http://restapi.amap.com/v3/config/district',[
        'query'=>[
                'keywords'=>'中国',
                'subdistrict'=>'1',
                'key'=>'20485484948a2f1a103ea2111772d56f'
            ]
    ]);
    // echo $res->getStatusCode();
    // 200
    // echo $res->getHeaderLine('content-type');
    // 'application/json; charset=utf8'
    $result = $res->getBody();
    // '{"id": 1420053, "name": "guzzle", ...}'

    $data = json_decode($result,true);
    var_dump($data['districts']);
?>