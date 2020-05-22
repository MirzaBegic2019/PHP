<?php

    $clanovi = array(
        "Batman" => "Bruce Wayne",
        "Superman" => "Klark Kent",
        "Flash" => "Berry Alan",
        "Spiderman" => "Piter Parker",
        "Wonderwoman" => "Diana Price"
    );

    foreach($clanovi as $key => $element){
        echo $key . " is a " . $element . ".<br>";
    }
    
?>