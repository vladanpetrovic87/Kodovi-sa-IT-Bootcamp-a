<?php

    require_once "osoba.php";
    require_once "zaposleni.php";


    $z1 = new Zaposleni("Nikola", "Nikolic", 1970, 80000, "Direktor");
    // $z->ispis1();
    $z2 = new Zaposleni("Marko", "Markovic", 1980, 70000, "Ekonomista");
    $z3 = new Zaposleni("Dejan", "Filipovic", 1960, 50000, "Radnik");

    // $o = new Osoba("Petar", "Petrovic", 1980);
    // $o->ispis();
    
    $zaposleni = array($z1, $z2, $z3);

    foreach($zaposleni as $zaposlen){
        $zaposlen->ispis1();
    }

    foreach($zaposleni as $zaposlen){
        $ek = "Ekonomista";
        if($zaposlen->getPozicija() == $ek){
            echo "<p>Zaposlen u ekonomskom sektoru</p>";
        }
    }

    function prosekPlate($zaposleni){
        $suma = 0;
        foreach($zaposleni as $z){
            $suma += $z->getPlata();
        }
        $prosek = $suma / count($zaposleni);
        return $prosek;
    }
    echo "<p>Prosecna plata svih radnika je:</p>";
    echo prosekPlate($zaposleni);


    function natprosecnaPlata($zaposleni){
        $prosekPlate = prosekPlate($zaposleni);
        // $plata = $zaposleni[0]->getPlata();
        $p = $zaposleni[0];
        for($i = 0; $i < count($zaposleni); $i++){
            $plata = $zaposleni[$i]->getPlata();
            if($plata > $prosekPlate){
                return true;
            }
            else{
                return false;
            }
        }
    }
    
  
   

    
   
?>