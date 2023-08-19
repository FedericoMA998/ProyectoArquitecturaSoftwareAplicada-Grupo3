<?php include "shared/header.php" ?>

<!--contenido-->
<main class="demo-container">
    <form class="main col-md-4 col-lg-4" style="height: auto;">
      <h2 class="asistencia">Evaluacion</h2>
      <div class="panel panel-default">
        <div class="col-md-10 m-3" style="display: flex;">
          <input type="empleado" class="form-control" placeholder="Nombre">
          <button class="btn btn-primary" id="btnEvalBusc">Buscar</button>
        </div>
      </div>
      <div class="panel panel-default justify-content-center text-center">
        <label class="col-md-10">1.Cumple con las tareas asigmadas</label>
        <div class="col-md-10 m-3">
          <label><input type="checkbox" class="text-muted" id="evalSip1">Si</label>
          <label><input type="checkbox" class="text-muted" id="evalNop1">No</label>
        </div>
      </div>
      <div class="panel panel-default justify-content-center text-center">
        <label class="col-md-10">2.No posee Ausencias?</label>
        <div class="col-md-10 m-3">
          <label><input type="checkbox" class="text-muted" id="evalSip2">Si</label>
          <label><input type="checkbox" class="text-muted" id="evalNop2">No</label>
        </div>
      </div>
      <div class="panel panel-default justify-content-center text-center">
        <label class="col-md-10">3.Posee 1 o mas llegadas tardias?</label>
        <div class="col-md-10 m-3">
          <label><input type="checkbox" class="text-muted" id="evalSip3">Si</label>
          <label><input type="checkbox" class="text-muted" id="evalNop3">No</label>
        </div>
      </div>
      <div class="panel panel-default justify-content-center text-center">
        <label class="col-md-10">4.Posee buena relacion con los compañero?</label>
        <div class="col-md-10 m-3">
          <label><input type="checkbox" class="text-muted" id="evalSip4">Si</label>
          <label><input type="checkbox" class="text-muted" id="evalNop4">No</label>
        </div>
      </div>
      <div class="panel panel-default justify-content-center text-center">
        <label class="col-md-10">5.Fomenta el trabajo en equipo?</label>
        <div class="col-md-10 m-3">
          <label><input type="checkbox" class="text-muted" id="evalSip5">Si</label>
          <label><input type="checkbox" class="text-muted" id="evalNop5">No</label>
        </div>
      </div>
    </form>
  </main>
<!--Fin Contenido principal-->

<?php include "shared/footer.php" ?>