<?php
require_once("utils/seg.php");
require_once("models/pagos_paypal.php");
require_once("models/verpago.php");
require_once("models/usuario.php");
class pagos_paypal_controller
{
    public static function registar_notificacion()
    {
        $pagos = new pagos_paypal();
        $pagos->registrar($_POST);
    }

    public static function retorno()
    {
        header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Gracias por su pago, su cuenta se ha actualizado satisfactoriamente!!<br>Debes inicar sesion nuevamente para que los cambos sean aplicados");
    }

    public static function cancelar()
    {
        header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Has cancelado tu compra!!");
    }

    public static function ver_pagos(){

        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }
        $obj=new verpago();
        $resultado=$obj->listar_pagos();

        $obj = new usuario();
        $obj->setId($_SESSION["id_usuario"]);
        $resultados = $obj->ver_mis_datos();

        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("models/verpago.php");
        require_once("views/usuario/ver_pagos.php");
        require_once("views/template/footer.php");
    }

}
