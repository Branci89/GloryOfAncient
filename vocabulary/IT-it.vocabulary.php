<?php

/* HELP:  Modificando i messaggi contenuti in questa pagina è possibile modificare i messaggi visualizzati in tutto il sito. Sono suddivisi in base alla pagina dove compaiono. Se non è specificata la pagina appaiono su più pagine. 
IMPORTANTE! non cancellate alcuna delle righe, ne modificate quanto scritto tra le parentesi quadre, altrimenti il funzionamento del sito potrebbe essere pregiudicato. Limitarsi a modificare o azzerare (='') i messaggi. */

/********** Homepage **********/
/*Testo centrale homepage*/
$MESSAGE['homepage']['main_content']['site_title'] = '';
$MESSAGE['homepage']['main_content']['site_subtitle'] = '';
$MESSAGE['homepage']['main_content']['welcome']='';
//$MESSAGE['homepage']['main_content']['infos']='';
/*Box informativi*/
$MESSAGE['homepage']['forms']['access_to']='Entra';
$MESSAGE['homepage']['forms']['username']='Login';
$MESSAGE['homepage']['forms']['password']='Password';
$MESSAGE['homepage']['forms']['login']='Accedi';
$MESSAGE['homepage']['forms']['forgot']='';
$MESSAGE['homepage']['forms']['email']='Recupera Pass';
$MESSAGE['homepage']['forms']['new_pass']='Invia password';
$MESSAGE['homepage']['forms']['online_now']='Personaggi connessi';
$MESSAGE['homepage']['forms']['open_in_popup']='';
$MESSAGE['homepage']['registration']='Crea il tuo personaggio';
$MESSAGE['homepage']['storyline']='Ambientazione del GDR';
$MESSAGE['homepage']['rules']='Regolamento del GDR';
$MESSAGE['homepage']['races']='Divinita\' e Razze nel Gioco';
$MESSAGE['homepage']['info']['webm']='Responsabile legale';
$MESSAGE['homepage']['info']['dbadmin']='Amministratore del Database';
$MESSAGE['homepage']['info']['email']='Contatto e-mail';
$MESSAGE['homepage']['installer']['not_empty']='Database già esistente.';
$MESSAGE['homepage']['installer']['done']='Database creato.';
$MESSAGE['installer']['instal']="Installa il database.";
$MESSAGE['homepage']['updater']['done']='Il Database è stato reso compatibile con GDRCD5.1';
$MESSAGE['homepage']['updater']['update']='Aggiorna adesso il database.';
$MESSAGE['homepage']['updater']['no_fields']='Non sono state rilevate mancanze nel database attualmente in uso.';


/********** Iscrizione **********/
/* Form */
$MESSAGE['register']['page_name']='Registrazione';
$MESSAGE['register']['forms']['accept']='Accetto le condizioni del servizio';
$MESSAGE['register']['forms']['refuse']='Rifiuto le condizioni del servizio';
$MESSAGE['register']['forms']['next']='Registra';
$MESSAGE['register']['forms']['ok']='Conferma';
$MESSAGE['register']['forms']['back']='Modifica';
$MESSAGE['register']['forms']['try_again']='Riprova';
$MESSAGE['register']['forms']['done']='Torna alla homepage';
$MESSAGE['register']['forms']['abort']='Annulla';
$MESSAGE['register']['forms']['mail']['sub']='Cambio password su';
$MESSAGE['register']['forms']['mail']['text']='La tua nuova password';
/* Labels*/
$MESSAGE['register']['fields']['email']='E-Mail';
$MESSAGE['register']['fields']['email_info']='Inserire una e-mail valida, altrimenti non sara\'� possibile completare la registrazione';
$MESSAGE['register']['fields']['name']='Nome del personaggio';
$MESSAGE['register']['fields']['lastname']='Cognome del personaggio';
$MESSAGE['register']['fields']['name_info']='Il nome deve superare i 20 caratteri, contenere spazi e/o caratteri diversi da lettere e deve avere l\'iniziale maiuscola. Non si possono usare nomi di personaggi mitologici maggiori come "Achille", "Zeus", "Paride", "Ulisse" et simila; sono accettati "cognomi" che definiscono la provenienza del personaggio (Es: Agapheo di Corinto.)';
$MESSAGE['register']['fields']['gender']='Sesso del personaggio';
$MESSAGE['register']['fields']['gender_m']='Uomo';
$MESSAGE['register']['fields']['gender_f']='Donna';
$MESSAGE['register']['fields']['race']='del personaggio';
$MESSAGE['register']['fields']['race_info']='Clicca QUI se vuoi conoscere le Divinita\' e le specifiche dei personaggi';
$MESSAGE['register']['fields']['nationality']='del personaggio';
$MESSAGE['register']['fields']['stats']='Caratteristiche';
$MESSAGE['register']['fields']['stats_info']='La somma dei punteggi deve essere';
$MESSAGE['register']['summary']='Riepilogo dei dati';
/* Condizioni */
$MESSAGE['register']['disclaimer']='I dati sensibili vengono trattati rispettando le vigenti leggi 196/03 e seguenti.';
$MESSAGE['register']['rules_read']='L\'utente dichiara di aver preso visione del regolamento, come proposto nella Wiki, di averlo compreso ed accettato in ogni sua parte, e di rispondere a tutti i requisiti richiesti, comprese le eventuali restrizioni di eta. ';
/* Benvenuti */
$MESSAGE['register']['welcome']['message']['subject']='Il tuo personaggio e\' stato registrato correttamente su';
$MESSAGE['register']['welcome']['message'][0]='Lo staff di';
$MESSAGE['register']['welcome']['message'][1]='ti da il benvenuto e ti augura buon divertimento!';
$MESSAGE['register']['welcome']['message'][2]='Le tue credenziali sono:';
$MESSAGE['register']['welcome']['message']['user']='Nome personaggio:';
$MESSAGE['register']['welcome']['message']['pass']='Password:';
$MESSAGE['register']['welcome']['message']['ok']='completata!';
$MESSAGE['register']['welcome']['back']='Torna alla';
$MESSAGE['register']['welcome']['message'][3]='Il tuo username e la relativa password sono stati inviati per email all\'indirizzo';
$MESSAGE['register']['welcome']['message'][4]='Benvenuto su Gloria degli Antichi ! Lo staff ti invita a consultare la Bacheca alla voce NUOVI ARRIVI per poterti orientare meglio nel gioco. Ti auguriamo una lieta permanenza ! ';

/* Errori */
$MESSAGE['register']['error']['name_taken']='Attenzione: nome gia\' in uso.';
$MESSAGE['register']['error']['email_taken']='Esiste un account registrato con questa e-mail, se credi che qualcuno abbia utilizzato la tua e-mail contatta lo staff alla e-mail che trovate nella Homepage del sito o nella Wiki.';
$MESSAGE['register']['error']['email_needed']='Specificare una e-mail valida.';




/********** Pagine utente **********/
/* Logout Page */
$MESSAGE['logout']['confirmation']='sei fuori dal gioco.';
$MESSAGE['logout']['greeting']='Ti ringraziamo per aver giocato con noi, torna al pi� presto per nuove avventure !';
$MESSAGE['logout']['logbackin']='Se vuoi rientrare nel gioco torna alla';

/**	* Inserimento degli errori di interfaccia
	* @Blancks
*/

/* Errori di interfaccia */

$MESSAGE['interface']['layout_not_found']='Modulo non trovato';



/**	* Termine inserimento
*/

