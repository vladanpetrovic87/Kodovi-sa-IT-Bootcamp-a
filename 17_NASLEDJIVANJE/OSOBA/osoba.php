<?php

    class Osoba{
        private $ime;
        private $prezime;
        private $godRodjenja;


        public function __construct($ime, $prezime, $godRodjenja) {
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->setGodRodjenja($godRodjenja);
        }

        public function setIme($ime){
            $this->ime = $ime;
        }
        public function setPrezime($prezime){
            $this->prezime = $prezime;
        }
        public function setGodRodjenja($godRodjenja){
            $this->godRodjenja = $godRodjenja;
        }

        public function getIme(){
            return $this->ime;
        }
        public function getPrezime(){
            return $this->prezime;
        }
        public function getGodRodjenja(){
            return $this->godRodjenja;
        }

        public function ispis(){
            echo "<p>Ime: {$this->getIme()}</p>";
            echo "<p>Prezime: {$this->getPrezime()}</p>";
            echo "<p>Godina rodjenja: {$this->getGodRodjenja()}</p>";
        }
    }

    


?>