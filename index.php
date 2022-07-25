<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZooKnow</title>
  <meta name="description" content="Aflați informații uimitoare
  despre diverse animale">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/z.webp" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  

</head>

<body>

  <!-- ======= Animals Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Caută un animal</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form action="search.php" method="post" class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="text" name="search" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>

          <div class="col-md-12">
            <button type="submit" value="Search" class="btn btn-b">Caută...</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Zoo<span class="color-b">Know</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.php">Acasa</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="animale.php">Animale</a>
          </li>
          

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Joculețe</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href=""></a>
              <a class="dropdown-item " href="games/feline.html">Quiz-Feline</a>
              <a class="dropdown-item " href="games/padure.html">Quiz-Păduri</a>
              <a class="dropdown-item " href="games/panda.html">Quiz-Panda</a>
              <a class="dropdown-item " href="games/rechin.html">Quiz-Rechin</a>
              <a class="dropdown-item " href="games/girafe.html">Quiz-Girafe</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/index.php">Admin</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/3.webp)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Savanna, Madagascar
                      <br> 321
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">Bine ați venit </span> la o experiență
                      incredibilă pe ZooKnow
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Aflați mai multe</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image"
        style="background-image: url(assets/img/tigrumisto.webp)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Bandipur, India
                      <br> 224125
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Aflați </span> informații uimitoare
                      <br> despre diverse animale
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Aflați mai multe</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image"
        style="background-image: url(assets/img/aligator.webp)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Învață </span> curiozități
                      <br> despre animalele lumii
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Aflați mai multe</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">



    <!-- ======= Latest Animal Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Animale</h2>
              </div>
              <div class="title-link">
                <a href="animale.php">Toate...
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "tb84cubjvked";
            $dbname = "zooknow";

            $url ="zimbrul";
            if (isset($_GET["url"]))
              $url = $_GET["url"];


            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT title, data, imagine, about, url, imagespot, greutate, size, dieta, viata FROM animalarticle limit 4";
            $result = mysqli_query($conn, $sql);

            $data = [];
            //var_dump($result);die;
            while($row = $result->fetch_assoc()) {
              $data[] = $row;
          ?>

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="<?php echo $row["imagespot"]?>" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="article.php?url=<?php echo $row["url"]?>" ><?php echo $row["about"]?>
                          <br /> <span  class="color-b"><?php echo $row["title"]?></span></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <a href="article.php?url=<?php echo $row["url"]?>" class="link-a">Click aici pentru a vizualiza
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Greuate</h4>
                          <span><?php echo $row["greutate"]?>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Viață</h4>
                          <span><?php echo $row["viata"]?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Lungime</h4>
                          <span><?php echo $row["size"]?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Dietă</h4>
                          <span><?php echo $row["dieta"]?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
            <?php
              }
            ?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->



    <!-- ======= Latest News Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Intalneste Animalele Padurilor</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.html">Toate...
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "tb84cubjvked";
            $dbname = "zooknow";

            $url ="broasca";
            if (isset($_GET["url"]))
              $url = $_GET["url"];


            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT title, data, imagine, about, url, imagespot, greutate, size, dieta, viata FROM animalsforest limit 4";
            $result = mysqli_query($conn, $sql);

            $data = [];
            //var_dump($result);die;
            while($row = $result->fetch_assoc()) {
              $data[] = $row;
          ?>

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="<?php echo $row["imagespot"]?>" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="article.php?url=<?php echo $row["url"]?>" ><?php echo $row["about"]?>
                          <br /> <span  class="color-b"><?php echo $row["title"]?></span></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <a href="article.php?url=<?php echo $row["url"]?>" class="link-a">Click aici pentru a vizualiza
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Greuate</h4>
                          <span><?php echo $row["greutate"]?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Viață</h4>
                          <span><?php echo $row["viata"]?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Lungime</h4>
                          <span><?php echo $row["size"]?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Dietă</h4>
                          <span><?php echo $row["dieta"]?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
            <?php
              }
            ?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->



  </main><!-- End #main -->
  

<!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">ZooKnow</h3>
            </div>
            <div class="w-body-a">

            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Email </span> eduardtudor014@gmail.com
                </li>
                <li class="color-a">
                  <span class="color-text-a">Phone</span> +40783106211
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The ZooKnow</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="index.html">Acasa</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="animale.html">Animale</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="games/feline.html">Quiz-Feline</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="games/panda.html">Quiz-Panda</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="games/rechin.html">Quiz-Rechin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="games/padure.html">Quiz-Paduri</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="">Animale</a>
              </li>

            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">ZooKnow</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by ZooKnow - Official Team</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/624e97abc72df874911da4ec/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
</body>

</html>