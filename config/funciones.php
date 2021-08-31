<?php



function db()
	{
		return $mysqli=mysqli_connect("localhost","root","","db_medicina");
	}


function historial_afiliados(){
  $mysqli = db();
  if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($mysqli, (strip_tags($_GET["id"], ENT_QUOTES)));
    $sql = mysqli_query($mysqli, "SELECT * FROM db_afiliados WHERE numero='$id'");
     $row = mysqli_fetch_assoc($sql);
  return $row;
  }
}


function consulta_historial($id){
  $mysqli = db();
  $query = "SELECT * FROM db_historial WHERE numero='$id'";
          $resultado = mysqli_query($mysqli, $query) or die('error: ' . mysqli_error($mysqli));
          $row_datos = array();
  while ($row = $resultado->fetch_assoc()) {
    $row_datos[]= $row;
  }
  return $row_datos;

}



function buscar_afiliados(){
  $mysqli = db();
  $numero = '0';
  if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
  }
  $results = mysqli_query($mysqli,"SELECT d.*, TIMESTAMPDIFF(YEAR,d.fechan,CURDATE()) AS edad  FROM db_afiliados d WHERE numero='$numero'");
  while ($results = mysqli_fetch_array($results)) {
    return $results;
  }
  
}

  function usuarios(){
    $mysqli = db();
    $results = mysqli_query($mysqli,"SELECT *  FROM usuarios_db");
    $datos = array();
    while ($row = $results->fetch_assoc()) {
      $datos[]= $row;
    }
    return $datos;
  }

  function afiliados(){
    $mysqli = db();
    $results = mysqli_query($mysqli,"SELECT *  FROM db_afiliados");
    $datos = array();
    while ($row = $results->fetch_assoc()) {
      $datos[]= $row;
    }
    return $datos;
  }

  function asignar_codigo_user(){
    $mysqli = db();
    $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo_user,3) as codigo_user FROM db_usuarios
                                                ORDER BY codigo_user DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $contar = mysqli_num_rows($query_id);
              if ($contar <> 0) {
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['codigo_user']+1;
              } else {
                  $codigo = 1;
              }
              $asignar_codigo   = str_pad($codigo, 3, "0", STR_PAD_LEFT);
              $codigo = "USER$asignar_codigo";
    return $codigo;
  }

  function asignar_codigo_afiliado(){
    $mysqli = db();
    $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo_afi,6) as codigo_afi FROM db_afiliados
                                                ORDER BY codigo_afi DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $contar = mysqli_num_rows($query_id);
              if ($contar <> 0) {
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['codigo_afi']+1;
              } else {
                  $codigo = 1;
              }
              $asignar_codigo   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
              $codigo = "AFI$asignar_codigo";
    return $codigo;
  }



 

  // FUNCONES DE LAS CITAS QUE HAY QUE ATENDER //////////////////////////////////////////////////////////////////////////////////////////////

  function citas_dia_hoy(){
    $mysqli = db();
    $query = mysqli_query($mysqli, "SELECT COUNT(*) as numero FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE()")
    or die('Error ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);
return $data;
  }

  function citas_dia_hoy_atendidas(){
    $mysqli = db();
    $query = mysqli_query($mysqli, "SELECT COUNT(*) as atendidos FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE() AND	estado_cita='ATENDIDO'")
    or die('Error ' . mysqli_error($mysqli));
$data1 = mysqli_fetch_assoc($query);
return $data1;
  }

  function citas_dia_hoy_pendientes(){
    $mysqli = db();
    $query = mysqli_query($mysqli, "SELECT COUNT(*) as pendientes FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE() AND	estado_cita='PENDIENTE'")
    or die('Error ' . mysqli_error($mysqli));
$data2 = mysqli_fetch_assoc($query);
return $data2;
  }

  function citas_dia_hoy_ausentes(){
    $mysqli = db();
    $query = mysqli_query($mysqli, "SELECT COUNT(*) as ausentes FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE() AND	estado_cita='AUSENTE'")
    or die('Error ' . mysqli_error($mysqli));
$data3 = mysqli_fetch_assoc($query);
return $data3;
  }


  function tabla_citas_afiliados(){
    $mysqli = db();
    $query = mysqli_query($mysqli,"SELECT * FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE() order by diacita asc ");
    $datos = array();
    while ($row_datos = $query->fetch_assoc()) {
      $datos[]= $row_datos;
    }
    return $datos;
  }

 
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@TURNOS ASIGNAR@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  function consultar_turno(){
    $mysqli = db();
    $results = mysqli_query($mysqli,"SELECT *  FROM db_turnos WHERE usuario_atendio='$_SESSION[usuario]' and  estado_turno='LLAMADO' or estado_turno='ATENDIENDO' ");
    while ($results = mysqli_fetch_array($results)) {
      return $results;
    }
    
  }

  function asignar_turno(){
    $mysqli = db();
    $query_id = mysqli_query($mysqli, "SELECT RIGHT(turno,3) as turno FROM db_turnos WHERE tipo_tramite='MEDICINA'
                                                ORDER BY turno DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $contar = mysqli_num_rows($query_id);
              if ($contar <> 0) {
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['turno']+1;
              } else {
                  $codigo = 1;
              }
              $asignar_codigo   = str_pad($codigo, 3, "0", STR_PAD_LEFT);
              $codigo = "M$asignar_codigo";
    return $codigo;
  }

  function asignar_turno1(){
    $mysqli = db();
    $query_id = mysqli_query($mysqli, "SELECT RIGHT(turno,3) as turno FROM db_turnos WHERE tipo_tramite='TRIAJE'
                                                ORDER BY turno DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $contar = mysqli_num_rows($query_id);
              if ($contar <> 0) {
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['turno']+1;
              } else {
                  $codigo = 1;
              }
              $asignar_codigo   = str_pad($codigo, 3, "0", STR_PAD_LEFT);
              $codigo = "T$asignar_codigo";
    return $codigo;
  }

  function asignar_turno2(){
    $mysqli = db();
    $query_id = mysqli_query($mysqli, "SELECT RIGHT(turno,3) as turno FROM db_turnos WHERE tipo_tramite='DOCUMENTOS'
                                                ORDER BY turno DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $contar = mysqli_num_rows($query_id);
              if ($contar <> 0) {
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['turno']+1;
              } else {
                  $codigo = 1;
              }
              $asignar_codigo   = str_pad($codigo, 3, "0", STR_PAD_LEFT);
              $codigo = "D$asignar_codigo";
    return $codigo;
  }
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@TURNOS  PANTALLAR@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 
  function turno_en_pantalla(){
    $mysqli = db();
    $results = mysqli_query($mysqli,"SELECT *  FROM db_turnos WHERE estado_turno='LLAMADO'");
    while ($results = mysqli_fetch_array($results)) {
      return $results;
    }
    
  }
 
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@GESTION DE TURNOS@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//   function turnos_en_espera(){
//     $mysqli = db();
//     $query = mysqli_query($mysqli, "SELECT COUNT(*) as numero FROM db_turnos  WHERE estado_turno='ACTIVO'")
//     or die('Error ' . mysqli_error($mysqli));
// $data = mysqli_fetch_assoc($query);
// return $data;
//   }

//   function turnos_atendidos(){
//     $mysqli = db();
//     $query = mysqli_query($mysqli, "SELECT COUNT(*) as numero FROM db_turnos  WHERE estado_turno='ATENDIDO'")
//     or die('Error ' . mysqli_error($mysqli));
// $data = mysqli_fetch_assoc($query);
// return $data;
//   }


// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@TOTAL TURNOS@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
function turnos_triaje(){
  $mysqli = db();
  $query = mysqli_query($mysqli, "SELECT COUNT(*) as numero FROM db_turnos  WHERE tipo_tramite='TRIAJE'")
  or die('Error ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);
return $data;
}
function turnos_triaje1(){
  $mysqli = db();
  $query = mysqli_query($mysqli, "SELECT COUNT(*) as numero FROM db_turnos  WHERE tipo_tramite='TRIAJE' and estado_turno='ACTIVO'")
  or die('Error ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);
return $data;
}


function turnos_medicina(){
  $mysqli = db();
  $query = mysqli_query($mysqli, "SELECT COUNT(*) as numero FROM db_turnos  WHERE tipo_tramite='MEDICINA'")
  or die('Error ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);
return $data;
}


function turnos_medicina1(){
  $mysqli = db();
  $query = mysqli_query($mysqli, "SELECT COUNT(*) as numero FROM db_turnos  WHERE tipo_tramite='MEDICINA' and estado_turno='ACTIVO'")
  or die('Error ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);
return $data;
}

function turnos_documentos(){
  $mysqli = db();
  $query = mysqli_query($mysqli, "SELECT COUNT(*) as numero FROM db_turnos  WHERE tipo_tramite='DOCUMENTOS'")
  or die('Error ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);
return $data;
}

function turnos_documentos1(){
  $mysqli = db();
  $query = mysqli_query($mysqli, "SELECT COUNT(*) as numero FROM db_turnos  WHERE tipo_tramite='DOCUMENTOS' and estado_turno='ACTIVO'")
  or die('Error ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);
return $data;
}


// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@REPORTES DE TURNOS@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@






?>