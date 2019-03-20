<?php
include_once "./clases/persona.php";

 class Alumno extends Persona 
{
public $legajo;

function __construct($nombre,$apellido,$dni,$leg)
{
    parent::__construct($nombre,$apellido,$dni);
    $this->legajo = $leg;

}
public function ToJson()
{
    return json_encode($this);
}
}
?>
