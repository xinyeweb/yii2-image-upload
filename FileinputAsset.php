<?php
/**
 * Created by PhpStorm.
 * User: hoter.zhang
 * Date: 2017/1/17
 * Time: 10:45
 */

namespace xinyeweb\images;


use yii\web\AssetBundle;

class FileinputAsset extends AssetBundle
{

    /* 全局CSS文件 */
    public $css = [
        'bootstrap-fileinput.css',
    ];
    /* 全局JS文件 */
    public $js = [];
    /* 依赖关系 */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init(){
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
    }
}