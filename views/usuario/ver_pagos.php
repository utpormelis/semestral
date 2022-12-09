<link href="css/tabla.css" rel="stylesheet" type="text/css">
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $resultados->imagen_fondo ?>');" data-stellar-background-ratio="0.5">
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
                            <th><center>Id</center></th>
                            <th><center>Fecha de pago</center></th>
                            <th><center>Nombre</center></th>
                            <th><center>Apellido</center></th>
                            <th><center>Producto</center></th>
                            <th><center>Cantidad</center></th>
                            <th><center>Precio</center></th>
                            <th><center>Itbms</center></th>
                            <th><center>Codigo Producto</center></th>
                            <th><center>Email del Cliente</center></th>
                            <th><center>Email Empresa</center></th>
                            <th><center>Moneda Local</center></th>
                            <th><center>Residencia</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultado as $re) { ?>
                            <tr>
                                <th scope="row"><center><?php echo $re->_id ?></center></th>
                                <td><center><?php echo $re->payment_date ?></center></td>
                                <td><center><?php echo $re->first_name ?></center></td>
                                <td><center><?php echo $re->last_name ?></center></td>
                                <td><center><?php echo $re->item_name ?></center></td>
                                <td><center><?php echo $re->quantity ?></center></td>
                                <td><center><?php echo $re->payment_gross ?></center></td>
                                <td><center><?php echo $re->payment_fee ?></center></td>
                                <td><center><?php echo $re->item_number ?></center></td>
                                <td><center><?php echo $re->payer_email ?></center></td>
                                <td><center><?php echo $re->receiver_email ?></center></td>
                                <td><center><?php echo $re->mc_currency ?></center></td>
                                <td><center><?php echo $re->residence_country ?></center></td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
    </div>
</section>