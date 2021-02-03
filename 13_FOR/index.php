<?php
    // Prikaz brojeva od 1 do 5 preko WHILE petlje
    $i = 1; // Inicijalizacija brojaca
    while($i <= 5) // Uslov
    {
        //blok naredbi
        echo "<p>$i</p>";
        $i++; // Korekcija
    }

    // Prikaz brojeva od 1 do 5 preko FOR petlje
    for($i = 1; $i <= 5; $i++) // Inicijalizacija ; Uslov; Korekcija
    {
        echo "<p>$i</p>";
    }

    // Tablica mnozenja brojem 9 preko WHILE petlje
    $i = 1;
    while($i <= 9) {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
        $i++;
    }

    // Tablica mnozenja brojem 9 preko FOR petlje
    // $i++     <=>   $i = $i + 1  
    // Korekcija: $i = $i + 1 ili: $i += 1 ili: $i++
    for($i = 1; $i <= 9; $i = $i + 1) {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
    }

    // Tablica mnozenja brojem 9 preko FOR petlje, 2. nacin
    $i = 1;
    for( ; $i <= 9; ) {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
        $i++;
    }

    // Tablica mnozenja brojem 9 preko FOR petlje, 3. nacin
    $i = 1;
    for( ; ; ) {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
        $i++;
        if($i > 9) {
            break;
        }
    }

    /* Pocevsi od 1, paralelno ispisivati svaki sledeci i svaki drugi broj, sve dok neki od njih ne bude veci od 10*/
   
    /* 
    i  |  1  |  2  |  3  |  4  |  5  |
--------------------------------------------
    J  |  1  |  3  |  5  |  7  |  9  |
    */

    // pREKO while PETLJE
    $i = 1;
    $j = 1;
    while($i <= 10 && $j <= 10) {
        echo "<p>$i &nbsp; $j</p>";
        $i++;
        $j += 2;
    }

    // Preko FOR petlje
    for($i = 1, $j = 1; $i <= 10 && $j <= 10; $i++, $j += 2) {
        echo "<p>$i &nbsp; $j</p>";
    }


    // 1. Ispisati brojeve od 1 do 20.
    
    for($i = 1; $i <= 20; $i++) {
        echo "<p> $i </p>";
    }

    // 2. Ispisati brojeve od 20 do 1.

    for($i = 20; $i >= 1; $i--) {
        echo "<p> $i </p>";
    }

    // 2. nacin

    for($i = 20; $i >= 1; $i--) {
        echo "<p> $i </p>";
    }

    // 3. nacin
    for($i = 1; $i <= 20; $i++) {
        $broj = 21 - $i;
        echo "<p> $broj </p>";
    }

    // 3. Ispisati parne brojeve od 1 do 20.
    // 1. nacin: Brzi, ali za konkretnu situaciju

    for($i = 2; $i <= 20; $i += 2) {
        if($i % 2 == 0) {
            echo "<p> $i </p>";
        }   
    }


    // 2. nacin:  Univerzalniji, ali sporiji
    for($i = 1; $i <= 20; $i++) {
        if($i % 2 == 0) {
            echo "<p> $i </p>";
        }   
    }


    // 4. Ispisati dvostruku vrednost brojeva od 5 do 15.

    for($i = 5; $i <= 15; $i++) {
        $p = $i * 2;
         echo "<p> $p </p>";
    }

    // 5. Odrediti sumu brojeva od 1 do 100.
    $suma = 0;
    for($i = 1; $i <= 100; $i++) {
        $suma = $suma + $i;
    }
    echo "<p> Suma brojeva je broj: $suma </p>";

    // 6. Odrediti sumu brojeva od 1 do $n.
    $suma = 0;
    $n = 65;
    for($i = 50; $i <= $n; $i++) {
        $suma = $suma + $i;
    }
    echo "<p> Suma brojeva je broj: $suma </p>";

    // 7. Odrediti sumu brojeva od $n do $m.
    $n = 5;
    $m = 9;
    $suma = 0;
    for($i = $n; $i <= $m; $i++) {
        $suma = $suma + $i;
    }
    echo "<p> Suma brojeva je broj: $suma </p>";

    // 8. Odrediti proizvod brojeva od $n do $m.
    $m = 25;
    $pr = 1;
    for($n = 20; $n <= $m; $n++) {
        $pr = $pr * $n;
    }
    echo "<p> Proizvod brojeva je broj: $pr </p>";

    // 2 nacin
    $n = 2;
    $m = 6;
    $pr = 1;
    for($i = $n; $i <= $m; $i++) {
        $pr = $pr * $i;
    }
    echo "<p> Proizvod brojeva je broj: $pr </p>";



    // 9. Odrediti sumu kvadrata brojeva od n do m
    $m = 15;
    $sumaKv = 0;
    for($n = 10; $n <= $m; $n++) {
        $sumaKv = $sumaKv + $n*$n;
    }
    echo "<p> Suma kvadrata je broj: $sumaKv </p>";

    // 2. nacin
    $n = 3;
    $m = 5;
    $suma = 0;
    for($i = $n; $i <= $m; $i++) {
        $br = $i ** 2; // $br = $i * $i;
        $suma += $br;
    }
    echo "<p> Suma kvadrata je broj: $suma </p>";

    // 9'. Odrediti kvadrat sume brojeva od $n do $m.
    $n = 3;
    $m = 5;
    $suma = 0;
    for($i = $n; $i <= $m; $i++) {
        $suma += $i;
    }
    $kvadrat = $suma ** 2;
    echo "<p> Kvadrat sume brojeva od $n do $m je: $kvadrat </p>";

    /* 10. Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For
    petljom prikazati naizmenično ukupno $n sličica.*/
    // Prvo prikazujemo pre tri slicice
    for($i = 1; $i <= 3; $i++) {
        echo "<img src='slike/$i.jpg'>";
    }
    // Resenje zadatka 10
    $n = 8;
    for($i = 1; $i <= $n; $i++) {
        if($i % 3 == 1){
        echo "<img src='slike/1.jpg' width='200px'>";
        }
        elseif($i % 3 == 2) {
            echo "<img src='slike/2.jpg' width='200px'>";  
        }
        else {
            echo "<img src='slike/3.jpg' width='200px'>";
        }
    }
     /*
    Gornje resenje je rucno zapisano sledece:
        $i    | $i % 3  |    r.br. slike
        -----------------------
        0     |   0     |  1
        1     |   1     |  2
        2     |   2     |  3
        3     |   0     |  1
        4     |   1     |  2
        5     |   2     |  3
        6     |   0     |  1
        7     |   1     |  2
    */


    // 2.nacin
    for($i = 0; $i < $n; $i++) {
        $broj = $i % 3 + 1;
        echo "<img src='slike/$broj.jpg'>";
    }

    // 11. Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30.
    $m = 30;
    $suma = 0;
    for($n = 1; $n <= $m; $n++) {
        if($n % 9 == 0) {
            $suma = $suma + $n;
        }
    }
    echo "<p> $suma </p>";

    // 12. Odrediti proizvod svih brojeva deljivih sa 11 u intervalu
    // od 20 do 100.
    $j = 100;
    $proizvod = 1;
    for($i = 20; $i <= $j; $i++) {
        if($n % 11 == 0) {
            $proizvod = $proizvod * $i;
        }
    } 
    echo "<p> $proizvod </p>";

    // Univerzalnije resenje - za proizvoljne brojeve iz intervala [$n, $m]
    $n = 10;
    $m = 22;
    $z = 11;
    $proizvod = 1;
    $pocetni = ceil($n / $z) * $z; 
    for($i = $pocetni; $i <= $m; $i += $z)
    {
        $proizvod *= $i;
    }
    echo "<p>$proizvod</p>";



    // 2. nacin
    // Resenje ako je interval dat za konkretne brojeve
    $proizvod = 1;
    for($i = 22; $i <= 100; $i += 11) {
        $proizvod *= $i;
    }
    echo "<p> $proizvod </p>";

    /* 13. Prebrojati koliko ima brojeva deljivih sa 13 u intervalu
    od 5 do 150.*/
    $m = 150;
    $deljiv = 0;
    for($n = 5; $n <= $m; $n++) {
        if($n % 13 == 0) {
            $deljiv++;
        }
    }
    echo "<p> $deljiv </p>";

    /* 14. Ispisati aritmetičku sredinu brojeva od $n do $m.*/
    $m = 16;
    $n = 10;
    $sum = 0;
    for($i = $n; $i <= $m; $i++) {
        $sum = $sum + $i;
    }
    $artm = $sum / ($i - $n);
        
    echo "Aritmeticka sredina je $artm";


    /* 15. Prebrojati koliko brojeva od $n do $m je pozitivno, a
    koliko njih je negativno.*/
    $n = -20;
    $m = 30;
    $pozitivni = 0;
    $negativni = 0;
    for($i = $n; $i <= $m; $i++){
        if($i >= 0) {
            $pozitivni++;
        }
        else {
            $negativni++;
        }
    }
    echo "<p> Pozitivni su $pozitivni </p>";
    echo "<p> Negativni su $negativni </p>";

    /* 16. Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa
    3 ili sa 5.*/
    $n = 5;
    $m = 50;
    $br = 0;
    for($i = $n; $i <= $m; $i++) {
        if($i % 3 == 0 || $i % 5 == 0) {
            $br++;
        }
    }
    echo "<p> $br </p>";

    // 29 = 2 * 10 + 9;  9 je ostatak

    /* 17. Prebrojati i izračunati sumu brojeva od n do m kojima
    je poslednja cifra 4 i parni su.*/
    $n = 10;
    $m = 50;
    $suma = 0;
    for($i = $n; $i <= $m; $i++) {
        if($i % 10 == 4 && $i % 2 == 0) {
            $sum += $i;
        }
    }
    echo "<p> $sum </p>";

    /* 18. Ispisati brojeve od $n do $m, koji su deljivi sa $a.*/
    $n = -15;
    $m = 10;
    $a = -5;
    if($a != 0) {
        echo "<p>Interval od $n do $m nije deljivo sa $a </p>";
        for($i = $n; $n <= $m; $i++){
            if($i % $a == 0){
                echo $i;
            }
        }
    }

    echo "Zadatak 19: ";
    $n = -15;
    $m = 10;
    $a = -5;
    if ($a != 0) {
        echo "Interval od $n do $m. Nisu deljivi sa $a: "; 
        for ($i = $n; $i <= $m; $i++) {
            if ($i % $a != 0) {
                echo "$i, ";
            }
        }
        echo "<br>";
    } else {
        echo "Trazi se deljivost sa 0 sto po definiciji nije dozvoljeno.<br>";
    }

    echo "Zadatak 20: ";
    $n = -10;
    $m = 15;
    $a = 3;
    $suma1 = 0;
    $suma2 = 0;
    if ($a != 0) {
        echo "Interval od $n do $m: <br>"; 
        for ($i = $n; $i <= $m; $i++) {
            echo "$i, ";
            if ($i % $a != 0) {
                $suma1 += $i;
            } else {
                $suma2 += $i;
            }
        }
        echo "<br>";
        $suma = $suma1 + $suma2;
        echo "Suma brojeva $suma<br>";
        echo "Suma brojeva deljivih sa $a: $suma2<br>";
        echo "Suma brojeva nedeljivih sa $a: $suma1<br>";
    } else {
        echo "Trazi se deljivost sa 0 sto po definiciji nije dozvoljeno.<br>";
    }

    echo "Zadatak 21: ";
    $n = -15;
    $m = 10;
    $a = -5;
    $b = 3;
    $p = 1;
    if ($a * $b != 0) {
        echo "Interval od $n do $m. Deljivi sa $a a nisu sa $b: "; 
        for ($i = $n; $i <= $m; $i++) {
            if ($i % $a == 0 && $i % $b != 0) {
                echo "$i, ";
                $p *= $i;
            }
        }
        if ($p == 1) {
            echo "Nema brojeva koji zadovoljavaju uslov";
        } else {
            echo " a njihov proizvod je: $p<br>";
        }
    } else {
        echo "Trazi se deljivost sa 0 sto po definiciji nije dozvoljeno.<br>";
    }

   




?>