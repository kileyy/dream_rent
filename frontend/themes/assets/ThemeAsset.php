<?php

namespace frontend\themes\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Main frontend application asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/assets/public';


    public $css = [
        'css/bootstrap.min.css',
        'plugins/fontawesome/css/fontawesome.min.css',
        'plugins/fontawesome/css/all.min.css',
        'plugins/ion-rangeslider/css/ion.rangeSlider.min.css',
        'plugins/select2/css/select2.min.css',
        'css/bootstrap-datetimepicker.min.css',
        'plugins/aos/aos.css',
        'css/feather.css',
        'css/owl.carousel.min.css',
        'css/style.css',
        'css/bootstrap.min.css',

    ];

    public $js = [
        'js/jquery-3.6.4.min.js',
        'js/bootstrap.bundle.min.js',
        'js/script.js',
        'js/jquery.waypoints.js',
        'js/jquery.counterup.min.js',
        'plugins/aos/aos.js',
        'plugins/select2/js/select2.min.js',
        'js/backToTop.js',
        'plugins/ion-rangeslider/js/ion.rangeSlider.min.js',
        'plugins/ion-rangeslider/js/custom-rangeslider.js',
        'plugins/theia-sticky-sidebar/ResizeSensor.js',
        'plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js',
        'plugins/moment/moment.min.js',
        'js/bootstrap-datetimepicker.min.js',
        'js/owl.carousel.min.js',
        'plugins/slick/slick.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        JqueryAsset::class,

    ];
}
