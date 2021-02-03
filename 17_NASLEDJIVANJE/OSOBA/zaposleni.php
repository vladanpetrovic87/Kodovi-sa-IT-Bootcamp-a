<?php

    require_once "osoba.php";

    class Zaposleni extends Osoba{
        
        private $plata;
        private $pozicija;


        public function __construct($ime, $prezime, $godRodjenja, $plata, $pozicija){
            parent::__construct($ime, $prezime, $godRodjenja);
            $this->setPlata($plata);
            $this->setPozicija($pozicija);
        }

        public function setPlata($plata){
            $this->plata = $plata;
        }
        public function setPozicija($pozicija){
            $this->pozicija = $pozicija;
        }

        public function getPlata(){
            return $this->plata;
        }
        public function getPozicija(){
            return $this->pozicija;
        }

        public function ispis1(){
            $this->ispis();
            echo "<p>Plata: {$this->getPlata()}</p>";
            echo "<p>Pozicija: {$this->getPozicija()}</p>";
        }
    }

    




?>