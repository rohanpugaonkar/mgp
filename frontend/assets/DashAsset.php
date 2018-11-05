<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class DashAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dashboard/css/font-awesome.min.css',
        'dashboard/css/jquery-jvectormap-1.2.2.css',
        'dashboard/css/style.css',
        'dashboard/css/_all-skins.min.css',
        'dashboard/dist/icheck/all.css',
        'dashboard/dist/fullcalendar/fullcalendar.min.css',
        // 'dashboard/dist/fullcalendar/fullcalendar.print.css'
        'css/iziToast.min.css'
    ];
    public $js = [
        
        'dashboard/js/jquery-2.2.3.min.js',
        'dashboard/js/bootstrap.min.js',
        'dashboard/js/jquery-ui.min.js',
        'dashboard/js/raphael-min.js',
        'dashboard/dist/morris/morris.min.js',
        'dashboard/dist/flot/jquery.flot.min.js',
        'dashboard/dist/flot/jquery.flot.resize.min.js',
        'dashboard/dist/flot/jquery.flot.pie.min.js',
        'dashboard/dist/flot/jquery.flot.categories.min.js',
        'dashboard/dist/icheck/icheck.min.js',
        'dashboard/js/fastclick.js',
        'dashboard/js/dashboard2.js',
        'dashboard/js/script.js',
        'dashboard/js/app.min.js',
        'dashboard/js/jquery.sparkline.min.js',
        'dashboard/js/jquery-jvectormap-1.2.2.min.js',
        'dashboard/js/jquery-jvectormap-world-mill-en.js',
        'dashboard/js/jquery.slimscroll.min.js',
        'dashboard/js/Chart.min.js',
        'dashboard/js/demo.js',
        'dashboard/js/moment.min.js',
        'dashboard/dist/fullcalendar/fullcalendar.min.js',
        'dashboard/js/iziToast.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset', //this includes bootstrap css & js
        // 'rmrevin\yii\fontawesome\AssetBundle', //this includes font awesome
    ];
}
