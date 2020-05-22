<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "";
    $port = "3309";

    $connection = mysqli_connect($server, $user, $password, $database, $port);

    
    if (!$connection) {
        die("Connection failed." . mysqli_connect_error());
    }

    mysqli_set_charset($connection, "utf-8");

    $query = "SELECT * FROM superheroes.users WHERE name LIKE '%%'";

    $results = mysqli_query($connection, $query);

    if (mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
            echo "Hello, I am " . $row['name'] . " " . $row['lastname'] . ".<br>";
        }
    } else {
        echo "0 results";
    }
   
    #Odavde radimo INSERT
    /*
    $query_insert = "INSERT INTO superheroes.users (name, lastname, date) 
    VALUES ('Tim', 'Drake', '21.12.2019')";

    if(mysqli_query($connection, $query_insert)){
        echo "Data inserted...";
    }
    */

    #Odavde radimo UPDATE
    $query_update = "UPDATE superheroes.users SET name='Barry', lastname='Alan' WHERE id = 4";

    if(mysqli_query($connection, $query_update)){
        echo "Data updated...";
    }else{
        echo "Data not updated...";
    }


    #Odavde radimo DELETE

    $query_delete = "DELETE FROM superheroes.users WHERE id = 5";

    if(mysqli_query($connection, $query_delete)){
        echo "Data deleted...";
    }else{
        echo "Data not deleted...";
    }
 

?>