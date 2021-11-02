<?php

    class ConexionBD{

        public function cBD(){
            
            $bd = new PDO("mysql:host=localhost;dbname=empleados", "root", "root");

            return $bd;
        }
    }