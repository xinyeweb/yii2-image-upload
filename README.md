yii2-image-upload
=================
yii2-image-upload

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xinyeweb/yii2-image-upload "*"
```

or add

```
"xinyeweb/yii2-image-upload": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= $form->field($model, 'shop_logo')->widget(\xinyeweb\images\Images::className()) ?>```
```php
    public function actions() {
        return ArrayHelper::merge(parent::actions(), [
            'upload-image' => [
                'class' => 'xinyeweb\images\UploadAction',
            ],
        ]);
    }
```
