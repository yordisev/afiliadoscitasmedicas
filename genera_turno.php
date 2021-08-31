
<?php 
include('includes/header.php');
?>

    <section class="content-header">
   
    <h1>
      Generar Turno
       <div class="col-xs-4 pull-right">
           <input class="form-control" type="text" name="buscarporcodigo" id="buscarporcodigo" placeholder="Buscar por Cedula">
       </div>
       <button type="submit" class="btn btn-primary pull-right" name='name'>Buscar</button>

      </h1>
    </section>


    <section class="content">
      <div class="row">
      
        <div class="col-xs-12">
        <section style="display: none;" class="content labelpnombre">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Generar turno</h3>
        
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div  class="box-body">
          <div class="form-group">
              <div class="row">
              <div class="col-xs-4">
                      <label>Numero de Documento</label>
                        <input type="text" class="form-control" name="numero" id="numero" readonly>
                      </div>
                      <div class="col-xs-4">
                      <label>1er. Nombre</label>
                        <input type="text" class="form-control" name="pnombre" id="pnombre"  readonly>
                      </div>
                      <div class="col-xs-4">
                      <label>1er. Apellido</label>
                        <input type="text" class="form-control" name="papellido" id="papellido" readonly>
                      </div>
                    </div>
              </div>
          </div>
        </div>
        <!-- /.box -->
        
        
<div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
          <a href="#" id="generar_turno_triaje" class="btn btn-primary">
            <span class="info-box-icon"><i class="fa fa-heartbeat"></i></span>

            <div class="info-box-content">
              <span  class="info-box-number"><h1>Triaje</h1></span>
            </div>
          
          </a>
         
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4">
        <a href="#" id="generar_turno_medicina" class="btn btn-success">
          <span class="info-box-icon"><i class="fa fa-h-square"></i></span>

          <div class="info-box-content">
            <span  class="info-box-number"><h1>Medicina</h1></span>
          </div>
        
        </a>
       
      </div>

      <div class="col-md-4 col-sm-4 col-xs-4">
        <a href="#" id="generar_turno_documento" class="btn bg-blue">
          <span class="info-box-icon"><i class="fa   fa-file-text-o"></i></span>

          <div class="info-box-content">
            <span  class="info-box-number"><h1>Documentos</h1></span>
          </div>
        
        </a>
       
      </div>
        
        </div>


        </section>   

      <section style="display: none;" class="content labelcrearafiliado">
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
              <div class="col-xs-4">
                      <label>Numero de Documento</label>
                        <input type="text" class="form-control" name="documento" id="documento" required>
                      </div>
                      <div class="col-xs-4">
                      <label>1er. Nombre</label>
                        <input type="text" class="form-control" name="pnombre" id="pnombre" required>
                      </div>
                      <div class="col-xs-4">
                      <label>1er. Apellido</label>
                        <input type="text" class="form-control" name="papellido" id="papellido" required>
                      </div>
                    </div>
              </div>
        </div>
      </div>
      <!-- /.box -->
      
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
          <button data-toggle="modal" data-target="#turnotriaje'.$resultadoafi['numero'].'" class="btn btn-primary">
            <span class="info-box-icon"><i class="fa fa-heartbeat"></i></span>

            <div class="info-box-content">
              <span  class="info-box-number"><h1>Triaje</h1></span>
            </div>
          
          </button>
         
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4">
        <button data-toggle="modal"  data-target="#turnomedicina'.$resultadoafi['numero'].'" class="btn btn-success">
          <span class="info-box-icon"><i class="fa fa-h-square"></i></span>

          <div class="info-box-content">
            <span  class="info-box-number"><h1>Medicina</h1></span>
          </div>
        
        </button>
       
      </div>

      <div class="col-md-4 col-sm-4 col-xs-4">
        <button data-toggle="modal" data-target="#turnodocumento'.$resultadoafi['numero'].'" class="btn bg-blue">
          <span class="info-box-icon"><i class="fa   fa-file-text-o"></i></span>

          <div class="info-box-content">
            <span  class="info-box-number"><h1>Documentos</h1></span>
          </div>
        
        </button>
       
      </div>
        
        </div>
      
      </section>



</div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
  
<?php include('includes/footer.php');?>
<script src="ajax/turnos/turnos.js"></script>
