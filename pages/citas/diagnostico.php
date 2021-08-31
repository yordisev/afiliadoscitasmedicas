
   <div>
     

   <form  class="form-horizontal" action="action/accion_historial.php?act=update"  method="POST">
      <!-- Modal -->
      <div  id="iniciard<?php echo $row_datos[$i]['id_historial']; ?>" class="modal fade" role="dialog">
          
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header box box-primary">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h4 class="modal-title">Diagnostico</h4>
            </div>
            
            <div class="modal-body">

                    <div class="col-xs-12">
                    <div class="form-group">
        <div class="row">
                
                <div class="col-xs-3">
                <label>Alergias</label>
                  <input type="text" class="form-control" name="alergias" required>
                </div>
                <div class="col-xs-3">
                <label>Cirugias</label>
                  <input type="text" class="form-control" name="cirugias" required>
                </div>
                <div class="col-xs-3">
                <label>Vacunas</label>
                  <input type="text" class="form-control" name="vacunas" required>
                </div>
                <div class="col-xs-3">
                <label>Telefono</label>
                  <input type="text" class="form-control" name="telefono" required>
                </div>
              </div>
        </div>
                        <div class="form-group">
        <div class="row">
        <div class="col-xs-4">
                <label>ID</label>
                  <input type="text" class="form-control" name="id_historial" value="<?php echo $row_datos[$i]['id_historial']; ?>" readonly >
                </div>
                <div class="col-xs-4">
                <label>Presion Arterial(mmhg)</label>
                  <input type="text" class="form-control" name="parterial" required>
                </div>
                <div class="col-xs-4">
                <label>Saturacion(%)</label>
                  <input type="text" class="form-control" name="saturacion" required>
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-3">
                <label>Temperatura(°C)</label>
                  <input type="text" class="form-control" name="temperatura" required>
                </div>
                <div class="col-xs-3">
                <label>Peso(Kg)</label>
                  <input type="text" class="form-control" name="peso" required>
                </div>
                <div class="col-xs-3">
                <label>Frecuencia Respiratoria(X')</label>
                  <input type="text" class="form-control" name="frespiratoria" required>
                </div>
                <div class="col-xs-3">
                <label>Talla(Cm)</label>
                  <input type="text" class="form-control" name="talla" required>
                </div>
              </div>
        </div>
                         
        <div class="form-group">
        <div class="row">
                
                <div class="col-xs-6">
                <label>Frecuencia Cardiaca(X')</label>
                  <input type="text" class="form-control" name="fcardiaca" required>
                </div>
                <div class="col-xs-6">
                <label>IMC</label>
                  <input type="text" class="form-control" name="imc" required>
                </div>
              </div>
        </div>
               </div>

              
                        <div class="form-group">
        <div class="row">
               
                <div class="col-xs-6">
                <label>Motivo de Consulta</label>
                <textarea name="mconsulta"  cols="60" rows="3" required></textarea>
                </div>
                <div class="col-xs-6">
                <label>Antecedentes</label>
                <textarea name="antecedentes"  cols="60" rows="3" required></textarea>
                </div>
              </div>
        </div>
                        
                        
                        <div class="form-group">
        <div class="row">
               
                <div class="col-xs-6">
                <label>Examen Fisico</label>
                <textarea name="examenfisico"  cols="60" rows="3" required></textarea>
                </div>
                <div class="col-xs-6">
                <label>Diagnostico</label>
                <textarea name="diagnostico"  cols="60" rows="3" required></textarea>
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
               
                <div class="col-xs-6">
                <label>Tratamiento</label>
                <textarea name="tratamiento" id="" cols="80" rows="3" required></textarea>
                </div>
               
              </div>
        </div>
      

            <button type="submit" class="btn btn-primary" name="Guardar"><i class="fa fa-floppy-o"></i> Actualizar</button>
         
        </div>
          </div>

        </div>
      </div>
    </form>
    </div>