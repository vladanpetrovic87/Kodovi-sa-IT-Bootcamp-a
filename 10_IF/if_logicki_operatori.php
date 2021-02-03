<?php

        $br1 = 5;
        $br2 = 6;
        $br3 = 7;

        // && (logicko i)- Svi izrazi MORAJU da budu tacni, da bi izraz bio true
        // true && true = true
        // false && true = false
        // false && false = false
        if($br1>=0 && $br2>=0 && $br3>=0) {
            echo "Brojevi $br1 i $br2 su nenegativni";
        }

        // || (logicko ili) - Samo jedan je dovoljno da bude tacan, da bi izraz bio tacan
        //false || false || true = true
        //false || false || false = false
        if($br1>=0 || $br2>=0 || $br3>=0) {
            echo "Makar jedan od brojeva $br1. $br2 ili $br3 je nenegativan";
        }

        /* 23)Ispitati da li je godina prestupna. (Godinu
        preuzeti sa vremena na Vašem računaru).
        Prestupna je ona godina koja je deljiva sa 4, ako
        nije deljiva sa 100, mada ipak jeste deljiva sa
        400.*/
        $god = 1994;
        // (false $$ true) || false = false || false = false
        if(($god %4 == 0 && $god % 100 != 0) || $god % 400 == 0) {
            echo "Godina $god je prestupna";
        }
        else {
            echo "Godina $god je prosta";
        }

        /* 22)Ispisati na ekranu „ekstremna temperatura“
    ukoliko je temperatura manja od -15 stepeni
    Celzijusovih i veda od 40 stepeni Celzijusovih.*/
        $temp = -17;
        if($temp <-15 || $temp>40) {
            echo "<p>Ekstremna temperatura</p>";
        }
        else {
            echo "<p>Nije ekstremna temperatura</p>";
        }



?>