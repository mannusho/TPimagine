<?php 
    $Titulo = " Imagine - Principal "; 
    include_once("../structure/header.php");
    include_once("../../control/listar.php");

    $archivos = new Listar();
    $lista = $archivos->obtenerArchivos();

?>
<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">I M A G I N E </font></font></h1>
            <p class="lead text-muted"><font style="background-color: transparent;"><font style="vertical-align: inherit;">Imagine es una biblioteca OOP para manipulación de imágenes construida en PHP 5.3 que utiliza las últimas mejores prácticas y un diseño cuidadoso que debería permitir código desacoplado y testeable por unidades.</font></font></p>
            <p>
                <a href="https://github.com/avalanche123/Imagine" class="btn btn-primary my-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> GITHUB </font></font></a>
                <a href="https://imagine.readthedocs.io/en/stable/index.html" class="btn btn-primary my-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> IMAGINE </font></font></a>
            </p>
        </div>
    </section>

    <form action="ac_upload.php" method="POST" enctype="multipart/form-data" name="upload" id="upload">
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <!-- Esto es para hacer espacio y que quede centrado -->
                </div>
                <div class="col-md-6 mb-3" style="text-align: center;">
                    <label for="imagen" style="font-style: italic;">Suba su imagen:</label>
                    <input type="file" class="form-control-file" id="imagen" name="imagen" required>
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

        <form action="ac_create.php" method="POST" name="create" id="create">
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <!-- Esto es para hacer espacio y que quede centrado -->
                </div>
                <div class="col-md-6 mb-3" style="text-align: center;">
                    <label for="basic-url">Crea una imagen basica</label>
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="nombre">Nombre: </span>
                                </div>
                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre">
                        </div>
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="color">Color: </span>
                                </div>
                            <input type="color" class="form-control" id="color" name="color" aria-describedby="color">
                            </div>
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    
                                    <span class="input-group-text" id="ancho">Ancho (px): </span>
                                </div>
                            <input type="text" class="form-control" id="ancho" name="ancho" aria-describedby="ancho">
                        </div>
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="largo">Largo (px): </span>
                                </div>
                            <input type="text" class="form-control" id="largo" name="largo" aria-describedby="largo">
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



        <div class="album py-3 bg-light">
            <div class="container">
                <div class="row">
                            <?php
                                foreach ($lista as $archivo){
                                    if (strlen($archivo) > 2) {
                                    echo  "<div class='col-md-4'>";
                                        echo  "<div class='card mb-4 shadow-sm'>";
                                            echo  "<img img src='../../uploads/$archivo' class='bd-placeholder-img card-img-top' width='100%' height='300'>";
                                            echo      "<div class='card-body'>";
                                            echo        "<p class='card-text'><font style='vertical-align: inherit;'><font style='vertical-align: inherit;'>$archivo</font></font></p>";
                                            echo        "<div class='d-flex justify-content-between align-items-center'>";
                                            echo          "<div class='btn-group'>";
                                                        echo    "<a href='crop.php?nombre=$archivo' class='card-link'> Recortar </a>";
                                                        echo    "<a href='resize.php?nombre=$archivo' class='card-link'> Redimensionar </a>";
                                                        echo    "<a href='metadatos.php?nombre=$archivo' class='card-link'> Metadatos </a>";

                                                    echo    "</div>";
                                                echo   "</div>";
                                            echo  "</div>";                               
                                        echo "</div>";
                                    echo  "</div>";
                                    }
                                }        
                        ?>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    include_once("../structure/footer.php");
?>