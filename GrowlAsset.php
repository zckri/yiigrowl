<?php
namespace joker7789\yiigrowl;

use yii\web\AssetBundle;

class GrowlAsset extends AssetBundle
{
    public $sourcePath = '@bower/jgrowl';
    public $baseUrl = '@web';

    public $js = [
        'jquery.jgrowl.min.js',
    ];

    public $css = [
        'jquery.jgrowl.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
