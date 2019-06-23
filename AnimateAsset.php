<?php
namespace derekisbusy\animate;

use yii\web\AssetBundle;

class AnimateAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/yii2-animate';
    
    public $css = [
        YII_ENV_DEV ? 'css/animate.css' : 'css/animate.min.css',
    ];
}
