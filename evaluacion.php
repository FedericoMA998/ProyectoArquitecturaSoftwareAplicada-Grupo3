<?php include "shared/header.php" ?>

    <!--contenido-->
    <main>
      <section class="evaluacion">
        <div class="card">
          <div class="nombre">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="nombre">
          </div>
          <button type="button" class="btn btn-primary">Registrar</button>
        </div>
        </div>
        </div>
      </section>
       <section>
        <div class="form">
        <div class="card">
       <div  class="evaluacion-1">
        <label for="exampleFormControlInput" class="form-label">1.Cumple con las tareas asigmadas</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
          SI
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            NO
          </label>
        </div>
       </div>
        
        </div>

        <div class="card">
          <div  class="evaluacion-2">
           <label for="exampleFormControlInput" class="form-label">2.No posee Ausencias?</label>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
             <label class="form-check-label" for="flexRadioDefault1">
             SI
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
             <label class="form-check-label" for="flexRadioDefault2">
               NO
             </label>
           </div>
          </div>
           
           </div>

           <div class="card">
            <div  class="evaluacion-3">
             <label for="exampleFormControlInput" class="form-label">3.Posee 1 o mas llegadas tardias?</label>
             <div class="form-check">
               <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
               <label class="form-check-label" for="flexRadioDefault1">
               SI
               </label>
             </div>
             <div class="form-check">
               <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
               <label class="form-check-label" for="flexRadioDefault2">
                 NO
               </label>
             </div>
            </div>
             </div>
             <div class="card">
              <div  class="evaluacion-4">
               <label for="exampleFormControlInput" class="form-label">4.Posee buena relacion con los compañero?</label>
               <div class="form-check">
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                 <label class="form-check-label" for="flexRadioDefault1">
                 SI
                 </label>
               </div>
               <div class="form-check">
                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                 <label class="form-check-label" for="flexRadioDefault2">
                   NO
                 </label>
               </div>
              </div>
               </div>

               <div class="card">
                <div  class="evaluacion-5">
                 <label for="exampleFormControlInput" class="form-label">5.Fomenta el trabajo en equipo?</label>
                 <div class="form-check">
                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                   <label class="form-check-label" for="flexRadioDefault1">
                   SI
                   </label>
                 </div>
                 <div class="form-check">
                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                   <label class="form-check-label" for="flexRadioDefault2">
                     NO
                   </label>
                 </div>
                </div>
                 </div>
                 <div class="buton justify-content-center">
                <button type="button" class="btn btn-primary">Guardar</button>
              </div>
                 </div>
                </div>
       </section>
    </main>

  <!--Fin Contenido principal-->

  <?php include "shared/footer.php"?>
    