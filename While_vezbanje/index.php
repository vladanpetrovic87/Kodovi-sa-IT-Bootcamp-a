    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .plaviOkvir {
                border: 1px blue solid;
            }

            .zeleniOkvir {
                border: 1px green dotted;
            }

        </style>

    </head>
    <body>

    <?php

    /* 1. Ispisati brojeve od 1 do 20:
    a. Svaki u istom redu
    b. Svaki u novom redu*/
    $n = 1;
    while($n <= 20) {
        echo $n;
        $n++;
    }

    $n = 1;
    while($n <= 20) {
        echo "<p>$n</p>";
        $n++;
    }

    /* 2. Ispisati brojeve od 20 do 1.*/
    $j = 20;
    while($j >= 1) {
        echo "<p>$j</p>";
        $j--;
    }
    echo "<hr>";

    /* 3. Ispisati parne brojeve od 1 do 20.*/
    $j = 2;
    while($j <= 20) {
        if($j % 2 == 0){
            echo "<p>$j</p>";
            $j+=2;
        }
    }

    /* 4. Kreirati n paragrafa sa proizvoljnim tekstom i
    naizmenično ih obojiti u tri različite boje*/
    $n = 7;
    while($n > 0) {
        if($n % 3 == 0) {
            echo "<p style='color:red'>Neki tekst</p>";
        }
        elseif($n % 3 == 1) {
            echo "<p style='color:green'>Neki tekst</p>";
        }
        else {
            echo "<p style='color:blue'>Neki tekst</p>";
        }
        $n--;
    }

    /* 5. Kreirati n proizvoljnih slika i staviti im naizmenično
    dva različita okvira*/
    $n = 4;
    $k = 0;
    while($k < $n) {

        $klasa = "plaviOkvir";
        if($k % 2 == 0) {
            $klasa = "zeleniOkvir";
        }
        echo "<img src ='Cvet.jpeg' class='$klasa' width='150px'>";
        $k++;
    }

    /* 6. Odrediti sumu brojeva od 1 do 100*/
    $n = 1;
    $suma = 0;
    while($n <= 100) {
        $suma = $suma + $n;
        $n++;
    }
        echo "<p>Suma brojeva je $suma </p>";

    /* 7. Odrediti sumu brojeva od 1 do n*/
    $n = 20;
    $m = 1;
    $suma = 0;
    while($m <= $n) {
        $suma += $m;
        $m++;
    }
    echo "<p>Suma brojeva je $suma </p>";

    // 8) Odrediti sumu brojeva od n do m

    // 9) Odrediti proizvod brojeva od n do m
    $n = 1;
    $m = 10;
    $proizvod = 1;
    while($n <= $m) {
        $proizvod *= $n;
        $n++;
    }
    echo "<p>Proizvod brojeva je $proizvod </p>";


    // 10) Odrediti sumu kvadrata parnih i sumu kubova
    // neparnih brojeva od n do m
    $n = 1;
    $m = 10;
    $sumaKv = 0;
    $sumaKub = 0;
    while($n <= $m) {
        if($n % 2 == 0) {
            $sumaKv += $n**2;
        }
        else {
            $sumaKub += $n**3;
        }
        $n++;
    }
    echo "<p>Suma kvadrata parnih brojeva je $sumaKv </p>";
    echo "<p>Suma kubova neparnih brojeva je $sumaKub </p>";

    // 11) Odrediti sa koliko brojeva je deljiv uneti broj k
    $n = 1;
    $m = 10;
    $k = 2;
    $br = 0;
    while($n <= $m) {
        if($n % $k == 0) {
            $br++;
        }
        $n++;
    }
    echo "<p>Broj $k je deljiv sa $br brojeva</p>";


    // 12) Odrediti da li je dati prirodan broj n prost. Broj je
    // prost ako je deljiv samo sa jedan i sa samim sobom.
    $n = 7;
    $br = 1;
    $deljiv = 0;
    
    while($br <= $n) {
        if($n % $br == 0) {
            $deljiv++;
        }
        $br++;
    }
    if($deljiv == 2) {
        echo "<p>Broj je prost</p>";
    }
    else {
        echo "<p>Broj nije prost</p>";
    }













    ?>



    </body>
    </html>
    
    
    
    
    
    
    
   