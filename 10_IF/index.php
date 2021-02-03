<!-- IF naredba grananja -->
<?php

    $a = 5;
    $b = 5;

    if($a > $b) {
        echo "<p>a je vece od b</p>";
    }

    if($a >= $b) {
        echo "<p>a je vece ili jednako b</p>";
    }

    if($a == $b) {
        echo "<p>a je jednako b</p>";
    }

    $br1 = "3"; // Vrednost je 3, Tip je STRING
    $br2 = 3; // Vrednost je 3, Tip je INTEGER

    // Poredjenje samo po VREDNOSTI
    // Pita da li su isti po vrednosti
    if($br1 == $br2) {
        echo "<p>br1 == br2</p>";
    }

    // Poredjenje PO TIPU I PO VREDNOSTI
    // Pita da li su isti i po tipu i po vrednosti
    if($br1 === $br2) {
        echo "<p>br1 === br2</p>";
    }

    // Pita da li su razliciti po vrednosti
    if("5" != 5) {
        echo "<p>Razliciti su</p>";
    }

    // Pita da li su razliciti po tipu i po vrednosti
    if("5" !== 5) {
        echo "<p>Razliciti su</p>";
    }

    //Tip isti, vrednost razlicita
    //Pitamo da li su 3 i 5 isti po vrednosti, posto nisu nece biti ispunjeno
    if(3 == 5) {
        echo "Jedanki su";
    }

     //Tip isti, vrednost razlicita
     // Pitamo da li su 3 i 5 isti i po tipu i po vrednosti, posto nisu isti po vrednosti nece biti ispunjeno
     if(3 === 5) {
        echo "Jedanki i po tipu i po vrednosti";
    }

    // IF - ELSE GRANANJE
    $x = 5;
    $y = 6;

    if ($x >= $y) {
        echo "<p>x je vece ili jednako y</p>";
    }

    else {
        echo "<p>x je manje od y</p>";
    }

    $aa = 5;
    $bb = 6;

    // Prvi nacin
    if($aa == $bb) {
        echo "<p> aa == bb </p>";
    }
    else {
        echo "<p> aa != bb </p>";
    }

    // Drugi nacin
    if($aa != $bb) {
        echo "<p> aa != bb </p>";
    }
    else {
        echo "<p> aa == bb </p>";
    }

    echo "<p> Vrednost promenljive aa je \$$aa, vrednost promenljive bb je $bb </p>";
    echo "<p>\"Hello world!\"</p>";

    // Zadatak 1
    $a = 3;
    $b = 5;
    if($a <= $b) {
        echo "<p>a je veci od b</p>";
    }
    else {
        echo "<p>a je manji od b</p>";
    }

    // Zadatak 2
    $temp = 20;
    if($temp >= 0) {
        echo "<p>Temperatura je u plusu</p>";
    }
    else {
        echo "<p>Temperatura je u minusu</p>";
    }

    // Zadatak 3
    $pol = "z";
    if($pol == "z") {
        echo "<p> <img src ='slike/female.svg' alt='zenski pol'></p>";
    }
    else {
        echo "<p> <img src ='slike/male.svg' alt='muski pol'></p>";
    }

    // Zadatak 4
    $ampm = date ("a");
    // echo $ampm;  
    if($ampm == "pm") {
        echo "Proslo je 12 sati";
    }
    else {
        echo "Nije proslo 12 sati";
    }
    

    // Zadatak 6
    /*
        Objasnjenje:
        a = 7, b = 5, c = 6
        Cilj: U a da bude najmanji broj, u b da bude srednji broj i u c da bude najveci broj
    */
    $a = 7;
    $b = 5;
    $c = 6;

    if($a > $b) {
        $pom = $a;
        $a = $b;
        $b = $pom;  // uvodimo pomocnu kako bi presipali casu
    }
    // Posle ovog if-a u $a je sigurno manji broj nego u $b

    if($a > $c) {
        $pom = $a;
        $a = $c;
        $c = $pom;
    }
    // Posle ovog if-a u $a je sigurno najmanji broj

    if($b > $c) {
        $pom = $b;
        $b = $c;
        $c = $pom;
    }
    // Posle ovog if-a $a <$b <$c

    echo "<p> $a <= $b <= $c </p>";

    $br = 20;

    if($br <= 10) {
        echo "<p>Broj prve desetice</p>";
    }
    elseif($br <= 20) {
        echo "<p>Broj druge desetice</p>";
    }
    else {
        "<p>Broj veci od druge desetice</p>";
    }

    echo "<br>";
    
    // Zadaatak 5
    $god = date("Y");
    $godR = 2000;
    if($god - $godR > 18) {
        echo "<p> Osoba je punoletna </p>";
    }
    else {
        echo "<p> Osoba je maloletna </p>";
    }
    
    // Zadatak 8
    // Preuzeti koji je dan u nedelji sa računara i ispitati
    // da li je to radni dan ili je u pitanju vikend.
    $dan = date("w"); // 0 je nedelja, 1 je ponedeljak, 2 je utorak ....
    if($dan == 0) {
        echo "<p>Vikend</p>";
    }
    elseif($dan == 6) {
        echo "<p>Vikend</p>";
    }
    else {
        echo "<p>Radni dan</p>";
    }

    /* Zadatak 9
     Za vreme preuzeto sa računara ispisati
     dobro jutro za vreme manje od 12 sati ujutru,
     dobar dan za vreme manje od 18 sati
     popodne i u ostalim slučajevima ispisati dobro
     veče. */
     $vreme = date("H");
     if($vreme <= 12) {
         echo "<p> Dobro jutro </p>";
     }
     elseif($vreme <= 18) {
         echo "<p> Dobar dan </p>";
     }
     else {
         echo "<p> Dobro vece </p>";
     }

    //  Zadatak 10 
    //  10.Uporediti dva uneta datuma i ispisati koji od
    // njih je raniji.

    // Prvi datum
     $d1 = 13;
     $m1 = 10;
     $g1 = 2019;

    //  Drugi datum
     $d2 = 13;
     $m2 = 10;
     $g2 = 2019;
     if($g1 < $g2) {
         echo "<p> Raniji datum je $d1.$m1.$g1 </p>";
     }
     elseif($g2 < $g1) {
        echo "<p> Raniji datum je $d2.$m2.$g2 </p>";
     }
     elseif($m1 < $m2) {
        echo "<p> Raniji datum je $d1.$m1.$g1 </p>";
     }
     elseif($m2 < $m1) {
         echo "<p> Raniji datum je $d2.$m2.$g2 </p>";
     }
     elseif($d1 < $d2) {
        echo "<p> Raniji datum je $d1.$m1.$g1 </p>";
    }
     elseif($d2 < $d1) {
        echo "<p> Raniji datum je $d2.$m2.$g2 </p>";
    }
    else {
        echo "<p> Datumi su isti </p>";
    }

    /* Zadatak 11. Radno vreme jedne programerske firme je od
    9h do 17h. Preuzeti vreme sa računara i
    ispitati da li u to vreme firma radi ili ne radi. */
    $sati = date("H");
    if($sati < 9) {
        echo "<p> Ne radi </p>";
    }
    elseif($sati >= 17) {
        echo "<p> Ne radi </p>";
    }
    else {
        echo "<p> Radi </p>";
    }

    /*Zadatak 12.Za unet početak i kraj radnog vremena dva
    lekara ispisati DA ukoliko se njihove smene
    preklapaju, u suprotnom ispisati NE.*/

    // Prvi radnik
    $p1 = 20;
    $k1 = 22;

    // Drugi radnik
    $p2 = 12;
    $k2 = 18;

    // Ukoliko se ukljucuje granicni termin za preklapanje, potrebno je promeniti u <=
    if($k1 < $p2) {
        echo "<p> Ne preklapaju se </p>";
    }
    elseif($k2 < $p1) {
        echo "<p> Ne preklapaju se </p>";
    }
    else {
        echo "<p> Preklapaju se </p>";
    }

    // Zadatak 14.Za uneti broj ispisati da li je deljiv sa 3 ili ne.
    $broj = 11; // 3 + ost. 1
    if($broj % 3 == 0) {
        echo "Broj $broj je deljiv brojem 3";
    }
    else {
        echo "Broj $broj nije deljiv brojem 3";
    }

    // Za uneti broj ispisati NEPARAN ukoliko je neparan

    //1. nacin
    if($broj % 2 != 0) {
        echo "<p>Broj $broj je neparan</p>";
    }

    //2. nacin
    if($broj % 2 == 0) {
        echo "<p>Broj $broj je neparan</p>";
    }
    

    //3. nacin
    if( !($broj % 2 == 0)) {
        echo "<p>Broj $broj je neparan</p>";
    }

    //4. nacin
    if($broj/2 != round($broj/2)) {
        echo "<p>Broj $broj je neparan</p>";
    }

    /*Zadatak 16. Za uneti broj ispitati da li je on manji ili
    vedi od nule. Ukoliko je manji ili jednak
    nuli ispisati njegov prethodnik, a ukoliko
    je vedi od nule ispisati njegov sledbenik.*/
    $broj = 10;
    if($broj > 0) {
        echo "<p>Broj je veci od 0</p>";
    }
    elseif($broj < 0) {
        echo "<p>Broj je manji od 0</p>";
    }
    else {
        echo "<p>Broj je jednak 0</p>";
    }


    if($broj <= 0) {
        echo $broj - 1;
    }
    else {
        echo $broj + 1;
    }

    // Zadatak 18. Za učitani broj ispitati da li je ceo.
    $br = 10;
    if(floor($br) == $br) {
        echo "<p>Broj je ceo</p>";
    }
    else {
        echo "<p>Broj nije ceo</p>";
    }
    


    






?>  