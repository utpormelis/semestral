<?php
require_once("utils/bd.php");
require_once("utils/seg.php");
class verpago
{
    private $id;
    private $payment_date; 
    private  $first_name;
    private $last_name;
    private $address_country_code;
    private $item_name;
    private $quantity;
    private $payment_fee;
    private $payment_gross;
    private $item_number;
    private $payer_email;
    private $receiver_email;
    private $mc_currency;
    private $residence_country;
    
    public function __construct()
    {
    }

    public function listar_pagos()
    {
        $se=$_SESSION["cuenta_paypal"];
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal;
        $resultado = $coleccion->find(["payer_email"=>$se]);
        return $resultado;
    }

    public function mostrar_admi(){
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal;
        $resultado = $coleccion->find();
        return $resultado;
    }

}