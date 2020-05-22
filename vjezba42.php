<?php

    $arr = array(1,2,3,4,5);
    $string = implode("; ", $arr);
    
    echo $string;
    echo "<br>";

    $string = "Ovo je neka rečenica.";
    $arr_string = explode(" ", $string);
    
    print_r($arr_string);
    

?> 