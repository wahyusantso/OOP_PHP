<?php 

require_once 'data/Person.php';

$person = new Person("Wahyu", 17); //harus memasukan nilai argumen, karena terdapat constructor didalam class Person
var_dump($person);

?>