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

    function najviseUtakmica($kosarkasi){
        $kosarkasMax = $kosarkasi[0];//Uzima nultu poziciju iz niza kosarkasi(Ovo je objekat)
        $max = count($kosarkasMax->getPoeni()); //Pristupimo poenima u objektu i prebrojimo koliko je dugacak niz poena tj, koliko je utakmica kosarkas odigrao

        foreach($kosarkasi as $kosarkas){
            $brUtakmica = count($kosarkas->getPoeni());
            if($brUtakmica > $max){
                $max = $brUtakmica;
                $kosarkasMax = $kosarkas;// kosarkasMax dobija vrednost celog objekta $kosarkas
            }
        }

        //Ako hocemo da vratimo vise igraca koji imaju isti br utakmica onda kreiramo jos jednu foreach tako sto se uporedjuje brUtakmica == $max pa onda stavljamo u novi niz pa posle izvlacimo poene (pokusati)
        return $kosarkasMax;
    }

    //$najviseKosarkas = najviseUtakmica($kosarkasi);
    //$najviseKosarkas->ispisiKosarkasa();

    najviseUtakmica($kosarkasi)->ispisiKosarkasa(); // moze i direktno da se ispise bez stavljanja u promenljivu


    function najvisePoena($nizKosarkasa){
        $kosarkasMax = $nizKosarkasa[0];//kreiramo promenljivu gde cuvamo objekat
        $poeni = $nizKosarkasa[0]->getPoeni();//za prvog kosarkasa uzmem ceo niz poena
        $max = $poeni[0]; //Iz uzatog niza poena, uzmem prvi element tj, poene na prvoj utakmici

        foreach($nizKosarkasa as $k){
            $poeni = $k->getPoeni();//uzimamo poene kosarkasa
            foreach($poeni as $p){
                if($p > $max){//idemo od poena do poena i uporedjujemo
                    $max = $p;
                    $kosarkasMax = $k; //povezujemo kosarkasa
                }
            }
        }
        return $kosarkasMax;
    }

    najvisePoena($kosarkasi)->ispisiKosarkasa();


    function najviseProsecnoPoena($nizKosarkasa){
        $kosarkasAVGMax = $nizKosarkasa[0];//objekat
        $avgMax = $kosarkasAVGMax->prosekPoena(); //prosek poena

        foreach($nizKosarkasa as $nk){
            if($nk->prosekPoena() > $avgMax){
                $avgMax = $nk->prosekPoena();
                $kosarkasAVGMax = $nk;
            }
        }
        return $kosarkasAVGMax;
    }

    najviseProsecnoPoena($kosarkasi)->ispisiKosarkasa();

?>