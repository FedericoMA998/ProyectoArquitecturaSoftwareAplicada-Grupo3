<?php include "shared/header.php" ?>

  <!--contenido-->
  <main class="demo-container">
    <form class="main col-md-6 col-lg-4 " action="Asistencia">
      <h2 class="asistencia">Asistencia</h2>
      <div class="panel panel-default">
        <div class="col-md-10 m-3">

          <div class="col-md-12 pad-adjust">
            <input type="empleado" class="form-control" placeholder="Empleado">
          </div>
        </div>
        <div class="col-md-10 m-3">
          <input type="iD" class="form-control" placeholder="ID">
        </div>
        <div class="col-md-10 m-3">
          <span class="help-block text-muted small-font"></span>
          <input type="text" class="form-control" placeholder="email" />
        </div>
        <div class="col-md-10 m-3">
          <div class="col-md-12 pad-adjust">

            <input type="date" name="fecha" class="form-control" placeholder="date" />
          </div>
        </div>
        <div class="col-md-10 m-3">
          <div class="col-md-12 pad-adjust">
            <div class="combobox">
              <select class="form-select" aria-label="Horario">
                <option selected>Horario</option>
                <option value="1">8am-5pm</option>
                <option value="2">9am-6pm</option>
                <option value="3">10am-7am</option>
                </label>
              </select>
            </div>
          </div>
          <div class="col-md-12 pad-adjust">
            <div class="checkbox">
              <label>
                <input type="checkbox" checked class="text-muted">Entrada
              </label>
            </div>
          </div>
          <div class="col-md-12 pad-adjust">
            <div class="checkbox">
              <label>
                <input type="checkbox" checked class="text-muted">Salida
              </label>
            </div>
          </div>
          <div class="row m-4">
            <div class="col-md-6 col-sm-5 col-xs-6 pad-adjust ">
              <input type="submit" class="btn btn-danger" value="CANCEL" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust mb-1">
              <input type="submit" class="btn btn-warning btn-block" value="Enviar" />
            </div>
          </div>
        </div>
      </div>
      </div>


    </form>
  </main>
  <!--Fin Contenido principal-->

  <?php include "./shared/footer.php" ?>
