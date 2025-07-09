<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

//gunakan use group untuk menghindari import namespace berulang di satu class.
use Data\One\{Conflict as Conflict1, Sample, Dummy};
use function Helper\{sayHello as say};

$conflict = new Conflict1();
$sample = new Sample();
$dummy = new Dummy();
?>