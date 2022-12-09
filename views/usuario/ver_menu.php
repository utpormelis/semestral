
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php 

if (isset($datos_usuario->imagen_fondo)){
echo $datos_usuario->imagen_fondo; 
} else{
	echo $datos_usuario->logo_empresa;
}

?>');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread"><?php echo $nombre_empresa ?></h1>
				 
			</div>
		</div>
	</div>
</section>
<section class="ftco-section">
	<div class="container-fluid px-4">
		<div class="row justify-content-center mb-5 pb-2">
		</div>
		<div class="row">
			<?php
			foreach ($listaCat as $categoria) { ?>
				<div class="col-md-6 col-lg-4 menu-wrap">
					<div class="heading-menu text-center ftco-animate">
						<h3><?php echo $categoria["nombre_categoria"] ?></h3>
					</div>
					<?php
					foreach ($listaPlat as $plato)
						if ((new MongoDB\BSON\ObjectId($plato->_id_categoria)) == $categoria["_id"]) { ?>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img  img" style="background-image: url(<?php echo $plato["foto_plato"] ?>);"></div>
 							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3><?php echo $plato["nombre_plato"] ?></h3>
									</div>
									<div class="one-forth">
										<span class="price">$<?php echo $plato["precio_plato"] ?></span>
									</div>
								</div>
								<p><?php echo $plato["descripcion_plato"] ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
</section>