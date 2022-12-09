<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.php">QRMenus</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
				<?php if (!isset($_SESSION["id_usuario"])) { ?>
					<li class="nav-item"><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("login") ?>" class="nav-link">Entrar</a></li>
					<li class="nav-item cta"><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>" class="nav-link">Registro</a></li>
				<?php } else { ?>
					<li class="nav-item"><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>" class="nav-link">Cerrar Sesion</a></li>
				<?php }  ?>
			</ul>
		</div>
	</div>
</nav>
<!-- END nav -->