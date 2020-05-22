<?php 

    $start_value=10;
    $end_value=220;
    $trip=150;

    $complete_value = $end_value - $start_value;
 
    if($trip > $complete_value){
        $trip_value = $trip - $complete_value; 
        echo "YOU passed " .$trip_value. " km more than needed.";
    }else if($trip < $complete_value){
        $trip_value = $complete_value - $trip; 
        echo "You need " . $trip_value . " km to go.";
    }else{
        echo "You passed EXACT DISTANCE.";
    }
?>