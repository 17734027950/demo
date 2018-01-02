<?php
	$dir = dirname(__FILE__);
	$require_url = $dir."/../../../";

	require_once $require_url."vendor/autoload.php";

	use Yangchi\Spyc;
	use Yangchi\File;

$array[] = 'Sequence item';
$array['The Key'] = 'Mapped value';
$array[] = array('A sequence','of a sequence');
$array[] = array('first' => 'A sequence','second' => 'of mapped values');
$array['Mapped'] = array('A sequence','which is mapped');
$array['A Note'] = 'What if your text is too long?';
$array['Another Note'] = 'If that is the case, the dumper will probably fold your text by using a block.  Kinda like this.';
$array['The trick?'] = 'The trick is that we overrode the default indent, 2, to 4 and the default wordwrap, 40, to 60.';
$array['Old Dog'] = "And if you want\n to preserve line breaks, \ngo ahead!";
$array['key:withcolon'] = "Should support this to";

$yaml = Spyc::YAMLDump($array,4,60);

print_r($yaml);

echo '<hr>';
$filename = '1.yaml';
File::createFile($filename,$yaml);

$Data = Spyc::YAMLLoad($filename);

print_r($Data);