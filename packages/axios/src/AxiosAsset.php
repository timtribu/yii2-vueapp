<?php

/**
 * @package yii2-vueapp
 * @version 1.0.0
 */

namespace sfmobile\vueapp\packages\axios;

use yii\web\AssetBundle;

/**
 * Axios asset bundle
 * @author Fabrizio Caldarelli
 * @since 1.0
 */
class AxiosAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm-asset/axios/dist';
    public function init()
    {
        parent::init();
        $this->js[] = YII_DEBUG ? 'axios.js' : 'axios.min.js';
    }     
}
