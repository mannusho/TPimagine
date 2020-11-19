<?php 

/**
 * Funcion que lista en la pagina principal todas las fotos subidas.
 */

class Listar {

    public function obtenerArchivos()
        {
            $directorio = "../../uploads/";
            $archivos = scandir($directorio, 1);
            return $archivos;
        }
}
?>