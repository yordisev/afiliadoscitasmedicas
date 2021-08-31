
<?php include('includes/header.php');
require_once "config/funciones.php";
  $triaje = turnos_triaje();
  $triaje1 = turnos_triaje1();
  $medicina = turnos_medicina();
  $medicina1 = turnos_medicina1();
  $documentos = turnos_documentos();
  $documentos1 = turnos_documentos1();

?>

<section class="content-header">
      <h1>
      Gestionar Turno
      </h1>
      <ol class="breadcrumb">
        <li><a href="start.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
      </ol>
    </section>
  <!-- Main content -->
  <section class="content">
<!-- SELECT2 EXAMPLE -->

<div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-purple">
            <h2 class="widget-user-username">TRIAJE</h2>
              <h3 class="widget-user-desc">Total Turnos : <?php echo $triaje['numero'] ?></h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Activos <span class="pull-right badge bg-blue"><?php echo $triaje1['numero'] ?></span></a></li>
                <li><a href="#">En espera<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Atendidos<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Ausentes en sala<span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        

        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
              <!-- /.widget-user-image -->
              <h2 class="widget-user-username">MEDICINA</h2>
              <h3 class="widget-user-desc">Total Turnos : <?php echo $medicina['numero'] ?></h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Activos <span class="pull-right badge bg-blue"><?php echo $medicina1['numero'] ?></span></a></li>
                <li><a href="#">En espera<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Atendidos<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Ausentes en sala<span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>

        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <!-- /.widget-user-image -->
              <h2 class="widget-user-username">DOCUMENTOS</h2>
              <h3 class="widget-user-desc">Total Turnos : <?php echo $documentos['numero'] ?></h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Activos <span class="pull-right badge bg-blue"><?php echo $documentos1['numero'] ?></span></a></li>
                <li><a href="#">En espera<span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Atendidos<span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Ausentes en sala<span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
     
      </div>
<!-- --------------------------------------------------------------------- -->

</section>
<!-- /.content -->

<?php include('includes/footer.php');?>
