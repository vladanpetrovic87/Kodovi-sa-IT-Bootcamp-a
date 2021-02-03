<?php
// 1. Data su dva broja. Odstampati veci od njih.
    $broj1 = 30;
    $broj2 = 20;
    if($broj1 > $broj2) {
        print "<p> Broj $broj1 je veci od broja $broj2 </p>";
    }
    elseif($broj2 > $broj1) {
        print "<p> Broj $broj2 je veci od broja $broj1 </p>";
    }
    else {
        print "<p> Broj $broj1 i broj $broj2 su jednaki </p>";
    }
// 2. Data su tri broja. Prikazati najveci od njih
    $a = 20;
    $b = 9;
    $c = 8;
    if($a > $b) {
        $pom = $a;
        $a = $b;
        $b = $pom;
    }
    if($a > $c) {
        $pom = $a;
        $a = $c;
        $c = $pom;
    }
    if($b > $c) {
        $pom = $b;
        $b = $c;
        $c = $pom;
    }

    echo "<p> Broj $c je najveci </p>";
// 3. Dat je trocifren broj. Da li je palindrom?
    // $number = 161;
    // if(palindrome($number)) {
    //     echo "<p> Broj $number je palindrom </p>";
    // }
    // else {
    //     echo "<p> Broj $number nije palindrom </p>";
    // }



// 7. Za dva uneta broja ispisati koji je veći a koji je manji.
    $a = 40;
    $b = 30;
    if($a < $b) {
        echo "<p> Broj $a je manji od broja $b </p>";
    }
    elseif($b < $a) {
        echo "<p> Broj $b je manji od broja $a </p>";
    }
    else {
        echo "<p> Broj $a i broj $b su jednaki </p>";
    }

/* 8. Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, računati da je u plusu.
 */
    $temp = 15;
    if($temp >= 0) {
        echo "<p> Temperatura je u plusu </p>";
    }
    else {
        echo "<p> Temperatura je u minusu </p>";
    }

/* 9. U odnosu na pol (muški/ženski) koji je korisnik uneo prikazati odgovarajući avatar.
*/
    $pol = "m";
    if($pol == "m") {
        echo "<p> <img src='slike/male.svg' width='200px'> </p>";
    }
    else {
        echo "<p> <img src='slike/female.svg' width='200px'> </p>";
    }

/* 10. U odnosu na preuzete vrednosti AM i PM sa svog računara, ispisati da li je trenutno jutro ili popodne.
*/  
    $vreme = date("G");
    if($vreme >= 12) {
        echo "<p> Sada je popodne </p>";
    }
    else {
        echo "<p> Sada je jutro </p>";
    }

/* 11. Za preuzetu godinu sa računara i unetu godinu rođenja izračunati da li je osoba punoletna ili maloletna.
*/
    $god = date("Y");
    $godR = 2005;
    if($god - $godR >= 18) {
        echo "<p> Osoba je punoletna </p>";
    }
    else {
        echo "<p> Osoba je maloletna </p>";
    }

/* 12. Odrediti najveći od tri uneta broja*/
    $x = 10;
    $y = 11;
    $z = 8;
    if($x > $y) {
        $pom = $x;
        $x = $y;
        $y = $pom;
    }
    if($x > $z) {
        $pom = $x;
        $x = $z;
        $z = $pom;
    }
    if($y > $z) {
        $pom = $y;
        $y = $z;
        $z = $pom;
    }

    echo "<p> Broj $z je najveci </p>";

