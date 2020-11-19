<?php 
    $Titulo = " Imagine - Principal "; 
    include_once("../structure/header.php");
    include_once("../../control/listar.php");

    $archivos = new Listar();
    $lista = $archivos->obtenerArchivos();

    $nombre = $_GET["nombre"];
?>
<main>

        <div class="album py-6 bg-light">
            <div class="container">
                <div class="row">
                            <?php
                                foreach ($lista as $archivo){
                                    if (strlen($archivo) > 2) {
                                        if($archivo == $nombre){
                                    echo  "<div class='col-md-4' style='display: block';>";
                                        echo  "<div class='card mb-4 shadow-sm'>";
                                            echo  "<img img src='../../uploads/$archivo' class='bd-placeholder-img card-img-top' width='100%' height='500'>";
                                            echo      "<div class='card-body'>";
                                            echo        "<p class='card-text'><font style='vertical-align: inherit;'><font style='vertical-align: inherit;'>$archivo</font></font></p>";
                                            echo        "<div class='d-flex justify-content-between align-items-center'>";
                                            echo          "<div class='btn-group'>";
                                                    echo    "</div>";
                                                echo   "</div>";
                                            echo  "</div>";                               
                                        echo "</div>";
                                    echo  "</div>";
                                        }
                                    }
                                }      
                            ?>          
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <form action="ac_metadatos.php" method="POST" name="metadatos" id="metadatos">
        <div class="form-group row">
            <div class="col-md-3 mb-3">
                <!-- Esto es para hacer espacio y que quede centrado -->
            </div>
            <div class="col-md-6 mb-3" style="text-align: center;">
                <label for="basic-url"> METADATOS </label>
                    <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="nombre">Nombre: </span>
                            </div>
                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" value="<?php echo $nombre ?>" readonly>
                       </div>
                    
            <div class="col-md-3 mb-3">
            <!-- Esto es para hacer espacio y que quede centrado -->
            </div>
            <div class="col-md-3 mb-3">
            <!-- Esto es para hacer espacio y que quede centrado -->
            </div>
            <div class="col-md-6 mb-3">
            <button type="submit" class="btn btn-dark btn-lg btn-block"> QUIERO SABER ESOS DATOS </button>
            </div>
            <div class="col-md-3 mb-3">
            <!-- Esto es para hacer espacio y que quede centrado -->
            </div>
        </div>
    </form>
    </div>
</main>

<?php
include_once("../structure/footer.php");
?>