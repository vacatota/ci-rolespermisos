<div class="content-wrapper">
  <section class="content-header">
      <!--############### TITULO DE LA PAGINA ###############-->
    <h1>
        Acceso
        <small>sistema</small>
        <?php echo dirname(__FILE__);?>
      </h1>
    <!-- ####### FIN TITULO DE LA PAGINA ############-->
    <!-- ########### BREADCRUMS ########################-->
      <ol class="breadcrumb"><!-- Accesos para saber su ubicación -->
       <!--  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> -->
        <!-- <li><a href="#">UI</a></li>
        <li class="active">Usuarios</li> -->
      </ol>
      <hr style="padding: 0; margin: 0; border-top: solid 2px  #aeb5ba">
     <!-- ########### FIN DE BREADCRUMS ########################-->
    </section>
      <section class="content">






<div class="login-box" style="margin-top: 15px">

  <div class="login-logo">
    <img src="<?php echo base_url() ?>public/img/key.png" class="rounded-circle mx-auto d-block" height="30%" width="30%">
  </div>

      <?php if ($this->session->flashdata("error")): ?>
          <div class="alert alert-danger text-center">
                <p><?php echo $this->session->flashdata("error") ?></p>
              </div>
            <?php endif;?>



  <!-- /.login-logo -->
<div class="login-box-body" style="border-bottom: solid 4px  #cdcfd0 ; border-right: solid 4px  #cdcfd0 ">
    <p class="login-box-msg">Inicia sessión por aqui</p>

    <form action="<?php echo base_url(); ?>session/login" method="POST">
      <div class="form-group has-feedback">
        <input type="text" name="usuario" class="form-control" placeholder="Usuario">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="clave" class="form-control" placeholder="Clave">
        <span class="fa fa-unlock-alt form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>

            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="#" class="text-center">Registrar un nuevo usuario</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


</div>