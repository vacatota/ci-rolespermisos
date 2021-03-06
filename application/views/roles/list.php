<div class="content-wrapper">
  <section class="content-header">
      <!--############### TITULO DE LA PAGINA ###############-->
    <h1>
        ROLES
        <small>listado</small>
      </h1>
    <!-- ####### FIN TITULO DE LA PAGINA ############-->
    <!-- ########### BREADCRUMB ########################-->
      <ol class="breadcrumb"><!-- Accesos para saber su ubicación -->
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>usuarios">Usuarios</a></li>
        <li class="active" style='color:green'><b>Roles</b></li>
      </ol>
      <hr style="padding: 0; margin: 0; border-top: solid 2px  #aeb5ba">
     <!-- ########### FIN DE BREADCRUMB ########################-->
    </section>
      <section class="content">

    <div class="col-lg-6  col-md-6 col-sm-6 col-xs-10">
        <a href="<?php echo base_url() ?>roles/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Rol</a>
    </div><br>



    <!--Muestra mensajes del resultado de las consultas a Bd -->
            <?php
if ($this->session->flashdata('mensaje') != '') {
    ?>
             <div   style="width: 50%" class="center-block text-center alert alert-<?php echo $this->session->flashdata('css') ?>">
              <?php echo $this->session->flashdata('mensaje') ?></div>
            <?php

    echo "<script>
      window.onload = function() {
      reloadPage('roles')
             }
     </script>";
}
?>
<!--Fin mensajes del resultado de las consultas a Bd -->

    <h1 class="text-center" style="color: #138bc7"><b>LISTADO DE ROLES</b></h1>
<div class="row">
                <div class="table-responsive col-md-10">
                    <table id="example1" class="table table-bordered table-hover table-condensed">

                            <thead style="background-color: #2c9bd2; align-text:center">
                                <tr>
                                    <th class="text-center">#</th>
                                     <th class="text-center">ROL</th>
                                     <th colspan="2" class="text-center">ACCIONES</th>
                                </tr>
                            </thead>
                                <tbody>
                               <?php


//print_r($roles);
$nro = 1;
if (!empty($roles)) {
    foreach ($roles as $rol) {
        ?>
                                    <tr>
                                          <td style="text-align: center;"><?php echo $nro ?></td>
                                          <td><?php echo $rol->nombre; ?></td>
                                    <td class="text-center"><a href="<?php echo base_url() . 'roles/edit/' . $rol->id?>" title="Permite editar un rol."><i class="fa fa-edit"></i></a></td>
                                      <td class="text-center"><a href="usarios/delete/<?php echo $rol->id?>" title="Permite eliminar un rol."><i class="fa fa-trash"></i></a></td>
                                    </tr> <?php
$nro = $nro + 1;
    }
}?>
                  </tbody>
              </table>
          </div>
        </div><!-- fin row -->
    </section>
</div><!-- content-wraper -->
