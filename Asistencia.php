<?php
include "shared/header.php";
include "conexion.php";

if ($_POST) {
  $fila = array();
  $fila["empleado_id"] = $_POST["id"];
  $fila["fecha"] = $_POST["fecha"];
  $fila["hora_entrada"] = ($_POST["tipo_asistencia"] == "entrada") ? date("H:i:s") : null;
  $fila["hora_salida"] = ($_POST["tipo_asistencia"] == "salida") ? date("H:i:s") : null;

  // Definir valores por defecto para otras columnas
  $fila["omision_entrada"] = 0;
  $fila["omision_salida"] = 0;
  $fila["ausencia"] = 0;

  $res = insertar("Asistencia", $fila); // Insertar en la tabla de asistencia

  if ($res) {
    $msg = "Asistencia registrada exitosamente!";
    $tipo = "alert-success";
  } else {
    $msg = "[Error] No se pudo registrar la asistencia";
    $tipo = "alert-danger";
  }

  echo "<div class=' mt-5 alert $tipo' role='alert'>
          $msg
        </div>";
}
?>

<!--contenido-->
<main class="demo-container">
  <form class="main col-md-6 col-lg-4 " action="procesar_asistencia.php" method="POST">
    <h2 class="asistencia">Asistencia</h2>
    <div class="panel panel-default">
      <div class="col-md-10 m-3 justify-content-center">
        <div class="col-md-12 pad-adjust">
          <input type="text" class="form-control" placeholder="Empleado" name="empleado">
        </div>
      </div>
      <div class="col-md-10 m-3 pad-adjust">
        <input type="text" class="form-control" placeholder="ID" name="id">
      </div>
      <div class="col-md-10 m-3 pad-adjust">
        <span class="help-block text-muted small-font"></span>
        <input type="text" class="form-control" placeholder="email" name="email">
      </div>
      <div class="col-md-10 m-3 pad-adjust">
        <div class="col-md-12 pad-adjust">
          <input type="date" name="fecha" class="form-control" placeholder="date">
        </div>
      </div>
      <div class="col-md-10 m-3 pad-adjust">
        <div class="col-md-12 pad-adjust">
          <div class="combobox">
            <select class="form-select" name="horario_id" aria-label="Horario">
              <option selected>Horario</option>
              <option value="1">8am-5pm</option>
              <option value="2">9am-6pm</option>
              <option value="3">10am-7am</option>
            </select>
          </div>
        </div>
        <div class="col-md-12 pad-adjust pad-adjust">
          <div class="checkbox">
            <label>
              <input class="form-check-input" type="radio" name="tipo_asistencia" value="entrada">
              <label class="form-check-label" for="flexRadioDefault1">
                Entrada
              </label>
            </label>
          </div>
          <div class="col-md-12 pad-adjust">
            <div class="checkbox">
              <label>
                <input class="form-check-input" type="radio" name="tipo_asistencia" value="salida">
                <label class="form-check-label" for="flexRadioDefault2">
                  Salida
                </label>
              </label>
            </div>
          </div>
          <div class="row m-4">
            <div class="col-md-6 col-sm-5 col-xs-6 pad-adjust">
              <button class="btn btn-dark" type="button"><a href="./btnRegistrado.html" style="color: white; text-decoration: none;">Cancel</a></button>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust mb-1">
              <button class="btn btn-warning btn-block" type="submit">Enviar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</main>

<!--Fin Contenido principal-->

<?php include "./shared/footer.php" ?>