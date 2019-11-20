<div class="content-wrapper">
  <section class="content-header">
      <!--############### TITULO DE LA PAGINA ###############-->
    <h1>
        Rol
        <small>Nuevo</small>
      </h1>
    <!-- ####### FIN TITULO DE LA PAGINA ############-->
    <!-- ########### BREADCRUMB ########################-->
      <ol class="breadcrumb"><!-- Accesos para saber su ubicación -->
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href=" <?php echo base_url() ?>roles">Roles</a></li>
        <li class="active">Nuevo rol</li>
      </ol>
      <hr style="padding: 0; margin: 0; border-top: solid 2px  #aeb5ba">
     <!-- ########### FIN DE BREADCRUMB ########################-->
    </section>

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

      <section class="content">
    <h1 style="color: #138bc7"><b>Creación de nuevo rol   </b></h1>
    <br>
                <div class="col-md-6">
                  <div class="box box-primary">
            <div class="box-header with-border">
 <div class="box-header with-border">
              <h3 class="box-title">Ingrese un nuevo rol</h3>
            </div>
           <form class="form-horizontal" method="POST" action=" <?php echo base_url(); ?>roles/create ">
              <div class="box-body">
               <div class="form-group">
                  <label for="" class="col-sm-2 control-label text-right">Rol</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="rol">
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