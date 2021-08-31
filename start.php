<?php include('includes/header.php');
require_once "config/funciones.php";
$data = citas_dia_hoy();
$data1 = citas_dia_hoy_atendidas();
$data2 = citas_dia_hoy_pendientes();
$data3 = citas_dia_hoy_ausentes();
$row_datos = tabla_citas_afiliados();
$generarturno = asignar_turno();

?>


<section class="content-header">
      <h1>
        Inicio
        <small>Medicina</small>
        <a class="btn btn-primary pull-right" href="" title="Agregar" data-toggle="modal" data-target="#registrarcita"><i class="fa fa-plus"></i> Generar Turno</a>
     
      </h1>
      
    </section>
<!-- Main content -->
<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-gear"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Citas Total</span>
              <span class="info-box-number"><?php echo $data['numero']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Citas Atendidas</span>
              <span class="info-box-number"><?php echo $data1['atendidos']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pendientes</span>
              <span class="info-box-number"><?php echo $data2['pendientes']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ausentes en Sala</span>
              <span class="info-box-number"><?php echo $data3['ausentes']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Citas</h3>
            </div>
            <div class="table-responsive">
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
                  <td>
                  <?php
                    if ($row_datos[$i]['estado_cita'] == 'ATENDIDO') {
                      echo '<span class="label label-primary">ATENDIDO</span>';
                    } else if ($row_datos[$i]['estado_cita'] == 'PENDIENTE') {
                      echo '<span class="label label-success">PENDIENTE</span>';
                    }else if ($row_datos[$i]['estado_cita'] == 'AUSENTE') {
                      echo '<span class="label label-danger">AUSENTE</span>';
                    }
                    ?>
                </td>
                  <td class="text-center">
                    <a href="historial_afi.php?id=<?php echo $row_datos[$i]['codigo_cita'];?>" class="btn btn-info btn-xs"> <i class="fa fa-eye"></i> Ver</a>
                  </td>
                    <?php include("pages/modal_afiliados/edit_afi.php");?>
                  </td>
              </tr>
            <?php
                }
            ?>
            </tbody>
          </table>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        
    </section>
    <?php include('includes/footer.php');?>
   
   