/* Finestra presenti */
$MESSAGE['interface']['logged_users']['page_title']='Viaggiatori';
$MESSAGE['interface']['logged_users']['sing']='Presente';
$MESSAGE['interface']['logged_users']['plur']='Presenti';
$MESSAGE['interface']['logged_users']['logged_in']='Arrivano';
$MESSAGE['interface']['logged_users']['logged_out']='Si allontanano';
/* Pannello informazioni */
$MESSAGE['interface']['meteo']['title']='';
$MESSAGE['interface']['meteo']['status'][0]='Sereno';
$MESSAGE['interface']['meteo']['status'][1]='Variabile';
$MESSAGE['interface']['meteo']['status'][2]='Nuvoloso';
$MESSAGE['interface']['meteo']['status'][3]='Pioggia';
$MESSAGE['interface']['meteo']['status'][4]='Vento Forte';
$MESSAGE['interface']['meteo']['status'][5]='Tempesta';
$MESSAGE['interface']['meteo']['status'][6]='Bufera';
$MESSAGE['interface']['meteo']['status'][7]='Nebbia';
/* Finestra delle mappe */
$MESSAGE['interface']['maps']['more']='';
$MESSAGE['interface']['maps']['no_more']='';
$MESSAGE['interface']['maps']['traveling']='Imbarcati ';
$MESSAGE['interface']['maps']['arrive']='Raggiungi ';
$MESSAGE['interface']['maps']['leave']='Salpa ';
$MESSAGE['interface']['maps']['Status']='Stato del luogo';
$MESSAGE['interface']['maps']['set_meteo']='Conferma';
/* Scheda */
$MESSAGE['interface']['sheet']['page_name']='';
$MESSAGE['interface']['sheet']['link']['back']='Torna alla scheda.';
$MESSAGE['interface']['sheet']['send_message_to']['send']='Invia una';
$MESSAGE['interface']['sheet']['send_message_to']['to']='a';
$MESSAGE['interface']['sheet']['first_login']='Data creazione:';
$MESSAGE['interface']['sheet']['last_login']='Ultima visita:';
$MESSAGE['interface']['sheet']['box_title']['portrait']='';
$MESSAGE['interface']['sheet']['box_title']['profile']='';
$MESSAGE['interface']['sheet']['box_title']['skills']='';
$MESSAGE['interface']['sheet']['box_title']['background']='Storia';
$MESSAGE['interface']['sheet']['box_title']['relationships']='Affetti';
$MESSAGE['interface']['sheet']['profile']['role']='Titolo';
$MESSAGE['interface']['sheet']['profile']['no_race']='Sconosciuta';
$MESSAGE['interface']['sheet']['profile']['no_nationality']='Sconosciuta';
$MESSAGE['interface']['sheet']['profile']['occupation']='Ruolo';
$MESSAGE['interface']['sheet']['profile']['experience']='Esperienza';
$MESSAGE['interface']['sheet']['profile']['status']='Note & Segni';
$MESSAGE['interface']['sheet']['profile']['uneployed']='Senza mestiere';
$MESSAGE['interface']['sheet']['menu']['update']='MODIFICA';
$MESSAGE['interface']['sheet']['menu']['transictions']='Passaggi di averi';
$MESSAGE['interface']['sheet']['menu']['experience']='Esperienza';
$MESSAGE['interface']['sheet']['menu']['inventory']='Deposito';
$MESSAGE['interface']['sheet']['menu']['equipment']='Con se';
$MESSAGE['interface']['sheet']['menu']['gst']='AMMINISTRA';
$MESSAGE['interface']['sheet']['menu']['log']='LOG';
$MESSAGE['interface']['sheet']['modify_form']['last_name']='Cognome';
$MESSAGE['interface']['sheet']['modify_form']['relationships']='Affetti';
$MESSAGE['interface']['sheet']['modify_form']['background']='Storia';
$MESSAGE['interface']['sheet']['box_title']['descrfisica']='Aspetto e Psicologia';
$MESSAGE['interface']['sheet']['modify_form']['descrfisica']='Aspetto e Psicologia';
$MESSAGE['interface']['sheet']['modify_form']['admin']['descrfisica']='Aspetto e Psicologia';
$MESSAGE['interface']['sheet']['modify_form']['online_state']='Messaggio da mostrare nell\'elenco esteso degli online, l\'uso improprio verra\' sanzionato ';
$MESSAGE['interface']['sheet']['modify_form']['url_img']='Link immagine (300x180)';
$MESSAGE['interface']['sheet']['modify_form']['url_img_chat']='';
$MESSAGE['interface']['sheet']['modify_form']['url_media']='Link audio (midi, mp3)';
$MESSAGE['interface']['sheet']['modify_form']['block_media']='Disabilita tutti i suoni nel gioco';
$MESSAGE['interface']['sheet']['modify_form']['status']='Note & Segni';
$MESSAGE['interface']['sheet']['modify_form']['healt']='Salute';
$MESSAGE['interface']['sheet']['modify_form']['exile']='Esilia fino al';
$MESSAGE['interface']['sheet']['modify_form']['unexile']='Annulla esilio';
$MESSAGE['interface']['sheet']['modify_form']['why_exiled']='Motivo';
$MESSAGE['interface']['sheet']['modify_form']['admin']['email']='E-Mail';
$MESSAGE['interface']['sheet']['modify_form']['admin']['gender']='Genere';
$MESSAGE['interface']['sheet']['modify_form']['admin']['url_img']='Indirizzo immagine';
$MESSAGE['interface']['sheet']['modify_form']['admin']['background']='Storia';
$MESSAGE['interface']['sheet']['modify_form']['admin']['relationships']='Affetti';
$MESSAGE['interface']['sheet']['modify_form']['admin']['url_media']='Link media';
$MESSAGE['interface']['sheet']['modify_form']['admin']['bank']='Averi nel deposito';
$MESSAGE['interface']['sheet']['modify_form']['admin']['max_hp']='Salute massima';
$MESSAGE['interface']['sheet']['items']['zaino']='Con se';
$MESSAGE['interface']['sheet']['items']['list']['item']='Oggetto';
$MESSAGE['interface']['sheet']['items']['list']['pts']='Pezzi';
$MESSAGE['interface']['sheet']['items']['list']['charges']='Consumi';
$MESSAGE['interface']['sheet']['items']['list']['stats']['bonus']='Proprieta\'';
$MESSAGE['interface']['sheet']['items']['list']['stats']['attack']='Danno';
$MESSAGE['interface']['sheet']['items']['list']['stats']['defence']='Protezione';
$MESSAGE['interface']['sheet']['items']['list']['notes']='Note';
$MESSAGE['interface']['sheet']['items']['list']['add_note']='Commenta';
$MESSAGE['interface']['sheet']['items']['list']['decription']='Descrizione';
$MESSAGE['interface']['sheet']['items']['list']['drop']='Disfatene';
$MESSAGE['interface']['sheet']['items']['list']['wield']='Afferra';
$MESSAGE['interface']['sheet']['items']['list']['put_away']='Deposita';
$MESSAGE['interface']['sheet']['items']['list']['put_in']='Porta con te';
$MESSAGE['interface']['sheet']['items']['list']['wear']='Indossa';
$MESSAGE['interface']['sheet']['items']['list']['unwear']='Togli';
$MESSAGE['interface']['sheet']['items']['list']['give']='Consegna a';
$MESSAGE['interface']['sheet']['info_skill_cost']='Il costo di incremento di un\'abilita\'� e\' pari a '.$PARAMETERS['settings']['px_x_rank'].'px moltiplicato per il grado che si intende acquisire.';
$MESSAGE['interface']['sheet']['avalaible_xp']='Punteggio Esperienza';
$MESSAGE['interface']['sheet']['px']['page_name']='Riepilogo Esperienza';
$MESSAGE['interface']['sheet']['px']['px']='Exp';
$MESSAGE['interface']['sheet']['px']['why']='Causale';
$MESSAGE['interface']['sheet']['px']['event']='Assegnamento';
$MESSAGE['interface']['sheet']['px']['date']='Data';
$MESSAGE['interface']['sheet']['px']['author']='Autore';
$MESSAGE['interface']['sheet']['px']['trans']='Transazione';
$MESSAGE['interface']['sheet']['px']['to']='Beneficiario';
$MESSAGE['interface']['sheet']['trans']['page_name']='Transazioni';
$MESSAGE['interface']['sheet']['log']['author']='Autore';
$MESSAGE['interface']['sheet']['log']['name_change']='Cambio nome';
$MESSAGE['interface']['sheet']['log']['page_name']='Registrazioni';
$MESSAGE['interface']['sheet']['log']['date']='Data';
$MESSAGE['interface']['sheet']['log']['ip']='IP';
$MESSAGE['interface']['sheet']['log']['other_account']='Doppio';
$MESSAGE['interface']['sheet']['log']['message']='Messaggio';
/*Messaggi privati*/
$MESSAGE['interface']['messages']['destination']='Destinatario';
$MESSAGE['interface']['messages']['multiple']['title']=$PARAMETERS['names']['private_message']['sing'].'collettivo';
$MESSAGE['interface']['messages']['multiple']['single']='Destinatario singolo';
$MESSAGE['interface']['messages']['multiple']['multiple']='Destinatario multiplo';
$MESSAGE['interface']['messages']['multiple']['info']='Destinatari multipli separati da virgola.';
$MESSAGE['interface']['messages']['multiple']['all']='Tutti gli utenti';
$MESSAGE['interface']['messages']['body']='Testo';
$MESSAGE['interface']['messages']['sender']='Mittente';
$MESSAGE['interface']['messages']['date']='Ricevuto il';
$MESSAGE['interface']['messages']['time']='alle';
$MESSAGE['interface']['messages']['preview']='Anteprima';
$MESSAGE['interface']['messages']['answer']='Rispondi';
$MESSAGE['interface']['messages']['new']='Scrivi un nuovo '.strtolower($PARAMETERS['names']['private_message']['sing']);
$MESSAGE['interface']['messages']['sent']=' inviato';
$MESSAGE['interface']['messages']['reply']='Rispondi';
$MESSAGE['interface']['messages']['attach']='Rispondi e allega il testo originale';
$MESSAGE['interface']['messages']['attachment']='Testo originale: ';
$MESSAGE['interface']['messages']['erase']='Elimina';
$MESSAGE['interface']['messages']['erase_all']='Elimina tutti i messaggi letti';
$MESSAGE['interface']['messages']['erased']=' eliminato';
$MESSAGE['interface']['messages']['all_erased']=' eliminati';
$MESSAGE['interface']['messages']['no_message']='Nessun '.strtolower($PARAMETERS['names']['private_message']['sing']);
$MESSAGE['interface']['messages']['please_erase']='Si prega di ridurre il numero di '.strtolower($PARAMETERS['names']['private_message']['plur']).' nella casella';
$MESSAGE['interface']['messages']['go_back']='Torna all\'elenco dei '.strtolower($PARAMETERS['names']['private_message']['plur']).'.';
/* Forum */

