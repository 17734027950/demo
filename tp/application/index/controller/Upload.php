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

use Yangchi\Fileupload; // Yangchi 的类 图片上传
use Yangchi\Mkdirs; // Yangchi 的类 图片上传

class Upload
{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		$up = new Fileupload();  
	    //设置属性（上传的位置、大小、类型、设置文件名是否要随机生成）
	    $time = date('Y/m/d',time());  
	    $path = "uploads/{$time}/";

	    $dir = new Mkdirs();
	    $dir->mk_dir($path);
	    $up->set("path",$path);  
	    $up->set("maxsize",2000000); //kb  
	    $up->set("allowtype",array("gif","png","jpg","jpeg"));//可以是"doc"、"docx"、"xls"、"xlsx"、"csv"和"txt"等文件，注意设置其文件大小  
	    $up->set("israndname",true);//true:由系统命名；false：保留原文件名  
	      
	    //使用对象中的upload方法，上传文件，方法需要传一个上传表单的名字name：pic  
	    //如果成功返回true，失败返回false  
	  
	  	// $up->upload("pic");
	   //  $info = $up->getFileName();
	   //  print_r($info);
	   //  die;

	    if($up->upload("pic")){  
	        echo '<pre>';  
	        //获取上传成功后文件名字  
	        var_dump($up->getFileName());  
	        echo '</pre>'; 


	        foreach ($up->getFileName() as $key => $value) {
	        	echo $img = $path.$value;
	        	$img_path = __PUBLIC__.'/'.$img;
	        	echo "<img src='{$img_path}' width='100'>";
	        } 
	          
	    }else{  
	        echo '<pre>';  
	        //获取上传失败后的错误提示  
	        var_dump($up->getErrorMsg());  
	        echo '<pre/>';  
	    }  
	}
}
