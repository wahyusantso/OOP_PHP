<?php 

require_once 'data/Person.php';

$person = new Person("Wahyu", 17);
$person->name = "Engineer";
$person->sayHello(null); //jika argumen null akan mengambil nilai properti
$person->info();

?>