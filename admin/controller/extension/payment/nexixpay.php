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
    private $error = array();

    public function index()
    {
        $this->load->language('extension/payment/nexixpay');

        $this->load->model('localisation/language');

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $response = $this->getProfileInfo();

            if ($response) {
                $this->request->post['payment_nexixpay_available_methods'] = json_encode($response['availableMethods']);
                $this->request->post['payment_nexixpay_url_logo'] = $response['urlLogoNexiLarge'];
            } else {
                $this->request->post['payment_nexixpay_available_methods'] = 0;
                $this->request->post['payment_nexixpay_url_logo'] = 0;
            }

            $this->model_setting_setting->editSetting('payment_nexixpay', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'type=payment&user_token=' . $this->session->data['user_token'], 'SSL'));
        }

        $this->load->model('setting/setting');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['heading_title'] = $this->language->get('heading_title');

        $data['h1_nexi'] = $this->language->get('h1_nexi');

        $data['text_attivo'] = $this->language->get('text_attivo');
        $data['text_disattivo'] = $this->language->get('text_disattivo');

        $data['titolo'] = $this->language->get('titolo');
        $data['titolo_help'] = $this->language->get('titolo_help');
        $data['titolo_value'] = $this->language->get('titolo_value');

        $data['descrizione'] = $this->language->get('descrizione');
        $data['descrizione_help'] = $this->language->get('descrizione_help');
        $data['descrizione_value'] = $this->language->get('descrizione_value');

        $data['stato'] = $this->language->get('stato');
        $data['stato_help'] = $this->language->get('stato_help');
        $data['stato_value'] = $this->language->get('stato_value');

        $data['a3ds20'] = $this->language->get('3ds20');
        $data['a3ds20_description'] = $this->language->get('3ds20_description');


        $data['ambiente_test'] = $this->language->get('ambiente_test');
        $data['ambiente_test_help'] = $this->language->get('ambiente_test_help');
        $data['ambiente_test_value'] = $this->language->get('ambiente_test_value');

        $data['alias_test'] = $this->language->get('alias_test');
        $data['alias_test_help'] = $this->language->get('alias_test_help');
        $data['alias_test_value'] = $this->language->get('alias_test_value');

        $data['mac_test'] = $this->language->get('mac_test');
        $data['mac_test_help'] = $this->language->get('mac_test_help');
        $data['mac_test_value'] = $this->language->get('mac_test_value');

        $data['alias'] = $this->language->get('alias');
        $data['alias_help'] = $this->language->get('alias_help');
        $data['alias_value'] = $this->language->get('alias_value');

        $data['mac'] = $this->language->get('mac');
        $data['mac_help'] = $this->language->get('mac_help');
        $data['mac_value'] = $this->language->get('mac_value');

        $data['lingua'] = $this->language->get('lingua');
        $data['lingua_help'] = $this->language->get('lingua_help');
        $data['lingua_value'] = $this->language->get('lingua_value');

        $data['lingue'] = json_decode($this->language->get('lingua_option'));
        $data['lingue_value'] = array('auto', 'ITA', 'ENG', 'SPA', 'POR', 'FRA', 'GER', 'JPG', 'ARA', 'CHI', 'RUS');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        $data['user_token'] = $this->session->data['user_token'];

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['extra_info'] = $this->language->get('extra_info');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $data['user_token'], 'SSL'),
            'separator' => false
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_payment'),
            'href' => $this->url->link('marketplace/extension', 'type=payment&user_token=' . $data['user_token'], 'SSL'),
            'separator' => ' :: '
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('payment/nexixpay', 'user_token=' . $data['user_token'], 'SSL'),
            'separator' => ' :: '
        );

        $data['action'] = $this->url->link('extension/payment/nexixpay', 'user_token=' . $data['user_token'], 'SSL');

        $data['cancel'] = $this->url->link('marketplace/extension', 'type=payment&user_token=' . $data['user_token'], 'SSL');

        /* STATO */
        if (isset($this->request->post['payment_nexixpay_status'])) {
            $data['payment_nexixpay_status'] = $this->request->post['payment_nexixpay_status'];
        } elseif ($this->config->get('payment_nexixpay_status')) {
            $data['payment_nexixpay_status'] = $this->config->get('payment_nexixpay_status');
        } else {
            $data['payment_nexixpay_status'] = $data['stato_value'];
        }

        /* 3ds20 */
        if (isset($this->request->post['payment_nexixpay_enebled3dS20'])) {
            $data['payment_nexixpay_enebled3dS20'] = $this->request->post['payment_nexixpay_enebled3dS20'];
        } elseif ($this->config->get('payment_nexixpay_enebled3dS20')) {
            $data['payment_nexixpay_enebled3dS20'] = $this->config->get('payment_nexixpay_enebled3dS20');
        }

        /* TITOLO */
        $data['payment_nexixpay_titolo'] = $data['titolo_value'];


        /* DESCRIZIONE */
        $data['payment_nexixpay_descrizione'] = $data['descrizione_value'];

        /* AMBIENTE TEST */
        if (isset($this->request->post['payment_nexixpay_test'])) {
            $data['payment_nexixpay_test'] = $this->request->post['payment_nexixpay_test'];
        } elseif ($this->config->get('payment_nexixpay_test')) {
            $data['payment_nexixpay_test'] = $this->config->get('payment_nexixpay_test');
        } else {
            $data['payment_nexixpay_test'] = $data['ambiente_test_value'];
        }

        /* ALIAS TEST */
        if (isset($this->request->post['payment_nexixpay_alias_test'])) {
            $data['payment_nexixpay_alias_test'] = trim($this->request->post['payment_nexixpay_alias_test']);
        } elseif ($this->config->get('payment_nexixpay_alias_test')) {
            $data['payment_nexixpay_alias_test'] = trim($this->config->get('payment_nexixpay_alias_test'));
        } else {
            $data['payment_nexixpay_alias_test'] = $data['alias_test_value'];
        }

        /* MAC TEST */
        if (isset($this->request->post['payment_nexixpay_mac_test'])) {
            $data['payment_nexixpay_mac_test'] = trim($this->request->post['payment_nexixpay_mac_test']);
        } elseif ($this->config->get('payment_nexixpay_mac_test')) {
            $data['payment_nexixpay_mac_test'] = trim($this->config->get('payment_nexixpay_mac_test'));
        } else {
            $data['payment_nexixpay_mac_test'] = $data['mac_test_value'];
        }

        /* ALIAS */
        if (isset($this->request->post['payment_nexixpay_alias'])) {
            $data['payment_nexixpay_alias'] = trim($this->request->post['payment_nexixpay_alias']);
        } elseif ($this->config->get('payment_nexixpay_alias')) {
            $data['payment_nexixpay_alias'] = trim($this->config->get('payment_nexixpay_alias'));
        } else {
            $data['payment_nexixpay_alias'] = $data['alias_value'];
        }

        /* MAC */
        if (isset($this->request->post['payment_nexixpay_mac'])) {
            $data['payment_nexixpay_mac'] = trim($this->request->post['payment_nexixpay_mac']);
        } elseif ($this->config->get('payment_nexixpay_mac')) {
            $data['payment_nexixpay_mac'] = trim($this->config->get('payment_nexixpay_mac'));
        } else {
            $data['payment_nexixpay_mac'] = $data['mac_value'];
        }

        /* LINGUA */
        if (isset($this->request->post['payment_nexixpay_lingua'])) {
            $data['payment_nexixpay_lingua'] = $this->request->post['payment_nexixpay_lingua'];
        } elseif ($this->config->get('payment_nexixpay_lingua')) {
            $data['payment_nexixpay_lingua'] = $this->config->get('payment_nexixpay_lingua');
        } else {
            $data['payment_nexixpay_lingua'] = $data['lingua_value'];
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->document->setTitle($data['heading_title']);

        $this->response->setOutput($this->load->view('extension/payment/nexixpay', $data));
    }

    private function getProfileInfo()
    {
        if ($this->request->post['payment_nexixpay_test']) {
            $url = 'https://int-ecommerce.nexi.it';
            $alias = trim($this->request->post['payment_nexixpay_alias_test']);
            $chiaveMac = trim($this->request->post['payment_nexixpay_mac_test']);
        } else {
            $url = 'https://ecommerce.nexi.it';
            $alias = trim($this->request->post['payment_nexixpay_alias']);
            $chiaveMac = trim($this->request->post['payment_nexixpay_mac']);
        }

        if ($alias && $chiaveMac) {
            $request = array(
                'apiKey' => $alias,
                'platform' => 'opencart',
                'platformVers' => '3.x.x',
                'pluginVers' => '2.0.0',
                'timeStamp' => time() * 1000
            );

            $request['mac'] = sha1('apiKey=' . $request['apiKey'] . 'timeStamp=' . $request['timeStamp'] . $chiaveMac);

            $connection = curl_init();

            if ($connection === false) {
                return false;
            }

            curl_setopt_array($connection, array(
                CURLOPT_URL => $url . '/ecomm/api/profileInfo',
                CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => json_encode($request),
                CURLOPT_RETURNTRANSFER => 1,
                CURLINFO_HEADER_OUT => true,
                CURLOPT_SSL_VERIFYPEER => 0
            ));

            $responseContent = curl_exec($connection);

            curl_close($connection);

            if ($responseContent === false) {
                return false;
            }

            $response = json_decode($responseContent, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                return false;
            }

            $macReturn = sha1('esito=' . $response['esito'] . 'idOperazione=' . $response['idOperazione'] . 'timeStamp=' . $response['timeStamp'] . $chiaveMac);

            if ($macReturn != $response['mac']) {
                return false;
            }

            if ($response['esito'] != 'OK') {
                return false;
            }

            return $response;
        }

        return false;
    }

    private function validate()
    {
        $this->load->language('extension/payment/nexixpay');

        if (!$this->user->hasPermission('modify', 'extension/payment/nexixpay')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }
}
