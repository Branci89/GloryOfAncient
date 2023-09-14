<?php /* HELP: Il box delle informazioni carica l'immagine del luogo corrente, lo stato e la descrizione. Genera, inoltre, il meteo */
$result = gdrcd_query("SELECT mappa.nome, mappa.descrizione, mappa.stato, mappa.immagine, mappa.stanza_apparente, mappa.scadenza, mappa_click.meteo FROM  mappa_click LEFT JOIN mappa ON mappa_click.id_click = mappa.id_mappa WHERE id = ".$_SESSION['luogo']."", 'result'); 
$record_exists = gdrcd_query($result, 'num_rows');
$record = gdrcd_query($result, 'fetch');
	
if($record_exists>0 || $_SESSION['luogo']==-1){
gdrcd_query($result, 'free');
?>
<div class="info_image_luogo">
<?php	
   if (empty($record['immagine'])===FALSE) { $immagine_luogo=$record['immagine']; }
   else { $immagine_luogo='base_logoimm.png'; }
?>
  <center> <img src="themes/<?php echo gdrcd_filter('out',$PARAMETERS['themes']['current_theme']);?>/imgs/locations/<?php echo $immagine_luogo?>" class="immagine_luogo" alt="<?php echo gdrcd_filter('out',$record['descrizione']); ?>" title="<?php echo gdrcd_filter('out',$record['descrizione']); ?>" ></center>
</div>
<?php } ?>