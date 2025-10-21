<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- PWA  -->
  <meta name="theme-color" content="#6777ef"/>
  <link rel="apple-touch-icon" href="{{ asset('cosmetic.png') }}">
  <link rel="manifest" href="{{ asset('/manifest.json') }}">
  <link rel="shortcut icon" href="images/cosmetic.png" type="image/x-icon">

  <title>
    LuvShop
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  />

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            luvShop
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="/">
              Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/shop">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                Reviews
              </a>
            </li>
          </ul>
          <div class="user_option">
            <a href="{{ route('register') }}">
              <span>
                Register
              </span>
            </a>
            <a href="{{ route('login') }}">
              <span>
                Login
              </span>
            </a>
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box"> 
                      <h1>
                        Welcome To Our <br>
                        Cosmetics E-Commerce
                      </h1>
                      <p>
                      Timeless Beauty, Just a Click Away!
                      </p>
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img style="width:600px" src="images/beauty.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Best Seller
        </h2>
      </div>
      @php
        $products = [
            [
                'name' => 'Pyungkang Yul Essence Toner',
                'price' => 'Rp. 170.000',
                'image' => 'images/pyungkang.png',
                'tag' => 'Sale'
            ],
            [
                'name' => 'Avoskin Miraculous Retinol Toner',
                'price' => 'Rp. 205.000',
                'image' => 'images/avo.png',
                'tag' => '17%'
            ],
            [
                'name' => 'Pure Paw Paw Ointment',
                'price' => 'Rp. 65.000',
                'image' => 'images/ppw.png',
                'tag' => '15%'
            ],
            [
                'name' => 'Azarine Hydrashoothe Sunscreen Gel Spf45+++',
                'price' => 'Rp. 65.000',
                'image' => 'images/ss.png',
                'tag' => 'Best'
            ],
            [
                'name' => 'Skintific 5X Ceramide Moisture Gel',
                'price' => 'Rp. 119.000',
                'image' => 'images/moist.png',
                'tag' => 'Sale'
            ],
            [
                'name' => 'Cetaphil Gentle Skin Cleanser',
                'price' => 'Rp. 155.000',
                'image' => 'images/fw.png',
                'tag' => 'Sale'
            ],
            [
                'name' => 'Somethinc Hooman Breathable UV Cushion Cover SPF 35 PA++++',
                'price' => 'Rp. 188.000',
                'image' => 'images/cushion.png',
                'tag' => 'Sale'
            ],
            [
                'name' => 'Make Over Powerstay Glazed Lock Lip Pigment',
                'price' => 'Rp. 149.000',
                'image' => 'images/lipen.png',
                'tag' => 'Best'
            ],
        ];
      @endphp

      <div class="row">
        @foreach ($products as $product)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="box p-3 h-100">
              <a href="#">
                <div class="img-box" style="height: 180px;">
                  <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid" style="max-height: 100%; object-fit: contain;">
                </div>

                <div class="product-info mt-2">
                  <h6 class="fw-semibold mb-2 text-elipsis w-100">{{ $product['name'] }}</h6>
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0" style="color: #db4f66;">{{ $product['price'] }}</h6>
                    <a href="/checkout" class="btn btn-light border rounded-circle p-2">
                      <i class="bi bi-cart3 fs-5 text-danger"></i>
                    </a>
                  </div>
                </div>

                <div class="new">
                  <span>{{ $product['tag'] }}</span>
                </div>
              </a>
            </div>
          </div>
        @endforeach
      </div>

      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->
   

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              Trusted Beauty E-Commerce
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              NEED HELP
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Beauty Tower Lt.12 </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+62 89715157188 </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> luvshop@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Nazwa</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

  <script src="{{ asset('/sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script>
</body>

</html>