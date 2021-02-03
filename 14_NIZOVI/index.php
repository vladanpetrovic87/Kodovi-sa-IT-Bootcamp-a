<?php


    // Bez nizova:
    $cars1 = "Volvo";
    $cars2 = "BMV";
    $cars3 = "Toyota";

    // Sa nizovima:
    $cars = array("Volvo", "BMV", "Toyota");
    // Elementi niza: "Volvo", "BMV", "Toyota"
    // Indeksi elemenata: 0, 1, 2

    var_dump($cars1);
    var_dump($cars);

    echo "<p>$cars[0]</p>";
    echo "<p>$cars[1]</p>";
    echo "<p>$cars[2]</p>";

    echo "<hr>";
    $cars[500] = "Audi";
    $cars[1] = "Peugeot";
    echo "<p>$cars[0]</p>";
    echo "<p>$cars[1]</p>";
    echo "<p>$cars[2]</p>";
    // echo "<p>$cars[3]</p>"; - Notice: Undefined offset: 3
    // echo "<p>$cars[4]</p>"; - Notice: Undefined offset: 4
    echo "<p>$cars[500]</p>";



    // Kreiranje niza polaznika
    $polaznici = array();
    $polaznici[] = "Marko";
    $polaznici[] = "Marija";
    $polaznici[] = "Ivana";
    $polaznici[] = "Goran";
    $polaznici[] = "Vladan";
    var_dump($polaznici);

    $duzina = count($polaznici);
    //var_dump($duzina);
    for($i = 0; $i < $duzina; $i++)
    {
        echo "<p>$polaznici[$i]</p>";
    }

    
    // 1) Ispisati sve elemente niza od 5 stringova.
    $duzina = count($polaznici);
    for($i = 0; $i < $duzina; $i++) {
            echo "<p>$polaznici[$i]</p>";
        }



    // 2) Odrediti zbir elemenata celobrojnog niza.
    $niz = array(6, 9, -4, -1, 0, 5, 11);
    $zbir = 0;
    for($i = 0; $i < count($niz); $i++) {
        $zbir += $niz[$i];
    }
    echo "<p>Zbir svih elemenata niza jednaka je: $zbir</p>";


    // Ugradjena funkcija 
    $suma = array_sum($niz);
    echo "<p>Zbir svih elemenata niza jednaka je: $suma</p>";


    // 3) Odrediti srednju vrednost elemenata
    // celobrojnog niza.
    $niz = array(6, 9, -4, -1, 0, 5, 11);
    // $niz = array();
    $zbir = 0;
    for($i = 0; $i < count($niz); $i++) {
        $zbir += $niz[$i];
    }
    echo "<p>Zbir svih elemenata niza jednaka je: $zbir</p>";
    $duzinaNiza = count($niz);
    if($duzinaNiza == 0) {
        echo "<p>Srednja vrednost elemenata niza jedaka je: 0</p>";
    }
    else {
        $srvr = $zbir / $duzinaNiza;
        echo "<p>Srednja vrednost elemenata niza jedaka je: $srvr</p>";
    }

    // 4) Odrediti maksimalnu vrednost u
    // celobrojnom nizu.
    $maks = $niz[0];
    for($i = 1; $i < count($niz); $i++) {
        if($niz[$i] > $maks) {
            $maks = $niz[$i];
        }
    }
    echo "<p>Maksimalna vrednost niza jednaka je: $maks</p>";

    $niz2 = array(5, 14, 1, 8, 14, 8, 1, 14, 7);
    // 4.1 Odrediti PRVO pojavljivanje maksimalne vrednosti
    $maks = $niz2[0];
    for($i = 1; $i < count($niz2); $i++) {
        if($niz2[$i] > $maks) {
            $maks = $niz2[$i];
        }
    }
    echo "<p>Maksimalna vrednost niza jednaka je: $maks</p>";


    // 4.1 Odrediti POSLEDNJE pojavljivanje maksimalne vrednosti
    $maks = $niz2[0];
    for($i = 1; $i < count($niz2); $i++) {
        if($niz2[$i] >= $maks) {
            $maks = $niz2[$i];
        }
    }
    echo "<p>Maksimalna vrednost niza jednaka je: $maks</p>";


    // 5) Odrediti minimalnu vrednost u
    // celobrojnom nizu.
    $min = $niz[0];
    for($i = 1; $i < count($niz); $i++) {
        if($niz[$i] < $min) {
            $min = $niz[$i];
        }
    }
    echo "<p>Minimalna vrednost niza jednaka je: $min</p>";

   /* 6) Odrediti indeks najvećeg elementa
    celobrojnog niza. */
    $indeks = 0; // $maks = $niz[0], odnosno $maks = $niz[$index]
    for($i = 1; $i < count($niz); $i++) {
        if($niz[$i] > $niz[$indeks]) {  //if($niz[$i] > $maks)
            $indeks = $i;
        }
    }
    $maks = $niz[$indeks];
    echo "<p>Indeks najveceg elementa niza je: $indeks, a vrednost je $maks</p>";

    // 2. nacin
    $maks = $niz[0];
    $index = 0;
    for($i = 1; $i < count($niz); $i++) {
        if($niz[$i] > $maks) {
            $maks = $niz[$i];
            $index = $i;
        }
    }
    echo "<p>Indeks najveceg elementa niza je: $indeks, a vrednost je $maks</p>";

