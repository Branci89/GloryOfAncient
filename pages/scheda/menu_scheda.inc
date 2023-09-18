<?php
/* Visualizza il link modifica se l'utente visualizza la propria scheda o se è almeno un capogilda */
if ((gdrcd_filter('out', $_REQUEST['pg']) == $_SESSION['login']) || ($_SESSION['permessi'] >= GUILDMODERATOR)) {
    ?>
    <a class="none" href="popup.php?page=scheda_modifica&pg=<?php echo gdrcd_filter('get', $_REQUEST['pg']); ?>">
        <img onmouseout="this.src = '../imgs/menu/modifica.png'" onmouseover="this.src = '../imgs/menu/modifica_on.png';" alt="Modifica" src="../imgs/menu/modifica.png">
    </a>
<?php } ?>

<a class="none"  href="popup.php?page=scheda_trans&pg=<?php echo gdrcd_filter('get', $_REQUEST['pg']); ?>">
    <img onmouseout="this.src = '../imgs/menu/transazioni.png'" onmouseover="this.src = '../imgs/menu/transazioni_on.png';" alt="transazioni" src="../imgs/menu/transazioni.png">

</a>

<a class="none"  href="popup.php?page=scheda_px&pg=<?php echo gdrcd_filter('get', $_REQUEST['pg']); ?>">
    <img onmouseout="this.src = '../imgs/menu/esperienza.png'" onmouseover="this.src = '../imgs/menu/esperienza_on.png';" alt="esperienza" src="../imgs/menu/esperienza.png">
</a>

<a class="none"  href="popup.php?page=scheda_oggetti&pg=<?php echo gdrcd_filter('get', $_REQUEST['pg']); ?>">
    <img onmouseout="this.src = '../imgs/menu/deposito.png'" onmouseover="this.src = '../imgs/menu/deposito_on.png';" alt="deposito" src="../imgs/menu/deposito.png">
</a>
<a class="none"  href="popup.php?page=scheda_equip&pg=<?php echo gdrcd_filter('get', $_REQUEST['pg']); ?>">
    <img onmouseout="this.src = '../imgs/menu/con_se.png'" onmouseover="this.src = '../imgs/menu/con_se_on.png';" alt="con_se" src="../imgs/menu/con_se.png">
</a>
<a class="none"  href="popup.php?page=scheda_talenti&pg=<?php echo gdrcd_filter('get', $_REQUEST['pg']); ?>">
    <img onmouseout="this.src = '../imgs/menu/doni.png'" onmouseover="this.src = '../imgs/menu/doni_on.png';" alt="doni" src="../imgs/menu/doni.png">
</a>

<?php
/* Visualizza il link modifica se l'utente visualizza la propria scheda o se è almeno un capogilda */
if ($_SESSION['permessi'] >= MODERATOR) {
    ?>
    <a href="popup.php?page=scheda_log&pg=<?php echo gdrcd_filter('get', $_REQUEST['pg']); ?>">
        <?php echo gdrcd_filter('out', $MESSAGE['interface']['sheet']['menu']['log']); ?>
    </a>
    <a href="popup.php?page=scheda_gst&pg=<?php echo gdrcd_filter('get', $_REQUEST['pg']); ?>">
        <?php echo gdrcd_filter('out', $MESSAGE['interface']['sheet']['menu']['gst']); ?>
    </a>
<?php } ?>