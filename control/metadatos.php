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

class Metadatos 
{    
    public function metadatitos($datos){
        $name = $datos['nombre'];

        $imagine = new Imagine\Gd\Imagine();
        
        $path = '/opt/lampp/htdocs/imagine/uploads';

        $image = $imagine->open($path.'/'.$name);

        $metadatos = new Imagine\Image\Metadata\ExifMetadataReader;
    

        $meta = $image->metadata();

        $metas = " <p> ruta de archivo: ".$meta['filepath']." </p><br>
                    <p> nombre del archivo: ".$meta['uri']." </p><br>
                    <p> Velocidad de obturacion: ".$meta['exif.ExposureTime']."</p><br>
                    <p> Diametro de la apertura: ".$meta['exif.FNumber']." </p><br>
                    <p> Clasificación de velocidad ISO: ".$meta['exif.ExposureTime']."</p><br>
                    <p> Fecha y hora original: ".$meta['exif.DateTimeOriginal']." </p><br>
                    <p> Velocidad de disparo: ".$meta['exif.ShutterSpeedValue']."</p><br>
                    <p> Valor de apertura: ".$meta['exif.ApertureValue']."</p><br>
                    <p> Brillo: ".$meta['exif.BrightnessValue']."</p><br>
                    <p> Distancia focal: ".$meta['exif.FocalLength']."</p><br>
                    <p> Marca: ".$meta['ifd0.Make']."</p><br>
                    <p> Modelo: ".$meta['ifd0.Model']." </p>";
 


        return $metas;
    }
}