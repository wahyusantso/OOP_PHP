<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

//gunakan keyword use untuk menggantikan namespace, agar tidak ada pemanggilan namespace secara berulang.
use Data\One\Conflict; //jika terdapat lebih dari satu namespace pada class yang sama, hanya ada satu name space yang bisa dipanggil.
use function Helper\sayHello; //import function dalam namespace
use const Helper\APPLICATION; //import constant dalam namespace

$conflict = new Conflict(); //saat menggunakan use, tidak perlu mendeklarasikan namespace pada object.

sayHello();
echo APPLICATION . PHP_EOL;
?>