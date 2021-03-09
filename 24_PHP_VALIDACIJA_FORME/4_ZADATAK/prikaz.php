<?php
      require_once "connection.php";

      $prikazi = "SELECT * FROM korisnici";
      $result = $conn->query($prikazi);

      if(!$result->num_rows) {
            echo "<p>Nema nijednog korisnika u bazi!</p>";
        }
        else {
            echo "<table border='1'>";
            echo "<tr>
                <th>Ime i prezime</th>
                <th>E-mail</th>
                <th>Biografija</th>
                <th>Pol</th>
                </tr>";
                foreach($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['ime_i_prezime'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['biografija'] . "</td>";
                    echo "<td>" . $row['pol'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
        }

        
       
    ?>