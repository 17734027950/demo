<?php
require_once __DIR__.'/../vendor/autoload.php';
// import namespaces
use Namshi\Notificator\Notification\Handler\NotifySend as NotifySendHandler;
use Namshi\Notificator\Manager;
use Namshi\Notificator\Notification\NotifySend\NotifySendNotification;

//  create the handler
$handler = new NotifySendHandler();

// create the manager and assign the handler to it
$manager = new Manager();
$manager->addHandler($handler);

$notification = new NotifySendNotification("...whatever message...");

//  trigger the notification
$manager->trigger($notification);