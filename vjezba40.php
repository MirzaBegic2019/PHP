<?php

    $arr = array("a" => 10, "b" => 20, "c" => 30);
    print_r($arr);
    echo "<br>";
    
    foreach($arr as $key => &$value){
        $value = mt_rand(10, 100);
        echo $value;
        echo "<br>";
    }

    print_r($arr)
?>