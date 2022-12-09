<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container-fluid px-md-5 px-3">
    <div class="row mb-5">
      <div class="col-md-6 col-lg-4">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">QRMenus</h2>
          <p>La mejor vía para tener tu menú automatizado.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Noticias</h2>
          <p>Dejanos tu correo para enviarte noticias destacadas </p>
          <form action="<?php echo "index.php?c=" . seg::codificar("subscripcion") . "&m=" . seg::codificar("registrar") ?>" class="subscribe-form" method="POST">
            <div class="form-group">
              <input type="text" class="form-control mb-2 text-center" placeholder="Introduzca su correo" name="txtEmail">
              <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
              <input type="submit" value="Suscribirse" class="form-control submit px-3">
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Instagram</h2>
          <div class="thumb d-sm-flex">
            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
            </a>
            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
            </a>
            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
            </a>
          </div>
          <div class="thumb d-flex">
            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
            </a>
            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
            </a>
            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> Todos los derechos reserevados | qrmenus.com
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>

</html>