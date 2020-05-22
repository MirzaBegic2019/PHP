<?php

    $niz = array(2, 6, 13, 28, 124, 362, 235, 47, 69);

    function sortiranje(&$niz, $smjer){
        switch($smjer){
            case "više":
                sort($niz);
                break;
            case "niže":
                rsort($niz);
                break;
            default: 
                sort($niz);
                break;
        }
    }

    sortiranje($niz, "više");
    var_dump($niz);
    
?>