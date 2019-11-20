<style>
  body{font-family:'Roboto',Arial, Helvetica, sans-serif; background-color:#fafafa;}
  .container { margin:150px auto; max-width:728px;}
</style>

<div class="content-wrapper">
  <section class="content-header">
      <!--############### TITULO DE LA PAGINA ###############-->
    <h1>
        Cuentas
        <small>Arbol</small>
      </h1>
    <!-- ####### FIN TITULO DE LA PAGINA ############-->
    <!-- ########### BREADCRUMB ########################-->
      <ol class="breadcrumb"><!-- Accesos para saber su ubicación -->
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">Cuentas</li>
      </ol>
      <hr style="padding: 0; margin: 0; border-top: solid 2px  #aeb5ba">
     <!-- ########### FIN DE BREADCRUMB ########################-->
    </section>



<script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<h1 class="text-center" style="color: #138bc7"><b>ARBOL DE CUENTAS CONTABLES</b></h1>
<div class="row">
                <div class="col-md-12">
                <?php
  if (!empty($cuentas)) {  ?>
    <ul class="file-tree">
      <?php
    foreach ($cuentas as $cuenta) {  ?>
 
  <li><a href="#"><?php echo $cuenta->nombre?><input type="hidden" value="<?php echo $cuenta->id?>" class="tree" ></a>
            <ul>     
                <li><a href="#">X</a>
                    <ul>     
                        <li><a href="#">Y</a>
                            <ul>     
                                <li><a href="#">Z</a>
                                
                                </li>
                            </ul>

                        </li>
                    </ul>
                </li>
           </ul>
  </li>
  <?php } ?>
  </ul><!-- Fin de file-tree -->
    <?php } ?>
  
 
  </div>
        </div><!-- fin row -->
    </section>
</div><!-- content-wraper -->