// 6.1 Odrediti indeks PRVOG pojavljivanja maksimalnog elementa: if($niz[$i] > $niz[$indeks])
// 6.2 Odrediti indeks POSLEDNJEG pojavljivanja maksimalnog elementa: if($niz[$i] >= $niz[$indeks])

     /* 7) Odrediti broj elemenata celobrojnog niza
    koji su veći od srednje vrednosti. */   // Radi se kroz 2 for petlje
    
    $zbir = 0;
    for($i = 0; $i < count($niz); $i++) {
        $zbir += $niz[$i];
    }
    $srvr = $zbir / count($niz);
    $br = 0;
    for($i = 0; $i < count($niz); $i++) {
        if($niz[$i] > $srvr) {
            $br++;
        }
    }
    echo "<p>Broj elemenata veci od srednje vrednosti je $br</p>";

    // Netacni pristup:
    /* $zbir = 0;
    $br = 0;
    for($i = 0; $i < count($niz); $i++) {
        $zbir += $niz[$i];
        $srvr = $zbir / count($niz);
        if($niz[$i] > $srvr) {
            $br++;
        }
    }
    echo "<p>Broj elemenata veci od srednje vrednosti je $br</p>"; */

   /* 8) Izračunati zbir pozitivnih elemenata
    celobrojnog niza. */
    $zbir = 0;
    for($i = 0; $i < count($niz); $i++) {
        if($niz[$i] > 0) {
            $zbir += $niz[$i];
        }
    }
    echo "<p>Zbir pozitivnih elemenata niza jedanaka je $zbir</p>";

    // 8.1. Izracunati srednju vrednost pozitivnih elemenata celobrojnog niza
    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($niz); $i++) {
        if($niz[$i] > 0) {
            $zbir += $niz[$i];
            $broj++;
    }
}
    if($broj > 0) {
        $srvr = $zbir / $broj;
    }
    else {
        $srvr = 0;
    }
    echo "<p>Srednja vrednost pozitivnih brojeva u nizu jednaka je $srvr</p>";

    /*9) Odrediti broj parnih elemenata u
    celobrojnom nizu. */
    $brojParnih = 0;
    for($i = 0; $i < count($niz); $i++) {
        if($niz[$i] % 2 == 0) {
            $brojParnih++;
        }
    }
    echo "<p>Broj parnih elemenata niza jednak je $brojParnih</p>";

    /*10) Izračunati sumu elemenata u nizu sa
    parnim indeksom. */
    // Prva varijanta
    $sumaParniIndex = 0;
    for($i = 0; $i < count($niz); $i++) {
        if($i % 2 == 0) {   //ovde se proverava broj indeksa parnih zato se stavlja $i
            $sumaParniIndex += $niz[$i];
        }
    }
    echo "<p>Suma elemenata sa parnim indeksom jednaka je $sumaParniIndex</p>";

    // Druga varijanta
    $sumaParniIndex = 0;
    for($i = 0; $i < count($niz); $i+=2) {
        $sumaParniIndex += $niz[$i];
    }
    echo "<p>Suma elemenata sa parnim indeksom jednaka je $sumaParniIndex</p>";

    /*11) Promeniti znak svakom elementu
    celobrojnog niza.*/
    $niz = array(6, 9, -4, -1, 0, 5, 11);
    for($i = 0; $i < count($niz); $i++) {
        $niz[$i] = - $niz[$i]; // ili $niz[$i] *= -1;
    }
    var_dump($niz);

   

    /*12) Promeniti znak svakom neparnom
    elementu celobrojnog niza sa parnim
    indeksom. */
    for($i = 0; $i < count($niz); $i++) {
        if($niz[$i] % 2 != 0 && $i % 2 == 0) {
            $niz[$i] = - $niz[$i];

        }
    }
    var_dump($niz);  //implode(",",$a)

    // 13) Odrediti broj parnih elemenata sa
    // neparnim indeksom.
    $br = 0;
    for($i = 0; $i < count($niz); $i++) {
    if($niz[$i] % 2 == 0 && $i % 2 != 0) {
        $br++;
    }
    }
    echo "<p>Broj parnih elemenata sa neparnim indeksom je $br</p>";

    $imena = array("Andjelija", "Milos", "Goran", "Ilija", "Dalibor", "Ivana", "Kristina");
    /*14) Ispisati dužinu svakog elementa u nizu
    stringova. */
    echo "<p>Duzine stringova u nizu su: ";
    for($i = 0; $i < count($imena); $i++) {
        $duzina = strlen($imena[$i]);
        echo $duzina . "&nbsp";
    }
    echo "</p>";


   /* 15) Odrediti element u nizu stringova sa
    maksimalnom dužinom. */
    $maxDuzina = strlen($imena[0]);
    $stringMaxDuzine = $imena[0];
    for($i = 1; $i < count($imena); $i++) {
        if(strlen($imena[$i]) > $maxDuzina) {
            $maxDuzina = strlen($imena[$i]);
            $stringMaxDuzine = $imena[$i];
        }
    }
    echo "<p>String sa maksimalnom duzinom: $stringMaxDuzine</p> ";

    /*16) Odrediti broj elemenata u nizu stringova
    čija je dužina veća od prosečne dužine
    svih stringova u nizu. */  // 2 for petlje
    $zbir = 0;
    $br = 0;
    for($i = 0; $i < count($imena); $i++) {
        $zbir += strlen($imena[$i]);
    }
    $prosek = $zbir / count($imena);

    for($i = 0; $i < count($imena); $i++) {
        if(strlen($imena[$i]) > $prosek) {
            $br++;
        }
    }
    echo "<p>Broj elemenata cija je duzina veca od prosecne duzine je $br</p>";


    /* 17) Odrediti broj elemenata u nizu stringova
    koji sadrže slovo 'a'. */
    echo "<hr>";

    /*strpos($str1, $str2) - Funkcija koja trazi $str2 u $str1.
    Rezultat koji se vraca:
    1) Ako se $str2 nalazi u $str1, tada funkcija vraca POZICIJU prvog pojavljivanja
    (0,1,2,3,4,5.....) - NEKI CEO Broj
    2) Ako se $str2 ne nalazi u $str1, tada funkcija vraca FALSE - LOGICKU VREDNOST*/
    // Kako pitati da li se u stringu $str pojavljuje karakter "a"?
    // if(strpos($str, 'a') !== false)  
    /*
    Nije tacno if(strpos($str, 'a')) ili if(strpos($str, 'a') == true)
    
    */
    // if(strpos("Ponedeljak", "P") !== false){
    //     echo "Nalazi se string 'P'";
    // }

    /* Kada trazimo neko slovo npr. a ono je case sensitive znaci vodimo racuno da li trazimo velika i mala slova */
    
    $brojSadrziA = 0;
    for($i = 0; $i < count($imena); $i++) {
        $ime = $imena[$i];
        if(strpos($ime, "a") !== false) {
            $brojSadrziA++;
        }
    }
    echo "<p>Broj imena koji sadrze slova 'a': $brojSadrziA</p> ";

    /*18) Odrediti broj elemenata u nizu stringova
    koji počinju na slovo 'a' ili 'A'. */
    $brojPocinjuA = 0;
    for($i = 0; $i < count($imena); $i++) {
        // $ime = $imena[$i];  //prvi nacin
        // if(strpos($ime, "a") === 0 || strpos($ime, "A") === 0) {
            if($imena[$i][0] == 'a' || $imena[$i][0] == 'A') {  //drugi nacin
            $brojPocinjuA++;
        }
    }
    echo "<p>Broj imena koji poinju na slovo 'A' ili'a': $brojPocinjuA</p> ";

    /* 19) Na osnovu celobrojnog niza $a[0], $a[1],
    ... formirati niz $b[0], $b[1], ... koji sadrži
    samo pozitivne brojeve. */

    $a = array(-5, 1, 6, -4, 10);
    $b = array();
    for($i = 0; $i < count($a); $i++) {
        if($a[$i] > 0) {
            $b[] = $a[$i];
        }
    }
    var_dump($b);

    /*20) Dati su nizovi
    $a[0], $a[1], ..., $a[n - 1] i
    $b[0], $b[1], ..., $b[n - 1].
    Formirati niz $c[0], $c[1], ..., $c[2n – 1] čiji
    su elementi
    $a[0], $b[0], $a[1], $b[1], ..., $a[n - 1], $b[n
    - 1]. */
    $a = array(-5, 1, 6, -4, 10, 15, -8);
    $b = array(0, 5, -10, 4, 15, -20, 1);
    $c = array();
    for($i = 0; $i < count($a); $i++) {
        $c[] = $a[$i];
        $c[] = $b[$i];
    }
    var_dump($c);

    // 20.1 Generalniji slucaj - duzine nizova nisu jednake
    $a = array(-5, 1, 6, -4, 10, 15, -8, 7);
    $b = array(0, 5, -10, 4, 15, -20, 1);
    $c = array();
    $n = count($a);
    $m = count($b);
    if($n < $m) {
        $k = $n;
    }
    else {
        $k = $m;
    }
    for($i = 0; $i < $k; $i++) {  // 1. petlja
        $c[] = $a[$i];
        $c[] = $b[$i];
    }
    for($i = $k; $i < count($a); $i++) { // 2. petlja
        $c[] = $a[$i];
    }
    for($i = $k; $i < count($b); $i++) {  // 3. petlja
        $c[] = $b[$i];
    }

    var_dump($c);

    // 1. slucaj: Niz a ima vise elemenata od niza b
    //Izvrsava se 1. i 2. petlja
    // 2. slucaj: Niz b ima vise elemenata od niza a
    // Izvrsava se 1. i 3. petlja
    // 3. slucaj: Niz a i b imaju jednak broj elemenata
    // Izvrsava se samo 1. petlja

    

    
?>