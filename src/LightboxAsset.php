<?php

namespace rubin\yii2\widget\lightbox;

use yii\web\AssetBundle;

class LightboxAsset extends AssetBundle
{
    public $sourcePath = '@bower/lightbox';
    public $js = [
        'src/js/lightbox.js'
    ];
    public $css = [
        'src/css/lightbox.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}