<div class="pagina_gestione_nazione">
<?php /*HELP: */ 

/*Controllo permessi utente*/
if ($_SESSION['permessi']<MODERATOR){
    echo '<div class="error">'.gdrcd_filter('out',$MESSAGE['error']['not_allowed']).'</div>';
} else { ?>

<!-- Titolo della pagina -->
<div class="page_title">
   <h2><?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['page_name']); ?></h2>
</div>

<!-- Corpo della pagina -->
<div class="page_body">
  
<?php /*Inserimento di un nuovo record*/
    if ($_POST['op']=='insert') {  
	   /*Processo le informazioni ricevute dal form*/
       if ((isset($_POST['visible'])==TRUE) &&
		   ($_POST['visible']=='is_visible')){$is_visible=1;}
       else {$is_visible=0;}
	   if ((isset($_POST['available'])==TRUE) &&
		   ($_POST['available']=='is_available')){$is_available=1;} 
	   else {$is_available=0;}
	   if ($_POST['immagine']==""){$immagine="standard_nazione.png";}
	   else{$immagine=gdrcd_filter('in',$_POST['immagine']);}
       /*Eseguo l'inserimento*/
	   gdrcd_query("INSERT INTO nazione (nome_nazione, sing_m, sing_f, visibile, iscrizione, immagine) VALUES ('".gdrcd_filter('in',$_POST['nome'])."', '".gdrcd_filter('in',$_POST['sing_m'])."', '".gdrcd_filter('in',$_POST['sing_f'])."', ".$is_visible.", ".$is_available.", '".$immagine."')");

	   ?>       
	   <div class="warning">
		  <?php echo gdrcd_filter('out',$MESSAGE['warning']['inserted']);?>
	   </div>
	   <!-- Link di ritorno alla visualizzazione di base -->
	   <div class="link_back">
          <a href="main.php?page=gestione_nazione">
		     <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['link']['back']); ?>
		  </a>
       </div>
<?php } ?>

<?php /* Cancellatura in un record */
    if ($_POST['op']=='erase'){ 
	   /*Eseguo la cancellatura*/
	   gdrcd_query("DELETE FROM nazione WHERE id_nazione=".gdrcd_filter('num',$_POST['id_record'])." LIMIT 1");

	   /*Aggiorno i personaggi*/
	   gdrcd_query("UPDATE personaggio SET id_nazione=1000 WHERE id_nazione=".gdrcd_filter('num',$_POST['id_record'])."");
	   ?>
   	   <div class="warning">
		  <?php echo gdrcd_filter('out',$MESSAGE['warning']['deleted']);?>
	   </div>
	   <!-- Link di ritorno alla visualizzazione di base -->
	   <div class="link_back">
          <a href="main.php?page=gestione_nazione">
		     <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['link']['back']); ?>
	      </a>
       </div>
<?php } ?>

<?php /*Modifica di un record*/
	if ($_POST['op']=='modify'){ 
	   /*Processo le informazioni ricevute dal form*/
       if ((isset($_POST['visible'])==TRUE) &&
		   (gdrcd_filter('get',$_POST['visible'])=='is_visible')){$is_visible=1;}
       else {$is_visible=0;}
	   if ((isset($_POST['available'])==TRUE) &&
		   (gdrcd_filter('num',$_POST['available'])=='is_available')){$is_available=1;} 
	   else {$is_available=0;}
	   if ($_POST['immagine']==""){$immagine="standard_nazione.png";}
	   else{$immagine=gdrcd_filter('in',$_POST['immagine']);}
	   /*Eseguo l'aggiornamento*/
	   gdrcd_query("UPDATE nazione SET nome_nazione ='".gdrcd_filter('in',$_POST['nome'])."', sing_m ='".gdrcd_filter('in',$_POST['sing_m'])."', sing_f ='".gdrcd_filter('in',$_POST['sing_f'])."', iscrizione = ".$is_available.", visibile = ".$is_visible.", immagine = '".gdrcd_filter('in',$immagine)."' WHERE id_nazione = ".gdrcd_filter('num',$_POST['id_record'])." LIMIT 1");

?>
   	   <div class="warning">
		  <?php echo gdrcd_filter('out',$MESSAGE['warning']['modified']);?>
	   </div>
	   <!-- Link di ritorno alla visualizzazione di base -->
	   <div class="link_back">
           <a href="main.php?page=gestione_nazione">
		      <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['link']['back']); ?>
		   </a>
       </div>
