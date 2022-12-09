<?php if (!isset($_SESSION["id_usuario"])) { ?>
	<section class="home-slider owl-carousel js-fullheight">
		<div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 col-sm-12 text-center ftco-animate">
						<h1 class="mb-4 mt-5">La forma más sencilla de crear tu menú</h1>
						<p><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Registrate ya!<br><span style="font-size:xx-large"> $49.99</span></a> </p>
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 col-sm-12 text-center ftco-animate">
						<h1 class="mb-4 mt-5">Crea tu menú personalizado</h1>
						<p><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Registrate ya!<br><span style="font-size:xx-large"> $49.99</span></a> </p>
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 col-sm-12 text-center ftco-animate">
						<h1 class="mb-4 mt-5">Crea un codigo QR para tu menu</h1>
						<p><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Registrate ya!<br><span style="font-size:xx-large"> $49.99</span></a> </p>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-wrap-about ftco-no-pb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 wrap-about ftco-animate text-center">
					<div class="heading-section mb-4 text-center">
						<span class="subheading">Menús para Restaurantes</span>
						<h2 class="mb-4">QR Menus</h2>
					</div>
					<p>Mejore la experiencia de sus huéspedes con las soluciones QRMenus. Deje que sus clientes vean el menú digital de su marca. Su personal tendrá más tiempo para la hospitalidad. QRMenus aumenta le da a sus clientes la visión de todo lo que usted puede ofrecer, con un solo clic en su dispositivo movil.</p>

					<div class="video justify-content-center">
						<a href="https://vimeo.com/497395244" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<span class="ion-ios-play"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
		<!-- <section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter"> -->
		<div class="container">
			<div class="row d-md-flex align-items-center justify-content-center">
				<div class="col-lg-10">
					<div class="row d-md-flex align-items-center">
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="5">0</strong>
									<span>Años de Experiencia</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="500">0</strong>
									<span>Clientes felices</span>
								</div>
							</div>
						</div>
						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="1000">0</strong>
									<span>Menus Generados</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Ofrecemos</span>
					<h2 class="mb-4">¿Qué Ofrecemos?</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
					<div class="media block-6 services d-block">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-cake"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Acceso para toda la vida</h3>
							<p>Con nuestro unico plan podrás pagar una sola vez y tendrás disponible el menú para toda la vida.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
					<div class="media block-6 services d-block">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-meeting"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Sube tu logo</h3>
							<p>En nuestra plataforma podrás subir el logo de tu empresa, para que aparezca en todos los menus.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
					<div class="media block-6 services d-block">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-tray"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Sube fotografias</h3>
							<p>Podrás subir fotografías de tus recetas, para que los clientes sepan de antemano lo que estará consumiendo.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-1.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-2.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-3.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-4.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-5.jpg);">
						<span class="ion-logo-instagram"></span>
					</a>
				</div>
			</div>
		</div>
	</section>

<?php } else { ?>
	<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $resultados->logo_empresa ?>');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Bienvenido <?php echo $_SESSION["usuario"] ?></h1>
				</div>
			</div>
		</div>
	</section>
	<?php if ($_SESSION["monto_pago"] == 0) { ?>
		<section class="ftco-section ftco-wrap-about ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-10 wrap-about ftco-animate text-center">

						<div class="heading-section mb-4 text-center">
							<span class="subheading">Realizar el Pago</span><br>
							<h2 class="mb-4"></h2>
						</div>
						<p>Hola <?php echo $_SESSION["nombre_contacto"] ?></p>

						<h3>Ya solo te falta un paso más, realiza el pago utilizando Paypal.</h3><br>
						<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_xclick">
							<!-- <"Aqui se pone la cuenta de paypal que recibe el dinero"> -->
							<input type="hidden" name="business" value="sb-qbxer15328772@business.example.com">
							<input type="hidden" name="item_name" value="Suscripción Pago único de QRMEnus.com">
							<input type="hidden" name="item_number" value="cod00001">
							<input type="hidden" name="amount" value="49.99">
							<!-- <"Aqui se pone si queremos cobrar impuestos"> -->
							<input type="hidden" name="tax" value="0">
							<!-- <"Aqui se pone la cantidad de productos a comprar"> -->
							<input type="hidden" name="quantity" value="1">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="country" value="PA">
							<input type="hidden" name="return" value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("retorno") ?>">
							<input type='hidden' name='notify_url' value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("registar_notificacion") ?>">
							<input type='hidden' name='cancel_return' value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("cancelar") ?>">
							<input type="submit" name="submit" value="Pagar con Paypal 49.99 " class="btn btn-warning text-light">
						</form>

						<br>
						<p>(*) Al dar clic en el botón saldrás hacia el sitio de paypal, pero luego podras regresar y tu cuenta ya estará activa.</p><br>
						<br>


					</div>

				</div>
			</div>
		</section>
	<?php } else { ?>
		<section class="ftco-section ftco-wrap-about ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-10 wrap-about ftco-animate text-center">

						<div class="heading-section mb-4 text-center">
							<span class="subheading">Administra tu cuenta</span><br>
							<h2 class="mb-4"></h2>
						</div>
						<p>Hola <?php echo $_SESSION["nombre_contacto"] ?></p>
						<a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("modificar_cuenta") ?>"><button type="button" class="btn btn-primary btn-lg">Actualizar mis datos</button></a>
						<br> <br>
						<a href="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("mostrar") ?>"><button type="button" class="btn btn-primary btn-lg">Administrar categorias de Platos</button></a>
						<br> <br>
						<a href="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("mostrar") ?>"><button type="button" class="btn btn-primary btn-lg">Administrar platos</button></a>
						<br> <br>
						<a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("ver_menu") . "&id=" . $_SESSION["id_usuario"] ?>" target="_blank"><button type="button" class="btn btn-primary btn-lg">Ver Menu</button></a>
						<br> <br>
						<a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("vercodigoqr") ?>"><button type="button" class="btn btn-primary btn-lg">Ver Codigo QR</button></a>
						<br>  <br>
						<a href="<?php echo "index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("ver_pagos") ?>"><button type="button" class="btn btn-primary btn-lg">Ver pagos</button></a>
						<br>  <br>
                        <a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cambio_de_contrasena") ?>"><button type="button" class="btn btn-primary btn-lg">Actualizar Contraseña</button></a>
						<br>  <br>
						<?php if($resultados->tipo_usuario==1){ ?>
						<a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("admin") ?>"><button type="button" class="btn btn-primary btn-lg">Administrador</button></a>
						<br>  <br>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
<?php }
} ?>