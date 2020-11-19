<?php 
    $Titulo = " Metadatos"; 
    include_once("../structure/header.php");
    include_once("../../control/metadatos.php");
 
        // recibo los datos del formulario
        $datos = data_submitted();
        // creo una variable que contenga a la clase
        $objeto = new Metadatos();
        // traigo los datos que devuelve la funcion
        $respuesta =  $objeto->metadatitos($datos);

?>


    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">ACA ESTAN LOS DATOS: </h4>


        <?php
            echo $respuesta;
        ?>

        <hr>
        <p class="mb-0">...  :D . </p>
        </div>
        <button type="button" class="btn btn-warning"><a href="principal.php"> Back </a></button>
    </div>

</div>


<?php 

include_once("../structure/footer.php");
?>