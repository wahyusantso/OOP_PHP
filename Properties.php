<?php 

require_once 'data/Person.php';

$person = new Person("Wahyu", 17);
$person->name = "Wahyu";
$person->address = "Jl. Borobudur Cilandak";
$person->country = "Indonesia";
$person->age = null;

//input selain type string
// $person->name = 23; //otomatis terconvert ke string

echo "Name is " . $person->name . PHP_EOL; // PHP_EOL, untuk line baru
echo "Address is " . $person->address . PHP_EOL;
echo "Country is " . $person->country . PHP_EOL;
echo "Age is " . $person->age . PHP_EOL;

?>