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

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="front/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="front/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="front/lib/animate/animate.min.css" rel="stylesheet">
  <link href="front/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="front/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


  <!-- <link href="front/lib/ionicons/css/ionicons.min.css" rel="stylesheet"> -->

  <link href="front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="front/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="front/css/style.css" rel="stylesheet">
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
          $mainmu = $Menu->all(['sh' => 1], 'order by rank');
          foreach ($mainmu as $main) {
          ?>
            <li><a href="<?= $main['href']; ?>"><?= $main['text']; ?></a></li>
          <?php
          };
          ?>
          <?php
          if (isset($_SESSION['login'])) {
          ?>
            <li><a href="backend.php">返回管理</a></button></li>
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
            <div class="carousel-background"><img src="front/img/intro-carousel/sky.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              
                <?php
                $headshot = $Headshot->all(['sh' => 1], "order by rank");
                foreach ($headshot as $main) {
                ?>

                  <section id="team">
                    <div class="col-lg-12 wow fadeInUp">
                      <div class="member">
                        <img src="front/img/<?= $main['img']; ?>" class="img-fluid">
                        <div class="member-info">
                          <div class="member-info-content">
                            <h4><?= $main['text']; ?></h4>
                            <div class="social">
                              <a href="https://github.com/ts04670223"><i class="fa fa-github"></i></a>
                              <a href="https://codepen.io/ts04670223"><i class="fa fa-codepen"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                <?php
                }
                ?>
              </div>
                <?php
                  $me = $Me->all(['sh' => 1], "order by rank");
                  foreach ($me as $main) {
                  ?>
                <div class=" carousel-content">
                  <h2>關於我</h2>
                  <p><?= $main['text']; ?></p>
                  <a href="#featured-services" class="btn-get-started scrollto">技能</a>
                </div>
                <?php
                  }
                  ?>
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
            <?php
            $skill = $Skill->all(['sh' => 1], 'order by rank');
            $cll = ['1' => '前端', "2" => "後端", '3' => "其他",];
            foreach ($skill as $key => $poster) {
            ?>
              <?php
              if ($poster['class'] == 1) {

              ?>
                <p class="description"><img style="width:30px;height:30px" src="front/img/portfolio/<?= $poster['img']; ?>"><?= $poster['text']; ?></p>

            <?php
              }
            }
            ?>
          </div>
          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a>後端</a></h4>
            <?php
            $skill = $Skill->all(['sh' => 1], 'order by rank');
            $cll = ['1' => '前端', "2" => "後端", '3' => "其他",];
            foreach ($skill as $key => $poster) {
            ?>
              <?php
              if ($poster['class'] == 2) {

              ?>
                <p class="description"><img style="width:30px;height:30px" src="front/img/portfolio/<?= $poster['img']; ?>"><?= $poster['text']; ?></p>

            <?php
              }
            }
            ?>
          </div>
          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a>其他</a></h4>
            <?php
            $skill = $Skill->all(['sh' => 1], 'order by rank');
            $cll = ['1' => '前端', "2" => "後端", '3' => "其他",];
            foreach ($skill as $key => $poster) {
            ?>
              <?php
              if ($poster['class'] == 3) {

              ?>
                <p class="description"><img style="width:30px;height:30px" src="front/img/portfolio/<?= $poster['img']; ?>"><?= $poster['text']; ?></p>

            <?php
              }
            }
            ?>
          </div>
          <!-- <div class="col-lg-4 box box-bg">
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
          </div> -->

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
        $n = $Aut->all(['sh' => 1], 'order by rank');
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
          $education = $Education->all(['sh' => 1], 'order by rank');
          foreach ($education as $main) {

          ?>

            <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <h4 class="title"><a><?= $main['text']; ?></a></h4>
              <p class="description"><?= $main['text2']; ?></p>
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
          $experience = $Experience->all(['sh' => 1], 'order by rank');
          foreach ($experience as $main) {

          ?>

            <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <h4 class="title"><a><?= $main['text']; ?></a></h4>
              <p class="description"><?= $main['text2']; ?></p>
            </div>
          <?php }; ?>

        </div>

      </div>
    </section>
    <section class="services" id="job">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>求職條件</h3>
        </header>

        <div class="row">

          <?php
          $job = $Job->all(['sh' => 1], 'order by rank');
          foreach ($job as $main) {

          ?>

            <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <h4 class="title"><a><?= $main['text']; ?></a></h4>
              <p class="description"><?= $main['text2']; ?></p>
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
          <?php
          $po = $Port->all(['sh' => 1], 'order by rank');
          foreach ($po as $main) {
          ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $main['class']; ?> wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="front/img/portfolio/<?= $main['img']; ?>" class="img-fluid" alt="">
                  <a href="front/img/portfolio/<?= $main['img']; ?>" data-lightbox="portfolio" data-title="<?= $main['text']; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <?php
                  if (empty($main['href'])) {
                  } else {
                  ?>
                    <a href="<?= $main['href']; ?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  <?php
                  }
                  ?>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#"><?= $main['text']; ?></a></h4>
                  <p><?= $main['text2']; ?></p>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

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
          <?php
          $connection = $Connection->all(' order by `rank` ');

          foreach ($connection as $main) {
          ?>

            <div class="col-md-6">
              <div class="contact-email">
                <i class="<?= $main['icon']; ?>"></i>
                <h3><?= $main['text']; ?></h3>
                <p><a href="<?= $main['href']; ?>"><?= $main['text2']; ?></a></p>
              </div>
            </div>
          <?php
          }
          ?>

        </div>


      </div>
    </section><!-- #contact -->

  </main>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="front/lib/jquery/jquery.min.js"></script>
  <!-- <script src="front/lib/jquery/jquery-migrate.min.js"></script> -->
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