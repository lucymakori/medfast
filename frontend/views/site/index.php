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

<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                 <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                     <h5>Helping you to stay Healthy</h5>
                                    <p class="mt-md-4 mt-3">Ranked as the top pharmacy in te region with the largest store footprint in Mombasa. </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="<?=Url::to(['/site/about'])?>"> Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>The Largest and most respected pharmacies</h5>
                                    <p class="mt-md-4 mt-3">Extensive range of products stocked across all outlets.</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="<?=Url::to(['/site/about'])?>"> Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                     <h5>Patients trust our drugs.</h5>
                                    <p class="mt-md-4 mt-3">Strong relationships with over 20+  doctors and medical practitioners in the region. </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="<?=Url::to(['/site/about'])?>"> Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Your health is our first priority</h5>
                                    <p class="mt-md-4 mt-3"> we care about your health always. </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="<?=Url::to(['/site/about'])?>"> Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>
<!-- /main-slider -->
<!-- home block1 -->
<section class="wthree-row py-5 about-main" id="about">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-4 mb-lg-0 mb-5">
                <h3 class="title-small mb-2">More than 7 Years of Experience</h3>
                <h3 class="title-big">Extensive range of products stocked across all outlets.</h3>
                <p class="pt-4">Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.</p>
                <a href="<?=Url::to(['/site/about'])?>" class="btn btn-style btn-primary mt-lg-5 mt-4">Read More</a>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="agileits-banner-info4">
                    <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/about.jpg" alt="image" class="img-fluid radius-image" />
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <span class="fa fa-quote-left" aria-hidden="true"></span>
                <p class="py-4 pl-3 d-inline about-right-text">We value people for their uniqueness and treat everyone with respect & dignity.We do the right thing for our employees,customers and shareholders
                </p>
                <h5 class="abt-right">Services you can see & feel</h5>
                <hr>
                <p class="">We're a one-stop chemists offering a vast range
                    of pharmacy services</p>
            </div>
        </div>
    </div>
</section>
<!-- //home block1 -->
<!-- our products -->
<section class="w3l-products py-5" id="services">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <!--Horizontal Tab-->
                <div id="parentHorizontalTab">
                    
                    <div class="resp-tabs-container hor_1 mt-md-0 mt-4">
                        <div class="products-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>Our Mission and Core values</h3>
                                    <p>Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.We dispense prescriptions and other medicines, offer testing and screening for common conditions, and advise on minor ailments. </p>
                                    <div class="grids-ser my-md-5 my-4 text-center">
                                        <div class="area-box">
                                            <span class="fa fa-bed"></span>
                                            <h4><a href="#feature" class="title-head">Integrity</a></h4>
                                        </div>
                                        <div class="area-box">
                                            <span class="fa fa-glass"></span>
                                            <h4><a href="#feature" class="title-head">Diversity</a></h4>
                                        </div>
                                        <div class="area-box">
                                            <span class="fa fa-futbol-o"></span>
                                            <h4><a href="#feature" class="title-head">Teamwork</a></h4>
                                        </div>
                                    </div>
                                    <a href="<?=Url::to(['/site/services'])?>" class="btn btn-outline-primary btn-style mt-3">Get Service Now
                                        <span class="fa fa-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="col-lg-6 mt-lg-0 mt-5">
                                    <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/residentsan.jpg" class="img-fluid radius-image-full"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //our products -->
<!-- home block3 -->
<section class="wthree-row py-5 about-main" id="">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-sm-5 mb-4">
                <h3 class="title-small mb-2">we care about you</h3>
                <h3 class="title-big">We Offer a full range of Professional services to children, Adults,
                        Couples, and Families. </h3>
                <p class="pt-4">we care about our customers.Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.

          We dispense prescriptions and other medicines, offer testing and screening for common conditions, and advise on minor ailments.
          We improve the lives of our customers by providing quality healthcare and customer products that deliver value to the communities we serve across the regions.</p>
                <a href="<?=Url::to(['/site/about'])?>" class="btn btn-style btn-primary mt-lg-5 mt-4">Know More</a>
            </div>
            <div class="col-lg-6 text-center">
                <div class="agileits-banner-info4">
                    <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/image1.jpg" alt="image" class="img-fluid radius-image" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home block3 -->
