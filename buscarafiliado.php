
<?php 
include('includes/header.php');
?>
    <section class="content-header">
    <h1>
       Buscar Afiliados
       <div class="col-xs-4 pull-right">
           <input class="form-control" type="text" name="buscarporafiliado" id="buscarporafiliado" placeholder="Buscar por Cedula">
       </div>
       <button type="submit" class="btn btn-primary pull-right" name='name'>Buscar</button>
   
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

  
<section style="display: none;" class="content ocultartodo">
<!-- SELECT2 EXAMPLE -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Agregar Afiliado</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <div class="form-group">
        <div class="row">
                <div class="col-xs-3">
                <label>Numero</label>
                  <input type="text" class="form-control" name="numero" id="numero" readonly>
                </div>
                <div class="col-xs-3">
                <label>Fecha de Expedicion</label>
                  <input type="text" class="form-control" name="fecha_exp" id="fecha_exp" readonly>
                </div>
                <div class="col-xs-3">
                <label>Fecha de nacimiento</label>
                  <input type="text" class="form-control" name="fechan" id="fechan" readonly>
                </div>
           
                <div class="col-xs-3">
                <label>Edad</label>
                  <input type="text" class="form-control" name="edad" id="edad" readonly>
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-3">
                <label>1er. Nombre</label>
                  <input type="text" class="form-control" name="pnombre" id="pnombre" readonly>
                </div>
                <div class="col-xs-3">
                <label>2do. Nombre</label>
                  <input type="text" class="form-control" name="snombre" id="snombre" readonly>
                </div>
                <div class="col-xs-3">
                <label>1er. Apellido</label>
                  <input type="text" class="form-control" name="papellido" id="papellido" readonly>
                </div>
                <div class="col-xs-3">
                <label>2do. Apellido</label>
                  <input type="text" class="form-control" name="sapellido" id="sapellido" readonly>
                </div>
              </div>
        </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Sexo</label>
          <input type="text" class="form-control" name="sexo" id="sexo" readonly>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Tipo Sanguineo</label>
          <input type="text" class="form-control" name="tsangre" id="tsangre" readonly>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
</div>
<!-- /.box -->
<div class="text-center">
  <div class="form-group">
    <a  class="btn btn-primary" onclick="myFunction()" id="myBtn">Mostrar Mas</a>
  </div>
    </div>
<!-- --------------------------------------------------------------------------------------- -->
<span id="dots"></span><span id="more">
<div class="row">
  <div class="col-md-6">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Datos De Residencia</h3>
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
            <input type="text" class="form-control" name="telefono" id="telefono" readonly>
          </div>
                </div>
                <div class="col-xs-6">
                <label>Celular</label>
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input type="text" class="form-control" name="celular" id="celular" readonly>
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
            <input type="text" class="form-control" name="correo" id="correo" readonly>
          </div>
                </div>
              </div>
        </div>
        <div class="form-group">
        <div class="row">
        <div class="col-md-6">
          <label>Departamento</label>
          <input type="text" class="form-control" name="departamento" id="departamento" readonly>
      </div>
      <div class="col-md-6">
          <label>Municipio</label>
          <input type="text" class="form-control" name="municipio" id="municipio" readonly>
      </div>
      </div>
      </div>
      <div class="form-group">
        <div class="row">
      <div class="col-xs-6">
                <label>Barrio</label>
                  <input type="text" class="form-control" name="barrio" id="barrio" readonly>
                </div>
                <div class="col-xs-6">
                <label>Direccion</label>
                  <input type="text" class="form-control" name="direccion" id="direccion" readonly>
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
      </div>
      <div class="box-body">
        <!-- Date -->
        <div class="form-group">
          <label>Estado Civil</label>

          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-venus-mars"></i>
            </div>
            <input type="text" class="form-control" name="estado_civil" id="estado_civil" readonly>
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
            <input type="text" class="form-control" name="nivel_educativo" id="nivel_educativo" readonly>
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
            <input type="text" class="form-control" name="eps" id="eps" readonly>
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group">
          <label>FECHA REGISTRO</label>

          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-hospital-o"></i>
            </div>
            <input type="text" class="form-control pull-right"  name="fecha_registro" id="fecha_registro">
          </div>
          <!-- /.input group -->
        </div>
      </div>
      
    </div>
    <!-- /.box -->
  </div>

   
<!-- <input type="text" id="codigo_afi"> -->
    <a  data-toggle="modal" data-target="#editarafiliado"  class="btn btn-primary"><i class="fa fa-edit"></i>Actualizar</a>
    <a  data-toggle="modal" data-target="#historialafi" class="btn btn-success"><i class="fa fa-edit"></i>Ver Historial</a>

  
     
  <!-- /.col (right) -->
</div>
<!-- /.row -->
</span>

</section>    

</div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
  
<?php include('includes/footer.php');?>
<script src="ajax/afiliados/buscarafiliados.js"></script>
<?php 
include ("pages/novedades/novedad.php");
include ("pages/novedades/ver_historial_novedad.php");
?>   
