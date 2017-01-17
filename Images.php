<?php
/**
 * Created by PhpStorm.
 * User: hoter.zhang
 * Date: 2016/12/8
 * Time: 14:24
 */

namespace xinyeweb\images;


use yii\base\InvalidConfigException;
use yii\helpers\Url;
use yii\widgets\InputWidget;

class Images extends InputWidget
{

    const TYPE_IMAGE    = 'image';
    const TYPE_IMAGES   = 'images';

    //默认单图
    public $type = self::TYPE_IMAGE;

    //是否存入数据库
    public $saveDB = 1;
    //上传地址
    public $url     = '';

    public function init(){

        if ($this->type != self::TYPE_IMAGE && $this->type != self::TYPE_IMAGES) {
            throw new InvalidConfigException("Images 'type' error ,his value self::TYPE_IMAGE or self::TYPE_IMAGES");
        }
        /* 是否保存到数据 */
        if (!in_array($this->saveDB ,[0,1])) {
            throw new InvalidConfigException("Images 'saveDB' = 0 or 1");
        }
        /* 默认上传地址 */
        if ($this->url == '') {
            $this->url = Url::to(["upload-image"]);
        }
        parent::init();
    }

    public function run(){
        $opt = [
            'model'     => $this->model,
            'attribute' => $this->attribute,
            'saveDB'    => $this->saveDB,
            'url'       => $this->url,
        ];
        return $this->render($this->type,$opt);
    }
}