$MESSAGE['interface']['forums']['topic']['new_posts']['sing'] = 'Nuovo Messaggio';
$MESSAGE['interface']['forums']['topic']['new_posts']['plur'] = 'Nuovi Messaggi';
$MESSAGE['interface']['forums']['topic']['title']='Topic';
$MESSAGE['interface']['forums']['topic']['new_posts_forum']=$MESSAGE['interface']['forums']['topic']['title'].' con '.$MESSAGE['interface']['forums']['topic']['new_posts']['plur'];
$MESSAGE['interface']['forums']['topic']['author']='Autore';
$MESSAGE['interface']['forums']['topic']['last']='Ultima';
$MESSAGE['interface']['forums']['topic']['posts']='Risposte';
$MESSAGE['interface']['forums']['warning']['no_topic']='Nessun topic in questa sezione.';
$MESSAGE['interface']['forums']['warning']['topic_not_exists']='Questo topic non esiste.';
$MESSAGE['interface']['forums']['topic']['last_post']='Ultima';
$MESSAGE['interface']['forums']['link']['back']='Torna all\'elenco delle categorie.';
$MESSAGE['interface']['forums']['link']['forum']='Torna all\'elenco.';
$MESSAGE['interface']['forums']['link']['topic']='Torna all\'argomento.';
$MESSAGE['interface']['forums']['link']['new_topic']='Nuovo argomento...';
$MESSAGE['interface']['forums']['link']['new_post']='Rispondi...';
$MESSAGE['interface']['forums']['link']['edit']='Modifica';
$MESSAGE['interface']['forums']['link']['delete']='Elimina';
$MESSAGE['interface']['forums']['link']['quote'] = 'Quota';
$MESSAGE['interface']['forums']['insert']['message']='Messaggio';
$MESSAGE['interface']['forums']['insert']['title']='Titolo';
$MESSAGE['interface']['forums']['delete']['title']='Cancellazione Post';
$MESSAGE['interface']['forums']['delete']['ask']='Sei sicuro di voler cancellare questo post?';

