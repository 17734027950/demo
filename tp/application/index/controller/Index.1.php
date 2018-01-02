<?php
namespace app\index\controller;

use Overtrue\Pinyin\Pinyin; // 拼音类
use Carbon\Carbon; // 日期处理类
use Beanbun\Beanbun;
use Beanbun\Middleware\Parser;
use Gaoming13\HttpCurl\HttpCurl; // Curl类

use Yangchi\View;

class Index
{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		View::getView();
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

		print_r($d);
		die;
	}
}
