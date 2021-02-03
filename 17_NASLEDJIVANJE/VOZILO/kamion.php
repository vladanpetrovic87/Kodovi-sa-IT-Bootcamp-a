<?php

    require_once "vozilo.php";

    class Kamion extends Vozilo{


        private $nosivost;
        private $maxBrzina;


        public function __construct($tip, $boja, $nosivost, $maxBrzina){
            parent::__construct($tip, $boja);
            $this->setNosivost($nosivost);
            $this->setMaxBrzina($maxBrzina);

        }

        public function setNosivost($nosivost){
            $this->nosivost = $nosivost;
        }
        public function setMaxBrzina($maxBrzina){
            $this->maxBrzina = $maxBrzina;
        }

        public function getNosivost(){
            return $this->nosivost;
        }
        public function getMaxBrzina(){
            return $this->maxBrzina;
        }

        public function ispisiKamion(){
            echo "<p>Kamion u pokretu</p>";
        }
    }

    $k = new Kamion("Sleper", "bela", 2000, 100);
    $k->ispisiKamion();
    $k->ispisiVozilo();
    


?>