/* Tipi forum*/
$MESSAGE['interface']['forums']['type'][0]='La voce del Peloponneso';
$MESSAGE['interface']['forums']['type'][1]='Oltre le colonne d\' Ercole';
$MESSAGE['interface']['forums']['type'][2]='Solo '.strtolower($PARAMETERS['names']['race']['sing']).'';
$MESSAGE['interface']['forums']['type'][3]='Solo '.strtolower($PARAMETERS['names']['guild_name']['sing']).'';
$MESSAGE['interface']['forums']['type'][4]='Le mani del fato';
$MESSAGE['interface']['forums']['type'][5]='Staff & Gestione';
/*Servizi bancari*/
$MESSAGE['interface']['bank']['page_name']='Gestione degli averi';
$MESSAGE['interface']['bank']['back']='Torna alla gestione averi';
$MESSAGE['interface']['bank']['done']='Passaggio effettuato.';
$MESSAGE['interface']['bank']['error']='Pezzi non validi.';
$MESSAGE['interface']['bank']['deposit']='Deposito';
$MESSAGE['interface']['bank']['deposit_no']='Non hai averi sufficienti con te.';
$MESSAGE['interface']['bank']['withdraw']='Prelievo';
$MESSAGE['interface']['bank']['withdraw_no']='Non hai averi sufficienti nel tuo deposito.';
$MESSAGE['interface']['bank']['payment']='Trasferisci';
$MESSAGE['interface']['bank']['pay']='Retribuzioni';
$MESSAGE['interface']['bank']['amount']='Totale';
$MESSAGE['interface']['bank']['pocket']='Con te';
$MESSAGE['interface']['bank']['per_day']='Averi giornalieri';
$MESSAGE['interface']['bank']['cause']='Causale';
$MESSAGE['interface']['bank']['payee']='Beneficiario';
$MESSAGE['interface']['bank']['credit']='Retribuzione';
$MESSAGE['interface']['bank']['credit_no']='Retribuzione ritirata';
$MESSAGE['interface']['bank']['execute']='Effettua';
$MESSAGE['interface']['bank']['notice']='ti ha consegnato';
/*Lavoro*/
$MESSAGE['interface']['job']['page_name']='Mestiere';
$MESSAGE['interface']['job']['submit']['pick']='Inizia';
$MESSAGE['interface']['job']['submit']['quit']='Abbandona';
$MESSAGE['interface']['job']['ok_job']='Sei stato\a preso\a !';
$MESSAGE['interface']['job']['ok_quit']='Abbandono avvenuito.';
$MESSAGE['interface']['job']['job']='Mestiere';
$MESSAGE['interface']['job']['pay']='Retribuzione';
$MESSAGE['interface']['job']['controls']='Opzioni';
$MESSAGE['interface']['job']['extent']='fino al:';
$MESSAGE['interface']['job']['disclaimer']='La durata minima del contratto e\' di giorni';
$MESSAGE['interface']['job']['back']='Torna all\'elenco';
/*Gilde*/
$MESSAGE['interface']['guilds']['back']='Torna all\'elenco';
$MESSAGE['interface']['guilds']['roles_title']['plur']='Cariche';
$MESSAGE['interface']['guilds']['roles_title']['sing']='Carica';
$MESSAGE['interface']['guilds']['pay']='Compenso';
$MESSAGE['interface']['guilds']['members']='Compagni';
$MESSAGE['interface']['guilds']['member']='Compagno';
/*Amministrazione compagnie*/
$MESSAGE['interface']['adm_guilds']['page_name']='Gestione';
$MESSAGE['interface']['adm_guilds']['back']='Torna al pannello';
$MESSAGE['interface']['adm_guilds']['no_adm']='Siamo spiacenti, ma non hai i permessi per gestire una';
$MESSAGE['interface']['adm_guilds']['freelance']='Non schierati';
$MESSAGE['interface']['adm_guilds']['new_member']='Incarica nuovi';
$MESSAGE['interface']['adm_guilds']['fire_member']='Espelli';
$MESSAGE['interface']['adm_guilds']['hire']='Assumi';
$MESSAGE['interface']['adm_guilds']['fire']='Elimina dalla compagnia';
$MESSAGE['interface']['adm_guilds']['quit']='Dimissioni';
$MESSAGE['interface']['adm_guilds']['ok_fire']='Eliminazione avvenuta';
$MESSAGE['interface']['adm_guilds']['cannot_hire']='ha gia\'� il massimo numero di affiliazioni consentito, operare prima un licenziamento.';
$MESSAGE['interface']['adm_guilds']['ok_hire']='Incarico assegnato';
$MESSAGE['interface']['adm-guilds']['message_body']['fire']='AVVISO - Ti e\' stata tolta al seguente carica:';
$MESSAGE['interface']['adm-guilds']['message_body']['hire']='AVVISO - Ti e\' stata assegnata la seguente carica:';
/*Mercato*/
$MESSAGE['interface']['market']['page_name']='Agora\'';
$MESSAGE['interface']['market']['back']='Torna all\' Agora\'';
$MESSAGE['interface']['market']['categories']='Tipologie';
$MESSAGE['interface']['market']['item']='Oggetto';
$MESSAGE['interface']['market']['bonus']='Bonus';
$MESSAGE['interface']['market']['more']='Descrizione';
$MESSAGE['interface']['market']['attack']='Danno';
$MESSAGE['interface']['market']['defence']='Protezione';
$MESSAGE['interface']['market']['stock']='Pezzi';
$MESSAGE['interface']['market']['sell']='Vendi';
$MESSAGE['interface']['market']['buy']='Compra';
$MESSAGE['interface']['market']['price']='Prezzo';
$MESSAGE['interface']['market']['item_charges']='Usi';
$MESSAGE['interface']['market']['no_charges']='Illim.';
/*Stanze private*/
$MESSAGE['interface']['hotel']['page_name']='Prenotazione stanze private';
$MESSAGE['interface']['hotel']['no_room']='Non sono disponibili stanze private.';
$MESSAGE['interface']['hotel']['room']='Stanza';
$MESSAGE['interface']['hotel']['hours']='Ore';
$MESSAGE['interface']['hotel']['per_hour']='per ogni ora';
$MESSAGE['interface']['hotel']['no_bucks']='Non hai con te averi a sufficienza.';
$MESSAGE['interface']['hotel']['back']='Indietro';
$MESSAGE['interface']['hotel']['ok']='Prenotazione completata';
/*Anagrafe*/
$MESSAGE['interface']['pg_list']['pg_list']='Il Censo';
$MESSAGE['interface']['pg_list']['select']='Visualizza il personaggio';
$MESSAGE['interface']['pg_list']['buttons']='Elenco dei personaggi per iniziale del nome.';
$MESSAGE['interface']['pg_list']['send']='Posta';
$MESSAGE['interface']['pg_list']['sendto']='Invia un messaggio';
/*Elenco abilita*/
$MESSAGE['interface']['skills']['page_name']='Abilita\'�';
$MESSAGE['interface']['skills']['skill']='Abilita\'�';
$MESSAGE['interface']['skills']['car']='Caratteristica';
$MESSAGE['interface']['skills']['desc']='Descrizione';
$MESSAGE['interface']['skills']['sys']='A ciascuna abilita\'� e\' associata una delle sei caratteristiche dei personaggi ed un grado di competenza specifico per il personaggio. Per usare correttamente in gioco un\' abilita\' basta selezionarla dal menu in basso alla chat e cliccare il tasto invia situato in basso a destra';
$MESSAGE['interface']['skills']['sys_tit']='Uso delle abilita\'�';
/*Regolamento e ambientazione*/
$MESSAGE['interface']['rules']['page_name']="Regolamento";
$MESSAGE['interface']['plot']['page_name']="Ambientazione";




/********** Pagine di gestione **********/
/*Generale*/
$MESSAGE['interface']['administration']['yes']='Si';
$MESSAGE['interface']['administration']['no']='No';
$MESSAGE['interface']['administration']['id_col']='ID';
$MESSAGE['interface']['administration']['name_col']='Nome';
$MESSAGE['interface']['administration']['ops_col']='Opzioni';
$MESSAGE['interface']['administration']['ops']['close']='Chiuso';
$MESSAGE['interface']['administration']['ops']['open']='Aperto';
$MESSAGE['interface']['administration']['ops']['important']='Importante';
$MESSAGE['interface']['administration']['ops']['not_important']='Non Importante';
$MESSAGE['interface']['administration']['ops']['edit']='Modifica';
$MESSAGE['interface']['administration']['ops']['erase']='Elimina';
/*Dichiarazioni per quest*/
$MESSAGE['interface']['quest']['title_page']='Avvisi e Informazioni';
$MESSAGE['interface']['administration']['quest']['page_name']='Gestione quest';
$MESSAGE['interface']['administration']['quest']['date']='Data';
$MESSAGE['interface']['administration']['quest']['title']='Titolo';
$MESSAGE['interface']['administration']['quest']['infos']='Testo';
$MESSAGE['interface']['administration']['quest']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['quest']['link']['new']='Nuova quest';
/*Oggetti*/
$MESSAGE['interface']['administration']['items']['page_name']='Gestione oggetti';
$MESSAGE['interface']['administration']['items']['load_item']='Carica un oggetto';
$MESSAGE['interface']['administration']['items']['give_item']='Assegna oggetti';
$MESSAGE['interface']['administration']['items']['number_item']='Numero';
$MESSAGE['interface']['administration']['items']['destination_item']='A';
$MESSAGE['interface']['administration']['items']['item_type']='Tipo oggetto';
$MESSAGE['interface']['administration']['items']['item_fit_in']='Posizionabile in';

