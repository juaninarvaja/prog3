<?php

//echo "hola php";
$nombre =  "mario";
$legajo = 111;
//echo $nombre;
//echo "<BL>";
//echo $legajo;
//echo "<BL>";
//var_dump($legajo); ///tipo valot y extension, permite imprimir array y objetos al contrario del echo
//echo "<BL>";
//var_dump($nombre);

// $heroes = array(1,2,3,4); //array de numeros indexado
// $heroes[22] = 22; me deja
//$heroes[] = 100; asigna al siguiente del ultimo del array


//array asociativo
$heroes = array("nombre" =>"batman", "superpoder" => "batimovil");
// $heroes["nombre"] = "batmanmmmmmmmmm"; // pisa lo anterior
// echo "<BL>";
//REcorrer el array
//foreach
/*
foreach($heroes as $item)
{
    echo $item; // muestra el valor ej "batimovil"
}
foreach($heroes as $clave=>$valor)
{
    echo "$clave - $valor"; // muestra la clave y el valor 
}
//var_dump($heroes);
*/
//Variables SuperGlobales

//var_dump($_GET); //le paso datos directamente desde postman
//var_dump($_POST); // se le mandan en el boidy y debe estar escrito el index.php en la url del postman

//$lista =array(1,2,3,6,5,6,7,8,9,10);
/*
shuffle($lista); //desordena
asort($lista); //ordena por orden ascendente
var_dump($lista);
arsort($lista);//ordena en orden descendente
var_dump($lista);

*/ 
/*
if($_GET["orden"] == 1) //si el roden qeu le paso es 1 ascendente
{
    asort($lista); 
}
else arsort($lista); //sino descendente 
//s
var_dump($lista);
*/
/*
$persona = array("name" => "pepe");
var_dump($persona);
echo $persona['name'];
$personaO = (object)$persona;
var_dump($personaO); //ahora es un objeto
$personaO->name = 'mario';
$personaStd = new StdClass(); //standar class
$personaStd->name = 'mario';
var_dump($personaStd);
*/ 
include './clases/alumno.php'; //con ./ indico donde estoy con ../ subo un nivel en la jerarquia de directorios

$nombre  = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$legajo = $_POST["legajo"];

$alumno1 = new Alumno($nombre,$apellido,$dni,$legajo);
echo $alumno1->ToJson();


?>
