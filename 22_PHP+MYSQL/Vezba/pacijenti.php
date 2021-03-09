<?php
    require_once "povezivanje.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $q = "SELECT * FROM pacijenti ORDER BY visina DESC";
        $result = $conn->query($q);
        if(!$result->num_rows) {
            echo "<p>Nema nijednog pacijenta u bazi!</p>";
        }
        else {
            echo "<table border='1'>";
            echo "<tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Visina</th>
                <th>Tezina</th>
                <th>Datum rodjenja</th>
                </tr>";
                foreach($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['ime'] . "</td>";
                    echo "<td>" . $row['prezime'] . "</td>";
                    echo "<td>" . $row['visina'] . "</td>";
                    echo "<td>" . $row['tezina'] . "</td>";
                    echo "<td>" . $row['datum_rodjenja'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
        }


        $q = "SELECT * FROM pacijenti ORDER BY tezina DESC";
        $result = $conn->query($q);
        if(!$result->num_rows) {
            echo "<p>Nema nijednog pacijenta u bazi!</p>";
        }
        else {
            echo "<table border='1'>";
            echo "<tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Visina</th>
                <th>Tezina</th>
                <th>Datum rodjenja</th>
                </tr>";
                foreach($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['ime'] . "</td>";
                    echo "<td>" . $row['prezime'] . "</td>";
                    echo "<td>" . $row['visina'] . "</td>";
                    echo "<td>" . $row['tezina'] . "</td>";
                    echo "<td>" . $row['datum_rodjenja'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
        }

        $q = "SELECT * FROM pacijenti ORDER BY datum_rodjenja DESC";
        $result = $conn->query($q);
        if(!$result->num_rows) {
            echo "<p>Nema nijednog pacijenta u bazi!</p>";
        }
        else {
            echo "<table border='1'>";
            echo "<tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Visina</th>
                <th>Tezina</th>
                <th>Datum rodjenja</th>
                </tr>";
                foreach($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['ime'] . "</td>";
                    echo "<td>" . $row['prezime'] . "</td>";
                    echo "<td>" . $row['visina'] . "</td>";
                    echo "<td>" . $row['tezina'] . "</td>";
                    echo "<td>" . $row['datum_rodjenja'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
        }

        

    

    ?>
    
</body>
</html>