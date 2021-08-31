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

     

          <div class="col-xs-12">
            <div id="test1"></div>
            </div>
          <div class="form-group">

          <div class="col-xs-6">
            <div id="test"></div>
            </div>

            <div class="col-xs-6">
           
              <span class="time">
                  <div class="btn btn-primary col-lg-12">
                    <h1>
                      <div id="content">
                        <div class="date">
                          <span id="weekDay" class="weekDay"></span>,
                          <span id="day" class="day"></span> de
                          <span id="month" class="month"></span> del
                          <span id="year" class="year"></span>
                        </div>
                        <div class="clock">
                          <span id="hours" class="hours"></span> :
                          <span id="minutes" class="minutes"></span> :
                          <span id="seconds" class="seconds"></span>
                        </div>
                      </div>
                    </h1>
                  </div>
              


              </span>

              <h3 class="timeline-header"><a href="#">
                  <MARQUEE>Relojito su gestor de turnos</MARQUEE>
                </a></h3>

              <div class="timeline-body">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BwKb4wOSB6Y" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
      </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <span class="time">
    <div class="box box-widget">
      <div class="btn btn-primary col-lg-12">
        <h1>
          <MARQUEE>PARA MAYOR INFORMACION COMUNICARCE A LA LINEA DE ATENCION AL CLIENTE 01800012345</MARQUEE>
        </h1>
      </div>
    </div>
  </span>
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script>
    $(document).ready(function() {
      setInterval(function() {
        $("#test").load("autorefrescar.php");
      }, 3500);
    });
  </script>

<script>
    $(document).ready(function() {
      // setInterval(function() {
      //   $("#test1").load("autorefrescar1.php");
      //   $('#denied')[0].play() 
      //   refresh();
      // }, 4000);

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
setInterval(function() {
    var action = 'ver_turno';
    $.ajax({
      url: 'acciones/turnos/modelo_pantalla.php',
      type: 'POST',
      async: true,
      data: {action:action},
      dataType: 'json',
      success: function (data) {
        var resultado = data;
        // console.log(resultado.respuesta);
        if (resultado.su_turno_es == 'LLAMADO') {
            swal({
              // type: 'success',
              // title: 'Numero de Turno es: '+resultado.pnombre+'',
              showConfirmButton: false,
              width: 800,
              timer: 2000,
              html: '<h1><table class="table table-bordered table-striped">'+
  '<tr style="background-color:#A3CCFF">'+
    '<th class="text-center">PACIENTE</th>'+
    '<th class="text-center">TURNO</th>'+
    '<th class="text-center">MODULO</th>'+
  '</tr>'+
  '<tr>'+
    '<td>'+resultado.pnombre+' '+resultado.papellido+'</td>'+
    '<td>'+resultado.turno+'</td>'+
    '<td>'+resultado.modulo+'</td>'+
  '</tr>'+
'</table></h1>'+
'<audio id="denied" autoplay controls="false" style="display:none"> <source src="sonidos/timbre2.mp3" /> </audio>'
      ,
                
            })
        } else if (resultado.su_turno_es != 'LLAMADO') {
            
        }

    }
      
    });

  }, 8000);

    });
    

  </script>


  <script src="js/clock.js"></script>

</body>

</html>