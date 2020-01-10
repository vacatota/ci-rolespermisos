<!--CONTENIDO PARA VISTA Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Titulo de la tabla, migas de pan -->
  <section class="content-header"><!-- TITULO SUPERIOR -->
<h1>
  USUARIOS
  <small>Listado</small>
</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i><b style="color:red"> Home</b></a></li>
  <li><a href="<?php echo base_url()?>usuarios">Usuarios</a></li>
  <li class="active">listado</li>
</ol>
</section> <!-- Fin titulo de la tabla, migas de pan -->
  <section class="content">
      <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">

          <div class="box-header">
            <div class="box-title">
              <a href="javascript:window.history.back();">
                <button type="button" class="btn btn-primary btn-sm"  data-toggle="tooltip"
                title="Regresa a la pagina anterior">
                <i class="fa fa-mail-reply-all"></i> Atras</button></a>
              <a href="<?php echo base_url()?>usuarios/add">
              <button type="button" class="btn btn-primary btn-sm"  data-toggle="tooltip"
                      title="Agregar un nuevo usuario">
                <i class="fa fa-user"></i> Nuevo</button></a>

                  <a href="#">
                  <button type="button" class="btn btn-primary btn-sm"  data-toggle="tooltip"
                          title="Regresa a la pagina anterior">
                    <i class="fa fa-file-pdf-o"></i>  Pdf</button></a>
              </div>
                                   <!-- tools box -->
                       <div class="pull-right box-tools">
                         <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                 title="Collapse">
                           <i class="fa fa-minus"></i></button>
                         <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                                 title="Remove">
                           <i class="fa fa-times"></i></button>
                       </div>
                       <!-- /. tools -->
                     </div>
                     <!-- /.box-header -->
<hr style="border:1px solid  #bfc9ca; margin:0">
          <div class="box-body">

            <!--Muestra mensajes del resultado de las consultas a Bd -->
                    <?php
          if ($this->session->flashdata('mensaje') != '') {
            ?>
                     <div id="mensajeConfirm"   style="width: 50%" class="center-block text-center alert alert-<?php echo $this->session->flashdata('css') ?>">
                      <?php echo $this->session->flashdata('mensaje') ?></div>
                    <?php
            echo "<script>
              window.onload = function() {
              reloadPage()
                     }
             </script>";
          }
          ?>
          <!--Fin mensajes del resultado de las consultas a Bd -->

            <div class="row">
              <div class="form-group">
                 <div class="col-sm-12">
                 <input class="form-control" id="buscar" type="text" placeholder="Buscar..">
               </div>
               </div>
               <br>
                            <div class="table-responsive col-md-12">
                                <table id="dataTable" class="table table-bordered table-hover table-condensed">

                                        <thead style="background-color: #2c9bd2; align-text:center">
                                            <tr>
                                                <th class="text-center">#</th>
                                                 <th class="text-center">NOMBRES</th>
                                                 <th class="text-center">USUARIOS</th>
                                                 <th class="text-center">ROLES</th>
                                                 <th colspan="2" class="text-center">ACCIONES</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                           <?php
            $nro = 1;
            // echo "<pre>";
            // print_r($usuarios);
            // echo "</pre>";
            //$nRegPagina=3;
             //$total= count($usuarios);
             //$paginas=  ceil($total/$nRegPagina);
            if(!$_GET){
              header('Location:usuarios?pagina=1');
            }
                      if (!empty($usuarios)) {

                 foreach ($usuarios as $user) {
                    ?>
                                                <tr>
                                                      <td style="text-align: center;"><?php echo $nro ?></td>
                                                      <td><?php echo $user->nombres . ' ' . $user->apellidos ?></td>
                                                      <td>  <?php echo $user->alias ?></td>
                                        <?php
            if (!empty($user->rolId)) {
                        echo '<td>' . $user->nombre . '</td>';
                    } else {
                        echo '<td style="color:red"><b>No tiene Rol</b></td>';
                    }
                    ?>
                                                <!-- <td class="text-center"><a href="<?php //echo base_url() . 'usuarios/edit/' . $user->usuarioId ?>" title="Permite editar datos de un usuario y adminitrar roles."><i class="fa fa-edit"></i></a></td>
                                                  <td><a onclick=eliminar("<?php //echo base_url()?>usuarios/delete/<?php //echo $user->usuarioId ?>") title="Permite eliminar un usuario."><i class="fa fa-trash"></i></a></td> -->
                                                </tr> <?php
            $nro = $nro + 1;
                }
            }?>
                              </tbody>
                          </table>
                          <ul class="pagination pull-right">
                            <li class="<?php echo $_GET['pagina']<=1 ? 'disabled':''?>">
                              <a href="<?php echo base_url('usuarios')?>?pagina=<?php echo $_GET['pagina']-1?>">Ant.</a>
                            </li>
                            <?php for($i=0; $i<$paginas;$i++ ){ ?>
                            <li class="<?php echo $_GET['pagina']==$i+1 ? 'active':''; ?>" >
                              <a href=" <?php echo base_url('usuarios')?>?pagina=<?php echo $i+1?>"><?php echo $i+1?></a>
                            </li>
<?php } ?>
                            <li class="<?php echo $_GET['pagina']>=$paginas ? 'disabled':''?>">
                              <a href="<?php echo base_url('usuarios')?>?pagina=<?php echo $_GET['pagina']+1?>">Sig.</a>
                            </li>
                          </ul>
                      </div>
                    </div><!-- fin row -->
           </div> <!-- fin box-body -->

        </div><!-- /box box-primary -->
      </div><!-- /col-md-12 -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!--FIN CONTENIDO PARA VISTA /.content-wrapper -->
<script>
function eliminar(url){
    if(confirm('Esta seguro que desea eliminar este registro?')){
        window.location=url;
    }
}

function reloadPage(){
	setTimeout(function(){
	//window.location.href=url;
$("#mensajeConfirm").remove()},3000)
}
</script>
