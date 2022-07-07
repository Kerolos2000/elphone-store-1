<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="img\logo1.png" />
  <title>Elphone Store</title>
  <link rel="stylesheet" href="css/flickity.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Secular+One&display=swap" rel="stylesheet">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- main css file -->
  <link rel="stylesheet" href="css/main.css" />
</head>

<body class="custom-scrollbar" id="index">

  <!-- nav section -->
  <header class="s" id="nav">
    <div class="container ">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <a href="index.php"><img src="img\logo.png" alt="Elphone Store" id="logo"></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

            <div class="search">
              <input type="search">
              <button class="icon-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>

            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a href="index.php" class="nav-link active" aria-current="page">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Dropdown" role="button" data-toggle="dropdown"
                  aria-expanded="false">
                  Mobiles
                </a>
                <ul class="dropdown-menu" aria-labelledby="Dropdown">
                  <li><a class="dropdown-item" href="page/Apple.php">Apple</a></li>
                  <li><a class="dropdown-item" href="page/Samsung.php">Samsung</a></li>
                  <li><a class="dropdown-item" href="page/Oppo.php">oppo</a></li>
                  <li><a class="dropdown-item" href="page/huawei.php">Huawei</a></li>

                </ul>
              </li>

              <li class="nav-item">
                <a href="page\cart.php" class="nav-link"><i class="fa-solid fa-cart-shopping"></i></a>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Dropdown" role="button" data-toggle="dropdown"
                  aria-expanded="false">
                  <i class="fa-regular fa-user"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="Dropdown">
                  <li><a class="dropdown-item" style="user-select: none;" disabled>User Name</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="page/login.php">sign in / sign out</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>




  <!-- main section -->
  <section data-aos="zoom-in" data-aos-anchor-placement="top-center" data-aos-duration="1000" id="main">
    <!-- <div class="container"> -->
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="img/c4.png" />
        </div>
        <div class="swiper-slide">
          <img src="img/c2.png" />
        </div>
        <div class="swiper-slide">
          <img src="img/c3.png" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- </div> -->
  </section>

  <!-- offer section -->
  <section id="off">
    <div class="container text-center mt-5 mb-5">
      <h1 class="main-text text-center mb-5">best offers</h1>
      <div class="row off">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="width: 18rem;">
          <div class="card mt-1 mb-4">
            <img src="img/s1.webp" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Samsung A52</h5>
              <p class="card-text"><strong>7400$ </strong> <span><del>8000$</del></span></p>
              <a href="#" class="off-btn btn btn-outline-danger">Order now</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="    width: 18rem;">
          <div class="card mt-1 mb-4">
            <img src="img/s2.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">iphone 13 pro max</h5>
              <p class="card-text"><strong>23000$ </strong><span><del>25000$</del></span></p>
              <a href="#" class="off-btn btn btn-outline-danger">Order now</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="    width: 18rem;">
          <div class="card mt-1 mb-4">
            <img src="img/s3.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">OPPO RENO 6</h5>
              <p class="card-text"><strong>7400$ </strong> <span><del>8000$</del></span></p>
              <a href="#" class="off-btn btn btn-outline-danger">Order now</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" style="    width: 18rem;">
          <div class="card mt-1 mb-4">
            <img src="img/s4.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">huawei p50 pro</h5>
              <p class="card-text"><strong>7400$ </strong> <span><del>8000$</del></span></p>
              <a href="#" class="off-btn btn btn-outline-danger">Order now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer id="footer">
    <div class="container text-center mt-5">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

          <h5 class="footer-text">About us</h5>
          <p class="footer-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quisquam, quidem.</p>

        </div>

        <!-- git map  -->
        

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="d1">
            <h5 class="footer-text">Follow us</h5>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa-brands fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa-brands fa-youtube"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>








  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/all.min.js"></script>

  <script>
    AOS.init();
  </script>
  <!-- Swiper JS -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "fade",

      lazy: true,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      loop: true,
      // mousewheel: true,
      spaceBetween: 0,
      coverflowEffect: {
        modifier: 0,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });
  </script>








  <!-- main js file -->
  <script src="js/main.js"></script>
</body>

</html>