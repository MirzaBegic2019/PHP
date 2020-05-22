<?php
require 'model.php';

$class = $user_status = "";
//Definisanje dvije prazne varijable 

switch($status){

case 1:
    //Obje varijable dobijaju vrijednost administrator
    $class = $user_status = "administrator";
break;

case 2:
    //Obje varijable dobijaju vrijednost coordinator
    $class = $user_status = "coordinator";
break;

case 3:
    //Obje varijable dobijaju vrijednost user
    $class = $user_status = "user"; 
break;

default:
    $class = "unknown";
    $user_status = "Unknow user";
break;
}

//Kada korisnik nije nepoznat, stavi Welcome, a kada jeste stavi Warning
$message = ($class != 'unknown') ? 'Welcome' : 'Warning';

$user_status = "<span class='{$class}'>{$message} {$user_status}</span>";

?>