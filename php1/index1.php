<?php

    //include "film.php"; //Ako dati fajl ne postoji, onda ignorise tu gresku i nastavlja dalje
    //require "film.php"; //Ako dati fajl ne postoji, generise gresku i prekida izvrsenje programa
    //include_once "film.php"; // Isto kao include, samo proverava da li je vec ukljucen dati fajl i ako jeste ne ukljucuje ga ponovo
    require_once "film.php";// Isto kao require, samo proverava da li je vec ukljucen dati fajl i ako jeste ne ukljucuje ga ponovo
    require_once "pacijent.php";
    require_once "film1.php";


    $film1 = new Film("Kll Bill", "Quentin Tarantino", 2003, 8.7);
    $film1->stampaj();

    $film2 = new Film("Titanic", "James Cameron", 1997, 9.2);
    $film2->stampaj();

    $film3 = new Film("300", "Zack Snyder", 2006, 7.6);
    $film3->stampaj();

    $film4 = new Film("The Shawshank Redemption", "Frank Drabont", 1994, 9.2);
    $film4->stampaj();

    $filmovi = array($film4, $film1, $film2, $film3);

    //Ispisati samo one filmove koji su izašli u 21. veku.

    function filmovi21Vek($films) {
        //$filmovi[0] = null; //nece da prikaze nulti element samo u ovoj u funciji
        foreach($films as $film) {
            if($film->getGodina() > 2000) {
                $film->stampaj();
            }
        }
    }

    echo "<p>Filmovi koji su izasli u 21. veku:</p>";
    filmovi21Vek($filmovi);

    //Napravili smo nove nizove filmove 2 i 3 zato sto ne moramo u funkciji da obelezimo istim imenom kad pozivamo funkciju i naziv niza
    // $filmovi2 = array();
    // $filmovi3 = array();
    // filmovi21Vek($filmovi2);
    // filmovi21Vek($filmovi3);

    // Odrediti prosečnu ocenu svih filmova.
    function prosecnaOcena($films) {
        $suma = 0;
        foreach($films as $film) {
            $suma += $film->getOcena();
        }
        $n = count($films);
        if($n > 0) {
            $arsr = $suma / $n;
        }
        else {
            $arsr = $suma;
        }
        return $arsr;
    }

    $prosek = prosecnaOcena($filmovi);
    echo "<p>Prosecna ocena svih filmova je: $prosek</p>";

    //Odrediti najbolje ocenjeni film.
    function ispisNajboljeOcenjenog($films) {
        //Kad ne znamo da je u opsegu od 0 do 10 (dohvatanje ocene prvog filma iz niza):
        // $prviFilm = $films[0];
        // $ocenaPrviFilm = $prviFilm->getOcena();
        // $maxOcena = $ocenaPrviFilm;

        // Ili skraceno:
        // $maxOcena = $films[0]->getOcena();

        // Za asocijativne nizove dohvatanje ocene prvog filma:
        // foreach($films as $film) {
        //     $maxOcena = $film->getOcena();
        //     break;
        // }

        //Primetimo da je ocena filma >= 1 i <=10
        $maxOcena = 0;
        //Odredjujemo koja je to maksimalna ocena
        foreach($films as $film) {
            if($film->getOcena() > $maxOcena) {
                $maxOcena = $film->getOcena();
            }
        }
        //Ispisujemo film sa nadjenom maksimalnom ocenom
        foreach($films as $film) {
            if($film->getOcena() == $maxOcena) {
                $film->stampaj();
                //break;//Ovim prekidamo niz kad nadje prvi najbolje ocenjeni film
            }
        }
    }

    echo "<p>Najboje ocenjeni film:</p>";
    ispisNajboljeOcenjenog($filmovi);

    echo "<hr>";

    $p1 = new Pacijent("Milica", 183, 75); 
    $p2 = new Pacijent("Milan", 190, 90);
    $p3 = new Pacijent("Marko", 171, 80);


    $pacijenti = array($p1, $p2, $p3);

    $prviPac = $pacijenti[0];
    $tezinaPrviPacijent = $prviPac->getTezina();
    $najmanjaTezina = $tezinaPrviPacijent;
    foreach($pacijenti as $pac) {
        $najmanjaTezina = $pac->getTezina();
        break;
    }
    echo $najmanjaTezina;

    // function najmanjaTezina($pacijenti) {
    //     $minTez = $pacijenti[0]->getTezina();
    //     foreach($pacijenti as $pac) {
    //         if($pac->getTezina() <= $minTez) {
    //             $minTez = $pacijent->getTezina();
    //         }
    //     }
    //     foreach($pacijenti as $pac) {
    //         if($pacijenti->getTezina() == $minTez) {
    //             $pacijenti->stampaj();
    //             break;
    //         }
    //     }
    
    // }
    // najmanjaTezina($pac);

    function najveciBmi($pacijenti) {
        $maxBmi = $pacijenti[0]->bmi();
        foreach($pacijenti as $pacijent) {
            if($pacijent->bmi() >= $maxBmi) {
                $maxBmi = $pacijent->bmi();
            }
        }
        foreach ($pacijenti as $pacijent) {
            if($pacijent->bmi() == $maxBmi) {
                $pacijent->stampaj();
            }
        }
    }
    najveciBmi($pacijenti);


    


    
   








    







?>