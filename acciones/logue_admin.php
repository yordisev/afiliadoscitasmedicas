<?php 
if (isset($_POST['logueo_admin'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    try {
        require_once('../config/database.php');
    $ejecutar = $conn->prepare("SELECT * FROM usuarios_db WHERE usuario = ?;");
    $ejecutar->bind_param("s", $usuario);
    $ejecutar->execute();
    $ejecutar->bind_result($id_admin, $usuario_admin, $cedula, $nombre_admin, $password_admin, $especialidad, $tramite, $modulo, $status, $nivel);
    if($ejecutar->affected_rows){
        $existe = $ejecutar->fetch();
        if($existe){
            if ( password_verify($password,$password_admin)){
                session_start();
                $_SESSION['usuario'] = $usuario_admin;
                $_SESSION['nombre'] = $nombre_admin;
                $_SESSION['nivel'] = $nivel;
                $_SESSION['modulo'] = $modulo;
                $_SESSION['tramite'] = $tramite;
                $respuesta = array(
                    'respuesta' => 'exitoso',
                    'usuario' => $nombre_admin
                );
            }else{
                $respuesta = array(
                    'respuesta' => 'password_incorrecto'
                );
            }
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            ); 
        }
    }
    $ejecutar->close();
$conn->close();
       } catch (Exception $e) {
           echo " Error " . $e->getMessage();
       }
       die(json_encode($respuesta));
}
?>