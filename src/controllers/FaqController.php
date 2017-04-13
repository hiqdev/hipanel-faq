<?php

namespace hipanel\faq\controllers;

use hipanel\actions\RenderAction;
use hipanel\base\Controller;

class FaqController extends Controller
{
    public function actions()
    {
        return [
            'index' => [
                'class' => RenderAction::class,
            ]
        ];
    }
}
