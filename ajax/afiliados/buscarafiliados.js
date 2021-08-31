$(document).ready(function () {

    // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

    $('#editarafiliado').on('show.bs.modal', function (event) {
        $('#numero').attr('readonly')
        $('#fecha_exp').attr('readonly')
        $('#fechan').attr('readonly')
        $('#pnombre').attr('readonly')
        $('#snombre').attr('readonly')
        $('#papellido').attr('readonly')
        $('#sapellido').attr('readonly')
        $('#sexo').attr('readonly')
        $('#tsangre').attr('readonly')
        $('#telefono').attr('readonly')
        $('#celular').attr('readonly')
        $('#correo').attr('readonly')
        $('#departamento').attr('readonly')
        $('#municipio').attr('readonly')
        $('#barrio').attr('readonly')
        $('#direccion').attr('readonly')
        $('#estado_civil').attr('readonly')
        $('#nivel_educativo').attr('readonly')
        $('#eps').attr('readonly')
        var numero = $('#numero').val();
        var fecha_exp = $('#fecha_exp').val();
        var fechan = $('#fechan').val();
        var pnombre = $('#pnombre').val();
        var snombre = $('#snombre').val();
        var papellido = $('#papellido').val();
        var sapellido = $('#sapellido').val();
        var sexo = $('#sexo').val();
        var tsangre = $('#tsangre').val();
        var telefono = $('#telefono').val();
        var celular = $('#celular').val();
        var correo = $('#correo').val();
        var departamento = $('#departamento').val();
        var municipio = $('#municipio').val();
        var barrio = $('#barrio').val();
        var direccion = $('#direccion').val();
        var estado_civil = $('#estado_civil').val();
        var nivel_educativo = $('#nivel_educativo').val();
        var eps = $('#eps').val();

        var modal = $(this)
        modal.find('.modal-body #numero').val(numero)
        modal.find('.modal-body #fecha_exp').val(fecha_exp)
        modal.find('.modal-body #fechan').val(fechan)
        modal.find('.modal-body #pnombre').val(pnombre)
        modal.find('.modal-body #snombre').val(snombre)
        modal.find('.modal-body #papellido').val(papellido)
        modal.find('.modal-body #sapellido').val(sapellido)
        modal.find('.modal-body #sexo').val(sexo)
        modal.find('.modal-body #tsangre').val(tsangre)
        modal.find('.modal-body #telefono').val(telefono)
        modal.find('.modal-body #celular').val(celular)
        modal.find('.modal-body #correo').val(correo)
        modal.find('.modal-body #departamento').val(departamento)
        modal.find('.modal-body #municipio').val(municipio)
        modal.find('.modal-body #barrio').val(barrio)
        modal.find('.modal-body #direccion').val(direccion)
        modal.find('.modal-body #estado_civil').val(estado_civil)
        modal.find('.modal-body #nivel_educativo').val(nivel_educativo)
        modal.find('.modal-body #eps').val(eps)

        
        
        
    })

    
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
  
  $('#buscarporafiliado').keyup(function(e) {
      e.preventDefault();
      var afiliados = $(this).val();
      if (afiliados == "") {
        //Bloquear Cantidad
        $('#codigo').attr('disabled', 'disabled');
        // Ocultar Boto Agregar
        $('.ocultartodo').slideUp();
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
            $('.ocultartodo').hide();
          }else{
    
            var info = JSON.parse(response);
            $('#numero').val(info.numero).slideDown();
            $('#fecha_exp').val(info.fecha_exp).slideDown();
            $('#fechan').val(info.fechan).slideDown();
            $('#pnombre').val(info.pnombre).slideDown();
            $('#snombre').val(info.snombre).slideDown();
            $('#papellido').val(info.papellido).slideDown();
            $('#sapellido').val(info.sapellido).slideDown();
            $('#sexo').val(info.sexo).slideDown();
            $('#tsangre').val(info.tsangre).slideDown();
            $('#telefono').val(info.telefono).slideDown();
            $('#celular').val(info.celular).slideDown();
            $('#correo').val(info.correo).slideDown();
            $('#departamento').val(info.departamento).slideDown();
            $('#municipio').val(info.municipio).slideDown();
            $('#barrio').val(info.barrio).slideDown();
            $('#direccion').val(info.direccion).slideDown();
            $('#estado_civil').val(info.estado_civil).slideDown();
            $('#nivel_educativo').val(info.nivel_educativo).slideDown();
            $('#eps').val(info.eps).slideDown();
            $('#fecha_registro').val(info.fecha_registro).slideDown();
            $('#sexo').val(info.sexo).slideDown();

            var edad = fechan - fecha_exp;
            $('#edad').val(edad).slideDown();
            // Mostar boton Agregar
            $('.ocultartodo').show();
            
    
          }
        },
        error: function(error) {
        }
      });
      $('.labelpnombre').slideUp();
    
      }
    });
  
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
     
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Mostrar Mas"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Mostrar Menos"; 
            moreText.style.display = "inline";
          }
        }