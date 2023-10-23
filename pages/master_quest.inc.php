<center>
    <img src="themes/advanced/imgs/divisorio.png" style="margin-right: 10px;">
</center>
<div class="cont_news">
    <MARQUEE direction="up" scrollAmount=2>
        <?php
        $query = "SELECT * FROM quest ORDER BY id_quest";
        $result = gdrcd_query($query, 'result');
         while ($row = gdrcd_query($result, 'fetch')) {      


             echo gdrcd_bbcoder(gdrcd_filter('out', $row['testo'])); ?><br>


            <?php
        }//while
        gdrcd_query($result, 'free');
        ?>

    </MARQUEE>
</div>
<?php include("../footer.inc.php");  /* Footer comune */ ?>
