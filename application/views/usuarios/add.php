<div class="content-wrapper">
  <section class="content-header">
      <!--############### TITULO DE LA PAGINA ###############-->
    <h1>
        Usuario
        <small>Nuevo</small>
      </h1>
    <!-- ####### FIN TITULO DE LA PAGINA ############-->
    <!-- ########### BREADCRUMB ########################-->
      <ol class="breadcrumb"><!-- Accesos para saber su ubicación -->
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Usuario</a></li>
        <li class="active">Nuevo</li>
      </ol>
      <hr style="padding: 0; margin: 0; border-top: solid 2px  #aeb5ba">
     <!-- ########### FIN DE BREADCRUMB ########################-->

  <!-- validacion formulario -->
<?php $errors = validation_errors('<li>', '</li>'); //helper de nombre "validation_errors"
if ($errors != "") //si errrors es distinto de vacio, entra a mpstrar lo del if
{?>
                        <div class="alert alert-danger">
                         <ul>
                        <?php echo $errors; ?>
                        </ul>
                        </div>
                        <?php
}?>
  <!-- Fin validacion formulario -->
    </section>

      <section class="content">
    <h1 class="text-center" style="color: #138bc7"><b>Creación de nuevo usuario   </b></h1>
    <br>
                <div class="col-md-12">
                  <div class="box box-primary">
            <div class="box-header with-border">
 <div class="box-header with-border">
              <h3 class="box-title">Usuario registrado</h3>
            </div>
           <form class="form-horizontal" method="POST" action=" <?php echo base_url(); ?>usuarios/create ">
              <div class="box-body">

                <div class="form-group">
                   <label for="" class="col-sm-2 control-label text-right">Cédula</label>
                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo set_value('cedula') ?>">
                   </div>
                 </div>

               <div class="form-group">
                  <label for="" class="col-sm-2 control-label text-right">Nombres</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="nombres" value="<?php echo set_value('nombres') ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label text-right">Apellidos</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="apellidos" value="<?php echo set_value('apellidos') ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label text-right">Correo</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="correo" value="<?php echo set_value('correo') ?>"></div>
                </div>
                 <div class="form-group">
                  <label for="" class="col-sm-2 control-label text-right">Alias</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="alias" value="<?php echo set_value('alias') ?>"></div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label text-right">Seleccione rol</label>

                  <div class="col-sm-10">
                   <!--  <div class="form-group"> --><!-- Select-->
                            <select name="idRol" id="idRol" class="form-control">
                             <option>Seleccione un rol</option>
                             <?php foreach ($roles as $rol) {?>
                                <option value="<?php echo $rol->id ?>" <?php echo set_select('rolUsuario', $rol->id)?>>
                                  <?php echo $rol->nombre ?>
                                </option>
                             <?php }?>
                            </select>
                <!-- </div> --> <!--// Select -->
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" title="Actualizar unicamente datos de usuario">Guardar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
        </div><!-- fin md -->

    </section>
</div><!-- content-wrap