$MESSAGE['interface']['administration']['items']['fit_in']['inventory']='Non trasportabile';
$MESSAGE['interface']['administration']['items']['fit_in']['bag']='Con se';
$MESSAGE['interface']['administration']['items']['fit_in']['hand_dx']='Mano (DX)';
$MESSAGE['interface']['administration']['items']['fit_in']['hand_sx']='Mano (SX)';
$MESSAGE['interface']['administration']['items']['fit_in']['chest']='Torso';
$MESSAGE['interface']['administration']['items']['fit_in']['legs']='Gambe';
$MESSAGE['interface']['administration']['items']['fit_in']['feet']='Piedi';
$MESSAGE['interface']['administration']['items']['fit_in']['head']='Testa';
$MESSAGE['interface']['administration']['items']['fit_in']['ring']='Braccia';
$MESSAGE['interface']['administration']['items']['fit_in']['neck']='Collo';
$MESSAGE['interface']['administration']['items']['item_name']='Nome oggetto';
$MESSAGE['interface']['administration']['items']['item_info']='Descrizione';
$MESSAGE['interface']['administration']['items']['item_price']='Prezzo';
$MESSAGE['interface']['administration']['items']['item_bonus_offensive']='Danno';
$MESSAGE['interface']['administration']['items']['item_bonus_defensive']='Protezione';
$MESSAGE['interface']['administration']['items']['item_charges']='Numero di usi';
$MESSAGE['interface']['administration']['items']['item_bonus']='Bonus';
$MESSAGE['interface']['administration']['items']['item_image']='Immagine';
$MESSAGE['interface']['administration']['items']['link']['menage_types']='Gestione dei tipi di oggetto';
/*Luoghi*/
$MESSAGE['interface']['administration']['locations']['page_name']='Gestione luoghi';
$MESSAGE['interface']['administration']['locations']['link']['new']='Crea un nuovo luogo';
$MESSAGE['interface']['administration']['locations']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['locations']['submit']['insert']='Crea';
$MESSAGE['interface']['administration']['locations']['submit']['edit']='Modifica';
$MESSAGE['interface']['administration']['locations']['submit']['undo']='Annulla';
$MESSAGE['interface']['administration']['locations']['map_name']='Mappa';
$MESSAGE['interface']['administration']['locations']['name']='Nome';
$MESSAGE['interface']['administration']['locations']['description']='Descrizione';
$MESSAGE['interface']['administration']['locations']['description_default']='Nessuna descrizione';
$MESSAGE['interface']['administration']['locations']['status']='Consizione del luogo';
$MESSAGE['interface']['administration']['locations']['status_default']='-';
$MESSAGE['interface']['administration']['locations']['page']='Pagina associata';
$MESSAGE['interface']['administration']['locations']['is_chat']='Chat';
$MESSAGE['interface']['administration']['locations']['is_chat_info']='Spuntare se la stanza e\' adibita a chat, altrimenti specificare nel campo "pagina" il file da caricare nel riquadro principale';
$MESSAGE['interface']['administration']['locations']['image']='Nome del file immagine';
$MESSAGE['interface']['administration']['locations']['image_info']='Specificare il nome del file da utilizzare come immagine che deve essere posizionato nella cartella imgs/locations del tema scelto.';
$MESSAGE['interface']['administration']['locations']['screen_name']='Nome vistualizzato nell\'elenco presenti';
$MESSAGE['interface']['administration']['locations']['screen_name_info']='Se specificato, il nome in questa casella viene visualizzato nell\'elenco presenti al posto del nome della stanza';
$MESSAGE['interface']['administration']['locations']['map_id']='Mappa di appartenenza';
$MESSAGE['interface']['administration']['locations']['map_id_default']='Nessuna';
$MESSAGE['interface']['administration']['locations']['map_id_err']='Non esistono mappe.';
$MESSAGE['interface']['administration']['locations']['x']='Coordinate del link sulla mappa (x)';
$MESSAGE['interface']['administration']['locations']['y']='Coordinate del link sulla mappa (y)';
$MESSAGE['interface']['administration']['locations']['is_privat']='Stanza privata';
$MESSAGE['interface']['administration']['locations']['is_privat_info']='Spuntare per rendere privata la stanza e specificare il proprietario o il gruppo di appartenenza, la scadenza ed il costo di affitto, altrimenti lasciare bianchi i campi seguenti.';
$MESSAGE['interface']['administration']['locations']['owner']='Proprietario';
$MESSAGE['interface']['administration']['locations']['owner_default']='Nessuno';
$MESSAGE['interface']['administration']['locations']['owner_err']='Nessun gruppo o giocatore presente.';
$MESSAGE['interface']['administration']['locations']['expiration_date']='Scadenza';
$MESSAGE['interface']['administration']['locations']['rent']='Costo orario di affitto';

/**	* Denonimazioni relative al link immagine e collegamento mappa
	* @author Blancks
*/
$MESSAGE['interface']['administration']['locations']['image_button'] = 'Link Immagine';
$MESSAGE['interface']['administration']['locations']['image_button_info'] = 'Da inserire il link al file immagine da mostrare sulla mappa al posto del link testuale (il percorso delle immagini è themes/'. $PARAMETERS['themes']['current_theme'] .'/imgs/maps/)';

$MESSAGE['interface']['administration']['locations']['image_button_hover'] = 'Link Immagine al passaggio del mouse';
$MESSAGE['interface']['administration']['locations']['image_button_hover_info'] = 'L\'immagine viene mostrata al posto della prima quando vi si passa su di essa col mouse (il percorso delle immagini e\' themes/'. $PARAMETERS['themes']['current_theme'] .'/imgs/maps/). Opzione facoltativa: se si inserisce il primo link non e\' obbligatorio inserire anche questo.';

$MESSAGE['interface']['administration']['locations']['map_related'] = 'Collega alla mappa..';
$MESSAGE['interface']['administration']['locations']['map_related_info'] = 'Collega il link alla mappa selezionata. Utile per generare un sistema di sottomappe.';

/*Mappe*/
$MESSAGE['interface']['administration']['maps']['page_name']='Gestione mappe';
$MESSAGE['interface']['administration']['maps']['link']['new']='Crea una nuova mappa';
$MESSAGE['interface']['administration']['maps']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['maps']['submit']['insert']='Crea';
$MESSAGE['interface']['administration']['maps']['submit']['edit']='Modifica';
$MESSAGE['interface']['administration']['maps']['submit']['undo']='Annulla';
$MESSAGE['interface']['administration']['maps']['name']='Nome';
$MESSAGE['interface']['administration']['maps']['is_mobile']='Mobile';
$MESSAGE['interface']['administration']['maps']['is_mobile_info']='Le mappe mobili sono intese a creare particolari ambienti come navi o carovane, in grado di spostarsi da un vicinato all\'altro.';
$MESSAGE['interface']['administration']['maps']['position']='Posizione';
$MESSAGE['interface']['administration']['maps']['position_info']='Il valore di posizione genera un vicinato di mappe. Le mappe con lo stesso valore presentano, nella propria visualizzazione, un link alle altre, permettendo lo spostamento di un personaggio da una mappa all\'altra.';
$MESSAGE['interface']['administration']['maps']['image']='Immagine';

/**	* Aggiunta delle nuove definizioni per le implementazioni nel pannello gestionale
	* @author Blancks <s.rotondo90@gmail.com
*/
$MESSAGE['interface']['administration']['maps']['width']='Larghezza';
$MESSAGE['interface']['administration']['maps']['height']='Altezza';
$MESSAGE['interface']['administration']['maps']['width_info']='La larghezza in pixel del file immagine della mappa.';
$MESSAGE['interface']['administration']['maps']['height_info']='Altezza in pixel del file immagine usato per la mappa.';

/**	* Fine
*/

