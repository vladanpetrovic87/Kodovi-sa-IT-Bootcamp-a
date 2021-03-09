<?php

    require_once "povezivanje.php";

    //Dohvatamo sva pocetna slova prezimena i kreiramo linkove
    $q = "SELECT DISTINCT LEFT(prezime,1) AS prvo_slovo FROM pacijenti ORDER BY prezime";
    //SUBSTRING(prezime,1,1)
    $result = $conn->query($q);
        if(!$result->num_rows) {
            echo "<p class='info'>Nema nijednog pacijenta u bazi!</p>";
        }
        else {
            foreach ($result as $row) {
                $prvoSlovo = $row['prvo_slovo'];
                echo "<a href='#$prvoSlovo'>$prvoSlovo</a>";
            }
        }

        //Za svako slovo kreiramo tabelu sa pacijentima cije prezime pocinje na to slovo
        // $result = $conn->query($q);
        if($result->num_rows) {
            foreach($result as $row) {
                $prvoSlovo = $row['prvo_slovo'];
                //Prikazi sve pacijente cije prezime pocinje na $prvoSlovo
                echo "<h3 id='$prvoSlovo'>$prvoSlovo</h3>";
                echo "<table class='tabela'>";
                echo "<tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Visina</th>
                    <th>Tezina</th>
                    <th>Datum rodjenja</th>
                    </tr>";
                $q2 = "SELECT * FROM pacijenti WHERE prezime LIKE '" . $prvoSlovo . "%'
                ORDER BY ime";
                $sviPacijenti = $conn->query($q2);
                foreach($sviPacijenti as $pac) {
                    echo "<tr>";
                    echo "<td>" . $pac['ime'] . "</td>";
                    echo "<td>" . $pac['prezime'] . "</td>";
                    echo "<td>" . $pac['visina'] . "</td>";
                    echo "<td>" . $pac['tezina'] . "</td>";
                    echo "<td>" . $pac['datum_rodjenja'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }


?>