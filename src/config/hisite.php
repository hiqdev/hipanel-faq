<?php

return [
    'aliases' => [
        '@faq' => '/faq/faq',
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                'hipanel:faq' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hipanel/faq/messages',
                ],
            ],
        ],
    ],
];
