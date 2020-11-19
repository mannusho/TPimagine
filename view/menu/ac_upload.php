<?php 
    $Titulo = " Subiendo un archivo"; 
    include_once("../structure/header.php");
    include_once("../../control/upload.php");

?>
<div>
    <?php 

        $datos = data_submitted();
        $obj = new Upload();
        print_r($datos);

        $respuesta = $obj->uploadImage($datos);

    ?>


    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">RESPUESTA: </h4>
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