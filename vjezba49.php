<?php

    function moja_funkcija($parametar){
        if($parametar < 10){
            $parametar++;
            echo $parametar . "<br>";
            moja_funkcija($parametar);
        }else
            echo "Kraj izvršavanja";
    }

    moja_funkcija(1);

    $funkcija = create_function('$a', 'return 2*$a;');

    echo "<br>";
    
    echo $funkcija(2) . "<br>";
    echo $funkcija(64) . "<br>";

?>