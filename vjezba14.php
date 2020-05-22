<?php
    #Operatori

    #Operator dodjele=
    #Aritmetički operatori +, -, *, /, %
        #Modulo operator
        echo 13 % 2;
        echo"<br>";

    #Operatori poređenja (u ovom slučaju mogu biti različiti tipovi podataka, rezultat je 1) (false, tj.0 se ne ispisuje)
    #Operator jednako ==
        echo 10 == "10";
        echo "<br>";

    #Operator identično === (tip i vrijednost podatka moraju biti isti da bi rezultat bio 1)
        echo 10 === "10";
        echo "<br>";

    #Operator nije jednako !=
        echo 10 != 5;
        echo "<br>";

    #Operator nije identično !==
        echo 10 !== "10";
        echo "<br>";
    
    #Nadovezivanje stringova
        echo  "Ovo " . "je " . "kompletan " . "string!";
        echo "<br>";

    #Unarni operatori +=, -=, *=, /=, %=
        $a=15;
        $a+=7; //$a=$a+7;
        echo "<br>";

        echo $a;
        echo "<br>";
        $b=215;
        $b-=3; //$b=$b-3;
        echo $b;
        echo "<br>";

    #Inkrement i dekrement ++, --
        $c=10;
        echo $c++;
        echo "<br>";
        echo ++$c;

    #Logički operatori &&,|| i ! 
    $f=10;
    $g=5;
    $h=0;
    echo "<br>";
    echo $f<3 && $g>4; // rezultat je false, tj. 0
    echo $f<3 || $g<4; // operator ILI pa je potrebno da bude jedan samo true.

    

?>