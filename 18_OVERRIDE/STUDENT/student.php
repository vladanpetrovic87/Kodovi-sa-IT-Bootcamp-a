<?php

    abstract class Student{
        protected $ime;
        protected $osvojeniESPB;
        protected $prosOcena;


        public abstract function skolarina($espb);
        public abstract function prijavaIspita();

        public function __construct($ime, $osvojeniESPB, $prosOcena){
            $this->setIme($ime);
            $this->setOsvojeniESPB($osvojeniESPB);
            $this->setProsOcena($prosOcena);
        }

        public function setIme($ime){
            $this->ime = $ime;
        }
        public function setOsvojeniESPB($osvojeniESPB){
            $this->osvojeniESPB = $osvojeniESPB;
        }
        public function setProsOcena($prosOcena){
            $this->prosOcena = $prosOcena;
        }

        public function getIme(){
            return $this->ime;
        }
        public function getOsvojeniESPB(){
            return $this->osvojeniESPB;
        }
        public function getProsOcena(){
            return $this->prosOcena;
        }

        public function ispisi(){
            echo "<p>Ime: {$this->getIme()}</p>";
            echo "<p>Osvojeni ESPB: {$this->getOsvojeniESPB()}</p>";
            echo "<p>Prosecna ocena: {$this->getProsOcena()}</p>";
        }

    }






?>