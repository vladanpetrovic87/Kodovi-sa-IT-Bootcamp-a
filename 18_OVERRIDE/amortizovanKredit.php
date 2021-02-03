<?php

    require_once "kredit.php";

    class AmortizovanKredit extends Kredit {
        const TIP = "Amortizovan Kredit";
        public function __construct($godKamata, $osnovica, $brGod){
            parent::__construct($godKamata, $osnovica, $brGod, self::TIP);
        }
        /*
        public function mesecnaRataAmortizovanKredit(){
            $mesecnaKamata = $this->godKamata / 100 / 12;
            $stepen = (1 + $mesecnaKamata) ** ($this->brGod * 12);
            return ($this->osnovica * $mesecnaKamata * $stepen) / ($stepen - 1);
        } */

        // override - druga varijanta osnovne klase
        public function mesecnaRata(){ // Menjamo samo ime metode da bude ista kao u osnovnoj klasi, odnosno ovo je VARIJANTA iz osnovne klase
            $mesecnaKamata = $this->godKamata / 100 / 12;
            $stepen = (1 + $mesecnaKamata) ** ($this->brGod * 12);
            return ($this->osnovica * $mesecnaKamata * $stepen) / ($stepen - 1);
        }

        public function proba(){
            return "Proba za amortizovan kredit";
        }
    }


?>