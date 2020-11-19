<?php 
    $Titulo = " Imagine - Principal "; 
    include_once("../structure/header.php");
    include_once("../../control/listar.php");

    $archivos = new Listar();
    $lista = $archivos->obtenerArchivos();

    $nombre = $_GET["nombre"];
?>
<main>
    <div class="album py-5 bg-light" style="margin-right: auto;margin-left:auto;">
            
            <?php
                      echo "<div class='container'>";
                        echo "<div class='row'>";
                            echo "<div class='col-md-12'>";

                foreach ($lista as $archivo){
                    if (strlen($archivo) > 2) {
                        if($archivo == $nombre){
                  
                        echo "<div class='card' style='width: 30rem;'>";
                            echo  "<img src='../../uploads/$nombre' class='card-img-top' alt='$nombre'>";
                                echo    "<div class='card-body'>";
                                    echo    "<p style='text-align: center;'> Nombre: ".$nombre." :D";
                                echo   "</div>";
                        echo   "</div>";
                        }
                    }
                }
                        echo   "</div>";
                    echo   "</div>";
                echo   "</div>";
                //echo   "</div>";
            ?>
    </div>

    <form action="ac_resize.php" method="POST" name="crop" id="crop">
        <div class="form-group row">
            <div class="col-md-3 mb-3">
                <!-- Esto es para hacer espacio y que quede centrado -->
            </div>
            <div class="col-md-6 mb-3" style="text-align: center;">
                <label for="basic-url"> Cortar la imagen </label>
                    <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="nombre">Nombre: </span>
                            </div>
                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" value="<?php echo $nombre ?>" readonly>
                       </div>
                         <span><i>El sistema de coordenadas comienza en x, y (0,0), que es la esquina superior izquierda y se extiende hacia la derecha y hacia abajo en consecuencia </i></span>
                    <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                
                                <span class="input-group-text" id="puntox">Ancho (x): </span>
                            </div>
                        <input type="text" class="form-control" id="puntox" name="puntox" aria-describedby="puntox">
                    </div>
                    <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="puntoy">Largo (y): </span>
                            </div>
                        <input type="text" class="form-control" id="puntoy" name="puntoy" aria-describedby="puntoy">
                    </div>
                    <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="copy">Indique si quiere guardar una copia y mantener el original: </span>
                            </div>
                        <select id="copy" name="copy">
                            <option value="1"> SI </option>
                            <option value="0"> NO </option>
                        </select>
                    </div>
            </div>
            <div class="col-md-3 mb-3">
            <!-- Esto es para hacer espacio y que quede centrado -->
            </div>
            <div class="col-md-3 mb-3">
            <!-- Esto es para hacer espacio y que quede centrado -->
            </div>
            <div class="col-md-6 mb-3">
            <button type="submit" class="btn btn-dark"> Enviar </button>
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