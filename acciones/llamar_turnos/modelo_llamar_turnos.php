<?php 
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if ($_POST['action'] == 'llamar_turno_nuevo'){
 
    $estado_turno = 'ACTIVO';  
    $usuario = $_POST["usuario"]; 
    $modulo = $_POST["modulo"]; 
    $tramite = $_POST["tramite"]; 
    require_once('../../config/database.php');
   try {
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sumar saldo en caja @@@@@@@@@@@@@@@@@@@@
$stmt = $conn->prepare("SELECT turno FROM db_turnos WHERE tipo_tramite = ? AND estado_turno = ? ORDER BY tiempo_ingreso DESC LIMIT 1");
$stmt -> bind_param('ss', $tramite, $estado_turno);
$stmt -> execute();
$stmt -> store_result();
$stmt -> bind_result($llamar_turno);
$stmt -> fetch();


// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sasignar turno numero @@@@@@@@@@@@@@@@@@
$ejecutar = $conn->prepare("UPDATE  db_turnos  SET estado_turno = 'LLAMADO', usuario_atendio = ?, modulo = ?, tiempo_atender = NOW() WHERE turno = ?");
$ejecutar->bind_param("sss", $usuario,$modulo, $llamar_turno);
$ejecutar->execute();
// print_r($modulo);
if ($ejecutar->affected_rows){
    $respuesta = array(
        'respuesta' => 'exitoso',
        'turno_actualizado' => $ejecutar->insert_id
    );
}else {
    $respuesta = array(
        'respuesta' => 'error'
    );
}
$ejecutar->close();
$conn->close();


   } catch (Exception $e) {
       echo " Error " . $e->getMessage();
   }

   die(json_encode($respuesta));
}
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if ($_POST['action'] == 'atender_turno_nuevo'){
 
    $turno = $_POST["turno"]; 
    require_once('../../config/database.php');
   try {

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sasignar turno numero @@@@@@@@@@@@@@@@@@
$ejecutar = $conn->prepare("UPDATE  db_turnos  SET estado_turno = 'ATENDIENDO', tiempo_salida = NOW() WHERE turno = ?");
$ejecutar->bind_param("s",$turno);
$ejecutar->execute();
// print_r($modulo);
if ($ejecutar->affected_rows){
    $respuesta = array(
        'respuesta' => 'exitoso',
        'turno_actualizado' => $ejecutar->insert_id
    );
}else {
    $respuesta = array(
        'respuesta' => 'error'
    );
}
$ejecutar->close();
$conn->close();


   } catch (Exception $e) {
       echo " Error " . $e->getMessage();
   }

   die(json_encode($respuesta));
}

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if ($_POST['action'] == 'finalizar_turno_nuevo'){
 
    $turno = $_POST["turno"]; 
    require_once('../../config/database.php');
   try {

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sasignar turno numero @@@@@@@@@@@@@@@@@@
$ejecutar = $conn->prepare("UPDATE  db_turnos  SET estado_turno = 'FINALIZADO', tiempo_salida = NOW() WHERE turno = ?");
$ejecutar->bind_param("s",$turno);
$ejecutar->execute();
// print_r($modulo);
if ($ejecutar->affected_rows){
    $respuesta = array(
        'respuesta' => 'exitoso',
        'turno_actualizado' => $ejecutar->insert_id
    );
}else {
    $respuesta = array(
        'respuesta' => 'error'
    );
}
$ejecutar->close();
$conn->close();


   } catch (Exception $e) {
       echo " Error " . $e->getMessage();
   }

   die(json_encode($respuesta));
}
?>
