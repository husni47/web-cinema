  <?php
  require_once  'connection.php';
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.2/dist/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Cinema XXI</title>
  </head>
  <body>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
        <a class="navbar-brand" href="home.php">
          <img src="img/navbar.png" width="200" height="55" alt="" loading="lazy">
        </a>
      <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" >
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="create.php">Create Film</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Allplaylist">All playlist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Cinemas">Cinemas</a>
            </li>
        </ul>
      </div>
      </div>
    </nav>
  <!-- End Navbar -->

  <!-- Footerr -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading">Welcome To Cinema</div>
      </div>
    </div>
  </header>
  <!-- End Footer -->

  <!-- Carousel -->
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="2000">
        <img src="img/carousel1.jpg" class="d-block w-80 mx-auto" alt="">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="img/carousel2.jpg" class="d-block w-80 mx-auto" alt="">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="img/carousel3.jpg" class="d-block w-80 mx-auto" alt="">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="img/carousel4.jpg" class="d-block w-80 mx-auto" alt="">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- End Carousel -->

  <!-- Card -->

  <div class="row" style="margin: 30px;">
  <?php
      $mv = $conn->query("SELECT * FROM playlist");
      while ($data = $mv->fetch_assoc()):
  ?>
    <div class="card" style="width:300px; margin: 10px;">
      <img src="img/tarungsarung.jpg" class="card-img-top" alt="Tarung Sarung">

      <div class="card-body">
        <h5 class="card-title"><?= $data['title']?></h5>
        <a href="detail.php?id=<?=$data['id']?>" class="btn btn-primary">See Detail</a>
      </div>
      
      
    </div>
    <?php endwhile ?>
  </div>
  
  <!-- End Card -->

  <!-- Footer -->
  <footer class="bg-danger pt-4 pb-2 text-light text-center">
    <p>&copy; copyright 2020 | Cinema XXI </p>
  </footer>
  <!-- End Footer -->

  <!-- Script  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </body>
  </html>