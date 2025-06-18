<?php 

require_once 'data/Person.php';

$person = new Person();
$person->name = "Engineer";
$person->sayHello(null); //jika argumen null akan mengambil nilai properti
$person->info();

?>