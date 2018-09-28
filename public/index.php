<?php

require_once __DIR__."./../vendor/autoload.php";

use App\Wcs\Hello;
use HelloWorld\SayHello;

$Hi = new Hello();
$Yo = new SayHello();


echo $Hi->talk();
echo $Yo->world();