<?php

    require_once "povezivanje.php";

    $q = "SELECT DISTINCT SUBSTRING(prezime,1) AS prezime FROM pacijenti ORDER BY prezime";
    $result = $conn->query($q);
    if(!$result->num_rows) {
        echo "<p>Nema pacijenata u bazi!</p>";
    }
    else {
        foreach($result as $row) {
            $prezime = $row['prezime'];
            echo "<a href='#$prezime'>$prezime</a>";
        }
    }

    if($result->num_rows) {
        foreach($result as $row) {
            $prezime = $row['prezime'];
            echo "<h3 id='$prezime'>$prezime</h3>";
            echo "<table class='tabela'>";
                echo "<tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Visina</th>
                    <th>Srednja visina</th>
                    <th>Tezina</th>
                    <th>Srednja tezina</th>
                    <th>Datum rodjenja</th>
                    </tr>";
                $q2 = "SELECT *, AVG(visina) AS srednja_visina, AVG(tezina) AS srednja_tezina FROM pacijenti WHERE prezime = '$prezime'
                ORDER BY ime";
                $sviPacijenti = $conn->query($q2);
                foreach($sviPacijenti as $pac) {
                    echo "<tr>";
                    echo "<td>" . $pac['ime'] . "</td>";
                    echo "<td>" . $pac['prezime'] . "</td>";
                    echo "<td>" . $pac['visina'] . "</td>";
                    echo "<td>" . $pac['srednja_visina'] . "</td>";
                    echo "<td>" . $pac['tezina'] . "</td>";
                    echo "<td>" . $pac['srednja_tezina'] . "</td>";
                    echo "<td>" . $pac['datum_rodjenja'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
        }
    }

?>