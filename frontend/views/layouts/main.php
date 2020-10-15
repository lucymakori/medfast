<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

 <body>
<header id="site-header" class="fixed-top">
  <section class="w3l-header-4">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <h1><a class="navbar-brand" href="<?=Url::to(['/site/index'])?>">
                      Medfast
                  </a></h1>
              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa icon-expand fa-bars"></span>
                  <span class="fa icon-close fa-times"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item active">
                          <a class="nav-link" href="<?=Url::to(['/site/index'])?>">Home </a>
                      </li>
                      <li class="nav-item @@about__active">
                          <a class="nav-link" href="<?=Url::to(['/site/about'])?>">About</a>
                      </li>
                      <li class="nav-item @@services__active">
                          <a class="nav-link" href="<?=Url::to(['/site/services'])?>">Services</a>
                      </li>
                      <li class="nav-item @@contact__active">
                          <a class="nav-link" href="<?=Url::to(['/site/contact'])?>">Contact</a>
                      </li>
                  </ul>
                  <ul class="navbar-nav search-right mt-lg-0 mt-2">
                      
                      <li class="nav-item"><a href="<?=Url::to(['/site/contact'])?>"
                              class="btn btn-primary d-none d-lg-block btn-style mr-3">Call Us Now</a></li>
                  </ul>

                  <!-- //toggle switch for light and dark theme -->
                  
              </div>
              <!-- toggle switch for light and dark theme -->
              <div class="mobile-position">
                  <nav class="navigation">
                      <div class="theme-switch-wrapper">
                          <label class="theme-switch" for="checkbox">
                              <input type="checkbox" id="checkbox">
                              <div class="mode-container">
                                  <i class="gg-sun"></i>
                                  <i class="gg-moon"></i>
                              </div>
                          </label>
                      </div>
                  </nav>
              </div>
          </nav>
      </div>
  </section>
</header>
<!-- main-slider -->


        <?= $content ?>
   

<!-- footer -->
<footer class="py-5">
  <div class="container py-lg-4 py-2">
    <div class="row footer-top">
      <div class="col-lg-4 footer-grid_section_1its footer-text">
        <div class="footer-title">
          <h3>About Us</h3>
        </div>
        <p class="mt-lg-4 mt-3 mb-4 pb-lg-2">we care about our customers.Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.</p>
        
      </div>
      <div class="col-lg-4 col-md-6 footer-grid_section_1its mt-lg-0 mt-5">
        <div class="footer-title">
          <h3>Contact Us</h3>
        </div>
        <div class="footer-text mt-4">
          <p><strong>Address :</strong>Parmara Building off Kipchoge Keino Street,
            Mombasa</p>
          <p class="my-2"><strong>Phone :</strong> <a href="tel:(+254)784555555">(+254)784555555</a></p>
          <p><strong>Email :</strong><a href="mailto:medfast@supportmail.com">medfast@supportmail.com</a></p>
          <!-- social icons -->
          <ul class="top-right-info mt-4">
            <li class="facebook-w3">
              <a href="#facebbok">
                <span class="fa fa-facebook-f"></span>
              </a>
            </li>
            <li class="twitter-w3">
              <a href="#twitter">
                <span class="fa fa-twitter"></span>
              </a>
            </li>
            <li class="google-w3">
              <a href="#google">
                <span class="fa fa-google-plus"></span>
              </a>
            </li>
            <li class="dribble-w3">
              <a href="#dribble">
                <span class="fa fa-dribbble"></span>
              </a>
            </li>
          </ul>
          <!-- //social icons -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6 footer-grid_section_1its footer-text mt-lg-0 mt-5">
        <div class="footer-title">
          <h3>Subscribe Newsletter</h3>
        </div>
        <div class="info-form-right mt-4 p-0">
          <p class="mb-4">Enter your email and receive the latest news, updates and special offers from us.</p>
          <form action="#" method="post">
            <div class="form-group mb-2">
              <input type="email" class="form-control" name="Email" placeholder="Email" required="">
            </div>
            <button type="submit" class="btn btn-style btn-primary w-100 d-block ml-auto">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