<?php } ?>
	
		

<?php /*Form di inserimento/modifica*/
	if ((gdrcd_filter('get',$_POST['op'])=='edit') || 
		(gdrcd_filter('get',$_REQUEST['op'])=='new')){ 
	  /*Preseleziono l'operazione di inserimento*/
	  $operation='insert';
	  /*Se è stata richiesta una modifica*/
	  if ($_POST['op']=='edit'){
		 /*Carico il record da modificare*/
		 $loaded_record=gdrcd_query("SELECT * FROM nazione WHERE id_nazione=".gdrcd_filter('num',$_POST['id_record'])." LIMIT 1 ");
		 /*Cambio l'operazione in modifica*/
		 $operation='edit';
		 
	  }	?>
	 
    <!-- Form di inserimento/modifica -->
    <div class="panels_box">
    <div class="form_gestione">
	<form action="main.php?page=gestione_nazione"
	      method="post">
             
		  <div class='form_label'>
             <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['name']); ?>
          </div>
          <div class='form_field'>
	         <input name="nome" 
			        value="<?php echo $loaded_record['nome_nazione']; ?>" />
		  </div>

		  <div class='form_label'>
             <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['name_sm']); ?>
          </div>
          <div class='form_field'>
	         <input name="sing_m" 
			        value="<?php echo $loaded_record['sing_m']; ?>" />
		  </div>

		  <div class='form_label'>
             <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['name_sf']); ?>
          </div>
          <div class='form_field'>
	         <input name="sing_f" 
			        value="<?php echo $loaded_record['sing_f']; ?>" />
		  </div>

		  <div class='form_label'>
             <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['infos']); ?>
          </div>

		  <div class='form_label'>
             <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['is_visible']); ?>
          </div>
		  <div class='form_field'>
	         <input type="checkbox"
		            name="visible" 
		         <?php if ($loaded_record['visibile']==1) {?>
					checked="checked"
				 <?php } ?>
					value="is_visible" />
		  </div>

 <div class='form_info'>
		     <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['is_visible_info']); ?>
		  </div>

		  <div class='form_label'>
             <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['is_avalaible']); ?>
          </div>
		  <div class='form_field'>
	         <input type="checkbox"
		            name="available" 
		         <?php if ($loaded_record['iscrizione']==1) {?>
					checked="checked"
				 <?php } ?>
					value="is_available" />
		  </div>
		   <div class='form_info'>
		     <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['is_avalaible_info']); ?>
		  </div>
		
		  <div class='form_label'>
             <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['image']); ?>
          </div>
		  <div class='form_field'>
	         <input name="immagine" 
			        value="<?php echo $loaded_record['immagine']; ?>" />
		  </div>
		  
	
		  <!-- bottoni -->
		  <div class='form_submit'>  
			  <?php /* Se l'operazione è una modifica stampo i tasti modifica e annulla */
			        if ($operation == "edit"){?>
			  <input type="hidden" name="id_record" value="<?php echo $loaded_record['id_nazione'];?>">
			  <input type="submit" 
			         value="<?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['submit']['edit']);?>" />
			  <input type="hidden" name="op" value="modify">
			  <?php	} /* Altrimenti il tasto inserisci */
					  else { ?>
			  <input type="submit" 
			         value="<?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['submit']['insert']);?>" />
			  <input type="hidden" name="op" value="insert">
			  <?php	} ?>
				  
		  </div>

	</form>
    </div>
    </div>
    <!-- Link di ritorno alla visualizzazione di base -->
	<div class="link_back">
         <a href="main.php?page=gestione_nazione">
		    <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['link']['back']); ?>
	     </a>
    </div>
<?php }//if ?>



