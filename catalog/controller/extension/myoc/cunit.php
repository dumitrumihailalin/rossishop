<?php
class ControllerExtensionMyocCunit extends Controller
{
    private function filterProductPrice($product)
    {
        $custom_unit = $this->myoc_cunit->getCustomUnit($product['product_id']);

        if ($custom_unit) {
            $discounts = $this->model_catalog_product->getProductDiscounts($product['product_id']);

            $product['discount_collective'] = array();

            foreach ($discounts as $discount) {
                $product['discount_collective'][$discount['quantity']] = array(
                    'price_collective' => $discount['price'] * $custom_unit['value'],
                );
            }
            
            $product['price_collective'] = $product['price'] * $custom_unit['value'];

            if ($product['special']) {
                $product['special_collective'] = $product['special'] * $custom_unit['value'];
            }
        }
        return $product;
    }

    public function modifyProductPrice(&$route, &$args, &$output)
    {
        if (!$this->config->get('myoc_cunit_status')) {
            return;
        }

        if ($output) {
            $output = $this->filterProductPrice($output);
        }
    }

    public function modifyProductsPrice(&$route, &$args, &$output)
    {
        if (!$this->config->get('myoc_cunit_status')) {
            return;
        }

        if ($output) {
            foreach ($output as $key => $product) {
                $output[$key] = $this->filterProductPrice($product);
            }
        }
    }

