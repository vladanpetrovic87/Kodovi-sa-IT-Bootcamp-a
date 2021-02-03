<?php

    class Pacijent{
        private $ime;
        private $visina;
        private $tezina;

        //KONSTRUKTOR - AUTOMATSKI POSTAVLJA PARAMETRE/POLJA
        public function __construct($i, $v, $t){
            $this->setIme($i);
            $this->setVisina($v);
            $this->setTezina($t);
        }

        //SETERI - SET METODE - POSTAVLJAJU VREDNOST POLJA
        public function setIme($i){
            $this->ime = $i;
        }
        public function setVisina($v){
            if($v > 0 && $v < 250){
                $this->visina = $v;
            } else {
                echo "Visina mora  biti izmedju 0cm i 250cm";
                $this->visina = 100;
            }            
        }
        public function setTezina($t){
            if($t>0 && $t<450){
                $this->tezina = $t;
            } else {
                echo "Neispravno uneta tezina";
            }            
        }

        //GETERI - GET METODE - VRACAJU VREDNOST POLJA
        public function getIme(){
            return $this->ime;
        }
        public function getVisina(){
            return $this->visina;
        }
        public function getTezina(){
            return $this->tezina;
        }

        public function stampaj(){
            echo 
            "
            <ul>
                <li>$this->ime</li>
                <li>$this->visina cm</li>
                <li>$this->tezina kg</li>
            </ul>
            ";
        }

        public function bmi(){
            return $this->tezina / ($this->visina/100)**2;
        }

        public function kritican(){
            $bmiOsobe = $this->bmi();

            if($bmiOsobe<15 || $bmiOsobe>40){
                return true;
            } else {
                return false;
            }
        }
    }

    $p1 = new Pacijent("Milica", 183, 75); 
    $p2 = new Pacijent("Ana", 190, 90);
    $p3 = new Pacijent("Marko", 171, 65);


    $pacijenti = array($p1, $p2, $p3);

    foreach($pacijenti as $p){
        $p->stampaj();
    }

    /*Ispisati podatke o pacijentu sa najmanjom
težinom. */
    $najmanjaTez = $pacijenti[0]->getTezina();
    foreach($pacijenti as $p){
        $tezinaSvi = $p->getTezina();
        if($tezinaSvi < $najmanjaTez){
            $najmanjaTez = $tezinaSvi;
        }
    }
    foreach($pacijenti as $p){
        if($najmanjaTez == $p->getTezina()){
            $p->stampaj();
        }
    }

    /*Ispisati podatke o pacijentu sa najvećom bmi
vrednošću. */
    $najveciBmi = $pacijenti[0]->bmi();
    foreach($pacijenti as $p){
        $bmiSvi = $p->bmi();
        if($bmiSvi > $najveciBmi){
            $najveciBmi = $bmiSvi;
        }
    }
    foreach($pacijenti as $p){
        if($najveciBmi == $p->bmi()){
            $p->stampaj();
        }
    }

    echo $p1->bmi(); 
    echo "<br>";
    echo $p2->bmi();
    echo "<br>";
    echo $p3->bmi();

    /* Ispisati sve pacijente čije ime sadrži slovo A. */
    foreach($pacijenti as $p){
        if(strpos($p->getIme(), "A") !== false){
            $p->stampaj();
        }
    }

    /* Napraviti funkciju srednjaVisina kojoj se
prosleđuje niz pacijenata a koja određuje i
vraća sredju visinu pacijenta. */
    function srednjaVisina($pacijenti){
        $suma = 0;
        foreach($pacijenti as $p){
            $suma += $p->getVisina();
        }
        $prosek = $suma / count($pacijenti);
        return $prosek;
    }
    echo srednjaVisina($pacijenti);
    
    

    

    
    

?>