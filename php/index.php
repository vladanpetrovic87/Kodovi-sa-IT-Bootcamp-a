<?php
    echo "Zdravo!";
    $a = 5; // promenljiva $a dobija vrednost 5
    echo $a;
    $dan = "utorak"; // promenljiva $dan dobija vrednost "utorak"
    echo $dan;
    $a = 3;
    echo $a;
    $a = "Vladan";
    echo $a;
    $i1 = 6;
    $i2 = 5.5;
    $b = 2 + 5;
    echo $b;
    $c = $b - 3;  //Desna strana: $b - 3 = 7 - 3 = 4, Promenljiva $c dobija vrednost 4
    echo $c;
    $b = $b + 1; // Desna strana: $b + 1 = 7 + 1 = 8, Promenljiva $b dobija vrednost 8
    echo $b;
    $b = $b * 2; // Dupliranje vrednosti promenljive $b 
    echo $b;
?>

<?php
    // Zadatak 1
    $h = 17;
    $m = 14;
    echo "<br>";
    echo $h * 60 + $m;

    // Zadatak 2 
    date_default_timezone_set('Europe/Belgrade');
    $sati = date ("G");
    $minuti = date ("i");
    $ukupnoMinuti = $sati * 60 + $minuti; 
    echo "<br>";
    echo $ukupnoMinuti;

    // Zadatak 3
    echo "<br>";
    $cena = 1389;
    $nov = 3000;
    $kusur = $nov - $cena;
    echo $kusur;
    echo "<br>";
    $eur = 1560;
    $kurs = 117.59;
    $din = $eur * $kurs;
    echo $din;
    echo "<br>";
    $din = 10500;
    $kurs = 117.59;
    $eur = $din / $kurs;
    echo $eur;
    echo "<br>";
    $eur = 689;
    $kursEur = 117.59;
    $kursDol = 96.73;
    $dolar = $eur * $kursEur / $kursDol;
    echo $dolar;
    echo "<br>";
    $dolar = 1650;
    $kursEur = 117.59;
    $kursDol = 96.73;
    $eur = $dolar / $kursDol * $kursEur;
    echo $eur;
    echo "<br>";
    $cel = 30;
    $far = $cel * 1.8 + 32;
    echo $far;
    echo "<br>";
    $cel = 40;
    $kel = $cel + 273.15;
    echo $kel;
    echo "<br>";
    $kel = 313.15;
    $cel = $kel - 273.15;
    echo $cel;
    echo "<br>";
    // Zadatak 10
    // 100 : x = (100 - popust) : cena
    // x = 100 * cena / (100 - popust)
    $cena = 3600;
    $popust = 20;
    $punaCena =  $cena * (100 + $popust) / 100;
    echo $punaCena;
    echo "<br>";
    // Zadatak 11
    $n = 25;
    $neiskorisceno = $n % 3;
    $brojDana = floor($n / 3);  // isto je u ovom zadatku i (int) ($n / 3)
    echo "<br>";
    echo $neiskorisceno;
    // nbsp - razmak koji se prikazuje u html, pod navodnicima se pise
    echo "&nbsp;";   
    echo $brojDana;

    // (int) - operator konverzije 
    echo "<br>";
    echo (int) 3.8;
    echo "<br>";
    echo (int) "3.8";
    echo (int) false;
?>