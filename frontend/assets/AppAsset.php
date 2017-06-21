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
    'themes/bootshop/bootstrap.min.css',
    'themes/css/base.css',
    'themes/css/bootstrap-responsive.min.css',
    'themes/css/font-awesome.css',
    
    'themes/js/google-code-prettify/prettify.css',
    'themes/switch/themeswitch.css',

    ];
    public $js = [
    'themes/js/jquery.js',
    
    'themes/js/bootstrap.min.js',
    'themes/js/google-code-prettify/prettify.js',
    'themes/js/bootshop.js',
    'themes/js/jquery.lightbox-0.5.js',
    'themes/switch/theamswitcher.js',
    'themes/js/function.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
