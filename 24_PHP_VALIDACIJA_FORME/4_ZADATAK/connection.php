<?php

    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $db = "itbootcamp";

    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error) {
        die("Error connecting to database: " . $conn->connect_error);
    }


?>