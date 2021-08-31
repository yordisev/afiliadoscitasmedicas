<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="description" content="Relojito Yordis">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yordis">
    <meta name="thema-color" content="#0096BB">
    <link rel="shortcut icon" href="img/favico.ico" type="image/x-icon">
  <title>Relojito|Pantalla</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/miestilo.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="bootstrap/css/sweetalert2.min.css">
  <script src="bootstrap/js/sweetalert2.all.min.js"></script>
</head>

<body class="hold-transition login-page">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-body">

      
<script type="text/javascript">
 var answer_mode = 0;
 function clear1() {
     document.forms["calculator"].display.value = "";
 }
 
//  function clear() {
//      clear1();
//  }
 function number(ch) {
     if (answer_mode) {
     clear1();
     answer_mode = 0;
 
     }
     document.forms["calculator"].display.value += ch;
     var hoja=ch
 }
 
 </script>
 <h1 class="title text-center">INGRESE SU NUMERO DE DOCUMENTO <br> <hr> </h1>
 <section>
      <div class="col-xs-6">
        <div class="box box-primary">
          <div class="box-body">
 <form name="calculator" method="get" action="acciones/usuarios/modelo_usuario.php">
 
 <div class="form-group">
 <div class="row">
 <h1>
       <div class="col-xs-12">
           <input class="btn btn-primary" id="numerobuscar" type="text" name="display" size="40" style="font-size: 50pt; width:450px; height:100px;">
          
       </div>

      </h1>
 </div>
 </div>
 
 
 
 <table>
 
 <tbody>
 
 <tr>
 
 
 
 <tr>
 <td>  <input value=" 7 " onclick="number(7)" type="button" style='width:150px; height:100px;font-size:40px;' class="btn btn-primary"></td>
 <td>  <input value=" 8 " onclick="number(8)" type="button" style='width:150px; height:100px;font-size:40px;'class="btn btn-primary"></td>
 <td>  <input value=" 9 " onclick="number(9)" type="button" style='width:150px; height:100px;font-size:40px;'class="btn btn-primary"></td>
 </tr>
 
 <tr>
 <td>  <input value=" 4 " onclick="number(4)" type="button" style='width:150px; height:100px;font-size:40px;' class="btn btn-primary"></td>
 <td>  <input value=" 5 " onclick="number(5)" type="button" style='width:150px; height:100px;font-size:40px;' class="btn btn-primary"></td>
 <td>  <input value=" 6 " onclick="number(6)" type="button" style='width:150px; height:100px;font-size:40px;' class="btn btn-primary"></td>
 </tr>
 
 
 <tr>
 <td>  <input value=" 1 " onclick="number(1)" type="button" style='width:150px; height:100px;font-size:40px;' class="btn btn-primary"></td>
 <td>  <input value=" 2 " onclick="number(2)" type="button" style='width:150px; height:100px;font-size:40px;' class="btn btn-primary"></td>
 <td>  <input value=" 3 " onclick="number(3)" type="button" style='width:150px; height:100px;font-size:40px;' class="btn btn-primary"></td>
 </tr>
 
 
 
 <td><input value=" 0 " onclick="number(0)" type="button" style='width:150px; height:100px;font-size:40px;' class="btn btn-primary"></td>
 
 <td></td>
 
 <td>  <input value="Limpiar" onclick="clear1()" type="button" style='width:150px; height:100px;font-size:40px;' class="btn btn-danger"></td>
 
 <td></td>
 </tr>

 
 </tbody>
 </table>
 </form>
</div>
</div>
</div>
 </section>
 <section>
      <div class="col-xs-6">
        <div class="box box-primary">
          <div class="box-body">
          <div class="text-center">
          <button  class="btn btn-primary ocultarboton" id="btn_buscar" onclick="buscarparaturno();" type="submit" size="40" style="font-size: 50pt; width:450px; height:100px;">INGRESAR <i class="fa fa-arrow-circle-right"></i></button>
         
          </div>
          <div style="display: none;" class="ocultarresultado">
          <!-- <button  class="btn btn-danger" onclick="location.reload()" type="submit" size="40" style="font-size: 50pt; width:450px; height:100px;">REGRESAR <i class="fa fa-times-circle"></i></button> -->
          
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

          <div class="form-group">
          <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
          <a href="#" id="generar_turno_triaje" class="btn btn-primary">
            <span class="info-box-icon"><i class="fa fa-heartbeat"></i></span>
            <div class="info-box-content">
              <span  class="info-box-number"><h1>Triaje</h1></span>
            </div>
          </a>
        </div>
</div>
</div>
<div class="form-group">
          <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
        <a href="#" id="generar_turno_medicina" class="btn btn-success">
          <span class="info-box-icon"><i class="fa fa-h-square"></i></span>

          <div class="info-box-content">
            <span  class="info-box-number"><h1>Medicina</h1></span>
          </div>
        </a>
      </div>
      </div>
      </div>
      <div class="form-group">
          <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-4">
        <a href="#" id="generar_turno_documento" class="btn bg-blue">
          <span class="info-box-icon"><i class="fa   fa-file-text-o"></i></span>
          <div class="info-box-content">
            <span  class="info-box-number"><h1>Documentos</h1></span>
          </div>
        </a>
      </div>
      </div>
      </div>

     </div>   <!--  oculatar resulatdo -->


      </div>
        </div>
        </div>
        </section> 
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="ajax/turnos/turnos.js"></script>

</body>

</html>