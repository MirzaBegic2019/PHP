<?php

    $broj = 13;

    function f(){
        global $broj;
        #var_dump(func_get_args());
        $parametri = func_get_args();
        echo $parametri[3];
        echo "<br>";
        echo $broj;
    }

    f("jedan", 2, "osamnaest", "nešto četvrto");


?>