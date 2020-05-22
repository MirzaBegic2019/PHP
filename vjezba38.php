<?php

    $clanovi = array(
        "student",
        "profesor",
        "koordinator",
        "lektor",
        "direktor"
    );

    $velicina_niza = sizeof($clanovi);
    for ($i=0; $i < $velicina_niza ; $i++) { 
        echo "Ja sam " . $clanovi[$i] . ".<br>";
    }

?>