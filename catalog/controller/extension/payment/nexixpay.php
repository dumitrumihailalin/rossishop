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

class ControllerExtensionPaymentNexiXpay extends Controller
{
    private $order_info;

    public function index()
    {
        $this->language->load('extension/payment/nexixpay');

        $this->load->model('checkout/order');

        $this->order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

        $data['descrizione'] = $this->language->get('descrizione_value');

        $data['button_confirm'] = $this->language->get('button_confirm');

        if ($this->config->get('payment_nexixpay_url_logo') && $this->config->get('payment_nexixpay_available_methods')) {
            $data['logoUrl'] = $this->getUrlLogo();

            $availableMethods = json_decode($this->config->get('payment_nexixpay_available_methods'), true);

            $cc = array();
            $apm = array();

            foreach ($availableMethods as $method) {
                $method['style'] = $this->getLogoStyle($method['code']);

                if ($method['type'] == 'CC') {
                    $cc[] = $method;
                } else {
                    $apm[] = $method;
                }
            }

            $data['availableMethods'] = array_merge($cc, $apm);
        } else {
            $data['logoUrl'] = false;
            $data['availableMethods'] = false;
        }

        if ($this->config->get('payment_nexixpay_test')) {
            $stringa = 'https://int-ecommerce.nexi.it/ecomm/ecomm/DispatcherServlet';
            $alias = trim($this->config->get('payment_nexixpay_alias_test'));
            $chiaveMac = trim($this->config->get('payment_nexixpay_mac_test'));
        } else {
            $stringa = 'https://ecommerce.nexi.it/ecomm/ecomm/DispatcherServlet';
            $alias = trim($this->config->get('payment_nexixpay_alias'));
            $chiaveMac = trim($this->config->get('payment_nexixpay_mac'));
        }
        $param = $this->get_params_form();
        $aParam = array();
        foreach ($param as $key => $value) {
            $value = addslashes($value);
            $aParam[] = '<input type="hidden" name="' . $key . '" value="' . $value . '" />' . PHP_EOL;
        }

        $nexi_xpay_inputs = implode('', $aParam);
        $data['submit_form'] = '<form action="' . $stringa . '" method="post" id="nexi_xpay_payment_form">
                                        ' . $nexi_xpay_inputs . '
                                        <div class="pull-right">
                                        <input type="submit" class="btn btn-primary" id="submit_nexi_payment_form" value="' . $data['button_confirm'] . '" />
                                        </div>
                                </form>';

        if ($this->order_info['currency_code'] != 'EUR') {
            $data['submit_form'] = '<span style="color:red">' . $this->language->get('currency_error') . '</span>';
            $data['submit_form'] .= '<a class="btn btn-primary" style="float:right;" href="' . trim($this->url->link('extension/payment/nexixpay/annulla/')) . '">' . $this->language->get('button_cancel') . '</a>';
        }

        return $this->load->view('extension/payment/nexixpay', $data);
    }

    public function get_params_form()
    {
        if ($this->config->get('payment_nexixpay_test')) {
            $stringa = 'https://int-ecommerce.nexi.it/ecomm/ecomm/DispatcherServlet';
            $alias = trim($this->config->get('payment_nexixpay_alias_test'));
            $chiaveMac = trim($this->config->get('payment_nexixpay_mac_test'));
        } else {
            $stringa = 'https://ecommerce.nexi.it/ecomm/ecomm/DispatcherServlet';
            $alias = trim($this->config->get('payment_nexixpay_alias'));
            $chiaveMac = trim($this->config->get('payment_nexixpay_mac'));
        }

        $importo = intval(round($this->currency->format($this->order_info['total'], $this->order_info['currency_code'], false, false), 2, PHP_ROUND_HALF_UP) * 100);

        $codTrans = substr($this->session->data['order_id'] . '--' . date('YmdHis'), 0, 30);

        $parametri = array(
        'alias' => trim($alias),
        'importo' => trim($importo),
        'divisa' => $this->order_info['currency_code'],
        'codTrans' => trim($codTrans),
        'url' => trim($this->url->link('extension/payment/nexixpay/conferma/', '', 'SSL')),
        'urlpost' => trim($this->url->link('extension/payment/nexixpay/SToS/', '', 'SSL')),
        'url_back' => trim($this->url->link('extension/payment/nexixpay/annulla/')),
        'mac' => sha1('codTrans=' . $codTrans . 'divisa=' . $this->order_info['currency_code'] . 'importo=' . $importo . trim($chiaveMac)),
        'languageId' => trim($this->GetLingua()),
        'mail' => trim($this->order_info['email']),
        'descrizione' => 'Ordine: ' . $this->session->data['order_id'],
        'Note1' => 'opencart',
        'Note2' => '3.x.x',
        'Note3' => '2.0.0'
    );
        if ($this->config->get('payment_nexixpay_enebled3dS20') == true) {
            $parametri = array_merge($parametri, $this->get_params_3ds2());
        }
        return $parametri;
    }

