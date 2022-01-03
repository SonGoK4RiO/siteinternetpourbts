<?php
    session_start();
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'id16061719_user');
    define('DB_PASSWORD', 'v]Tc@ejdp^KqtTN5');
    define('DB_NAME', 'id16061719_karim');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($link === false){
        // très professionel de laisser ça en prod
        // echo "<script>console.log('fuck');</script>";
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }else{
        echo "<script>console.log('it worked yey');</script>";
    }
?>