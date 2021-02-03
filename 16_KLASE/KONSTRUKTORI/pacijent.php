<?php

class Pacijent{
    private $ime;
    private $visina;
    private $tezina;

    //KONSTRUKTOR - AUTOMATSKI POSTAVLJA PARAMERE/POLJA
    public function __construct($i, $v, $t) {
        $this->setIme($i); 
        $this->setVisina($v);
        $this->setTezina($t);
    }

    // SETERI - SET METODE - POSTAVLJAJU VREDNOST POLJA
    public function setIme($i){
        $this->ime = $i;
    }
    public function setVisina($v){
        if($v > 0 && $v < 250) {
            $this->visina = $v;
        }
        else {
            echo "Visina mora biti izmedju 0cm i 250cm";
            // $this->visina = 100; - Mozemo da vidimo i ovakve primere da ako se stavi izvan granica on setuje neku defaultnu vrednost
        }
        
    }
    public function setTezina($t){
        if($t > 0 && $t < 550) {
            $this->tezina = $t;
        }
        else {
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

        echo "<p>Ime: $this->ime</p>";
        echo "<p>Visina: $this->visina cm</p>";
        echo "<p>Tezina: $this->tezina kg</p>";
    }
    public function bmi(){
        return $this->tezina/ ($this->visina/100)**2;
    }
    public function kritican(){
        //$bmiOsobe = $this->bmi(); - Moze da se stavi i u promenljivu, a kasnije umesto $this pisemo promenljivu imeOsobe

        if($this->bmi() < 15 || $this->bmi() > 40) {
            return true;
        }
        else {
            return false;
        }
    }
}

$pac3 = new Pacijent("Milica", 183, 75); //Prilikom kreiranja novog objekta AUTOMATSKI se poziva konstruktor, i nema potrebe da pozivamo posebno $pac3->setIme.... nego imamo sve odjednom
$pac3->stampaj();
$pac3->setTezina(76); //kada hocemo da promenimo jedan podatak, npr. tezinu, a da ne kreiramo novi objekat
$pac3->stampaj();

$pac4 = new Pacijent("Milan", 190, 90);
$pac5 = new Pacijent("Marko", 121, 30);

echo "<hr>";

//NIZ OBJEKATA
$pacijentiNiz = array($pac3, $pac4, $pac5);

//Ispis svih pacijenata iz niza 
//1. nacin
foreach($pacijentiNiz as $obj){
    $obj->stampaj();
}

//2. nacin
for($i = 0; $i < count($pacijentiNiz); $i++) {
    $pacijentiNiz[$i]->stampaj();
}

echo "<hr>";

//Ispis svih imena pacijenata iz niza
foreach($pacijentiNiz as $obj) {
    echo "<p>{$obj->getIme()}</p>";
}

//Ispis svih pacijenata iz niza koji su laksi od 50kg
foreach($pacijentiNiz as $obj) {
    if($obj->getTezina() < 50) {
        $obj->stampaj();
    }
}

echo "<hr>";

//Odrediti prosecnu visinu svih pacijenata
$sumaVisina = 0;
foreach($pacijentiNiz as $obj) {
    $sumaVisina += $obj->getVisina();
}
$prosecanVisina = $sumaVisina / count($pacijentiNiz);
echo "<p>Prosecna visina pacijenata je $prosecanVisina</p>";

echo "<hr>";

$pacijentiNiz[0]->stampaj();


/*
$pac1 = new Pacijent();
$pac1->ime = "Petar";
$pac1->visina = 190;
$pac1->tezina = 90;
$pac1->stampaj();
echo "BMI pacijenta je: " . $pac1->bmi();
if($pac1->kritican()) {
    echo "<p>Osoba ima kritican BMI</p>";
}
else {
    echo "<p>Osoba nema kritican BMI</p>";
}
*/

// $pac2 = new Pacijent();
// // $pac2->ime = "Ana"; - Javlja gresku da je $pac2->ime privatno i moze mu se pristupiti samo unutar klase
// $pac2->stampaj(); // Ne javlja gresku jer je metoda javna i moze mu se pristupiti u klasi i van nje

// $pac2->setIme("Ana");
// $pac2->setVisina(168);
// $pac2->setTezina(55);
// $pac2->stampaj();
// echo "Ime pac2 pacijenta je: " . $pac2->getIme();


?>