<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class IndexAsset extends AssetBundle
{

    public $css = [
        'css/index.css',
    ];
    public $js = [
        'js/vivus.js',
        'js/index.js',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
