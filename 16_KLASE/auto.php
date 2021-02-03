<?php

    class Auto{
        // polja
        private $marka = "Fiat";
        private $boja;
        private $imaKrov = true;

        public function __construct($m, $b, $ik) {
            $this->setMarka = $m;
            $this->setBoja = $b;
            $this->setImaKrov = $ik;
        }

        //SETERI
        public function setMarka($m) {
            $this->marka = $m;
        }

        public function setBoja($b) {
            $this->boja = $b;
        }

        public function setImaKrov($ik) {
            $this->imaKrov = $ik;
        }

        public function getMarka(){
            return $this->marka;
        }

        public function getBoja(){
            return $this->boja;
        }

        public function getImaKrov(){
            return $this->imaKrov;
        }

        
        //metodi
        function sviraj(){
            echo "<p>$this->marka Beep! Beep!</p>";
        }
    }
        

    $auto3 = new Auto();
    $auto3->setMarka("Peugeot");
    $auto3->setBoja("bela");
    $auto3->setImaKrov(true);

    echo "<p> Korisnik vozi auto {$auto3->getMarka()}, boja automobila je {$auto3->getBoja()}</p>"; //Stavljamo u viticastim zagradama da bi izbegli konkatenaciju odnosno spajanje tackama

    $auto4 = new Auto("Ford", "siva", true);
    

    // $auto1 = new Auto();
    // echo $auto1 -> marka; //ispis polja
    // $auto1 -> marka = "Smart"; // dodela vrednosti polju
    // echo "<br>";
    // echo $auto1 -> marka;
    // echo "<br>";
    // echo $auto1 -> imaKrov;
    // echo "<br>";
    // $auto1 -> sviraj();

    // echo "<br>";
    // $auto2 = new Auto(); //nova instanca klase auto
    // echo $auto2 -> marka;
    // echo "<br>";
    // $auto2 -> sviraj();
?>