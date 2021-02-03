<?php

    require_once "vozilo.php";

    class Motocikl extends Vozilo {

        private $brTockova;
        private $regBroj;

        public function __construct($tip, $boja, $brTockova, $regBroj){
            parent::__construct($tip, $boja);
            $this->setBrTockova($brTockova);
            $this->setRegBroj($regBroj);
        }

        public function setBrTockova($brTockova){
            $this->brTockova = $brTockova;
        }
        public function setRegBroj($regBroj){
            $this->regBroj = $regBroj;
        }

        public function getBrTockova(){
            return $this->brTockova;
        }
        public function getRegBroj(){
            return $this->regBroj;
        }

        public function ispisiMotocikl(){
            echo "<p>Motocikl u pokretu</p>";
        }

        public function motocikl() {
            echo "<p>Tip: {$this->getTip()}</p>";
        }

    }

    $m = new Motocikl("Tomos", "siva", 2, 1234);
    $m->ispisiMotocikl();
    $m->ispisiVozilo();
    $m->motocikl();




?>