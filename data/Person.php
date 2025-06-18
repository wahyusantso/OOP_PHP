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

    //constructor adalah function yang dipanggil ketika membuat objek
    function __construct(string $name, ?int $age) //define constructor
    {
        $this->name = $name;
        $this->age = $age;
    }

    function sayHello(?string $name)
    {
        if (is_null($name))
        {
            echo "Hi, my name is $this->name" . PHP_EOL; //untuk mengakses properti object dalam 1 class yang sama memerlukan keyword $this
        } else 
        {
            echo "Hi, my name is $name" . PHP_EOL; //$name berasal dari argumen bukan properti
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL; // gunakan self keyword untuk akses constant pada function yang berada di satu class yang sama
    }

    /*
    - destructor, akan otomatis dipanggil ketika object di hapus atau tidak digunakan lagi.
    - destructor cocok digunakan untuk menutup koneksi database agar terhindar dari memory leak
    **/
    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL; 
    }
}

?>