<div class="pagina_scheda">
<!---  Eriannen  Copyright (c) 2013 L'uso di questo script è libero senza alcuna restrizione paolo53b@gmail.com  --->
<?php /*HELP: E' possibile modificare la scheda agendo su scheda.css nel tema scelto, oppure sostituendo il codice che segue la voce "Scheda del personaggio"*/ ?>

<?php 
/********* CARICAMENTO PERSONAGGIO ***********/
//Se non e' stato specificato il nome del pg
if (isset($_REQUEST['pg'])===FALSE){
    echo '<div class="error">'.gdrcd_filter('out',$MESSAGE['error']['unknown_character_sheet']).'</div>';
} else {
	$query = "SELECT personaggio.*, razza.sing_m, razza.sing_f, razza.id_razza, razza.bonus_car0, razza.bonus_car1, razza.bonus_car2, razza.bonus_car3, razza.bonus_car4, razza.bonus_car5 FROM personaggio LEFT JOIN razza ON personaggio.id_razza=razza.id_razza WHERE personaggio.nome = '".gdrcd_filter('in',$_REQUEST['pg'])."'";
	$result = gdrcd_query($query, 'result');
	//Se non esiste il pg
	if (gdrcd_query($result, 'num_rows')==0){echo '<div class="error">'.gdrcd_filter('out',$MESSAGE['error']['unknown_character_sheet']).'</div>';}
	
	else {
		$record = gdrcd_query($result, 'fetch');
		gdrcd_query($result, 'free');
		
		
		$bonus_oggetti = gdrcd_query("SELECT SUM(oggetto.bonus_car0) AS BO0, SUM(oggetto.bonus_car1) AS BO1, SUM(oggetto.bonus_car2) AS BO2, SUM(oggetto.bonus_car3) AS BO3, SUM(oggetto.bonus_car4) AS BO4, SUM(oggetto.bonus_car5) AS BO5 FROM oggetto JOIN clgpersonaggiooggetto ON oggetto.id_oggetto = clgpersonaggiooggetto.id_oggetto WHERE clgpersonaggiooggetto.nome = '".gdrcd_filter('in',$_REQUEST['pg'])."' AND clgpersonaggiooggetto.posizione > ".ZAINO."");
		
        /*Controllo esilio, se esiliato non visualizzo la scheda*/
		if($record['esilio']>strftime('%Y-%m-%d')){
           echo '<div class="warning">'.gdrcd_filter('out',$record['nome']).' '.gdrcd_filter('out',$record['cognome']).' '.gdrcd_filter('out',$MESSAGE['warning']['character_exiled']).' '.gdrcd_format_date($record['esilio']).' ('.$record['motivo_esilio'].' - '.$record['autore_esilio'].')</div>';
           if ($_SESSION['permessi']>=GAMEMASTER){?>
              <div class="panels_box"><div class="form_gioco">
              <form action="popup.php?page=scheda_modifica&pg=<?php echo gdrcd_filter('get',$_REQUEST['pg']) ?>" method="post">
			      <input type="hidden" value="<?php echo strftime('%Y'); ?>" name="year" />
			      <input type="hidden" value="<?php echo strftime('%m'); ?>" name="month" />
			      <input type="hidden" value="<?php echo strftime('%d'); ?>" name="day" />
				  <input type="hidden" value="<?php gdrcd_filter('out',$MESSAGE['interface']['sheet']['modify_form']['unexile']); ?>" name="causale" />
			      <input type="hidden" value="exile" name="op" />
				  <div class="form_label">
				      <?php echo gdrcd_filter('out',$MESSAGE['interface']['sheet']['modify_form']['unexile']); ?>
				  </div>
				  <div class="form_submit">
				      <input type="submit" 
					         value="<?php echo gdrcd_filter('out',$MESSAGE['interface']['forms']['submit']); ?>" />
				  </div>
			  </form>
			  </div></div>
           <?php } 
		} else {
		 $px_totali_pg=$record['esperienza'];

         //carico le sole abilità del pg
         $result=gdrcd_query("SELECT id_abilita, grado FROM clgpersonaggioabilita WHERE nome='".gdrcd_filter('in',$_REQUEST['pg'])."'", 'result');
         $px_spesi=0;
         while ($row=gdrcd_query($result, 'fetch')){
	       /*Costo in px della singola abilità*/
           $px_abi=$PARAMETERS['settings']['px_x_rank']*(($row['grado']*($row['grado']+1))/2);
	       /*Costo totale*/
	       $px_spesi+=$px_abi;
	       $ranks[$row['id_abilita']]=$row['grado'];
         }
		 
		 gdrcd_query($result, 'free');
		 
		 /*Incremento skill*/
         if((gdrcd_filter('get',$_REQUEST['op'])=='addskill') && (($_SESSION['login']==gdrcd_filter('out',$_REQUEST['pg']))||($_SESSION['permessi']>=MODERATOR))){
            $px_necessari=$PARAMETERS['settings']['px_x_rank']*($ranks[$_REQUEST['what']]+1);
            if(($px_totali_pg-$px_spesi)>=$px_necessari){
              $px_spesi+=$px_necessari;
              if ($px_necessari==$PARAMETERS['settings']['px_x_rank']){
                 $query="INSERT INTO clgpersonaggioabilita (id_abilita, nome, grado) VALUES (".gdrcd_filter('num',$_REQUEST['what']).", '".gdrcd_filter('in',$_REQUEST['pg'])."', 1)";
                 $ranks[$_REQUEST['what']]=1;
                 #echo $query;
			  } else {
                 $ranks[$_REQUEST['what']]++;
				 $query="UPDATE clgpersonaggioabilita SET grado = ".$ranks[$_REQUEST['what']]." WHERE id_abilita = ".gdrcd_filter('num',$_REQUEST['what'])." AND nome = '".gdrcd_filter('in',$_REQUEST['pg'])."'";
              }//else
              gdrcd_query($query);
              echo '<div class="warning">'.gdrcd_filter('out',$MESSAGE['warning']['modified']).'</div>';
            }//if 
         }//if

         /*Decremento skill*/
         if((gdrcd_filter('get',$_REQUEST['op'])=='subskill') && ($_SESSION['permessi']>=MODERATOR)){
            if ($ranks[$_REQUEST['what']]==1){
               $query="DELETE FROM clgpersonaggioabilita WHERE id_abilita = ".$_REQUEST['what']." AND nome = '".gdrcd_filter('in',$_REQUEST['pg'])."' LIMIT 1";
               $ranks[$_REQUEST['what']]=0;
            } else {
			   $ranks[$_REQUEST['what']]--;
               $query="UPDATE clgpersonaggioabilita SET grado = ".$ranks[$_REQUEST['what']]." WHERE id_abilita = ".$_REQUEST['what']." AND nome = '".gdrcd_filter('in',$_REQUEST['pg'])."'";
            }//else
            gdrcd_query($query);
            echo '<div class="warning">'.gdrcd_filter('out',$MESSAGE['warning']['modified']).'</div>';
        }//if


if (isset($_REQUEST['op'])===FALSE){		
?>
	
<!--- SCHEDA DEL PERSONAGGIO --->
<div class="page_title">
   <h2><?php echo gdrcd_filter('out',$MESSAGE['interface']['sheet']['page_name']); ?></h2>
</div>

<div class="page_body">

<?php
/** * Controllo e avviso che è ora di cambiare password
	* @author Blancks
*/
if ($PARAMETERS['mode']['alert_password_change']=='ON')
{
	$six_months 	= 15552000;
	$ts_signup		= strtotime($record['data_iscrizione']);
	$ts_lastpass 	= (int)strtotime($record['ultimo_cambiopass']);


	if ($ts_lastpass+$six_months < time() && $record['nome'] == $_SESSION['login'])
	{
		echo '<div class="warning">';
	
		if ($ts_signup+$six_months < time())
				echo $MESSAGE['warning']['changepass'];
		else
				echo $MESSAGE['warning']['changepass_signup'];

	
		echo '</div>';
	}

}

?>

<div class="background"><!-- Background, affetti, robe varie -->

  <div class="titolo_box">
     <?php echo gdrcd_filter('out',$MESSAGE['interface']['sheet']['box_title']['background']); ?>
  </div>

  <div class="body_box">
     <?php 
		
		/** * Html, bbcode o entrambi ?
			* @author Blancks
		*/	
		if ($PARAMETERS['mode']['user_bbcode'] == 'ON')
		{
			if ($PARAMETERS['settings']['user_bbcode']['type'] == 'bbd' && $PARAMETERS['settings']['bbd']['free_html'] == 'ON')
			{
				echo bbdecoder(gdrcd_html_filter($record['descrizione']), true);
			
			}elseif ($PARAMETERS['settings']['user_bbcode']['type'] == 'bbd')
			{
				echo bbdecoder(gdrcd_filter('out',$record['descrizione']), true);
			
			}else
			{
				echo gdrcd_bbcoder(gdrcd_filter('out',$record['descrizione']));
			}
		
		}else
		{
			echo gdrcd_html_filter($record['descrizione']);
		}
     
     ?>
     <p align="center"><a href="/popup.php?page=scheda&pg=<?php echo $record['nome']; ?>"><img src="/themes/advanced/imgs/menu/avatar2.png"></a>
  </div>
</div><!-- Background, affetti, robe varie -->

<div class="background"><!-- Background, affetti, robe varie -->

	
<!--- AREA ADMIN --->	
<?php if($_SESSION['permessi']>=MODERATOR){ ?>
<div class="log_report">
   
   <?php /*report*/ ?>

</div>
<?php } ?>
</div>
<?php 
} else { ?>
<!-- Link a piè di pagina -->
<div class="link_back">
<a href="popup.php?page=scheda&amp;pg=Lachesi">Torna alla scheda.</a></div>
<?php }//else

}//else
/********* CHIUSURA SCHEDA **********/
	}//else

?>

<?php }//else?>

</div><!-- Pagina -->