<?php
    // Prvi nacin zadavanja asocijativnih nizova
    $age = array(
        "Pera" => 43,
        "Mika" => 26,
        "Lazar" => 22
    );
    var_dump($age);
    echo $age["Pera"];
    echo "<br>";
    echo $age["Lazar"];

    // Drugi nacin zadavanja asocijativnih nizova
    $godine["Rasa"] = 50;
    $godine["Zika"] = 18;
    $godine["Milica"] = 24;
    var_dump ($godine);

    /* FOR petlja se ne moze korititi za prolazak kroz elemente asocijativnog niza
    for($i = 0; $i < count($age); $i++) {
        echo $age[$i] . "<br>";
    }
    */

    foreach($age as $key => $value) {
        echo "<p>Element sa kljucem $key ima vrednost $value</p>";
    }

    foreach($godine as $k => $v) {
        echo "<p>Element iz niza godine sa kljucem $k ima vrednost $v</p>";
    }

    foreach($godine as $v) {
        echo "<p>Element iz niza godine ima vrednost $v</p>";
    }

    $brojevi = array( 4, -9, 3.3, 9.04, -13);
    foreach($brojevi as $broj){
        echo $broj . "&nbsp";
    }
    echo "<br>";

    foreach($brojevi as $i => $broj) {
        echo "<p>Broj sa indeksom $i ima vrednost $broj</p>";
    }

    /*1) Dat je niz elemenata u obliku
MarkaAuta/Godište.

Ispisati sve automobile, kao i njihova
godišta.
Ispisati automobile koji su stariji od 10
godina.
Ispisati automobile čija Marka sarži string
“Opel”, a proizvedena su posle 2000.
godine.*/

    $automobili = array(
        "Audi A3" => 2004,
        "Opel Astra" => 2018,
        "Fiat Punto" => 2000,
        "Opel Corsa" => 1999,
        "Ford Focus" => 2015,
        "Peugeot 508" => 2007
    );

    // Ispisati sve automobile, kao i njihova godista
    foreach($automobili as $marka => $godiste) {
        echo "<p>Automobili $marka proizveden $godiste. godine</p>";
    }


    // Ispisati automobile koji su stariji od 10
    // godina.

    $trenutnaGodina = date('Y');
    foreach($automobili as $marka => $godiste) {
        if($trenutnaGodina - $godiste > 10) {
            echo "<p>Automobili $marka je stariji od 10 godina</p>";
        }
    }


    foreach($automobili as $marka => $godiste) {
        if(strpos($marka, "Opel") !== false && $godiste >= 2000) {
            echo "<p>Automobili $marka je proizveden posle 2000. godine</p>";
        }
    }


    /*2) Dat je niz elemenata u obliku
    ImeOsobe/Visina. */
    $osobe = array(
        "Marko" => 190,
        "Milos" => 192,
        "Dejan" => 185,
        "Marija" => 180,
        "Dusica" => 182
    );

    // 3)Ispisati sve osobe sa njihovim visinama.
    foreach($osobe as $ime => $visina) {
        echo "<p>$ime ima visinu $visina </p>";
    }

    // 4)Ispisati sve natprosečno visoke osobe.
    $zbir = 0;
    foreach($osobe as $visina) {
        $zbir += $visina;
    }
    $prosek = $zbir / count($osobe);
    foreach($osobe as $ime => $visina) {
        if($visina > $prosek) {
            echo "<p>$ime ima visinu iznad proseka a to je: $visina </p>";
        }
    }

    // 5)Ispisati sve osobe koje imaju maksimalnu
    // visinu.  // 2 petlje 
    $vis = array_values($osobe);
    $max = $vis[0];
    foreach($osobe as $visina) {
        if($visina > $max) {
            $max = $visina;
        }
    }

    foreach($osobe as $ime => $visina) {
        if($visina == $max){
            echo "<p>Najvecu visinu ima $ime i to: $max </p>";
        }
    }


    // 6)Ispisati sve osobe sa visinom ispod
    // proseka, a čije ime počinje na slovo 'V'.



?>