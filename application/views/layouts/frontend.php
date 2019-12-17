<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Roles && permisos</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/lte/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/lte/css/font-awesome.css">

     <link rel="stylesheet" href="<?php echo base_url() ?>public/lte/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/lte/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/lte/login_components/blue.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/lte/css/_all-skins.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/estilos.css">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>public/lte/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>public/img/estudiante.png">
    <!-- Cargado de todos los iconos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<!-- Cuentas tree inicio-->
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>public/tree/css/file-explore.css" rel="stylesheet" type="text/css">
<!-- CUentas tree fin -->
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>UT</b>PL</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>UTPL</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
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
                  <small class=" <?php echo $this->session->userdata('nombres') ? 'bg-green' : 'bg-red'; ?>"><b><?php echo $this->session->userdata('nombres') ? 'Online' : 'Offline'; ?></b></small>
                  <span class="hidden-xs"><?php echo ' | ' . $this->session->userdata('nombres') . ' ' . $this->session->userdata('apellidos') ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <p>
                      Componente educativo:
                      <small>Seguridad de la Información</small>
                    </p>
                    <h3>UTPL</h3>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="session/logout" class="btn btn-default btn-flat" style="background-color:  #191c1e; color:white">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>

        </nav>
      </header>

        <?php
          //if($this->session->userdata('login')){
        ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>USUARIOS</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>usuarios"><i class="fa fa-circle-o"></i>Admnistrar</a></li>
                </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-sort-amount-desc"></i>
                <span>ROLES</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>roles"><i class="fa fa-circle"></i> Administrar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tags"></i>
                <span>FUNCIONES</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>funciones"><i class="fa fa-circle-o"></i> Administrar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tags"></i>
                <span>CUENTAS</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>cuentas"><i class="fa fa-circle-o"></i> Administrar</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>
      <?php //} ?>

<!--############################ FIN  / aside -ok #################################-->
<!--################### CONTENIDO PRINCIPAL   ################ -->
<?php
echo $content_for_layout;
?>

<!-- ###############  / CONT3NIDO PRINCIPAL ##################### -->

 </div><!-- /.wraper | Fin-Contenido-->

      <!-- Inicio pie de página -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url() ?>public/lte/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>public/lte/js/app.min.js"></script>
<!-- Arbol ctas -->
<script src="<?php echo base_url() ?>public/tree/js/file-explore.js"></script>
<script>
$(document).ready(function() {
            $(".file-tree").filetree();
	        });
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
/*###################### TREE ####################*/
//alert("ssfsd")
 //$("ul[class=file-tree]").click(function(){
  $("div ul li a[class=tree").click(function(){
  alert("Pulso en carpeta");
});

</script>
  </body>
</html>
