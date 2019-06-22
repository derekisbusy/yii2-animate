Yii2 Animate
============
Animate.css for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist derekisbusy/yii2-animate "*"
```

or add

```
"derekisbusy/yii2-animate": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it by adding it to your view  :

```php
use \derekisbusy\animate\AnimateAsset;

AnimateAsset::register($this);
```

or by adding to your another assets dependencies list :

```php
  public $depends = [
    'derekisbusy\animate\AnimateAsset'
  ];
```

Documentation
-----------
 * [daneden/animate.css](https://github.com/daneden/animate.css)
 * [yii2 assets](https://www.yiiframework.com/doc/guide/2.0/en/structure-assets)

