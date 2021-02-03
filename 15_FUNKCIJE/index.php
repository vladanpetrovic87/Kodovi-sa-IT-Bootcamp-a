<?php
    
    echo "<h3>Funkcije</h3>";

    function mojaFunkcija() {
        echo "<p>Zdravo svete!</p>";
    }

    mojaFunkcija();
    mojaFunkcija();
    mojaFunkcija();

    echo "Funkcija Vam poručuje: ";
    mojaFunkcija();

    // Funcija sa prosledjenim argumentom
    echo "<hr>";
    
    function ispisiTekst($tekst) {
        $smajli = ":)"; // Funkcija vidi samo one promenljive koje su u njoj definisane ili koje su joj prosledjene. Takodje one promenljive koje su definisane u funkciji, vidljivo je samo u njoj
        echo "<p>Prosledili ste tekst: $tekst $smajli</p>";
    }

    ispisiTekst("Festina lente!");
    ispisiTekst("Žuri polako!");

    $t = "Vuk dlaku menja ali ne ćud";
    ispisiTekst($t);

    $b = 5;
    ispisiTekst($b);

    function horizontalnaLinija() {
        echo "<hr>";
    }
    horizontalnaLinija();

    //Funkcija sa dva prosledjena argumenta (parametara)
    function ispisiKorisnika($ime, $prezime) {
        echo "<p>Ulogovani korisnik je: <i>$ime $prezime</i></p>";
    }

    ispisiKorisnika("Stefan", "Stanimirović");
    ispisiKorisnika("Jelena","Matejić");
    $ime = "Milena";
    $prez = "Djordjević";
    ispisiKorisnika($ime, $prez);
    horizontalnaLinija();

    //Funkcija sa tri prosledjena argumenta (parametara)
    function ispisiKorisnikaIGodine($ime, $prezime, $god) {
        if($god < 0 || $god > 120 || $ime=="" || $prezime=="") {
            echo "<p>Neispravno uneti podaci</p>";
        }
        else {
        echo "<p> Korisnik $ime $prezime ima $god godina</p>";
        }
    }

    ispisiKorisnikaIGodine("Jelena", "Matejić", 26);

    //Funkcija koja vraca vrednost
    function zbir($br1, $br2) {
        $z = $br1 + $br2;
        return $z;
    }

    echo zbir(7, 3.5);

    echo "<p>Zbir brojeva iznosi";
    echo zbir(5.3, 7.2);
    echo "</p>";

    echo "<h3>Zbir brojeva iznosi";
    echo zbir(5.3, 7.2);
    echo "</h3>";

    //Zadatak: Izracunati zbir 3 broja koriscenjem funkcije zbir
    $b1 = 5;
    $b2 = 6;
    $b3 = 7;

    $zbirB1B2 = zbir($b1, $b2);
    $zbirB1B2B3 = zbir($zbirB1B2, $b3);
    echo "<p> $b1 + $b2 + $b3 = $zbirB1B2B3</p>";

    // 2. nacin za zbir 3 broja koriscenjem funkcije zbir
    $zbirB1B2B3 = zbir(zbir($b1, $b2) , $b3);
    echo "<p> $b1 + $b2 + $b3 = $zbirB1B2B3</p>";

    // Zbir 5 brojeva
    $zb5 = zbir(zbir(zbir(5,6), zbir(7,8)), 9);
    echo "<p> $zb5</p>";


    /*1. Napisati funkciju neparan koja za uneti
    ceo broj n vraća tačno ukoliko je neparan
    ili netačno ukoliko nije neparan.
    Pozvati funkciju i testirati njen rad.*/

    

    function neparan($n) {
        $niz = array(1,2,3,4,5,6,7,8,9,10);
        echo "<p>Pocetak funkcije</p>";
        if($n % 2 == 0) {
            // echo "Broj $broj je paran";
            return false; //Cim se desi return, tu se prekida funkcija
        }
        else {
            // echo "Broj $broj je neparan";
            return true;
        }   
        echo "<p>Kraj funkcije</p>"; //Ova linija koda se nece ivrsiti zato sto pre nje imamo return naredbu
        
    }

        $n = 9;
        if (neparan($n)) {
            echo "Broj je neparan";
        }
        else {
            echo "Broj je paran";
        }

    


    /*2. Napisati funkciju maks2 koja vraća veći
    od dva prosleđena realna broja. Zatim
    napisati funkciju maks4 koja vraća
    najveći od četiri realna broja.
    Pozvati funkcije i testirati njihov rad.*/

    function maks2($a, $b) {
        if($a > $b) {
            return $a;
        }
        else {
            return $b;
        }
    }

    function maks4($a, $b, $c, $d) {
        //1. nacin
        // $maksAB = maks2($a, $b);
        // $maksCD = maks2($c, $d);
        // $maks = maks2($maksAB, $maksCD);
        // return $maks;

        //2.nacin
        return maks2(maks2($a, $b), maks2($c, $d));
    }
    echo "<br>";
    echo maks4(-78, -76, -45, 100);
    echo "<br>";

    /*3. Napisati funkciju slika kojoj se
    prosleđuje url adresa slike, a funkcija
    prikazuje sliku za prosleđenu adresu slike.
    Pozvati funkciju i testirati je za različite url
    adrese.*/

    function slika($adresa) {
        echo "<img src='$adresa'>";
    }
    slika('https://www.popwebdesign.net/popart_blog/wp-content/uploads/2019/05/slike-prirode-za-desktop-757.jpg');

    
    


    /*4. Napraviti funkciju obojenaRec kojoj se
    prosleđuje boja na engleskom jeziku i
    prosleđuje se proizvoljna reč. Prosleđenu
    reč ispisati u paragarfu bojom koja je
    prosleđena. Pozvati funkciju i testirati je.*/

        function obojenaRec($boja, $rec) {
            echo "<p style = 'color:$boja' > $rec </p>";
        }
        obojenaRec("green", "Funkcija");

        /*5. Napraviti funkciju recenica1 koja pet
        puta ispisuje istu rečenicu u paragrafu, a
        veličina fonta rečenice treba da bude
        jednaka vrednosti iteratora (sami odredite
        startnu vrednost iteratora i za koliki korak
        ćete iterator povećavati). Testirati funkciju  */

        function recenica1($rec) {
            for($i = 11; $i < 16; $i++) {
                echo "<p style='font-size: $i;'>$rec</p>";
            }
        }

        recenica1("tekst");

        /*6. Napraviti funkciju recenica2 kojoj se
        prosleđuje veličina fonta a ona u paragrafu
        ispisuje proizvoljnu rečenicu. Pozvati
        funkciju pet puta za različite prosleđene
        vrednosti. Testirati funkciju.*/

        function recenica2($size) {
            echo "<p style='font-size: ${size}px;'>Neka recenica</p>";
        }
        recenica2(20);
        recenica2(30);
        recenica2(25);
        recenica2(10);
        recenica2(15);
            
        
        horizontalnaLinija();


        /* 7.Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. 
        Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.
        */
        function aritmeticka($n, $m) {
            $zbir = 0;
            $br = 0;
            for($i = $n; $i < $m; $i++) {
                $zbir += $i;
                $br++;
            }
            $ar = $zbir / $br;
            return $ar;
        }
        echo aritmeticka(50, 55);

        horizontalnaLinija();

        /*8. Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m.
        Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.
        */
        function aritmetickaCifre($n, $m) {
            $zbir = 0;
            $br = 0;
            for($i = $n; $i < $m; $i++) {
                if($i % 10 == 3) {
                    $zbir += $i;
                    $br++;
                }
                
            }
            $ar = $zbir / $br;
            return $ar;
        }
        echo aritmetickaCifre(5, 35);

        // function aritmetickaCifre($n, $m, $poslednjaCifra) {
        //     $zbir = 0;
        //     $br = 0;
        //     for($i = $n; $i < $m; $i++) {
        //         if($i % 10 == $poslednjaCifra) {
        //             $zbir += $i;
        //             $br++;
        //         }
                
        //     }
        //     $ar = $zbir / $br;
        //     return $ar;
        // }
        // echo aritmetickaCifre(5, 35, 3);

        horizontalnaLinija();

        /*9. Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.
        Napišite funkciju praksa kojoj se prosleđuju brojevi n, a i d. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu.
        Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća).
        */

        function praksa($n, $a, $d) {
            //1. nacin
            // $ukupno = $a;
            // for($i = 2; $i <= $n; $i++){
            //     $ukupno += $a + $d;
            // }
            // return $ukupno;

            //2. nacin
            // $ukupno = 0;
            // for($i = 1; $i <= $n; $i++){
            //     $ukupno += $a + $d;
            // }
            // return $ukupno - $d; //Oduzimam jednu povisicu koja je bila 1. meseca

            // 3. nacin
            // $ukupno = $a + ($n-1) * ($a + $d);
            // return $ukupno;

            //4. nacin
            $ukupno = ($a + $d) * $n - $d;
            return $ukupno;
        }
        $n = 4; // Broj meseci
        $a = 5000; // Plata prvog meseca
        $d = 500; //Povisica

        echo praksa($n, $a, $d);
        

        horizontalnaLinija();

        //Ukoliko je svakog meseca plata veca za vrednost povisice u odnosu na prethodni mesec
        function praksa1($n, $a, $d) {
            $suma = 0;
            for($i = 0; $i < $n; $i++) {
                $suma += $a + $i * $d;
            }
            return $suma;
        }
        echo praksa1($n, $a, $d);

        horizontalnaLinija();

        /*10.  Napraviti niz celih brojeva. 
        Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka.
        Pozvati funkciju i testirati je.*/

       
        $niz = array(1,2,3,4,5,6,7,8,9,10);
        
        for($i = 0; $i < count($niz); $i++) {
            if(neparan($niz[$i])) {
                echo $niz[$i];
            }
        }
        

        /*11.  Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, a funkcija prebrojava i vraća koliko neparnih brojeva ima prosleđeni niz.
        Pozvati funkciju i testirati je.
        */
        function brojNeparnih ($niz) {
            // $niz = array(1,2,3,4,5,6,7,8,9,10);
            // $br = 0;
            // for($i = 0; $i < count($niz); $i++) {
            //     if($niz[$i] % 2 != 0) {
            //         $br++;      
            //     }
            // }
            // return $br;
            
            $brNeparnih = 0;
            for($i = 0; $i < count($niz); $i++) {
                if(neparan($niz[$i])) {
                    $brNeparnih++;
                }
            }
            return $brNeparnih;
        }
        $brojevi = array (1,2,3,4,5);
        echo brojNeparnih($brojevi);

        /*12.U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha. Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura. Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža, a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. 
        Testirati implementirani kod.
        */
        $merenja = array("10.01.2021." => -17,
                        "11.01.2021." => 8,
                        "12.01.2021." => 7, 
                        "13.01.2021." => 3, 
                        "14.01.2021." => 2,);
        
        function najnizaTemp($merenja) {
            $temperature = array_values($merenja);
            $najniza = $temperature[0];
            $i = 0;

        foreach($merenja as $key => $value){
            if($najniza >= $value) {
                $najniza = $value;
                $datumNajniza = $key;
                $danNajniza = $i;
            }
            $i++;
        }
        

        $dani = array("ponedeljak", "utorak", "sreda", "cetvrtak", "petak");
        echo "<p style='color:blue'>$dani[$danNajniza] $datumNajniza $najniza</p>";
        }

        najnizaTemp($merenja);

        function najvisaTemp($merenja) {
            $temperature = array_values($merenja);
            $najvisa = $temperature[0];
            $i = 0;

            foreach($merenja as $key => $value) {
                if($value >= $najvisa) {
                    $najvisa = $value;
                    $datumNajvisa = $key;
                    $danNajvisa = $i;
                }
                $i++;
            }

            $dani = array("ponedeljak", "utorak", "sreda", "cetvrtak", "petak");
            echo "<p style='color:red'>$dani[$danNajvisa] $datumNajvisa $najvisa</p>";
        }

        najvisaTemp($merenja);

        /*13.  Dat je niz rečenica. Napraviti funkciju ili više njih kako biste zelenom bojom ispisali sve palindromske rečenice iz niza rečenica, a crvenom bojom ispisati sve ostale rečenice.
        Rečenica je palindromska ukoliko se isto čita slava na desno i sdesna na levo (neračunajući razmake). */

        $recenice = array(
            "i jogurt ujutru goji",
            "neka recenica",
            "oni vole belo vino",
            "neki tekst"
        );


        //Provera da li je recenica palindromska
        function provera($string) {
            $string = str_replace(' ','', $string);
            if($string == strrev($string)) {
                echo "Ovo je palindrom";
            }
            else {
                echo "Ovo nije palindrom";
            }
             

        }

        provera("i jogurt ujutru goji");


        // Provera da li je rec madam palindrom
        $input = "madam";
        $reverse = strrev($input);
        if($input == $reverse) {
            echo "<p>$input je palindrom</p>";
        }
        else {
            echo "<p>$input nije palindrom</p>";
        }

       


        


        



?>