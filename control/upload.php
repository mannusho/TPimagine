<?php
/**
* Clases de la libreria Imagine (https://imagine.readthedocs.io/en/stable/usage/introduction.html)
* Las clases en este archivo son las siguientes:
*
*   *Cargar una imagen nueva.
*
**/

class Upload 
{ 
    public function uploadImage($datos){
        $dir = '../../uploads/';

            if ($_FILES['imagen']["error"] <= 0) {
                $error = 0;
               
                // Verificando que los archivos sean imagenes
                if($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png" || $_FILES['imagen']['type'] == "image/gif" ){
                    $filename = $_FILES['imagen']['tmp_name'];
                    $file = fopen($filename,"r");
                    $content = fread($file, filesize($filename));
                    fclose($file);
                } else {
                    $error = 1;
                }

                chmod($dir.$_FILES['imagen']['name'], 0777);

                //Si no hay errores entonces subimos el archivo al servidor.
                if($error == 0){
                    // Intentamos copiar el archivo al servidor.
                    if (!copy($_FILES['imagen']['tmp_name'], $dir.$_FILES['imagen']['name'])) {
                        $texto = "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
                        }
                    else{
                        $texto = "El archivo ".$_FILES["imagen"]["name"]." se ha copiado con Éxito <br />";
                        }
                } else {
                    $texto = "ERROR: no se pudo cargar, el archivo a subir debe ser una imagen. ";
                }

                    return $texto;
            }
    }
}


?>