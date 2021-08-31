<?php


// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

if ($_POST['registro'] == 'nuevo'){

    $codigo_afi = $_POST['codigo_afi'];
    $documento = $_POST['documento'];
    $numero = $_POST['numero'];
    $fecha_exp = $_POST['fecha_exp'];
    $pnombre = $_POST['pnombre'];
    $snombre = $_POST['snombre'];
    $papellido = $_POST['papellido'];
    $sapellido = $_POST['sapellido'];
    $fechan = $_POST['fechan'];
    $sexo = $_POST['sexo'];
    $tsangre = $_POST['tsangre'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $estado_civil = $_POST['estado_civil'];
    $departamento = $_POST['departamento'];
    $municipio = $_POST['municipio'];
    $barrio = $_POST['barrio'];
    $direccion = $_POST['direccion'];
    $estado = 'ACTIVO';
    $nivel_educativo = $_POST['nivel_educativo'];
    $eps = $_POST['eps'];
    require_once('../../config/database.php');
   try {
    
$ejecutar = $conn->prepare("INSERT INTO db_afiliados (codigo_afi,documento,numero,fecha_exp,pnombre,snombre,papellido,sapellido,fechan,sexo,tsangre,telefono,celular,correo,estado_civil,departamento,municipio,barrio,direccion,estado,nivel_educativo,eps,fecha_registro) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())");
$ejecutar->bind_param("ssssssssssssssssssssss", $codigo_afi, $documento, $numero, $fecha_exp, $pnombre, $snombre, $papellido,  $sapellido, $fechan,$sexo,$tsangre,$telefono,$celular,$correo,$estado_civil,$departamento,$municipio,$barrio,$direccion,$estado,$nivel_educativo,$eps);
$ejecutar->execute();
$id_registro = $ejecutar->insert_id;
if ($id_registro > 0 ){
    $respuesta = array(
        'respuesta' => 'exito',
        'id_afiliado' => $id_registro
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

 $codigo = $_POST['codigo'];
    $producto = $_POST['producto'];
    $tipo = $_POST['tipo'];
    $distribuidor = $_POST['distribuidor'];
    $estado = $_POST['estado'];
    $stock = $_POST['stock'];
    
    $precio_venta = $_POST['precio_venta'];
    $precio_compra = $_POST['precio_compra'];
    $vendido = $_POST['vendido'];
    $ganancias = $_POST['ganancias'];
    require_once('../../config/database.php');

   try {
   
$ejecutar = $conn->prepare("UPDATE  productos_db  SET producto = ?, tipo = ?, distribuidor = ?, estado = ?, stock = ?, precio_venta = ?, precio_compra = ?, vendido = ?, ganancias = ?, fecha_ingreso = NOW() WHERE codigo = ?");
$ejecutar->bind_param("ssssssssss", $producto, $tipo, $distribuidor, $estado, $stock, $precio_venta, $precio_compra, $vendido, $ganancias, $codigo);
$ejecutar->execute();
if ($ejecutar->affected_rows){
    $respuesta = array(
        'respuesta' => 'exitoso',
        'id_actualizado' => $ejecutar->insert_id
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


if ($_POST['registro'] == 'eliminar'){

    $codigo = $_POST['codigo'];
 
   require_once('../../config/database.php');

  try {
  
$ejecutar = $conn->prepare("DELETE FROM   productos_db  WHERE codigo = ?");
$ejecutar->bind_param("s", $codigo);
$ejecutar->execute();
if ($ejecutar-> affected_rows ){
   $respuesta = array(
       'respuesta' => 'exitoso',
       'id_eliminado' => $codigo
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