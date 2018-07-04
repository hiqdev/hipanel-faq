<?php

$this->title = $options['host'] . " NS-server installation";

?>

<p>
    To configure a DNS in the <b><?= $options['host'] ?></b> panel, go to "Domains"/"DNS" section and click on the domain name.
</p>
<p>
    <img src="<?= $options['imgDir'] ?>/help/dns/install/en/3.jpg">
</p>
<p>
    The system will  redirect you to the domain name settings and offer to install NS-servers in the specific field. You'll need to choose the type "NS" then  to copy and paste NS-server info into specific lines and push the "Create" button.
</p>
<p>
    <img src="<?= $options['imgDir'] ?>/help/dns/install/en/4.jpg">
</p>
<p>
    After saving the changes, you should wait until they take effect. Information update on all servers may take up to 2 hours.
</p>
