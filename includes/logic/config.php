<?php

    // database connection 
    $conn = mysqli_connect('localhost', 'root', '', 'citizen');
    // checking connection 

    if(!$conn) {
        die('Database failed to connect!!');
    }


?>