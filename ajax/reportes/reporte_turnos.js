
 const showLoading = function() {
	swal({
	  title: 'Cargando...',
	  allowEscapeKey: false,
	  allowOutsideClick: false,
	  timer: 2000,
	  onOpen: () => {
		swal.showLoading();
	  }
	}).then(
	  () => {},
	  (dismiss) => {
		if (dismiss === 'timer') {
			$date1 = $('#date1').val();
			$date2 = $('#date2').val();
			$estado_turno = $('#estado_turno').val();
			$.ajax({
				url: 'acciones/reporte/reporte_turnos.php',
				type: 'POST',
				data: {
					date1: $date1,
					date2: $date2,
					estado_turno: $estado_turno
				},
				success: function(res){
					$('#load_data').html(res);
				}
			});
		}
	  }
	)
  };
  //showLoading();
  
  document.getElementById("fire")
	.addEventListener('click', (event) => {
	  showLoading();
	});


// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
const $btnExportar = document.querySelector("#btnExportar"),
    $tabla = document.querySelector("#pruebadetabla");

$btnExportar.addEventListener("click", function() {
    let tableExport = new TableExport($tabla, {
        exportButtons: false, // No queremos botones
        filename: "Mi tabla de Excel", //Nombre del archivo de Excel
        sheetname: "Mi tabla de Excel", //Título de la hoja
    });
    let datos = tableExport.getExportData();
    let preferenciasDocumento = datos.tabla.xlsx;
    tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
});