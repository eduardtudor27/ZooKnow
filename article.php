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

$sql = "SELECT title, data, imagine, contentstart, content, autor, content2, content3, content4, url, content5 FROM animalarticle where url='".$url."'";
$result = mysqli_query($conn, $sql);

$data = [];
//var_dump($result);die;
while($row = $result->fetch_assoc()) {
	$data[] = $row;
  }


  
?>	


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
  <link href="assets/img/z.png" rel="icon">
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

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Caută un animal</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>

          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Caută...</button>
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
      <a class="navbar-brand text-brand" href="index.html">Zoo<span class="color-b">Know</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.html">Acasa</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="animale.html">Animale</a>
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
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->


   <!-- ======= Intro Single ======= -->
   <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single"><?php 
							
							
								echo $data[0]["title"];
							  
							  

							?></h1>
                            <span class="color-text-a"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->
		<section class="news-single nav-arrow-b">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="news-img-box">
                            <img src="<?php echo $data[0]["imagine"]; ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <div class="post-information">
                            <ul class="list-inline text-center color-a">
                                <li class="list-inline-item mr-2">
                                    <strong>Author: <?php echo $data[0]["autor"]; ?></strong>
                                    <span class="color-text-a"></span>
                                </li>
                                <li class="list-inline-item mr-2">
                                    <strong>Category: </strong>
                                    <span class="color-text-a">Forest Animals</span>
                                </li>
                                <li class="list-inline-item">
                                    <strong>Date: </strong>
                                    <span class="color-text-a"><?php echo $data[0]["data"];  ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="post-content color-text-a">
                            <p class="post-intro">
                                <?php

									echo $data[0]["contentstart"];

							  	?>
                            </p>

							<p>
							<?php

								echo $data[0]["content"];

							?>
							</p>
							<?php

								echo $data[0]["content2"];

							?>
							</p>
							<?php

								echo $data[0]["content3"];

							?>
							</p>
							<?php

								echo $data[0]["content4"];

							?>
							</p>
							<?php

								echo $data[0]["content5"];

							?>
							</p>

							<div class="post-footer">
                            <div class="post-share">
                                <span>Share: </span>
                                <ul class="list-inline socials">
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
                        </div>
						</div>

					</div>
				
				</div>
			</div>
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