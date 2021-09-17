<?php
class ModelExtensionModuleBnitLanguage extends Model {
	
	public function islanguageinstalledbycode($lang = 'it-it') {
		$query = $this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "language` WHERE `code` = '" . $this->db->escape($lang) . "';");
		return $query->row['total'];
	}
	
	public function installationtype($lang = 'it-it') {
		$query = $this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "language` WHERE `code` = '" . $this->db->escape($lang) . "';");
		return $query->row['total'];
	}
	
	
	public function detectlanguageinstallation() {
		$detection = 0;
		/*	roughly detecting the base installation */
		$query = $this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "tax_rate` WHERE `name` = 'IVA (22.0%)';");
		if($query->row['total'] >0) { $detection = 1; }

		/*	roughly detecting the extra translations */
		$query = $this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "layout` WHERE `name` = 'Pagina Iniziale';");
		if($query->row['total'] >0) { $detection = 2; }
		
		return $detection;
	}
	//end of function detectlanguageinstallation

	
	public function sqlinstall($selection = 0) {
		$sql = '';
			
		//the selection can be only 0/empty or 1/anyvalidvalue
		$selection = empty($selection) ? 0 : intval($selection);
		
		
		if($selection > 2) { return false;}
		
		
		/*
		0 - main Italian sql queries
		1 - EXTRA Italian sql queries
		2 - delete italian language
		*/


		//main Italian sql queries
		$sqlsel[0] = "/* Italian Language */

INSERT INTO `oc_language` (`name`, `code`, `locale`, `image`, `directory`, `sort_order`, `status`) VALUES ('Italiano', 'it-it', 'it_IT.UTF-8,it_IT,italian', 'it.png', 'it-it', 1, 1);


SET @languageid = (SELECT language_id FROM `oc_language` WHERE `code` = 'it-it');

/*--todo-- duplicate any existent oc_customer_group_description for with the italian language_id*/
INSERT INTO `oc_customer_group_description` (`customer_group_id`, `language_id`, `name`, `description`) VALUES (1, @languageid, 'Predefinito', 'Clienti');


INSERT INTO `oc_geo_zone` (`name`, `description`, `date_modified`, `date_added`) VALUES ('IVA - Italia', 'Zona - IVA Territorio Italiano', NOW(), NOW() );

SET @vatgeozoneita = (SELECT `geo_zone_id` FROM `oc_geo_zone` WHERE `name` = 'IVA - Italia');


INSERT INTO `oc_zone_to_geo_zone` (`country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES (105,	0, @vatgeozoneita,	NOW(), NOW() );


INSERT INTO `oc_tax_rate` ( `geo_zone_id`, `name`, `rate`, `type`, `date_added`, `date_modified`) VALUES (@vatgeozoneita, 'IVA (22.0%)', '22.0000', 'P', NOW(), NOW() );


SET @taxrateid = (SELECT tax_rate_id FROM `oc_tax_rate` WHERE `name` = 'IVA (22.0%)');

/*setting the VAT*/
INSERT INTO `oc_tax_rule` VALUES(null , 9, @taxrateid, 'shipping', 1);
INSERT INTO `oc_tax_rule` VALUES(null , 10, @taxrateid, 'shipping', 1);

/*assigning the IVA 22% to the customer groups*/
INSERT INTO `oc_tax_rate_to_customer_group` VALUES(@taxrateid, 1);

/*information translations*/
INSERT INTO `oc_information_description` SET `title` = 'Chi siamo', `description` = '&lt;p&gt;Chi siamo&lt;/p&gt;', `language_id` = @languageid, `information_id` = 4;
INSERT INTO `oc_information_description` SET `title` = 'Termini e condizioni', `description` = '&lt;p&gt;Termini e condizioni&lt;/p&gt;', meta_title= 'Termini e Condizioni E-Commerce', `meta_description` = 'Tutti i termini e condizioni della nostra attivit&agrave; di vendita.', `language_id` = @languageid, `information_id` = 5;
INSERT INTO `oc_information_description` SET `title` = 'Privacy e Cookie', `description` = '<div><h2>Nota Informativa ex art. 13 del D. Lgs. 196/2003</h2><p>I dati personali degli utenti forniti con la procedura di registrazione sono trattati in forma autorizzata.</p><p>Il responsabile del sito considera e tratta le informazioni sui dati personali che l&#39;Utente inserisce e diffonde tramite il Servizio, alla stregua della corrispondenza privata.</p><p>Il responsabile del sito pertanto, non controllerà, diffonderà autonomamente, né comunicherà tali informazioni, così come le informazioni relative all&#39;Utente, salvo quanto previsto nelle presenti note.</p><p>I dati personali dell&#39;Utente verranno trattati:</p><p>per la gestione, erogazione dei diversi servizi e per la relativa assistenza</p><p>per l&#39;elaborazione di analisi statistiche e di mercato</p><p>per l&#39;invio di comunicazioni relative a servizi e iniziative il responsabile del sito</p><p>per l&#39;invio di informazioni relative a servizi business-to-business e business-to consumer e sulle eventuali promozioni e/o servizi presentati sul sito. L&#39;Utente riconosce che il responsabile del sito potrà intervenire sulle predette informazioni, ove ritenga in buona fede che tale attività sia necessaria per:</p><p>a. conformarsi a prescrizioni di legge;</p><p>b. adeguarsi a un provvedimento legale, inclusa una disposizione dell&#39;Autorità Giudiziaria o di altra autorità competente;</p><p>c. far valere i propri diritti ai sensi delle presenti note;</p><p>d. difendersi da contestazioni di terzi che asseriscano che tali contenuti violano i loro diritti;</p><p>e. tutelare gli interessi del responsabile del sito o di terzi.</p><p>L&#39;Utente riconosce e concorda che il responsabile del sito potrà avere accesso alle informazioni o ai contenuti diffusi tramite il Servizio, in tutti i casi in cui tale accesso si renda necessario al fine di individuare o risolvere un problema tecnico, ovvero per rispondere a reclami relativi al Servizio.</p><p>L&#39;Utente riconosce e concorda che l&#39;elaborazione e il trattamento tecnico delle informazioni è o può rendersi necessario per:</p><p>f. inviare o ricevere tali dati;</p><p>g. eseguire le funzioni di pianificazione o programmazione;</p><p>h. conformarsi alle specifiche tecniche richieste dai network di connessione in rete;</p><p>i. conformarsi alle specifiche tecniche del Servizio.</p><p>Il responsabile del sito è autorizzato a trattare ed archiviare nei propri database il nominativo, il tipo di servizio, i resoconti dell&#39;attività di servizio ed altre informazioni dell&#39;Utente, che riguardino il presente Contratto o qualsiasi Servizio fornito in virtù di esso.</p><p>L&#39;Utente autorizza il trattamento da parte del responsabile del sito di tali dati per le finalità inerenti l&#39;esecuzione del presente Contratto e la prestazione dei servizi in esso contemplati.</p><p>Inoltre, ai sensi dell&#39;art. 7 del D. Lgs. 196/2003, l&#39;Utente autorizza il responsabile del sito all&#39;archiviazione, all&#39;elaborazione e alla comunicazione di dati relativi all&#39;Utente, con le seguenti finalità: servizio clienti (amministrazione, contabilità, gestione dei contratti, ordini, fatturazione, recupero crediti), marketing, promozione, analisi statistiche, indagini sulla soddisfazione della clientela, revisioni, archiviazione di dati storici, informazioni pre-contrattuali.</p></div><div><h2>I cookie</h2><h3>Cosa sono i Cookie</h3><p>I cookie sono piccoli file di testo memorizzati nel computer o nel dispositivo mobile dell´utente quando visita il nostro sito web.</p></div><div><h3>A cosa servono i Cookie</h3><p>I cookie sono da noi utilizzati per assicurare all´utente la migliore esperienza nel nostro sito.Questo sito utilizza i cookie, anche di terze parti, per inviare messaggi promozionali personalizzati.</p></div><div><h3>Tipologie di cookie</h3><p>I cookie sono categorizzati come segue:<ol><li>Cookie di sessione. Cookie automaticamente cancellati quando l&apos;utente chiude il browser.</li><li>Cookie persistenti. Cookie che restano memorizzati nel dispositivo dell´utente sino al raggiungimento di una determinata data di terminazione (in termini di minuti, giorni o anni dalla creazione/aggiornamento del cookie).</li><li>Cookie di terze parti. Cookie memorizzati per conto di soggetti terzi.</li></ol>E possibile controllare ed eliminare i singoli cookie utilizzando le impostazioni della maggior parte dei browser. Ciò, tuttavia, potrebbe impedire di utilizzare correttamente alcune funzioni del nostro sito web.<p>Per saperne di più è possibile fare riferimento a <a href=&quot;http://www.aboutcookies.org&quot; rel=&quot;nofollow&quot;>www.aboutcookies.org</a> o <a href=&quot;http://www.allaboutcookies.org.&quot; rel=&quot;nofollow&quot;>www.allaboutcookies.org.</a></p></div>', `language_id`= @languageid, `information_id`= 3;
INSERT INTO `oc_information_description` SET `title`= 'Info Spedizioni', `description`= '<h3>Costi Spedizione & Tempi</h3><span>Alcuni metodi di spedizione offerti sono &#34;tracciabili&#34; e, quindi, possono essere costantemente seguiti durante le varie tappe della spedizione. Questo servizio, però, non è disponibile per tutti gli ordini. Avrete la possibilità di scegliere il metodo di spedizione del vostro pacco direttamente sulla pagina degli acquisti.</span></p><p>Gli ordini effettuati vengono normalmente consegnati il giorno lavorativo successivo a quello dell&#39;ordine.Le spedizioni all&#39;interno dell&#39;UE possono richiedere oltre 7 giorni lavorativi. Le spedizione verso i paesi extra-UE possono richiedere oltre 2 settimane.</p><p><span>Gli ordini che vengono spediti con nr di Tracking tendono ad arrivare con maggiore velocit&agrave;.Appena il collo viene consegnato al corriere riceverete un numero di Tracking che vi fornirà dettagli sulla situazione della consegna.</span></p><h3>Esclusione di responsabilità:</span></h3><p><span>1. L\&#39;obiettivo principale &egrave; di garantire che l&#39;ordine arrivi a destinazione il prima possibile. Sono però i clienti e/o destinatari ad assumersi la responsabilità, al momento dell&#39;acquisto, dei prodotti ricevuti e dei dettagli di consegna forniti (controllare sempre che siano corretti).</span></p><p><span>2. Non &egrave; possibile assumerci nessuna responsabilità per eventuali perdite sostenute dal cliente o dal destinatario, in termini di spese di trasporto non rimborsabili e/o costi aggiuntivi per la consegna della merce o per la sostituzione di questa.</span></p><p><span>3. Nel caso in cui riceviate un articolo errato o danneggiato, vi invitiamo a contattarci telefonicamente o via email entro tre giorni dalla data di ricezione dell&#39;ordine, preferibilmente con una fotografia del pacco e del suo contenuto.</span></span></p><p><span> Si prega di non rimandare prodotti senza prima averci contattato ed aver ricevuto un numero RMA.</span></span></p><p><span> I rimborsi sono possibili, da parte dello spedizioniere, se con spedizione assicurata. I costi per la spedizione di partenza e il dazio per l&#39;importazione non sono rimborsabili. Stesso discorso vale per i costi sostenuti per il reso e per l&#39;assicurazione dell&#39;articolo, salvo accordi diversi.</span></p><p><span> Come già riportato in &#34;Termini &amp; Condizioni&#34; la responsabilità è a carico del cliente/destinatario una volta che l&#39;ordine viene spedito.</span></p>', `language_id`= @languageid, `information_id`= 6;



INSERT INTO `oc_voucher_theme_description` (`voucher_theme_id`, `language_id`, `name`) VALUES(6, @languageid, 'Natale'),(7, @languageid, 'Compleanno'),(8, @languageid, 'Generale');
INSERT INTO `oc_stock_status` (`stock_status_id`, `language_id`, `name`) VALUES(7, @languageid, 'Disponibile'),(8, @languageid, 'Su Ordinazione'),(5, @languageid, 'Non disponibile'),(6, @languageid, 'In 2-3 Giorni');
INSERT INTO `oc_return_status` (`return_status_id`, `language_id`, `name`) VALUES(1, @languageid, 'In lavorazione'),(3, @languageid, 'Completato'),(2, @languageid, 'In attesa del prodotto');
INSERT INTO `oc_return_reason` (`return_reason_id`, `language_id`, `name`) VALUES(1, @languageid, 'Arrivato Danneggiato (DOA)'),(2, @languageid, 'Ricevuto prodotto Errato'),(3, @languageid, 'Errore Ordine'),(4, @languageid, 'Difettoso. Si prega di fornire dettagli'),(5, @languageid, 'Altro. Si prega di fornire dettagli');
INSERT INTO `oc_return_action` (`return_action_id`, `language_id`, `name`) VALUES(1, @languageid, 'Rimborsato'),(2, @languageid, 'Credito Inviato'),(3, @languageid, 'Sostituzione Inviata');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES(2, @languageid, 'In Lavorazione'),(3, @languageid, 'Spedito'),(7, @languageid, 'Cancellato'),(5, @languageid, 'Completato'),(8, @languageid, 'Negato'),(9, @languageid, 'Restituzione Cancellata'),(10, @languageid, 'Fallito'),(11, @languageid, 'Rimborsato'),(12, @languageid, 'Restituito'),(13, @languageid, 'Chargeback'),(1, @languageid, 'In corso'),(16, @languageid, 'Annullato'),(15, @languageid, 'Processato'),(14, @languageid, 'Scaduto');

INSERT INTO `oc_length_class_description` (`length_class_id`, `language_id`, `title`, `unit`) VALUES (1, @languageid, 'Centimetri', 'cm'), (2, @languageid, 'Millimetri', 'mm'), (3, @languageid, 'Pollici', 'in');
INSERT INTO `oc_weight_class_description` (`weight_class_id`, `language_id`, `title`, `unit`) VALUES (1, @languageid, 'Chilogrammi', 'kg'), (2, @languageid, 'Grammi', 'g'), (5, @languageid, 'Libbre ', 'lb'), (6, @languageid, 'Once', 'oz');


INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('1', @languageid, 'Bottoni Circolari');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('2', @languageid, 'Casella di Controllo');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('4', @languageid, 'Testo');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('6', @languageid, 'Area di Testo');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('8', @languageid, 'Data');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('7', @languageid, 'File');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('5', @languageid, 'Selezioni');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('9', @languageid, 'Ora');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('10', @languageid, 'Data e Ora');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('12', @languageid, 'Data di Consegna');
INSERT INTO `oc_option_description`(`option_id`, `language_id`, `name`) VALUES ('11', @languageid, 'Dimensioni');
	
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('43', @languageid, '1', 'Largo');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('32', @languageid, '2', 'Piccolo');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('45', @languageid, '2', 'Checkbox 4');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('44', @languageid, '1', 'Checkbox 3');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('31', @languageid, '5', 'Medio');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('42', @languageid, '5', 'Giallo');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('41', @languageid, '5', 'Verde');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('39', @languageid, '5', 'Rosso');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('40', @languageid, '5', 'Blu');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('23', @languageid, '2', 'Checkbox 1');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('24', @languageid, '2', 'Checkbox 2');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('48', @languageid, '11', 'Largo');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('47', @languageid, '11', 'Medio');
INSERT INTO `oc_option_value_description`(`option_value_id`, `language_id`, `option_id`, `name`) VALUES ('46', @languageid, '11', 'Piccolo');



/*duplicating descriptionS from the languange id 1. In most cases it's the default english language
there's NO TRANSLATION 
*/
INSERT INTO `oc_attribute_description`(`attribute_id`, `name`, `language_id`) (SELECT `attribute_id`, `name`, @languageid FROM `oc_attribute_description` WHERE language_id = 1);
INSERT INTO `oc_attribute_group_description`(`attribute_group_id`, `name`, `language_id`) (SELECT `attribute_group_id`, `name`, @languageid FROM `oc_attribute_group_description` WHERE language_id = 1);
INSERT INTO `oc_category_description`(`category_id`, `name`, `description`, `meta_description`, `meta_keyword`, `language_id`) (SELECT `category_id`, `name`, `description`, `meta_description`, `meta_keyword`, @languageid FROM `oc_category_description` WHERE language_id = 1);
INSERT INTO `oc_product_attribute`(`product_id`, `attribute_id`, `language_id`, `text`) (SELECT `product_id`, `attribute_id`, @languageid, `text` FROM `oc_product_attribute` WHERE language_id = 1);
INSERT INTO `oc_product_description`(`product_id`, `language_id`, `name`, `description`, `meta_description`, `meta_keyword`, `tag`) (SELECT `product_id`, @languageid, `name`, `description`, `meta_description`, `meta_keyword`, `tag` FROM `oc_product_description` WHERE language_id = 1);
INSERT INTO `oc_banner_image`(`banner_id`, `language_id`, `title`, `link`, `image`, `sort_order`) (SELECT `banner_id`, @languageid, `title`, `link`, `image`, `sort_order` FROM `oc_banner_image` WHERE language_id = 1);




/*updating eventual TEST items Descriptions for our language (italian)
since we have already duplicated them from the english language (with language_id 1).
We avoid direct *insert* since it's possible that who is installing doesn't have a fresh installation
and probably we are going to add only garbage. This part is facultative and the updates will be skipped if the exact names will not be available.
--DO NOT ADD to extra.sql--
*/
UPDATE IGNORE `oc_category_description` SET `name` = 'Schermi', `description` =  'Schermi per computer'  WHERE `language_id` = @languageid AND `name` = 'Monitor';
UPDATE IGNORE `oc_category_description` SET `name` = 'Scanner', `description` =  'Scanner per ottenere il massimo dai propri documenti in minor tempo possibile'  WHERE `language_id` = @languageid AND `name` = 'Scanners';
UPDATE IGNORE `oc_category_description` SET `name` = 'Componenti', `description` =  'Il meglio dei componenti per Computer' WHERE `language_id` = @languageid AND `name` = 'Components';
UPDATE IGNORE `oc_category_description` SET `name` = 'Telefoni e Smartphone', `description` =  'La telefonia ai prezzi migliori sul mercato' WHERE `language_id` = @languageid AND `name` = 'Phones &amp; PDAs';
UPDATE IGNORE `oc_category_description` SET `name` = 'Lettori MP3', `description` =  'I lettori mp3 ai prezzi migliori sul mercato' WHERE `language_id` = @languageid AND `name` = 'MP3 Players';
UPDATE IGNORE `oc_category_description` SET `name` = 'Portatili', `description` =  'I portatili ai prezzi migliori sul mercato' WHERE `language_id` = @languageid AND `name` = 'Laptops &amp; Notebooks';
UPDATE IGNORE `oc_category_description` SET `name` = 'Tablet', `description` =  'Tablet di ultima generazione' WHERE `language_id` = @languageid AND `name` = 'Tablets';
UPDATE IGNORE `oc_category_description` SET `name` = 'Macchine Fotografiche', `description` =  'Macchine fotografiche di ultima generazione' WHERE `language_id` = @languageid AND `name` = 'Cameras';
UPDATE IGNORE `oc_category_description` SET `name` = 'WebCam', `description` =  'Webcam per le tue videochiamate'  WHERE `language_id` = @languageid AND `name` = 'Web Cameras';
UPDATE IGNORE `oc_category_description` SET `name` = 'Stampanti', `description` =  'I prodotti migliori per la stampa.'  WHERE `language_id` = @languageid AND `name` = 'Printers';
UPDATE IGNORE `oc_category_description` SET `name` = 'Mouse', `description` =  'Mouse per ogni esigenza.'  WHERE `language_id` = @languageid AND `name` = 'Mice and Trackballs';
UPDATE IGNORE `oc_category_description` SET `name` = 'PC da Tavolo', `description` =  'I PC da tavolo per qualsiasi esigenza'  WHERE `language_id` = @languageid AND `name` = 'Desktops';

/* extension update - adding the extension to the first user group*/
UPDATE `oc_user_group` SET `permission` = REPLACE(`permission`, 'user\\/user_permission', 'user\\/user_permission\",\"extension\\/module\\/bnit_language') WHERE `user_group_id` =  1  AND `permission` NOT LIKE '%extension\\\\/module\\\\/bnit_language%';

/* Adding the Extension for the italian language */ 
INSERT INTO `oc_extension` (`type`, `code`) SELECT * FROM (SELECT 'module', 'bnit_language') AS tmp WHERE NOT EXISTS ( SELECT * FROM `oc_extension` where `type` =  'module'  AND `code` = 'bnit_language' );

/* Adding the settings for the extension */ 
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) SELECT * FROM (SELECT '0' as `tcode`, 'module_bnit_language', 'module_bnit_language_statuslang', '1' as  `tvalue`, '0' as `tserialized`) AS tmp WHERE NOT EXISTS ( SELECT * FROM `oc_setting` where `code` =  'module_bnit_language'  AND `key` = 'module_bnit_language_statuslang' );
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) SELECT * FROM (SELECT '0' as `tcode`, 'module_bnit_language', 'module_bnit_language_version', '0.0.3' as `tvalue`, '0' as `tserialized`) AS tmp WHERE NOT EXISTS ( SELECT * FROM `oc_setting` where `code` =  'module_bnit_language'  AND `key` = 'module_bnit_language_version' );
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) SELECT * FROM (SELECT '0' as `tcode`, 'module_bnit_language', 'module_bnit_language_status', '1' as `tvalue`, '0' as `tserialized` ) AS tmp WHERE NOT EXISTS ( SELECT * FROM `oc_setting` where `code` =  'module_bnit_language'  AND `key` = 'module_bnit_language_status' );

/* end of extension update */
";

		//EXTRA Italian sql queries
		$sqlsel[1] = "/*
NOTE: this part is facultative and not suggested for NON-italian opencart stores.
*/


/* updating the main settings*/
/*fixing default invoice name without the 2013 (The year can be added/fixed with a module)*/
UPDATE `oc_setting` SET `value` = 'INV' WHERE `key` = 'config_invoice_prefix';
UPDATE `oc_setting` SET `value` = 'it-it' WHERE `key` = 'config_language';
UPDATE `oc_setting` SET `value` = 'it-it' WHERE `key` = 'config_admin_language';
UPDATE `oc_setting` SET `value` = 'Proprietario' WHERE `key` = 'config_owner';
UPDATE `oc_setting` SET `value` = 'Negozio' WHERE `key` = 'config_store';
UPDATE `oc_setting` SET `value` = 'Negozio' WHERE `key` = 'config_name';
UPDATE `oc_setting` SET `value` = 'Negozio' WHERE `key` = 'config_meta_title';
UPDATE `oc_setting` SET `value` = 'Negozio' WHERE `key` = 'config_title';
UPDATE `oc_setting` SET `value` = 'vendita, prodotti, ecommerce' WHERE `key` = 'config_meta_keyword';
UPDATE `oc_setting` SET `value` = 'Negozio' WHERE `key` = 'config_meta_description';
UPDATE `oc_setting` SET `value` = 'Indirizzo azienda' WHERE `key` = 'config_address'; 
/*Italy = 105*/
UPDATE `oc_setting` SET `value` = '105' WHERE `key` = 'config_country_id'; 
/* id of the city - `value` = '3924' if you want to add Rome*/ 
UPDATE `oc_setting` SET `value` = '3852' WHERE `key` = 'config_zone_id';

UPDATE `oc_tax_class` SET `title` = 'Prodotti Tassabili', `description` = 'Prodotti Tassabili' WHERE `tax_class_id` = '9';
UPDATE `oc_tax_class` SET `title` = 'Prodotti Scaricabili', `description` = 'Prodotti Scaricabili' WHERE `tax_class_id` = '10';

/*deleting default UK taxes from the rules. In most cases they are not needed for italian taxation only*/
DELETE FROM `oc_tax_rule` WHERE `tax_rate_id` = 86 OR `tax_rate_id` = 87;


UPDATE `oc_layout` SET `name` = 'Pagina Iniziale' WHERE `layout_id` = '1';
UPDATE `oc_layout` SET `name` = 'Prodotti' WHERE `layout_id` = '2';
UPDATE `oc_layout` SET `name` = 'Categorie' WHERE `layout_id` = '3';
UPDATE `oc_layout` SET `name` = 'Predefinito' WHERE `layout_id` = '4';
UPDATE `oc_layout` SET `name` = 'Produttori' WHERE `layout_id` = '5';
UPDATE `oc_layout` SET `name` = 'Account' WHERE `layout_id` = '6';
UPDATE `oc_layout` SET `name` = 'Checkout' WHERE `layout_id` = '7';
UPDATE `oc_layout` SET `name` = 'Contatti' WHERE `layout_id` = '8';
UPDATE `oc_layout` SET `name` = 'Mappa del Sito' WHERE `layout_id` = '9';
UPDATE `oc_layout` SET `name` = 'Affiliati' WHERE `layout_id` = '10';
UPDATE `oc_layout` SET `name` = 'Informazioni' WHERE `layout_id` = '11';
UPDATE `oc_layout` SET `name` = 'Comparazione' WHERE `layout_id` = '12';
UPDATE `oc_layout` SET `name` = 'Ricerca' WHERE `layout_id` = '13';

/*changing the default coupon names */
UPDATE IGNORE `oc_coupon` SET name= 'Discount/Sconto -10%' WHERE coupon_id=4;
UPDATE IGNORE `oc_coupon` SET name= 'Discount/Sconto free shipping/spedizione gratuita' WHERE coupon_id=5;
UPDATE IGNORE `oc_coupon` SET name= 'Discount/Sconto -10 &euro;' WHERE coupon_id=6;



/*extra stuff that is NOT related to the language*/

/*
Disabling any currency except the euro.
In most cases we will use only our own currency if we are selling within italy or europe.

Pound, Dollar and Euro are, by default, already available and Enabled.
If you are using my sql as reference for your own language remember thay you need
to INSERT your currency if it's not EUR, USD or GBP.
*/
UPDATE `oc_currency` SET `status` = '0' WHERE `code` != 'EUR';

/* setting EUR to 1.00000 */
UPDATE `oc_currency` SET `value` = '1.00000000' WHERE `code` = 'EUR';

/* setting exchange EUR > GBP - 2016-02-22*/
UPDATE `oc_currency` SET `value` = '0.78079998' WHERE `code` = 'GBP';

/* setting exchange EUR > USD - 2016-02-22 */
UPDATE `oc_currency` SET `value` = '1.10889995' WHERE `code` = 'USD';

/* disabling automatic currency - in most cases we will handle 1 currency only and there's no need to update the currencies */
UPDATE `oc_setting` SET `value` = '0' WHERE `key` = 'config_currency_auto';

/* setting currency to euro */
UPDATE `oc_setting` SET `value` = 'EUR' WHERE `key` = 'config_currency';


/* Affiliates needs approval - in most cases we don't use the affiliation */
UPDATE `oc_setting` SET `value` = '1' WHERE `key` = 'config_affiliate_approval';

/* We allow to upload data up to 25MB instead of 300kb */
UPDATE `oc_setting` SET `value` = '25000000' WHERE `key` = 'config_file_max_size';

/* do not show weight in the cart */
UPDATE `oc_setting` SET `value` = '0' WHERE `key` = 'config_cart_weight';

/* checkout for guests */
UPDATE `oc_setting` SET `value` = '0' WHERE `key` = 'config_checkout_guest';

/*replacing the John Doe firstname and lastname with something generic */
UPDATE IGNORE `oc_user` SET `firstname` = 'Utente',  `lastname` = 'Admin'  WHERE `firstname` = 'John' AND `lastname` = 'Doe' ;

/*replacing the names of the user groups */
UPDATE IGNORE `oc_user_group` SET `name` = 'Amministratore' WHERE `name` = 'Administrator';
UPDATE IGNORE `oc_user_group` SET `name` = 'Collaboratore' WHERE `name` = 'Demonstration';

/*changing the default customer group description to avoid the -test- for the ENGLISH language*/
UPDATE IGNORE `oc_customer_group_description` SET `description`= 'Customers' where `description` = 'test' AND `language_id` = 1 AND `customer_group_id` = 1;


/*Updating the language installation statuts for the italian language Extension*/ 
UPDATE `oc_setting` SET `value` = '2' where `code` =  'module_bnit_language'  AND `key` = 'module_bnit_language_statuslang';


/* end of Italian Language Extra */";

	// delete the previous installation
	$sqlsel[2] = "
SET @languageid = (SELECT language_id FROM `oc_language` WHERE `code` = 'it-it');

DELETE FROM `oc_customer_group_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_information_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_voucher_theme_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_stock_status` WHERE `language_id` = @languageid;
DELETE FROM `oc_return_status` WHERE `language_id` = @languageid;
DELETE FROM `oc_return_reason` WHERE `language_id` = @languageid;
DELETE FROM `oc_return_action` WHERE `language_id` = @languageid;
DELETE FROM `oc_order_status` WHERE `language_id` = @languageid;
DELETE FROM `oc_length_class_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_weight_class_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_option_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_option_value_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_attribute_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_attribute_group_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_category_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_product_attribute` WHERE `language_id` = @languageid;
DELETE FROM `oc_product_description` WHERE `language_id` = @languageid;
DELETE FROM `oc_banner_image` WHERE `language_id` = @languageid;
/*resetting the customer language to english*/
UPDATE IGNORE `oc_customer` SET `language_id` = '1' WHERE `language_id` = @languageid;
DELETE FROM `oc_language` where `code` = 'it-it';


SET @vatgeozoneita = (SELECT `geo_zone_id` FROM `oc_geo_zone` WHERE `name` = 'IVA - Italia');
DELETE FROM `oc_zone_to_geo_zone` WHERE `geo_zone_id` = @vatgeozoneita;
DELETE FROM `oc_tax_rate` WHERE `geo_zone_id` = @vatgeozoneita;
DELETE FROM `oc_geo_zone` WHERE `geo_zone_id` = @vatgeozoneita;

SET @taxrateid = (SELECT `tax_rate_id` FROM `oc_tax_rate` WHERE `name` = 'IVA (22.0%)');
DELETE FROM `oc_tax_rule` WHERE `tax_rate_id` = @taxrateid;
DELETE FROM `oc_tax_rate_to_customer_group` WHERE `tax_rate_id` = @taxrateid;
DELETE FROM `oc_tax_rate` WHERE `tax_rate_id` = @taxrateid;

/*restoring from the Extra*/

/*reverting the settings*/
UPDATE `oc_setting` SET `value` = 'en-gb' WHERE `key` = 'config_language' AND `value` = 'it-it' ;
UPDATE `oc_setting` SET `value` = 'en-gb' WHERE `key` = 'config_admin_language' AND `value` = 'it-it' ;
UPDATE `oc_setting` SET `value` = 'Your Name' WHERE `key` = 'config_owner' AND `value` = 'Proprietario';
UPDATE `oc_setting` SET `value` = 'Your Store' WHERE `key` = 'config_store' AND `value` = 'Negozio';
UPDATE `oc_setting` SET `value` = 'Your Store' WHERE `key` = 'config_name' AND `value` = 'Negozio';
UPDATE `oc_setting` SET `value` = 'Your Store' WHERE `key` = 'config_meta_title' AND `value` = 'Negozio';
UPDATE `oc_setting` SET `value` = 'Your Store' WHERE `key` = 'config_title';
UPDATE `oc_setting` SET `value` = '' WHERE `key` = 'config_meta_keyword' AND `value` = 'vendita, prodotti, ecommerce';
UPDATE `oc_setting` SET `value` = 'Your Store' WHERE `key` = 'config_meta_description' AND `value` = 'Negozio';
UPDATE `oc_setting` SET `value` = 'Address 1' WHERE `key` = 'config_address' AND `value` = 'Indirizzo azienda';

UPDATE `oc_tax_class` SET `title` = 'Taxable Goods', `description` = 'Taxed goods' WHERE `title` = 'Prodotti Tassabili' AND `description` = 'Prodotti Tassabili';
UPDATE `oc_tax_class` SET `title` = 'Downloadable Products', `description` = 'Downloadable' WHERE `title` = 'Prodotti Scaricabili' AND `description` = 'Prodotti Scaricabili';


UPDATE `oc_layout` SET `name` = 'Home' WHERE `name` = 'Pagina Iniziale';
UPDATE `oc_layout` SET `name` = 'Product' WHERE `name` = 'Prodotti';
UPDATE `oc_layout` SET `name` = 'Category' WHERE `name` = 'Categorie';
UPDATE `oc_layout` SET `name` = 'Default' WHERE `name` = 'Predefinito';
UPDATE `oc_layout` SET `name` = 'Manufacturer' WHERE `name` = 'Produttori';
UPDATE `oc_layout` SET `name` = 'Account' WHERE `name` = 'Account';
UPDATE `oc_layout` SET `name` = 'Checkout' WHERE `name` = 'Checkout';
UPDATE `oc_layout` SET `name` = 'Contact' WHERE `name` = 'Contatti';
UPDATE `oc_layout` SET `name` = 'Sitemap' WHERE `name` = 'Mappa del Sito';
UPDATE `oc_layout` SET `name` = 'Affiliate' WHERE `name` = 'Affiliati';
UPDATE `oc_layout` SET `name` = 'Information' WHERE `name` = 'Informazioni';
UPDATE `oc_layout` SET `name` = 'Compare' WHERE `name` = 'Comparazione';
UPDATE `oc_layout` SET `name` = 'Search' WHERE `name` = 'Ricerca';

/*changing the default coupon names */
UPDATE IGNORE `oc_coupon` SET name= '-10% Discount' WHERE name='Discount/Sconto -10%';
UPDATE IGNORE `oc_coupon` SET name= 'Free Shipping' WHERE name='Discount/Sconto free shipping/spedizione gratuita';
UPDATE IGNORE `oc_coupon` SET name= '-10.00 Discount' WHERE name='Discount/Sconto -10 &euro;';

/*Reverting the Utente Admin to John Doe*/
UPDATE IGNORE `oc_user` SET `firstname` = 'John',  `lastname` = 'Doe'  WHERE `firstname` = 'Utente' AND `lastname` = 'Admin' ;

/*reverting the names of the user groups */
UPDATE IGNORE `oc_user_group` SET `name` = 'Administrator' WHERE `name` = 'Amministratore';
UPDATE IGNORE `oc_user_group` SET `name` = 'Demonstration' WHERE `name` = 'Collaboratore';

/*reverting to the  default customer group description*/
UPDATE IGNORE `oc_customer_group_description` SET `description`= 'test' where `description` = 'Customers' AND `language_id` = 1 AND `customer_group_id` = 1;


";


		//removing multiline /**/ comments
		$sqlsel[$selection] = preg_replace('#/\*.*?\*/#s', '', $sqlsel[$selection]);
		//removing -- comments
		$sqlsel[$selection] = preg_replace('#--.*#', '', $sqlsel[$selection]);
		//removing empty lines
		$sqlsel[$selection] = preg_replace('#\n\s*\n#', "\n", $sqlsel[$selection]);
		
		//replacing the db_prefix
		$sqlsel[$selection] = str_replace("DROP TABLE IF EXISTS `oc_", "DROP TABLE IF EXISTS `" . DB_PREFIX, $sqlsel[$selection]);
		$sqlsel[$selection] = str_replace("CREATE TABLE `oc_", "CREATE TABLE `" . DB_PREFIX, $sqlsel[$selection]);
		$sqlsel[$selection] = str_replace("INSERT INTO `oc_", "INSERT INTO `" . DB_PREFIX, $sqlsel[$selection]);
		//update
		$sqlsel[$selection] = str_replace("UPDATE `oc_", "UPDATE `" . DB_PREFIX, $sqlsel[$selection]);
		$sqlsel[$selection] = str_replace("UPDATE IGNORE `oc_", "UPDATE IGNORE `" . DB_PREFIX, $sqlsel[$selection]);
		//replace for select, delete, etc
		$sqlsel[$selection] = str_replace("FROM `oc_", "FROM `" . DB_PREFIX, $sqlsel[$selection]);
		
		
 // echo $sqlsel[$selection];exit;

		
		//exploding into an array
		$lines = explode("\n", $sqlsel[$selection]);
		
			foreach($lines as $line) {
				if ($line && (substr($line, 0, 2) != '--') && (substr($line, 0, 1) != '#')) {
					$sql .= $line;

					if (preg_match('/;\s*$/', $line)) {


						$this->db->query($sql);

						$sql = '';
					}
				}
			}
			
	return true;

	}
	//end of function sqlinstall


	public function editSetting($code, $data, $store_id = 0) {
		foreach ($data as $key => $value) {
			if (substr($key, 0, strlen($code)) == $code) {
				
				$this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE store_id = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "'");
				if (!is_array($value)) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "'");
				} else {
					$this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(json_encode($value, true)) . "', serialized = '1'");
				}
			}
		}
	}
	

	public function upgrade($extensionversion) {
		
		switch($extensionversion)
		{ /*previous versions first, latest version at the end -- remove all breaks*/
				case "0.0.1":
				/*end of 0.0.1*/
				
				case "0.0.3":
				
				
				
				/* Only the last break. Do not remove or add another one. */
				break;
		} /*end of case*/

		
	}
	
}