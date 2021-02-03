<?php

// 1. Ispisati brojeve od 1 do 20.
$n = 1;
$m = 20;
for($i = $n; $i <= $m; $i++) {
    echo "<p>$i</p>";
}

// 2) Ispisati brojeve od 20 do 1.
$n = 20;
$m = 1;
for($i = $n; $i >= $m; $i--) {
    echo "<p>$i</p>";
}

// 3) Ispisati parne brojeve od 1 do 20.
$n = 1;
$m = 20;
for($i = $n; $i <= $m; $i++) {
    if($i % 2 ==0) {
        echo "<p>$i</p>";
    }
}

// 4) Ispisati dvostruku vrednost brojeva od 5 do 15.
$n = 5;
$m = 15;
$br = 0;
for($i = $n; $i <= $m; $i++) {
    $br = $i * 2;
}
echo "<p>$br</p>";

// 5) Odrediti sumu brojeva od 1 do 100.
$n = 1;
$m = 100;
$suma = 0;
for($i = $n; $i <= $m; $i++) {
    $suma += $i;
}
echo "<p>Suma brojeva od $n do $m je broj $suma</p>";

// 6) Odrediti sumu brojeva od 1 do $n.
// 7) Odrediti sumu brojeva od $n do $m.
// 8) Odrediti proizvod brojeva od $n do $m.
$n = 1;
$m = 50;
$proizvod = 1;
for($i = $n; $i <= $m; $i++) {
    $proizvod *= $i;
}
echo "<p>Proizvod brojeva od $n do $m je broj $proizvod</p>";

// 9) Odrediti sumu kvadrata brojeva od n do m
$n = 1;
$m = 10;
$suma = 0;
for($i = $n; $i <= $m; $i++) {
    $suma += $i**2;
}
echo "<p>Suma kvadrata brojeva od $n do $m je broj $suma</p>";



// 10) Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For
// petljom prikazati naizmenično ukupno $n sličica.
for($n = 1; $n <= 3; $n++) {
    if($n % 3 == 1) {
        echo "<img src='slike/1.jpg' width='150px'>";
    }
    elseif($n % 3 == 2) {
        echo "<img src='slike/2.jpg' width='150px'>";
    }
    else {
        echo "<img src='slike/3.jpg' width='150px'>";
    }
}

// 11) Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30.
$n = 1;
$m = 30;
$suma = 0;
for($i = $n; $i <= $m; $i++) {
    if($i % 9 == 0) {
        $suma += $i;
    }
}
echo "<p>Suma brojeva od $n do $m, a koji su deljivi sa 9 je $suma</p>";

// 12) Odrediti proizvod svih brojeva deljivih sa 11 u intervalu
// od 20 do 100.
$n = 20;
$m = 100;
$proizvod = 1;
for($i = $n; $i <= $m; $i++) {
    if($i % 11 == 0) {
        $proizvod *= $i;
    }
}
echo "<p>Proizvod brojeva od $n do $m, a koji su deljivi sa 11 je $proizvod</p>";

// 13) Prebrojati koliko ima brojeva deljivih sa 13 u intervalu
// od 5 do 150.
$n = 5;
$m = 150;
$br = 0;
for($i = $n; $i <= $m; $i++) {
    if($i % 13 == 0) {
        $br++;
    }
}
echo "<p>Ima $br broja koji su deljivi sa 13 u intervalu od $n do $m</p>";

// 14) Ispisati aritmetičku sredinu brojeva od $n do $m.
$n = 1;
$m = 10;
$sum = 0;
for($i = $n; $i <= $m; $i++) {
    $sum = $sum + $i;
}
$artm = $suma / ($i - $n);
echo "<p>Aritmeticka sredina je broj $artm</p>";

// 15) Prebrojati koliko brojeva od $n do $m je pozitivno, a
// koliko njih je negativno.
$n = -10;
$m = 10;
$pozitivni = 0;
$negativni = 0;
for($i = $n; $i <= $m; $i++) {
    if($i >= 0) {
        $pozitivni++;
    }
    else {
        $negativni++;
    }
}
echo "<p>Od $n do $m je pozitivno $pozitivni brojeva</p>";
echo "<p>Od $n do $m je negativno $negativni brojeva</p>";

// 16) Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa
// 3 ili sa 5.
$n = 5;
$m = 50;
$deljivi = 0;
for($i = $n; $i <= $m; $i++) {
    if($i % 3 == 0 || $i % 5 == 0) {
        $deljivi++;
    }
}
echo "<p>Od $n do $m je deljivo sa 3 ili 5 ukupno $deljivi broja</p>";

// 17) Prebrojati i izračunati sumu brojeva od n do m kojima
// je poslednja cifra 4 i parni su.
$n = 1;
$m = 20;
$suma = 0;
$br = 0;
for($i = $n; $i <= $m; $i++) {
    if($i % 10 == 4) {
        $suma += $i;
        $br++;
    }
}
echo "<p>Suma brojeva od $n do $m cija je poslednja cifra 4 je $suma i ima ih ukupno $br broja</p>";


// 18) Ispisati brojeve od $n do $m, koji su deljivi sa $a.
$n = 1;
$m = 20;
$a = 5;
for($i = $n; $i <= $m; $i++) {
    if($i % $a == 0) {
        echo "<p>$i</p>";
    }
}

// 19) Ispisati brojeve od $n do $m koji nisu deljivi sa $a.
$n = 1;
$m = 20;
$a = 5;
for($i = $n; $i <= $m; $i++) {
    if($i % $a != 0) {
        echo "<p>$i</p>";
    }
}

// 20) Odrediti sumu brojeva od $n do $m koji
// nisu deljivi brojem $a.
$n = 1;
$m = 10;
$a = 3;
$suma = 0;
for($i = $n; $i <= $m; $i++) {
    if($i % $a != 0) {
        $suma += $i;
    }
}
echo "<p>Suma brojeva od $n do $m koji nisu deljivi brojem $a je $suma</p>";


// 21) Odrediti proizvod brojeva od $n do $m koji su deljivi
// brojem $a, a nisu brojem $b.
$n = 1;
$m = 20;
$a = 5;
$b = 3;
$proizvod = 1;
for($i = $n; $i <= $m; $i++) {
    if($i % $a == 0 && $i % $b != 0) {
        $proizvod *= $i;
    }
}
echo "<p>Proizvod brojeva od $n do $m koji su deljivi brojem $a, a nisu deljivi brojem $b je $proizvod</p>";



?>