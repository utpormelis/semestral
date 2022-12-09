<link href="css/tabla.css" rel="stylesheet" type="text/css">
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Transferencias Realizadas</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Información <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-wrap-about ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 wrap-about ftco-animate text-center">
                <div class="heading-section mb-4 text-center">
                    <span class="subheading">Pagos Paypal</span>
                    <h2 class="mb-4">Pagos Paypal</h2>
                </div>
            </div>

            <div class="hscroll">

                <table width="100%" border="1" cellspacing="0" cellpadding="6">
                    <thead>
                        <tr>
                            <th><center>Payer_id</center></th>
                            <th><center>Payment_date</center></th>
                            <th><center>Payment_status</center></th>
                            <th><center>First_name</center></th>
                            <th><center>Last_name</center></th>
                            <th><center>Payer_email</center></th>
                            <th><center>Receiver_id</center></th>
                            <th><center>Mc_gross</center></th>
                            <th><center>Mc_fee</center></th>
                            <th><center>Ganancias</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultado as $re) { ?>
                            <tr>
                                <td><center><?php echo $re->payer_id ?></center></td>
                                <td><center><?php echo $re->payment_date ?></center></td>
                                <td><center><?php echo $re->payment_status ?></center></td>
                                <td><center><?php echo $re->first_name ?></center></td>
                                <td><center><?php echo $re->last_name ?></center></td>
                                <td><center><?php echo $re->payer_email ?></center></td>
                                <td><center><?php echo $re->receiver_id ?></center></td>
                                <td><center><?php echo $re->mc_gross ?></center></td>
                                <td><center><?php echo $re->mc_fee ?></center></td>
                                <td><center><?php echo $re->mc_gross - $re->mc_fee ?></center></td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
            <br>
</section>

<section class="ftco-section ftco-wrap-about ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 wrap-about ftco-animate text-center">
                <div class="heading-section mb-4 text-center">
                    <span class="subheading">Usuarios Paypal</span>
                    <h2 class="mb-4">Usuarios Paypal</h2>
                </div>
            </div>


            <div class="container">
                <div class="hscroll">

                    <table width="100%" border="1" cellspacing="0" cellpadding="6">
                        <thead>
                            <tr>
                                <th><center>Usuario</center></th>
                                <th><center>Correo</center></th>
                                <th><center>Cuenta Paypal</center></th>
                                <th><center>Nombre Contacto</center></th>
                                <th><center>Nombre Restaurante</center></th>
                                <th><center>Tipo Usuario</center></th>
                                <th><center>Fecha de Registro</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultados as $re) { ?>
                                <tr>
                                    <td><center><?php echo $re->usuario ?></center></td>
                                    <td><center><?php echo $re->correo ?></center></td>
                                    <td><center><?php echo $re->cuenta_paypal ?></center></td>
                                    <td><center><?php echo $re->nombre_contacto ?></center></td>
                                    <td><center><?php echo $re->nombre_restaurante ?></center></td>
                                    <td><center><?php echo $re->tipo_usuario ?></center></td>
                                    <td><center><?php echo $re->fecha_registro ?></center></td>
                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            <br>
            </div>

</section>