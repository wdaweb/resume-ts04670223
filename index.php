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

        <ol class="carousel-indicators"></ol>

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
            <p class="description"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--cib" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                <path d="M21.875 7.568c-.156 0-.26.021-.365.047v.016h.016c.073.135.193.24.286.365c.073.141.135.286.203.427l.021-.021c.125-.089.188-.229.188-.443c-.052-.063-.063-.13-.109-.188c-.052-.089-.167-.135-.24-.203zM7.693 25.161H6.459a70.224 70.224 0 0 0-.359-5.88h-.01l-1.88 5.88h-.943l-1.865-5.88h-.016a98.982 98.982 0 0 0-.26 5.88H.001a74.98 74.98 0 0 1 .547-7.375h1.531l1.781 5.417h.01l1.797-5.417h1.458c.323 2.688.516 5.146.573 7.375zm5.354-5.442c-.5 2.729-1.167 4.714-1.984 5.948c-.646.953-1.349 1.432-2.115 1.432c-.203 0-.453-.063-.755-.188v-.656c.151.021.323.036.516.036c.359 0 .646-.104.865-.297c.26-.24.391-.51.391-.807c0-.208-.099-.625-.307-1.26l-1.349-4.208h1.214l.969 3.146c.219.719.313 1.214.271 1.5c.536-1.417.906-2.969 1.115-4.646zm16.437 5.442h-3.51v-7.375h1.182v6.469h2.328zm-4.427.178l-1.354-.667c.12-.099.234-.208.339-.333c.578-.672.865-1.677.865-3c0-2.443-.958-3.661-2.875-3.661c-.938 0-1.672.307-2.198.927c-.573.677-.865 1.677-.865 2.995c0 1.297.255 2.245.766 2.854c.469.542 1.172.818 2.115.818c.349 0 .672-.042.964-.13l1.766 1.031l.484-.833zm-4.39-1.657c-.302-.479-.448-1.25-.448-2.313c0-1.859.563-2.786 1.693-2.786c.589 0 1.026.224 1.302.667c.297.484.448 1.245.448 2.297c0 1.87-.568 2.813-1.693 2.813c-.594 0-1.026-.224-1.307-.667zm-2.209-.562c0 .625-.229 1.141-.693 1.536c-.458.401-1.068.604-1.844.604c-.724 0-1.417-.229-2.099-.688l.318-.635c.583.292 1.109.438 1.589.438c.443 0 .792-.099 1.042-.292c.25-.198.401-.474.401-.823c0-.438-.307-.813-.865-1.125c-.516-.286-1.552-.875-1.552-.875c-.563-.411-.839-.849-.839-1.573c0-.599.208-1.078.625-1.443c.422-.375.958-.557 1.625-.557a3.37 3.37 0 0 1 1.87.547l-.286.635a3.623 3.623 0 0 0-1.417-.307c-.38 0-.672.094-.875.276s-.328.411-.328.698c0 .438.313.813.885 1.135c.526.286 1.583.891 1.583.891c.578.406.865.844.865 1.557zm12.506-7.807c-.714-.016-1.266.057-1.729.255c-.13.052-.344.052-.365.219c.073.073.083.188.146.286c.109.177.292.417.464.542c.188.146.375.292.568.417c.349.214.74.339 1.083.552c.193.125.391.286.583.417c.099.068.161.188.286.229v-.026c-.063-.078-.078-.193-.141-.286c-.089-.089-.177-.167-.266-.255a4.212 4.212 0 0 0-.927-.901c-.286-.193-.911-.464-1.026-.792l-.016-.021c.193-.016.422-.089.609-.141c.302-.078.583-.063.896-.141a7.21 7.21 0 0 0 .427-.125v-.078c-.161-.161-.281-.38-.448-.531a11.645 11.645 0 0 0-1.469-1.094c-.281-.182-.635-.297-.932-.448c-.104-.052-.286-.078-.344-.167c-.161-.198-.255-.453-.37-.688a23.772 23.772 0 0 1-.729-1.552c-.161-.349-.255-.693-.453-1.016c-.917-1.516-1.917-2.432-3.448-3.333c-.328-.188-.724-.266-1.141-.365c-.224-.01-.443-.026-.667-.036c-.146-.063-.286-.229-.411-.313c-.51-.323-1.823-1.016-2.193-.099c-.24.583.354 1.151.563 1.443c.151.208.344.438.453.667c.063.156.078.318.141.479c.141.391.276.828.464 1.193c.099.188.203.385.328.552c.073.099.198.141.224.302c-.125.182-.135.448-.203.667c-.323 1.01-.198 2.255.255 3c.146.224.484.714.938.526c.401-.161.313-.667.427-1.115c.026-.109.01-.177.063-.25v.021c.13.25.255.49.37.74c.271.438.755.891 1.156 1.193c.214.161.38.438.646.536v-.026h-.021c-.057-.078-.13-.115-.203-.177a4.999 4.999 0 0 1-.469-.536c-.37-.5-.703-1.052-.995-1.62a10.88 10.88 0 0 1-.385-.859c-.052-.104-.052-.266-.141-.318c-.135.193-.333.359-.427.604c-.172.38-.188.854-.255 1.344c-.031.01-.016 0-.031.021c-.286-.073-.385-.365-.49-.615c-.271-.635-.313-1.651-.083-2.38c.063-.188.328-.776.224-.953c-.057-.172-.234-.271-.328-.406c-.12-.167-.24-.38-.323-.568c-.214-.5-.318-1.052-.552-1.552c-.104-.229-.292-.469-.443-.682c-.172-.24-.359-.411-.49-.693c-.047-.099-.109-.26-.036-.365c.016-.073.052-.099.125-.12c.115-.099.448.026.563.083c.328.13.604.255.88.443c.125.089.26.255.422.302h.188c.286.063.604.016.87.099c.474.151.901.37 1.286.609a7.963 7.963 0 0 1 2.776 3.052c.109.203.156.391.255.604c.182.443.417.885.604 1.307s.365.849.635 1.198c.135.188.667.286.911.38c.177.083.453.156.609.25c.307.188.609.401.896.609c.146.099.589.323.615.5z" fill="currentColor"></path>
              </svg>Mysql</p>
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
					$education = $Education->all(['sh' => 1, 'parent' => 0]);
					foreach ($education as $main) {
						
					?>

          <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <h4 class="title"><a ><?= $main['text']; ?></a></h4>
            <?php

if ($Education->count(['parent' => $main['id']]) > 0) {
  $subs = $Education->all(['parent' => $main['id']]);
  foreach ($subs as $sub) {

?>
            <p class="description"><?= $sub['text']; ?></p>
            <?php
									}
								}
								?>
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
					$experience = $Experience->all(['sh' => 1, 'parent' => 0]);
					foreach ($experience as $main) {
						
					?>

          <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <h4 class="title"><a ><?= $main['text']; ?></a></h4>
            <?php

if ($Experience->count(['parent' => $main['id']]) > 0) {
  $subs = $Experience->all(['parent' => $main['id']]);
  foreach ($subs as $sub) {

?>
            <p class="description"><?= $sub['text']; ?></p>
            <?php
									}
								}
								?>
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
              <li data-filter=".filter-app">前端</li>
              <li data-filter=".filter-card">後端</li>
              <li data-filter=".filter-web">其他</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
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

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
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

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
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
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
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
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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