/* 13. Na osnovu unetog broja poena ispitati koju ocenu profesor treba da upiše učeniku. Učenik je položio ispit ukoliko ima više od 50 poena, u suprotnom je pao ispit.
Za više od 50 poena učenik dobija ocenu 6,
za više od 60 poena učenik dobija ocenu 7,
za više od 70 poena učenik dobija ocenu 8,
za više od 80 poena učenik dobija ocenu 9 i
za više od 90 poena učenik dobija ocenu 10.*/
    $poeni = 95;
    if($poeni >= 90) {
        echo "<p> Ocena 10 </p>";
    }
    elseif($poeni >= 80) {
        echo "<p> Ocena 9 </p>";
    }
    elseif($poeni >= 70) {
        echo "<p> Ocena 8 </p>";
    }
    elseif($poeni >= 60) {
        echo "<p> Ocena 7 </p>";
    }
    elseif($poeni >= 50) {
        echo "<p> Ocena 6 </p>";
    }
    else {
        echo "<p> Nije polozio </p>";
    }

/* 14. Preuzeti koji je dan u nedelji sa računara i ispitati da li je to radni dan ili je u pitanju vikend.*/
    $dan = date("N");
    if($dan >=6 ) {
        echo "<p> Vikend </p>";
    }
    else {
        echo "<p> Radni dan </p>";
    }

/* 15. Za vreme preuzeto sa računara ispisati dobro jutro za vreme manje od 12 sati ujutru, dobar dan za vreme manje od 18 sati popodne i u ostalim  slučajevima ispisati dobro veče.*/
    $vr = date("G");
    if($vr < 12) {
        echo "<p> Dobro jutro </p>";
    }
    elseif($vr < 18) {
        echo "<p> Dobar dan </p>";
    }
    else {
        echo "<p> Dobro vece </p>";
    }

/* 16. Uporediti dva uneta datuma i ispisati koji od njih je raniji.*/
    $d1 = 15;
    $m1 = 10;
    $g1 = 2019;
    $d2 = 20;
    $m2 = 11;
    $g2 = 2020;
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

/* 17. Radno vreme jedne programerske firme je od 9h do 17h. Preuzeti vreme sa računara i ispitati da li u to vreme firma radi ili ne radi.
*/
   $vreme = date("G");
   if($vreme < 9) {
        echo "<p> Ne radi </p>";
   }
   elseif ($vreme < 17) {
        echo "<p> Radi </p>";
   }
   else {
        echo "<p> Ne radi </p>";
   }

/* 18. Za unet početak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE.*/
   $p1 = 8;
   $k1 = 12;

   $p2 = 11;
   $k2 = 18;
   if($k1 < $p2) {
       echo "<p> Ne preklapaju se </p>";
   }
   elseif($k2 < $p1) {
       echo "<p> Ne preklapaju se </p>";
   }
   else {
       echo "<p> Preklapaju se </p>";
   }

/* 19. Za uneti broj ispitati da li je paran ili nije.*/
   $br = 74;
   if($br % 2 == 0) {
       echo "<p> Paran </p>";
   }
   else {
       echo "<p> Neparan </p>";
   }

/* 20. Za uneti broj ispisati da li je deljiv sa 3 ili ne.*/
   $broj = 60;
   if($broj % 3 == 0) {
        echo "<p> Broj $broj je deljiv sa 3 </p>";
   }
   else {
        echo "<p> Broj $broj nije deljiv sa 3 </p>";
   }

/* 21. Za dva uneta broja, od većeg učitanog broja oduzeti manji i rezultat ispisati na ekranu.*/ 
   $br1 = 58;
   $br2 = 88;
   if($br1 > $br2) {
        echo $br1 - $br2;
   }
   elseif($br2 > $br1) {
        echo $br2 - $br1;
   }
   else {
        echo "<p> Jednaki su </p>";
   }

