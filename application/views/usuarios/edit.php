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
    <h1 class="text-center" style="color: #138bc7">Edición de usuario <b><?php echo $usuario[0]->nombres . ' ' . $usuario[0]->apellidos ?>  </b></h1>
      <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
                <div class="box-header with-border">
                  <h3 class="box-title">Usuario registrado</h3>
                </div>

<?php
// echo "<pre>";
// print_r($usuario);
// echo "</pre>";
//exit();
?>
        <form class="form-horizontal" method="POST" action=" <?php echo base_url(); ?>usuarios/update">
              <div class="box-body">
                <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label text-right">Nombres</label>
                      <div class="col-sm-10">
                        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $usuario[0]->id ?>">
                        <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $usuario[0]->nombres ?>" >
                      </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label text-right">Apellidos</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellidos" name="apellidos"  value="<?php echo $usuario[0]->apellidos ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label text-right">Correo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $usuario[0]->correo ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label text-right" disabled>Alias</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alias" name="alias" value="<?php echo $usuario[0]->alias ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label text-right">Rol</label>
                  <div class="col-sm-10">
                            <select name="selectRol" id="selectRol" class="form-control">
                              <?php
                              if (is_array(!empty($roles))) {
                                echo '<option selected="true" ><b style="color:red">No tiene rol</b></option>';
                              }else{
                              foreach ($roles as $rol) {
                                if ($rol->id == $usuario[0]->rolId) { ?>
                                  <option value="<?php echo $rol->id ?>" selected="true" > <?php echo $rol->nombre ?></option>
                              <?php  } else{ ?>
                                  <option value="<?php echo $rol->id ?>"> <?php echo $rol->nombre ?></option>
                                <?php
                              }
                            }}?>
                        <option value="0">Quitar rol</option>
                        </select>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" title="Actualizar unicamente datos de usuario">Actualizar</button>
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
              <h3 class="box-title"><b>Funcionalidades</b></h3>
            </div>
           <div class="form-group">
            <br>
<?php
$bandera=false;
for ($i=0; $i < sizeof($funcionalidades) ; $i++) {

    for ($j=0; $j<sizeof($usuario)  ; $j++) {
        if($funcionalidades[$i]->id == $usuario[$j]->funcionalidadId){
          $bandera=true;
          echo "<label><input type='checkbox' checked='true'> " . $funcionalidades[$i]->nombre . "</label><br>";
        }
    }
    if (!$bandera) {
           echo "<label><input type='checkbox'> " . $funcionalidades[$i]->nombre . "</label><br>";
    }else{
    $bandera=false;
    }
}

?>
</div>

          </div>
          </div>
        </div><!-- fin md -->
<!-- ###################### -->
    </section>
</div>  <!-- content-wraper -->
<br>
