<?php 
    $Titulo = " Subiendo un archivo"; 
    include_once("../structure/header.php");
    include_once("../../control/resize.php");
 
        // recibo los datos del formulario
        $datos = data_submitted();
        // creo una variable que contenga a la clase
        $objeto = new Resize();
        // traigo los datos que devuelve la funcion
        $respuesta =  $objeto->redimensionar($datos);

?>


    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">RESPUESTA: </h4>
        <?php
          if($respuesta == true){
            echo "<p> Su foto ya se ha creado, usted es un genio </p>";
          } else {
              echo "<p> Hubo un error, seguramente es porque no lavaste los platos </p>";
          }
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