<?php

$this->title = 'Проверка домена';

?>

<p>Последнее действие - проверка домена. Выберите среди доступных вариантов способ который Вам подходит:</p>
<ol>
    <li>
        <p><b>E-mail.</b> Выберите e-mail из предложеного списка, нажмите на кнопку "Выпустить сертификат" . Проверьте Вашу почту, в течении 5-10 минут Вам должно поступить письмо со ссылкой на подтверждение. Перейдите по ней. Ожидайте выпуска в течении, как правило, 15 минут.</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/08.jpg"></p>
    </li>
    <li>
        <p><b>DNS</b>. Нажмите на кнопку "Выпустить сертификат".</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/09.jpg"></p>
        <p>В информации о сертификате  необходимо скопировать CNAME запись и прописать ее в DNS-записях Вашего домена.</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/10.jpg"></p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/11.jpg"></p>
    </li>
    <li>
        <p><b>HTTP</b>. Нажмите на кнопку "Выпустить сертификат"</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/12.jpg"></p>
        <p>В информации о сертификате  необходимо скопировать данные файла и разместить их у себя на сайте</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/10.jpg"></p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/13.jpg"></p>
    </li>
    <li>
        <p><b>HTTPS</b>. Нажмите на кнопку "Выпустить сертификат"</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/14.jpg"></p>
        <p>В информации о сертификате  необходимо скопировать данные файла и разместить их у себя на сайте<p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/10.jpg"></p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/15.jpg"></p>
    </li>
</ol>
<p>Ожидайте выпуска в течении, как правило, 15 минут.</p>
<p>Поздравляем! Сертификат успешно выпущен.</p>
