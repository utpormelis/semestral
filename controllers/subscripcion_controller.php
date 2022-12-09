<?php
require_once("utils/seg.php");
require_once("models/subscripcion.php");
class subscripcion_controller
{
    public static function registrar()
    {
        if (!isset($_POST["token"]) ||  !seg::validaSession($_POST["token"])) {
            echo "Acceso restringido";
            exit();
        }
        $obj = new subscripcion();
        $correo = filter_var($_POST["txtEmail"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $obj->setCorreo($correo);
        $resultado = $obj->insertar();

        $obj = new usuario();
        $obj->setId($_SESSION["id_usuario"]);
        $resultados = $obj->ver_mis_datos();

        if ($resultado->getId() <> "") {
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/subscripcion/suscrito.php");
            require_once("views/template/footer.php");
        }
    }
}
