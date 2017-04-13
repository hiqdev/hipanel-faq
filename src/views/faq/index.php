<?php

use hipanel\faq\menus\FaqMenu;

$this->title = Yii::t('hipanel:faq', 'FAQ');
$this->params['breadcrumbs'][] = $this->title;

?>

<?= FaqMenu::widget() ?>