<!-- services page block 2 -->
<section class="w3l-features py-5" id="features">
    <div class="call-w3 py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-6 feature-grid-left">
                    <h4 class="title-big">Get The Best Pharmacy Services</h4>
                    <p class="text-para mt-lg-4 mt-3">we care about our customers.Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.</p>
                    <p class="mt-3">We dispense prescriptions and other medicines, offer testing and screening for common conditions, and advise on minor ailments.We improve the lives of our customers by providing quality healthcare and customer products that deliver value to the communities we serve across the regions.
                    </p>
                    <a href="<?=Url::to(['/site/services'])?>" class="btn btn-primary btn-style mt-md-5 mt-4">Discover More</a>
                </div>
                <div class="col-lg-6 feature-grid-right mt-lg-0 mt-5">
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 box-wrap">
                            <a href="<?=Url::to(['/site/services'])?>" class="icon"><span class="fa fa-ticket"></span></a>
                            <h4><a href="<?=Url::to(['/site/services'])?>" class="title-head">Medication Synchronization</a></h4>
                            <p></p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="<?=Url::to(['/site/services'])?>" class="icon"><span class="fa fa-life-ring"></span></a>
                            <h4><a href="<?=Url::to(['/site/services'])?>" class="title-head">Medication Therapy Management</a></h4>
                            <p></p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="<?=Url::to(['/site/services'])?>" class="icon"><span class="fa fa-plane"></span></a>
                            <h4><a href="<?=Url::to(['/site/services'])?>" class="title-head">Multidose Packaging</a></h4>
                            <p></p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="<?=Url::to(['/site/services'])?>" class="icon"><span class="fa fa-building"></span></a>
                            <h4><a href="<?=Url::to(['/site/services'])?>" class="title-head">Immunizations</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //services page block 2 -->
<section class="w3l-servicesblock py-5" id="expect">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-6 about-right-faq align-self">
                <span class="title-small mb-2"> What to expect</span>
                <h3 class="title-big mx-0">We Value our customers</h3>
                <p class="mt-lg-4 mt-3 mb-lg-5 mb-4">Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.</p>
                <div class="two-grids mt-md-0 mt-md-5 mt-4">
                    <div class="grids_info">
                        <span class="fa fa-paint-brush"></span>
                        <div class="detail">
                            <h4>100K+</h4>
                            <p class="">Sales.</p>
                        </div>
                    </div>
                    <div class="grids_info">
                        <span class="fa fa-life-ring"></span>
                        <div class="detail">
                            <h4>100%</h4>
                            <p class="">Satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 offset-md-2 left-wthree-img mt-lg-0 mt-sm-5 mt-4 position-relative">
                <img src="<?=Yii::$app->homeUrl?>assets/images/image2.jpg" alt="" class="img-fluid radius-image">
                <div class="imginfo__box">
                    <h6 class="imginfo__title">Call Us Today!</h6>
                    <p>Trust us with  your Health<br>needs. </p>
                    <a href="tel:http://1(800)7654321"><span class="fa fa-phone mr-2"></span> (+254)784555555</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- middle -->
<div class="middle py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="welcome-left text-center py-4">
            <h3 class="title-big mx-auto">Need Medicines You Can Trust</h3>
            <p>We’re here for all your health needs.</p>
            <a href="<?=Url::to(['/site/contact'])?>" class="btn btn-style btn-white mt-sm-5 mt-4 mr-2">Get started</a>
            <a href="<?=Url::to(['/site/contact'])?>" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a>
        </div>
    </div>
</div>
<!-- //middle -->


<!--  News section -->
<div class="w3l-news" id="news">
    <section id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <span class="title-small mb-2">News and Events</span>
            <h3 class="title-big">Latest blog posts</h3>
            <div class="row mt-sm-5 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/blog1.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <p class="date"><span class="fa fa-calendar mr-2"></span> May 10, 2019</p>
                            <h4><a href="#blog-single">Free screening at makadara grounds Mombasa</a></h4>
                            <p>Come all and meet our team for medication</p>
                            <a href="<?=Url::to(['/site/contact'])?>" class=" link-style p-0 mt-4">Read More
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/blog2.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <p class="date"><span class="fa fa-calendar mr-2"></span> Jan,20 2020</p>
                            <h4><a href="#blog-single"> Free Medication Therapy Management</a></h4>
                            <p>is a program we offer here at the pharmacy to help synchronize your medication refills</p>
                            <a href="<?=Url::to(['/site/services'])?>" class=" link-style p-0 mt-4">Read more
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/blog3.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <p class="date"><span class="fa fa-calendar mr-2"></span> September 12, 2020</p>
                            <h4><a href="#blog-single">Start of Travel vaccinations</a></h4>
                            <p>Planning on traveling ? Before jetting off, make sure you are up to date on routine vaccinations.</p>
                            <a href="<?=Url::to(['/site/services'])?>" class=" link-style p-0 mt-4">Read More
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="w3l-logos py-5">
    <div class="container py-lg-4 py-2">
        <h3 class="title-big mx-0 text-center mb-md-5 mb-4"> Certificates & Standards</h3>
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
                <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/logo1.png" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
                <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/logo2.png" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-sm-0 mt-4">
                <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/logo3.png" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-md-0 mt-4">
                <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/logo4.png" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
                <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/logo5.png" alt="company-logo" class="img-fluid" />
            </div>
          
        </div>
    </div>
</section>
