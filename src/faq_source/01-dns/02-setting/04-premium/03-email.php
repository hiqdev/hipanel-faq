<?php

$this->title = 'E-mail forwarding';

?>

<p>
    You need to install our servers to configure E-mail forwarding in <?= $options['host'] ?> panel.
</p>
<p>
    <a href="#01-installing">Installing <?= $options['host'] ?> NS servers</a>
</p>
<p>
    After that you have to activate the "Premium package"  in the domain name settings.
</p>
<p><img src="<?= $options['imgDir'] ?>/help/dns/setup/en/premium_1.jpg"></p>
<p>
    Now you can configure "Email forwarding"  from your domain to any existing email address. It is possible to forward mail from a specific user as well as all mail. Use "*" symbol as user’s name to forward all mail.
</p>
<p><img src="<?= $options['imgDir'] ?>/help/dns/setup/en/email_redirect_1.jpg"></p>
