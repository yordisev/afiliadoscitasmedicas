<?php 
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if ($_POST['action'] == 'ver_turno'){
    $tipo_llamado = 'LLAMADO';
    require_once('../../config/database.php');
   try {

// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sumar saldo en caja @@@@@@@@@@@@@@@@@@@@
$stmt = $conn->prepare("SELECT estado_turno, pnombre,papellido, turno, modulo FROM db_turnos WHERE estado_turno = ?");
$stmt -> bind_param('s', $tipo_llamado);
$stmt -> execute();
$stmt -> store_result();
$stmt -> bind_result($turnotriaje,$pnombre,$papellido,$turno,$modulo);
$stmt -> fetch();

$datoturno = $turnotriaje;
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sasignar turno numero @@@@@@@@@@@@@@@@@@
// print_r($datoturno);
$id_registro = $stmt->id;
if ($id_registro > 0 ){
    $respuesta = array(
        'pnombre' => $pnombre,
        'papellido' => $papellido,
        'turno' => $turno,
        'modulo' => $modulo,
        'su_turno_es' => $datoturno
    );
}else{
     
    $respuesta = array(
        'respuesta' => 'error',
    );

}
$stmt->close();
$conn->close();


   } catch (Exception $e) {
       echo " Error " . $e->getMessage();
   }

   die(json_encode($respuesta));
}
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@