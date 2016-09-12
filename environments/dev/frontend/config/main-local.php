<?php

    $config = [
        'components' => [
            'request' => [
                'csrfParam' => '_csrf-frontend',
                'cookieValidationKey' => 'ski4ULCqVRfjk-ChvGIkNVmjWIqJbDE0',
            ],
            'user'       => [
                'identityClass'   => '\backend\models\User',
                'enableAutoLogin' => true,
                'identityCookie'  => [
                    'name'     => '_identity-frontend',
                    'httpOnly' => true
                ],
            ],
            'session'    => [
                // this is the name of the session cookie used for login on the frontend
                'name' => 'advanced-frontend',
            ],
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName'  => false,
                'rules'           => [
                    '/'               => 'site/index',
                    'catalog'         => 'site/catalog',
                    'realty/<id:\d+>' => 'site/realty',
                    'video-review'    => 'site/video-review'
                ],
            ]

        ],
    ];

    if(!YII_ENV_TEST){
        // configuration adjustments for 'dev' environment
        $config['bootstrap'][] = 'debug';
        $config['modules']['debug'] = [
            'class' => 'yii\debug\Module',
        ];
        $config['bootstrap'][] = 'gii';
        $config['modules']['gii'] = [
            'class' => 'yii\gii\Module',
        ];
    }

    return $config;