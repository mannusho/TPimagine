<html>
    <head>
        <title><?PHP $Titulo?></title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!-- CSS Bootstrap -->
        <link rel="stylesheet" type="text/css" href="../CSS/Boostrap v.4.5.2/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/c3fbd0a6e3.js" crossorigin="anonymous"></script>
        <!-- SOLAR -->
        <link rel="stylesheet" type="text/css" href="../CSS/solar/_bootswatch.scss">
        <link rel="stylesheet" type="text/css" href="../CSS/solar/_variables.scss">
        <!-- Personal CSS -->
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">        
    </head>
    <body>
        <header>
            <div class="bg-dark collapse" id="navbarHeader">
                <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HOLA!</font></font></h4>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contacto</font></font></h4>
                    <ul class="list-unstyled">
                        <li><a href="https://github.com/mannusho" class="text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Github </font></font></a></li>
                        <li><a href="https://github.com/mannusho/TPimagine" class="text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Este proyecto </font></font></a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                    <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="../menu/principal.php">IMAGINE</a></font></font></strong>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Navegación de palanca">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
            </div>
        </header>

        <?php  
            include_once("../../configuracion.php");
        ?>