<?php include('includes/header.php');
require_once "config/database.php";
require_once "config/funciones.php";
$afiliados = afiliados();
// $row = historial_afi()
?>
<!-- DataTables -->

<section class="content-header">
  <h1>
    Afiliados
    <a class="btn btn-primary pull-right" href="" title="Agregar" data-toggle="modal" data-target="#registrarafiliado"><i class="fa fa-plus"></i> Agregar</a>
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">

      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Datos de Afiliados</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <div class="table-responsive">
        <table id="dt_afiliados" class="table table-bordered table-striped table-hover">
            <thead>
              <tr style='background-color:#A3CCFF'>
              <th class="text-center">N°</th>
                <th class="text-center">HISTORIAL</th>
                <th class="text-center">NUMERO</th>
                <th class="text-center">NOMBRES</th>
                <th class="text-center">APELLIDOS</th>
                <th class="text-center">ESTADO</th>
                <th class="text-center">ACCIONES</th>
              </tr>
            </thead>
          </table>
          <?php include("pages/modal_afiliados/edit_afi.php");?>
          <?php include("pages/modal_afiliados/add_afi.php");?>
        </div>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>


<?php include('includes/footer.php'); ?>
<script src="ajax/afiliados/afiliados.js"></script>