/* 22. Za uneti broj ispitati da li je on manji ili veći od nule. Ukoliko je manji ili jednak nuli ispisati njegov prethodnik, a ukoliko je veći od nule ispisati njegov sledbenik.
*/
   $br = 10;
   if($br <= 0) {
        echo $br - 1;
   }
   else {
        echo $br + 1;
   }

 /* 23. Za tri uneta broja ispisati koji od njih je najveći, koji od njih je srednji, a koji od nih je najmanji.*/  
   $br1 = 18;
   $br2 = 20;
   $br3 = 16;
   if($br1 > $br2) {
       $pom  = $br1;
       $br1 = $br2;
       $br2 = $pom;
   }
   if($br1 > $br3) {
        $pom  = $br1;
        $br1 = $br3;
        $br3 = $pom;
   }
   if($br2 > $br3) {
    $pom  = $br2;
    $br2 = $br3;
    $br3 = $pom;
}

    echo "<p> $br1 <= $br2 <= $br3 </p>";

/* 24. Za učitani broj ispitati da li je ceo*/
    $a = 10;
    if(floor($a) - $a == 0) {
        echo "<p> Broj $a je ceo broj </p>";
    }
    else {
        echo "<p> Broj $a nije ceo broj </p>";
    }

/* 25. Učitati dva cela broja i ispitati da li je veći od njih paran.*/
    $x = 36;
    $y = 35;
    if($x > $y and $x % 2 == 0) {
        echo "<p> Broj $x je paran broj </p>"; 
    }
    elseif($x > $y and $x % 2 != 0) {
        echo "<p> Broj $x je neparan broj </p>"; 
    }
    elseif($y > $x and $y % 2 == 0) {
        echo "<p> Broj $y je paran broj </p>";
    }
    elseif($y > $x and $y % 2 != 0) {
        echo "<p> Broj $y je neparan broj </p>";
    }
    else {
        echo "<p> Broj $x i broj $y su jednaki </p>";
    }

/* 26. Odrediti najveći od tri uneta broja*/
$x = 10;
$y = 11;
$z = 8;
if($x > $y) {
    $pom = $x;
    $x = $y;
    $y = $pom;
}
if($x > $z) {
    $pom = $x;
    $x = $z;
    $z = $pom;
}
if($y > $z) {
    $pom = $y;
    $y = $z;
    $z = $pom;
}

echo "<p> Broj $z je najveci </p>";

/* 27. Ispisati na ekranu „ekstremna temperatura“ ukoliko je temperatura manja od -15 stepeni Celzijusovih  i veća od 40 stepeni Celzijusovih.*/
$tem = -16;
if($tem < -15 or $tem > 40) {
    echo "<p> Ekstremna temperatura </p>";
}
else {
    echo "<p> Nije ekstremna temperatura </p>";
}

/* 28. Ispitati da li je godina prestupna. (Godinu preuzeti sa vremena na Vašem računaru). Prestupna je ona godina koja je deljiva sa 4, ako nije deljiva sa 100, mada ipak jeste deljiva sa 400.*/
   $god = date("Y");
   if($god % 4 == 0 and $god % 100 != 0 or $god % 400 == 0) {
       echo "<p> Godina je prestupna </p>";
   }
   else {
       echo "<p> Godina nije prestupna  </p>";
   }

/* 29. Jedan butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h do 18h. Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno otvoren.
*/
   $dan = date("N");
   $vreme = date("G");
   if($dan = 6 and $vreme < 10) {
        echo "<p> Butik je zatvoren</p>";
   }
   elseif($dan = 7 and $vreme > 18) {
    echo "<p> Butik je zatvoren</p>";
}
   elseif ($dan <= 5 and $vreme < 9) {
        echo "<p> Butik je zatvoren</p>";
   }
   elseif ($dan <= 4 and $vreme > 20) {
    echo "<p> Butik je zatvoren</p>";
}
   else {
        echo "<p> Butik je otvoren</p>";
   }

/* 30. Data je rec. Ako ima tacno pet slova, ispitati i prikazati da li jeste ili nije palindrom. Ako nema 5 slova, prikazati „Greska, rec nema 5 slova”. Rec je palindrom ako se cita isto i sa leve i desne strane. (Treba proveriti da li su odredjena slova ista u reci od 5 slova)
Proveriti na recima    „potop” – jeste,     „potok” – nije,   „racunar” - Greska
*/
   






?>