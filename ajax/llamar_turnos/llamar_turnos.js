$(document).ready(function () {


    // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

    $('#llamar_turno_nuevo').on('click', function (e) {
        e.preventDefault();
        var usuario = $('#usuario').html();
        var modulo = $('#modulo').html();
        var tramite = $('#tramite').html();
        var action = 'llamar_turno_nuevo';

        swal({
            title: 'Esta seguro?',
            text: "Llamar turno",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3885d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Llamar turno!',
            cancelButtonText: 'Cancelar'
        }).then(function (res) {
            // console.log(usuario);
            if (res) {
                  $.ajax({
                    url: 'acciones/llamar_turnos/modelo_llamar_turnos.php',
                    type: 'POST',
                    async: true,
                    data: {action:action,tramite:tramite,modulo:modulo,usuario:usuario},
                    dataType: 'json',
                success:function(data){
                    var resultado = data;
                    if (resultado.respuesta == 'exitoso'){
                        swal(
                            'Llamado',
                            'Turno llamado Correctamente',
                            'success'
                        ).then(function(){ 
                            location.reload();
                            });
                    } else{
                        swal(
                            'Error',
                            'Hubo un error',
                            'error'
                        )
                    }

                }

            })
            }
           



        });

    });

 // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

 $('#atender_turno_nuevo').on('click', function (e) {
    e.preventDefault();
    var turno = $('#turno').html();
    var action = 'atender_turno_nuevo';

    swal({
        title: 'Esta seguro?',
        text: "Atender Turno",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3885d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Atender turno!',
        cancelButtonText: 'Cancelar'
    }).then(function (res) {
        // console.log(usuario);
        if (res) {
              $.ajax({
                url: 'acciones/llamar_turnos/modelo_llamar_turnos.php',
                type: 'POST',
                async: true,
                data: {action:action,turno:turno},
                dataType: 'json',
            success:function(data){
                var resultado = data;
                if (resultado.respuesta == 'exitoso'){
                    swal(
                        'Llamado',
                        'Turno llamado Correctamente',
                        'success'
                    ).then(function(){ 
                        location.reload();
                        });
                } else{
                    swal(
                        'Error',
                        'Hubo un error',
                        'error'
                    )
                }

            }

        })
        }
       



    });

});
  // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

$('#finalizar_turno_nuevo').on('click', function (e) {
    e.preventDefault();
    var turno = $('#turno').html();
    var action = 'finalizar_turno_nuevo';

    swal({
        title: 'Esta seguro?',
        text: "Finalizar Turno",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3885d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Finalizar turno!',
        cancelButtonText: 'Cancelar'
    }).then(function (res) {
        // console.log(usuario);
        if (res) {
              $.ajax({
                url: 'acciones/llamar_turnos/modelo_llamar_turnos.php',
                type: 'POST',
                async: true,
                data: {action:action,turno:turno},
                dataType: 'json',
            success:function(data){
                var resultado = data;
                if (resultado.respuesta == 'exitoso'){
                    swal(
                        'Finalizado',
                        'Turno Finalizado Correctamente',
                        'success'
                    ).then(function(){ 
                        location.reload();
                        });
                } else{
                    swal(
                        'Error',
                        'Hubo un error',
                        'error'
                    )
                }

            }

        })
        }
       



    });

});
  // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
$('#estado_turno').attr('readonly') 
   
    var estado_turno = $('#estado_turno').val();
  
    console.log(estado_turno);
        if(estado_turno == '') {
  $('.llamar_turno').show();
  $('.atender_turno').hide();
  $('.finalizar_turno').hide();
  
        } else {

            if(estado_turno == 'LLAMADO') {
  $('.llamar_turno').hide();
  $('.atender_turno').show();
  $('.finalizar_turno').hide();
            } else {
                if(estado_turno == 'ATENDIENDO') {
          $('.llamar_turno').hide();
          $('.atender_turno').hide();
          $('.finalizar_turno').show();
                    }
            }
        }
   
  

  

  

      // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

});


 