    public function get_params_3ds2()
    {
        $params = array();
        if ($this->order_info['email'] != '') {
            $params['Buyer_email'] = $this->order_info['email'];
        }
        if ($this->order_info['email'] != '') {
            $params['Buyer_account'] = $this->order_info['email'];
        }
        if ($this->order_info['telephone'] != '') {
            $params['Buyer_homePhone'] = $this->order_info['telephone'];
            $params['Buyer_workPhone'] = $this->order_info['telephone'];
        }
        if ($this->order_info['shipping_city'] != '') {
            $params['Dest_city'] = $this->order_info['shipping_city'];
        }
        if ($this->order_info['shipping_iso_code_3'] != '') {
            $params['Dest_country'] = $this->order_info['shipping_iso_code_3'];
        }
        if ($this->order_info['shipping_address_1'] != '') {
            $params['Dest_street'] = $this->order_info['shipping_address_1'];
        }
        if ($this->order_info['shipping_address_2'] != '') {
            $params['Dest_street2'] = $this->order_info['shipping_address_2'];
        }
        if ($this->order_info['shipping_postcode'] != '') {
            $params['Dest_cap'] = $this->order_info['shipping_postcode'];
        }
        if ($this->order_info['shipping_zone'] != '') {
            $params['Dest_state'] = $this->order_info['shipping_zone'];
        }
        if ($this->order_info['payment_city'] != '') {
            $params['Bill_city'] = $this->order_info['payment_city'];
        }
        if ($this->order_info['payment_iso_code_3'] != '') {
            $params['Bill_country'] = $this->order_info['payment_iso_code_3'];
        }
        if ($this->order_info['payment_address_1'] != '') {
            $params['Bill_street'] = $this->order_info['payment_address_1'];
        }
        if ($this->order_info['payment_address_2'] != '') {
            $params['Bill_street2'] = $this->order_info['payment_address_2'];
        }
        if ($this->order_info['payment_postcode'] != '') {
            $params['Bill_cap'] = $this->order_info['payment_postcode'];
        }
        if ($this->order_info['payment_zone'] != '') {
            $params['Bill_state'] = $this->order_info['payment_zone'];
        }

        $userParams = array();
        if ($this->getChAccDate($this->order_info['customer_id']) != '') {
            $userParams['chAccDate'] = $this->getChAccDate($this->order_info['customer_id']);
        }
        if ($this->getChAccDate($this->order_info['customer_id']) != '') {
            $userParams['chAccAgeIndicator'] = $this->getAccountDateIndicator($this->getChAccDate($this->order_info['customer_id']));
        }
        if ($this->getOrderInLastSixMonth($this->order_info['customer_id']) != '') {
            $userParams['nbPurchaseAccount'] = $this->getOrderInLastSixMonth($this->order_info['customer_id']);
        }
        if ($this->getLastUsagedestinationAddress($this->order_info['customer_id'], $this->order_info['shipping_city'], $this->order_info['shipping_address_1'], $this->order_info['shipping_address_2'], $this->order_info['shipping_postcode']) != '') {
            $userParams['destinationAddressUsageDate'] = $this->getLastUsagedestinationAddress($this->order_info['customer_id'], $this->order_info['shipping_city'], $this->order_info['shipping_address_1'], $this->order_info['shipping_address_2'], $this->order_info['shipping_postcode']);
        }
        if ($this->getDateIndicator($this->getFirstUsagedestinationAddress($this->order_info['customer_id'], $this->order_info['shipping_city'], $this->order_info['shipping_address_1'], $this->order_info['shipping_address_2'], $this->order_info['shipping_postcode'])) != '') {
            $userParams['destinationAddressUsageIndicator'] = $this->getDateIndicator($this->getFirstUsagedestinationAddress($this->order_info['customer_id'], $this->order_info['shipping_city'], $this->order_info['shipping_address_1'], $this->order_info['shipping_address_2'], $this->order_info['shipping_postcode']));
        }
        if ($this->checkName($this->order_info['shipping_firstname'], $this->order_info['shipping_lastname']) != '') {
            $userParams['destinationNameIndicator'] = $this->checkName($this->order_info['shipping_firstname'], $this->order_info['shipping_lastname']);
        }
        if ($this->order_info['customer_id'] != 0) {
            $params = array_merge($params, $userParams);
        }
        return $params;
    }

