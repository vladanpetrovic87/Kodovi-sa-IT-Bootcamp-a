<?php

    require_once "kredit.php";
    require_once "obicanKredit.php";
    require_once "amortizovanKredit.php";

    Kredit::setDefaultBrGod(5);
    Kredit::setPodGodKamata(10);
    //$x = -5;
    //Kredit::setDefaultBrGod($x);

    $k1 = new Kredit(19, 100000, 2, "Potrosacki");
    //$k->defaultBrGod = 3; //NE VALJA (statickom polju se ne pristupa preko objekta!)
    $k1->stampa();
    $bk =  Kredit::getBrojKredita();
    echo "<p>Broj kredita nakon kreiranja objekta k1: $bk</p>";

    $k2 = new Kredit(30, 50000, 3, "Potrosacki");
    //$k->defaultBrGod = 3; //NE VALJA (statickom polju se ne pristupa preko objekta!)
    $k2->stampa();
    $bk =  Kredit::getBrojKredita();
    echo "<p>Broj kredita nakon kreiranja objekta k2: $bk</p>";
    
    unset($k2);// Oslobadjanje memorije koju je zauzeo objekat 1. nacin
    //$k2 = null; // Oslobadjanje memorije koju je zauzeo objekat 2. nacin
    // $k2->stampa(); //Ne moze da odstampa zato sto smo obrisali objekat!
    $bk =  Kredit::getBrojKredita();
    echo "<p>Broj kredita nakon unistavanja objekta k2: $bk</p>";

    $k2 = new Kredit(15, 2500, -6, "Kes kredit");
    $k2->stampa();
    $bk =  Kredit::getBrojKredita();
    echo "<p>Broj kredita nakon kreiranja objekta k2: $bk</p>";
    
    $k = Kredit::DEFAULT_OSNOVICA + 3;// Na konstantu mozemo da dodajemo neki broj, ali ne mozemo da je menjamo
    echo "<p>Osnovica + 3 = $k</p>";
    
    $k4 = new ObicanKredit(35, 8000, 15);
    $k4->stampa();

    $k5 = new AmortizovanKredit(25, 600, 2);
    $k5->stampa();

    $bk =  Kredit::getBrojKredita();
    echo "<p>Broj kredita pre zavrsetka programa: $bk</p>";


    $k6 = new ObicanKredit(20, 1000, 2);

    // $mr1 = $k6->mesecnaRataObicanKredit();
    // echo "<p>Mesecna rata za obican kredit je: $mr1</p>";

    $k7 = new AmortizovanKredit(20, 1000, 2);

    // $mr2 = $k7->mesecnaRataAmortizovanKredit();
    // echo "<p>Mesecna rata za amortizovan kredit je: $mr2</p>";

    // Formiramo niz od svih kredita u programu
    $krediti = array($k1, $k2, $k4, $k5, $k6, $k7);

    foreach($krediti as $kredit) {
        /*
        if($kredit objekat klase ObicanKredit){
            $kredit->mesecnaRataObicanKredit();
        }
        elseif($kredit objekat klase AmortizovanKredit){
            $kredit->mesecnaRataAmortizovanKredit();
        }
        elseif($kredit objekat klase Kredit){
            Radi nesto sa ovim objektom ili ga preskoci
        }
        */
        /*
        $mr = $kredit->mesecnaRata();
        echo "<p>Mesecna rata za kredit je: " ;
        $kredit->stampa();
        echo "iznosi $mr</p>";*/

        $kredit->stampa();

    }

?>