<?php

//implementasi Inheritance(Pewarisan)
class Manager 
{
    var string $name;

    function sayHello(string $name)
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager //child dari class manager
{

}