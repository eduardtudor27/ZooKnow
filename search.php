


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Animale - Toate</title>
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

  <!-- =======================================================
  * Template Name: EstateAgency - v4.7.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
      <a class="navbar-brand text-brand" href="index.php">Zoo<span class="color-b">Know</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="index.php">Acasa</a>
          </li>

          <li class="nav-item active">
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
  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Animale gasite</h1>
              
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Animale gasiet
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->




    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="grid-option">
              
            </div>
          </div>

          <?php
           $search = $_POST['search'];

           $servername = "localhost";
           $username = "root";
           $password = "tb84cubjvked";
           $db = "zooknow";
           
           $conn = new mysqli($servername, $username, $password, $db);
           $sql = "SELECT title, data, imagine, about, url, imagespot, greutate, size, dieta, viata FROM animals";
           
           if ($conn->connect_error){
               die("Connection failed: ". $conn->connect_error);
           }
           
           $sql = "select * from animals where title like '%$search%'";
           
           $result = $conn->query($sql);
           $data = [];
           
           while($row = $result->fetch_assoc() ){
            $data[] = $row["title"];
           
           
        
          ?>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="<?php echo $row["imagespot"]?>" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="article.php?url=<?php echo $row["url"]?>"><?php echo $row["title"]?>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Animals</span>
                    </div>
                    <div class="price-box d-flex">
                    </div>
                    <a href="blog/blog-broasca.html" class="link-a">Click aici pentru a vizualiza
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <?php
              }
            ?>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">Load more</a>
                </li>
                
                  
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Property Grid Single-->







</body>