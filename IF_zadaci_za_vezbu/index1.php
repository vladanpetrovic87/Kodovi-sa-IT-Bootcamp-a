<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .boja {
            color: red;
        }

        #crvena {
            color: red;
        }

        #plava {
            color: blue;
        }

        #zelena {
            color: green;
        }
    </style>


</head>
<body>

    <?php
    // Zadatak 5.
        $a = 40;
        $b = 20;
        if($a > $b) {
            echo "<p style= 'color: green'> Broj $a je veci od broja $b </p>";
        }
        elseif ($b > $a) {
            echo "<p class='boja'> Broj $b je veci od broja $a </p>";
        }
        else {
            echo "<p> Brojevi su jednaki </p>";
        }


    // Zadatak 6.
        $x = 15;
        if($x < 0) {
            echo "<p id='crvena'> $x </p>";
        }
        elseif($x <=10) {
            echo "<p id='plava'> $x </p>";
        }
        else {
            echo "<p id='zelena'> $x </p>";
        }


    ?>
</body>
</html>