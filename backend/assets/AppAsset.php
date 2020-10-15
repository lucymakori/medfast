<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/medfast/css/bootstrap.min.css',
        'assets/medfast/css/plugins.css',
        'assets/medfast/css/main.css',
        'assets/medfast/css/themes.css',
        'assets/medfast/css/bootstrap.min.css',
    ];
    public $js = [
        'assets/medfast/js/main.js',
        'assets/medfast/js/vendor/modernizr.min.js',
        'assets/medfast/js/vendor/jquery.min.js',
        'assets/medfast/js/plugins.js',
        'assets/medfast/js/app.js',
        'assets/medfast/js/vendor/bootstrap.min.js',
        'assets/medfast/js/pages/index.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
