<?php include "shared/header.php" ?>

<!--contenido-->

<main class="demo-container">
<form class="main col-md-6 col-lg-4 " action="Asistencia">
<h2 class="registro">Registro Empleado</h2>
<div class="panel panel-default">
<div clas*="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<input type="empleado" class="form-control" placeholder="Nombre">
</div>
</div>
<div class="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<input type="empleado" class="form-control" placeholder="Apellidos">
</div>
</div>
<div class="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<span class="help-block text-muted small-font"></span>
<input type="text" class="form-control" placeholder="email" />
</div>
</div>
<div class="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<input type="iD" class="form-control" placeholder="ID">
</div>
</div>
</div>
<div class="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<input type="date" name="fecha" class="form-control" placeholder="Ingreso" />
</div>
</div>
<div class="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<div class="combobox">
<select class="form-select" aria-label="Default select example">
<option selected>Departamento</option>
<option value="Administrativo">Administrativo</option>
<option value="Gerencia">Gerencia</option>
<option value="DTI">DTI</option>
<option value="Financiero">Financiero</option>
</label>
</select>
</div>
</div>
<div class="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<div class="combobox">
<select class="form-select" aria-label="Default select example">
<option selected>Perfil</option>
<option value="Gerencia">Gerencia</option>
<option value="RH">Recursos humanos</option>
<option value="Empleado">Empleado</option>

</label>
</select>
</div>
</div>
<div class="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<div class="combobox">
<select class="form-select" aria-label="Default select example">
<option selected>Puesto</option>
<option value="Secretaria">Secretaria</option>
<option value="Proveduria">Proveduria</option>
<option value="Gerente">Gerente</option>
<option value="Subgerente">Subgerente</option>
<option value="Soporte Tecnico">Soporte Tecnico 1</option>
<option value="Soporte Tecnico">Soporte Tecnico 2</option>
</label>
</select>
</div>

</div>
<div class="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<div class="combobox">
<select class="form-select" aria-label="Default select example">
<option selected>Salario</option>
<option value="S1">500.000</option>
<option value="S2">2.000.000</option>
<option value="S3">1.750.000</option>
<option value="S4">750.000</option>
<option value="S5">950.000</option>

<option value="S6">890.000</option>
<option value="S6">700.000</option>
</label>
</select>
</div>
</div>
<div class="col-md-10 m-3">
<div class="col-md-12 pad-adjust">
<div class="combobox">
<select class="form-select" aria-label="Horario">
<option selected>Horario</option>
<option value="1H">8am-5pm</option>
<option value="2H">9am-6pm</option>
<option value="3H">10am-7am</option>
</label>
</select>
</div>
</div>
</div>
<div class="row m-2">
<div class="col-md-6 col-sm-5 col-xs-6 pad-adjust ">
<input type="submit" class="btn btn-danger" value="CANCEL" />
</div>
<div class="col-md-6 col-sm-6 col-xs-6 pad-adjust mb-1">
<input type="submit" class="btn btn-warning btn-block" value="Registrar" />
</div>
</div>
</div>
</div>
</div>
</form>
</main>

  <!--Fin Contenido principal-->

  <?php include "shared/footer.php"?>
