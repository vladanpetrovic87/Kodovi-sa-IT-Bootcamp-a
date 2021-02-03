<?php
    require_once "film1.php";

    $f1 = new Film("Kll Bill", "Quentin Tarantino", 2003, array(7, 5.8, 8.7, 10));
    $f2 = new Film("Titanic", "James Cameron", 1997, [10, 9.5, 9.8, 7.5]);
    $f3 = new Film("300", "Zack Snyder", 2006, [7.6, 5.5]);

  
    $f1->stampaj();
    $f2->stampaj();
    $f3->stampaj();

    $filmovi = [$f1, $f2, $f3];


    /* Napraviti funkciju vekFilmova kojoj se prosleđuje niz filmova i ceo broj (vek), a funkcija ispisuje samo one filmove koji su stvoreni u prosleđenom veku.*/

    function vekFilmova($niz, $vek) {
        foreach($niz as $film) {
            $godIzdanja = $film->getGodina();
            $vekIzdanja = ceil($godIzdanja / 100); //Gleda prve dve cifre kada podelimo sa 100
            if($vekIzdanja == $vek) {
                $film->stampaj();
            }
        }
    }

    //Poziv funkcije
    echo "<p>Filmovi koji su izasli u 21. veku</p>";
    vekFilmova($filmovi, 21);

    echo "<p>Filmovi koji su izasli u 20. veku</p>";
    vekFilmova($filmovi, 20);


    /*Napraviti funkciju prosecnaOcena kojoj se prosleđuje niz filmova, a koja određuje i vraća prosečnu ocenu svih filmova.*/

    function prosecnaOcena($niz) {
        $zbir = 0;
        foreach($niz as $film) {
            $zbir += $film->prosek();
        }
        $n = count($niz);
        if($n > 0) {
            return $zbir / $n;
        }
        else {
            return $zbir;
        }
    }

    //Poziv funkcije;
    $prosOcena = prosecnaOcena($filmovi);
    echo "<p>Prosecna ocena svih filmova jednaka je $prosOcena</p>";



    /* Napraviti funkciju najboljeOcenjeni kojoj se prosleđuje niz filmova, a ona vraća najbolje ocenjeni film. */

    function najboljeOcenjeni($niz) {
        $filmNajbolji = $niz[0];
        $maxOcena = $filmNajbolji->prosek();
        for($i = 1; $i < count($niz); $i++) {
            if($niz[$i]->prosek() > $maxOcena) {
                $maxOcena = $niz[$i]->prosek();
                $filmNajbolji = $niz[$i];
            }
        }
        return $filmNajbolji;
    }

    //Poziv funkcije
    $nf = najboljeOcenjeni($filmovi);
    echo "<p>Najbolje ocenjeni film:</p>";
    $nf->stampaj();


    function osrednjiFilm($niz) {
        $prosek = prosecnaOcena($niz);
        $najblizaVrednost = abs($niz[0]->prosek() - $prosek);
        $najbliziFilm = $niz[0];
        for($i = 1; $i < count($niz); $i++) {
            $vrednostFilmaI = abs($niz[$i]->prosek() - $prosek);
            if($vrednostFilmaI < $najblizaVrednost){
                $najblizaVrednost = $vrednostFilmaI;
                $najbliziFilm = $niz[$i];
            }
        }
        return $najbliziFilm;
    }

    //Poziv funkcije
    $pf = osrednjiFilm($filmovi);
    echo "<p>Najblizi prosecnoj vrednosti:</p>";
    $pf->stampaj();

    /*Napraviti funkciju najmanjaOcenaNajboljeg kojoj se prosleđuje niz filmova a ona određuje najbolji film i ispisuje njegovu najslabiju ocenu.*/

    function najmanjaOcenaNajboljeg($niz) {
        $najboljiFilm = najboljeOcenjeni($niz);
        $ocene = $najboljiFilm->getOcene();
        $minOcena = $ocene[0];
        for($i = 1; $i < count($ocene); $i++) {
            if($ocene[$i] < $minOcena) {
                $minOcena = $ocene[$i];
            }
        }
        return$minOcena;
    }

    //Poziv funkcije
    $mo = najmanjaOcenaNajboljeg($filmovi);
    echo "<p>Najmanja ocena najbolje ocenjenog filma je: $mo</p>";


    /*Napisati funkciju najmanjaOcena kojoj se prosleđuje niz filmova, a koja vraća koja je najmanja ocena koju je bilo koji film dobio.*/

    function najmanjaOcena($niz) {
        $ocenePrviFilm = $niz[0]->getOcene();
        $minOcena = $ocenePrviFilm[0]; //Prva ocena prvog filma - nju proglasavao minimalnom
        foreach($niz as $film) {
            $ocene = $film->getOcene();
            foreach($ocene as $o) {
                if($o < $minOcena) {
                    $minOcena = $o;
                }
            }
        }
        return $minOcena;
    }

    // Poziv funkcije
    $o = najmanjaOcena($filmovi);
    echo "<p>Najmanja ocena koju je dobio bilo koji film jednaka je: $o</p>";
    

    function iznadOcene($o, $filmovi){
        foreach($filmovi as $f){
            if($f->prosek() > $o){
                $f->stampaj();
            }
        }
    }

    $ocena = 7;
    echo "<p>Filmovi koji su ocenjeni bolje od $ocena su: </p>";
    iznadOcene($ocena, $filmovi);


    function iznadOceneNoviji($o, $filmovi){
        $iznadOc = iznadOcene($o, $filmovi);
        $noviji = $filmovi[0];
        $novijiGod = $noviji->getGodina();
        foreach($filmovi as $f){
            if($f->getGodina() > $novijiGod){
                $novijiGod = $f->getGodina();
            }
        }
        foreach($filmovi as $f){
            if($f->getGodina() == $novijiGod){
                if($iznadOc){
                    $f->stampaj();
                }
            }
        }
    }
    iznadOceneNoviji($ocena, $filmovi);


?>        
