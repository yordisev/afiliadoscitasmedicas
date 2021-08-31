$(document).ready(function() {
  var dataTable = $('#dt_afiliados').DataTable( {
    
   "language":	{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
      "sFirst":    "Primero",
      "sLast":     "Último",
      "sNext":     "Siguiente",
      "sPrevious": "Anterior"
    },
    "oAria": {
      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
  },

    "processing": true,
    "serverSide": true,
    "ajax":{
      url :"acciones/afiliados/consulta_afiliados.php", // json datasource
      type: "post",  // method  , by default get
      error: function(){  // error handling
        $(".lookup-error").html("");
        $("#dt_afiliados").append('<tbody class="employee-grid-error"><tr><th colspan="3">No hay datos en el servidor</th></tr></tbody>');
        $("#lookup_processing").css("display","none");
        
      }
    }
  } );

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  
  $('#crear-afiliados').on('submit', function (e) {
    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
        type: $(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        success: function (data) {
            var resultado = data;
            if (resultado.respuesta == 'exito') {
                $('#registrarafiliado').modal('hide');
                swal(
                    'Correcto',
                    'Afiliado registrado correctamente',
                    'success'
                ).then(function(){ 
                    location.reload();
                    });
            } else {
                swal(
                    'Error',
                    'Hubo un error en el registro',
                    'error'
                )
            }

        }
    })

});

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  $('#editar-proveedor').on('submit', function (e) {
    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
        type: $(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        success: function (data) {
            var resultado = data;
            if (resultado.respuesta == 'exitoso') {
                $('#editarproveedor').modal('hide');
                swal(
                    'Correcto',
                    'El Producto se Actualizo correctamente',
                    'success' 
                ).then(function(){ 
                    location.reload();
                    });
                
            } else {
                swal(
                    'Error',
                    'Hubo un error',
                    'error'
                )
            }

        }
    })



});
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

} );