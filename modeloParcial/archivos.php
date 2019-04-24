<?php
include_once "./proveedor.php";
class Archivos
{
    public static function cargarProveedor()
    { 
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $foto = $_POST["foto"];
        $proveedor1 = new proveedor($id,$nombre,$email,$foto);
        $str = $proveedor1->ToTxt();
        archivos::EscribirLineaArch($str);
    }

    function EscribirLineaArch($line)
    {
    
    $file = fopen(proveedor::$urlArchivoTexto,"a");
    if($file != NULL && $file != false)
    {
        //$str = proveedor->ToTxt();
        fwrite($file, "$line\n");
    }
    fclose($file);
    }


    function LeerArch ($fileUrl)
    {
    $file = fopen($fileUrl, "r");
    if($file != NULL && $file != false)
    {
        return fread($file, filesize($fileUrl));
    }
    fclose($file);
    }

    function ExtraerArrayArchTxT($urlFile)
    {
    $file = fopen($urlFile, "r");
    $lista = array();
   
    // Cargo el array
    if($file != NULL && $file != false)
    {        
        for($i = 0; !feof($file); $i++)
        {
            $lista[$i]=explode("\n", fgets($file));        
        }
    }    
    
    // Cierro archivo
    fclose($file);
    return $lista;
    }



}



?>