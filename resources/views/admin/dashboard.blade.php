@extends('layouts.admin')

@section('dashboard')

<div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>D</b>L</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Gestor</b>Adri</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/images/user2-160x160.jpg" alt="User Image" class="user-image">
               
                <span class="hidden-xs">Adriano Carvalho</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="/images/user2-160x160.jpg" alt="User Image" class="img-circle">                  
                  <p>
                    Adriano Carvalho - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#">
                      <span>Logout</span>
                      <span class="btn btn-default btn-flat">
                        <i class="fa fa-sign-out fa-fw"></i>
                      </span>                      
                    </a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="/images/user2-160x160.jpg" alt="User Image" class="img-circle">
          </div>
          <div class="pull-left info">
            <p>Adriano</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">Menu Principal</li>
          <li class="treeview">
            <a href="/">            
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>           
            </a>            
          </li>
          <li>
            <a href="/">
              <i class="fa fa-chrome"></i>
              <span>Site</span>
            </a>            
          </li>
          <li>
            <a href="/">
              <i class="fa fa-object-ungroup"></i>
              <span>Banners</span>
            </a>            
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-wrench"></i><span>Sobre</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-down"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="/">            
                  <i class="fa fa-tag"></i>
                  <span>Depoimento</span>
                </a>            
              </li>
              <li>
                <a href="/">            
                  <i class="fa fa-star-half-empty"></i>
                  <span>História</span>
                </a>            
              </li>
            </ul>
          </li>
          <li>
            <a href="/">            
              <i class="fa fa-bar-chart"></i>
              <span>Serviços</span>
            </a>            
          </li>
          <li>
            <a href="/">            
              <i class="fa fa-money"></i>
              <span>Clientes</span>
            </a>            
          </li>
          <li class="header">Administrativo</li>
          <li>
            <a href="/">            
              <i class="fa fa-envelope"></i>
              <span>Relatório</span>
            </a>            
          </li>
          <li>
            <a href="/">            
              <i class="fa fa-eye"></i>
              <span>Logs</span>
            </a>            
          </li>
          <li>
            <a href="/">            
              <i class="fa fa-envelope"></i>
              <span>Mensagens</span>
            </a>            
          </li>
          <li>
            <a href="/">            
              <i class="fa fa-google"></i>
              <span>Anúncios</span>
            </a>            
          </li>
          <li>
            <a href="/">            
              <i class="fa fa-child"></i>
              <span>Profissionais</span>
            </a>            
          </li>        
          <li>
            <a href="/">            
              <i class="fa fa-users"></i>
              <span>Administradores</span>
            </a>            
          </li>
          <li>
            <a href="/">            
              <i class="fa fa-users"></i>
              <span>Usuários</span>
            </a>            
          </li>
          <li>
            <a href="/">           
              <i class="fa fa-cogs"></i>
              <span>Configurações</span>
            </a>            
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <h1>Administrativo</h1>        
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
          <li class="active">Usuários</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          
          <div class="box-body">
            @yield('dashbord')
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
          
          </div>
          
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2019. Gestor <a href="http://adrianocarvalhosolutions.com.br">AdriSolutions</a>.</strong> All rights
      reserved.
    </footer>

   
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  
@endsection