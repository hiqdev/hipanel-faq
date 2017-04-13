<?php

namespace hipanel\faq\menus;

use Yii;

/**
 * Class SidebarSubMenu
 * @package hipanel\faq\menus
 */
class SidebarSubMenu extends \hiqdev\yii2\menus\Menu
{
    public function items()
    {
        return [
            'tickets' => [
                'items' => [
                    'faq' => [
                        'label' => Yii::t('hipanel:faq', 'FAQ'),
                        'url' => ['@faq/index'],
                    ],
                ],
            ],
        ];
    }
}
