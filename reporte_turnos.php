<?php
include('includes/header.php');
?>
    <section class="content-header">
        <h1>
            Reporte Turnos
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <section class="content">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                            <div class="box-body">
                                <h3 class="text-primary">REPORTE DE TURNOS</h3>
                                <hr style="border-top:1px dotted #000;" />
                                <div class="form-inline">
                                    <label>Desde:</label>
                                    <input type="date" class="form-control" placeholder="Inicio" id="date1" />
                                    <label>Hasta</label>
                                    <input type="date" class="form-control" placeholder="Final" id="date2" />
                                    <label>Estado</label>
                                    <select class="form-control" id="estado_turno">
      <option value="ACTIVO">Activo</option>
      <option value="FINALIZADO">Finalizado</option>
    </select>
    <button class="btn btn-primary" id="fire"><span class="glyphicon glyphicon-search"></span></button>
    <!-- <button type="submit" class="btn btn-success" id="btnExportar"><span class="fa fa-file-excel-o"></span></button> -->
    <form method="post" class="form-control" action="acciones/reporte/descargar_reporte.php">
		<input class="form-control" type="date" name="fecha1">
		<input class="form-control" type="date" name="fecha2">
		<input type="submit" class="btn btn-success" name="generar_reporte">
		</form>
                                </div>
                                <br /><br />
                                <div class="table-responsive">
                                    <div style="width:auto; height:280px; overflow:auto;">
                                        <table class="table table-bordered" id="pruebadetabla">
                                            <thead>
                                                <tr class="btn-primary">
                                                    <th class="text-center">DOCUMENTO</th>
                                                    <th class="text-center">NOMBRE</th>
                                                    <th class="text-center">APELLIDO</th>
                                                    <th class="text-center">TRAMITE</th>
                                                    <th class="text-center">ESTADO DEL TURNO</th>
                                                    <th class="text-center">USUARIO QUE ATENDIO</th>
                                                    <th class="text-center">FECHA</th>
                                                </tr>
                                            </thead>

                                            <tbody id="load_data">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <script src="ajax/reportes/reporte_turnos.js"></script>
    <?php include('includes/footer.php'); ?>