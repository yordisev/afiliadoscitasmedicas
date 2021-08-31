<?php 
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if ($_POST['action'] == 'generar_turno_triaje'){

  

    $tipo_tramite = 'TRIAJE'; 
    $estado_turno = 'ACTIVO'; 
    // $turno = $_POST["turno"]; 
    $numero = $_POST["numero"]; 
    $pnombre = $_POST["pnombre"]; 
    $papellido = $_POST["papellido"]; 
    require_once('../../config/database.php');
   try {

   // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ generar turno@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

   $query_id = mysqli_query($conn, "SELECT RIGHT(turno,3) as turno FROM db_turnos WHERE tipo_tramite='TRIAJE'
   ORDER BY turno DESC LIMIT 1")
   or die('error '.mysqli_error($conn));

$contar = mysqli_num_rows($query_id);
if ($contar <> 0) {
$data_id = mysqli_fetch_assoc($query_id);
$turno    = $data_id['turno']+1;
} else {
$turno = 1;
}
$asignar_codigo   = str_pad($turno, 3, "0", STR_PAD_LEFT);
$turno = "T$asignar_codigo";
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ generar turno@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ insertarturno@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
$ejecutar = $conn->prepare("INSERT INTO db_turnos (tipo_tramite,estado_turno,turno,documento,pnombre,papellido,tiempo_ingreso) VALUES (?,?,?,?,?,?,NOW())");
$ejecutar->bind_param("ssssss", $tipo_tramite,$estado_turno,$turno,$numero,$pnombre,$papellido);
$ejecutar->execute();
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sumar saldo en caja @@@@@@@@@@@@@@@@@@@@
$stmt = $conn->prepare("SELECT turno FROM db_turnos WHERE tipo_tramite = ? ORDER BY turno DESC LIMIT 1");
$stmt -> bind_param('s', $tipo_tramite);
$stmt -> execute();
$stmt -> store_result();
$stmt -> bind_result($turnotriaje);
$stmt -> fetch();

$datoturno = $turnotriaje;
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sasignar turno numero @@@@@@@@@@@@@@@@@@
// print_r($ejecutar);
$id_registro = $ejecutar->id;
if ($id_registro > 0 ){
    $respuesta = array(
        'respuesta' => 'exito',
        'su_turno_es' => $datoturno
    );
}else{
     
    $respuesta = array(
        'respuesta' => 'error',
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
if ($_POST['action'] == 'generar_turno_medicina'){

  

    $tipo_tramite = 'MEDICINA'; 
    $estado_turno = 'ACTIVO'; 
    // $turno = $_POST["turno"]; 
    $numero = $_POST["numero"]; 
    $pnombre = $_POST["pnombre"]; 
    $papellido = $_POST["papellido"]; 
    require_once('../../config/database.php');
   try {

   // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ generar turno@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

   $query_id = mysqli_query($conn, "SELECT RIGHT(turno,3) as turno FROM db_turnos WHERE tipo_tramite='MEDICINA'
   ORDER BY turno DESC LIMIT 1")
   or die('error '.mysqli_error($conn));

$contar = mysqli_num_rows($query_id);
if ($contar <> 0) {
$data_id = mysqli_fetch_assoc($query_id);
$turno    = $data_id['turno']+1;
} else {
$turno = 1;
}
$asignar_codigo   = str_pad($turno, 3, "0", STR_PAD_LEFT);
$turno = "M$asignar_codigo";
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ generar turno@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ insertarturno@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
$ejecutar = $conn->prepare("INSERT INTO db_turnos (tipo_tramite,estado_turno,turno,documento,pnombre,papellido,tiempo_ingreso) VALUES (?,?,?,?,?,?,NOW())");
$ejecutar->bind_param("ssssss", $tipo_tramite,$estado_turno,$turno,$numero,$pnombre,$papellido);
$ejecutar->execute();
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sumar saldo en caja @@@@@@@@@@@@@@@@@@@@
$stmt = $conn->prepare("SELECT turno FROM db_turnos WHERE tipo_tramite = ? ORDER BY turno DESC LIMIT 1");
$stmt -> bind_param('s', $tipo_tramite);
$stmt -> execute();
$stmt -> store_result();
$stmt -> bind_result($turnomedicina);
$stmt -> fetch();

$datoturnomedicina = $turnomedicina;
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sasignar turno numero @@@@@@@@@@@@@@@@@@
// print_r($ejecutar);
$id_registro = $ejecutar->id;
if ($id_registro > 0 ){
    $respuesta = array(
        'respuesta' => 'exito',
        'turno_numero' => $datoturnomedicina
    );
}else{
     
    $respuesta = array(
        'respuesta' => 'error',
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
if ($_POST['action'] == 'generar_turno_documento'){

  

    $tipo_tramite = 'DOCUMENTOS'; 
    $estado_turno = 'ACTIVO'; 
    // $turno = $_POST["turno"]; 
    $numero = $_POST["numero"]; 
    $pnombre = $_POST["pnombre"]; 
    $papellido = $_POST["papellido"]; 
    require_once('../../config/database.php');
   try {

   // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ generar turno@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

   $query_id = mysqli_query($conn, "SELECT RIGHT(turno,3) as turno FROM db_turnos WHERE tipo_tramite='DOCUMENTOS'
   ORDER BY turno DESC LIMIT 1")
   or die('error '.mysqli_error($conn));

$contar = mysqli_num_rows($query_id);
if ($contar <> 0) {
$data_id = mysqli_fetch_assoc($query_id);
$turno    = $data_id['turno']+1;
} else {
$turno = 1;
}
$asignar_codigo   = str_pad($turno, 3, "0", STR_PAD_LEFT);
$turno = "D$asignar_codigo";
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ generar turno@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ insertarturno@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
$ejecutar = $conn->prepare("INSERT INTO db_turnos (tipo_tramite,estado_turno,turno,documento,pnombre,papellido,tiempo_ingreso) VALUES (?,?,?,?,?,?,NOW())");
$ejecutar->bind_param("ssssss", $tipo_tramite,$estado_turno,$turno,$numero,$pnombre,$papellido);
$ejecutar->execute();
// print_r($ejecutar);
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sumar saldo en caja @@@@@@@@@@@@@@@@@@@@
$stmt = $conn->prepare("SELECT turno FROM db_turnos WHERE tipo_tramite = ? ORDER BY turno DESC LIMIT 1");
$stmt -> bind_param('s', $tipo_tramite);
$stmt -> execute();
$stmt -> store_result();
$stmt -> bind_result($turnodocumento);
$stmt -> fetch();

$datoturnodocumento = $turnodocumento;
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ sasignar turno numero @@@@@@@@@@@@@@@@@@
$id_registro = $ejecutar->id;
if ($id_registro > 0 ){
    $respuesta = array(
        'respuesta' => 'exito',
        'turno_numero' => $datoturnodocumento
    );
}else{
     
    $respuesta = array(
        'respuesta' => 'error',
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