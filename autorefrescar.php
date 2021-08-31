<?php 
require 'config/database.php';
require_once "config/funciones.php";
$mysqli = db();

$pantallaturnos = turno_en_pantalla();

$query = mysqli_query($mysqli,"SELECT * FROM db_turnos where estado_turno = 'ACTIVO' OR estado_turno = 'LLAMADO'  order by tiempo_ingreso asc limit 5");

?>

<table class="table table-bordered table-striped">

  <thead>
  <tr>

<th class="text-center"><h1><b>TURNO</b></h1></th>
<th class="text-center"><h1><b>MODULO</b></h1></th>
<th class="text-center"><h1><b>ESTADO</b></h1></th>
</tr>
  </thead>

<?php 

while ($row = mysqli_fetch_assoc($query)) {

  if ($row['estado_turno'] == 'LLAMADO') {
    echo '
        <tbody>

        <tr class="movimiento">
        <th class="text-center"><h1><b>' . $row['turno'] . '</b></h1></th>
        <th class="text-center"><h1><b>' . $row['modulo'] . '</b></h1></th>
        <th class="text-center"><h1><b>';
          if ($row['estado_turno'] == 'ACTIVO') {
            echo '<span class="label label-primary">ACTIVO</span>';
          } else if ($row['estado_turno'] == 'LLAMADO') {
            echo '<span class="label label-success">LLAMADO</span>';
          } else if ($row['estado_turno'] == 'TURNOATENDIDO') {
            echo '<span class="label label-danger">TURNOATENDIDO</span>';
          }  '
          </b></h1></th>
        </tr>
        </tbody>
        ';
      } else if ($row['estado_turno'] == 'ACTIVO') {
        echo '
        <tbody>

        <tr>
        <th class="text-center"><h1><b>' . $row['turno'] . '</b></h1></th>
        <th class="text-center"><h1><b>' . $row['modulo'] . '</b></h1></th>
        <th class="text-center"><h1><b>';
          if ($row['estado_turno'] == 'ACTIVO') {
            echo '<span class="label label-primary">ACTIVO</span>';
          } else if ($row['estado_turno'] == 'LLAMADO') {
            echo '<span class="label label-success">LLAMADO</span>';
          } else if ($row['estado_turno'] == 'TURNOATENDIDO') {
            echo '<span class="label label-danger">TURNOATENDIDO</span>';
          }  '
          </b></h1></th>
        </tr>
        </tbody>
        ';
      }
       
    }


    


?>
</table>

