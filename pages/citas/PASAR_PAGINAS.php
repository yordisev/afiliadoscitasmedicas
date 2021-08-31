
    <form  action="action/action_user.php?act=insert" method="POST">
      <!-- Modal -->
      <div  id="iniciard<?php echo $row_datos[$i]['id_historial']; ?>" class="modal fade" role="dialog">
          
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header box box-primary">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h4 class="modal-title">Diagnostico</h4>
            </div>
            
            <div class="modal-body">

            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-flat">1</a>
                        <p>Account Details</p>
                    </div>
                    
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-flat" disabled="disabled">2</a>
                        <p>Career</p>
                    </div>
                    
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-flat" disabled="disabled">3</a>
                        <p>Social Media</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-flat" disabled="disabled">4</a>
                        <p>Social Media</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-5" type="button" class="btn btn-default btn-flat" disabled="disabled">5</a>
                        <p>Prueba 4</p>
                    </div>
                </div>
            </div>

            <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="form-group">
        <div class="row">
        <div class="col-xs-4">
                <label>ID</label>
                  <input type="text" class="form-control" value="<?php echo $row_datos[$i]['id_historial']; ?>" readonly >
                </div>
                <div class="col-xs-4">
                <label>Presion Arterial(mmhg)</label>
                  <input type="text" class="form-control" name="parterial" >
                </div>
                <div class="col-xs-4">
                <label>Saturacion(%)</label>
                  <input type="text" class="form-control" name="saturacion">
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-6">
                <label>Temperatura(°C)</label>
                  <input type="text" class="form-control" name="temperatura">
                </div>
                <div class="col-xs-6">
                <label>Peso(Kg)</label>
                  <input type="text" class="form-control" name="peso">
                </div>
              </div>
        </div>
                            <!-- content go here -->
                            <button class="btn btn-primary nextBtn pull-right" type="button" >Next</button>
                        </div>
                    </div>
               </div>

               <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="form-group">
        <div class="row">
                
                <div class="col-xs-6">
                <label>Frecuencia Respiratoria(X')</label>
                  <input type="text" class="form-control" name="frespiratoria">
                </div>
                <div class="col-xs-6">
                <label>Talla(Cm)</label>
                  <input type="text" class="form-control" name="snombre">
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
                
                <div class="col-xs-6">
                <label>Frecuencia Cardiaca(X')</label>
                  <input type="text" class="form-control" name="fcardiaca">
                </div>
                <div class="col-xs-6">
                <label>IMC</label>
                  <input type="text" class="form-control" name="imc">
                </div>
              </div>
        </div>
                            <!-- content go here -->
                            <button class="btn btn-primary nextBtn pull-right" type="button" >Next</button>
                        </div>
                    </div>
               </div>

               <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="form-group">
        <div class="row">
               
                <div class="col-xs-6">
                <label>Motivo de Consulta</label>
                <textarea name="mconsulta" id="" cols="80" rows="3"></textarea>
                </div>
               
              </div>
        </div>
        <div class="form-group">
        <div class="row">
               
                <div class="col-xs-6">
                <label>Antecedentes</label>
                <textarea name="antecedentes" id="" cols="80" rows="3"></textarea>
                </div>
               
              </div>
        </div>
                            <!-- content go here -->
                            <button class="btn btn-primary nextBtn pull-right" type="button" >Next</button>
                        </div>
                    </div>
               </div>
               <div class="row setup-content" id="step-4">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="form-group">
        <div class="row">
                
                <div class="col-xs-6">
                <label>Alergias</label>
                  <input type="text" class="form-control" name="alergias">
                </div>
                <div class="col-xs-6">
                <label>Cirugias</label>
                  <input type="text" class="form-control" name="cirugias">
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
                
                <div class="col-xs-6">
                <label>Vacunas</label>
                  <input type="text" class="form-control" name="vacunas">
                </div>
                <div class="col-xs-6">
                <label>Telefono</label>
                  <input type="text" class="form-control" name="telefono">
                </div>
              </div>
        </div>
                            <!-- content go here -->
                            <button class="btn btn-primary nextBtn pull-right" type="button" >Next</button>
                        </div>
                    </div>
               </div>
               <div class="row setup-content" id="step-5">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="form-group">
        <div class="row">
               
                <div class="col-xs-6">
                <label>Examen Fisico</label>
                <textarea name="examenfisico" id="" cols="80" rows="3"></textarea>
                </div>
               
              </div>
        </div>
        <div class="form-group">
        <div class="row">
               
                <div class="col-xs-6">
                <label>Diagnostico</label>
                <textarea name="diagnostico" id="" cols="80" rows="3"></textarea>
                </div>
               
              </div>
        </div>
        <div class="form-group">
        <div class="row">
               
                <div class="col-xs-6">
                <label>Tratamiento</label>
                <textarea name="tratamiento" id="" cols="80" rows="3"></textarea>
                </div>
               
              </div>
        </div>
                            <!-- content go here -->
                            <button class="btn btn-success nextBtn  pull-right" name="Guardar" type="submit">Finish!</button>
                        </div>
                    </div>
               </div>
            
          </div>

        </div>
      </div>
    </form>
  