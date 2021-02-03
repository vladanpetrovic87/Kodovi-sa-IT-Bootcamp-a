<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // 6. zadatak Odrediti sumu brojeva od 1 do 100
    $br = 1;
    $suma = 0;
    while($br <= 100) {
        $suma += $br; // ili $suma= $suma + $br;
        $br++;
    }
    echo "<p>Suma je: $suma</p>";

    /* 
        1,2,3,4,.....,97,98,99,100
    */
    $n = 100;
    $zbir = $n * ($n+1) /2;
    echo $zbir;

    // 9. zadatak Odrediti proizvod brojeva od n do m
    $n = 2;
    $m = 6;
    $p = 1;
    while($n <= $m) {
        $p *= $n; //  ili $p = $p * $n;
        $n++;
    }
    echo "<p>Proizvod brojeva od 2 do 6 je $p</p>";

    // 7. Odrediti sumu brojeva od 1 do n
    $br = 1;
    $suma = 0;
    $n = 200;
    while($br <= $n) {
        $suma += $br;
        $br++;
    }
    echo "<p>Suma je: $suma</p>";

    // 8. Odrediti sumu brojeva od n do m
    $n = 300;
    $m = 400;
    $suma = 0;
    while($n <= $m) {
        $suma += $n;
        $n++;
    }
    echo "<p>Suma je: $suma</p>";


    /* 10. Odrediti sumu kvadrata parnih i sumu kubova
    neparnih brojeva od n do m*/
    $sumaKv = 0;
    $sumaKub = 0;
    $n = 3;
    $m = 7;
    
    while($n <= $m) {
        if($n % 2 == 0){
            $sumaKv += $n**2; // ili $sumaKv = $sumaKv + $n * $n
         }
         else {
             $sumaKub += $n**3; // ili $sumaKub = $sumaKub + $n * $n * $n
         }
        $n++;
    }
    echo "Suma kvadrata je: $sumaKv <br> Suma kubova je: $sumaKub
    <hr>";

    // 11. Odrediti sa koliko brojeva je deljiv uneti broj k
    $k = 12;
    $d = 1;
    $deljiv = 0;

    while($d <= $k) {
        if($k % $d == 0) {
            $deljiv++;
        }
        $d++;
    }
    echo "$deljiv <hr>";






    ?>



</body>
</html>