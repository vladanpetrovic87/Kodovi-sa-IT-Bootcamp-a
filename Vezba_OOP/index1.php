<?php

    require_once "sportista.php";
    require_once "kosarkas.php";


    // $s = new Sportista("Novak", "Djokovic", 1987, "Beograd");
    // $s->stampaj();

    // echo "<hr>";

    // $k = new Kosarkas("Nikola", "Jokic", 1995, "Sombor", [35, 40, 26, 31, 43, 30, 28, 40]);
    // $k->ispisi();

    $k1 = new Kosarkas("Vlade", "Divac", 1968, "Prijepolje",  array(32, 12, 38, 15, 20));
    $k2 = new Kosarkas("Pedja", "Stojakovic", 1977, "Pozega",  array(25, 4, 30, 14));
    $k3 = new Kosarkas("Aleksandar", "Djordjevic", 1967, "Beograd",  array(40, 20, 14, 16, 5, 17,14));

    $kosarkasi = array($k1, $k2, $k3);

    //Ispis svih podataka o kosarkasima
    foreach($kosarkasi as $kosarkas){
        $kosarkas->ispisiKosarkasa();
    }

    function najviseUtakmica1($kosarkasi){
        $kosarkasMax = $kosarkasi[0];
        $max = count($kosarkasMax->getPoeni());
        foreach($kosarkasi as $kosarkas){
            if(count($kosarkas->getPoeni()) > $max){
                $max = count($kosarkas->getPoeni());
            }
        }
        foreach($kosarkasi as $kosarkas){
            if(count($kosarkas->getPoeni()) == $max){
                return $kosarkas;
            }
        }
    }
    $nu = najviseUtakmica1($kosarkasi);
    $nu->ispisiKosarkasa();


    function najvisePoena1($nizKosarkas){
        $kosarkasMax = $nizKosarkas[0];
        $poeni = $nizKosarkas[0]->getPoeni();
        $max = $poeni[0];
        foreach($nizKosarkas as $kosarkas){
            $poeni = $kosarkas->getPoeni();
            if($poeni > $max){
                $max = $poeni;
                $kosarkasMax = $kosarkas;
            }
        }
        return $kosarkasMax;
    }
    najvisePoena1($kosarkasi)->ispisiKosarkasa();


    function najviseProsecnoPoena1($kosarkasi){
        $prosekKosarkas = $kosarkasi[0];
        $prosekMax = $prosekKosarkas->prosekPoena();
        foreach($kosarkasi as $kosarkas){
            $prosekSvi = $kosarkas->prosekPoena();
            if($prosekSvi > $prosekMax){
                $prosekMax = $prosekSvi;
                $prosekKosarkas = $kosarkas;
            }
        }
        return $prosekKosarkas;
    }
    najviseProsecnoPoena1($kosarkasi)->ispisiKosarkasa();
    

?>