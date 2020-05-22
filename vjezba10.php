<?php  

    #promjenljive i konstante
    $promjenljiva="Ovo je promjenljiva.";
    define("KONSTANTA", "Ovo je konstanta.");

    echo $promjenljiva;
    echo "<br><br>";
    echo KONSTANTA;

    echo "<br>";
    $promjenljiva="Ovo je promijenjena promjenljiva.";
    define('KONSTANTA', 'Ovo je nova konstanta.');
  

    echo $promjenljiva;
    echo "<br><br>";
    echo KONSTANTA;
    


?>