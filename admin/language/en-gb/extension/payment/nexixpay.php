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

$_['text_payment'] = 'Extensions';

$_['button_cancel'] = 'Back';
$_['button_save'] = 'Save';

$_['text_attivo'] = 'Enable';
$_['text_disattivo'] = 'Disable';

$_['h1_nexi'] = 'Nexi XPay Configuration';

$_['text_success'] = 'Nexi XPay configuration saved!';

$_['stato'] = 'Enable/Disable';
$_['stato_help'] = 'Enable Nexi XPay Payment Module.';
$_['3ds20'] = 'Enable 3D Secure 2.0';
$_['3ds20_description'] = 'The new 3D Secure 2.0 protocol adopted by the main international circuits (Visa, MasterCard, American Express), introduces new authentication methods, able to improve and speed up the cardholder\'s purchase experience.<br><br>By activating this option it is established that the terms and conditions that you submit to your customers, with particular reference to the privacy policy, are foreseen to include the acquisition and processing of additional data provided by the 3D Secure 2.0 Service (for example, shipping and / or invoicing address, payment details). Nexi and the International Circuits use the additional data collected separately for the purpose of fraud prevention';
$_['stato_value'] = 0;
$_['titolo'] = 'Title';
$_['titolo_help'] = 'This controls the title which the user sees during checkout.';
$_['titolo_value'] = 'Payment Card';
$_['descrizione'] = 'Description';
$_['descrizione_help'] = 'This controls the description which the user sees during checkout.';
$_['descrizione_value'] = 'Pay securely by credit and debit card or alternative payment methods through Nexi.';
$_['ambiente_test'] = 'Enable/Disable TEST Mode';
$_['ambiente_test_help'] = 'Enable Nexi XPay Payment Module in testing mode.';
$_['ambiente_test_value'] = 0;
$_['alias'] = 'Nexi Alias';
$_['alias_help'] = 'Given to Merchant by Nexi.';
$_['alias_value'] = '';
$_['mac'] = 'Nexi MAC key';
$_['mac_help'] = 'Given to Merchant by Nexi.';
$_['mac_value'] = '';
$_['alias_test'] = 'Nexi Alias TEST';
$_['alias_test_help'] = 'Register on https://ecommerce.nexi.it/area-test to have TEST\'s credentials.';
$_['alias_test_value'] = '';
$_['mac_test'] = 'Nexi MAC key TEST';
$_['mac_test_help'] = 'Register on https://ecommerce.nexi.it/area-test to have TEST\'s credentials.';
$_['mac_test_value'] = '';
$_['lingua'] = 'Language';
$_['lingua_help'] = 'Choose the language for the payment page.';
$_['lingua_value'] = 'Automatic';
$_['lingua_option'] = json_encode(array('Automatic', 'Italian', 'English', 'Spanish', 'Portoguese', 'French', 'German', 'Japanese', 'Arabic', 'Chinese', 'Russian'));

$_['text_nexixpay'] = '<a onclick="window.open(\'https://www.nexi.it/\');"><img src="https://ecommerce.nexi.it/specifiche-tecniche/moduli/img/logo.jpg" alt="Nexi XPay" title="Nexi XPay" style="border: 1px solid #EEEEEE;" /></a>';

$_['error_permission'] = 'Warning: You don\'t have permission to change XPay Nexi!';

$_['code'] = 'en';

$_['extra_info'] = 'For a correct behavior of the module, check in the configuration section of the Nexi back-office that the transaction cancellation in the event of a failed notification is set.';
