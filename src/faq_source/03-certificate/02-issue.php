<?php

$this->title = 'Issue of SSL-certificate';

?>

<p>Click on the "Get certificate" button.</p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/04.jpg"></p>
<p>To obtain the certificate, you have  a few additional steps.</p>
<p>Fill in (or choose the  existing) contact details. Then generate the CSR</p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/05.jpg"></p>
<p>The next step is to fill in the form for the CSR generation  . Click on "Generate CSR" and you will see a new window with CSR data. Copy all information from there  and save it in a safe place.</p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/06.jpg"></p>
<p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/07.jpg"></p>
<p>The last step a to validation of the domain. Choose the domain control validation method that suits You:</p>
<ol>
    <li>
        <p><b>E-mail</b>. Choose the contact e-mail from the offered list, click on "Issue certificate". Check Your email, within 5-10 minutes You should receive an email with a link to confirm. Go for it. Expect to release of the certificate within, as a rule, 15 minutes.</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/08.jpg"></p>
    </li>
    <li>
        <p><b>DNS</b>. Click on the "Issue certificate" button.</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/09.jpg"></p>
        <p>Open the certificate`s data and copy CNAME-record from there. This record must be set in your domain DNS-records.</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/10.jpg"></p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/11.jpg"></p>
    </li>
    <li>
        <p><b>HTTP</b>. Click on the "Issue certificate" button</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/12.jpg"></p>
        <p>Open the certificate`s data. Copy the file data and locate it on your site.</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/10.jpg"></p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/13.jpg"></p>
    </li>
    <li>
        <p><b>HTTPS</b>. Click on the "Issue certificate" button</p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/14.jpg"></p>
        <p>Open the certificate`s data. Copy the file data and locate it on your site.<p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/10.jpg"></p>
        <p><img src="<?= $options['imgDir'] ?>/help/certificate/purchase/en/15.jpg"></p>
    </li>
</ol>
<p>Expect to release  of the certificate within, as a rule, 15 minutes.</p>
<p>The certificate has been successfully issued.</p>
