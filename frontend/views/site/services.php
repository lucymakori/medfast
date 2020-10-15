<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'services';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Our Services</h2>
        </div>
    </div>
</section>
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
                                    <h3>Get The Best Pharmacy Services.</h3>
                                      <p>we care about our customers.Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.</p>
                                         <p class="mt-3">We dispense prescriptions and other medicines, offer testing and screening for common conditions, and advise on minor ailments.We improve the lives of our customers by providing quality healthcare and customer products that deliver value to the communities we serve across the regions.</p>                        
                                </div>
                             <div class="col-lg-6 mt-lg-0 mt-5">
                           <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/residentsan.jpg" class="img-fluid radius-image-full"
                        alt="project image">
                 </div>          


   <div class="w3l-news" id="news">
      <section id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">         
            <h3 class="title-big">We Offer</h3>
            <div class="row mt-sm-5 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="<?=Yii::$app->homeUrl?>assets/images/blog1.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <h4><a href="#blog-single">Medication Synchronization</a></h4>
                            <p>is a program we offer here at the pharmacy to help synchronize your medication refills so that you will be able to pick up ALL of your medications on a single day each month.</p>
                            <a href="<?=Url::to(['/site/contact'])?>" class=" link-style p-0 mt-4">Learn More
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="<?=Yii::$app->homeUrl?>assets/images/blog2.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">                            
                            <h4><a href="#blog-single"> Medication Therapy Management</a></h4>
                            <p>Medication therapy management, otherwise known as MTM, is a term used for a program to help you manage your medications and health conditions.</p>
                            <a href="<?=Url::to(['/site/contact'])?>" class=" link-style p-0 mt-4">Learn More
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
                            <h4><a href="#blog-single">Diabetes Management Activities</a></h4>
                            <p>We do diabetes checkups to help you Keep your blood sugar levels within the range recommended inorder to manage your health condition.</p>
                            <a href="<?=Url::to(['/site/contact'])?>" class=" link-style p-0 mt-4">Learn More
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
                            <h4><a href="#blog-single">Blood Pressure Monitoring</a></h4>
                            <p>Keeping your blood  pressure within the range recommended by your doctor</p>
                            <a href="<?=Url::to(['/site/contact'])?>" class=" link-style p-0 mt-4">Learn More
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="<?=Yii::$app->homeUrl?>assets/images/blog3.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <h4><a href="#blog-single">Immunizations</a></h4>
                            <p>When it comes to disease prevention, immunizations are key. Getting vaccinated protects you.</p>
                            <a href="<?=Url::to(['/site/contact'])?>" class=" link-style p-0 mt-4">Learn More
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="grids5-info">
                        <a href="#blog-single" class="d-block zoom"><img src="<?=Yii::$app->homeUrl?>assets/images/blog3.jpg" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">                           
                            <h4><a href="#blog-single">Multidose Packaging</a></h4>
                            <p>We offer a multi-dose packaging that bundles your medications together by date and time.</p>
                            <a href="<?=Url::to(['/site/contact'])?>" class=" link-style p-0 mt-4">Learn More
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


                   
                