    public function addProductCustomUnit(&$route, &$data)
    {
        if (!$this->config->get('myoc_cunit_status')) {
            return;
        }

        $this->load->language('extension/myoc/cunit');

        $custom_unit = $this->myoc_cunit->getCustomUnit($data['product_id']);

        if ($data && isset($data['product_id']) && $custom_unit) {
            $product_info = $this->model_catalog_product->getProduct($data['product_id']);

            if ($product_info && $data['price']) {
                $text_base = !empty($custom_unit['base']) ? $this->language->get('text_per') . $custom_unit['base'] : "";
                $text_collective = !empty($custom_unit['collective']) ? $this->language->get('text_per') . $custom_unit['collective'] : "";

                $data['price_collective'] = $this->currency->format($this->tax->calculate($product_info['price_collective'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                
                if ($custom_unit['price_in'] == 'b') {
                    $data['price'] .= $text_base;
                }
                if ($custom_unit['price_in'] == 'a') {
                    $data['price'] .= $text_base;
                    $data['price'] .= "<br>";
                    $data['price'] .= $data['price_collective'] . $text_collective;
                }
                if ($custom_unit['price_in'] == 'c') {
                    $data['price'] = $data['price_collective'] . $text_collective;
                }

                if ($data['special']) {
                    $data['special_collective'] = $this->currency->format($this->tax->calculate($product_info['special_collective'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

                    if ($custom_unit['price_in'] == 'b') {
                        $data['special'] .= $text_base;
                    }
                    if ($custom_unit['price_in'] == 'a') {
                        $data['special'] .= $text_base;
                        $data['special'] .= "<br>";
                        $data['special'] .= $data['special_collective'] . $text_collective;
                    }
                    if ($custom_unit['price_in'] == 'c') {
                        $data['special'] = $data['special_collective'] . $text_collective;
                    }
                }

                if ($data['tax']) {
                    $data['tax_collective'] = $this->currency->format($data['special'] ? $product_info['special_collective'] : $product_info['price_collective'], $this->session->data['currency']);

                    if ($custom_unit['price_in'] == 'b') {
                        $data['tax'] .= $text_base;
                    }
                    if ($custom_unit['price_in'] == 'a') {
                        $data['tax'] .= $text_base;
                        $data['tax'] .= "<br>" . $this->language->get('text_tax') . " ";
                        $data['tax'] .= $data['tax_collective'] . $text_collective;
                    }
                    if ($custom_unit['price_in'] == 'c') {
                        $data['tax'] = $data['tax_collective'] . $text_collective;
                    }
                }

                if ($data['discounts'] && $product_info['discount_collective']) {
                    foreach ($data['discounts'] as $key => $discount) {
                        if (isset($product_info['discount_collective'][$discount['quantity']])) {
                            if ($custom_unit['price_in'] == 'b') {
                                $data['discounts'][$key]['price'] .= $text_base;
                            } elseif ($custom_unit['price_in'] == 'c' || $custom_unit['price_in'] == 'a') {
                                $price = $this->currency->format($this->tax->calculate($product_info['discount_collective'][$discount['quantity']]['price_collective'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                                $data['discounts'][$key]['price'] = $price . $text_collective;
                            }

                            if ($custom_unit['order_in'] == 'b') {
                                $data['discounts'][$key]['quantity'] .= $custom_unit['base'];
                            } elseif ($custom_unit['order_in'] == 'c') {
                                $data['discounts'][$key]['quantity'] .= $custom_unit['collective'];
                            }
                        }
                    }
                }
            }

            if ($custom_unit['order_in'] == 'c') {
                if (empty($custom_unit['collective'])) {
                    $data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum'], $custom_unit['base']);
                } else {
                    $data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum'], $custom_unit['collective']);
                }
            }
            if ($custom_unit['order_in'] == 'b') {
                if (empty($custom_unit['base'])) {
                    $this->language->set('text_in', '');
                    
                    $data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum'], $custom_unit['collective']);
                } else {
                    $data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum'], $custom_unit['base']);
                }

                $this->language->set('text_of', '');
                $custom_unit['collective'] = false;
                $custom_unit['value'] = false;
            }
            if ($custom_unit['order_in'] == 'c' && (empty($custom_unit['base']) || empty($custom_unit['collective']))) {
                $this->language->set('text_of', '');
                $custom_unit['value'] = false;
            }
            $this->language->set('text_per', '');

            $view = $this->load->view('extension/myoc/cunit', $custom_unit);

            $this->language->set('entry_qty', $this->language->get('entry_qty') . $view);
        }
    }

    public function addCartCustomUnit(&$route, &$data)
    {
        if (!$this->config->get('myoc_cunit_status')) {
            return;
        }

        $this->load->language('extension/myoc/cunit');

        $text_per = $this->language->get('text_per');
        $text_of = $this->language->get('text_of');

        if (isset($data['products']) && $data['products']) {
            $cart_products = $this->cart->getProducts();

            foreach ($data['products'] as $key => $product) {
                foreach ($cart_products as $cart_product) {
                    if ($product['cart_id'] == $cart_product['cart_id']) {
                        $custom_unit = $this->myoc_cunit->getCustomUnit($cart_product['product_id']);

                        if ($custom_unit && (!empty($custom_unit['base']) || !empty($custom_unit['collective']))) {
                            $this->language->set('text_in', '');

                            if ($custom_unit['order_in'] == 'b' || empty($custom_unit['base']) || empty($custom_unit['collective'])) {
                                $this->language->set('text_of', '');
                                $custom_unit['value'] = false;
                                if ($custom_unit['order_in'] == 'b' && !empty($custom_unit['base'])) {
                                    $custom_unit['collective'] = false;
                                }
                            } else {
                                $this->language->set('text_of', $text_of);
                            }

                            if ($route == 'common/cart') {
                                $this->language->set('text_per', '');

                                $view = $this->load->view('extension/myoc/cunit', $custom_unit);

                                $data['products'][$key]['quantity'] .= $view;
                            }
                            if ($route == 'checkout/cart' || $route == 'checkout/confirm') {
                                $this->language->set('text_per', $text_per);

                                $view = $this->load->view('extension/myoc/cunit', $custom_unit);

                                $data['products'][$key]['price'] .= $view;
                            }

                            // Check product minimum
                            $product_total = 0;

                            foreach ($cart_products as $cart_product_2) {
                                if ($cart_product_2['product_id'] == $cart_product['product_id']) {
                                    $product_total += $cart_product_2['quantity'];
                                }
                            }

                            if ($cart_product['minimum'] > $product_total) {
                                $this->language->set('text_per', '');

                                $view = $this->load->view('extension/myoc/cunit', $custom_unit);

                                $data['error_warning'] = sprintf($this->language->get('error_minimum'), $cart_product['name'], $cart_product['minimum'], $view);
                            }
                        }
                    }
                }
            }
        }
    }

    public function addProductListCustomUnit(&$route, &$data)
    {
        if (!$this->config->get('myoc_cunit_status')) {
            return;
        }

        $this->load->language('extension/myoc/cunit');

        $text_of = $this->language->get('text_of');

        if (isset($data['products']) && $data['products']) {
            $this->load->model('catalog/product');

            foreach ($data['products'] as $key => $product) {
                $custom_unit = $this->myoc_cunit->getCustomUnit($product['product_id']);

                $product_info = $this->model_catalog_product->getProduct($product['product_id']);

                if ($custom_unit && $product_info && $data['products'][$key]['price'] && (!empty($custom_unit['base']) || !empty($custom_unit['collective']))) {
                    $text_base = !empty($custom_unit['base']) ? $this->language->get('text_per') . $custom_unit['base'] : "";
                    $text_collective = !empty($custom_unit['collective']) ? $this->language->get('text_per') . $custom_unit['collective'] . (!empty($custom_unit['base']) ? $this->language->get('text_of') . $custom_unit['value'] . $custom_unit['base'] : "") : "";
                    
                    $price_collective = $this->currency->format($this->tax->calculate($product_info['price_collective'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

                    if ($custom_unit['price_in'] == 'b') {
                        $data['products'][$key]['price'] .= $text_base;
                    }
                    if ($custom_unit['price_in'] == 'a') {
                        $data['products'][$key]['price'] .= $text_base;
                        $data['products'][$key]['price'] .= "<br>";
                        $data['products'][$key]['price'] .= $price_collective . $text_collective;
                    }
                    if ($custom_unit['price_in'] == 'c') {
                        $data['products'][$key]['price'] = $price_collective . $text_collective;
                    }

                    if (isset($data['products'][$key]['special']) && $data['products'][$key]['special']) {
                        $special_collective = $this->currency->format($this->tax->calculate($product_info['special_collective'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

                        if ($custom_unit['price_in'] == 'b') {
                            $data['products'][$key]['special'] .= $text_base;
                        }
                        if ($custom_unit['price_in'] == 'a') {
                            $data['products'][$key]['special'] .= $text_base;
                            $data['products'][$key]['special'] .= "<br>";
                            $data['products'][$key]['special'] .= $special_collective . $text_collective;
                        }
                        if ($custom_unit['price_in'] == 'c') {
                            $data['products'][$key]['special'] = $special_collective . $text_collective;
                        }
                    }

                    if (isset($data['products'][$key]['tax']) && $data['products'][$key]['tax']) {
                        $tax_collective = $this->currency->format($data['products'][$key]['special'] ? $product_info['special_collective'] : $product_info['price_collective'], $this->session->data['currency']);

                        if ($custom_unit['price_in'] == 'b') {
                            $data['products'][$key]['tax'] .= $text_base;
                        }
                        if ($custom_unit['price_in'] == 'a') {
                            $data['products'][$key]['tax'] .= $text_base;
                            $data['products'][$key]['tax'] .= "<br>" . $this->language->get('text_tax') . " ";
                            $data['products'][$key]['tax'] .= $tax_collective . $text_collective;
                        }
                        if ($custom_unit['price_in'] == 'c') {
                            $data['products'][$key]['tax'] = $tax_collective . $text_collective;
                        }
                    }
                }
            }
        }
    }
    
    public function addOrderCustomUnit(&$route, &$args)
    {
        if (!$this->config->get('myoc_cunit_status')) {
            return;
        }

        $this->load->language('extension/myoc/cunit');

        $text_of = $this->language->get('text_of');

        if (is_array($args[0])) { //addOrder
            $data = $args[0];
        } elseif (is_array($args[1])) { //editOrder
            $data = $args[1];
        }

        if (isset($data['products']) && $data['products']) {
            foreach ($data['products'] as $key => $product) {
                $custom_unit = $this->myoc_cunit->getCustomUnit($product['product_id']);

                if ($custom_unit && $data['products'][$key]['price']) {
                    $quantity = $data['products'][$key]['quantity'];

                    if ($custom_unit['decimal']) {
                        $data['products'][$key]['quantity'] *= $custom_unit['value'];
                    }

                    $this->language->set('text_in', '');
                    $this->language->set('text_per', '');
                    
                    if ($custom_unit['order_in'] == 'b' || empty($custom_unit['base']) || empty($custom_unit['collective'])) {
                        $this->language->set('text_of', '');
                        $custom_unit['value'] = false;
                        if ($custom_unit['order_in'] == 'b' && !empty($custom_unit['base'])) {
                            $custom_unit['collective'] = false;
                        }
                    } else {
                        $this->language->set('text_of', $text_of);
                    }

                    $view = $this->load->view('extension/myoc/cunit', $custom_unit);

                    $data['products'][$key]['name'] .= " [" . $quantity . $view . "]";
                }
            }
            if (is_array($args[0])) { //addOrder
                $args[0] = $data;
            } elseif (is_array($args[1])) { //editOrder
                $args[1] = $data;
            }
        }
    }

    public function getOrderProductCustomUnit(&$route, &$args, &$output)
    {
        if (!$this->config->get('myoc_cunit_status')) {
            return;
        }

        $matches = array();

        if (isset($output['name']) && preg_match('/\[([0-9]+(\.[0-9]+)?)/', $output['name'], $matches) === 1) {
            $output['quantity'] = $matches[1];
        }
    }

    public function getOrderProductsCustomUnit(&$route, &$args, &$output)
    {
        if (!$this->config->get('myoc_cunit_status')) {
            return;
        }

        if ($output) {
            foreach ($output as $key => $order_product) {
                $matches = array();

                if (preg_match('/\[([0-9]+(\.[0-9]+)?)/', $order_product['name'], $matches) === 1) {
                    $output[$key]['quantity'] = $matches[1];
                }
            }
        }
    }
}