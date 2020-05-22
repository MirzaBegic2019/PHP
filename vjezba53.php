<?php  

    $niz= array();
    $niz2= array ();
    $recenica = "anavolimilovana";

    function obrtanje_stringa($string){
        $niz = str_split($string);
        $niz2 = array_reverse($niz);
    }

    $string1 = implode($niz);
    $string2 = implode($niz2);

    if($string1 == $string2){
        echo "Palindrom!";
    }else{
        echo "Nije palindrom!";
    }

    obrtanje_stringa($recenica);

?>