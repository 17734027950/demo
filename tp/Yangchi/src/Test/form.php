<?php
	$dir = dirname(__FILE__);
	$require_url = $dir."/../../../";

	require_once $require_url."vendor/autoload.php";


	use Yangchi\FormBuilder;

	$config = [
        'ns' => 'we',
        'name' => 'form',
        'form_class' => ['form' , 'form-ajax'],
        'action' => '',
        'method' => 'GET',
        'upload_file' => false
    ];
    
    $form = new FormBuilder($config);

    // $html = $form->setFormName('form-1')
    //     ->setFormNs('we')
    //     ->setAction('')
    //     ->setMethod('post')
    //     ->addGroup('group2' , '基础信息')
    //     ->addText('name' , '名称' , '' , '前填写您的名称' , true , '' , 'group2')
    //     ->addPassword('password' , '密码' , '' , '请输入密码' , true , '请输入6-10位数字密码' , 'group2')
    //     ->addSubmit('提交')
    //     ->build();
    // echo $html;
    // die;
    
    $html = $form->addClass('form-class')
        ->setAction('')
        ->setMethod('post')
        ->uploadFile()
        ->addText('name' , '名称' , '' , '前填写您的名称' , true , '' , 'group1')
        ->addPassword('password' , '密码' , '' , '请输入密码' , true , '请输入6-10位数字密码' , 'group1')
        ->addEmail('email' , '邮箱' , '' , '请输入邮箱' , true)
        ->addNumber('sort' , '排序' , 0 )
        ->addTextarea('info' , '内容' , '' , '请填写内容' , true)
        ->addFile('file' , '文件' )
        ->addButton('button' , '按钮' , '哈哈')
        ->addSelect('sex' , '选择' , 2 , [1=>'男' , 2=> '女'])
        ->addRadio('radio' , '单选' , 1 , ['1' => 'yi' , 2 => 'er' , 3 => 'shan'])
        ->addCheckbox('checkbox[]' , '多选' , ['1',2] ,[1 => 'yi' , 2 => 'er' , 3 => 'shan'] )
        ->addSubmit('提交')
        ->addReset('重置')
        ->addGroup('group1' , '分组1')
        ->build();
    
    echo $html;

