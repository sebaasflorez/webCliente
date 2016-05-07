 <div class="container">
 	<form role="form" class="form-signin" action="<?php echo site_url('login/validar_ingreso');?> " enctype="multipart/form-data" name="" method="post">
 		<h2 class="form-signin-heading text-center">Gestor Documental</h2>
 		<label for="usuario" class="sr-only">Usuario</label>
 		<input name="usuario" type="text" id="usuario" class="form-control" placeholder="Usuario" required autofocus>
 		<label for="inputPassword" class="sr-only">Clave</label>
 		<input name="clave" type="password" id="inputPassword" class="form-control" placeholder="Clave" required>
 		<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
 	</form>
 </div> 
 <?php if (isset($fail)) {
 	?>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-4"></div>
 			<div class="col-md-4">
 				<div role="alert" class="alert alert-warning alert-dismissible fade in">
 					<button aria-label="Close" data-dismiss="alert" class="close" type="button">
 						<span aria-hidden="true">×</span></button> <strong>Error!</strong> Datos incorrectos.
 					</div></div>
 					<div class="col-md-4"></div>
 				</div>
 				
 			</div>
 			
 			<?php
 		} ?>