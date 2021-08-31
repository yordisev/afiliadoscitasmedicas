<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=Reporte_turnos.xls');
    require_once "../../config/database.php";
    $fecha1 = date("Y-m-d", strtotime($_POST['fecha1']));
    $fecha2 = date("Y-m-d", strtotime($_POST['fecha2']));

    if(isset($_POST['generar_reporte']))
    {
	$query="SELECT * FROM db_turnos WHERE DATE_FORMAT(tiempo_ingreso, '%Y-%m-%d') BETWEEN '$fecha1' AND '$fecha2'";
	$result=mysqli_query($conn, $query);
    
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Telefono</th>
		<th>Ciudad</th>
	</tr>
	<?php

		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['documento']; ?></td>
					<td><?php echo $row['pnombre']; ?></td>
					<td><?php echo $row['papellido']; ?></td>
					<td><?php echo $row['tipo_tramite']; ?></td>
					<td><?php echo $row['estado_turno']; ?></td>
				</tr>	

			<?php
		}
    }
	?>
</table>