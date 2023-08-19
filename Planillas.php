<?php include "shared/header.php" ?>

<!--contenido-->
<main class="demo-container">
      <form class="main col-md-4 col-lg-4" style="height: auto;;">
        <h2 class="asistencia">Planillas</h2>
        <div class="panel panel-default" style=" border-bottom: solid">
          <div class="col-md-10 m-3" style="display: flex;">
            <input type="empleado" class="form-control" placeholder="Buscar">
            <button class="btn btn-primary" id="btnEvalBusc">Buscar</button>
          </div>
        </div>
        <div class="panel panel-default justify-content-center text-center">
          <div class="col-md-10 m-3">
            <table class="table">
              <thead class="thead">
                <tr>
                  <th scope="col">Pago CCSS</th>
                  <th scope="col">Exoneraciones</th>
                  <th scope="col">Deducciones</th>
                  <th scope="col">Salario Bruto</th>
                  <th scope="col">Salario Neto</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td id="pagoCCSS"></td>
                  <td id="exoneraciones"></td>
                  <td id="deducciones"></td>
                  <td id="salarioBruto"></td>
                  <td id="salarioNeto"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="panel panel-default justify-content-center text-center">
          <div class="col-md-10 m-3">
            <input type="submit" class="btn btn-warning btn-block" value="Convertir a PDF"/>
            <input type="submit" class="btn btn-dark btn-block" value="Enviar a Email"/>
          </div>
        </div>
      </form>
    </main>

<!--Fin Contenido principal-->

<?php include "shared/footer.php" ?>