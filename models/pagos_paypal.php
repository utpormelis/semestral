<?php
require_once("utils/bd.php");
require_once("models/usuario.php");

class pagos_paypal
{
    public function registrar($_peticion)
    {
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal;
        try {
            $resultados = $coleccion->insertOne($_peticion);
            $coleccion = $conexion->usuario;
            try {
                $resultados = $coleccion->updateOne(
                    ["cuenta_paypal" => $_peticion["payer_email"]],
                    ['$set' => [
                        "monto_pago" => $_peticion["payment_gross"]
                    ]]
                );
                $_SESSION["monto_pago"] = $_peticion["payment_gross"];
                return $resultados->getModifiedCount();
            } catch (Exception $e) {
                return 0;
            }
        } catch (Exception $e) {
        }
    }

   









}
