<br>
<div class="content-wrapper">
  <section class="content-header">
      <!--############### TITULO DE LA PAGINA ###############-->
    <h1>
        Usuario
        <small>Edición</small>
      </h1>
    <!-- ####### FIN TITULO DE LA PAGINA ############-->
    <!-- ########### BREADCRUMB ########################-->
      <ol class="breadcrumb"><!-- Accesos para saber su ubicación -->
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>usuarios/">Usuario</a></li>
        <li class="active">Editar</li>
      </ol>
      <hr style="padding: 0; margin: 0; border-top: solid 2px  #aeb5ba">
     <!-- ########### FIN DE BREADCRUMB ########################-->
    </section>
         <section class="content">

    <h1 class="text-center" style="color: #138bc7">Edición de usuario <b><?php echo $usuario->nombres . ' ' . $usuario->apellidos ?>  </b></h1>
      <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
                <div class="box-header with-border">
                  <h3 class="box-title">Usuario registrado</h3>
                </div>

        <form class="form-horizontal" method="POST" action=" <?php echo base_url(); ?>usuarios/update">
              <div class="box-body">

                <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label text-right">Nombres</label>
                      <div class="col-sm-10">
                        <input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario ?>">
                        <input type="text" class="form-control" name="nombres" value="<?php echo $usuario->nombres ?>" >
                      </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label text-right">Apellidos</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="apellidos"  value="<?php echo $usuario->apellidos ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label text-right">Cédula</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="cedula" value="<?php echo $usuario->cedula ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label text-right">Alias</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="usuario" value="<?php echo $usuario->usuario ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label text-right">Rol</label>
                  <div class="col-sm-10">
          <?php
$rol_1 = $usuario->id_rol;?>
                            <select name="select_rol" id="select_rol" class="form-control">
    <?php
if ($rol_1 == null) {
    echo '<option selected="true" ><b style="color:red">No tiene rol</b></option>';

}

foreach ($roles as $rol) {
    ?>
<option value="<?php echo $rol->id_rol ?>" <?php echo $rol_1 == $rol->id_rol ? 'selected="true"' : "" ?>><?php echo $rol->rol ?></option>
<?php
}?>
                        <option value="0">Quitar rol</option>
                        </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" title="Actualizar unicamente datos de usuario">Actulizar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
        </div><!-- fin md -->
<!-- ####################### -->
<div class="col-md-4">
                  <div class="box box-primary">
            <div class="box-header with-border">
            <div class="box-header with-border">
              <h3 class="box-title">Funcionalidad</h3>
            </div>


           <div class="form-group">
            <br>
<?php
foreach ($usuario_todo as $user_all) {

}

foreach ($funcionalidades as $funcion) {

    if ($funcion->funcionalidad == null) {
        echo "<ul><p>No tiene asignado funciones</p></ul>";
    } else {
        //echo "<label><input type='checkbox' checked='true'>" . $funcion->funcionalidad . "</label><br>";
        foreach ($usuario_todo as $u) {

            if ($u->id_funcional == $funcion->id_funcional) {
                echo "<label><input type='checkbox' checked='true'>-" . $funcion->funcionalidad . "</label><br>";
            }
        }

    }
}?>
</div>

          </div>
          </div>
        </div><!-- fin md -->
<!-- ###################### -->
    </section>
</div><!-- content-wraper -->
<br>