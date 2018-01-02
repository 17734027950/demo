<?php
namespace app\index\controller;

/**
 * Author YangChi
 * E-mail 17734027950@189.cn
 * Mobile 17734027950
 * QQ 1007684997
 * Wechat 18210427950(luoyanfeiyings)
 * 
 * Create date 2017-12-18
 * Version 0.0.1
 */

use think\View;

use Overtrue\Pinyin\Pinyin; // 拼音类
use Carbon\Carbon; // 日期处理类
use Beanbun\Beanbun;
use Beanbun\Middleware\Parser;

// use Yangchi\View; // Yangchi 的类
use Yang\XssHtml; // Yangchi 的类 html防xss攻击
use Yang\String; // Yangchi 的类 String
use Yang\Image; // Yangchi 的类 Img
use Yang\Filecache; // Yangchi 的类 Filecache
use Yang\Yangchi; // Yangchi 的类
use Yang\Pinyinhan; // Yangchi 的类
use Yang\HttpCurl; // Yangchi 的类
use Stoneworld\Wechat\Server; // 微信企业号类

class Index
{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		// return url('index/index/file');
	}

	public function httpcurl()
	{
		$res = HttpCurl::request('http://example.com/', 'get');

		print_r($res);
	}

	public function form()
	{
		$form = \think\form\Form::form();
	   	echo $form->open(['method'=>'POST','action'=>'http://localhost']).'<br>';
	   	echo $form->select('select',  ['a'=>['a','b','c'],'b','c'], 1).'<br>';
	   	echo $form->text('text','text',['id'=>'text']).'<br>';
	   	echo $form->submit('submit').'<br>';
	   	echo $form->close();
	}

	public function pinyinhan()
	{
		Pinyinhan::convert('重庆',' ',$allWord,$firstWord);
		return $allWord;
		// print_r($firstWord);
	}

	/**
	 * [xsshtml description]
	 * @return [type] [description]
	 */
	public function xsshtml()
	{
		$html = '<html code>';
		$xss = new XssHtml($html);
		$html = $xss->getHtml();

		return $html;
	}

	/**
	 * 文件缓存
	 * [filecache description]
	 * @return [type] [description]
	 */
	public function filecache()
	{
		$cache = new Filecache();
		$yang = new Yangchi();

		$items[] = array('id'=>'1','name'=>rand(0,9));
		$items[] = array('id'=>'1','name'=>'1');
		$items[] = array('id'=>'1','name'=>'1');
		$items[] = array('id'=>'1','name'=>'1');
		$items[] = array('id'=>'1','name'=>'1');

        $data[] = array(
	        	'items'=>$items,
	        	'total'=>'5',
        	);
        $json = ['code'=>'1','message'=>'操作完成','data'=>$data];

        $json = $yang->jsonhan($json);
        // print_r($json);

		//数据缓存
		$url = $yang->getAll();
		$url = sha1($url);
		if($cache->startCache($url, 1)) // key, expired
		{
		  	//缓存内容…… 任意输出
		  	echo $json;
		  	$cache->endCache();
		}
	}

	/**
	 * 数据库操作
	 * [database description]
	 * @return [type] [description]
	 */
	public function database()
	{
		//创建一个连接
		$conn = new \Ydb\Connection([
		    'host' => 'localhost',
		    'database' => 'jkzz',
		    'username' => 'root',
		    'password' => 'root'
		]);

		//实例化Merrdb，同时传递连接
		$mdb = new \Ydb\Ydb([$conn]);

		//设置接下来要操作的表以及表的主键（如果不使用get方法可以不设置主键）
		$mdb->table('jk_user')->id('userID');

		//开启debug ，将会输出SQL
		// $mdb->debug();

		//查询全表
		// $rows = $mdb->select();
		// print_r($rows);


		// $mdb->debug();
		//查询主键值为1的数据
		$row = $mdb->get(1);

		return ['code'=>'1','message'=>'操作完成','data'=>$row];
	}

	/**
	 * image
	 * [image description]
	 * @return [type] [description]
	 */
	public function image()
	{
		$img = new Image('1','uploads/2017/12/19/20171219084248_9633.jpg');

		$res = $img->thumb('100','100','1');

		return $res;
	}

	/**
	 * String
	 * [string description]
	 * @return [type] [description]
	 */
	public function string()
	{
		$string = new String();

		// $res = $string->uuid();

		$res = $string->randString('100');

		print_r($res);
	}

	/**
	 * api
	 * [api description]
	 * @return [type] [description]
	 */
	public function api()
	{
		// $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
  //       return ['data'=>$data,'code'=>1,'message'=>'操作完成'];

        // $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];

		$items[] = array('id'=>'1','name'=>'1');
		$items[] = array('id'=>'1','name'=>'1');
		$items[] = array('id'=>'1','name'=>'1');
		$items[] = array('id'=>'1','name'=>'1');
		$items[] = array('id'=>'1','name'=>'1');

        $data[] = array(
	        	'items'=>$items,
	        	'total'=>'5',
        	);

        return ['code'=>'1','message'=>'操作完成','data'=>$data];
	}

	/**
	 * 图片上传
	 * [file description]
	 * @return [type] [description]
	 */
	public function file()
	{
		return view();
	}

	public function wechat_company()
	{
		$options = array(
            'token'=>'stoneworld1992',   //填写应用接口的Token
            'encodingaeskey'=>'o1wze3492xoUVIc9ccTLJczO3BQ5pLfiHcKwtDEdqM9',//填写加密用的EncodingAESKey
            'appid'=>'wx8ac123b21f53dera7',  //填写高级调用功能的appid
            'appsecret'=>'4ZDHIETJ6e0oENlEkRhYwdKcPcRjCkgQkuHtQTJ12ZhWHESowrJqS9', //填写高级调用功能的密钥
            'agentid'=>'5', //应用的id
        );


		$server = new Server($options);

		print_r($server);
        die;

		$server->on('message', function($message){
		    return "您好!";
		});

		// 您可以直接echo 或者返回给框架
		echo $server->server();
	}

	/**
	 * Curl类
	 * [curl description]
	 * @return [type] [description]
	 */
	public function curl()
	{
		$res = HttpCurl::request('http://192.168.1.208/yangchi/kj/api/phalapi/PhalApi-1.4.2/Public/', 'get', array(
			), array('Content-Type:application/json'));

		print_r($res);
	}

	/**
	 * 时间处理类
	 * [carbon description]
	 * @return [type] [description]
	 */
	public function carbon()
	{
		printf("Now: %s", Carbon::now());
	}

	/**
	 * 拼音类
	 * [pinyin description]
	 * @return [type] [description]
	 */
    public function pinyin()
    {
        // 小内存型
		$pinyin = new Pinyin(); // 默认
        $d = $pinyin->convert('朝阳的朝阳');

        return $d;
        die;

		print_r($d);
		die;
	}
}
