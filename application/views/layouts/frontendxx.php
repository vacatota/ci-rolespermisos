<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADVentas | www.incanatoit.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assetsLte/css/bootstrap335.min.css">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="assets/css/font-awesome440.css"> --> <!-- Con archivo local no funciona -->
    <!-- <link rel="stylesheet" type="text/css" href="https://fastcdn.org/Font-Awesome/4.4.0/css/font-awesome.css"> -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assetsLte/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assetsLte/css/all-skins.min.css">
    <link rel="apple-touch-icon" href="assetsLte/img/indice2.png">
    <link rel="shortcut icon" href="assetsLte/img/indice.ico">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo" style="background-color: green">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AD</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ADVentas</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation" style="background-color: green">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Juan Carlos Arcila Díaz</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <p>
                      www.incanatoit.com - Desarrollando Software
                      <small>www.youtube.com/jcarlosad7</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar"> <!-- style="background-color:  #024223" -->
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

<!-- ########################## -->
 <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/img/avatar04.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
</div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
<!-- ###################################################### -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Almacén</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL::action('CategoriaController@index')}}"><i class="fa fa-circle-o"></i> Artículos</a></li>
                <li><a href="{{URL::action('CategoriaController@index')}}"><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Proveedores</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Ventas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Clientes</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>

              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
       <!--Contenido-->



      <!--CONTENIDO PARA VISTA Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Titulo de la tabla, migas de pan -->
        <section class="content-header"><!-- TITULO SUPERIOR -->
      <h1>
        Simple Tables
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i><b style="color:red"> Home</b></a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
      </section> <!-- Fin titulo de la tabla, migas de pan -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema de Ventas</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                              <!--Contenido-->
               <p>
                 <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque soluta voluptatum minus unde cumque incidunt necessitatibus animi laborum, eaque laudantium provident fugit voluptates voluptatibus repudiandae, eveniet corporis hic obcaecati illum.
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nisi illum tempore illo provident architecto cum sit voluptatum aliquid dolorem, dolor quidem ea quisquam facilis? Id facere ipsum delectus odio?Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore explicabo rerum ea totam est? Consequatur, et sequi consectetur in a, beatae saepe error fuga sed, architecto nam voluptatem numquam <aliquam class="lorem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima molestias, voluptates dicta deleniti reprehenderit distinctio in aperiam ullam iste pariatur unde error quod fuga eos inventore eius vero impedit. <Ducimus class="lorem"></Ducimus></aliquam>
                 </span>

               </p>
                              <!--Fin Contenido-->
                        </div> <!-- fin col-md-12 -->
                     </div>
                 </div> <!-- fin box-body -->

              </div><!-- /box box-primary -->
            </div><!-- /col-md-12 -->
          </div><!-- /.row -->
        </section><!-- /.content -->
</div><!--FIN CONTENIDO PARA VISTA /.content-wrapper -->





      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>

</div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="assetsLte/js/jQuery214.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="assetsLte/js/bootstrap334.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assetsLte/js/adminlte_app.min.js"></script>

  </body>
</html>
