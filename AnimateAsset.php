<?php
namespace derekisbusy\animate;

use yii\web\AssetBundle;

class AnimateAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/animate';
    
    public $css = [
        'animate.min.css',
    ];
}
