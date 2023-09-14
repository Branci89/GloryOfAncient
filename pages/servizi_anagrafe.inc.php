<?php /*HELP: */ 

if($_SESSION['permessi']>=MODERATOR){
   $query="SELECT nome, cognome, email FROM personaggio ORDER BY nome";
} else {
   $query="SELECT nome, cognome FROM personaggio WHERE permessi > -1 ORDER BY nome";
}

$result = gdrcd_query($query, 'result');?>

<div class="pagina_servizi_anagrafe">


<!-- Titolo della pagina -->
<div class="user_stats">
	<div class="page_body">
		
		<?php 
			$title='<div class="page_title"><h2>'.gdrcd_filter('out',$MESSAGE['interface']['pg_list']['pg_list']).'</h2></div>'.gdrcd_filter('out',$MESSAGE['interface']['pg_list']['buttons']);
			echo $title;
		?>
		
		<!--	I bottoni utilizzati ora sono di tipo puramente testuale. è possibile sostituire questo formato con botoni 
					grafici, flash o java a discrezione del programmatore della land -->
					
		<br />
		<!-- 
		Stampo i link cliccabili per ogni lettera possibile come iniziali di nome personaggio
		ogni link richiamerà il file main.php passando come parametro "page" il nome del file
		servizi_anagrefe (il .inc.php viene inserito in automatico dai file di configurazione
		del pacchetto gdrcd 5.2) & come secondo parametro "op" il carattere corrispendente al link
		come lettera iniziale dei nomi che interessano l'utente.
		-->
		<a href='main.php?page=servizi_anagrafe&op=A'>[A]</a>
		<a href='main.php?page=servizi_anagrafe&op=B'>[B]</a>
		<a href='main.php?page=servizi_anagrafe&op=C'>[C]</a>
		<a href='main.php?page=servizi_anagrafe&op=D'>[D]</a>
		<a href='main.php?page=servizi_anagrafe&op=E'>[E]</a>
		<a href='main.php?page=servizi_anagrafe&op=F'>[F]</a>
		<a href='main.php?page=servizi_anagrafe&op=G'>[G]</a>
		<a href='main.php?page=servizi_anagrafe&op=H'>[H]</a>
		<a href='main.php?page=servizi_anagrafe&op=I'>[I]</a>
		<a href='main.php?page=servizi_anagrafe&op=J'>[J]</a>
		<a href='main.php?page=servizi_anagrafe&op=K'>[K]</a>
		<a href='main.php?page=servizi_anagrafe&op=L'>[L]</a>
		<a href='main.php?page=servizi_anagrafe&op=M'>[M]</a>
		<a href='main.php?page=servizi_anagrafe&op=N'>[N]</a>
		<a href='main.php?page=servizi_anagrafe&op=O'>[O]</a>
		<a href='main.php?page=servizi_anagrafe&op=P'>[P]</a>
		<a href='main.php?page=servizi_anagrafe&op=Q'>[Q]</a>
		<a href='main.php?page=servizi_anagrafe&op=R'>[R]</a>
		<a href='main.php?page=servizi_anagrafe&op=S'>[S]</a>
		<a href='main.php?page=servizi_anagrafe&op=T'>[T]</a>
		<a href='main.php?page=servizi_anagrafe&op=U'>[U]</a>
		<a href='main.php?page=servizi_anagrafe&op=V'>[V]</a>
		<a href='main.php?page=servizi_anagrafe&op=X'>[X]</a>
		<a href='main.php?page=servizi_anagrafe&op=Y'>[Y]</a>
		<a href='main.php?page=servizi_anagrafe&op=Z'>[Z]</a>
				
		<!--
		Qui iniziano le operazioni da effettuare per il controllo e la stampa della lettera 
		selezionata e dei nomi da visualizzare in base alla scelta fatta.
		-->

		<?php /* inizio del codice php */
/**	* metto nella variabile $op il valore che viene passato da uno dei click precedenti identificato
	* come valore dell'attributo "op" nella variabile riservata $_REQUEST, quindi in $_REQUEST['op'].
	* facendola passare prima nella funzione gdrcd_filter_get definita nel file functions.inc.php che 
	* si trova nel pacchetto gdrcd 5.2 directory includes
*/
		$op=gdrcd_filter_get($_REQUEST['op']);
