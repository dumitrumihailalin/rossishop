<?php

/**
 * Copyright (c) 2019 Nexi Payments S.p.A.
 *
 * @author      iPlusService S.r.l.
 * @category    Payment Module
 * @package     Nexi XPay
 * @version     2.0.0
 * @copyright   Copyright (c) 2019 Nexi Payments S.p.A. (https://ecommerce.nexi.it)
 * @license     GNU General Public License v3.0
 */

$_['heading_title'] = 'Nexi XPay';

$_['text_payment'] = 'Estensioni';

$_['button_cancel'] = 'Indietro';
$_['button_save'] = 'Salva';

$_['text_attivo'] = 'Abilita';
$_['text_disattivo'] = 'Disabilita';

$_['h1_nexi'] = 'Configurazione Nexi XPay';

$_['text_success'] = 'Configurazione Nexi XPay salvata!';

$_['stato'] = 'Abilita/Disabilita';
$_['stato_help'] = 'Abilita il modulo di pagamento Nexi.';
$_['3ds20'] = 'Abilita 3D Secure 2.0';
$_['3ds20_description'] = 'Il nuovo protocollo 3D Secure 2.0 adottato dai principali circuiti internazionali (Visa, MasterCard, American Express), introduce nuove modalità di autenticazione, in grado di migliorare e velocizzare l\’esperienza di acquisto del titolare della carta.<br><br>Attivando questa opzione occorre verificare che i termini e le condizioni che sottoponi alla tua clientela, con particolare riferimento all’informativa sulla privacy, siano modificati per includere l\'acquisizione ed il trattamento dei dati aggiuntivi previsti dal servizio 3D Secure 2.0 (ad esempio indirizzo di spedizione e/o fatturazione, dettagli del pagamento). Nexi e i Circuiti Internazionali utilizzeranno i dati aggiuntivi raccolti esclusivamente per la finalità relative alla prevenzione delle frodi';
$_['stato_value'] = 0;
$_['titolo'] = 'Titolo';
$_['titolo_help'] = 'Questa è il titolo del modulo di pagamento mostrato al cliente nella pagina di checkout.';
$_['titolo_value'] = 'Carte di pagamento';
$_['descrizione'] = 'Descrizione';
$_['descrizione_help'] = 'Questa è la descrizione mostrata al cliente nella pagina di checkout.';
$_['descrizione_value'] = 'Puoi pagare in modo sicuro con carte di credito e debito o con sistemi di pagamento innovativi grazie al servizio offerto da Nexi.';
$_['ambiente_test'] = 'Abilita/Disabilita la modalità Test';
$_['ambiente_test_help'] = 'Abilita il modulo Nexi in modalità TEST.';
$_['ambiente_test_value'] = 0;
$_['alias'] = 'Nexi Alias';
$_['alias_help'] = 'Fornito da Nexi al venditore.';
$_['alias_value'] = '';
$_['mac'] = 'Nexi chiave MAC';
$_['mac_help'] = 'Fornito da Nexi al venditore.';
$_['mac_value'] = '';
$_['alias_test'] = 'Nexi Alias TEST';
$_['alias_test_help'] = 'Registrati su https://ecommerce.nexi.it/area-test per avere le tue credenziali di TEST.';
$_['alias_test_value'] = '';
$_['mac_test'] = 'Nexi chiave MAC TEST';
$_['mac_test_help'] = 'Registrati su https://ecommerce.nexi.it/area-test per avere le tue credenziali di TEST.';
$_['mac_test_value'] = '';
$_['lingua'] = 'Lingua';
$_['lingua_help'] = 'Scegli la lingua per la pagina di pagamento.';
$_['lingua_value'] = 'Automatico';
$_['lingua_option'] = json_encode(array('Automatico', 'Italiano', 'Inglese', 'Spagnolo', 'Portoghese', 'Francese', 'Tedesco', 'Giapponese', 'Arabo', 'Cinese', 'Russo'));

$_['text_nexixpay'] = '<a onclick="window.open(\'https://www.nexi.it/\');"><img src="https://ecommerce.nexi.it/specifiche-tecniche/moduli/img/logo.jpg" alt="Nexi XPay" title="Nexi XPay" style="border: 1px solid #EEEEEE;" /></a>';

$_['error_permission'] = 'Attenzione: non hai i permessi per modificare il modulo XPay Nexi!';

$_['code'] = 'it';

$_['extra_info'] = 'Per un corretto funzionamento del modulo, verificare nella sezione di configurazione del back-office Nexi che sia impostato l\'annullo delle transazioni in caso di notifica fallita.';
