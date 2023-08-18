<?php include "shared/header.php" ?>

    <!--contenido-->
    <main>
      <section class="container">
        <div class="justify-content-center text-center mb-3">
          <label for="nombreEmpleado" class="input-group-text">Nombre</label>
          <input type="text" class="form-control" id="NomUserPlanilla">
          <button class="btn btn-primary" id="btnCrearPlanilla">Crear Planilla</button>
        </div>
      </section>
      <section class="container">
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
      </section>
      <section class="justify-content-center text-center">
        <div class="container">
          <button class="btn btn-primary" id="generarPDF">Generar PDF</button>
          <button class="btn btn-primary" id="enciarEmail">Enviar Email</button>
        </div>
      </section>
      
    </main>

  <!--Fin Contenido principal-->

  <?php include "shared/footer.php"?>

