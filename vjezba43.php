<?php

    $recenica = "Superman je Klark Kent. Spiderman je Piter Parker. Batman je Bruce Wayne. Wonderwoman je Diana Price. 
    Flash je Barry Alen.";

    $superheroji = array(
        "Superman",
        "Spiderman",
        "Batman",
        "Wonderwoman",
        "Flash"
    );

    $recenica_niz = explode(" ", $recenica);

    foreach($recenica_niz as $key => &$value){
        
        $velicina_superheroja = count($superheroji);

        for ($i=0; $i < $velicina_superheroja; $i++) { 
            
            if($value == $superheroji[$i]){
                $value = "*****";
            }
        }
    }
    
    print_r($recenica_niz);

?>