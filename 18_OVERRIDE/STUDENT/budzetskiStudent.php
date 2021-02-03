<?php

    require_once "student.php";
    
    class BudzetskiStudent extends Student{

        function skolarina($espb){
            return (300 - $this->osvojeniESPB) * 2000;
        }

        function prijavaIspita(){
            return 100;
        }
    }






?>