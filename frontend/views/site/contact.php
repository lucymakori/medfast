<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
        </div>
    </div>
</section>
<!-- contact block -->
<section class="wthree-row py-5 about-main" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-lg-5">
                <h3 class="title-small mb-2">Get in touch with us</h3>
                <h3 class="title-big">Let's discuss any Medfast Phamacies services enquiry </h3>
            </div>
            <div class="col-lg-6">
                <p class="pt-4">we care about our customers.Medfast Pharmacists play a key role in providing quality healthcare services to its clients. We have experts in medicines who use their clinical expertise.</p>
            </div>
        </div>
        <div class="d-grid contact my-md-5 my-4 pt-lg-3">
            <div class="contact-info-left d-grid text-center">
                <div class="contact-info">
                    <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/office.png" alt="" class="img-fluid">
                    <h4>Contact Address</h4>
                    <p>Parmara Building off Kipchoge Keino Street,Mombasa</p>
                </div>
                <div class="contact-info">
                    <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/envelope.png" alt="" class="img-fluid">
                    <h4>Email address</h4>
                    <p><a href="mailto:medfast@supportmail.com">medfast@supportmail.com</a></p>
                     <p><a href="mailto:medfast@supportmail.com">medfast@supportmail.com</a></p>
                </div>
                <div class="contact-info">
                    <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/support.png" alt="" class="img-fluid">
                    <h4>Contact phone</h4>
                   <p><a href="tel:(+254)784555555">(+254)784555555</a></p>
                   <p><a href="tel:(+254)784555555">(+254)784555555</a></p>
                </div>
                <div class="contact-info">
                    <img src="<?=Yii::$app->homeUrl?>assets/medfast/images/time.png" alt="" class="img-fluid">
                    <h4>Opening hours</h4>
                    <p>Mon-Fri: 8 AM - 8 PM</p>
                    <p>Sat-Sun: 8 AM - 6 PM</p>
                </div>
            </div>
        </div>
        <div class="map-content-9 pt-lg-5">
            <h5 class="mb-sm-4 mb-3">Get in Touch. We're Here to Help</h5>
            <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                <div class="twice-two">
                    <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name" required="">
                    <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email" required="">
                </div>
                <div class="twice">
                    <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subject" required="">
                </div>
                <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message" required=""></textarea>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- //contact block -->
<div class="map-iframe">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
 </div>
</div>
</div>
