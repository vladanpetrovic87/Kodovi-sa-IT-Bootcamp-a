<?php

    $servername = "localhost";
    $username = "admin";
    $password = "admin123";


    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error) {
        die("Error connecting to database: " . $conn->connect_error);
    }

    $i = "CREATE DATABASE itbootcamp";

    $result = $conn->query($i);
    if($result) {
        echo "<p>Baza itbootcamp je uspesno kreirana!</p>";
    }
    else{
        $err = $conn->error;
        echo "<p>Doslo je do greske prilikom kreiranja baze itbootcamp: $err</p>";
    }

    require_once "connection.php";


    $k = "CREATE TABLE IF NOT EXISTS korisnici (
        id INT AUTO_INCREMENT,   
        ime_i_prezime VARCHAR(255),
        email VARCHAR(150),
        biografija TEXT,
        pol CHAR(1),
        PRIMARY KEY (id)
    );";

    $resultQuery = $conn->query($k);


    if($resultQuery) {
    echo "<p>Tabela korisnici je uspesno dodata u bazu!</p>";
    }
    else{
        $err = $conn->error;
        echo "<p>Doslo je do greske prilikom kreiranja tabele korisnici: $err</p>";
}


?>