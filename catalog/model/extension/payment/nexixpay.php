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

class ModelExtensionPaymentNexiXpay extends Model
{
    public function getMethod($address, $total)
    {
        $this->load->language('extension/payment/nexixpay');

        $method_data = array(
            'code' => 'nexixpay',
            'title' => html_entity_decode($this->language->get('titolo_value')),
            'terms' => '',
            'sort_order' => 0
        );

        return $method_data;
    }
}
