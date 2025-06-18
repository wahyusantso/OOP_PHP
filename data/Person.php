<?php 

// namespace App; // pengelompokan class, dan menghindari konflik jika ada class yang sama.

class Person 
{

    const AUTHOR = "Programmer Rumahan";

    //deklarasi properti harus diawali dengan var.
    var string $name; //deklarasi type properti ke string, jika type di masukan ke properti tidak sesuai dengan type properti maka otomatis terkonversi ke string (fitur type junggling)
    var string $address;
    var string $country = "Indonesia"; //default value
    var ?int $age; //allow nullable

    function sayHello(?string $name)
    {
        if (is_null($name))
        {
            echo "Hi, my name is $this->name" . PHP_EOL; //untuk mengakses properti memerlukan keyword $this
        } else 
        {
            echo "Hi, my name is $name" . PHP_EOL; //$name berasal dari argumen bukan properti
        }
    }
}

?>