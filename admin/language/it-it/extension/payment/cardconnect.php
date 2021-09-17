<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Impostazioni';
$_['tab_order_status']              = 'Stato Ordine';

// Text
$_['text_extension']                = 'Estensioni';
$_['text_success']                  = 'Hai modificato con successo CardConnect payment module!';
$_['text_edit']                     = 'Modifica CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Pagamento';
$_['text_authorize']                = 'Autorizza';
$_['text_live']                     = 'Live';
$_['text_test']                     = 'Test';
$_['text_no_cron_time']             = 'Cron non &egrave; stato ancora eseguito';
$_['text_payment_info']             = 'Informazioni Pagamento';
$_['text_payment_method']           = 'Metodo di Pagamento';
$_['text_card']                     = 'Carta';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Riferimento';
$_['text_update']                   = 'Aggiorna';
$_['text_order_total']              = 'Totale Ordine';
$_['text_total_captured']           = 'Totale Acquisito';
$_['text_capture_payment']          = 'Acquisisci pagamento';
$_['text_refund_payment']           = 'Rimborsa Pagamento';
$_['text_void']                     = 'Vuoto';
$_['text_transactions']             = 'Transazioni';
$_['text_column_type']              = 'Tipo';
$_['text_column_reference']         = 'Riferimento';
$_['text_column_amount']            = 'Importo';
$_['text_column_status']            = 'Stato';
$_['text_column_date_modified']     = 'Data Modifica';
$_['text_column_date_added']        = 'Data di Aggiunta';
$_['text_column_update']            = 'Aggiorna';
$_['text_column_void']              = 'Vuoto';
$_['text_confirm_capture']          = 'Sicuro di voler Acquisire il pagamento?';
$_['text_confirm_refund']           = 'Sicuro di voler rimborsare il pagamento?';
$_['text_inquire_success']          = 'Indagine avvenuta con successo';
$_['text_capture_success']          = 'Acquisizione avvenuta con successo';
$_['text_refund_success']           = 'Rimborso avvenuto con successo';
$_['text_void_success']             = 'Richiesta non valida avvenuta con successo';

// Entry
$_['entry_merchant_id']             = 'ID Commerciante';
$_['entry_api_username']            = 'API Username';
$_['entry_api_password']            = 'API Password';
$_['entry_token']                   = 'Token Segreto';
$_['entry_transaction']             = 'Transazione';
$_['entry_environment']             = 'Ambiente';
$_['entry_site']                    = 'Sito';
$_['entry_store_cards']             = 'Salva le Carte';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Totale';
$_['entry_geo_zone']                = 'Zona Geografica';
$_['entry_status']                  = 'Stato';
$_['entry_logging']                 = 'Debug Logging';
$_['entry_sort_order']              = 'Ordinamento';
$_['entry_cron_url']                = 'URL Cron Job';
$_['entry_cron_time']               = 'Ultima esecuzione Cron Job';
$_['entry_order_status_pending']    = 'In attesa';
$_['entry_order_status_processing'] = 'In elaborazione';

// Help
$_['help_merchant_id']              = 'Your personal CardConnect account merchant ID.';
$_['help_api_username']             = 'Your username to access the CardConnect API.';
$_['help_api_password']             = 'Your password to access the CardConnect API.';
$_['help_token']                    = 'Enter a random token for security or use the one generated.';
$_['help_transaction']              = 'Choose \'Payment\' to capture the payment immediately or \'Authorize\' to have to approve it.';
$_['help_site']                     = 'This determines the first part of the API URL. Only change if instructed.';
$_['help_store_cards']              = 'Whether you want to store cards using tokenization.';
$_['help_echeck']                   = 'Whether you want to offer the ability to pay using an eCheck.';
$_['help_total']                    = 'The checkout total the order must reach before this payment method becomes active. Must be a value with no currency sign.';
$_['help_logging']                  = 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise.';
$_['help_cron_url']                 = 'Set a cron job to call this URL so that the orders are auto-updated. It is designed to be ran a few hours after the last capture of a business day.';
$_['help_cron_time']                = 'This is the last time that the cron job URL was executed.';
$_['help_order_status_pending']     = 'The order status when the order has to be authorized by the merchant.';
$_['help_order_status_processing']  = 'The order status when the order is automatically captured.';

// Button
$_['button_inquire_all']            = 'Inquire All';
$_['button_capture']                = 'Acquisizione';
$_['button_refund']                 = 'Rimborso';
$_['button_void_all']               = 'Void All';
$_['button_inquire']                = 'Inquire';
$_['button_void']                   = 'Nullo';

// Error
$_['error_permission']              = 'Attenzione: non si hanno i permessi per modificare payment CardConnect!';
$_['error_merchant_id']             = 'Merchant ID Required!';
$_['error_api_username']            = 'API Username Required!';
$_['error_api_password']            = 'API Password Required!';
$_['error_token']                   = 'Secret Token Required!';
$_['error_site']                    = 'Site Required!';
$_['error_amount_zero']             = 'Amount must be higher than zero!';
$_['error_no_order']                = 'No matching order info!';
$_['error_invalid_response']        = 'Invalid response received!';
$_['error_data_missing']            = 'Missing data!';
$_['error_not_enabled']             = 'Module not enabled!';