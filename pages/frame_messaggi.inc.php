<?php /*Frame del box con il link alle bacheche e ai messaggi */ ?>
<iframe src ="pages/messaggi.inc.php?ref=30" class="iframe_messaggi" allowtransparency="true" frameborder="0" scrolling="no">
  <p><?php gdrcd_filter_out(print $MESSAGE['errors']['can_t_load_frame']).' (http://'.$PARAMETERS['info']['site_url'].'/pages/messaggi.inc.php'; ?></p>
</iframe>
<center><img src="themes/advanced/imgs/divisorio.png" style="margin-left: 61px;"></center>