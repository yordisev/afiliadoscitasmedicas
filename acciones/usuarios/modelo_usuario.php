<?php



if ($_POST['registro'] == 'nuevo'){
    $usuario = $_POST['usuario'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $especialidad = $_POST['especialidad'];
    $tramite = $_POST['tramite'];
    $modulo = $_POST['modulo'];
    $status = $_POST['status'];
    $nivel = $_POST['nivel'];


    require_once('../../config/database.php');
    $opciones = array(
        'cost' => 12
    );
    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
   try {
$ejecutar = $conn->prepare("INSERT INTO usuarios_db (usuario,cedula, nombre, password,especialidad,tramite,modulo,status,nivel) VALUES (?,?,?,?,?,?,?,?,?)");
$ejecutar->bind_param("sssssssss", $usuario, $cedula, $nombre, $password_hashed,$especialidad,$tramite,$modulo,$status,$nivel);
$ejecutar->execute();
$id_registro = $ejecutar->insert_id;
if ($id_registro > 0 ){
    $respuesta = array(
        'respuesta' => 'exito',
        'id_admin' => $id_registro
    );
}else {
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



if ($_POST['registro'] == 'actualizar'){
    $usuario = $_POST['usuario'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $especialidad = $_POST['especialidad'];
    $tramite = $_POST['tramite'];
    $modulo = $_POST['modulo'];
    $status = $_POST['status'];
    $nivel = $_POST['nivel'];
    require_once('../../config/database.php');
   try {
$ejecutar = $conn->prepare("UPDATE  usuarios_db  SET usuario = ?, nombre = ?, especialidad = ?, tramite = ?, modulo = ?, status = ?, nivel = ? WHERE cedula = ?");
$ejecutar->bind_param("ssssssss", $usuario, $nombre, $especialidad, $tramite, $modulo, $status, $nivel, $cedula);
$ejecutar->execute();
if ($ejecutar-> affected_rows ){
    $respuesta = array(
        'respuesta' => 'exitoso',
        'id_actualizado' => $ejecutar->insert_id
    );
}else {
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