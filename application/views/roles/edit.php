<div class="content-wrapper">
  <section class="content-header">
      <!--############### TITULO DE LA PAGINA ###############-->
    <h1>
        ROLES
        <small>Edición</small>
      </h1>
    <!-- ####### FIN TITULO DE LA PAGINA ############-->
    <!-- ########### BREADCRUMB ########################-->
      <ol class="breadcrumb"><!-- Accesos para saber su ubicación -->
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>roles/">Roles</a></li>
        <li class="active">Editar roles</li>
      </ol>
      <hr style="padding: 0; margin: 0; border-top: solid 2px  #aeb5ba">
     <!-- ########### FIN DE BREADCRUMB ########################-->
    </section>
         <section class="content">
    <!-- <h1 style="color: #138bc7"><b>EDICIÓN DE ROL</b></h1> -->
      <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar nombre de rol</h3>
                </div>

          <form class="form-horizontal" method="POST" action=" <?php echo base_url(); ?>roles/update ">
              <div class="box-body">

                <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label text-right">Rol</label>
                      <div class="col-sm-10">
                        <input type="hidden" name="id_rol" value="<?php echo $rol->id_rol ?>">
                        <input type="text" class="form-control" name="rol" id="inputEmail3" value="<?php echo $rol->rol ?>" >
                      </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" title="Actualizar unicamente datos de usuario"><b>Actualizar rol</b></button>
              </div>
              <br>
              <!-- /.box-footer -->
            </form>

 <hr style="padding: 0; margin: 0; border-top: solid 2px  #aeb5ba">
<form class="form-horizontal" method="POST" action=" <?php echo base_url(); ?>roles/add_funciones ">
                <div class="form-group">
                  <h4 class="text-center"><b>Seleccione las funcionalidades que desea agregar</b></h4>
<div class="box-body">
<?php
foreach ($funciones as $funcion) {

    echo "<p style='display:inline'><input type='checkbox' name='funcion[] value='" . $funcion->id_funcional . "'>-" . $funcion->funcionalidad . "</p>  <b> | </b> ";
}
?>

<div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" title="Agrega funciones al rol: <?php echo $rol->rol ?> "><b>Agregar funciones</b></button>
              </div>

            </form>
            </div>

          </div>
          </div>
        </div><!-- fin md -->
      </form>

<!-- ####################### -->

<!-- ###################### -->
    </section>
</div><!-- content-wraper -->
