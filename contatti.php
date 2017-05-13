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
  <body class="page-contatti">

    <?php
      include("include/header.php");
    ?>
    <main>
      <!-- Inizio I Carosello -->

      <div class="container-fluid info">
        <div class="container">
          <?php
            $titolo = "Contatti";
            include("include/titolo.php");
          ?>
          <div class="row">
            <?php
              $titolo = "Sede legale";
              $icona = "images/logo_pasta.png";
              include('include/box-richiamo.php');
            ?>
          </div>
        </div>
      </div>

      <!-- Fine Box -->
    </main>
    <footer>
      <div class="container">
        <div class="row">
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
