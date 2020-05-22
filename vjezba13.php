<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESOTRAN</title>
</head>
<body>
    <?php
    #definisao bih promjenljive
    $naziv_restorana="Kilim";
    $adresa_restorana="Zmaja od Bosne 16, Sarajevo";
    $broj_telefona="+38761200340";
    $koordinate_lat="343.255";
    $koordinate_long="135.322";
    $ocjena="4.6";
    $status="otvoreno";


    ?>

    <h1><?php echo $naziv_restorana;?></h1>
    <p>
        Adresa restorana: 
        <a href="https://www.google.com/maps?q=<?php echo $adresa_restorana ;?>">
            <?php echo $adresa_restorana; ?>
            </a>
        </p>

        <p>
        Broj telefona:
        <a href="tel:<?php echo $broj_telefona ;?>">
            <?php echo $broj_telefona; ?>
            </a>
        </p>

    <p>
        Status: <?php echo $naziv_restorana ?>
    </p>

    <p>
        Ocjena: <?php echo $ocjena ?>
    </p>

</body>
</html>