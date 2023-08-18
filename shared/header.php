<?php
session_start();
$archivo = explode(".", basename($_SERVER["SCRIPT_NAME"]));
$mostrar = true;
$active_link = basename($_SERVER["PHP_SELF"]);
?>
<!-- El codigo anterior lo que hace es hacer un link activo asi que dependiendo del href
     en el que se encuentre es en donde se aplicara el css y demas reglas respectivas de
     ese href -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte Patitos S.A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/<?php echo $archivo[0] ?>.css">
</head>

<body>
    <!-- Cabecera -->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary boder-bottom border-body navbar bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="Asistencia.php">
                    <img width="100" src="#" alt="Patitos S.A">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Enlaces con clase activa -->

                            <a href="Registro.php" style="margin-right: 10px; color: black;" <?php if ($active_link == "Registro.php") echo 'class="nav-link active"'; ?>>Registro</a>
                            <a href="Asistencia.php" style="margin-right: 10px; color: black;" <?php if ($active_link == "Asistencia.php") echo 'class="nav-link active"'; ?>>Asistencia</a>
                            <a href="evaluacion.php" style="margin-right: 10px; color: black;" <?php if ($active_link == "evaluacion.php") echo 'class="nav-link active"'; ?>>Evaluación</a>
                            <a href="Planillas.php" style="margin-right: 10px; color: black;" <?php if ($active_link == "Planillas.php") echo 'class="nav-link active"'; ?>>Planillas</a>
                    </ul>
                </div>
            </div>
        </nav>


    </header>
    <!-- Resto del contenido HTML/PHP -->

