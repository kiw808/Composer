<?php
require '../vendor/autoload.php';

$hello = new \App\wcs\Hello();

echo $hello->talk();

// Composer Package management
// New instance of SayHello from ehime package
$helloCompo = new \HelloWorld\SayHello();

// calling SayHello's method
echo $helloCompo->world();
