<?php
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));
$estado_turno = $_POST['estado_turno'];

$YWHERE=" WHERE DATE_FORMAT(tiempo_ingreso, '%Y-%m-%d') BETWEEN '$date1' AND '$date2'";


#Conectare a la base de datos
require_once "../../config/database.php";

$q_book = $conn->query("SELECT * FROM db_turnos $YWHERE and estado_turno='$estado_turno' ORDER BY pnombre ASC") or die(mysqli_error($conn));
$resultado = $q_book->num_rows;
if($resultado > 0){
	while($datos = $q_book->fetch_array()){
	?>

	<tr>
		<td class="text-center"><?php echo $datos['documento']?></td>
		<td class="text-center"><?php echo $datos['pnombre']?></td>
		<td class="text-center"><?php echo $datos['papellido']?></td>
		<td class="text-center"><?php echo $datos['tipo_tramite']?></td>
		<td class="text-center"><?php echo $datos['estado_turno']?></td>
		<td class="text-center"><?php echo $datos['usuario_atendio']?></td>
		<td class="text-center"><?php echo date("d/m/Y", strtotime($datos['tiempo_ingreso']))?></td>
	</tr>

	<?php
	}
}else{
		echo '
		<tr>
			<td colspan = "4" class="text-center">No se encontraron registros</td>
		</tr>
		';
}
	?>