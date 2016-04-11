<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license https://vistart.name/license/
 */

namespace rhoone\task\assets;

use yii\web\AssetBundle;

/**
 * Description of ExtensionAsset
 *
 * @author vistart <i@vistart.name>
 */
class ExtensionAsset extends AssetBundle
{
    public $sourcePath = "@rhoone/task/assets/extension";
    public $baseUrl = '@web';
    public $css = [
        'css/timeline.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
