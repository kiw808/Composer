<?php
require '../vendor/autoload.php';

$hello = new \App\wcs\Hello();

echo $hello->talk();
