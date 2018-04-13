<?php
require_once __DIR__ . '/../vendor/autoload.php';


$v = new Valitron\Validator($_GET,'','zh-cn');
$v->rule('required', ['name', 'email']);
$v->rule('lengthMin', 'name','1');
$v->rule('lengthMax', 'name','5');
$v->rule('email', 'email');
if($v->validate()) {
    echo "Yay! We're all good!";
} else {
    // Errors
    print_r($v->errors());
}


?>