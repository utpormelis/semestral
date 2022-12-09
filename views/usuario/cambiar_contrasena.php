<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center"> 
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Cambiar Contraseña</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Cambiar Contraseña <i class="ion-ios-arrow-forward"></i></span></p>
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
						<span class="subheading">Cuenta</span>
						<h2 class="mb-4">Modifica tu Contraseña</h2>
					</div>
					<form method="POST" action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cambio_de_contrasena") ?>">
						<div class="row">
						<div class="col-md-6">
								<div class="form-group pass_show">
									<label for="">Contraseña Actual <span class="text-danger">(*)</span></label>
									<input type="password" class="form-control" placeholder="Password" name="txtPassword" value="">
									<span class="text-danger"><?php echo isset($error[2]) ? $error[2] : "" ?></span>
								</div>
						
							</div>
							<div class="col-md-6">
							<div class="form-group pass_show">
									<label for="">Nueva Contraseña <span class="text-danger">(*)</span></label>
									<input type="password" class="form-control" placeholder="Password" name="txtPassword2" value="">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group pass_show">
									<label for="">Repetir Contraseña <span class="text-danger">(*)</span></label>
									<input type="password" class="form-control" placeholder="Password" name="txtPassword3" value="">
									
								</div>
							</div>
							</div>
							<div class="col-md-12 mt-12">
								<input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
								<div class="form-group">
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

<style>
	.pass_show{position: relative} 

.pass_show .ptxt { 

position: absolute; 

top: 60%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{color: #333333;} 
</style>

<script>
	  
$(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

}); 
</script>