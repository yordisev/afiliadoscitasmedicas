<form class="form-horizontal" name="crear-afiliados" id="crear-afiliados" method="POST" action="acciones/afiliados/modelo_afiliados.php">
  <!-- Modal -->
  <div id="registrarafiliado" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header box box-primary">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title">AÑADIR USUARIO</h4>
        </div>
        <div class="modal-body">

          <!-- SELECT2 EXAMPLE -->
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-body">

                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-3">
                        <label>Codigo</label>
                        <input type="text" class="form-control" name="codigo_afi" id="codigo_afi" required>
                      </div>
                      <div class="col-xs-3">
                        <label>Tipo Documento</label>
                        <select class="form-control select2" style="width: 100%;" name="documento" id="documento">
                          <option selected="selected">Tipo de Documento</option>
                          <option value="CC">CC</option>
                          <option value="TI">TI</option>
                        </select>
                      </div>
                      <div class="col-xs-3">
                        <label>Numero</label>
                        <input type="text" class="form-control" name="numero" id="numero">
                      </div>
                      <div class="col-xs-3">
                        <label>Fecha Expedicion</label>
                        <input type="text" class="form-control" name="fecha_exp" id="fecha_exp">
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-3">
                        <label>1er Nombre</label>
                        <input type="text" class="form-control" name="pnombre" id="pnombre">
                      </div>
                      <div class="col-xs-3">
                        <label>2do Nombre</label>
                        <input type="text" class="form-control" name="snombre" id="snombre">
                      </div>
                      <div class="col-xs-3">
                        <label>1er Apellido</label>
                        <input type="text" class="form-control" name="papellido" id="papellido">
                      </div>
                      <div class="col-xs-3">
                        <label>2do Apellido</label>
                        <input type="text" class="form-control" name="sapellido" id="sapellido">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-4">
                        <label>Fecha Nacimiento</label>
                        <input type="date" class="form-control" name="fechan" id="fechan">
                      </div>
                      <div class="col-xs-4">
                        <label>Sexo</label>
                        <select class="form-control select2" style="width: 100%;" name="sexo" id="sexo">
                          <option selected="selected">Alabama</option>
                          <option value="femenino">Femenino</option>
                          <option value="masculino">Masculino</option>
                        </select>
                      </div>
                      <div class="col-xs-4">
                        <label>Tipo Sanguineo</label>
                        <select class="form-control select2" style="width: 100%;" name="tsangre" id="tsangre">
                          <option selected="selected">O+</option>
                          <option value="A-">A-</option>
                          <option value="OA+">OA+</option>
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

              <div class="box box-primary">
                <div class="box-body">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-3" style="width: 50%;">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" placeholder="Telefono" name="telefono" id="telefono">
                        </div>
                      </div>
                      <div class="col-xs-3" style="width: 50%;">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" placeholder="Celular" name="celular" id="celular">
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
                          <input type="text" class="form-control" placeholder="Correo" name="correo" id="correo">
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
                          <select class="form-control select2" style="width: 240%;" name="departamento" id="departamento">
                            <option selected="selected">Departamento</option>
                            <option value="ATLANTICO">ATLANTICO</option>
                            <option value="BOLIVAR">BOLIVAR</option>
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
                          <select class="form-control select2" style="width: 240%;" name="municipio" id="municipio">
                            <option selected="selected">Municipio</option>
                            <option value="BARRANQUILLA">BARRANQUILLA</option>
                            <option value="CARTAGENA">CARTAGENA</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-6">
                        <input type="text" class="form-control" placeholder="Barrio" name="barrio" id="barrio">
                      </div>
                      <div class="col-xs-6">
                        <input type="text" class="form-control" placeholder="Direccion" name="direccion" id="direccion">
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
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-venus-mars"></i>
                          </div>
                          <select class="form-control select2" style="width: 240%;" name="estado_civil" id="estado_civil">
                            <option selected="selected">Estado Civil</option>
                            <option value="Casado">Casado</option>
                            <option value="Soltero">Soltero</option>
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
                            <i class="fa fa-book"></i>
                          </div>
                          <select class="form-control select2" style="width: 238%;" name="nivel_educativo" id="nivel_educativo">
                            <option selected="selected">Nivel Educativo</option>
                            <option value="Tecnologo">Tecnologo</option>
                            <option value="Tecnologo">Ingeniero</option>
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
                            <i class="fa fa-hospital-o"></i>
                          </div>
                          <select class="form-control select2" style="width: 240%;" name="eps" id="eps">
                            <option selected="selected">Eps</option>
                            <option value="Cajacopieps">Cajacopieps</option>
                            <option value="sura">Sura</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.box -->
            </div>
            <input type="hidden" name="registro" value="nuevo">
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