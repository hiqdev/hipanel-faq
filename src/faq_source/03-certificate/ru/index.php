<?php

$this->title = 'SSL-сертификаты';

if (!Yii::getAlias('@certificate', false)) {
    $hide();
}
