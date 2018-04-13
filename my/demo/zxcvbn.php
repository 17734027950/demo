<?php
require_once __DIR__ . '/../vendor/autoload.php';

use ZxcvbnPhp\Zxcvbn;

$userData = array(
  'Marco',
  'marco@example.com'
);

$zxcvbn = new Zxcvbn();
$strength = $zxcvbn->passwordStrength('password', $userData);
echo $strength['score'];
// will print 0

$strength = $zxcvbn->passwordStrength('Admin_Password_*');
echo $strength['score'];
// will print 4

?>