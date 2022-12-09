<?php
    class bd{
            public static function connection(){
                require_once("vendor/autoload.php");
                $cadena = "mongodb+srv://grupo6:fEYtKyLFZpQlm9HE@basedatos2.aycbwae.mongodb.net/?retryWrites=true&w=majority";
                $cliente = new MongoDB\Client($cadena);
                $conexion = $cliente->selectDataBase("basedatos2");
                return $conexion;
                
            }

    }
