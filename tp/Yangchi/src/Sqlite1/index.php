<?php
if (extension_loaded('SQLite') || extension_loaded('SQLite3') ) {
    //应用举例
    require_once('SQLite.php');
    //创建实例
    $DB=new SQLite('Yangchi.db'); //这个数据库文件名字任意
    //创建数据库表。
    $DB->query("create table yc_test(id integer primary key,title varchar(50))");
    // //接下来添加数据
    // $DB->query("insert into test(title) values('泡菜')");
    // $DB->query("insert into test(title) values('蓝雨')");
    // $DB->query("insert into test(title) values('Ajan')");
    // $DB->query("insert into test(title) values('傲雪蓝天')");

    $title = "杨驰";
    $count = $DB->RecordCount("select * from yc_test where title='{$title}'");
    if($count=='0'){
        $DB->query("insert into yc_test(title) values('{$title}')");
    }

    //读取数据
    $rows = $DB->getlist('select * from yc_test order by id desc');

    foreach($rows as $key=>$value){
        echo $value['title'];
    }


    //更新数据
    // $DB->query('update test set title = "三大" where id = 9');
}else{
    echo "不支持sqlite";
}