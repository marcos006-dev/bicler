<?php
$version = trim(explode("=", file_get_contents('versions.md'))[1]);
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="colorlib" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Bicler</title>

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css?v=<?php echo $version; ?>" />
    <link rel="stylesheet" href="css/font-awesome.min.css?v=<?php echo $version; ?>" />
    <link rel="stylesheet" href="css/bootstrap.css?v=<?php echo $version; ?>" />
    <link rel="stylesheet" href="css/magnific-popup.css?v=<?php echo $version; ?>" />
    <link rel="stylesheet" href="css/owl.carousel.css?v=<?php echo $version; ?>" />
    <link rel="stylesheet" href="css/main.css?v=<?php echo $version; ?>" />
  </head>
  <body>
    <!-- Start alquiler bicicletas Area -->
    <section class="banner-area" id="home">
      <!-- Start Header Area -->
      <header class="default-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <h1 class="text-white">Bicler</h1>
            <a class="navbar-brand" href="index.php">
              <!-- <b ></b> -->
            </a>
          </div>
        </nav>
      </header>
      <!-- End Header Area -->
    </section>
    <!-- End alquiler bicicletas Area -->

    <!-- start bike tour Area -->
    <section class="default-banner active-blog-slider mt-2">
      <div
        class="item-slider relative"
        style="
          background: url(img/alquilerBicicletas/AlquilerBici1.jpg);
          background-size: cover;
        "
      >
        <div class="overlay" style="background: rgba(0, 0, 0, 0.3)"></div>
        <div class="container">
          <div class="row fullscreen justify-content-center align-items-center">
            <div class="col-md-10 col-12">
              <div class="banner-content text-center">
                <h1 class="text-uppercase text-white">Alquiler Bicicletas</h1>
                <a href="./pages/alquiler-bicicletas.php" class="text-uppercase header-btn">Ver Más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="item-slider relative"
        style="
          background: url(img/alquilerBicicletas/AlquilerBici2.jpg);
          background-size: cover;
        "
      >
        <div class="overlay" style="background: rgba(0, 0, 0, 0.3)"></div>
        <div class="container">
          <div class="row fullscreen justify-content-center align-items-center">
            <div class="col-md-10 col-12">
              <div class="banner-content text-center">
                <h1 class="text-uppercase text-white">Alquiler Bicicletas</h1>
                <a href="./pages/alquiler-bicicletas.php" class="text-uppercase header-btn">Ver Más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="default-banner active-blog-slider mt-2">
      <div
        class="item-slider relative"
        style="background: url(img/bikeTour/BikeTour1.jpg); background-size: cover"
      >
        <div class="overlay" style="background: rgba(0, 0, 0, 0.3)"></div>
        <div class="container">
          <div class="row fullscreen justify-content-center align-items-center">
            <div class="col-md-10 col-12">
              <div class="banner-content text-center">
                <h1 class="text-uppercase text-white">Bike Tour</h1>
                <a href="./pages/bike-tour.php" class="text-uppercase header-btn">Ver Más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="item-slider relative"
        style="background: url(img/bikeTour/BikeTour2.jpg); background-size: cover"
      >
        <div class="overlay" style="background: rgba(0, 0, 0, 0.3)"></div>
        <div class="container">
          <div class="row fullscreen justify-content-center align-items-center">
            <div class="col-md-10 col-12">
              <div class="banner-content text-center">
                <h1 class="text-uppercase text-white">Bike Tour</h1>
                <a href="./pages/bike-tour.php" class="text-uppercase header-btn">Ver Más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- start free walking tour Area -->
    <section class="default-banner active-blog-slider mt-2">
      <div
        class="item-slider relative"
        style="
          background: url(img/freeWalkingTour/FreeTour1.jpg);
          background-size: cover;
        "
      >
        <div class="overlay" style="background: rgba(0, 0, 0, 0.3)"></div>
        <div class="container">
          <div class="row fullscreen justify-content-center align-items-center">
            <div class="col-md-10 col-12">
              <div class="banner-content text-center">
                <h1 class="text-uppercase text-white">Free Walking Tour</h1>
                <a href="./pages/free-walking-tour.php" class="text-uppercase header-btn">Ver Más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="item-slider relative"
        style="
          background: url(img/freeWalkingTour/FreeTour2.jpg);
          background-size: cover;
        "
      >
        <div class="overlay" style="background: rgba(0, 0, 0, 0.3)"></div>
        <div class="container">
          <div class="row fullscreen justify-content-center align-items-center">
            <div class="col-md-10 col-12">
              <div class="banner-content text-center">
                <h1 class="text-uppercase text-white">Free Walking Tour</h1>
                <a href="./pages/free-walking-tour.php" class="text-uppercase header-btn">Ver Más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End start free walking tour Area -->

    <!-- start footer Area -->
    <footer class="footer-area mt-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="single-footer-widget">
              <h6>
                Contacto:<a
                  href="mailto:hola@bicler.com?subject=Hola!&body=Quiero mas información"
                  style="color: #119bb2"
                  > hola@bicler.com</a
                >
              </h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 social-widget">
            <div class="single-footer-widget">
              <h6>Encontranos: </h6>
              <!-- <p>Let us be social</p> -->
              <div class="footer-social d-flex align-items-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js?v=<?php echo $version; ?>"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js?v=<?php echo $version; ?>"></script>
    <script src="js/jquery.ajaxchimp.min.js?v=<?php echo $version; ?>"></script>
    <script src="js/jquery.magnific-popup.min.js?v=<?php echo $version; ?>"></script>
    <script src="js/owl.carousel.min.js?v=<?php echo $version; ?>"></script>
    <script src="js/jquery.sticky.js?v=<?php echo $version; ?>"></script>
    <script src="js/slick.js?v=<?php echo $version; ?>"></script>
    <script src="js/jquery.counterup.min.js?v=<?php echo $version; ?>"></script>
    <script src="js/waypoints.min.js?v=<?php echo $version; ?>"></script>
    <script src="js/main.js?v=<?php echo $version; ?>"></script>
  </body>
</html>
