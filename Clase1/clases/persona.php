<?php
include_once "./clases/humano.php";

class Persona extends Humano
{
public $dni;

function __construct($nombre,$apellido,$dni)
{
    parent::__construct($nombre,$apellido);
    $this->dni = $dni;
} 
public function ToJson()
{
    return json_encode($this);
}
}

?>