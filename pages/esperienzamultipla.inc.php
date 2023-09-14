<div class="pagina_scheda_px">
<?php 
/** * ASSEGNAZIONE ESPERIENZA MULTIPLA
    * @author NEVERLAND, THE LOST ISLAND http://neverlands.altervista.org/ - Giacomo Di Martino
*/
?>

<div class="page_title">
   <h2>Assegna Esperienza Multipla</h2>
</div> 
<div class="page_body">
<div class="panels_box">

<?php 

if (($_SESSION['permessi']>=GAMEMASTER)&&($PARAMETERS['mode']['multipleexperience']['set']=='ON')) { //Controllo Permessi


//Contenuto della pagina
if (isset($_POST['numerorows'])===FALSE){ //INSERISCE LA SCELTA DEL NUMERO DI RIGHE
	?>
	
	<div class="form_gioco">
		<form action="main.php?page=esperienzamultipla" method="post">
			<div class="form_label">NUERO DEI PARTECIPANTI</div>
   			<div class="form_field">
   				<SELECT name="numerorows" id="numerorows">
   					<?php for ($conto = 1; $conto <= $PARAMETERS['mode']['multipleexperience']['people']; $conto++) {
   						echo '<OPTION value="'.$conto.'">'.$conto.'</OPTION>';
   					} ?>
   				</SELECT>
   			</div>
   			<div class="form_submit">
      				<input type="submit" value="SELEZIONA" />
   			</div>
		</form>
	</div>
	
	
	<?php
} else {  //INSERISCE IL FORM DI SELEZIONE DEI PERSONAGGI SE E' STATO SCELTO IL NUMERO DI RIGHE	
	?>
	
	<?php
	if (isset($_POST['elaborazione'])===FALSE){   // INSERISCE LA SCELTA DEI PERSONAGGI 	
		?>
		
		<div class="form_gioco">
			<form action="main.php?page=esperienzamultipla" method="post">
				<div class="form_label">Tipo di quest</div>
				<div class="form_field">
					<select name="tipo" id="tipo">
						<?php
						if ($_SESSION['permessi']>=MODERATOR) { 
						?>
						<OPTION value="free">VI - Assegnazione dono divino
						<?php if ($PARAMETERS['mode']['multipleexperience']['bacheca']=='ON') { ?>
							- Non inserisce post in bacheca 
						<?php } ?>
						</OPTION>
						<?php
						}
						?>
                        <OPTION value="quest">V - Avventura</OPTION>
                        <OPTION value="quest">IV - Resurrezione</OPTION>
						<OPTION value="quest">III - One Shot</OPTION>
                        <OPTION value="quest">II - Ambient</OPTION>
                        <OPTION value="quest">I - Buon gioco</OPTION>
                         <OPTION value="quest">Cattivo gioco</OPTION>
					</select>
				</div>
				<div class="form_label">Motivo dell'assegnazione (valido per tutti)</div>
				<div class="form_field"><input name="causale" /></div>
				<?php if ($PARAMETERS['mode']['multipleexperience']['bacheca']=='ON') { ?>
					<div class="form_info">Inserito sia come titolo del Topic, sia come motivazione nei Log dell'Esperienza</div>
				<?php } ?>
				<br>
				<?php if ($PARAMETERS['mode']['multipleexperience']['bacheca']=='ON') { ?>
					<div class="form_label">Descrizione</div>
					<div class="form_field"><textarea name="descrizione" id="descrizione"></textarea></div>
					<div class="form_info">BBCode attivo: Contiene il testo che verr&agrave; inserito nella <u>BACHECA RESOCONTI QUEST</u>. Da usare esattamente come come l'inserimento di un messaggio nelle bacheche
					</div>
				<?php } ?>
				<br><br><br>
				<div class="elenco_record_gioco">
					<table>
					<tr>
  						<td class="casella_titolo">
     							<div class="titoli_elenco">
	    							Nome Personaggio
	 						</div>
  						</td>
  						<td class="casella_titolo">
     							<div class="titoli_elenco">
	    							Esperienza
     							</div>
  						</td>
					</tr>
					<?php
   					$righe = $_POST['numerorows'];
   					for ($conto = 1; $conto <= $righe; $conto++) { ?>
   						<tr>
   							<td class="casella_elemento">
    								<SELECT name="pg<?php echo $conto; ?>" id="pg<?php echo $conto; ?>">
    								<?php
    								$result=gdrcd_query("SELECT nome FROM personaggio WHERE permessi >= 0 ORDER BY nome", 'result');
    								while($row=gdrcd_query($result, 'fetch')){?>
			    						<option value="<?php echo gdrcd_filter('out',$row['nome']); ?>">
			       							<?php echo  gdrcd_filter('out',$row['nome']); ?>
									</option>
			   					<?php }
			   					gdrcd_query($result, 'free');
    								?>
    								</SELECT>   
  							</td>
  							<td class="casella_elemento">
  								<input name="esperienza<?php echo $conto; ?>" value="0">
  							</td>
   						</tr>
   						<?php 	
   					}
   					?>
   					</table>
   				</div>
   				<div class="form_submit">
   					<input type="hidden" value="<?php echo $_POST['numerorows']; ?>" name="numerorows" />
      					<input type="submit" value="Invia" name="elaborazione" id="elaborazione" />
   				</div>
			</form>
		</div>
		<div class="link_back">
       			 <a href="main.php?page=esperienzamultipla">Torna alla scelta del numero dei partecipanti</a>
     		</div>

		<?php
	} else {   //ELABORAZIONE DEI DATI
		if ($_SESSION['permessi']>=GAMEMASTER) {
   			$righe2 = $_POST['numerorows'];
   			$righe3 = $_POST['numerorows'];
   			$testo = $_POST['descrizione'];
   			$testo = $testo.' - [b] Esperienza Assegnata [/b]: ';
   			$resoconto = 'Esperienza Assegnata: ';
   			for ($conto = 1; $conto <= $righe3; $conto++) {
   					$testo = $testo.' '.$_POST['pg'.$conto].' [b] '.$_POST['esperienza'.$conto].'px [/b] - ';
   					$resoconto = $resoconto.' '.$_POST['pg'.$conto].' [b] '.$_POST['esperienza'.$conto].'px [/b] - ';
   			}
   			if (($_POST['tipo']=='quest')&&($PARAMETERS['mode']['multipleexperience']['forum']=='ON')) {
   				/*Per definire in quale bacheca andrà inserito il topic modificare il valore corrispondente a "id_araldo" con quello della bacheca corrispondente */
   				gdrcd_query("INSERT INTO messaggioaraldo (id_messaggio_padre, id_araldo, titolo, messaggio, autore, data_messaggio, importante, chiuso) VALUES (-1, ".$PARAMETERS['mode']['multipleexperience']['topic'].", '".gdrcd_filter('in',$_POST['causale'])."','".gdrcd_filter('in',$testo)."','".gdrcd_filter('in',$_SESSION['login'])."', NOW(), 0, 1)");
   			}
   			for ($conto2 = 1; $conto2 <= $righe2; $conto2++) { 
   				if((is_numeric($_POST['esperienza'.$conto2])===TRUE)&&($_SESSION['permessi']>=GAMEMASTER)){
   		     			gdrcd_query("UPDATE personaggio SET esperienza = esperienza + ".gdrcd_filter('num',$_POST['esperienza'.$conto2])." WHERE nome = '".gdrcd_filter('in',$_POST['pg'.$conto2])."' LIMIT 1 ");
					 /*Registro l'operazione*/
					gdrcd_query("INSERT INTO log (nome_interessato, autore, data_evento, codice_evento ,descrizione_evento) VALUES ('".gdrcd_filter('in',$_POST['pg'.$conto2])."', '".$_SESSION['login']."', NOW(), ".PX.", '(".gdrcd_filter('num',$_POST['esperienza'.$conto2]).' px) '.gdrcd_filter('in',$_POST['causale'])."')");	
					}
	   		}
   			?>
   			<div class="warning">
   				ESPERIENZA ASSEGNATA<br>
		   		<?php echo nl2br(bbdecoder(gdrcd_filter('out',$resoconto), true));?>
			</div><br>
    <div class="link_back">
      <a href="main.php?page=gestione">Torna all'elenco GESTIONE</a>
	    		</div>
	   		<?php
	   	}
	}//else elaborazione

}//else numerorows


} else { //Controllo Permessi
	?>
	<div class="warning">
 		Non hai i requisiti per visualizzare questa pagina o la funzione di assegnazione multipla &egrave; disattivata
	</div>
	
	<?php
}

?>
</div>
</div>
</div><!-- Pagina -->