/*Bacheche*/
$MESSAGE['interface']['administration']['forums']['page_name']='Gestione '.strtolower($PARAMETERS['names']['forum']['plur']);
$MESSAGE['interface']['administration']['forums']['link']['new']='Crea una nuova '.strtolower($PARAMETERS['names']['forum']['sing']) ;
$MESSAGE['interface']['administration']['forums']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['forums']['submit']['insert']='Crea';
$MESSAGE['interface']['administration']['forums']['submit']['edit']='Modifica';
$MESSAGE['interface']['administration']['forums']['submit']['undo']='Annulla';
$MESSAGE['interface']['administration']['forums']['type']['name']='Tipo';
$MESSAGE['interface']['administration']['forums']['type']['info']='Gli admin possono comunque accedere a tutte le '.$PARAMETERS['names']['forum']['plur'].' come moderatori';
$MESSAGE['interface']['administration']['forums']['name']='Intestazione';
$MESSAGE['interface']['administration']['forums']['owner']='Assegnato a:';
$MESSAGE['interface']['administration']['forums']['no_owner']='Nessuno';
/*Nazioni*/
$MESSAGE['interface']['administration']['nationality']['page_name']='Gestione '.strtolower($PARAMETERS['names']['nationality']['plur']); 
$MESSAGE['interface']['administration']['nationality']['name']='Nome plurale';
$MESSAGE['interface']['administration']['nationality']['name_sm']='Singolare maschile';
$MESSAGE['interface']['administration']['nationality']['name_sf']='Singolare femminile';
$MESSAGE['interface']['administration']['nationality']['is_visible']='Visibile all\'iscrizione';
$MESSAGE['interface']['administration']['nationality']['is_visible_info']='La '.strtolower($PARAMETERS['names']['nationality']['sing']).' � visibile al momento della iscrizione anche qualora non sia selezionabile.'; 
$MESSAGE['interface']['administration']['nationality']['is_avalaible']='Disponibile all\'iscrizione';
$MESSAGE['interface']['administration']['nationality']['is_avalaible_info']='Se selezionata, la nazionalit� � liberamente disponibile per la creazione del personaggio.';
$MESSAGE['interface']['administration']['nationality']['image']='Immagine';
$MESSAGE['interface']['administration']['nationality']['submit']['edit']="Modifica";
$MESSAGE['interface']['administration']['nationality']['submit']['undo']="Annulla";
$MESSAGE['interface']['administration']['nationality']['submit']['insert']="Crea";
$MESSAGE['interface']['administration']['nationality']['visible']='Visibile';
$MESSAGE['interface']['administration']['nationality']['avalaible']='Iscrizione';
$MESSAGE['interface']['administration']['nationality']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['nationality']['link']['new']='Crea una nuova '.strtolower($PARAMETERS['names']['nationality']['sing']).'';
/*Razze*/
$MESSAGE['interface']['administration']['races']['page_name']='Gestione '.strtolower($PARAMETERS['names']['race']['plur']); 
$MESSAGE['interface']['administration']['races']['name']='Nome plurale';
$MESSAGE['interface']['administration']['races']['name_sm']='Singolare maschile';
$MESSAGE['interface']['administration']['races']['name_sf']='Singolare femminile';
$MESSAGE['interface']['administration']['races']['is_visible']='Visibile all\'iscrizione';
$MESSAGE['interface']['administration']['races']['is_visible_info']='La '.strtolower($PARAMETERS['names']['race']['sing']).' sarà visibile al momento dell\'iscrizione anche qualora non sia selezionabile.'; 
$MESSAGE['interface']['administration']['races']['is_avalaible']='Disponibile all\'iscrizione';
$MESSAGE['interface']['administration']['races']['is_avalaible_info']='Se selezionata, la razza e\' liberamente disponibile per la creazione del personaggio.';
$MESSAGE['interface']['administration']['races']['bonus']='Bonus';
$MESSAGE['interface']['administration']['races']['image']='Immagine';
$MESSAGE['interface']['administration']['races']['infos']='Descrizione e caratterizzazione';
$MESSAGE['interface']['administration']['races']['icon']='Icona chat';
$MESSAGE['interface']['administration']['races']['site']='Sito esterno';
$MESSAGE['interface']['administration']['races']['submit']['edit']="Modifica";
$MESSAGE['interface']['administration']['races']['submit']['undo']="Annulla";
$MESSAGE['interface']['administration']['races']['submit']['insert']="Crea";
$MESSAGE['interface']['administration']['races']['visible']='Visibile';
$MESSAGE['interface']['administration']['races']['avalaible']='Iscrizione';
$MESSAGE['interface']['administration']['races']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['races']['link']['new']='Crea una nuova '.strtolower($PARAMETERS['names']['race']['sing']).'';
/*Gilde*/
$MESSAGE['interface']['administration']['guilds']['page_name']='Gestione '.strtolower($PARAMETERS['names']['guild_name']['plur']).' e ruoli';
$MESSAGE['interface']['administration']['guilds']['link']['jobs']='Gestici i lavori indipentendi';
$MESSAGE['interface']['administration']['guilds']['link']['new']='Crea una nuova '.strtolower($PARAMETERS['names']['guild_name']['sing']).'';
$MESSAGE['interface']['administration']['guilds']['link']['new_role']='Gestisci i lavori indipendenti';
$MESSAGE['interface']['administration']['guilds']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['guilds']['link']['menage_types']='Gestione dei tipi...';
$MESSAGE['interface']['administration']['guilds']['submit']['insert']='Crea';
$MESSAGE['interface']['administration']['guilds']['submit']['edit']='Modifica';
$MESSAGE['interface']['administration']['guilds']['submit']['undo']='Annulla';
$MESSAGE['interface']['administration']['guilds']['warning']['suppressed']='Siamo spiacenti, ma la gilda di cui facevi parte e\' stata chiusa.';
$MESSAGE['interface']['administration']['guilds']['jobs']='Lavori indipentendi';
$MESSAGE['interface']['administration']['guilds']['name']='Nome';
$MESSAGE['interface']['administration']['guilds']['image']='Immagine';
$MESSAGE['interface']['administration']['guilds']['site']='URL del sito';
$MESSAGE['interface']['administration']['guilds']['type']='Tipo';
$MESSAGE['interface']['administration']['guilds']['type_err']='Non e\' stato specificato alcun TIPO per le Compagnie.';
$MESSAGE['interface']['administration']['guilds']['visible']='Visibile';
$MESSAGE['interface']['administration']['guilds']['role']['page_name']="Ruoli della compagnia";
$MESSAGE['interface']['administration']['guilds']['role']['name_new']="Nuovo ruolo";
$MESSAGE['interface']['administration']['guilds']['role']['name']="Ruolo";
$MESSAGE['interface']['administration']['guilds']['role']['pay']="Compenso";
$MESSAGE['interface']['administration']['guilds']['role']['head']="Controlli della Compagnia";
$MESSAGE['interface']['administration']['guilds']['role']['head_info']="I ruoli che hanno abilitati i controlli di compagnia possono nominare e rimuovere i membri ed altri privilegi.";
$MESSAGE['interface']['administration']['guilds']['role']['submit']['edit']='Modifica';
$MESSAGE['interface']['administration']['guilds']['role']['submit']['delete']='Elimina';
/*Tipi*/
$MESSAGE['interface']['administration']['types']['page_name']['items']='Gestione tipi oggetto';
$MESSAGE['interface']['administration']['types']['page_name']['guilds']='Gestione tipi '.strtolower($PARAMETERS['names']['guild_name']['sing']).'';
$MESSAGE['interface']['administration']['types']['link']['new']='Crea un nuovo tipo';
$MESSAGE['interface']['administration']['types']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['types']['link']['guilds']='Gestione '.strtolower($PARAMETERS['names']['guild_name']['plur']).'...';
$MESSAGE['interface']['administration']['types']['link']['items']='Gestione oggetti...';
$MESSAGE['interface']['administration']['types']['submit']['insert']='Crea';
$MESSAGE['interface']['administration']['types']['submit']['edit']='Modifica';
$MESSAGE['interface']['administration']['types']['submit']['undo']='Annulla';
$MESSAGE['interface']['administration']['types']['name']='Tipo';
/*Permessi utente*/
$MESSAGE['interface']['administration']['roles']['page_name']='Gestione permessi utente';
$MESSAGE['interface']['administration']['roles']['submit']['edit']='Modifica';
$MESSAGE['interface']['administration']['roles']['submit']['new']='Nuovo';
$MESSAGE['interface']['administration']['roles']['link']['back']='Torna al pannello';
$MESSAGE['interface']['administration']['roles']['message_body'][0]='Avviso automatico: I permessi del tuo account sono stati cambiati in "';
$MESSAGE['interface']['administration']['roles']['message_body'][1]='".';
/*Abilità*/
$MESSAGE['interface']['administration']['skills']['page_name']='Gestione abilita\'�';
$MESSAGE['interface']['administration']['skills']['submit']['insert']='Inserisci';
$MESSAGE['interface']['administration']['skills']['submit']['edit']='Modifica';
$MESSAGE['interface']['administration']['skills']['submit']['undo']='Annulla';
$MESSAGE['interface']['administration']['skills']['car']='Caratteristica';
$MESSAGE['interface']['administration']['skills']['car_obj']='Caratteristica Da usare per lancio Oggetto in Chat';
$MESSAGE['interface']['administration']['skills']['race']='Riservata a';
$MESSAGE['interface']['administration']['skills']['no_race']='Non riservata';
$MESSAGE['interface']['administration']['skills']['name']='Nome';
$MESSAGE['interface']['administration']['skills']['infos']='Descrizione';
$MESSAGE['interface']['administration']['skills']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['skills']['link']['new']='Nuova abilita\'�';
/*Regolamento e ambientazione*/
$MESSAGE['interface']['administration']['rules']['page_name']='Gestione regolamento';
$MESSAGE['interface']['administration']['rules']['art']='Articolo';
$MESSAGE['interface']['administration']['rules']['title']='Titolo';
$MESSAGE['interface']['administration']['rules']['infos']='Testo';
$MESSAGE['interface']['administration']['rules']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['rules']['link']['new']='Nuovo articolo';
$MESSAGE['interface']['administration']['plot']['page_name']='Gestione ambientazione';
$MESSAGE['interface']['administration']['plot']['art']='Capitolo';
$MESSAGE['interface']['administration']['plot']['title']='Titolo';
$MESSAGE['interface']['administration']['plot']['infos']='Testo';
$MESSAGE['interface']['administration']['plot']['link']['back']='Torna all\'elenco';
$MESSAGE['interface']['administration']['plot']['link']['new']='Nuovo capitolo';
/*Manutensione*/
$MESSAGE['interface']['administration']['maintenance']['page_name']='Manutenzione';
$MESSAGE['interface']['administration']['maintenance']['link']['back']='Indietro...';
$MESSAGE['interface']['administration']['maintenance']['old_log']='Elimina log piu\' vecchi di';
$MESSAGE['interface']['administration']['maintenance']['old_chat']='Elimina log di chat piu\' vecchi di';
$MESSAGE['interface']['administration']['maintenance']['old_messages']='Elimina messaggi piu\' vecchi di';
$MESSAGE['interface']['administration']['maintenance']['old_messages_info']='Saranno cancellati anche i backup dei messaggi.';
$MESSAGE['interface']['administration']['maintenance']['missing']='Elimina i personaggi che non effettuano il login da piu\' di';
$MESSAGE['interface']['administration']['maintenance']['missing_info']='Non sara\'� possibile ripristinarli.';
$MESSAGE['interface']['administration']['maintenance']['deleted']='Elimina i personaggi provvisoriamente cancellati';
$MESSAGE['interface']['administration']['maintenance']['deleted_info']='Non sara\'� piu\' possibile ripristinarli.';
$MESSAGE['interface']['administration']['maintenance']['blacklisted']='Cancella la blacklist';
$MESSAGE['interface']['administration']['maintenance']['blacklisted_info']='';
$MESSAGE['interface']['administration']['maintenance']['months']='mesi';
/*Log*/
$MESSAGE['interface']['administration']['log']['events']['page_name']='Log eventi';
$MESSAGE['interface']['administration']['log']['events']['link']['back']='Torna alla scelta del log...';
$MESSAGE['interface']['administration']['log']['events']['author']='Autore';
$MESSAGE['interface']['administration']['log']['events']['dest']='Soggetto';
$MESSAGE['interface']['administration']['log']['events']['date']='Data';
$MESSAGE['interface']['administration']['log']['events']['descr']='Informazioni';
$MESSAGE['interface']['administration']['log']['messages']['page_name']='Log messaggi';
$MESSAGE['interface']['administration']['log']['messages']['link']['back']='Torna alla selezione mittente...';
$MESSAGE['interface']['administration']['log']['messages']['dest']='Destinatario';
$MESSAGE['interface']['administration']['log']['messages']['date']='Data';
$MESSAGE['interface']['administration']['log']['messages']['text']='Testo';
$MESSAGE['interface']['administration']['log']['chat']['page_name']='Log chat';
$MESSAGE['interface']['administration']['log']['chat']['log_by_user']='Log chat utente';
$MESSAGE['interface']['administration']['log']['chat']['log_by_room']='Log chat luogo';
$MESSAGE['interface']['administration']['log']['chat']['begin']='Ora inizio';
$MESSAGE['interface']['administration']['log']['chat']['end']='Ora fine';
$MESSAGE['interface']['administration']['log']['chat']['date']='Data';
$MESSAGE['interface']['administration']['log']['chat']['text']='Testo';
$MESSAGE['interface']['administration']['log']['chat']['room']='Luogo';
$MESSAGE['interface']['administration']['log']['chat']['sender']='Luogo';
/********** Pagine del menu' utente *********/
/*Cambio pass*/
$MESSAGE['interface']['user']['pass']['page_name']='Cambio password';
$MESSAGE['interface']['user']['pass']['email']='Inserire la E-Mail di registrazione per conferma';
$MESSAGE['interface']['user']['pass']['new']='Inserire la nuova password';
$MESSAGE['interface']['user']['pass']['force']='Cambia password ad un account';
$MESSAGE['interface']['user']['pass']['submit']['user']='Salva';
$MESSAGE['interface']['user']['pass']['change_to']='Cambia a...';
/*Cancella account*/
$MESSAGE['interface']['user']['delete']['page_name']='Cancella account';
$MESSAGE['interface']['user']['delete']['email']='Inserire la E-Mail di registrazione per conferma';
$MESSAGE['interface']['user']['delete']['pass']='Inserire la password per conferma';
$MESSAGE['interface']['user']['delete']['force']='Cancella un account';
$MESSAGE['interface']['user']['delete']['who']='Cancella...';
$MESSAGE['interface']['user']['delete']['deleted']='Cancellato';
$MESSAGE['interface']['user']['delete']['undeleted']='Ripristinato';
$MESSAGE['interface']['user']['get_back']['force']='Ripristina un account';
$MESSAGE['interface']['user']['get_back']['who']='Ripristina...';
/*Cambio nome*/
$MESSAGE['interface']['user']['name']['page_name']='Cambio nome';
$MESSAGE['interface']['user']['name']['email']='Inserire la EMail di registrazione per conferma';
$MESSAGE['interface']['user']['name']['pass']='Inserire la password';
$MESSAGE['interface']['user']['name']['new']='Inserire il nuovo nome';
$MESSAGE['interface']['user']['name']['force']='Cambia nome';
$MESSAGE['interface']['user']['name']['submit']['user']='Salva';
$MESSAGE['interface']['user']['name']['change_to']='Cambia a...';
/*Elenco razze*/
$MESSAGE['interface']['user']['races']['page_name']='Elenco';
$MESSAGE['interface']['user']['races']['bonus']='Bonus';
/*Comune*/
$MESSAGE['interface']['user']['link']['back']='Indietro...';
/*Statistiche*/
$MESSAGE['interface']['user']['stats']['page_name']="Statistiche";
$MESSAGE['interface']['user']['stats']['creation_date']="Attivo dal";
$MESSAGE['interface']['user']['stats']['characters']="Personaggi registrati";
$MESSAGE['interface']['user']['stats']['exiled']="Personaggi esiliati";
//masters
//admins
$MESSAGE['interface']['user']['stats']['topics']="Post questa settimana";
$MESSAGE['interface']['user']['stats']['last_chat']="Azioni questa settimana";
$MESSAGE['interface']['user']['stats']['last_characters']="Iscritti questa settimana";
$MESSAGE['interface']['user']['stats']['character']="Personaggio";
$MESSAGE['interface']['user']['stats']['date']="Registrato il";
$MESSAGE['interface']['user']['stats']['date_end']="Esiliato fino al";
$MESSAGE['interface']['user']['stats']['why']="Motivo";
$MESSAGE['interface']['user']['stats']['link']['back']="Torna alle statistiche...";



