<?php
    class Plantilla{
        static public function ctrPlantilla(){
                include "vista/plantilla.php";
        }
        
        
    }


    class Ruta{
        static public function ctrRuta(){
            return "http://localhost:8080/C'MON/vista/recursos";
        }
    }
?>