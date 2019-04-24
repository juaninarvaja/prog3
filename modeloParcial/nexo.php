<?php

include_once "./proveedor.php";
include_once "./archivos.php";
//include_once "./post.php"; 

$accion = $_SERVER["REQUEST_METHOD"];
var_dump($accion); 
//$nuevaImg = AgregarMarcaAgua("./marcelo.45654.JPEG");
switch($accion)
{
  case "GET": $list = archivos::ExtraerArrayArchTxT(proveedor::$urlArchivoTexto);
                var_dump($list);
                var_dump($_GET["nombre"]);
              break;
  case "POST": archivos::cargarProveedor();
              break;
  case "PUT":
              break;
  case "DELETE":
              break;
  default: 
            break;
}

?>