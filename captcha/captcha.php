<?php
require_once __DIR__."/../vendor/autoload.php";
use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder(4);
$builder->build();
?>

<img src="<?php echo $builder->inline(); ?>" />

<?php
	echo $builder->getPhrase();
?>