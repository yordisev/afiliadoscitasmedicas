<form class="form-horizontal" method="POST" action="acciones/registrarusuario.php?act=insert">
      <!-- Modal -->
      <div id="editarafiliado" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header box box-success">
              <button type="button" class="close" data-dismiss="modal">x</button>
              <h4 class="modal-title">EDITAR AFILIADO</h4>
            </div>
            <div class="modal-body">

<!-- SELECT2 EXAMPLE -->
<div class="row">
  <div class="col-md-12">
<div class="box box-success">
  <div class="box-body">
      
  <div class="form-group">
        <div class="row">
                <div class="col-xs-3">
                <label>Codigo</label>
                  <input type="text" class="form-control" name="codigo_afi" id="codigo_afi" readonly required>
                  </div>
                  <div class="col-xs-3">
                  <label>Tipo Documento</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Tipo de Documento</option>
            <option>CC</option>
            <option>TI</option>
          </select>
    </div>
    <div class="col-xs-3">
    <label>Numero</label>
                  <input type="text" class="form-control" name="numero" id="numero" placeholder="Numero" >
        </div>
        <div class="col-xs-3">
        <label>Fecha Expedicion</label>
                  <input type="text" class="form-control" placeholder="Fecha de Expedicion" >
           </div>
</div>

        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-3">
                <label>1er Nombre</label>
                  <input type="text" class="form-control" placeholder="1er Nombre">
         </div>
         <div class="col-xs-3">
                <label>2do Nombre</label>
                <input type="text" class="form-control" placeholder="2do Nombre">
      </div>
      <div class="col-xs-3">
                <label>1er Apellido</label>
                  <input type="text" class="form-control" placeholder="1er Apellido">
        </div>
        <div class="col-xs-3">
                <label>2do Apellido</label>
                  <input type="text" class="form-control" placeholder="2do Apellido">
                  </div>
</div>
       </div>
            
        <div class="form-group">
    <div class="row">
      <div class="col-xs-4">
          <label>Fecha Nacimiento</label>
          <input type="date" class="form-control" placeholder=".col-xs-5">
      </div>
      <div class="col-xs-4">
          <label>Sexo</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Alabama</option>
            <option>Femenino</option>
            <option>Masculino</option>
          </select>
      </div>
      <div class="col-xs-4">
          <label>Tipo Sanguineo</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">O+</option>
            <option>A-</option>
            <option>OA+</option>
          </select>
      </div>
    </div>
        </div>
    <!-- /.row -->
  </div>
</div>
</div>
</div>
<!-- /.box -->

<div class="row">
  <div class="col-md-6">

    <div class="box box-success">
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <div class="form-group">
        <div class="row" >
                <div class="col-xs-3" style="width: 50%;">
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input type="text" class="form-control" placeholder="Telefono">
          </div>
                </div>
                <div class="col-xs-3" style="width: 50%;">
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input type="text" class="form-control" placeholder="Celular">
          </div>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-6" style="width: 100%;">
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-envelope"></i>
            </div>
            <input type="text" class="form-control"  placeholder="Correo">
          </div>
              </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-6">
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <select class="form-control select2" style="width: 240%;">
            <option selected="selected">Departamento</option>
            <option>A-</option>
            <option>OA+</option>
          </select>
          </div>
                </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-xs-6">
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <select class="form-control select2" style="width: 240%;">
            <option selected="selected">Municipio</option>
            <option>A-</option>
            <option>OA+</option>
          </select>
          </div>
                </div>
        </div>
        </div>
      <div class="form-group">
        <div class="row">
      <div class="col-xs-6">
                  <input type="text" class="form-control" placeholder="Barrio">
                </div>
                <div class="col-xs-6">
                  <input type="text" class="form-control" placeholder="Direccion">
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
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Mas Datos</h3>
      </div>
      <div class="box-body">
        <!-- Date -->
        <div class="form-group">
        <div class="row">
                <div class="col-xs-6">
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-venus-mars"></i>
            </div>
            <select class="form-control select2" style="width: 240%;">
            <option selected="selected">Estado Civil</option>
            <option>Casado</option>
            <option>Soltero</option>
          </select>
          </div>
                </div>
        </div>
        </div>
        <!-- /.form group -->

        <!-- Date range -->
        
        <div class="form-group">
        <div class="row">
                <div class="col-xs-6">
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-book"></i>
            </div>
            <select class="form-control select2" style="width: 238%;">
            <option selected="selected">Nivel Educativo</option>
            <option>Tecnologo</option>
            <option>Ingeniero</option>
          </select>
          </div>
          </div>
                </div>
        </div>
        <!-- /.form group -->

        <!-- Date and time range -->
        
        <div class="form-group">
        <div class="row">
                <div class="col-xs-6">
                <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-hospital-o"></i>
            </div>
            <select class="form-control select2" style="width: 240%;">
            <option selected="selected">Eps</option>
            <option>Cajacopieps</option>
            <option>Sura</option>
          </select>
          </div>
          </div>
                </div>
        </div>
      </div>
      
    </div>
    <!-- /.box -->
  </div>
  <center>
    <button type="submit" id="save_data" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Agregar</button>
    <a style="margin-left: 20px;" class="btn btn-danger" href="javascript:history.back()"><i class="fa fa-arrow-left"></i> Regresar</a>   
  </center>
                          
  <!-- /.col (right) -->
</div>
            </div>
            
          </div>

        </div>
      </div>
    </form>
        <!------------------ Fin Modal -------------------------------------->
        
        