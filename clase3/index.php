<?php
include_once "./post.php" ;


//TomarImagen();

$accion = $_SERVER["REQUEST_METHOD"];
var_dump($accion); 
//$nuevaImg = AgregarMarcaAgua("./marcelo.45654.JPEG");

switch($accion)
{
  case "GET":
              break;
  case "POST": GuardarArchivo();
              break;
  case "PUT":
              break;
  case "DELETE":
              break;
  default: 
            break;


}



?>