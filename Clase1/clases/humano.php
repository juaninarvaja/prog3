<?php


 class Humano
{
public $nombre;
public $apellido;

function __construct($nombre, $apellido)
{
 $this->nombre = $nombre;
 $this->apellido = $apellido;

}
public function ToJson()
{
    return json_encode($this);
}
}

?>