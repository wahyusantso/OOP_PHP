<?php

require_once 'data/Person.php';

$user = new Person("Wahyu", 17);

echo "Program selesai" . PHP_EOL;

//destructor akan otomatis terpanggil, karena sudah tidak ada baris perintah lagi diobjek ini.