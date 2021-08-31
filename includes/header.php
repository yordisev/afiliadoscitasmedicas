<?php 
include_once 'acciones/sessiones.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="description" content="Relojito Yordis">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yordis">
    <meta name="thema-color" content="#0096BB">
    <link rel="shortcut icon" href="img/favico.ico" type="image/x-icon">
  <title>Relojito</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap/css/iconos.min.css">
  
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">

  <link rel="stylesheet" href="bootstrap/css/sweetalert2.min.css">

  <script src="bootstrap/js/sweetalert2.all.min.js"></script>
  <style>
   #more {display: none;}

   /* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
   
.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
 

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}


</style>
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>J</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Relojito</b>RJ</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
      
       
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nombre'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                <?php echo $_SESSION['usuario'];?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="index.php?cerrar_sesion=true" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu"  data-widget="treeview" role="menu" data-accordion="false">
        <li class="header">MENU NAVEGACION</li>
        <li class=" treeview">
          <a href="start.php">
            <i class="fa fa-home"></i> <span>Inicio</span>
          </a>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-users"></i>
            <span>Afiliados</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="afidate.php"><i class="fa fa-circle-o"></i>Datos Basicos</a></li>
            <li class=""><a href="siguiente.php"><i class="fa fa-circle-o"></i>Siguiente</a></li>
            <li class=""><a href="buscarafiliado.php"><i class="fa fa-circle-o"></i>Buscar Afiliados</a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-user"></i>
            <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class=""><a href="userdata.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
          <li class=""><a href="actualizar_password.php"><i class="fa fa-circle-o"></i>Cambiar Claves</a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Gestionar Turnos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="verturnos.php"><i class="fa fa-circle-o"></i>Ver Turnos</a></li>
            <li class=""><a href="gestionar_turno.php"><i class="fa fa-circle-o"></i>Llamar Turno</a></li>
            <li class=""><a href="genera_turno.php"><i class="fa fa-circle-o"></i>Generar Turno</a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Reporte Turnos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="reporte_turnos.php"><i class="fa fa-circle-o"></i>Reporte</a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Diagnosticos y servicios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>Servicios</a></li>
            <li class=""><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>Diagnosticos</a></li>
          </ul>
        </li>
        </li>
        <li class="header">LABELS</li>
        <li class=""><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

  
  