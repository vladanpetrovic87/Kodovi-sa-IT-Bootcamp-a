<?php

    require_once "povezivanje.php";

    $q = "SELECT * FROM pacijenti WHERE datum_rodjenja BETWEEN '1970-01-01' AND '1990-01-01';";
    $result = $conn->query($q);
    if(!$result->num_rows) {
        echo "<p>U bazi ne postoje takvi pacijenti!</p>";
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