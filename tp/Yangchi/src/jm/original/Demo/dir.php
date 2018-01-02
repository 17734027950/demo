<?php
	$dir = dirname(__FILE__);
	$require_url = $dir."/../../../";

	require_once $require_url."vendor/autoload.php";

	use Yangchi\Dir;

	$dir = new Dir('./');

	
	$dir = object_to_array($dir);
	print_r($dir);

	// foreach ($dir as $key => $value) {
	// 	$value;
	// 	print_r($value);
	// 	echo '<hr>';
	// }


	/**
	 * 对象 转 数组
	 *
	 * @param object $obj 对象
	 * @return array
	 */
	function object_to_array($obj) {
	    $obj = (array)$obj;
	    foreach ($obj as $k => $v) {
	        if (gettype($v) == 'resource') {
	            return;
	        }
	        if (gettype($v) == 'object' || gettype($v) == 'array') {
	            $obj[$k] = (array)object_to_array($v);
	        }
	    }
	 
	    return $obj;
	}
?>