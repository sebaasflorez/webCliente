  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
  	<div class="container">
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  			<a class="navbar-brand" href="<?php echo site_url('welcome'); ?>">Gestor Documental</a>
  		</div>
  		<div id="navbar" class="navbar-collapse collapse">
  			<ul class="nav navbar-nav">
  				<?php $value='Sebastian Florez' ?>
  				<li class=""><a href=""><?php echo $_SESSION['usuario']; ?></a></li>
  				<li class=""><a href="<?php echo site_url('login/salir'); ?>">Cerrar Sesion</a></li>
  			</ul>
  		</div>
  	</div>
  </nav>