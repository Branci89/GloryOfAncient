<?php
/** * Pagina di layout.
	* E' selezionabile come layout principale per il proprio gdr semplicemente da config.inc.php
	* Contiene il css che viene richiamato separatamente come file esterno e il markup
	*
	* Il layout è a piena compatibilità con i browser.
	* La scelta di inserire qui il css ad esso destinato è per limitarne la modifica da parte dell'utente
	* consentendogli di personalizzare tutto il resto senza rovinare la compatibilità cross browser
	*
	* @author Blancks
*/
if (isset($_GET['css']))
{
	header('Content-Type:text/css; charset=utf-8');


?>@charset "utf-8";

body{
margin: 0;
padding: 0;
border: 0;
overflow: hidden;
height: 100%; 
max-height: 100%; 
background:url("/imgs/sfondo_generale.jpg") top left repeat;
}

#framecontentRight{
position: absolute; 
top: 0; 
left: 0; 
width: 210px; /*Width of left frame div*/
height: 100%;
overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
}

#framecontentLeft{
position: absolute; 
top: 0; 
left: 0; 
width: 210px; /*Width of left frame div*/
height: 100%;
overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
}

#framecontentRight{
left: auto;
right: 0; 
width: 210px; /*Width of right frame div*/
overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
}

#framecontentBottom{
position: absolute;
bottom: 0; 
left: 210px; /*Set left value to WidthOfLeftFrameDiv*/
right: 210px; /*Set right value to WidthOfRightFrameDiv*/
width: auto;
height: 90px; /*Height of bottom frame div*/
overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
}

#maincontent{
position: fixed; 
top: 0;
bottom: 100px !important; /*Set bottom value to HeightOfBottomFrameDiv*/
left: 210px; /*Set left value to WidthOfLeftFrameDiv*/
right: 210px; /*Set right value to WidthOfRightFrameDiv*/
overflow: auto; 
}

.innertube{
margin: 0px; /*Margins for inner DIV inside each DIV (to provide padding)*/
}

* html body{ /*IE6 hack*/
padding: 10px 210px 100px 210px; /*Set value to (0 WidthOfRightFrameDiv HeightOfTopFrameDiv WidthOfLeftFrameDiv)*/
}

* html #maincontent{ /*IE6 hack*/
height: 100%; 
width: 100%; 
}

* html #framecontentBottom{ /*IE6 hack*/
width: 100%;
}



<?php

}else
{


	if($PARAMETERS['left_column']['activate'] == 'ON')
	{
	
?>
<!-- Colonna sinistra -->
<div id="framecontentLeft">
<div style="background:url(/themes/advanced/imgs/top_colonne_distanziate_sx.png); width:210px; height:58px; position:absolute; top:0px"></div>
	<div class="innertube" style="background:url(../themes/advanced/imgs/menu/colonne_distanziate.png) repeat; margin-top:58px">
	
		<div class="colonne_sx">
		<?php 		 
				foreach($PARAMETERS['left_column']['box'] as $box)
				{
					echo '<div class="'.$box['class'].'">';
				
					gdrcd_load_modules('pages/'.$box['page'].'.inc.php');
				
					echo '</div>';
				}
			
		?>
		</div>
 <div style="background:url(/themes/advanced/imgs/base_colonne_distanziate_sx.png); width:210px; height:100px; position:absolute; bottom:0px"></div>
		
	</div>
</div>
<?php

	}
	
	
	
	if($PARAMETERS['right_column']['activate'] == 'ON')
	{ 
?>

<!-- Colonna destra -->
<div id="framecontentRight">
<div style="background:url(/themes/advanced/imgs/top_colonne_distanziate_dx.png) top right; width:210px; height:58px; position:absolute; top:0px;right: 0px;"></div>
	<div class="innertube" style="background:url(../themes/advanced/imgs/menu/colonne_distanziatespeculare.png) repeat-y top right; margin-top:58px">
		<div class="colonne_dx">
		<?php 
					 
				foreach($PARAMETERS['right_column']['box'] as $box)
				{
					echo '<div class="'.$box['class'].'">';
					
					gdrcd_load_modules('pages/'.$box['page'].'.inc.php');
				
					echo '</div>';
				
				}
						
		?>
        <div style="background:url(/themes/advanced/imgs/base_colonne_distanziate_dx.png); width:210px; height:100px; position:absolute; bottom:0px;right: 1px;"></div>
		</div>

	</div>
</div>

<?php

	}



	if($PARAMETERS['bottom_column']['activate'] == 'ON')
	{ 
?>

<!-- Riga superiore  -->
<div id="framecontentBottom">
	<div class="innertube">

		<div class="colonne_bot">
		<?php 
					 
				foreach($PARAMETERS['bottom_column']['box'] as $box)
				{
					echo '<div class="'.$box['class'].'">';
					
					gdrcd_load_modules('pages/'.$box['page'].'.inc.php');
				
					echo '</div>';
				
				}
						
		?>
		</div>

	</div>
</div>

<?php

	}
?>


<div id="maincontent">
	<div class="output">
			<?php gdrcd_load_modules('pages/'.$strInnerPage); ?>
	</div>
</div>

<?php

}

?>