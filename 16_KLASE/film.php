<?php

    class Film{
        private $naslov;
        private $reziser;
        private $godinaIzdanja;

        public function __construct($n, $r, $gi) {
            $this->setNaslov($n);
            $this->setReziser($r);
            $this->setGodinaIzdanja($gi);
        }

        public function setNaslov($n) {
            $this->naslov = $n;
        }

        public function setReziser($r) {
            $this->reziser = $r;
        }

        public function setGodinaIzdanja($gi) {
            if($gi > 1800){
                $this->godinaIzdanja = $gi;
            }
            else {
                echo "Neispravan podatak";
            }
            $this->godinaIzdanja = $gi;
        }

        public function getNaslov() {
            return $this->naslov;
        }

        public function getReziser() {
            return $this->reziser;
        }

        public function getGodinaIzdanja() {
            return $this->godinaIzdanja;
        }



        function stampaj(){
            echo "<p>Naslov filma: $this->naslov, Reziser: $this->reziser, Godina izdanja: $this->godinaIzdanja</p>";
        }
    }

    // $f1 = new Film();
    // $f1->naslov = "Lajanje na zvezde";
    // $f1->stampaj();
    // $f1->reziser = "Zdravko Sotra";
    // $f1->godinaIzdanja = 2000;
    // $f1->stampaj();
    // $f1->setNaslov("Kamiondzije");
    // $f1->setReziser("Zdravko Sotra");
    // $f1->setGodinaIzdanja(1990);
    // $f1->stampaj();
    // echo "Ime filma je: " . $f1->getNaslov();
    $f2 = new Film("Ivkova slava","Zdravko Sotra", 1995);
    $f2->stampaj();

    class Pacijent{
        private $ime;
        private $visina;
        private $tezina;



        // SETERI - SET METODE - POSTAVLJAJU VREDNOST POLJA
        public function setIme($i){
            $this->ime = $i;
        }
        public function setVisina($v){
            if($v > 0 && $v < 250) {
                $this->visina = $v;
            }
            else {
                echo "Visina mora biti izmedju 0cm i 250cm";
                // $this->visina = 100; - Mozemo da vidimo i ovakve primere da ako se stavi izvan granica on setuje neku defaultnu vrednost
            }
            
        }
        public function setTezina($t){
            if($t > 0 && $t < 550) {
                $this->tezina = $t;
            }
            else {
                echo "Neispravno uneta tezina";
            }
            
        }

        //GETERI - GET METODE - VRACAJU VREDNOST POLJA
        public function getIme(){
            return $this->ime;
        }
        public function getVisina(){
            return $this->visina;
        }
        public function getTezina(){
            return $this->tezina;
        }

        public function stampaj(){

            echo "<p>Ime: $this->ime</p>";
            echo "<p>Visina: $this->visina cm</p>";
            echo "<p>Tezina: $this->tezina kg</p>";
        }
        public function bmi(){
            return $this->tezina/ ($this->visina/100)**2;
        }
        public function kritican(){
            //$bmiOsobe = $this->bmi(); - Moze da se stavi i u promenljivu, a kasnije umesto $this pisemo promenljivu imeOsobe

            if($this->bmi() < 15 || $this->bmi() > 40) {
                return true;
            }
            else {
                return false;
            }
        }
    }
    /*
    $pac1 = new Pacijent();
    $pac1->ime = "Petar";
    $pac1->visina = 190;
    $pac1->tezina = 90;
    $pac1->stampaj();
    echo "BMI pacijenta je: " . $pac1->bmi();
    if($pac1->kritican()) {
        echo "<p>Osoba ima kritican BMI</p>";
    }
    else {
        echo "<p>Osoba nema kritican BMI</p>";
    }
    */

    $pac2 = new Pacijent();
    // $pac2->ime = "Ana"; - Javlja gresku da je $pac2->ime privatno i moze mu se pristupiti samo unutar klase
    $pac2->stampaj(); // Ne javlja gresku jer je metoda javna i moze mu se pristupiti u klasi i van nje

    $pac2->setIme("Ana");
    $pac2->setVisina(168);
    $pac2->setTezina(55);
    $pac2->stampaj();
    echo "Ime pac2 pacijenta je: " . $pac2->getIme();


?>