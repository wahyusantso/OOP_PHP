<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

//gunakan keyword use untuk menggantikan namespace, agar tidak ada pemanggilan namespace secara berulang.
use Data\One\Conflict as Conflict1; //gunakan as untuk menghindari nama class yang sama.
use Data\Two\Conflict as Conflict2;
use function Helper\sayHello as say;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

say();
echo APP . PHP_EOL;
?>