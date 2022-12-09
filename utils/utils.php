<?php
require_once("utils/seg.php");
class utils
{
    public static function enviarcorreo($correo, $id)
    {
        $headers = "From: grupo@ddinnova.info\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        $link = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("activar") . "&s=" . $id;
        $mensaje = '<h1>Activar Cuenta</h1>Da clic en el siguiente link para activar tu cuenta: <a href="' . $link . '">Activar tu cuenta</a>';
        echo mail($correo, "Activa tu cuenta", $mensaje, $headers);
    }

    public static function subir_archivo($archivo_temporal, $archivo, $destino)
    {
        $arreglo = explode(".", $archivo);
        $extension = $arreglo[count($arreglo) - 1];
        $archivo = md5(time() . $archivo) . "." . $extension;
        $destino = $destino . "/" . $archivo;
        if (move_uploaded_file($archivo_temporal, $destino))
            return $destino;
        else
            return null;
    }

    public static function generarqr($url)
    {
        require_once("libs/codigo_qr/qrlib.php");

        //Declaramos una carpeta temporal para guardar la imágenes generadas
        $dir = 'libs/temp/';
        
        //Si no existe la carpeta la creamos
        if (!file_exists($dir))
            mkdir($dir);
        
            //Declaramos la ruta y nombre del archivo a generar
        $filename = $dir.md5($url).'.png';
        
            //Parámetros de Configuración
        
        $tamaño = 10; //Tamaño de Pixel
        $level = 'L'; //Precisión Baja
        $framSize = 3; //Tamaño en blanco
        $contenido = $url; //Texto
        
            //Enviamos los parámetros a la Función para generar código QR 
        QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
        
            //Mostramos la imagen generada
        return $dir.basename($filename);  
    }
}
