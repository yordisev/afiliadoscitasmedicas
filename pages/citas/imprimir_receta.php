
   <div>
     

   <form action="pages/citas/receta.php" id="g_acta" target="_blank" method="POST">
        <!-- Modal -->
        <div  id="imprimir<?php echo $row_datos[$i]['id_historial']; ?>" class="modal fade" role="dialog">
            
          <div class="modal-dialog">
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
                  <!-- <label>Alergias</label> -->
                    <input type="hidden" class="form-control" name="alergias" value="<?php echo $row_datos[$i]['id_historial']; ?>" readonly>
                  </div>
                  <div >
                  <label>Cirugias: </label> 
                  <?php echo $row_datos[$i]['saturacion']; ?>
                  
                  </div>
                  
                </div>
          </div>
          <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

                          
         
          <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@        -->
                 </div>
                 <button type="submit" id="acta" onclick="setTimeout(() => window.location.reload(), 0)" name="guardar" class="btn btn-primary">Generar Receta</button>
           
          </div>
            </div>
  
          </div>
        </div>
      </form>
      </div>