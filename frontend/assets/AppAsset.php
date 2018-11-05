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
        'css/font-awesome.min.css',
        'css/plugin.css',
        'css/main.css',
        'css/animate.css'
    ];
    public $js = [
        'js/plugins.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset', //this includes bootstrap css & js
        // 'rmrevin\yii\fontawesome\AssetBundle', //this includes font awesome
    ];
}
