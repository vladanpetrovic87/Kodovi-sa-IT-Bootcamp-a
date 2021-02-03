<?php

    class Brojevi{
        private $broj1;
        private $broj2;


        public function __construct($broj1, $broj2){
            $this->setBroj1($broj1);
            $this->setBroj2($broj2);
        }


        public function setBroj1($broj1){
            $this->broj1 = $broj1;
        }
        public function setBroj2($broj2){
            $this->broj2 = $broj2;
        }

        public function getBroj1(){
            return $this->broj1;
        }
        public function getBroj2(){
            return $this->broj2;
        }
    }

        function operacije($broj1, $broj2, $simbol){
            if($simbol == "+"){
                echo $broj1 + $broj2;
            }
            elseif($simbol == "-"){
                echo $broj1 - $broj2;
            }
            elseif($simbol == "*"){
                echo $broj1 * $broj2;
            }
            elseif($simbol == "/"){
                echo $broj1 / $broj2;
            }
        }
        operacije(5,5,"+");



?>