<?php

    abstract class Kredit{
        protected $godKamata;
        protected $osnovica;
        protected $brGod;
        protected $tip;

        private static $defaultBrGod;
        private static $podGodKamata;
        private static $brojKredita = 0;//postavljamo ga da bude 0 za pocetnu vrednost

        public const DEFAULT_OSNOVICA = 1000;// Ne pise se ni seter ni geter za konstantu

        public function __construct($godKamata, $osnovica, $brGod, $tip){
            $this->setGodKamata($godKamata);
            $this->setOsnovica($osnovica);
            $this->setBrGod($brGod);
            $this->setTip($tip);
            self::$brojKredita++;//ovde stavljamo da se povecava broj kredita za 1
            echo "<p style='color:green'>Pozvan je kostruktor za klasu Kredit</p>";
            }

        public function __destruct(){
            self::$brojKredita--;// Smanjuje memoriju kad se izbrise neki kredit
            echo "<p style='color:red'>Pozvan je destruktor za klasu Kredit</p>";
        }

        public static function getBrojKredita(){
            return self::$brojKredita;
        }
        
    
        public function setGodKamata($godKamata){//Postavljamo neke vrednosti ako su vrednosti manje od 0 ili vece od 100
            if($godKamata < 20){
                $this->godKamata = self::$podGodKamata;
            }
            elseif($godKamata <= 100){
                $this->godKamata = $godKamata;
            }
            else{
                $this->godKamata = self::$podGodKamata;
            }
        }
        public function setOsnovica($osnovica){
            if($osnovica > self::DEFAULT_OSNOVICA){
                $this->osnovica = $osnovica;
            }
            else {
                $this->osnovica = self::DEFAULT_OSNOVICA;//Postavlja se default osnovica koje sluzi da se postavi default vrednost ako nije ispunjen uslov
            }
        }
        public function setBrGod($brGod){
            if($brGod > 0){
            //     if(is_int($brGod)){// Ovako se pita da li je integer broj godina
            //         $this->brGod = $brGod;
            //     }
            //     elseif(is_float($brGod)){//Proverava da li je ceo(realan) broj
            //         $this->brGod = ceil($brGod);
            //     }
            // }
            //     else {
            //         $this->brGod = 0;
            // }
            $this->brGod = ceil($brGod);
            }
            else {
                $this->brGod = self::$defaultBrGod;
            }
        }
        public function setTip($tip){
            if(is_string($tip)){//Proverava da li je unet string
                $this->tip = $tip;
            }
            else {
                $this->tip = "";
            }
        }

        public static function setDefaultBrGod($brGod){
            if($brGod > 0) {
                self::$defaultBrGod = ceil($brGod);
            }
            else{
                self::$defaultBrGod = 5;
            }
        }

        public function setPodGodKamata($godKamata){
            if($godKamata < 20){
                self::$podGodKamata = 20;
            }
            elseif($godKamata <= 100){
                self::$podGodKamata = $godKamata;
            }
            else {
                self::$podGodKamata = 100;
            }
        }

        
        public function getGodKamata(){
            return $this->godKamata;
        }
        public function getOsnovica(){
            return $this->osnovica;
        }
        public function getBrGod(){
            return $this->brGod;
        }
        public function getTip(){
            return $this->tip;
        }
        public static function getDefaultBrGod(){
            return self::$defaultBrGod;
        }
        public static function getPodGodKamata(){
            return self::$podGodKamata;
        }
        


        public function stampa(){
            echo "<p>Godisnja kamata: {$this->getGodKamata()} %</p>";
            echo "<p>Osnovica: {$this->getOsnovica()}</p>";
            echo "<p>Broj godina: {$this->getBrGod()} god.</p>";
            echo "<p>Tip: {$this->getTip()}</p>";
            echo "<p>Mesecna rata: {$this->mesecnaRata()}</p>";//dodajemo mesecna rata iz osnovne klase
        }

        // public function mesecnaRata(){
        //     $kamata = $this->osnovica * $this->brGod * $this->godKamata / 100 * 1.1;
        //     $brojMeseci = $this->brGod * 12;
        //     return ($this->osnovica + $kamata) / $brojMeseci;
        // }
    //     Varijanta kada je osnovna klasa Kredit imala metodu mesecnaRata()

        public abstract function mesecnaRata();//Prazna je metoda u osnovnoj klasi

        public abstract function proba();



    }

    


?>