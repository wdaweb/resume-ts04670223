<?php include_once "base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Johny</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="front/img/favicon.ico" rel="icon">
  <link href="front/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="front/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="front/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="front/lib/animate/animate.min.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/062be2b463.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/all.min.css">


  <!-- <link href="front/lib/ionicons/css/ionicons.min.css" rel="stylesheet"> -->

  <link href="front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="front/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="front/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Johny</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="front/img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <?php
          $mainmu = $Menu->all(['sh' => 1, 'parent' => 0]);
          foreach ($mainmu as $main) {
          ?>
            <li><a href="<?= $main['href']; ?>"><?= $main['text']; ?></a></li>
          <?php
          };
          ?>
          <?php
          if (isset($_SESSION['login'])) {
          ?>
            <li><a href="backend.php">返回管理</button></li>
          <?php
          } else {
          ?>
            <li><a href="front/login.php">管理登入</a></li>
          <?php
          }
          ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">


        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="front/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">

                <section id="team">
                  <div class="col-lg-12 col-md-6 wow fadeInUp">
                    <div class="member">
                      <img src="front/img/my.jpg" class="img-fluid">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>賴俊宇</h4>
                          <div class="social">
                            <a href="https://github.com/ts04670223"><i class="fa fa-github"></i></a>
                            <a href="https://codepen.io/ts04670223"><i class="fa fa-codepen"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

                <a href="#featured-services" class="btn-get-started scrollto">技能</a>
              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
  </section>
  <!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a>前端</a></h4>
            <p class="description"><i class="fab fa-html5"></i>Html</p>
            <p class="description"><i class="fab fa-css3-alt"></i>Css</p>
            <p class="description"><i class="fab fa-bootstrap"></i>Bootstrap</p>
            <p class="description"><i class="fab fa-js"></i>JavaScript</p>
            <p class="description"><span class="iconify" data-icon="bx:bxl-jquery" data-inline="false"></span>jquery</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a>後端</a></h4>
            <p class="description"><i class="fab fa-php"></i>Php</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">其他</a></h4>
            <p class="description">Photoshop</p>
            <p class="description">illustrator</p>
            <p class="description">Github</p>
            <p class="description">Ajax</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section class="about" id="aut">
      <div class="container">

        <header class="section-header">
          <h3>自傳</h3>
        </header>
        <?php
        $n = $Aut->all(['sh' => 1]);
        foreach ($n as $key => $nn) {
          echo "<p>" . $nn['text'];
          echo "</p>";
        }
        ?>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section class="services" id="education">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>學歷</h3>
        </header>

        <div class="row">
          <?php
          $education = $Education->all(['sh' => 1]);
          foreach ($education as $main) {

          ?>

            <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <h4 class="title"><a><?= $main['text']; ?></a></h4>
                  <p class="description"></p>
            </div>
          <?php }; ?>
        </div>
      </div>
    </section>
    <section class="services" id="experience">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>經歷</h3>
        </header>

        <div class="row">

          <?php
          $experience = $Experience->all(['sh' => 1]);
          foreach ($experience as $main) {

          ?>

            <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <h4 class="title"><a><?= $main['text']; ?></a></h4>
                  <p class="description"></p>
            </div>
          <?php }; ?>

        </div>

      </div>
    </section>

    <!-- #services -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">作品集</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-1">前端</li>
              <li data-filter=".filter-2">後端</li>
              <li data-filter=".filter-3">其他</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-1 wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/app2.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">APP1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/ps1.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/ps1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Photoshop" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Photoshop</a></h4>
                <p>年曆</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/ps2.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/ps2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Photoshop" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Photoshop</a></h4>
                <p>酒標</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/ps3.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/ps3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Photoshop" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Photoshop</a></h4>
                <p>旅遊海報</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="front/img/portfolio/ai1.jpg" class="img-fluid" alt="">
                <a href="front/img/portfolio/ai1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Illustrator" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Illustrator</a></h4>
                <p>女孩</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>聯絡我</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-6">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">0981779727</a></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:ts04670223@gmail.com">ts04670223@gmail.com</a></p>
            </div>
          </div>

        </div>


      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://github.com/ts04670223">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="front/lib/jquery/jquery.min.js"></script>
  <script src="front/lib/jquery/jquery-migrate.min.js"></script>
  <script src="front/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="front/lib/easing/easing.min.js"></script>
  <script src="front/lib/superfish/hoverIntent.js"></script>
  <script src="front/lib/superfish/superfish.min.js"></script>
  <script src="front/lib/wow/wow.min.js"></script>
  <script src="front/lib/waypoints/waypoints.min.js"></script>
  <script src="front/lib/counterup/counterup.min.js"></script>
  <script src="front/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="front/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="front/lib/lightbox/js/lightbox.min.js"></script>
  <script src="front/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="front/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="front/js/main.js"></script>

</body>

</html>