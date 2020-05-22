<?php

    $korisnicki_broj = mt_rand(1, 25);
    $broj1 = mt_rand(1, 25);
    $broj2 = mt_rand(1, 25);
    $broj3 = mt_rand(1, 25);
    $broj4 = mt_rand(1, 25);
    $broj5 = mt_rand(1, 25);

    if($broj1 == $korisnicki_broj){
        echo "<span style='color:red';>" . $broj1 . "</span>";
    }else{
        echo "<span>" . $broj1 . "</span>";
    }

    echo "<br>";

    if($broj2 == $korisnicki_broj){
        echo "<span style='color:red';>" . $broj2 . "</span>";
    }else{
        echo "<span>" . $broj2 . "</span>";
    }

    echo "<br>";

    if($broj3 == $korisnicki_broj){
        echo "<span style='color:red';>" . $broj3 . "</span>";
    }else{
        echo "<span>" . $broj3 . "</span>";
    }

    echo "<br>";

    if($broj4 == $korisnicki_broj){
        echo "<span style='color:red';>" . $broj4 . "</span>";
    }else{
        echo "<span>" . $broj4 . "</span>";
    }

    echo "<br>";

    if($broj5 == $korisnicki_broj){
        echo "<span style='color:red';>" . $broj5 . "</span>";
    }else{
        echo "<span>" . $broj5 . "</span>";
    }

?>