<?php

    require_once "connection.php";

    $q = "INSERT INTO pacijenti VALUES (8, 'Laza', 'Lazic', 190, 90);";
    $q .= "INSERT INTO pacijenti VALUES (9, 'Pera', 'Peric', 195, 93);";  
    $q .= "ALTER TABLE pacijenti ADD datum_rodjenja DATE AFTER prezime;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1990-08-20' WHERE id=1;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1992-08-10' WHERE id=2;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '2000-06-20' WHERE id=3;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1980-01-23' WHERE id=4;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '2003-04-15' WHERE id=5;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1985-08-15' WHERE id=6;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1980-10-10' WHERE id=7;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1975-05-25' WHERE id=8;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '2004-06-20' WHERE id=9;";

    if($conn->multi_query($q)) {
        echo "<p>Uspesno izvrsenje multi query</p>";
    }
    else {
        echo "<p>Neuspesno izvrsenje multi query: " . $conn->error . "</p>";
    }