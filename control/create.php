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

class Create 
{
    public function crear($datos){
        print_r($datos);
        $name=$datos['nombre'];
        $color=$datos['color'];
        $x=$datos['ancho'];
        $y=$datos['largo'];

        $imagine = new Imagine\Gd\Imagine();

        $palette = new Imagine\Image\Palette\RGB();

        $size  = new Imagine\Image\Box($x, $y);

        $colorfijo = $palette->color($color, 100);

        $image = $imagine->create($size, $colorfijo);

        $path = '/opt/lampp/htdocs/imagine/uploads';
        
        $image->save($path.'/'.$name.'.jpg');

        return true;
    }
}

?>