    private function checkName($first_name, $last_name)
    {
        if ($first_name == $this->order_info['firstname'] && $last_name == $this->order_info['lastname']) {
            return '01';
        }
        return '02';
    }

    private function getLastUsagedestinationAddress($user_id, $city, $street_1, $street_2, $postcode)
    {
        $query = $this->db->query("SELECT date_added FROM `" . DB_PREFIX . "order` WHERE `customer_id` = '" . $user_id . "' AND `shipping_address_1` = '" . $street_1 . "' AND `shipping_address_2` = '" . $street_2 . "' AND `shipping_city` = '" . $city . "' AND `shipping_postcode` = '" . $postcode . "' order by date_added DESC limit 1");
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $query->row['date_added']);
        return $date->format('Y-m-d');
    }

    private function getFirstUsagedestinationAddress($user_id, $city, $street_1, $street_2, $postcode)
    {
        $query = $this->db->query("SELECT date_added FROM `" . DB_PREFIX . "order` WHERE `customer_id` = '" . $user_id . "' AND `shipping_address_1` = '" . $street_1 . "' AND `shipping_address_2` = '" . $street_2 . "' AND `shipping_city` = '" . $city . "' AND `shipping_postcode` = '" . $postcode . "' order by date_added ASC limit 1");
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $query->row['date_added']);
        return $date->format('Y-m-d');
    }

    private function getDateIndicator($date)
    {
        $date = new DateTime($date);
        $today = date("Y-m-d");
        if ($date->format("Y-m-d") == $today) {
            //Account Created in this transaction
            return '01';
        }
        $newDate = new DateTime($today. ' - 30 day');
        if ($date->format("Y-m-d") >= $newDate->format("Y-m-d")) {
            //Account created in last 30 days
            return '02';
        }
        $newDate = new DateTime($today. ' - 60 day');
        if ($date->format("Y-m-d") >= $newDate->format("Y-m-d")) {
            //Account created from 30 to 60 days ago
            return '03';
        }
        if ($date->format("Y-m-d") < $newDate->format("Y-m-d")) {
            //Account created more then 60 days ago
            return '04';
        }
    }

    private function getOrderInLastSixMonth($user_id)
    {
        $query = $this->db->query("SELECT date_added FROM `" . DB_PREFIX . "order` WHERE `customer_id` = '" . $user_id . "'");
        $today = date("Y-m-d");
        $newDate = new DateTime($today. ' - 6 month');
        $count = 0;
        foreach ($query->rows as $id => $row) {
            if ($row['date_added'] >= $newDate->format("Y-m-d")) {
                $count += 1;
            }
        }
        return $count;
    }

    private function getChAccDate($user_id)
    {
        $query = $this->db->query("SELECT date_added FROM `" . DB_PREFIX . "customer` WHERE `customer_id` = '" . $user_id . "'");
        if (isset($query->row['date_added']) && $query->row['date_added'] != '') {
            $date_added = $query->row['date_added'];
        } else {
            return null;
        }

        $date = DateTime::createFromFormat('Y-m-d H:i:s', $date_added);
        return $date->format('Y-m-d');
    }

    private function getAccountDateIndicator($date)
    {
        $date = DateTime::createFromFormat('Y-m-d', $date);
        $today = date("Y-m-d");
        if ($date == null) {
            //Account not registred
            return '01';
        }
        if ($date->format("Y-m-d") == $today) {
            //Account Created in this transaction
            return '02';
        }
        $newDate = new DateTime($today. ' - 30 day');
        if ($date->format("Y-m-d") >= $newDate->format("Y-m-d")) {
            //Account created in last 30 days
            return '03';
        }
        $newDate = new DateTime($today. ' - 60 day');
        if ($date->format("Y-m-d") >= $newDate->format("Y-m-d")) {
            //Account created from 30 to 60 days ago
            return '04';
        }
        if ($date->format("Y-m-d") < $newDate->format("Y-m-d")) {
            //Account created more then 60 days ago
            return '05';
        }
    }

    private function getUrlLogo()
    {
        $timestamp = time() * 1000;

        if ($this->config->get('payment_nexixpay_test')) {
            $alias = trim($this->config->get('payment_nexixpay_alias_test'));
            $chiaveMac = trim($this->config->get('payment_nexixpay_mac_test'));
        } else {
            $alias = trim($this->config->get('payment_nexixpay_alias'));
            $chiaveMac = trim($this->config->get('payment_nexixpay_mac'));
        }

        $params = array(
            'apiKey' => $alias,
            'timeStamp' => $timestamp,
            'platform' => 'opencart',
            'platformVers' => '3.0',
            'pluginVers' => '2.0.0',
            'mac' => sha1('apiKey=' . $alias . 'timeStamp=' . $timestamp . $chiaveMac)
        );

        return $this->config->get('payment_nexixpay_url_logo') . '?' . http_build_query($params);
    }

    private function getLogoStyle($methodCode)
    {
        $code = strtolower(trim($methodCode));

        $configuration = array(
            'maestro' => 'padding-left:10px; padding-top:6px; padding-bottom:6px;',
            'mastercard' => 'padding-left:10px; padding-top:6px; padding-bottom:6px;',
            'visa' => 'padding-left:10px; padding-top:9px; padding-bottom:9px;',
            'paypal' => 'padding-left:14px; padding-top:10px; padding-bottom:10px;',
            'sofort' => 'padding-left:15px; padding-top:8px; padding-bottom:8px;',
            'amazonpay' => 'padding-left:15px; padding-top:8px; padding-bottom:8px;',
            'googlepay' => 'padding-left:14px; padding-top:9px; padding-bottom:9px;',
            'alipay' => 'padding-left:10px; padding-top:0px; padding-bottom:0px;',
            'wechatpay' => 'padding-left:10px; padding-top:6px; padding-bottom:6px;',
            'masterpass' => 'padding-left:13px; padding-top:8px; padding-bottom:8px;',
            'applepay' => 'padding-left:15px; padding-top:8px; padding-bottom:8px;'
        );

        return array_key_exists($code, $configuration) ? $configuration[$code] : 'padding-left:14px; padding-top:8px; padding-bottom:8px;';
    }

    private function CreaLink()
    {
        if ($this->config->get('payment_nexixpay_test')) {
            $stringa = 'https://int-ecommerce.nexi.it/ecomm/ecomm/DispatcherServlet';
            $alias = trim($this->config->get('payment_nexixpay_alias_test'));
            $chiaveMac = trim($this->config->get('payment_nexixpay_mac_test'));
        } else {
            $stringa = 'https://ecommerce.nexi.it/ecomm/ecomm/DispatcherServlet';
            $alias = trim($this->config->get('payment_nexixpay_alias'));
            $chiaveMac = trim($this->config->get('payment_nexixpay_mac'));
        }

        $importo = intval(round($this->currency->format($this->order_info['total'], 'EUR', false, false), 2, PHP_ROUND_HALF_UP) * 100);

        $codTrans = substr($this->session->data['order_id'] . '--' . date('YmdHis'), 0, 30);

        $parametri = array(
            'alias' => trim($alias),
            'importo' => trim($importo),
            'divisa' => 'EUR',
            'codTrans' => trim($codTrans),
            'url' => trim($this->url->link('extension/payment/nexixpay/conferma/', '', 'SSL')),
            'urlpost' => trim($this->url->link('extension/payment/nexixpay/SToS/', '', 'SSL')),
            'url_back' => trim($this->url->link('extension/payment/nexixpay/annulla/')),
            'mac' => sha1('codTrans=' . $codTrans . 'divisa=EURimporto=' . $importo . trim($chiaveMac)),
            'languageId' => trim($this->GetLingua()),
            'mail' => trim($this->order_info['email']),
            'descrizione' => 'Ordine: ' . $this->session->data['order_id'],
            'Note1' => 'opencart',
            'Note2' => '3.0',
            'Note3' => '1.2.0'
        );

        $stringa .= '?' . http_build_query($parametri);

        return $stringa;
    }

    private function MancanoCampi()
    {
        $requiredFields = array('codTrans', 'esito', 'importo', 'divisa', 'data', 'orario', 'codAut', 'mac');

        foreach ($requiredFields as $field) {
            if (!isset($this->request->post[$field])) {
                return true;
            }
        }

        return false;
    }

    private function MACNonCorretto()
    {
        if ($this->config->get('payment_nexixpay_test')) {
            $chiaveMac = $this->config->get('payment_nexixpay_mac_test');
        } else {
            $chiaveMac = $this->config->get('payment_nexixpay_mac');
        }

        $stringaMac = sha1('codTrans=' . $this->request->post['codTrans'] .
                'esito=' . $this->request->post['esito'] .
                'importo=' . $this->request->post['importo'] .
                'divisa=' . $this->request->post['divisa'] .
                'data=' . $this->request->post['data'] .
                'orario=' . $this->request->post['orario'] .
                'codAut=' . $this->request->post['codAut'] . trim($chiaveMac));

        return ($stringaMac != $this->request->post['mac']);
    }

    public function SToS()
    {
        $this->load->model('checkout/order');

        if ($this->request->server['REQUEST_METHOD'] == 'GET') {
            $this->request->post = $this->request->get;
        }

        if ($this->MancanoCampi()) {
            //  error_log('Parametri assenti per il calcolo del MAC');
            header('500 Internal Server Error', true, 500);
            exit;
        }

        if ($this->MACNonCorretto()) {
            //  error_log('Calcolo MAC errato');
            header('500 Internal Server Error', true, 500);
            exit;
        }

        if ($this->request->post['esito'] == 'OK') {
            $this->language->load('extension/payment/nexixpay');
            $message = $this->language->get('nexixpay_pagamento_confermato') . ' <br> ' . $this->language->get('nexixpay_cod_trans') . $this->request->post['codTrans'];

            $orderId = explode('--', $this->request->post['codTrans'])[0];

            $this->model_checkout_order->addOrderHistory($orderId, '2', $message);
        }

        return;
    }

    public function conferma()
    {
        if ($this->request->server['REQUEST_METHOD'] == 'GET') {
            $this->request->post = $this->request->get;
        }

        if ($this->request->post['esito'] == 'OK') {
            $this->response->redirect($this->url->link('checkout/success', '', 'SSL'));
        } else {
            $this->response->redirect($this->url->link('extension/payment/nexixpay/errore', '', 'SSL'));
        }

        return;
    }

    public function errore()
    {
        $this->language->load('extension/payment/nexixpay');

        if ($this->request->server['REQUEST_METHOD'] == 'GET') {
            $this->request->post = $this->request->get;
        }

        $this->document->setTitle($this->language->get('nexixpay_titolo_annulla'));

        $data['heading_title'] = $this->language->get('nexixpay_titolo_annulla');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['text_error'] = $this->language->get('nexixpay_errore_pagamento');

        $data['button_continue'] = $this->language->get('button_continua');
        $data['continue'] = $this->url->link('checkout/checkout', '', 'SSL');

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('error/not_found', $data));
    }

    public function annulla()
    {
        if ($this->request->server['REQUEST_METHOD'] == 'GET') {
            $this->request->post = $this->request->get;
        }

        $this->language->load('extension/payment/nexixpay');

        $this->document->setTitle($this->language->get('nexixpay_titolo_annulla'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['heading_title'] = $this->language->get('nexixpay_titolo_annulla');

        $data['text_error'] = $this->language->get('nexixpay_annulla');

        $data['button_continue'] = $this->language->get('button_continua');
        $data['continue'] = $this->url->link('checkout/checkout', '', 'SSL');

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('error/not_found', $data));
    }

    private function GetLingua()
    {
        $confLingua = $this->config->get('payment_nexixpay_lingua');

        $lingue = array(
            'it' => 'ITA',
            'ar' => 'ARA',
            'zh' => 'CHI',
            'ru' => 'RUS',
            'es' => 'SPA',
            'fr' => 'FRA',
            'de' => 'GER',
            'ja' => 'JPG',
            'en' => 'ENG',
            'pt' => 'POR'
        );

        if ($confLingua == 'auto') {
            $lingua = $lingue[trim($this->language->get('code'))];
        } else {
            $lingua = $confLingua;
        }

        return ($lingua != '' && $lingua != null) ? $lingua : 'ENG';
    }
}
