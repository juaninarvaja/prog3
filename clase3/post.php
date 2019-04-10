<?php 

// function GuardarArchivo()
// {
//     //var_dump($_FILES);
//     $origen = $_FILES["imagen"]["tmp_name"];
//     $extension = explode("/", $_FILES["imagen"]["type"]); //divido el array a partr de las "/"
//     //var_dump($extension);
    
//     $destino = "./miImagen.$extension[1]";
//     return move_uploaded_file($origen,$destino);
// }

function GuardarArchivo()
{
    $apellido = $_POST["apellido"];
    $legajo = $_POST["legajo"];
    $origen = $_FILES["imagen"]["tmp_name"]; ///tmp name es el nombre dond se guarda temporalmente el archivo
    $extension = explode("/", $_FILES["imagen"]["type"]); //divido el array a partr de las "/"
    //var_dump($extension);
    
    $destino = "./$apellido.$legajo.$extension[1]";
    


    if(file_exists($destino))
    {
        $fecha = date("Y-m-d.H-i-s");
        $destinoBackUp = "./backup/$apellido.$legajo.$fecha.$extension[1]";
        copy($destino,$destinoBackUp);
    }


        //solo en post y con url temporales
        return move_uploaded_file($origen,$destino);
}


function AgregarMarcaAgua($urlFotoActual)
{
    $estampa = imagecreatefrompng('marcaAgua.png');
    $im = imagecreatefromjpeg("$urlFotoActual");
    
    // Establecer los márgenes para la estampa y obtener el alto/ancho de la imagen de la estampa
    $margen_dcho = 10;
    $margen_inf = 10;
    $sx = imagesx($estampa);
    $sy = imagesy($estampa);

    imagecopy($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), imagesy($estampa));

    // Imprimir y liberar memoria
    //header('Content-type: image/png');
    //imagepng($im);
    //imagedestroy($im);
  
    
}
// function ArchivoRepetido($url)
// {
// return file_exists($url);
// }



?>