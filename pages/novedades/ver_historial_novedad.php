<form class="form-horizontal" method="POST" action="acciones/registrarusuario.php?act=insert">
  <!-- Modal -->
  <div id="historialafi" class="modal fade" data-backdrop="static" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header box box-success">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title">EDITAR AFILIADO</h4>
        </div>
        <div class="modal-body">

          <div class="table-responsive">
          <?php
                  $id = $resultadoafi['numero'];
                  $row_datos = consulta_historial($id);
                  if($row_datos){                  
                  ?>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Codigo Cita</th>
                  <th>Numero</th>
                  <th>Fecha Citas</th>
                  <th>Estado</th>
                  <th>Ver</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <?php
                  for ($i = 0; $i < sizeof($row_datos); $i++) {
                    $row_datos[$i]
                  ?>
                    <td><?php echo $row_datos[$i]['codigo_cita'] ?></td>
                    <td><?php echo $row_datos[$i]['numero'] ?></td>
                    <td><?php echo $row_datos[$i]['diacita'] ?></td>
                    <td class="text-center">
                      <?php
                      if ($row_datos[$i]['estado_cita'] == 'ATENDIDO') {
                        echo '<span class="label label-primary">ATENDIDO</span>';
                      } else if ($row_datos[$i]['estado_cita'] == 'PENDIENTE') {
                        echo '<span class="label label-success">PENDIENTE</span>';
                      } else if ($row_datos[$i]['estado_cita'] == 'AUSENTE') {
                        echo '<span class="label label-danger">AUSENTE</span>';
                      }
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                      if ($row_datos[$i]['estado_cita'] == 'PENDIENTE') {
                        echo '<a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#iniciard' . $row_datos[$i]['id_historial'] . '" ><i class="fa fa-edit"></i></a>';
                      } else if ($row_datos[$i]['estado_cita'] == 'ATENDIDO') {
                        echo '';
                      }
                      ?>


                      <?php
                      if ($row_datos[$i]['estado_cita'] == 'ATENDIDO') {
                        echo '<a type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#imprimir' . $row_datos[$i]['id_historial'] . '" ><i class="fa fa-edit"></i></a>';
                      } else if ($row_datos[$i]['estado_cita'] == 'PENDIENTE') {
                        echo '';
                      }
                      ?>

                    </td>

                    <?php include("pages/citas/diagnostico.php"); ?>
                    <?php include("pages/citas/imprimir_receta.php"); ?>
                </tr>

              <?php
                  }
              ?>
              </tbody>

            </table>
            <?php
                  }             
                  ?>

          </div>


        </div>

      </div>

    </div>
  </div>
</form>