<?php

    #Useri koje imamo na sistemu (uloge)
    $user = 1;
    $admin = 2;
    $superadmin = 4;

    #User koji se loguje
    $logged_user = 2;
    
    $allowed_user=$admin | $superadmin;
    #0011         0001   | 0010

    if(($logged_user & $allowed_user) != 0){
        echo "This user is allowed";
    } else {
        echo "User is not allowed";
    }

    #Matematika rješenja
    #$allowed_user 0011
    #$logged_user 0010
    #Vršite operaciju AND
    #Rezultat 0010



?>