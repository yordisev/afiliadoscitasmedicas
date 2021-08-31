
<?php 
include('includes/header.php');
require_once "config/funciones.php";
include_once 'acciones/sessiones.php';
 
$user = usuarios();
?>
<!-- DataTables -->

    <section class="content-header">
    <h1>
        Usuarios
        <a class="btn btn-primary pull-right" href="" title="Agregar" data-toggle="modal" data-target="#registrarusuario"><i class="fa fa-plus"></i> Agregar</a>
      </h1>
    </section>
    <?php include("pages/modal_user/add_usuario.php");?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Tabla Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Estado</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Nivel</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                foreach($user as $x => $user) {
                        ?>
                  <td class="text-center">
                  <?php 
      if ($user['status'] == 'Activo') {
        echo '<span class="label label-primary">Activo</span>';
      } else if ($user['status'] == 'Inactivo') {
        echo '<span class="label label-danger">Inactivo</span>';
      } 
      ?>
                  </td>
                  <td><?php echo $user['nombre'] ?></td>
                  <td><?php echo $user['usuario'] ?></td>
                  <td><?php echo $user['nivel'] ?></td>
                  <td class="text-center">
                  <a  type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editaruser"
                  data-usuario="<?php echo $user['usuario']?>" 
                  data-cedula="<?php echo $user['cedula']?>" 
                  data-nombre="<?php echo $user['nombre']?>" 
                  data-especialidad="<?php echo $user['especialidad']?>" 
                  data-tramite="<?php echo $user['tramite']?>" 
                  data-modulo="<?php echo $user['modulo']?>"
                  data-status="<?php echo $user['status']?>"
                  data-nivel="<?php echo $user['nivel']?>"><i class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-danger btn-xs"><i class="fa  fa-trash-o"></i></a>
                  
                  
            
                  </td>
                </tr>
                <?php
                        }
                        ?>
                </tbody>
              </table>
              <?php include("pages/modal_user/editar_user.php");?>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
  
<?php include('includes/footer.php');?>
