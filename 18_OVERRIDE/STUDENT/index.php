<?php

    require_once "student.php";
    require_once "samofinansirajuciStudent.php";
    require_once "budzetskiStudent.php";

    $s1 = new SamofinansirajuciStudent("Dejan", 100, 6.5);
    $s2 = new BudzetskiStudent("Marko", 270, 7.8);
    $s3 = new BudzetskiStudent("Milos", 280, 7);
    $s4 = new SamofinansirajuciStudent("Dragan", 130, 9);

    $s = array($s1, $s2, $s3, $s4);

    $espb = rand(35, 60);

    foreach($s as $student){
        $student->ispisi();
        echo "<p>Skolarina: " . $student->skolarina($espb) . "</p>";
        echo "<p>Prijava ispita: " . $student->prijavaIspita() . "</p>";
    }

    echo "<hr>";

    function najvecaSkolarina($s, $espb){
        $max = $s[0];
        $maxSkolarina = $max->skolarina($espb);
        foreach($s as $student){
            $skolarinaSvi = $student->skolarina($espb);
            if($skolarinaSvi > $maxSkolarina){
                $maxSkolarina = $skolarinaSvi;
                $max = $student;
            }
        }
        return $max->ispisi();
    }
    echo "<p>Najvecu skolarinu placa student: </p>";
    najvecaSkolarina($s, $espb);


    echo "<hr>";

    function prosecnaSkolarina($s, $espb){
        $suma = 0;
        foreach($s as $student){
            $suma = $student->skolarina($espb);
        }
        $prosek = $suma / count($s);
        return $prosek;
    }
    echo "<p>Prosecna skolarina svih studenata je: </p>";
    echo prosecnaSkolarina($s, $espb);








?>