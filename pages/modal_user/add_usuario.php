<?php   
$codigo = asignar_codigo_user();
?>
  <form class="form-horizontal" name="crear-administrador" id="crear-administrador" method="POST" action="acciones/usuarios/modelo_usuario.php">
      <!-- Modal -->
      <div id="registrarusuario" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header box box-primary">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h4 class="modal-title">AÑADIR USUARIO</h4>
            </div>
            <div class="modal-body">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">Datos Usuario</a></li>
        <li><a href="#timeline" data-toggle="tab">Habilitacion y rol</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="activity">
        <div class="form-group">
        <div class="row">
                <div class="col-xs-4">
                <label>Cedula</label>
                  <input type="text" class="form-control" name="cedula" id="cedula" placeholder="cedula">
                </div>
                <div class="col-xs-4">
                <label>Nombre</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombres" style="text-transform: uppercase;" required>
                </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-4">
                <label>Usuario</label>
                  <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                </div>
                <div class="col-xs-4">
                <label>Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
        </div>
        </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="timeline">
        <div class="form-group">
        <div class="row">
        <div class="col-xs-4">
                <select class="form-control select2" name="especialidad" id="especialidad" style="width: 100%;">
            <option selected="selected">Especialidad</option>
            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
            <option value="MEDICO">MEDICO</option>
          </select>
                </div>
                <div class="col-xs-4">
                <select class="form-control select2" name="tramite" id="tramite" style="width: 100%;">
            <option selected="selected">Tramite</option>
            <option value="triaje">triaje</option>
            <option value="medicina">medicina</option>
          </select>
                </div>
                <div class="col-xs-4">
                <select class="form-control select2" name="modulo" id="modulo" style="width: 100%;">
            <option selected="selected">Modulo</option>
            <option value="10">10</option>
            <option value="20">20</option>
          </select>
                </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-4">
                <label>Estado</label>
                  <input type="text" class="form-control" name="status" id="status" value="Activo" placeholder="status">
                </div>
                <div class="col-xs-4">
                <label>Nivel</label>
                  <input type="text" class="form-control" id="nivel" name="nivel" value="1" required>
                </div>
        </div>
        </div>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
    <input type="hidden" name="registro" value="nuevo">
<center>
<button type="submit" id="save_data" class="btn btn-flat btn-primary text-center"><i class="fa fa-floppy-o"></i> Agregar</button>
    
  </center>
            </div>
            
          </div>

        </div>
      </div>
    </form>
        <!------------------ Fin Modal -------------------------------------->
        
        