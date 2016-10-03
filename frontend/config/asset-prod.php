<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2016-10-03 11:20:39
 */
return [
    'basic' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
        'js' => [
            'js/basic-0cef0a01b6c64bb08eacabaf3712c20f.js',
        ],
        'css' => [
            'css/basic-ad23c273e026ace6c10967989dafd1e5.css',
        ],
    ],
    'map' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
        'js' => [
            'js/map-2205a2da36446ef9b496ab78d0cab842.js',
        ],
        'css' => [],
    ],
    'form' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
        'js' => [
            'js/form-fc400fbc52ea2b5d557b95c89228b788.js',
        ],
        'css' => [],
    ],
    'ionRange' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
        'js' => [
            'js/ionRange-a705028cedd39b93a57a5a91dcc49c89.js',
        ],
        'css' => [
            'css/ionRange-2128ae62bddc12709256fc007cffe7de.css',
        ],
    ],
    'slider' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
        'js' => [
            'js/slider-4d107c67ee1d126d843a674742f5368e.js',
        ],
        'css' => [],
    ],
    'landing' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
        'js' => [
            'js/landing-017ebb331685f8f0a588f9ad71942013.js',
        ],
        'css' => [],
    ],
    'catalog' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
        'js' => [
            'js/catalog-719fa2bb73eb866e43ae69f61363dfce.js',
        ],
        'css' => [],
    ],
    'realty' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
        'js' => [
            'js/realty-acc96987c343bee8406c231999347a31.js',
        ],
        'css' => [
            'css/realty-c542cc592f81497b53b3705f7107c14b.css',
        ],
    ],
    'yii\\web\\JqueryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'basic',
        ],
    ],
    'yii\\web\\YiiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'basic',
        ],
    ],
    'yii\\widgets\\PjaxAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'basic',
        ],
    ],
    'yii\\validators\\ValidationAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'basic',
        ],
    ],
    'yii\\widgets\\MaskedInputAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'basic',
        ],
    ],
    'macgyer\\yii2materializecss\\assets\\MaterializeFontAsset' => [
        'css' => [
            '//fonts.googleapis.com/icon?family=Material+Icons',
        ],
        'sourcePath' => null,
        'basePath' => null,
        'baseUrl' => null,
        'depends' => [],
        'js' => [],
        'jsOptions' => [],
        'cssOptions' => [],
        'publishOptions' => [],
        'class' => 'macgyer\\yii2materializecss\\assets\\MaterializeFontAsset',
    ],
    'macgyer\\yii2materializecss\\assets\\MaterializeAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'macgyer\\yii2materializecss\\assets\\MaterializeFontAsset',
            'basic',
        ],
    ],
    'macgyer\\yii2materializecss\\assets\\MaterializePluginAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'basic',
        ],
    ],
    'frontend\\assets\\AppAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'macgyer\\yii2materializecss\\assets\\MaterializeAsset',
            'macgyer\\yii2materializecss\\assets\\MaterializePluginAsset',
            'basic',
        ],
    ],
    'frontend\\assets\\GoogleMapAsset' => [
        'js' => [
            '//maps.googleapis.com/maps/api/js?key=AIzaSyAUYPzaG4lQCw-v_7JUodo1mgWDlztuD0s',
        ],
        'depends' => [
            'yii\\web\\JqueryAsset',
        ],
        'sourcePath' => null,
        'basePath' => null,
        'baseUrl' => null,
        'css' => [],
        'jsOptions' => [],
        'cssOptions' => [],
        'publishOptions' => [],
        'class' => 'frontend\\assets\\GoogleMapAsset',
    ],
    'frontend\\assets\\MapAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'frontend\\assets\\GoogleMapAsset',
            'map',
        ],
    ],
    'yii\\widgets\\ActiveFormAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'form',
        ],
    ],
    'frontend\\assets\\IonRangeAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'ionRange',
        ],
    ],
    'frontend\\widgets\\SliderWidget\\assets\\SliderWidgetAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'slider',
        ],
    ],
    'frontend\\assets\\YoutubeAsset' => [
        'js' => [
            'https://www.youtube.com/iframe_api',
        ],
        'depends' => [
            'yii\\web\\JqueryAsset',
        ],
        'sourcePath' => null,
        'basePath' => null,
        'baseUrl' => null,
        'css' => [],
        'jsOptions' => [],
        'cssOptions' => [],
        'publishOptions' => [],
        'class' => 'frontend\\assets\\YoutubeAsset',
    ],
    'frontend\\assets\\LandingAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'frontend\\assets\\AppAsset',
            'yii\\web\\JqueryAsset',
            'frontend\\assets\\MapAsset',
            'frontend\\assets\\IonRangeAsset',
            'frontend\\assets\\YoutubeAsset',
            'landing',
        ],
    ],
    'frontend\\assets\\CatalogAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'frontend\\assets\\AppAsset',
            'frontend\\assets\\IonRangeAsset',
            'catalog',
        ],
    ],
    'frontend\\assets\\SlickAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'realty',
        ],
    ],
    'frontend\\assets\\RealtyAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'frontend\\assets\\AppAsset',
            'frontend\\assets\\GoogleMapAsset',
            'frontend\\assets\\MapAsset',
            'frontend\\assets\\SlickAsset',
            'realty',
        ],
    ],
];