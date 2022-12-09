<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $resultados->imagen_fondo ?>');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Administrar Platos</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Administrar Platos <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container-fluid px-0">
		<div class="row d-flex no-gutters">
			<div class="col-md-12 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
				<div class="py-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">Modificar Plato</span>
						<h2 class="mb-4">Modificar Plato</h2>
					</div>
					<form method="POST" action="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("actualizar") ?>">
					<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Descripcion <span class="text-danger">(*)</span></label>
									<input type="text" class="form-control" placeholder="Nombre de Plato" name="txtNombre" value="<?php echo isset($resultado["nombre_plato"]) ? $resultado["nombre_plato"] : "" ?>">
									<span class="text-danger"><?php echo isset($error[0]) ? $error[0] : "" ?></span>
                                    <input type="hidden" name="_id" value="<?php echo $id ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Descripcion <span class="text-danger">(*)</span></label>
									<input type="text" class="form-control" placeholder="Descripción de categoria" name="txtDescripcion" value="<?php echo isset($resultado["descripcion_plato"])? $resultado["descripcion_plato"] : "" ?>">
									<span class="text-danger"><?php echo isset($error[1]) ? $error[1] : "" ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Precio <span class="text-danger">(*)</span></label>
									<input type="number" class="form-control" placeholder="Precio de plato" name="txtPrecio" value="<?php echo isset($resultado["precio_plato"]) ? $resultado["precio_plato"] : "" ?>">
									<span class="text-danger"><?php echo isset($error[2]) ? $error[2] : "" ?></span>
							</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Imagen de Fondo <span class="text-danger"></span></label>
									<input type="file" class="form-control" name="imgFondo" value="<?php echo isset($resultados["imagen_fondo"]) ? $resultados["imagen_fondo"] : "" ?>">
									<span class="text-danger"><?php echo isset($error[4]) ? $error[1] : "" ?></span>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Categoria <span class="text-danger">(*)</span></label>
									<select class="form-control" aria-label="Default select example" name="lstCategoria">
										<?php foreach ($lista_categoria as $r) { ?>
											<option value="<?php echo $r->_id ?>"><?php echo $r["nombre_categoria"] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="col-md-12 mt-12">
								<input type="hidden" name="token" value="<?php echo seg::getToken() ?>">

								<div class="form-group">
									<div class="row">
										<div class="col-md-6"><span class="text-danger">(*) Obligatorio</span></div>
										<br><br>
									</div>
									<input type="submit" value="Actualizar >" class="btn btn-success py-3 px-5">

								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>