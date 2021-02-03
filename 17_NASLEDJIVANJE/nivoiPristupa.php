<?php

    class Vozilo{
        private $privatnoPolje = "Priv";
        protected $protectedPolje = "Prot";
        public $javnoPolje = "Publ";
   

        public function setPrivatnoPolje($priv){
            $this->privatnoPolje = $priv;
        }

        public function setProtectedPolje($prot){
            $this->protectedPolje = $prot;
        }

        public function setJavnoPolje($publ){
            $this->javnoPolje = $publ;
        }

        public function getPrivatnoPolje(){
            return $this->privatnoPolje;
        }

        public function getProtectedPolje(){
            return $this->protectedPolje;
        }

        public function getJavnoPolje(){
            return $this->javnoPolje;
        }

    }
    $v = new Vozilo();
    //$v->$privatnoPolje = "Privatno polje"; //Greska, ne mogu izvan klase da pristupim privatnom polju

    //$v->protectedPolje = "Protected polje"; //Ne mogu izvan klase da pristupim protected polju

    $v->javnoPolje = "Javno polje";

    class Automobil extends Vozilo {

        public function stampaj(){
            //echo $this->privatnoPolje;// Ne moze da procita privatno polje
            echo $this->protectedPolje; //Protected polju mozemo pristupiti u klasi naslednici
            echo $this->javnoPolje;//Public polju mozemo da pristupimo u klasi naslednici

    }
}

$a = new Automobil();
$a->stampaj();

?>