Yii2 unite gallery
==================
Unite gallery wrapper for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist mrbig00/yii2-unite-gallery "*"
```

or add

```
"mrbig00/yii2-unite-gallery": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \mrbig00\unitegallery\UniteGalleryWidget::widget(
                    [
                        'theme'   => 'tilesgrid',
                        'options' => [
                        ],
                        'items'   => [
                            [
                                'src'         => 'source.jpg',
                                'data-image'  => 'remote.jpg',
                            ],
                            [
                                'src'         => 'source.jpg',
                                'data-image'  => 'remote.jpg',
                            ],
                        ],
                    ]
                ); 
?>

```