<?php include('includes/header.php');
include "config/database.php";
try {
  $sql = "SELECT * FROM usuarios_db";
  $resultado = $conn->query($sql);
  $admin = $resultado->fetch_assoc();
}catch (Exception $e){
    $error = $e->getMessage();
    echo $error;
  }


?>

<section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="start.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <section class="content">

<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">

        <h3 class="profile-username text-center"><?php echo $admin['nombre']; ?></h3>

        <p class="text-muted text-center"><?php echo $admin['especialidad']; ?></p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Followers</b> <a class="pull-right">1,322</a>
          </li>
          <li class="list-group-item">
            <b>Following</b> <a class="pull-right">543</a>
          </li>
          <li class="list-group-item">
            <b>Friends</b> <a class="pull-right">13,287</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
        <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="activity">
        <div class="form-group">
        <div class="row">
        <div class="col-xs-4">
                <label>CODIGO</label>
                  <input type="text" class="form-control"  name="codigo_user"  readonly required>
                </div>
                <div class="col-xs-4">
                <label>Numero</label>
                  <input type="text" class="form-control" value="<?php echo $admin['cedula']; ?>" name="cedula" placeholder="Numero">
                </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <div class="col-xs-4">
                <label>Nombre</label>
                  <input type="text" class="form-control" name="nombre" value="<?php echo $admin['nombre']; ?>" style="text-transform: uppercase;" required>
                </div>
                <div class="col-xs-4">
                <label>Usuario</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $admin['usuario']; ?>">
                </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        </div>
        </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="timeline">
        <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Estado</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="<?php echo $admin['status']; ?>"placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">tramite</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="<?php echo $admin['tramite']; ?>" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nivel</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $admin['nivel']; ?>" placeholder="Name">
                    </div>
                  </div>
                </form>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

</section>
    <?php include('includes/footer.php');?>