<?php

return [
    'aliases' => [
        '@faq' => '/faq/faq',
    ],
    'modules' => [
        'faq' => [
            'class' => \hipanel\faq\Module::class,
        ],
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
