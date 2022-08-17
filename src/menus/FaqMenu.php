<?php

namespace hipanel\faq\menus;

use hipanel\faq\widgets\Faq;
use hipanel\helpers\StringHelper;
use hiqdev\yii2\menus\Menu;
use yii\web\View;
use Yii;

class FaqMenu extends Menu
{
    public $widgetConfig = [
        'class' => Faq::class,
    ];

    public $path = __DIR__ . '/../faq_source';

    /**
     * @return \yii\base\View|View
     */
    public function getView()
    {
        return Yii::$app->view;
    }

    public function items()
    {
        $title = $this->view->title;
        $data = $this->crawlDir(Yii::getAlias($this->path));
        $this->view->title = $title;

        return $data['items'];
    }

    private function crawlDir($path)
    {
        $items = [];
        $label = [];
        foreach ($this->scanDir($path) as $key => $file) {
            if (is_dir($file)) {
                $item = $this->crawlDir($file);
            } else {
                $item = $this->readFile($file);
            }

            if ($item === null) {
                continue;
            }

            $items[$key] = $item;
        }

        $indexFile = "$path/index.php";
        if (is_file($indexFile)) {
            $index = $this->readFile($indexFile);
            if ($index === null) {
                return null;
            }

            $label = $index['label'];
        }

        return compact('label', 'items');
    }

    private function readFile($path): ?array
    {
        $visible = true;
        $content = $this->view->renderFile($path, [
            'options' => $this->additionalOptions(),
            'hide' => function () use (&$visible) {
                $visible = false;
            }
        ]);
        $label = $this->view->title;

        if (!$visible) {
            return null;
        }

        return compact('content', 'label');
    }

    private function scanDir($path)
    {
        $res = [];
        foreach (scandir($path) as $file) {
            // and ignore lang folder todo: need improve
            if ($file[0] === '.' || $file === 'index.php' || StringHelper::endsWith($file, 'ru')) {
                continue;
            }
            $info = pathinfo($file);
            $res[$info['filename']] = $path . '/' . $file;
        }

        return $res;
    }

    public function additionalOptions()
    {
        return [
            'host' => Yii::$app->request->hostName,
            'imgDir' => 'https://cdn.hiqdev.com/hipanel',
        ];
    }
}
