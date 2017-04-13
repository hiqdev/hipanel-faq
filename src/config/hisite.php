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
    'container' => [
        'definitions' => [
            \hiqdev\thememanager\menus\AbstractSidebarMenu::class => [
                'add' => [
                    'ticket' => [
                        'menu' => [
                            'merge' => [
                                'faq' => [
                                    'menu' => \hipanel\faq\menus\SidebarSubMenu::class,
                                    'where' => [
                                        'after' => ['templates'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
