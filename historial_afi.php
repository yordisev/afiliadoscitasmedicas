
<?php   
include('includes/header.php');
require_once "config/funciones.php";

$mysqli = db();

// if (isset($_GET['id'])) {

//   $id = mysqli_real_escape_string($mysqli, (strip_tags($_GET["id"], ENT_QUOTES)));
//   $sql = mysqli_query($mysqli, "SELECT * FROM db_afiliados WHERE numero='$id'");
//    $row = mysqli_fetch_assoc($sql);
  
// }

$row = historial_afiliados();
$id = mysqli_real_escape_string($mysqli, (strip_tags($_GET["id"], ENT_QUOTES)));
?>

<section class="content-header">
      <h1>
        Historial
        <small>Afiliado</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="afidate.php"><i class="fa fa-dashboard"></i> Afiliados</a></li>
      </ol>
    </section>
  <!-- Main content -->
  <section class="content">
  <?php  

if (empty($_GET['alert'])) {
  echo "";
} 

elseif ($_GET['alert'] == 1) {
  echo "<div class='alert alert-success alert-dismissable'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
          datos de usuario se ha registrado correcamente.
        </div>";
}

elseif ($_GET['alert'] == 2) {
  echo "<div class='alert alert-success alert-dismissable'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
       Los datos de usuario ha sido cambiado satisfactoriamente.
        </div>";
}
?>
<!-- SELECT2 EXAMPLE -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Historial Afiliado</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <div class="form-group">
        <div class="row">
                <div class="col-xs-3">
                <label>Codigo</label>
                  <input type="text" class="form-control" value="<?php echo $row['codigo_afi']; ?>" readonly>
                </div>
                <div class="col-xs-3">
        <div class="form-group">
          <label>Tipo Documento</label>
          <input type="text" class="form-control pull-right" value="<?php echo $row['documento']; ?>" readonly>
        </div>
      </div>
                <div class="col-xs-3">
                <label>Numero</label>
                  <input type="text" class="form-control" value="<?php echo $row['numero']; ?>" readonly>
                </div>
                <div class="col-xs-3">
                <label>Fecha de Expedicion</label>
                  <input type="text" class="form-control" value="<?php echo $row['fecha_exp']; ?>" readonly>
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-3">
                <label>1er. Nombre</label>
                  <input type="text" class="form-control" value="<?php echo $row['pnombre']; ?>" readonly>
                </div>
                <div class="col-xs-3">
                <label>2do. Nombre</label>
                  <input type="text" class="form-control" value="<?php echo $row['snombre']; ?>" readonly>
                </div>
                <div class="col-xs-3">
                <label>1er. Apellido</label>
                  <input type="text" class="form-control" value="<?php echo $row['papellido']; ?>" readonly>
                </div>
                <div class="col-xs-3">
                <label>2do. Apellido</label>
                  <input type="text" class="form-control" value="<?php echo $row['sapellido']; ?>" readonly>
                </div>
              </div>
        </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>Fecha Nacimiento</label>
          <input type="date" class="form-control" value="<?php echo $row['fechan']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Sexo</label>
          <input type="text" class="form-control pull-right" value="<?php echo $row['sexo']; ?>" readonly>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Tipo Sanguineo</label>
          <input type="text" class="form-control" value="<?php echo $row['tsangre']; ?>" readonly>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
</div>
<!-- /.box -->

<div class="row">
  <div class="col-md-6">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Datos De Residencia</h3>
        <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <div class="form-group">
        <div class="row">
                <div class="col-xs-6">
                <label>Telefono</label>
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input type="text" class="form-control" value="<?php echo $row['telefono']; ?>" readonly>
          </div>
                </div>
                <div class="col-xs-6">
                <label>Celular</label>
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input type="text" class="form-control" value="<?php echo $row['celular']; ?>" readonly>
          </div>
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-12">
                <label>Correo Electronico</label>
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-envelope"></i>
            </div>
            <input type="text" class="form-control" value="<?php echo $row['correo']; ?>" readonly>
          </div>
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
        <div class="col-md-6">
          <label>Departamento</label>
          <input type="text" class="form-control pull-right" value="<?php echo $row['departamento']; ?>" readonly>
      </div>
      <div class="col-md-6">
          <label>Municipio</label>
          <input type="text" class="form-control pull-right" value="<?php echo $row['municipio']; ?>" readonly>
      </div>
      </div>
      </div>
      <div class="form-group">
        <div class="row">
      <div class="col-xs-6">
                <label>Barrio</label>
                  <input type="text" class="form-control" value="<?php echo $row['barrio']; ?>" readonly>
                </div>
                <div class="col-xs-6">
                <label>Direccion</label>
                  <input type="text" class="form-control" value="<?php echo $row['direccion']; ?>" readonly>
                </div>
                </div>
      </div>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->


  </div>
  <!-- /.col (left) -->
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Mas Datos</h3>
        <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
      </div>
      <div class="box-body">
        <!-- Date -->
        <div class="form-group">
          <label>Estado Civil</label>

          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-venus-mars"></i>
            </div>
            <input type="text" class="form-control pull-right" value="<?php echo $row['estado_civil']; ?>" readonly>
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->

        <!-- Date range -->
        <div class="form-group">
          <label>Nivel Educativo</label>

          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa  fa-book"></i>
            </div>
            <input type="text" class="form-control pull-right" value="<?php echo $row['nivel_educativo']; ?>" readonly>
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->

        <!-- Date and time range -->
        <div class="form-group">
          <label>EPS</label>

          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-hospital-o"></i>
            </div>
            <input type="text" class="form-control pull-right" value="<?php echo $row['eps']; ?>" readonly>
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group">
          <label>Fecha Registro</label>

          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-hospital-o"></i>
            </div>
            <input type="text" class="form-control pull-right"value="<?php echo $row['fecha_registro']; ?>" readonly>
          </div>
          <!-- /.input group -->
        </div>
      </div>
      
    </div>
    <!-- /.box -->
  </div>
  <center>
    <a style="margin-left: 20px;" class="btn btn-danger" href="javascript:history.back()"><i class="fa fa-arrow-left"></i> Regresar</a>   
  </center>
  <?php
           
            $row_datos = consulta_historial($id);

            ?>
            <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Citas Registradas</h3>
        <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
      </div>
  <div class="box-body">
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
                  <?php
                    if ($row_datos[$i]['estado_cita'] == 'PENDIENTE') {
                      echo '<a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#iniciard'. $row_datos[$i]['id_historial'].'" ><i class="fa fa-edit"></i></a>';
                    } else if ($row_datos[$i]['estado_cita'] == 'ATENDIDO') {
                      echo '';
                    }
                    ?>
                  <!-- <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#iniciard<?php echo $row_datos[$i]['id_historial'];?>" ><i class="fa fa-edit"></i></a> -->
                  
                  <?php
                    if ($row_datos[$i]['estado_cita'] == 'ATENDIDO') {
                      echo '<a type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#imprimir'. $row_datos[$i]['id_historial'].'" ><i class="fa fa-edit"></i></a>';
                    } else if ($row_datos[$i]['estado_cita'] == 'PENDIENTE') {
                      echo '';
                    }
                    ?>
                  
                </td>
                
               <?php include("pages/citas/diagnostico.php");?>
               <?php include("pages/citas/imprimir_receta.php");?>
              </tr>
              
            <?php
                }
            ?>
            </tbody>
            
          </table>
          
  </div>
        </div>
    </div>
            </div>
  <!-- /.col (right) -->
</div>
<!-- /.row -->

</section>
<!-- /.content -->

<?php include('includes/footer.php');?>
