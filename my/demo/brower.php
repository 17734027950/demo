<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Sinergi\BrowserDetector\Browser;
use Sinergi\BrowserDetector\Os;
use Sinergi\BrowserDetector\Device;
use Sinergi\BrowserDetector\Language;


$browser = new Browser();
$os = new Os();
$device = new Device();
$language = new Language();

var_dump($browser->getName());

var_dump($os->getName());

var_dump($device->getName());

var_dump($language->getLanguage());
die;

if ($browser->getName() === Browser::IE && $browser->isCompatibilityMode()) {
    $browser->endCompatibilityMode();
}

?>