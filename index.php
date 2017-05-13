<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Pasta Studios</title>

    <?php
      include("include/meta.php");
    ?>

  </head>
  <body class="page-home">

    <?php
      include("include/header.php");
    ?>
    <main>
      <!-- Inizio I Carosello -->
      <div class="container-fluid carousel">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide swipe-carousel swiper-slide--img-pasta1 font-white"><h2>La vita è una combinazione di magia e pasta.<br>(F. Fellini)</h2></div>
            <div class="swiper-slide swipe-carousel swiper-slide--img-pasta2 font-white"><h2>La vita è una combinazione di magia e pasta.<br>(F. Fellini)</h2></div>
            <div class="swiper-slide swipe-carousel swiper-slide--img-pasta3 font-white"><h2>La vita è una combinazione di magia e pasta.<br>(F. Fellini)</h2></div>
            <div class="swiper-slide swipe-carousel swiper-slide--img-pasta4 font-white"><h2>La vita è una combinazione di magia e pasta.<br>(F. Fellini)</h2></div>
            <div class="swiper-slide swipe-carousel swiper-slide--img-pasta5 font-white"><h2>La vita è una combinazione di magia e pasta.<br>(F. Fellini)</h2></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!-- Fine I Carosello -->
      <!-- Info Box -->
      <div class="container-fluid info">
        <div class="container">
          <?php
            $titolo = "Chi siamo";
            include("include/titolo.php");
          ?>
          <div class="row">

            <?php
              $titolo = "L'Azienda";
              $icona = "images/logo_pasta.png";
              include('include/box-richiamo.php');

              $titolo = "I Prodotti";
              $icona = "images/logo_prodotti.png";
              include('include/box-richiamo.php');

              $titolo = "Le ricette";
              $icona = "images/logo_ricette.png";
              include('include/box-richiamo.php');
            ?>


          </div>
        </div>
      </div>
      <!-- End Info Box -->
      <!--Main Box-->
      <div class="container">
        <div class="row main--box">
          <div class="col-xs-12 col-sm-6">
            <!-- Inizio II Carosello -->
            <div class="container-fluid carousel">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide swipe-carousel swiper-slide--img-pasta6 "></div>
                  <div class="swiper-slide swipe-carousel swiper-slide--img-pasta7 font-white"></div>
                  <div class="swiper-slide swipe-carousel swiper-slide--img-pasta8 font-white"></div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <!-- Fine II Carosello -->
          </div>
          <div class="col-xs-12 col-sm-6 main--box--text">
            <div class="row">
              <div class="col-xs-12 col-md-offset-1">
                <h2 class="text-uppercase font-bold">La qualit&Aacute;<br> &Egrave; il nostro segreto</h2>
              </div>
              <div class="col-xs-12 col-sm-1 col-md-offset-1 border"></div>
              <div class="col-xs-12 col-sm-11 col-md-offset-1">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                <button type="button" class="btn btn-primary btn-lg text-uppercase">Scopri</button>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Fine Box -->
    </main>
    <footer>
      <div class="container">
        <div class="row">
          <?
            $logoModificatore = "footer";
            include("include/logo.php");
          ?>
          <div class="col-xs-11 col-md-offset-1 footer--logo">
            <img src="images/logo_pasta.png" alt="logo_pasta">
          </div>
          <div class="col-xs-12 col-sm-3 text-center text-uppercase">
            <h3 class="font-bold">Pasta Studios</h3>
          </div>
          <div class="col-xs-12">
            <div class="col-xs-12 col-sm-3 border"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-3 footer--box">
            <h4 class="text-uppercase font-bold">Help</h4>
            <ul class="list-unstyled">
              <li><a href="#">Servizio Clienti</a></li>
              <li><a href="#">Metodo di Pagamento</a></li>
              <li><a href="#">Cookie policy</a></li>
              <li><a href="#">Privacy </a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-3 footer--box">
            <h4 class="text-uppercase font-bold">Contattaci</h4>
            <p>Resta sempre Collegato!</p>
            <ul class="list-unstyled">
              <li class="footer--social"><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li class="footer--social"><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li class="footer--social"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li class="footer--social"><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li class="footer--social"><a href="#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-3 footer--box">
            <h4 class="text-uppercase font-bold">Contattaci</h4>
            <p>Via Marciano <br> Nola (NA)<br> +39 0818234567 <br> <a href="mailto:pastastudios@email.com">pastastudios@email.com</a></p>
          </div>
          <div class="col-xs-12 col-sm-3 footer--box">
            <h4 class="text-uppercase font-bold">News Letter</h4>
            <div class="cd-form-wrapper cd-container">
            	<form class="cd-form">
            		<label class="cd-label" for="cd-email">Iscriviti alla Newsletter</label>
            		<input type="email" id="cd-email" class="cd-email" name="cd-email" placeholder="Enter your email address">
            		<input type="submit" class="cd-submit" value="Submit">
            		<div class="cd-loading"></div>
            	</form>
              <p>Non perdere neanche un aggiornamento!</p>
            </div>
          </div>
        </div>
        <div class="row footer--nav">
          <div class="col-xs-12 col-sm-6">
            <ul class="list-unstyled font-bold">
              <li><a href="#">Home</a></li>
              <li><a href="#">Chi siamo</a></li>
              <li><a href="#">Prodotti</a></li>
              <li><a href="#">Ricette</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 text-uppercase font-bold align-text-right footer--credits">
            All rights reserved &#x24B8;AntoWeb
          </div>
        </div>
      </div>
    </footer>

    <script src="http://idangero.us/swiper/dist/js/swiper.min.js"></script>
    <script>
      var swiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      paginationClickable: true,
      loop: true,
      });
    </script>

    <!-- Map-->

  </body>
</html>
