<?php

require 'vocabulary/'.$PARAMETERS['languages']['set'].'.vocabulary.php';
$query = "SELECT url_img_chat, nome, cognome, prestavolto FROM personaggio ORDER BY nome ASC";
$result = gdrcd_query($query, 'result');
?>

<div class="page_title">
 <h2>Elenco prestavolto</h2>
</div>
<div style="text-align: center;font-size: 1em;">
In questa pagina troverai l'elenco dei prestavolto dei personaggi.<br/>
Controlla se nella lista, ordinata in modo alfabetico c'è il prestavolto che vorresti utilizzare, nel caso sei pregato di cambiarlo per non generare un "gemello".<br/>
Per segnalare il tuo prestavolto, dalla tua scheda clicca su <b>"EDIT Scheda"</b>, inserisci nome e cognome del prestavolto nella terza casella e salva il tutto.<br/>
La gestione ti ringrazia per l'attenzione.<br/><br/>

<div class="elenco_record_gioco">
  <?php while($row=gdrcd_query($result, 'fetch')){ ?>

        <div>
          <table style="margin-left:auto; margin-right:auto;">
          <tr>
            <td style="width: 50%;">
              <div style="font-size: 1em; color: #dadada;">
                <a href="main.php?page=scheda&pg=<?php echo gdrcd_filter('out',$row['nome']);?>">
                <?php echo gdrcd_filter('out',$row['nome']).' '.gdrcd_filter('out',$row['cognome']); ?>
                </a>
                <div style="font-size: 1em;">
             <u>Prestavolto</u>: <b style="color: red; text-transform: capitalize;"><?php echo gdrcd_bbcoder(gdrcd_filter('out',$row['prestavolto'])); ?></b>
                </div>
            </div>
            </td>
          </tr>
          </table>
        <br/>
        </div>
    <?php
  }//while
    ?>
    <div class="link_back">
      <a href="main.php?page=uffici">Torna a SERVIZI</a>
    </div>
</div></div>
