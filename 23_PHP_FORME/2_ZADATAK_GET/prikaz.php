<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz podataka</title>
</head>
<body>
    
    <h2>Uneli ste podatke:</h2>

    <?php
        echo "Ime i prezime: " . $_GET["imePrezime"];
        echo "<br>";
        echo "E-mail: " . $_GET["email"];
        echo "<br>";
        echo "Biografija: " . $_GET["bio"];
        echo "<br>";
        $pol =  $_GET["pol"];
        if($pol == 'z'){
            echo "<p style='color:'red'>Zenski pol</p>";
        }
        elseif($pol == 'm'){
            echo "<p style='color:blue'>Muski pol</p>";
        }
        else{
            echo "<p style='color:green'>Drugo</p>";
        }
        echo "<p>Znanje programskih jezika:</p>";
        $znanje = $_GET["znanje"]; //Vraca niz cekiranih vrednosti u checkbox-u gde je name "znanje"
        echo "<ul>";
            foreach($znanje as $z) {
                echo "<li>";
                echo $z;
                echo "</li>";
            }
        echo "</ul>";

    ?>

    <p>Kliknite <a href="index.php">ovde</a> za povratak na pocetnu</p>
</body>
</html>