<?php

namespace hipanel\faq\controllers;

use hipanel\modules\domain\repositories\DomainTariffRepository;
use hipanel\actions\RenderAction;
use hipanel\base\Controller;

class FaqController extends Controller
{
    protected $domainTariffRepository;

    public function __construct($id, $module, DomainTariffRepository $domainTariffRepository, $config = []) {
        parent::__construct($id, $module, $config);
        $this->domainTariffRepository = $domainTariffRepository;
    }

    public function actions()
    {
        return [
            'index' => [
                'class' => RenderAction::class,
                'data' => function() {
                    $ruAvailableZones = [];
                    $zones = $this->domainTariffRepository->getAvailableZones();
                    foreach ($zones as $record) {
                        if ($record->type !== 'dregistration') {
                            continue;
                        }

                        if (!in_array($record->zone, ['ru', 'su'], true)) {
                            continue;
                        }

                        $ruAvailableZones[$record->zone] = true;

                    }

                    return $ruAvailableZones;
                },
            ],
        ];
    }
}
