<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ugnjezneno grananje</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        div {
            color: red;
        }

        #slicica {
            border: 5px pink solid;
        }

    </style>
</head>
<body>

    <div>
        Zdravo!
    </div>

    <div>
        Ucim PHP
        <?php
            echo ":)";
        ?>
    </div>



    <p>Ovo je prvi paragraf</p>

        <article>
            Da li je broj 3 paran?
            <?php
                $br = 3;
                if($br % 2 == 0) {
                    echo "Broj $br je paran broj";
                }
                else {
                    echo "Broj $br nije paran broj";
                }
            ?>
        </article>

        <?php
            echo "<img src='slike/male.svg'id='slicica'>";
        ?>

        <?php
            $boja = "red";

            if($boja == "red") {
                echo "<p style='color : $boja'>Neki tekst</p>";
            }

        /* 20.Učitati dva cela broja i ispitati da li je vedi od
njih paran.*/
            $br1 = 15;
            $br2 = 15;

            if($br1 > $br2) {
                echo "Broj $br1 je veci";
                if($br1 %2 == 0) {
                    echo " i paran je";
                }
                else {
                    echo " i neparan je";
                }
            }
            elseif ($br2 > $br1) {
                echo "Broj $br2 je veci";
                if($br2 % 2 == 0) {
                    echo " i paran je";
                }
                else {
                    echo " i neparan je";
                }
            }
            else {
                echo "Brojevi $br1 i $br2 su jednaki";
            }






        ?>


</body>
</html>