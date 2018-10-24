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
        'css/font-awesome.min.css',
        'css/jquery-jvectormap-1.2.2.css',
        'css/style.css',
        'css/_all-skins.min.css',
        'dist/icheck/all.css',
        'dist/fullcalendar/fullcalendar.min.css',
        // 'dist/fullcalendar/fullcalendar.print.css',
        'css/iziToast.min.css'
    ];
    public $js = [

        'js/jquery-ui.min.js',
        'js/raphael-min.js',
        'dist/morris/morris.min.js',
        'js/jquery-ui.min.js',
        'js/raphael-min.js',
        'dist/morris/morris.min.js',
        'dist/flot/jquery.flot.min.js',
        'dist/flot/jquery.flot.resize.min.js',
        'dist/flot/jquery.flot.pie.min.js',
        'dist/flot/jquery.flot.categories.min.js',
        'dist/icheck/icheck.min.js',
        'js/fastclick.js',
        'js/dashboard2.js',
        'js/script.js',
        'js/app.min.js',
        'js/jquery.sparkline.min.js',
        'js/jquery-jvectormap-1.2.2.min.js',
        'js/jquery-jvectormap-world-mill-en.js',
        'js/jquery.slimscroll.min.js',
        'js/Chart.min.js',
        'js/demo.js',
        'js/moment.min.js',
        'dist/fullcalendar/fullcalendar.min.js',
        'js/iziToast.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset', //this includes bootstrap css & js
    ];
}
