<?php
$filename = "archivo.txt";
$arch = fopen($filename,"w");
if($arch != false)
{
   $write = fwrite($arch,"Pedro'\n'");
   $write = fwrite($arch,"Juan'\n");
   $write = fwrite($arch,"Maria");

  

   fclose($arch);
   $arch = fopen($filename,"a+");

    if($write)
    {
        $arr = array();
        while(!feof($arch))
            {
           
            //$i = 0;
            //arr[i] = $nombre;
            $nombre= fgets($arch);
            array_push($arr,$nombre);
            }
            
            foreach($arr as $name)
           {
               echo $name;
           }
            echo "modifico <br>";

           array_push($arr,"carlitos");
           foreach($arr as $name)
           {
               echo $name;
           }

    }
    
}
fclose($arch);

$arch = fopen($filename,"w");
if($arch != false)
{
    foreach($arr as $name)
           {
               fwrite($arch,$name);
               fwrite($arch,"<br>");
           }
echo "entro";
var_dump($arr);

}





$arch = fopen($filename,"w");
echo " <br> <br> --------- lectura desde el archivo  -------------- <br> <br>";
ini_set('memory_limit', '-1');
while(!feof($arch))
            {
           
            //$i = 0;
            //arr[i] = $nombre;
            $nombre= fgets($arch);
            
            array_push($arr,$nombre);
          
            }
            
            foreach($arr as $name)
           {
               echo $name;
           }



?>