<?php

    require_once "sportista.php";

    class Kosarkas extends Sportista{
      
        private $poeni;

        public function __construct($ime, $prezime, $godinaRodjenja,$gradRodjenja, $poeni){
            parent::__construct($ime, $prezime, $godinaRodjenja,$gradRodjenja);
            $this->setPoeni($poeni);
        }

        public function setPoeni($poeni){
            $this->poeni = $poeni;
        }

        public function getPoeni(){
            return $this->poeni;
        }

        public function ispisiKosarkasa(){
            $this->stampaj();
            // echo "<p>Poeni: " . implode(", ", $this->poeni) . "</p>"; //moze i ovako se ispise iz niza brojevi poena
            //ispis imena kosarkasa
            foreach($this->poeni as $p){
                echo $p . "; ";
            }
        }

        public function prosekPoena(){
            $suma = 0;
            foreach($this->poeni as $p){ //ili $this->getPoeni()
                $suma += $p;
            }
            $prosek = $suma / count($this->poeni);
        }
    }

?>