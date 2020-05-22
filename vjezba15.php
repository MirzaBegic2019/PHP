<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POTROŠNJA GORIVA!!!</title>
</head>
<body>
        <?php
    
        $potrošnja_goriva=7;
        $stanje_rezerovaora=50;
        $očekivana_distanca=1000;
        $a=$očekivana_distanca/$potrošnja_goriva;


        define('KM', 'kilometara');
        define('ZAP', 'litara');
        define('POT', 'litara na stotinu kilometara');

        $moguća_distanca=$stanje_rezerovaora/$potrošnja_goriva * 100;
        $moguća_distanca=round($moguća_distanca,2);
        echo $moguća_distanca;
        echo "<br>";

       if ($moguća_distanca>$očekivana_distanca){
           $stanje="može";
       } 
       else {
           $stanje="ne može";
       }
        
       echo "Automobil koji ima potrošnju goriva od $potrošnja_goriva " . POT . "sa rezervoarom od $stanje_rezerovaora " . ZAP .
        " može preći $moguća_distanca " . KM . "!";
       echo "<br>";
       echo "Obzirom da je očekivana distanca $očekivana_distanca " . KM . ", ovaj automobil " . $stanje . " preći bez sipanja goriva.";
    

        
        
        ?>


    
    
</body>
</html>