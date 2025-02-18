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
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/pyungkang.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pyungkang Yul<br>Essence Toner
                </h6>
                <h6>
                  Price
                  <span>
                    Rp. 170.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  sale
                </span>
              </div>
            </a>
            <a href="/checkout">
                Checkout
             </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/avo.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Avoskin<br>Miraculous Retinol Toner
                </h6>
                <h6>
                  Price
                  <span>
                    Rp. 205.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  17%
                </span>
              </div>
            </a>
            <a href="/checkout">
                Checkout
             </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/ppw.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pure Paw Paw <br> Ointment
                </h6>
                <h6>
                  Price
                  <span>
                    Rp. 65.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  15%
                </span>
              </div>
            </a>
            <a href="/checkout">
                Checkout
             </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/ss.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Azarine<br>Hydrashoothe Sunscreen Gel Spf45+++
                </h6>
                <h6>
                  Price
                  <span>
                    RP. 65.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Best
                </span>
              </div>
            </a>
            <a href="/checkout">
                Checkout
             </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/fw.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Cetaphil<br>Gentle Skin Cleanser
                </h6>
                <h6>
                  Price
                  <span>
                    Rp. 155.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  5%
                </span>
              </div>
            </a>
            <a href="/checkout">
                Checkout
             </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/moist.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Skintific<br>5X Ceramide Barrier Moisture Gel
                </h6>
                <h6>
                  Price
                  <span>
                    Rp. 119.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Sale
                </span>
              </div>
            </a>
            <a href="/checkout">
                Checkout
             </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/cushion.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Somethinc<br>Hooman Breathable UV Cushion Cover SPF 35 PA++++
                </h6>
                <h6>
                  Price
                  <span>
                    Rp. 188.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Sale
                </span>
              </div>
            </a>
            <a href="/checkout">
                Checkout
             </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/lipen.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Make Over<br>Powerstay Glazed Lock Lip Pigment
                </h6>
                <h6>
                  Price
                  <span>
                    Rp. 149.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Best
                </span>
              </div>
            </a>
            <a href="/checkout">
                Checkout
             </a>
          </div>
        </div>
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

</body>

</html>