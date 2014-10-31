yiiGrowl
========

This is a yii2 widget, which makes use of jgrowl plugin (see [here](http://stanlemon.net/2013/03/16/jgrowl-1-2-11/))

Installation:
```
composer require joker7789/yiigrowl:dev-master
```

Usage example (in your view/layout for example):

    <?=\joker7789\yiigrowl\Growl::widget([
        'message' => "Hello World",
        'options' => ['header' => 'testing header'],
    ]);?>
    
cheers,

zckri
