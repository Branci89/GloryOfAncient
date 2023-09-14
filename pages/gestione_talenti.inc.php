<div class="pagina_gestione_mercato">
    <?php
    /* HELP: Pagina di gestione del mercato */

    /* Controllo permessi */
    if ($_SESSION['permessi'] < MODERATOR) {
        echo '<div class="error">' . gdrcd_filter('out', $MESSAGE['error']['not_allowed']) . '</div>';
    } else {
        if (isset($_POST['op']) === TRUE) {
            /* Se e' stato richiesto di caricare un talento */
            if ($_POST['op'] == 'load') {
                $loaded_item = gdrcd_query("SELECT * FROM talento WHERE id_talento=" . gdrcd_filter('num', $_POST['load_item']) . "");

                $characters = gdrcd_query("SELECT nome FROM personaggio ORDER BY nome", 'result');
            }
            /* Se e' stato richiesto di modificare un talento... */
            if ($_POST['op'] == 'update') {
                /* ...modificando i campi */
                if (isset($_POST['modifica']) === TRUE) {
                    gdrcd_query("UPDATE talento SET "
                            . "tipo=" . gdrcd_filter('in', $_POST['tipo_talento']) . ", "
                            . "nome='" . gdrcd_filter('in', $_POST['nome_talento']) . "', "
                            . "urlimg='" . gdrcd_filter('in', $_POST['img_talento']) . "', "
                            . "descrizione='" . gdrcd_filter('in', $_POST['descrizione_talento']) . "', "
                            . "bonus_car0=" . gdrcd_filter('num', $_POST['car0_talento']) . ", "
                            . "bonus_car1=" . gdrcd_filter('num', $_POST['car1_talento']) . ", "
                            . "bonus_car2=" . gdrcd_filter('num', $_POST['car2_talento']) . ", "
                            . "bonus_car3=" . gdrcd_filter('num', $_POST['car3_talento']) . ", "
                            . "bonus_car4=" . gdrcd_filter('num', $_POST['car4_talento']) . ", "
                            . "bonus_car5=" . gdrcd_filter('num', $_POST['car5_talento']) . ", "
                            . "car=" . gdrcd_filter('num', $_POST['car']) . "  "
                            . "WHERE id_talento=" . gdrcd_filter('num', $_POST['id_talento']) . "");

                    echo '<div class="warning">' . gdrcd_filter('out', $MESSAGE['warning']['modified']) . '</div>';
                }
                /* ...eliminandolo */ else if (isset($_POST['elimina']) === TRUE) {

                    /* Elimino l'talento */
                    gdrcd_query("DELETE FROM talento WHERE id_talento=" . gdrcd_filter('num', $_POST['id_talento']) . " LIMIT 1");

                    gdrcd_query("DELETE FROM clgpersonaggiotalento WHERE id_talento=" . gdrcd_filter('num', $_POST['id_talento']));

                    echo '<div class="warning">' . gdrcd_filter('out', $MESSAGE['warning']['modified']) . '</div>';
                } else {
                    
                }
            }
            /* Se e' stato richiesto di inserire un talento */
            if (gdrcd_filter('get', $_POST['op']) == 'insert') {
                if (gdrcd_filter('get', $_POST['img_talento']) == '') {
                    $immagine_talento = 'standard_talento.png';
                } else {
                    $immagine_talento = gdrcd_filter('get', $_POST['img_talento']);
                }
                gdrcd_query("INSERT INTO talento (tipo, nome, urlimg, descrizione,bonus_car0, bonus_car1, bonus_car2, bonus_car3, bonus_car4, bonus_car5, creatore, data_inserimento,car) "
                        . "VALUES (" . gdrcd_filter('in', $_POST['tipo_talento']) . ", "
                        . "'" . gdrcd_filter('in', $_POST['nome_talento']) . "', "
                        . "'" . gdrcd_filter('in', $immagine_talento) . "', "
                        . "'" . gdrcd_filter('in', $_POST['descrizione_talento']) . "',"
                        . "" . gdrcd_filter('num', $_POST['car0_talento']) . ","
                        . "" . gdrcd_filter('num', $_POST['car1_talento']) . ", "
                        . "" . gdrcd_filter('num', $_POST['car2_talento']) . ", "
                        . "" . gdrcd_filter('num', $_POST['car3_talento']) . ", "
                        . "" . gdrcd_filter('num', $_POST['car4_talento']) . ", "
                        . "" . gdrcd_filter('num', $_POST['car5_talento']) . ", "
                        . "'" . $_SESSION['login'] . "', NOW(), " . gdrcd_filter('num', $_POST['car']) . ")");

                echo '<div class="warning">' . gdrcd_filter('out', $MESSAGE['warning']['inserted']) . '</div>';
            }
            /* Se e' stato richiesto di assegnare un talento al mercato o ad un PG */
            if ((gdrcd_filter('get', $_POST['op']) == 'assign') && (gdrcd_filter('num', $_POST['num_oggetti']) > 0)) {

                $result = gdrcd_query("SELECT id_talento FROM clgpersonaggiotalento WHERE id_talento = " . gdrcd_filter('num', $_POST['id_talento']) . " AND nome = '" . gdrcd_filter('in', $_POST['give_item']) . "'", 'result');

                if (gdrcd_query($result, 'num_rows') > 0) {
                    gdrcd_query($result, 'free');
                    $query = "UPDATE clgpersonaggiotalento SET numero = numero + " . gdrcd_filter('num', $_POST['num_oggetti']) . " WHERE id_talento = " . gdrcd_filter('num', $_POST['id_talento']) . " AND nome = '" . gdrcd_filter('in', $_POST['give_item']) . "'";
                } else {
                    $query = "INSERT INTO clgpersonaggiotalento (nome, id_talento, numero) VALUES ('" . gdrcd_filter('in', $_POST['give_item']) . "', " . gdrcd_filter('num', $_POST['id_talento']) . ", " . gdrcd_filter('num', $_POST['num_oggetti']) . ")";
                }

                gdrcd_query($query);
            }
            echo '<div class="warning">' . gdrcd_filter('out', $MESSAGE['warning']['modified']) . '</div>';
        }

        $elenco_oggetti = gdrcd_query("SELECT id_talento, nome FROM talento ORDER BY nome", 'result');

        $tipi_talento = gdrcd_query("SELECT * FROM codtipotalento ORDER BY descrizione", 'result');
        ?>

        <div class="panels_box">

            <!-- Elenco degli oggetti esistenti -->
            <div class="panels_box">
                <form class="form_gestione" action="main.php?page=gestione_talenti" method="post">

                    <div class='form_label'>
                        Carica Dono
                    </div>

                    <div class='form_field'>
                        <?php if (gdrcd_query($elenco_oggetti, 'num_rows') > 0) { ?>
                            <select name="load_item">
                                <?php while ($option = gdrcd_query($elenco_oggetti, 'fetch')) { ?>
                                    <option value="<?php echo $option['id_talento']; ?>">
                                        <?php echo gdrcd_filter('out', $option['nome']); ?>
                                    </option>
                                    <?php
                                }

                                gdrcd_query($elenco_oggetti, 'free');
                                ?>
                            </select>
                        <?php } ?>
                    </div>

                    <input type="hidden" name="op" value="load" />

                    <div class='form_submit'>
                        <input type="submit" value="<?php echo gdrcd_filter('out', $MESSAGE['interface']['forms']['submit']); ?>" />
                    </div>

                </form>
            </div>

            <!-- Form di impostazione dei campi -->
            <form class="form_gestione" action="main.php?page=gestione_talenti" method="post">

                <div class='form_label'>
                    Tipo Dono
                </div>
                <div class='form_field'>
                    <?php if (gdrcd_query($tipi_talento, 'num_rows') > 0) { ?>
                        <select name="tipo_talento">
                            <?php while ($option = gdrcd_query($tipi_talento, 'fetch')) { ?>
                                <option value="<?php echo $option['cod_tipo']; ?>" <?php
                                if ($loaded_item['tipo'] == $option['cod_tipo']) {
                                    echo 'SELECTED';
                                }
                                ?>>
                                            <?php echo gdrcd_filter('out', $option['descrizione']); ?>
                                </option>
                                <?php
                            }

                            gdrcd_query($tipi_talento, 'free');
                            ?>
                        </select>
                    <?php } ?>
                </div>
                <!-- link crea nuovo ì-->
                <div class="link_back">
                    <a href="main.php?page=gestione_tipi&types=talents">
                        Gestione tipi doni
                    </a>
                </div>

                <div class='form_label'>
                    Nome Dono
                </div>
                <div class='form_field'>
                    <input type="text" name="nome_talento" value="<?php echo $loaded_item['nome']; ?>" />
                </div>

                <div class='form_label'>
                    <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['item_image']); ?>
                </div>
                <div class='form_field'>
                    <input type="text" name="img_talento" value="<?php echo $loaded_item['urlimg']; ?>" />
                </div>

                <div class='form_label'>
                    <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['item_info']); ?>
                </div>
                <div class='form_field'>
                    <textarea type="textbox" name="descrizione_talento"><?php echo $loaded_item['descrizione']; ?></textarea>
                </div>

                <div class='form_label'>
                    <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['item_bonus']) . ' ' . gdrcd_capital_letter(gdrcd_filter('out', $PARAMETERS['names']['stats']['car0'])); ?>
                </div>
                <div class='form_field'>
                    <input type="text" name="car0_talento" value="<?php echo (int) $loaded_item['bonus_car0']; ?>" />
                </div>

                <div class='form_label'>
                    <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['item_bonus']) . ' ' . gdrcd_capital_letter(gdrcd_filter('out', $PARAMETERS['names']['stats']['car1'])); ?>
                </div>
                <div class='form_field'>
                    <input type="text" name="car1_talento" value="<?php echo (int) $loaded_item['bonus_car1']; ?>" />
                </div>

                <div class='form_label'>
                    <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['item_bonus']) . ' ' . gdrcd_capital_letter(gdrcd_filter('out', $PARAMETERS['names']['stats']['car2'])); ?>
                </div>
                <div class='form_field'>
                    <input type="text" name="car2_talento" value="<?php echo (int) $loaded_item['bonus_car2']; ?>" />
                </div>

                <div class='form_label'>
                    <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['item_bonus']) . ' ' . gdrcd_capital_letter(gdrcd_filter('out', $PARAMETERS['names']['stats']['car3'])); ?>
                </div>
                <div class='form_field'>
                    <input type="text" name="car3_talento" value="<?php echo (int) $loaded_item['bonus_car3']; ?>" />
                </div>

                <div class='form_label'>
                    <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['item_bonus']) . ' ' . gdrcd_capital_letter(gdrcd_filter('out', $PARAMETERS['names']['stats']['car4'])); ?>
                </div>
                <div class='form_field'>
                    <input type="text" name="car4_talento" value="<?php echo (int) $loaded_item['bonus_car4']; ?>" />
                </div>

                <div class='form_label'>
                    <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['item_bonus']) . ' ' . gdrcd_capital_letter(gdrcd_filter('out', $PARAMETERS['names']['stats']['car5'])); ?>
                </div>
                <div class='form_field'>
                    <input type="text" name="car5_talento" value="<?php echo (int) $loaded_item['bonus_car5']; ?>" />
                </div>
                <div class='form_label'>
                    <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['skills']['car_obj']); ?>
                </div>
                <div class='form_field'>
                        <select name='car'>
                            <option value="-1" <?php
                            if ($loaded_item['car'] == -1) {
                                echo 'SELECTED';
                            }
                            ?>>
                                <?php echo "Nessuna" ?></option>
                            <option value="0" <?php
                            if ($loaded_item['car'] == 0) {
                                echo 'SELECTED';
                            }
                            ?>>
                                <?php echo gdrcd_filter('out', $PARAMETERS['names']['stats']['car0']); ?></option>
                            <option value="1" <?php
                            if ($loaded_item['car'] == 1) {
                                echo 'SELECTED';
                            }
                            ?>>
                                <?php echo gdrcd_filter('out', $PARAMETERS['names']['stats']['car1']); ?></option>
                            <option value="2" <?php
                            if ($loaded_item['car'] == 2) {
                                echo 'SELECTED';
                            }
                            ?>>
                                <?php echo gdrcd_filter('out', $PARAMETERS['names']['stats']['car2']); ?></option>

                            <option value="3" <?php
                            if ($loaded_item['car'] == 3) {
                                echo 'SELECTED';
                            }
                            ?>>
                                <?php echo gdrcd_filter('out', $PARAMETERS['names']['stats']['car3']); ?></option>
                            <option value="4" <?php
                            if ($loaded_item['car'] == 4) {
                                echo 'SELECTED';
                            }
                            ?>>
                                <?php echo gdrcd_filter('out', $PARAMETERS['names']['stats']['car4']); ?></option>
                            <option value="5" <?php
                            if ($loaded_item['car'] == 5) {
                                echo 'SELECTED';
                            }
                            ?>>
                                <?php echo gdrcd_filter('out', $PARAMETERS['names']['stats']['car5']); ?></option>
                        </select>
                </div>


                    <?php if (isset($loaded_item) == TRUE) { ?>
                    <input type="hidden" name="op" value="update" />
                    <input type="hidden" name="id_talento" value="<?php echo $loaded_item['id_talento']; ?>" />
    <?php } else { ?>
                    <input type="hidden" name="op" value="insert" />
            <?php } ?>

                <div class='form_submit'>
                    <input type="submit" name="modifica" value="<?php echo gdrcd_filter('out', $MESSAGE['interface']['forms']['submit']); ?>" />
    <?php if (isset($loaded_item) == TRUE) { ?>
                        <input type="submit" name="elimina" value="<?php echo gdrcd_filter('out', $MESSAGE['interface']['forms']['delete']); ?>" />
                        <input type="submit" name="annulla" value="<?php echo gdrcd_filter('out', $MESSAGE['interface']['forms']['cancel']); ?>" />
    <?php } ?>
                </div>

            </form>

            <!-- Form di assegnazione oggetti (appare solo se è stato caricato un talento) -->
    <?php if (isset($loaded_item) == TRUE) { ?>
                <div class="panels_box">
                    <form class="form_gestione" action="main.php?page=gestione_talenti" method="post">

                        <div class='form_label'>
                            <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['give_item']); ?>
                        </div>
                        <!--
                             <div class='form_label'>
                            <?php // echo gdrcd_filter('out',$MESSAGE['interface']['administration']['items']['number_item']);   ?>
                             </div>
                        -->
                        <div class='form_field'>
                            <input type="hidden" name="num_oggetti" value="1" />
                        </div>

                        <div class='form_label'>
                                <?php echo gdrcd_filter('out', $MESSAGE['interface']['administration']['items']['destination_item']); ?>
                        </div>

                        <div class='form_field'>
                            <?php if (gdrcd_query($characters, 'num_rows') > 0) { ?>
                                <select name="give_item">
            <?php while ($option = gdrcd_query($characters, 'fetch')) { ?>
                                        <option value="<?php echo $option['nome']; ?>">
                <?php echo gdrcd_filter('out', $option['nome']); ?>
                                        </option>
                <?php
            }

            gdrcd_query($characters, 'free');
            ?>
                                </select>
                <?php } ?>
                        </div>

                        <input type="hidden" name="id_talento" value="<?php echo $loaded_item['id_talento']; ?>" />

                        <input type="hidden" name="op" value="assign" />

                        <div class='form_submit'>
                            <input type="submit" value="<?php echo gdrcd_filter('out', $MESSAGE['interface']['forms']['submit']); ?>" />
                        </div>

                    </form>
                </div>
    <?php } ?>

            <div class="link_back">
                <a href="main.php?page=gestione">Torna all'elenco GESTIONE</a>
            </div>
        </div>

    <?php
}//else 
?>

</div><!-- Pagina -->
