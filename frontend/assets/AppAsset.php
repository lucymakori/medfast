<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        "https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap",
        "assets/medfast/css/style-starter.css",
      
    ];
    public $js = [
        "assets/medfast/js/jquery-3.3.1.min.js",
        "assets/medfast/js/jquery-1.9.1.min.js",
        "assets/medfast/js/theme-change.js",
        "assets/medfast/js/easyResponsiveTabs.js",
        "assets/medfast/js/owl.carousel.js",
        "assets/medfast/js/bootstrap.min.js",
        "assets/medfast/js/nav.js",
        "assets/medfast/js/niv.js",
        "assets/medfast/js/nev.js",
        "assets/medfast/js/nuv.js",
        "assets/medfast/js/nov.js",
        "assets/medfast/js/naav.js",
         "assets/medfast/js/niiv.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