/*Installer*/
$MESSAGE['installer']['install']="Esegui l\'installazione automatica";



/********** MESSAGGI DI ERRORE **********/
$MESSAGE['error']['db_not_found']='Impossibile trovare il database, verificare l\'installazione di GDRCD.';
$MESSAGE['error']['db_empty']='Il database non contiene tabelle, e\' necessario effettuare l\'installazione';
$MESSAGE['error']['db_not_updated']='E\' stata rilevata l\'installazione di Mr Fabers GDRCD5, per aggiornare il database e renderlo compatibile proseguire cliccando sul link sottostante';
$MESSAGE['error']['can_t_load_frame']='Impossibile caricare la pagina.';
$MESSAGE['error']['can_t_find_any_map']='Nessuna mappa esistente.';
$MESSAGE['error']['session_expired']='La tua sessione e\' scaduta o non hai effettuato il login.';
$MESSAGE['error']['location_doesnt_exist']='Questo luogo non esiste o e\' stato cancellato da poco.';
$MESSAGE['error']['unknown_character_sheet']='Non e\' stato specificato il none del PG oppure il PG non esiste.';
$MESSAGE['error']['unknown_operation']='Operazione richiesta sconosciuta.';
$MESSAGE['error']['access_denied']='Accesso negato';
$MESSAGE['error']['not_allowed']='Non disponi dei permessi per accedere a questa pagina.';
$MESSAGE['error']['existing_name']='Nome gia\' in uso.';
/* Errori di login*/
$MESSAGE['error']['unknown_username']='Nome o password non riconosciuti.';
$MESSAGE['error']['unknown_username_details']='Eseguire di nuovo la procedura di login.';
$MESSAGE['error']['unknown_username_failure_count']='Fallimento numero:';
$MESSAGE['error']['unknown_username_warning']='Con 10 fallimenti consecutivi sara\' interdetto l\'accesso dalla postazione corrente.';




