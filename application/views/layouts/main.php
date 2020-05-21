<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Deportes Org.</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/fonts/fontawesome-free/css/all.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo site_url('resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>"> 
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo site_url('resources/plugins/jqvmap/jqvmap.min.css');?>">
     
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo site_url('resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/plugins/daterangepicker/daterangepicker.css');?>">
        <!-- summernote -->
        <link rel="stylesheet" href="<?php echo site_url('resources/plugins/summernote/summernote-bs4.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. 
        <link rel="stylesheet" href="<?php /*echo site_url('resources/css/_all-skins.min.css');*/?>">-->

        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

 
      <!-- Font Awesome 
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">-->
      
      <!-- Tempusdominus Bbootstrap 4 
      <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">-->
     
     
    </head>
    
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
                          <!-- Navbar -->
          <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
              </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
              <!-- Messages Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-comments"></i>
                  <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="<?php echo site_url('resources/img/user3-128x128.jpg');?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                      <div class="media-body">
                        <h3 class="dropdown-item-title">
                          Brad Diesel
                          <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="<?php echo site_url('resources/img/user3-128x128.jpg');?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                      <div class="media-body">
                        <h3 class="dropdown-item-title">
                          John Pierce
                          <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="<?php echo site_url('resources/img/user3-128x128.jpg');?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                      <div class="media-body">
                        <h3 class="dropdown-item-title">
                          Nora Silvester
                          <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
              </li>
              <!-- Notifications Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">15 Notifications</span>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                  <i class="fas fa-th-large"></i>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.navbar -->
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                  <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                       style="opacity: .8">
                  <span class="brand-text font-weight-light">Deportes Org</span>
                </a>
                <!-- sidebar: style can be found in sidebar.less -->
                    <div class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                      <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                      <a href="#" class="d-block">Usuario</a>
                    </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo site_url();?>" class="nav-link">
                                <i class="nav-icon fas fa-home fa-fw"></i> <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('arbitro/index');?>" class="nav-link">
                                <i class="fas fa-user-shield fa-fw"></i> <p>Arbitro</p>
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="<?php //echo site_url('arbitro_planilla/index');?>" class="nav-link">
                                <i class="fa fa-desktop"></i> <p>Arbitro Planilla</p>
                            </a>
                        </li>-->
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <p>Camp Equipo</p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php //echo site_url('camp_equipo/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('camp_equipo/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <p>Campeonato</p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php //echo site_url('campeonato/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('campeonato/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('campeonato');?>" class="nav-link">
                                <i class="fas fa-universal-access fa-fw"></i> <p>Campeonato</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('club_deportivo/index');?>" class="nav-link">
                                <i class="fas fa-shield-virus fa-fw"></i> <p>Club Deportivo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('delegado/index');?>" class="nav-link">
                                <i class="fas fa-user-edit fa-fw"></i> <p>Delegado</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <p>Email</p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php //echo site_url('email/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('email/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('entrenador/index');?>" class="nav-link">
                                <i class="fas fa-user-tie fa-fw"></i> <p>Entrenador</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <p>Entrenador Equipo</p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php //echo site_url('entrenador_equipo/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('entrenador_equipo/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('equipo/index');?>" class="nav-link">
                                <i class="fas fa-users fa-fw"></i> <p>Equipo</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <p>Equipo Jugador</p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php //echo site_url('equipo_jugador/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('equipo_jugador/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('fixture/index');?>" class="nav-link">
                                <i class="fas fa-sort-numeric-down fa-fw"></i> <p>Fixture</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('gestion/index');?>" class="nav-link">
                                <i class="far fa-calendar-alt fa-fw"></i> <p>Gestion</p>
                            </a>
                        </li>
						<!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <p>Inf Personal</p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php //echo site_url('inf_personal/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('inf_personal/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>
                            <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <p>Jug Gol</p>
                            </a>
                                <li class="nav-item">
                            <ul class="nav nav-treeview">
                                    <a href="<?php //echo site_url('jug_gol/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('jug_gol/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('jugador/index');?>" class="nav-link">
                                <i class="fas fa-walking fa-fw"></i> <p>Jugador</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <p>Jugador Planilla</p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php //echo site_url('jugador_planilla/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('jugador_planilla/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('memorandum');?>" class="nav-link">
                                <i class="fas fa-align-justify fa-fw"></i> <p>Memorandum</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Memorandum</span>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php //echo site_url('memorandum/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('memorandum/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('mesa_directiva');?>" class="nav-link">
                                <i class="fas fa-table fa-fw"></i> <p>Mesa Directiva</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Mesa Directiva</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('mesa_directiva/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php //echo site_url('mesa_directiva/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('movimiento');?>" class="nav-link">
                                <i class="fas fa-exchange-alt fa-fw"></i> <p>Movimiento</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Movimiento</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('movimiento/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('movimiento/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('noticium');?>" class="nav-link">
                                <i class="fas fa-file-invoice fa-fw"></i> <p>Noticia</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Noticium</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('noticium/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('noticium/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('planilla');?>" class="nav-link">
                                <i class="fas fa-file-alt fa-fw"></i> <p>Planilla</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Planilla</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('planilla/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('planilla/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('premio');?>" class="nav-link">
                                <i class="fas fa-trophy fa-fw"></i> <p>Premio</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Premio</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('premio/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('premio/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('reunion');?>" class="nav-link">
                                <i class="fas fa-handshake fa-fw"></i> <p>Reunion</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Reunion</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('reunion/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('reunion/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('reunion_delegado');?>" class="nav-link">
                                <i class="fas fa-compress-arrows-alt fa-fw"></i> <p>Reunion Delegado</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Reunion Delegado</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('reunion_delegado/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('reunion_delegado/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('usuario');?>" class="nav-link">
                                <i class="fas fa-users fa-fw"></i> <p>Usuarios</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Sf Guard User</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('sf_guard_user/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('sf_guard_user/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>-->
                        <li class="nav-item">
                            <a href="<?php echo site_url('telefono');?>" class="nav-link">
                                <i class="fas fa-phone fa-fw"></i> <p>Telefono</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('tipo_campeonato');?>" class="nav-link">
                                <i class="fas fa-tasks fa-fw"></i> <p>Tipo Campeonato</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('uniforme');?>" class="nav-link">
                                <i class="fas fa-user-tag fa-fw"></i> <p>Uniforme</p>
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Telefono</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('telefono/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('telefono/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Tipo Campeonato</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('tipo_campeonato/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('tipo_campeonato/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Uniforme</span>
                            </a>
                            <ul class="nav nav-treeview">
								<li class="nav-item">
                                    <a href="<?php //echo site_url('uniforme/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php //echo site_url('uniforme/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>-->
                    </ul>
                    </nav>
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Generated By <a href="http://www.crudigniter.com/">CRUDigniter</a> 3.2</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        
            <!-- jQuery -->
            <script src="<?php echo site_url('resources/plugins/jquery/jquery.min.js');?>"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="<?php echo site_url('resources/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
              $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="<?php echo site_url('resources/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
            <!-- ChartJS -->
            <script src="<?php echo site_url('resources/plugins/chart.js/Chart.min.js');?>"></script>
            <!-- Sparkline -->
            <script src="<?php echo site_url('resources/plugins/sparklines/sparkline.js');?>"></script>
            <!-- JQVMap -->
            <script src="<?php echo site_url('resources/plugins/jqvmap/jquery.vmap.min.js');?>"></script>
            <script src="<?php echo site_url('resources/plugins/jqvmap/maps/jquery.vmap.usa.js');?>"></script>
            <!-- jQuery Knob Chart -->
            <script src="<?php echo site_url('resources/plugins/jquery-knob/jquery.knob.min.js');?>"></script>
            <!-- daterangepicker -->
            <script src="<?php echo site_url('resources/plugins/moment/moment.min.js');?>"></script>
            <script src="<?php echo site_url('resources/plugins/daterangepicker/daterangepicker.js');?>"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="<?php echo site_url('resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');?>"></script>
            <!-- Summernote -->
            <script src="<?php echo site_url('resources/plugins/summernote/summernote-bs4.min.js');?>"></script>
            <!-- overlayScrollbars -->
            <script src="<?php echo site_url('resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
            <!-- AdminLTE App -->
            <script src="<?php echo site_url('resources/js/adminlte.js');?>"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="<?php echo site_url('resources/js/pages/dashboard.js');?>"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
    </body>
</html>
