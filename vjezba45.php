<?php

    //Ova funkcija ispisuje nešto
    function neki_naziv_funkcije(){
        echo "Pozdrav iz funkcije!";
    }

    //Ova funkcija vraća nešto
    function druga_funkcija(){
        return "Pozdrav iz funkcije!";
    }

    //Poziv funkcija
    neki_naziv_funkcije();
    echo $rezultat = druga_funkcija();

    echo ("<br>");

    function trecaFunkcija($ime){
        echo "Ja se zovem " . $ime . ".<br>";
    }

    trecaFunkcija ("Amar");
    trecaFunkcija ("Pero Djetlić");
    trecaFunkcija ("John Wayne");
    trecaFunkcija ("Duško Dugouško");

    function cetvrta_funkcija($ime = "Johhny English"){
        echo "Hi, " . $ime . ". Welcome to M17.";
        echo "<br>";
        echo Date("d-m-Y");
        return;
    }

    cetvrta_funkcija("His buddy");
?>