<?php

// 1) Ispisati sve elemente niza od 5 stringova.


// 2) Odrediti zbir elemenata celobrojnog niza.
$niz = array(6, 9, -4, -1, 0, 5, 11);
$zbir = 0;
for($i = 0; $i < count($niz); $i++) {
    $zbir += $niz[$i];
}
echo "<p>Zbir svih elemenata niza jednaka je: $zbir</p>";


// 3) Odrediti srednju vrednost elemenata
// celobrojnog niza.
$zbir = 0;
for($i = 0; $i < count($niz); $i++) {
    $zbir += $niz[$i];
}
$srvr = $zbir / count($niz);
echo "<p>Srednja vrednost svih elemenata niza jednaka je: $srvr</p>";

// 4) Odrediti maksimalnu vrednost u
// celobrojnom nizu.
$maks = $niz[0];
for($i = 1; $i < count($niz); $i++) {
    if($niz[$i] > $maks) {
        $maks = $niz[$i];
    }
}
echo "<p>Maksimalna  vrednost svih elemenata niza jednaka je: $maks</p>";

// 5) Odrediti minimalnu vrednost u
// celobrojnom nizu.
$min = $niz[0];
for($i = 1; $i < count($niz); $i++) {
    if($niz[$i] < $min) {
        $min = $niz[$i];
    }
}
echo "<p>Maksimalna  vrednost svih elemenata niza jednaka je: $min</p>";

// 6) Odrediti indeks najvećeg elementa
// celobrojnog niza.
$indeks = 0;
for($i = 1; $i < count($niz); $i++) {
    if($niz[$i] > $niz[$indeks]) {
        $indeks = $i;
    }
}
echo "<p>Indeks najveceg elementa jednak je: $indeks</p>";


// 7) Odrediti broj elemenata celobrojnog niza
// koji su veći od srednje vrednosti.
$zbir = 0;
for($i = 0; $i < count($niz); $i++) {
    $zbir += $i;
}
$srvr = $zbir / count($niz);
$br = 0;
for($i = 0; $i < count($niz); $i++) {
    if($niz[$i] > $srvr) {
        $br++;
    }
}
echo "<p>Broj elemenata niza koji je veci od srednje vrednosti je $br</p>";


// 8) Izračunati zbir pozitivnih elemenata
// celobrojnog niza.
$zbir = 0;
for($i = 0; $i < count($niz); $i++) {
    if($niz[$i] > 0) {
        $zbir += $niz[$i];
    }
}
echo "<p>Zbir pozitivnih elemenata niza je broj $zbir</p>";


// 9) Odrediti broj parnih elemenata u
// celobrojnom nizu.
$br = 0;
for($i = 0; $i < count($niz); $i++) {
    if($niz[$i] % 2 == 0) {
        $br++;
    }
}
echo "<p>Broj parnih elemenata u nizu je $br</p>";


// 10) Izračunati sumu elemenata u nizu sa
// parnim indeksom.
$suma = 0;
for($i = 0; $i < count($niz); $i++) {
    if($i % 2 == 0) {
        $suma += $niz[$i];
    }
}
echo "<p>Suma elemenata sa parnim indeksom je $suma</p>";

// 11) Promeniti znak svakom elementu
// celobrojnog niza.
for($i = 0; $i < count($niz); $i++) {
    $niz[$i] = - $niz[$i];
}

var_dump($niz);
echo "<hr>";

// 12) Promeniti znak svakom neparnom
// elementu celobrojnog niza sa parnim
// indeksom.
for($i = 0; $i < count($niz); $i++) {
    if($niz[$i] % 2 != 0 && $i % 2 == 0) {
        $niz[$i] =  - $niz[$i];
    }
}
var_dump($niz);


// 13) Odrediti broj parnih elemenata sa
// neparnim indeksom.
$br = 0;
for($i = 0; $i < count($niz); $i++) {
    if($niz[$i] % 2 == 0 && $i % 2 != 0) {
        $br++;
    }
}
echo "<p>Broj parnih elemenata sa neparnim indeksom je $br</p>";

// 14) Ispisati dužinu svakog elementa u nizu
// stringova.
$imena = array("Andjelija", "Milos", "Goran", "Ilija", "Dalibor", "Ivana", "Kristina");
echo "<p>Duzine stringova u nizu su: ";
for($i = 0; $i < count($imena); $i++) {
    $duzina = strlen($imena[$i]);
    echo $duzina . "&nbsp";
    }
    echo "</p>";

    // 15) Odrediti element u nizu stringova sa
    // najvećom dužinom.
    $maksDuz = strlen($imena[0]);
    $stringMaksDuz = $imena[0];
    for($i = 0; $i < count($imena); $i++) {
        if(strlen($imena[$i] > $maksDuz)) {
            $maksDuz = strlen($imena[$i]);
            $stringMaxDuzine = $imena[$i];
        }
    }
    echo "<p>String sa maksimalnom duzinom: $stringMaksDuz</p> ";

    // 16) Odrediti broj elemenata u nizu stringova
    // čija je dužina veća od prosečne dužine
    // svih stringova u nizu.
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
    echo "<p>Broj elemenata u nizu veci od prosecne duzine je $br</p>";
   

    // 17) Odrediti broj elemenata u nizu stringova
    // koji sadrže slovo 'a'.
    $brojSadrziA = 0;
    for($i = 0; $i < count($imena); $i++) {
        if(strpos($imena[$i], "a") !== false) {
            $brojSadrziA++;
        }
    }
    echo "<p>Broj elemenata koji sadrzi slovo a je $brojSadrziA</p>";
    

    // 18) Odrediti broj elemenata u nizu stringova
    // koji počinju na slovo 'a' ili 'A'.
    $brojSadrziAa = 0;
    for($i = 0; $i < count($imena); $i++) {
        if($imena[$i][0] == 'a' || $imena[$i][0] == 'A') {
            $brojSadrziAa++;
        }
    }
    echo "<p>Broj elemenata koji pocinju na slovo a ili A je $brojSadrziAa</p>";


    
 
?>