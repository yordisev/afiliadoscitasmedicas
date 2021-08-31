<?php 

include 'config/database.php';

if (!empty($_POST)) {
    // Extraer datos del producto
    if ($_POST['action'] == 'buscarafiliado') {
        $data = "";
      $numeros = $_POST['numeros'];
      $query = mysqli_query($conn, "SELECT * FROM db_afiliados WHERE numero = $numeros");
  
      $result = mysqli_num_rows($query);
      if ($result > 0) {
        $data = mysqli_fetch_assoc($query);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        exit;
      }else {
        $data = 0;
      }
    }
}
?>