<div class="pagina_scheda_oggetti">
    <?php /* HELP: */ ?>

    <?php
//Se non e' stato specificato il nome del pg
    if (isset($_REQUEST['pg']) === FALSE) {
        echo '<div class="error">' . gdrcd_filter('out', $MESSAGE['error']['unknonw_character_sheet']) . '</div>';
    } else {

        /* Visualizzo la pagina */
        /* Verifico l'esistenza del PG */
        $query = "SELECT nome FROM personaggio WHERE personaggio.nome = '" . gdrcd_filter('get', $_REQUEST['pg']) . "'";
        $result = gdrcd_query($query, 'result');
//Se non esiste il pg	
        if (gdrcd_query($result, 'num_rows') == 0) {
            echo '<div class="error">' . gdrcd_filter('out', $MESSAGE['error']['unknown_character_sheet']) . '</div>';
        } else {

            gdrcd_query($result, 'free');

            /* Spostamento di un talento dallo zaino nell'inventario */
            if (($_POST['op'] == "togli") && ($_SESSION['login'] == $_REQUEST['pg'])) {
                gdrcd_query("UPDATE clgpersonaggiotalento SET posizione = 0 WHERE id_talento = " . gdrcd_filter('num', $_POST['id_talento']) . " AND nome = '" . gdrcd_filter('in', $_REQUEST['pg']) . "' LIMIT 1 ");

                echo '<div class="warning">' . gdrcd_filter('out', $MESSAGE['warning']['done']) . '</div>';
            }


            /* Aggiungi/modifica un commento */
            if ((gdrcd_filter('get', $_POST['op']) == "commenta") && ($_SESSION['login'] == $_REQUEST['pg'])) {
                gdrcd_query("UPDATE clgpersonaggiotalento SET commento = '" . gdrcd_filter('in', $_POST['commento']) . "' WHERE id_talento = " . gdrcd_filter('num', $_POST['id_talento']) . " AND nome = '" . $_SESSION['login'] . "' LIMIT 1 ");

                echo '<div class="warning">' . gdrcd_filter('out', $MESSAGE['warning']['done']) . '</div>';
            }


            /* Rimuovo un talento dall'inventario o dallo zaino */
            if ((gdrcd_filter('get', $_POST['op']) == "abbandona") && (($_SESSION['login'] == $_REQUEST['pg']) || ($_SESSION['permessi'] >= MODERATOR))) { /* Rimuovo un talento */
                /* Se ne possiedo più di uno ne rimuovo uno solo */
                if ($_POST['numero'] <= 1) {
                    $query = "DELETE FROM clgpersonaggiotalento WHERE id_talento = " . gdrcd_filter('num', $_POST['id_talento']) . " AND nome = '" . gdrcd_filter('in', $_REQUEST['pg']) . "' LIMIT 1 ";
                } else {
                    $query = "UPDATE clgpersonaggiotalento SET numero = numero - 1 WHERE id_talento = " . gdrcd_filter('num', $_POST['id_talento']) . " AND nome = '" . gdrcd_filter('get', $_REQUEST['pg']) . "' LIMIT 1 ";
                }
                gdrcd_query($query);

                echo gdrcd_filter('out', $MESSAGE['interface']['sheet']['items']['warning']['done']);
            }
            ?>



            <!-- Elenco oggetti nello zaino -->
            <div class="page_title">
                <h2>Doni</h2>
            </div>

            <div class="page_body">
                <div class="panels_box">
                    <?php
                    /* Oggetti nello zaino */
                    $query = "SELECT talento.id_talento, talento.nome AS nome_talento, talento.descrizione, talento.urlimg, talento.bonus_car0, talento.bonus_car1, talento.bonus_car2, talento.bonus_car3, talento.bonus_car4, talento.bonus_car5, clgpersonaggiotalento.* FROM clgpersonaggiotalento LEFT JOIN talento ON clgpersonaggiotalento.id_talento=talento.id_talento WHERE clgpersonaggiotalento.nome = '" . gdrcd_filter('in', $_REQUEST['pg']) . "' ORDER BY talento.nome DESC";
                    $result = gdrcd_query($query, 'result');
                    ?>
                    <!-- Intestazione tabella elenco -->
                    <div class="elenco_record_gioco">
                        <table>
                            <tr>
                                <td class="casella_titolo">
                                    <div class="titoli_elenco">
                                        Dono

                                    </div>
                                </td>

                                <td class="casella_titolo">
                                    <div class="titoli_elenco">
                                        <?php echo "&nbsp;"; ?>
                                    </div>
                                </td>
                            </tr>


                            <?php while ($record = gdrcd_query($result, 'fetch')) { ?>

                                <tr>
                                    <!-- talento, immagine, quantità -->
                                    <td class="casella_elemento">
                                        <div class="inventario_nome"><?php echo gdrcd_filter('out', $record['nome_talento']); ?></div>      
                                        <div class="inventario_img">
                                            <img src="themes/<?php echo $PARAMETERS['themes']['current_theme'] ?>/imgs/items/<?php echo gdrcd_filter('out', $record['urlimg']); ?>" />
                                        </div> 
                                        <div class="inventario_quantita">
                                            <?php
                                            if ($record['cariche'] > 0) {
                                                echo gdrcd_filter('out', $MESSAGE['interface']['sheet']['items']['list']['charges'] . ": " . $record['cariche']);
                                            } else {
                                                echo '&nbsp;';
                                            }
                                            ?>
                                        </div>
                                        <div class="inventario_quantita"><?php echo gdrcd_filter('out', $MESSAGE['interface']['sheet']['items']['list']['pts'] . ": " . $record['numero']); ?></div>
                                    </td>
                                    <!-- Bonus 
                                    <td class="casella_elemento">
                                     <div class="inventario_riga_proprieta">
                                       <div style="float: left; clear: left;">
                                    <?php // echo gdrcd_filter('out',$MESSAGE['interface']['sheet']['items']['list']['stats']['attack'].": ");  ?>
                                           </div>
                                           <div style="float: right; clear: right;">
                                    <?php // echo $record['attacco'];  ?>
                                       </div>
                                     </div>
                                     <div class="inventario_riga_proprieta">
                                       <div style="float: left; clear: left;">
                                    <?php // echo gdrcd_filter('out',$MESSAGE['interface']['sheet']['items']['list']['stats']['defence'].": ");  ?>
                                           </div>
                                       <div style="float: right; clear: right;">
                                    <?php // echo $record['difesa'];  ?>
                                       </div>
                                     </div>
                                     <div class="inventario_riga_proprieta">
                                       <div style="float: left; clear: left;">
                                    <?php // echo gdrcd_filter('out',$PARAMETERS['names']['stats']['car0'].": ");  ?>
                                           </div>
                                           <div style="float: right; clear: right;">
                                       <?ph//p echo $record['bonus_car0']; ?>
                                       </div>
                                     </div>
                                     <div class="inventario_riga_proprieta">
                                       <div style="float: left; clear: left;">
                                    <?php // echo gdrcd_filter('out',$PARAMETERS['names']['stats']['car1'].": ");  ?> 
                                           </div>
                                       <div style="float: right; clear: right;">
                                    <?php // echo $record['bonus_car1'];  ?>
                                       </div>
                                     </div>
                                     <div class="inventario_riga_proprieta">
                                       <div style="float: left; clear: left;">
                                    <?php // echo gdrcd_filter('out',$PARAMETERS['names']['stats']['car2'].": ");  ?>
                                           </div>
                                           <div style="float: right; clear: right;">
                                    <?php // echo $record['bonus_car2'];  ?>
                                       </div>
                                     </div>
                                     <div class="inventario_riga_proprieta">
                                       <div style="float: left; clear: left;">
                                    <?php // echo gdrcd_filter('out',$PARAMETERS['names']['stats']['car3'].": ");  ?>
                                           </div>
                                       <div style="float: right; clear: right;">
                                    <?php // echo $record['bonus_car3'];  ?>
                                       </div>
                                     </div>
                                     <div class="inventario_riga_proprieta">
                                       <div style="float: left; clear: left;">
                                    <?php // echo gdrcd_filter('out',$PARAMETERS['names']['stats']['car4'].": ");  ?>
                                           </div>
                                       <div style="float: right; clear: right;">
                                    <?php // echo $record['bonus_car4'];  ?>
                                       </div>
                                     </div>
                                     <div class="inventario_riga_proprieta">
                                       <div style="float: left; clear: left;">
                                    <?php // echo gdrcd_filter('out',$PARAMETERS['names']['stats']['car5'].": ");  ?>
                                       </div>
                                       <div style="float: right; clear: right;">
                                    <?php // echo $record['bonus_car5'];  ?>
                                       </div>
                                     </div>
                                    Descrizione e note  
                                    </td> 
                                    --> 
                                    <td class="casella_elemento">
                                        <div class="inventario_riga_descrizione">
                                            <?php echo gdrcd_bbcoder(gdrcd_filter('out', $record['descrizione'])); ?>
                                        </div><?php if (($record['commento'] != '') && ($_SESSION['login'] != gdrcd_filter('get', $_REQUEST['pg']))) { ?>
                                            <div class="inventario_riga_commento">
                                                <?php echo gdrcd_filter('out', $MESSAGE['interface']['sheet']['items']['list']['notes'] . ": " . $record['commento']); ?>
                                            </div><?php } else if ($_SESSION['login'] == gdrcd_filter('get', $_REQUEST['pg'])) {//if  ?>
                                            <div>

                                            </div><?php } //else if   ?>
                                    </td>
                                    <!-- Comandi elenco -->
                                    <td class="casella_controlli">
                                        <?php if (($_SESSION['login'] == $_REQUEST['pg']) || ($_SESSION['permessi'] >= MODERATOR)) { ?> 
                                            <div class="form_gioco">
                                                <!-- Abbandona -->
                                                <form action="popup.php?page=scheda_talenti"
                                                      method="post">
                                                    <input type="hidden" 
                                                           value="abbandona" 
                                                           name="op" /> 
                                                    <input type="hidden" 
                                                           value="<?php echo $record['numero']; ?>" 
                                                           name="numero" />
                                                    <input type="hidden" 
                                                           value="<?php echo $record['id_talento']; ?>" 
                                                           name="id_talento" />
                                                    <input type="submit" 
                                                           value="<?php echo gdrcd_filter('out', $MESSAGE['interface']['sheet']['items']['list']['drop']); ?>" />
                                                    <input type="hidden" 
                                                           value="<?php echo $_REQUEST['pg']; ?>"
                                                           name="pg" />
                                                </form>
                                                <?php if ($record['ubicabile'] > 0) { ?>
                                                    <!-- Zaino -->
                                                    <form action="popup.php?page=scheda_talenti"
                                                          method="post">
                                                        <input type="hidden" 
                                                               value="in_zaino" 
                                                               name="op" /> 
                                                        <input type="hidden" 
                                                               value="<?php echo $record['id_talento']; ?>" 
                                                               name="id_talento" />
                                                        <input type="submit" 
                                                               value="<?php echo gdrcd_filter('out', $MESSAGE['interface']['sheet']['items']['list']['put_in']); ?>" />
                                                        <input type="hidden" 
                                                               value="<?php echo $_REQUEST['pg']; ?>"
                                                               name="pg" />
                                                    </form>
                                                <?php } ?>
                                            </div>
                                        <?php
                                        } else {
                                            echo "&nbsp;";
                                        }
                                        ?>
                                    </td>
                                </tr>


                                <?php
                            }//while 

                            gdrcd_query($result, 'free');
                            ?>
                        </table>
                    </div>

                </div>
                <!-- Link a piè di pagina -->
                <div class="link_back">

                    <a href="popup.php?page=scheda&pg=<?php echo gdrcd_filter('get', $_REQUEST['pg']); ?>"><?php echo gdrcd_filter('out', $MESSAGE['interface']['sheet']['link']['back']); ?></a>
                </div>


                <?php
                /*                 * ******* CHIUSURA SCHEDA ********* */
            }//else
        }//else
        ?>
    </div>
</div><!-- Pagina -->
