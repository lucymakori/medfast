<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">About Us</h2>
        </div>
    </div>
</section>
<!-- about block1 -->
<section class="wthree-row py-5 about-main" id="about">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-md-5 mb-4">
                <h3 class="title-small mb-2">Few words about us</h3>
                <h3 class="title-big">We Offer a full range of Professional services to our customers.</h3>
                <p class="pt-4">we care about our customers.Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.We dispense prescriptions and other medicines, offer testing and screening for common conditions, and advise on minor ailments.
          We improve the lives of our customers by providing quality healthcare and customer products that deliver value to the communities we serve across the regions.</p>
                <a href="<?=Url::to(['/site/services'])?>" class="btn btn-style btn-primary mt-lg-5 mt-4">Get service now</a>
            </div>
            <div class="col-lg-6 text-center">
                <div class="agileits-banner-info4">
                    <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/g5.jpg" alt="image" class="img-fluid radius-image" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about block1 -->
<!-- about block -->
<section class="w3l-product py-5 about-main">
    <div class="container py-lg-5 py-md-4 py-2">
        <h3 class="title-small mb-2">Important information</h3>
        <h3 class="title-big mb-md-5 mb-4">Certified by the Joint Commission.</h3>
        <div class="row">
            <div class="col-lg-4 mb-lg-0 mb-5">
                <p class="">Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.We dispense prescriptions and other medicines, offer testing and screening for common conditions, and advise on minor ailments.</p>
                    
                <a href="<?=Url::to(['/site/services'])?>" class="btn btn-style btn-primary mt-lg-5 mt-4">Learn more about us</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="abt-right mt-0 mb-4">We are Providing Excellent Health Care.</h5>
                <p class="">We improve the lives of our customers by providing quality healthcare and customer products that deliver value to the communities we serve across the regions.The Largest and most respected pharmacies.Extensive range of products stocked across all outlets.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 text-center mt-md-0 mt-4">
                <div class="agileits-banner-info4">
                    <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/g8.jpg" alt="image" class="img-fluid radius-image" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-servicesblock py-5" id="services">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-6 about-right-faq align-self">
                <h3 class="title-big">Keep improving our Pharmacies</h3>
                <p class="mt-lg-4 mt-3 mb-lg-5 mb-4">A local chain of retail pharmacies trading under the "HealthPlus chemist" trademark involved in selling advanced,high-quality and affordable drugs</p>
                <div class="progress-info info1">
                    <h6 class="progress-tittle">Activity Level<span class="">80%</span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="progress-info info2">
                    <h6 class="progress-tittle">Service delivery<span class="">90%</span>
                    </h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="progress-info info3">
                    <h6 class="progress-tittle">Satisfaction <span class="">95%</span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 left-wthree-img mt-lg-0 mt-4">
                <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/progress.jpg" alt="" class="img-fluid radius-image">
            </div>
        </div>
    </div>
</section>
 <section class="w3l-forms-9 py-5" id="">
     <div class="main-w3 py-lg-5 py-md-4 py-2">
         <div class="container">
             <div class="row align-items-center">
                 <div class="main-midd col-lg-12">
                     <h3 class="title-big">We’re here for your health needs.</h3>
                     <h2><span class="fa mr-1 fa-phone"></span> (+254)784555555</h2>
                     <a class="btn btn-outline-light btn-style mt-md-5 mt-4" href="<?=Url::to(['/site/contact'])?>"> Contact Us </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
<section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">

        <h6 class="title-small">Our Statistics</h6>
        <h3 class="title-big mb-md-5 mb-5">Learn about Our Success</h3>
        <div class="row stats-con">
            <div class="col-md-3 col-6 stats_info counter_grid">
                <div class="grids_info">
                    <span class="fa fa-paint-brush"></span>
                    <div class="detail">
                        <h4>150</h4>
                        <p class="">Branches</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid1">
                <div class="grids_info">
                    <span class="fa fa-life-ring"></span>
                    <div class="detail">
                        <h4>100%</h4>
                        <p class="">Satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
                <div class="grids_info">
                    <span class="fa fa-users"></span>
                    <div class="detail">
                        <h4>20.2k</h4>
                        <p class="">Customers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
                <div class="grids_info">
                    <span class="fa fa-fire-extinguisher"></span>
                    <div class="detail">
                        <h4>120+</h4>
                        <p class="">Suppliers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
