 <?php
    
    $logged_user = 2;

    $user = 1;
    $admin = 2;

    if(($logged_user & $admin) != 0){
        include 'menu2.php';
    }

 ?>