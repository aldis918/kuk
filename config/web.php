<?php
return[
    'id' => 'kuk',
    'basePath' => realpath( __DIR__ . '/../'),
    'sourceLanguage' => 'lv',
    'language' => 'en',
    'bootstrap' => ['debug'],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request' => [
            'cookieValidationKey' => 'secret code'
        ]
    ],
    'modules' => [
        'debug' => 'yii\debug\Module'
    ]
];