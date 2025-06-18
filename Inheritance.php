<?php

require_once 'data/Manager.php';

$manager = new Manager();
$manager->name = "Ratna";
$manager->sayHello("Siska");

$vp = new VicePresident();
$vp->name = "Clara";
$vp->sayHello("Siska");