<?php
return[
    'id' => 'kuk',
    'basePath' => realpath( __DIR__ . '/../'),
    'bootstrap' => ['debug'],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['lv', 'en'],
            'enableDefaultLanguageUrlCode' => true
        ],
        'request' => [
            'cookieValidationKey' => 'secret code'
        ]
    ],
    'modules' => [
        'debug' => 'yii\debug\Module'
    ]
];