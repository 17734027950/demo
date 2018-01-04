<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
    	echo url('index/index/index');

    	// $this->assign('title','title');

    	return view('',['title'=>'title']);
    }
}
