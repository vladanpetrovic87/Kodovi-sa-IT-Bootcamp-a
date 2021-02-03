<?php

    require_once "kredit.php";

    class ObicanKredit extends Kredit{

        const TIP = "Obican kredit";

        public function __construct($godKamata, $osnovica, $brGod){// Prosledjujemo 3 parametra zato sto se menja tip u konstantu
            parent::__construct($godKamata, $osnovica, $brGod, self::TIP);// Tip je konstantna vrednost: Obican kredit
        }
    
        /*
        public function mesecnaRataObicanKredit(){
                $kamata = $this->osnovica * $this->brGod * $this->godKamata / 100;
                $brojMeseci = $this->brGod * 12;
                return ($this->osnovica + $kamata) / $brojMeseci;
            }
            
        
        Ukoliko ime metode ostane mesecnaRataObicanKredit(), to znaci da izvedena klasa Obican kredit poseduje i metodu:
        - mesecnaRata() koju je nasledila iz osnovne klase
        - mesecnaRataObicanKredit() koja je samo njena metoda.
        Resenje je da izvedena klasa NE NUDI novu metodu, nego da nudi VARIJANTU metode iz osnovne klase.
        */

    

        public function mesecnaRata(){
            $kamata = $this->osnovica * $this->brGod * $this->godKamata / 100;
            $brojMeseci = $this->brGod * 12;
            return ($this->osnovica + $kamata) / $brojMeseci;
        }

        public function proba(){
            return "Proba za obican kredit";
        }

    



    }
?>