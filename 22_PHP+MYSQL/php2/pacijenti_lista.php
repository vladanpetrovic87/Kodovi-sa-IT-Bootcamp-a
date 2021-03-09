<?php
    require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php

        $q = "SELECT * FROM pacijenti";
        $result = $conn->query($q);
        if(!$result->num_rows) {
            echo "<p class='info'>Trenutno u bazi nemate pacijenata!</p>";
        }
        else {
                foreach($result as $row) {
                echo "<ol class='lista'>";
                echo "<li>Ime:" . $row['ime'] . "</li>";
                echo "<li>Prezime:" . $row['prezime'] . "</li>";
                echo "<li>Visina:" . $row['visina'] . "</li>";
                echo "<li>Tezina:" . $row['tezina'] . "</li>";
                echo "<li>Datum rodjenja:" . $row['datum_rodjenja'] . "</li>";
                echo "</ol>";
            }
                
                

        }

    ?>

</body>
</html>