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
        'themeManager' => [
            'pathMap' => [
                dirname(__DIR__) . '/src/widgets/views' => '$themedWidgetPaths',
                dirname(__DIR__) . '/src/views' => '$themedViewPaths',
            ],
        ],
        'i18n' => [
            'translations' => [
                'hipanel:faq' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => dirname(__DIR__) . '/src/messages',
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
