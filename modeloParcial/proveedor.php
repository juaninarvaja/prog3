<?php 
class proveedor
{
public $id;
public $nombre;
public $email;
public $foto;

//const urlArchivoTexto = "./proveedores.txt";
public static $urlArchivoTexto = "./proveedores.txt";

 public function __construct($idR,$nom, $em, $fot)
        {
            $this->id = $idR;
            $this->nombre = $nom;
            $this->email = $em;
            $this->foto = $fot;
        }
// caso: cargarProveedor (post): Se deben guardar los siguientes datos: id, nombre, email y foto. Los datos
// se guardan en el archivo de texto proveedores.txt, tomando el id como identificador


//  public function ToJson()
// {
//     return json_encode($this);
// }

public function ToTxt()
{
$str = json_encode($this);
return $str;
}


 
}
?>