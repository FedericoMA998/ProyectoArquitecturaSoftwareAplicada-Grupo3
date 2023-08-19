<?php
include "shared/header.php";
include "conexion.php";
if ($_POST) {
  $fila = array();
  $fila["cedula"] = $_POST["cedula"];
  $fila["nombre"] = $_POST["nombre"];
  $fila["apellido"] = $_POST["apellido"];
  $fila["fecha_ingreso"] = $_POST["fecha_ingreso"];
  $fila["departamento_id"] = $_POST["departamento_id"];
  $fila["perfil_id"] = $_POST["perfil_id"];
  $fila["puestp_id"] = $_POST["puesto_id"];
  $fila["horario_id"] = $_POST["horario_id"];
  $fila["salario_id"] = $_POST["salario_id"];
  $fila["email"] = $_POST["email"];
  $res = insertar("empleados", $fila);
  if ($res) {
    $msg = "Usuario creado exitosamente!";
    $tipo = "alert-success";
  } else {
    $msg = "[Error] No se pudo crear el usuario";
    $tipo = "alert-danger";
  }
  echo "<div class=' mt-5 alert $tipo' role='alert'>
                  $msg
              </div>";
}
?>


<!--contenido-->

<main class="demo-container">
  <form class="main col-md-6 col-lg-4 " action="" method="POST" enctype="multipart/form-data">
    <h2 class="registro">Registro Empleado</h2>
    <div class="panel panel-default">
      <div class="panel panel-default justify-content-center text-center m-3">
        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
      </div>
      <div class="panel panel-default justify-content-center text-center m-3">
        <input type="text" class="form-control" placeholder="Apellidos" name="apellido">
      </div>
      <div class="panel panel-default justify-content-center text-center m-3">
        <span class="help-block text-muted small-font"></span>
        <input type="email" class="form-control" placeholder="email" name="email" />
      </div>
      <div class="panel panel-default justify-content-center text-center m-3">
        <input type="text" class="form-control" placeholder="cedula" name="cedula">
      </div>
      <div class="panel panel-default justify-content-center text-center m-3">
        <input type="date" class="form-control" placeholder="Ingreso" name="fecha_ingreso" />
      </div>
      <div class="panel panel-default justify-content-center text-center m-3">
        <div class="combobox">
          <select class="form-select" name="departamento_id" aria-label="Default select example">
            <option value="" selected>Departamento</option>
            <option value="2">Administrativo</option>
            <option value="3">Gerencia</option>
            <option value="4">DTI</option>
            <option value="5">Financiero</option>
          </select>
        </div>
      </div>
      <div class="panel panel-default justify-content-center text-center m-3">
        <div class="combobox">
          <select class="form-select" name="perfil_id" aria-label="Default select example">
            <option selected>Perfil</option>
            <option value="1">Gerencia</option>
            <option value="2">Recursos humanos</option>
            <option value="3">Empleado</option>
            </label>
          </select>
        </div>
      </div>
      <div class="panel panel-default justify-content-center m-3">
        <div class="combobox">
          <select class="form-select" name="puesto_id" aria-label="Default select example">
            <option selected>Puesto</option>
            <option value="1">Secretaria</option>
            <option value="2">Proveduria</option>
            <option value="3">Gerente</option>
            <option value="4">Subgerente</option>
            <option value="5">Soporte Tecnico 1</option>
            <option value="6">Soporte Tecnico 2</option>
            </label>
          </select>
        </div>
      </div>
      <div class="panel panel-default justify-content-center m-3">
        <div class="combobox">
          <select class="form-select" name="salario_id" aria-label="Default select example">
            <option selected>Salario</option>
            <option value="1">500.000</option>
            <option value="2">2.000.000</option>
            <option value="3">1.750.000</option>
            <option value="4">750.000</option>
            <option value="5">950.000</option>
            <option value="6">890.000</option>
            <option value="7">700.000</option>
            </label>
          </select>
        </div>
      </div>
      <div class="panel panel-default justify-content-center text-center m-3">
        <div class="combobox">
          <select class="form-select" name="horario_id" aria-label="Horario">
            <option selected>Horario</option>
            <option value="1">8am-5pm</option>
            <option value="2">9am-6pm</option>
            <option value="3">10am-7pm</option>
            </label>
          </select>
        </div>
      </div>
      <div class="row m-4">
        <div class="col-md-6 col-sm-5 col-xs-6 pad-adjust">
          <button class="btn btn-dark"><a href="./btnRegistrado.php"
              style="color: white; text-decoration: none;">Cancel</a></button>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust mb-1">
          <button class="btn btn-warning btn-block"><a href="./btnRegistrado.php"
              style="color: white; text-decoration: none;">Registrar</a></button>
        </div>
      </div>
    </div>
  </form>
</main>

<!--Fin Contenido principal-->

<?php include "shared/footer.php" ?>