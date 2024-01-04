<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url() ;?>public/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ;?>" class="nav-link">Panel</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->    
        <img src="<?php echo base_url();?>public/admin/dist/img/nofotoperfil.png" alt="fotousuario" height="40px">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#"><?php echo session('username') ;?></a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-user mr-2"></i> Perfil
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url();?>/auth/CloseSession" class="dropdown-item">
                <i class="fas fa-stop mr-2"></i> Cerrar Sesion
            </a>
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->