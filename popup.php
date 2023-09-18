<?php
require 'header.inc.php';
gdrcd_controllo_sessione();

echo '<div class="popup">';

if ( ! empty($_GET['page'])) {
    $test = gdrcd_filter('includes', $_GET['page']);
    gdrcd_load_modules($test);
} else {
    echo $MESSAGE['interface']['layout_not_found'];
}

echo '</div>';

require 'footer.inc.php';
?>
