<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";


//membuat objek dengan namespace berbeda
$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();


//akses function dan constant di satu namespace
echo Helper\APPLICATION . PHP_EOL;
Helper\sayHello();


//global namespace. ketika tidak membuat namespace, actual php otomatis membuat namespace secara global
// namespace {
//     require_once "data/Conflict.php";
//     require_once "data/Helper.php";


//     //membuat objek dengan namespace berbeda
//     $conflict1 = new \Data\One\Conflict();
//     $conflict2 = new \Data\Two\Conflict();


//     //akses function dan constant di satu namespace
//     echo Helper\APPLICATION . PHP_EOL;
//     Helper\sayHello();
// }

?>