<?php if ((isset($_POST['op'])===FALSE)&&(isset($_REQUEST['op'])===FALSE)) { /*Elenco record (Visualizzaione di base della pagina)*/
        
	//Determinazione pagina (paginazione)
    $pagebegin=(int)gdrcd_filter('get',$_REQUEST['offset'])*$PARAMETERS['settings']['records_per_page'];
	$pageend=$PARAMETERS['settings']['records_per_page'];
	//Conteggio record totali 
	$record_globale=gdrcd_query("SELECT COUNT(*) FROM nazione");
	$totaleresults=$record_globale['COUNT(*)'];
	//Lettura record

	$result=gdrcd_query("SELECT id_nazione, nome_nazione, visibile, iscrizione FROM nazione ORDER BY nome_nazione LIMIT ".$pagebegin.", ".$pageend."", 'result'); 
    $numresults=gdrcd_query($result, 'num_rows');
        
	/* Se esistono record */   
	if ($numresults>0){ ?>
       <!-- Elenco dei record paginato -->
       <div class="elenco_record_gestione">
       <table>
	      <!-- Intestazione tabella -->
          <tr>
		     <td class="casella_titolo"><div class="titoli_elenco"><?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['name_col']); ?></div></td>
		     <td class="casella_titolo"><div class="titoli_elenco"><?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['avalaible']); ?></div></td>
			 <td class="casella_titolo"><div class="titoli_elenco"><?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['visible']); ?></div></td>
		     <td class="casella_titolo"><div class="titoli_elenco"><?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['ops_col']); ?></div></td>
		  </tr>
		  <!-- Record -->
          <?php while ($row=gdrcd_query($result, 'fetch')){ ?>
	      <tr class="risultati_elenco_record_gestione">
             <td class="casella_elemento"><div class="elementi_elenco"><?php echo $row['nome_nazione']; ?></div></td>
		     <td class="casella_elemento"><div class="elementi_elenco"><?php if ($row['iscrizione']==1){ echo gdrcd_filter('out',$MESSAGE['interface']['administration']['yes']); }
		               else { echo gdrcd_filter('out',$MESSAGE['interface']['administration']['no']); }?></div></td>
			 <td class="casella_elemento"><div class="elementi_elenco"><?php if ($row['visibile']==1){ echo gdrcd_filter('out',$MESSAGE['interface']['administration']['yes']); }
		               else { echo gdrcd_filter('out',$MESSAGE['interface']['administration']['no']); }?></div></td>
		     <td class="casella_controlli"><!-- Iconcine dei controlli -->
		        <!-- Modifica -->
				<div class="controlli_elenco">
				<div class="controllo_elenco" >
		           <form class="opzioni_elenco_record_gestione" action="main.php?page=gestione_nazione" method="post">
			          <input type="hidden" name="id_record" value="<?php echo $row['id_nazione']?>" />
                      <input type="hidden" name="op" value="edit" />
					  <input type="image" 
				             src="imgs/icons/edit.png" 
						     alt="<?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['ops']['edit']); ?>" 
						     title="<?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['ops']['edit']); ?>" />
				   </form>
			    </div>
				<!-- Elimina -->
			    <div class="controllo_elenco" >
				   <form class="opzioni_elenco_record_gestione" action="main.php?page=gestione_nazione" method="post">
			          <input type="hidden" name="id_record" value="<?php echo $row['id_nazione']?>" />
                      <input type="hidden" name="op" value="erase" />
					  <input type="image" 
				             src="imgs/icons/erase.png" 
						     alt="<?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['ops']['erase']); ?>" 
						     title="<?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['ops']['erase']); ?>"/>
			       </form>
			    </div>
				</div>
		     </td>
          </tr>
		  <?php } //while 
		  
				gdrcd_query($result, 'free');
		  ?>
       </table>
       </div>
     <?php }//if ?>		
		
	 <!-- Paginatore elenco -->
	 <div class="pager">
       <?php if($totaleresults>$PARAMETERS['settings']['records_per_page']){
	            echo gdrcd_filter('out',$MESSAGE['interface']['pager']['pages_name']);
		        for($i=0;$i<=floor($totaleresults/$PARAMETERS['settings']['records_per_page']);$i++){ 
			       if ($i!=gdrcd_filter('num',$_REQUEST['offset'])){?>
                   <a href="main.php?page=gestione_nazione&offset=<?php echo $i; ?>"><?php echo $i+1; ?></a>
				   <?php } else { echo ' '.($i+1).' '; }
                } //for
             }//if ?>
     </div>
	  
     <!-- link crea nuovo -->
     <div class="link_back">
        <a href="main.php?page=gestione_nazione&op=new">
		   <?php echo gdrcd_filter('out',$MESSAGE['interface']['administration']['nationality']['link']['new']); ?>
		</a>
     </div>

<?php }//else ?>


</div>

<?php }//else (controllo permessi utente) ?>
</div><!--Pagina-->
