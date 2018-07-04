<?php

$this->title = 'Покупка  SSL-сертификата';

?>

<p>Для покупки  SSL-сертификата перейдите в пункт меню Вашей учетной записи “SSL-сертификаты”/”Купить сертификат”.</p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/01.jpg"></p>
<p>Далее проставьте фильтры, с помощью которых будут отсортированы сертификаты.</P>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/02.jpg"></p>
<p>Выберите период на который желаете осуществить покупку сертификата и, прочитав и согласившись с условиями предоставления услуг, сделайте заказ.</p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/03.jpg"></p>
<p>Нажмите на кнопку “Получить сертификат”.</p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/04.jpg"></p>
<p>Для получения сертификата нужно выполнить несколько дополнительных действий.</p>
<p>Заполнить ( или подтянуть существующие) контактные данные. После чего сгенерировать CSR</p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/05.jpg"></p>
<p>Следующим шагом будет заполнение формы для генерации CSR . Нажмите на кнопку “Генерировать CSR” Вы увидите новое окно с данными CSR. Скопируйте их и сохраните в надежном месте.</p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/06.jpg"></p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/07.jpg"></p>
<p>Последнее действие - проверка домена. Выберите среди доступных вариантов способ который Вам подходит:</p>
<ol>
    <li>
        <p><b>E-mail.</b> Введите e-mail, нажмите на кнопку “Выпустить сертификат” . Проверьте Вашу почту, в течении 5-10 минут Вам должно поступить письмо со ссылкой на подтверждение. Перейдите по ней. Ожидайте выпуска в течении, как правило, 15 минут.</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/08.jpg"></p>
    </li>
    <li>
        <p><b>DNS</b>. Нажмите на кнопку “Выпустить сертификат”.</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/09.jpg"></p>
        <p>В информации о сертификате  необходимо скопировать CNAME запись и прописать ее в DNS-записях Вашего домена.</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/10.jpg"></p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/11.jpg"></p>
    </li>
    <li>
        <p><b>HTTP</b>. Нажмите на кнопку “Выпустить сертификат”</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/12.jpg"></p>
        <p>В информации о сертификате  необходимо скопировать данные файла и разместить их у себя на сайте</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/10.jpg"></p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/13.jpg"></p>
    </li>
    <li>
        <p><b>HTTPS</b>. Нажмите на кнопку “Выпустить сертификат”</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/14.jpg"></p>
        <p>В информации о сертификате  необходимо скопировать данные файла и разместить их у себя на сайте<p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/10.jpg"></p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/ru/15.jpg"></p>
    </li>
</ol>
<p>Ожидайте выпуска в течении, как правило, 15 минут.</p>
<p>Поздравляем! Сертификат успешно выпущен.</p>
