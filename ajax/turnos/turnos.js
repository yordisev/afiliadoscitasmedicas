$(document).ready(function () {
  buscarparaturno();
  // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

// generar turno triaje
$('#generar_turno_triaje').click(function(e) {
  e.preventDefault();
    var numero = $('#numero').val();
    var pnombre = $('#pnombre').val();
    var papellido = $('#papellido').val();
    var action = 'generar_turno_triaje';
    $.ajax({
      url: 'acciones/turnos/modelo_turnos.php',
      type: 'POST',
      async: true,
      data: {action:action,numero:numero,pnombre:pnombre,papellido:papellido},
      dataType: 'json',
      success: function (data) {
        var resultado = data;
        // console.log(resultado.respuesta);
        if (resultado.respuesta == 'exito') {
            swal({
              type: 'success',
              title: 'Numero de Turno:',
              // text:'prueba',
              html:'<div class="btn btn-primary">'+
              '<span  class="info-box-number"><h1>'+resultado.su_turno_es+'</h1></span>'+
            '</div>'
            }).then(function(){ 
                location.reload();
                });
        } else {
            swal(
                'Error',
                'Turno no registrado',
                'error'
            )
        }

    }
      
    });
});
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

// generar turno medicina
$('#generar_turno_medicina').click(function(e) {
  e.preventDefault();
    var numero = $('#numero').val();
    var pnombre = $('#pnombre').val();
    var papellido = $('#papellido').val();
    var action = 'generar_turno_medicina';
    $.ajax({
      url: 'acciones/turnos/modelo_turnos.php',
      type: 'POST',
      async: true,
      data: {action:action,numero:numero,pnombre:pnombre,papellido:papellido},
      dataType: 'json',
      success: function (data) {
        var resultado = data;
        
        if (resultado.respuesta == 'exito') {
          swal({
            type: 'success',
            title: 'Numero de Turno:',
            // text:'prueba',
            html:'<div class="btn btn-success">'+
            '<span  class="info-box-number"><h1>'+resultado.turno_numero+'</h1></span>'+
          '</div>'
          }).then(function(){ 
                location.reload();
                });
        } else {
            swal(
                'Error',
                'Turno no registrado',
                'error'
            )
        }

    }
      
    });
});
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 
// generar turno documento
$('#generar_turno_documento').click(function(e) {
  e.preventDefault();
    var numero = $('#numero').val();
    var pnombre = $('#pnombre').val();
    var papellido = $('#papellido').val();
    var action = 'generar_turno_documento';
    $.ajax({
      url: 'acciones/turnos/modelo_turnos.php',
      type: 'POST',
      async: true,
      data: {action:action,numero:numero,pnombre:pnombre,papellido:papellido},
      dataType: 'json',
      success: function (data) {
        var resultado = data;
        
        if (resultado.respuesta == 'exito') {
          swal({
            type: 'success',
            title: 'Numero de Turno:',
            // text:'prueba',
            html:'<div class="btn bg-blue">'+
            '<span  class="info-box-number"><h1>'+resultado.turno_numero+'</h1></span>'+
          '</div>'
          }).then(function(){ 
                location.reload();
                });
        } else {
            swal(
                'Error',
                'Turno no registrado',
                'error'
            )
        }

    }
      
    });
});
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  
    // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    // $('#generar-turno-triaje').on('submit', function (e) {
    //     e.preventDefault();
    //     var datos = $(this).serializeArray();
    //     $.ajax({
    //         type: $(this).attr('method'),
    //         data: datos,
    //         url: $(this).attr('action'),
    //         dataType: 'json',
    //         success: function (data) {
    //             var resultado = data;
                
    //             if (resultado.respuesta == 'exito') {
    //                 $('#turnodocumento').modal('hide');
    //                 swal(
    //                     'Correcto',
    //                     'Turno Triaje generado Correctamente',
    //                     'success'
    //                 ).then(function(){ 
    //                     location.reload();
    //                     });
    //             } else {
    //                 swal(
    //                     'Error',
    //                     'Turno no registrado',
    //                     'error'
    //                 )
    //             }

    //         }
    //     })

    // });

});

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

$('#buscarporcodigo').keyup(function(e) {
    e.preventDefault();
    var afiliados = $(this).val();
    if (afiliados == "") {
      // $('#numero').html('-');
      // $('#pnombre').val('-');
      // $('#snombre').val('-');
      // $('#papellido').val('-');
      // $('#sapellido').val('-');
  
      //Bloquear Cantidad
      $('#codigo').attr('disabled', 'disabled');
      // Ocultar Boto Agregar
      $('.labelpnombre').slideUp();
   $('.botonesgenerarturno').slideUp();
    }
    var action = 'buscarafiliado';
    if (afiliados != '') {
    $.ajax({
      url: 'buscarconsulta.php',
      type: "POST",
      async: true,
      data: {action:action,numeros:afiliados},
      success: function(response){
        if(response == 0) {
          // $('#numero').slideUp();
          // $('#pnombre').slideUp();
  
          //Bloquear Cantidad
          $('#codigo').attr('disabled','disabled');
          // Ocultar Boto Agregar
          $('.labelpnombre').slideUp();

          // mostrar para crear afiliado
          $('.labelcrearafiliado').slideDown();
  
  
        }else{
  
          var info = JSON.parse(response);
          $('#numero').val(info.numero).slideDown();
          $('#pnombre').val(info.pnombre).slideDown();
          $('#snombre').val(info.snombre).slideDown();
          $('#papellido').val(info.papellido).slideDown();
          $('#sapellido').val(info.sapellido).slideDown();
          // Activar Cantidad
          $('#codigo').removeAttr('disabled');
          // Mostar boton Agregar
          $('.labelpnombre').slideDown();
          
        // ocultar para crear
        $('.labelcrearafiliado').slideUp();
  
        }
      },
      error: function(error) {
      }
    });
    // $('#pnombre').html('-'); para colocar en los span
    // $('#snombre').val('0'); para colocar en los inputs
  
  
    //Bloquear Cantidad
    $('#codigo').attr('disabled','disabled');
    // Ocultar Boto Agregar
    $('.labelpnombre').slideUp();
   $('.botonesgenerarturno').slideUp();
  
    }
  });

      // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@


      function buscarparaturno(){
        var afiliados = $('#numerobuscar').val();
        if (afiliados == "") {

        }
        var action = 'buscarafiliado';
        if (afiliados != '') {
        $.ajax({
          url: 'buscarconsulta.php',
          type: "POST",
          async: true,
          data: {action:action,numeros:afiliados},
          success: function(response){
            if(response == 0) {
              $('.ocultarresultado').hide();
      
            }else{
      
              var info = JSON.parse(response);
              $('#numero').val(info.numero);
              $('#pnombre').val(info.pnombre);
              $('#papellido').val(info.papellido);
              $('.ocultarresultado').show();

              $('.ocultarboton').hide();

      
            }
          }
        });
      
        }
      };