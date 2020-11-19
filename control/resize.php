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

class Resize
{

    public function redimensionar($datos){
        $width = $datos['puntox'];
        $height = $datos['puntoy'];
        $name = $datos['nombre'];
        $copy = $datos['copy'];

        $imagine = new Imagine\Gd\Imagine();
        //$imagine = new Imagine\Imagick\Imagine();
    
        $path = '/opt/lampp/htdocs/imagine/uploads';

        $imagen = $imagine->open($path.'/'.$name);
        
        $size = new \Imagine\Image\Box($width,$height);

        //use Imagine\Image\Box;
        //use Imagine\Image\Point;

        $imagen->resize($size);


        if($copy == 1){
            $l = strlen($name);
            $name = substr($name,0,$l-4);
            $imagen->save($path.'/'.$name.'_copy.jpg');
        } else {
            $imagen->save($path.'/'.$name);
        }

        return true;
    }

}