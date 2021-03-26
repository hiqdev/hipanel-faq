<?php
/**
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\faq\widgets;

use hipanel\faq\FaqAsset;
use yii\base\Widget;

class Faq extends Widget
{
    public array $items = [];

    public bool $withAssets = true;

    public function run(): string
    {
        if ($this->withAssets) {
            FaqAsset::register($this->view);
            $this->registerClientScript();
        }

        return $this->render('faq/root', [
            'items' => $this->items,
        ]);
    }

    protected function registerClientScript(): void
    {
        $this->view->registerJs("
            // Switch signs plus and minus on collapse
            $('.collapse').on('show.bs.collapse', function(event){
                var i = $(this).siblings().find('i').eq(0);
                i.toggleClass('fa-plus-square-o fa-minus-square-o');
                event.stopPropagation();
            }).on('hide.bs.collapse', function(event){
                var i = $(this).siblings().find('i').eq(0);
                i.toggleClass('fa-minus-square-o fa-plus-square-o');
                event.stopPropagation();
            });

            // Init FAQ plugin
            $('#faq').faq();
        ");
    }
}
