<?php

    require_once "povezivanje.php";

    $q = "SELECT * FROM pacijenti WHERE tezina / (visina * visina / 10000) < 18.5 OR tezina / (visina * visina / 10000) > 26";
    $result = $conn->query($q);
    // WHERE tezina / (visina * visina / 10000) NOT BETWEEN 18.5 AND 26 - ovo je drugi nacin
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