<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <title>Roles | Permisos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/login/estiloLogin.css">
   <link rel="shortcut icon" href="<?php echo base_url() ?>public/login/sisven.png" />
</head>
<body>

<div class="modal-dialog text-center">
	<div class="col-12 col-sm-12 col-md-10 main-section">
		<div class="modal-content">
			<div class="col-12 user-img">
				<img src="<?php echo base_url() ?>public/login/face.png">
			</div>
<form action="<?php echo base_url(); ?>login/login" method="post" class="col-12">
			<!-- <form class="col-12"> -->
				<div class="form-group">
					<input type="text" class="form-control" name="usuario" placeholder="Ingrese su nombre">
				</div>
				<div class="form-group">
					<input type="calve" name="calve" class="form-control" placeholder="Ingrese su clave">
				</div>
				<button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Acceder</button>
			</form>
			<div class="col-12 forgot">
				<a href="#">Olvidaste tu clave?</a>
			</div>

		</div>
		 <?php if ($this->session->flashdata("error")): ?>
              <div class="alert alert-danger" style="padding: 0; background-color: red; color:black">
                <p><b><?php echo $this->session->flashdata("error") ?></b></p>
              </div>
            <?php endif;?>
	</div>
</div>
</body>
</html>
