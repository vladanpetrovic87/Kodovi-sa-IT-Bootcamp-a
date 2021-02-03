<?php

    require_once "vozilo.php";

    class Automobil extends Vozilo{


        private $brSedista;

        //KONSTRUKTOR
        public function __construct($tip, $boja, $brSedista){
            //Moguce je pozivati roditeljske setere, ali nije prakticno. Prakticnije je pozvati roditeljski konstruktor.
            //$this->setTip($tip);
            //$this->setBoja($boja);
            parent::__construct($tip, $boja);
            $this ->setBrSedista($brSedista);
        }


        //SETERI - SAMO ZA "SOPSTVENA POLJA"
        public function setBrSedista($brSedista){
            $this->brSedista = $brSedista;
        }


        //GETERI - SAMO ZA "SOPSTVENA POLJA"
        public function getBrSedista(){
            return $this->brSedista;
        }

        //METODE
        public function ispisiAutomobil(){
            echo "<p>Automobil u pokretu</p>";
        }
        


    }



?>