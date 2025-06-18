<?php

require_once 'data/Person.php';

define("APPLICATION", "Belajar PHP OOP"); //cara lama untuk membuat variabel constant
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL; // cara akses variabel constant. tidak perlu membuat object karena variabel constant mengikat di class bukan object.