/** * controllo con una if se la variabile $op non è vuota, caso possibile in cui questo file è stato
    * appena aperto cliccando sul link anagrafe e l'utente non ha ancora cliccato su nessun link relativo
    * alle lettere iniziali. Se è vero che è vuota salto alla fine dell'if e non faccio niente, 
	* altrimenti..
*/
		if(empty($op)==FALSE){ 
/** * ..genero una query di selezione, con il campo nome e cognome (o altri se volete da aggiungere)
	* dalla tabella personaggio (vedere la sintassi SQL di MySQLi per selezionare anche dati da più 
	* tabelle e campi diversi in caso) dove i nomi corrisponde alla lettera scelta salvata nella 
	* variabile $op seguita da qualunque altro carattere (se è la A verrà fuori .. LIKE 'A%' ..) ordinati
	* per nome in ordine ASCendente
*/
			$query = "SELECT nome, cognome FROM personaggio WHERE nome LIKE '".$op."%' ORDER BY nome ASC";
/** * eseguo la query salvata nella var $query
*/
			$result=gdrcd_query($query, 'result');?>
			<!-- apro i tag per una tabella in modo da aggiungere poi i nomi in modo ordinato,
			stampo il l'instestazione della tabella con il la parola scelta dal vocabolario per indicare
			il Personaggio e la Posta-->
			<table>
				<tr>
					<td class="casella_titolo"><div class="titoli_elenco">
							<?php echo gdrcd_filter('out',$MESSAGE['interface']['user']['stats']['character']); ?>
					</div></td>
					<td class="casella_titolo"><div class="titoli_elenco">
							<?php echo gdrcd_filter('out',$MESSAGE['interface']['pg_list']['send']); ?>
					</div></td> 
				</tr>
		    <?php
/** * Eseguo un ciclo di tipo while, per ogni riga risultata dalla query fatta in precedenza,
	* inoltre immetto le righe con il sistema di mysql_fetch_array del risultato nella variabile
	* $row. Così facendo potrò scorrere tra le righe dei risultato ottenuti grazie al ciclo while
	* e richiamare per ogni riga i campi che voglio così come sono stati definiti sul database
	* in questo caso appunto $row['nome'] $row['cognome']
*/
		    while($row=gdrcd_query($result, 'fetch')){ ?>
			    <tr>
			    	<!--stampo dei link che con il testo corrispondente di nome e cognome del pg legati alla
			    	scheda del pg in particolare con il link alla main, richiamando da questa la page scheda
			    	e passando a questa il parametro del nome del pg relativo-->
					  <td class="casella_elemento"><div class="elementi_elenco">
				  		<a href="main.php?page=scheda&pg=<?php echo gdrcd_filter('out',$row['nome']);?>">
				  		<?php echo gdrcd_filter('out',$row['nome']).' '.gdrcd_filter('out',$row['cognome']); ?>
				  		</a>
				  	</div></td>
				  	<!--stessa cosa fatta in precedenza, stanpo dei link con il testo scrivi messaggio come 
				  	definito nel vocabolario della lingua selezionata, e con il link alla pagina del centro
				  	messaggi con l'operazione newmessage e destinatario il pg in esame-->
				    <td class="casella_elemento"><div class="elementi_elenco">
						  <a href="main.php?page=messages_center&newmessage=yes&reply_dest=<?php echo $row['nome']; ?>">
						  <img src="imgs/icons/mail_new.png" alt="<?php echo gdrcd_filter('out',$MESSAGE['interface']['pg_list']['sendto']); ?>">
						  </a>
					  </div></td>
				  </tr>
	        <?php 
/** * qui si chiude con la graffa la parte relativa al ciclo while, finchè non ho stampato tutti i nomi
	* dei pg trovati a questo punto ritorna alla riga sottotante il while per stampare un'altra cella con 
	* nome e cognome del pg successivo ed uscendo da qui solo quando ha finito 
*/
	      }
					?>
				<!-- Chiudo la table, una volta stampati tutti i nomi-->
	     </table>
			<!-- Aggiungo alla fine un link di ritorno alla visualizzazione di base, quindi al file servizi_anagrafe
			senza scelta della lettera, pulendo così la pagina da eventuali tabelle create-->
	    <div class="link_back">
        <a href="main.php?page=servizi_anagrafe">Torna indietro</a>
      </div>
			<?php 
			/** * con questa parentesi graffa chiudo l'IF...
*/
		} 
/** * ..quindi se non era stato in precedenza cliccato alcun link di questo file ancora, la lettura del codice
	* salta dalla riga dell'if fin qui ignorando tutti i comandi tra l'if e questo punto.
*/
		?>
		<!--Chiudo i tag dei due div principali aperti all'inizio della pagina corrente-->
	</div>
    
    <div class="link_back">
      <a href="main.php?page=uffici">Torna a SERVIZI</a>
    </div>
    
</div>
	

</div><!-- banca_operazioni-->

</div><!-- banca_box -->

