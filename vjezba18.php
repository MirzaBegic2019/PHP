<?php
    #Konverzija tipova
    $broj=749;
    $string=(string)$broj;

    $broj1=137;
    $broj2="294";

    #Trenutna promjena tipa podatka
    echo (int)$broj2 + (int)$broj1 . " ";
   

    #Sačuvana promjena tipa podatka
    $broj2 = (int)$broj2;

    #gettype() vraća tip podatka u stringu 
    echo gettype($broj2);

    $vrijednost = "1347";
    echo "<br>";
    if(gettype($vrijednost)=="string"){
        echo "Naša vrijednost je string.";}
        else if(gettype($vrijednost)=="integer"){
            echo "Naša vrijednost je integer.";
        }else{
            echo "Naša vrijednost nije validna.";
        }
        
?>