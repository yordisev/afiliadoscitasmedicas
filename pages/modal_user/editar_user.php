
<form class="form-horizontal" name="editar-administrador" id="editar-administrador" method="POST" action="acciones/usuarios/modelo_usuario.php">
      <!-- Modal -->
      <div id="editaruser" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header box box-primary">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h4 class="modal-title">EDITAR USUARIO</h4>
            </div>
            <div class="modal-body">
<!-- SELECT2 EXAMPLE -->
<div class="row">
  <div class="col-md-12">
<div class="box box-primary">
  <div class="box-body">
  <div class="form-group">
        <div class="row">
                <div class="col-xs-4">
                <label>Cedula</label>
                  <input type="text" class="form-control" name="cedula" id="cedula" placeholder="cedula">
                </div>
                <div class="col-xs-4">
                <label>Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres" style="text-transform: uppercase;" required>
                </div>
                <div class="col-xs-4">
                <label>Usuario</label>
                  <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
                 <div class="col-xs-6">
                 <label>Especialidad</label>
                <select class="form-control" name="especialidad" id="especialidad">
            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
            <option value="Medico">Medico</option>
            <option value="Tecnologo">Tecnologo</option>
          </select>
                </div>
                <div class="col-xs-6">
                <label>Tramite</label>
                <select class="form-control" name="tramite" id="tramite">
            <option value="triaje">triaje</option>
            <option value="medicina">medicina</option>
          </select>
                </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-4">
                <label>Modulo</label>
                <select class="form-control" name="modulo" id="modulo">
            <option selected="selected">Modulo</option>
            <option value="10">10</option>
            <option value="20">20</option>
          </select>
                </div>
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
</div>
</div>
</div>
<input type="hidden" name="registro" value="actualizar">
<button type="submit"  class="btn btn-flat btn-primary text-center"><i class="fa fa-floppy-o"></i>Actualizar</button>
            </div>
          </div>
        </div>
      </div>
    </form>