<?php
require ("../../vendor/autoload.php");

set_include_path('/path/to/lib/Imagine' . PATH_SEPARATOR . get_include_path());
function imagineLoader($class) {
    $path = $class;
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path) . '.php';
    if (file_exists($path)) {
        include $path;
    }
}
spl_autoload_register('\imagineLoader');


/**
* Clases de la libreria Imagine (https://imagine.readthedocs.io/en/stable/usage/introduction.html)
* Las clases en este archivo son las siguientes:
*
*   *Cargar una imagen nueva.
*
**/

class Crop 
{    
    public function recortar($datos){
        $x = $datos['puntoa'];
        $y = $datos['puntob'];
        $width = $datos['puntox'];
        $height = $datos['puntoy'];
        $name = $datos['nombre'];
        $copy = $datos['copy'];

        $imagine = new Imagine\Gd\Imagine();
        
        $path = '/opt/lampp/htdocs/imagine/uploads';

        $image = $imagine->open($path.'/'.$name);

        $point = new \Imagine\Image\Point($x,$y);
        
        $size = new \Imagine\Image\Box($width,$height);


        $image->crop($point, $size);

        if($copy == 1){
            $l = strlen($name);
            $name = substr($name,0,$l-4);
            $image->save($path.'/'.$name.'_copy.jpg');
        } else {
            $image->save($path.'/'.$name);
        }

        return true;
    }
}