/********** INFORMAZIONI E SUGGERIMENTI **********/
$MESSAGE['warning']['blacklisted']='ATTENZIONE - Questa postazione e\' stata esclusa dal gioco, se ritieni che cio\' sia stato fatto senza valida motivazione contatta lo Staff alla e-mail presente nella Homepage.';


/** * Messaggio visualizzato in caso di connessioni multiple con lo stesso pg
	* @author Blancks
*/
$MESSAGE['warning']['double_connection']='Il personaggio con cui stai tentando l\'accesso in land e\' gia\' connesso. Se non sei uscito correttamente usando il tasto ESCI dovrai aspettare circa 5 minuti prima di poter accedere nuovamente.';

/** * Messaggio di avviso che è tempo di cambiare password perchè passati 6 mesi
	* @author Blancks
*/
$MESSAGE['warning']['changepass']='Attenzione: sono passati piu\' di sei mesi dal tuo ultimo cambio di password. Per la tua sicurezza lo staff ti consiglia di cambiare la password il prima possibile. NB: lo staff non ti chieder� la password per nessun motivo, quindi non cederla a nessuno.';
$MESSAGE['warning']['changepass_signup']='Attenzione: per la tua sicurezza, lo staff di gioco ti consiglia di sostituire la password generata automaticamente in fase di iscrizione. I membri dello staff non chiederanno mai la tua password, ci raccomandiamo che tu non la ceda a nessuno.';


$MESSAGE['warning']['mailto']='Per richiedere assistenza contattare un membro interno del gioco o scrivere all\'indirizzo e-mail gloryofancient@hotmail.it';
$MESSAGE['warning']['please_login_again']='Per effettuare un nuovo login torna alla ';
$MESSAGE['warning']['modified']='Modifica eseguita';
$MESSAGE['warning']['inserted']='Inserimento eseguito';
$MESSAGE['warning']['done']='Operazione eseguita';
$MESSAGE['warning']['deleted']='Cancellazione eseguita';
$MESSAGE['warning']['buyed']='Oggetto acquisito';
$MESSAGE['warning']['sold']='Oggetto ceduto';
$MESSAGE['warning']['cant_do']='Impossibile eseguire';
$MESSAGE['warning']['unactive']='La funzione richiesta non e\' attiva. Per attivare, modificare il file config.inc.php.';
$MESSAGE['warning']['character_exiled']='e\' stato esiliato fino al';
$MESSAGE['warning']['pass_not_encripted'] = '** ATTENZIONE ** sul database sono state rivelate password non criptate mentre nel foglio di configurazione di GDRCD5.1 è attualmente settato su ON l\'encript delle password, mediante l\'algoritmo ' . $PARAMETERS['mode']['encriptalgorithm'] . '. Proseguendo tutte le password verranno criptate, il processo è IRREVERSIBILE. Se non vuoi che le password vengano criptate disabilita l\'encript delle password da config.inc.php';

/** * messaggio di errore per media non consentito
	* @author Blancks
*/
$MESSAGE['warning']['media_not_allowed']='Il formato del file audio non e\' consentito, i formati consentiti sono: ';

foreach ($PARAMETERS['settings']['audiotype'] as $MESSAGE_MEDIA_EXT => $MESSAGE_MEDIA_MIME)
		$MESSAGE['warning']['media_not_allowed'] .= $MESSAGE_MEDIA_EXT . ' ';




/********** Status del PG ***********/
$MESSAGE['status_pg']['enter']='giunge';
$MESSAGE['status_pg']['exit']='si allontana';
$MESSAGE['status_pg']['logged']='';
$MESSAGE['status_pg']['exausted']='Non puoi compiere quest\'azione, la tua salute e\' troppo bassa.';
$MESSAGE['status_pg']['availability'][0]='Non posso giocare';
$MESSAGE['status_pg']['availability'][1]='Posso giocare';
$MESSAGE['status_pg']['availability'][2]='Occupato';
$MESSAGE['status_pg']['gender']['m']='Maschio';
$MESSAGE['status_pg']['gender']['f']='Femmina';
$MESSAGE['status_pg']['invisible'][0]='Visibile';
$MESSAGE['status_pg']['invisible'][1]='Dovunque';




/********** Chat **********/
$MESSAGE['chat']['type']['info']='Tipo';
$MESSAGE['chat']['type'][0]='Parlato';
$MESSAGE['chat']['type'][1]='Azione';
$MESSAGE['chat']['type'][2]='Master';
$MESSAGE['chat']['type'][3]='PNG';
$MESSAGE['chat']['type'][4]='Sussurro';
$MESSAGE['chat']['type'][5]='Invita';
$MESSAGE['chat']['type'][6]='Caccia';
$MESSAGE['chat']['type'][7]='Elenco';
$MESSAGE['chat']['warning']['invited']='invitato';
$MESSAGE['chat']['warning']['expelled']='escluso';
$MESSAGE['chat']['warning']['list']='Ospiti';
$MESSAGE['chat']['warning']['invited_message']='ti ha inoltrato un invito per';
$MESSAGE['chat']['tag']['info']['tag']='Tag';
$MESSAGE['chat']['tag']['info']['png']='/PNG';
$MESSAGE['chat']['tag']['info']['dst']='/Dest.';
$MESSAGE['chat']['tag']['info']['msg']='Messaggio/Azione';
$MESSAGE['chat']['whisper']['no']='non e\' presente';
$MESSAGE['chat']['whisper']['privat']='Chat riservata';
$MESSAGE['chat']['whisper']['to']='Hai sussurrato a';
$MESSAGE['chat']['whisper']['by']='ti sussurra';
$MESSAGE['chat']['whisper']['from_to']='sussurra a';
$MESSAGE['chat']['commands']['skills']='';
$MESSAGE['chat']['commands']['stats']='';
$MESSAGE['chat']['commands']['dice']='Tenta la sorte';
$MESSAGE['chat']['commands']['item']='Utilizza';
$MESSAGE['chat']['commands']['use_skills']['uses']='Utilizza';
$MESSAGE['chat']['commands']['use_skills']['die']='dado';
$MESSAGE['chat']['commands']['use_skills']['ramk']='grado';
$MESSAGE['chat']['commands']['use_skills']['items']='oggetti';
$MESSAGE['chat']['commands']['use_skills']['sum']='totale';
$MESSAGE['chat']['commands']['die']['cast']='tenta la sorte - da 1 a ';
$MESSAGE['chat']['commands']['die']['sum']='ottenendo:';
$MESSAGE['chat']['commands']['die']['item']='utilizza';




/********** Eventi **********/
$MESSAGE['event'][BLOCKED]='Postazioni bloccate';
$MESSAGE['event'][LOGGEDIN]='Log in';
$MESSAGE['event'][ACCOUNTMULTIPLO]='Doppi';
$MESSAGE['event'][ERRORELOGIN]='Log in errati';
$MESSAGE['event'][BONIFICO]='Transazioni tra PG';
$MESSAGE['event'][NUOVOLAVORO]='Assunzioni';
$MESSAGE['event'][DIMISSIONE]='Dimissioni';
$MESSAGE['event'][CHANGEDROLE]='Cambio permessi';
$MESSAGE['event'][CHANGEDPASS]='Cambio password';
$MESSAGE['event'][PX]='Esperienza assegnata';
$MESSAGE['event'][DELETEPG]='Personaggi cancellati';
$MESSAGE['event'][CHANGEDNAME]='Cambi nome';




/********** Ricorrenti **********/
/*Forms */
$MESSAGE['interface']['forms']['modify']='Modifica';
$MESSAGE['interface']['forms']['submit']='Invia';
$MESSAGE['interface']['forms']['cancel']='Annulla';
$MESSAGE['interface']['forms']['delete']='Elimina';
$MESSAGE['interface']['forms']['save']='Salva';
/*Paginatore*/
$MESSAGE['interface']['pager']['pages_name']='Pagine';
/*Help*/
$MESSAGE['interface']['help']['bbcode']='BBCode: [b]Bold[/b], [i]Italic[/i], [u]Sottolineato[/u], [color=colore]Colorato[/color], [img]Indirizzo-immagine[/img].';