<?php
include_once 'Fan.php';
// tao doi tuong fan 1;

$fan1 = new Fan();
$fan1->setColor('yellow');
$fan1->setRadius(10);
$fan1->setSpeed(Fan::FAST);
$fan1->setOn(true);
$fan1->toString();

// tqo doi tuong fan 2;

//$fan2 = new Fan();
//$fan2->setColor('blue');
//$fan2->setRadius(5);
//$fan2->setSpeed(Fan::MEDIUM);
//$fan2->setOn(false);
//$fan2->toString();
//
