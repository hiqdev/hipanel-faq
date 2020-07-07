<?php

namespace hipanel\faq;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class FaqAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets/faq';

    public $js = [
        YII_ENV_PROD ? 'js/faq.min.js' : 'js/faq.js',
    ];

    public $depends = [
        BootstrapAsset::class,
        JqueryAsset::class,
    ];
}
