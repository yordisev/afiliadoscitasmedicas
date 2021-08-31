$(document).ready(function(){

$('#crear-administrador').on('submit', function(e){
    e.preventDefault();
var datos = $(this).serializeArray();
$.ajax({
    type: $(this).attr('method'),
    data: datos,
    url: $(this).attr('action'),
    dataType: 'json',
    success: function(data){
        var resultado = data;
        if (resultado.respuesta == 'exito'){
            $('#registrarusuario').modal('hide');
    swal(
        'Correcto',
        'El administrador se creo correctamente',
        'success'
    ).then(function(){ 
        location.reload();
        });
}   else {
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
$('#editar-administrador').on('submit', function(e){
    e.preventDefault();
var datos = $(this).serializeArray();
$.ajax({
    type: $(this).attr('method'),
    data: datos,
    url: $(this).attr('action'),
    dataType: 'json',
    success: function(data){
        var resultado = data;
        if (resultado.respuesta == 'exitoso'){
            $('#editaruser').modal('hide');
    swal(
        'Correcto',
        'El administrador se Actualizo correctamente',
        'success'
    ).then(function(){ 
        location.reload();
        });
}   else {
    swal(
        'Error',
        'Hubo un error',
        'error'
    )
}     
    }
})
});
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
$('#editar-password').on('submit', function(e){
    e.preventDefault();
var datos = $(this).serializeArray();
$.ajax({
    type: $(this).attr('method'),
    data: datos,
    url: $(this).attr('action'),
    dataType: 'json',
    success: function(data){
        var resultado = data;
        if (resultado.respuesta == 'exitoso'){
    swal(
        'Correcto',
        'Clave Actualizada correctamente',
        'success'
    )
}   else {
    swal(
        'Error',
        'Hubo un error',
        'error'
    )
}     
    }
})
});
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

    $('#editaruser').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Botón que activó el modal
        var usuario = button.data('usuario') // Extraer la información de atributos de datos
        var cedula = button.data('cedula') // Extraer la información de atributos de datos
        var nombre = button.data('nombre') // Extraer la información de atributos de datos
        var especialidad = button.data('especialidad') // Extraer la información de atributos de datos
        var tramite = button.data('tramite') // Extraer la información de atributos de datos
        var modulo = button.data('modulo') // Extraer la información de atributos de datos
        var status = button.data('status') // Extraer la información de atributos de datos
        var nivel = button.data('nivel') // Extraer la información de atributos de datos

        var modal = $(this)
        modal.find('.modal-title').text('Modificar nombre: ' + nombre)
        modal.find('.modal-body #usuario').val(usuario)
        modal.find('.modal-body #cedula').val(cedula)
        modal.find('.modal-body #nombre').val(nombre)
        modal.find('.modal-body #especialidad').val(especialidad)
        modal.find('.modal-body #tramite').val(tramite)
        modal.find('.modal-body #modulo').val(modulo)
        modal.find('.modal-body #status').val(status)
        modal.find('.modal-body #nivel').val(nivel)
    })


// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@



});