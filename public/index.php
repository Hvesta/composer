<?php


require_once __DIR__ . '/../vendor/autoload.php';

$hello = new App\Wcs\Hello();
$helloWorld = new HelloWorld\SayHello();

echo $hello->talk();
echo $helloWorld::world();