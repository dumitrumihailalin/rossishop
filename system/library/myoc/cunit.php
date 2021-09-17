<?php
namespace Myoc;
class Cunit {
    private $custom_units = array();
    
    public function __construct($registry) {
        $this->db = $registry->get('db');
        $this->config = $registry->get('config');
        $this->customer = $registry->get('customer');

        if ($this->customer->isLogged()) {
            $customer_group_id = $this->customer->getGroupId();
        } else {
            $customer_group_id = 0;
        }

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "myoc_cunit cu LEFT JOIN " . DB_PREFIX . "myoc_cunit_description cd ON (cu.custom_unit_id = cd.custom_unit_id) WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND cu.status = '1'");

        if($query->num_rows) {
            foreach ($query->rows as $result) {
                $customer_groups = unserialize($result['customer_groups']);
                $stores = unserialize($result['stores']);

                if(!empty($stores) && in_array($this->config->get('config_store_id'), $stores) && (!$result['login'] || (!empty($customer_groups) && $this->customer->isLogged() && in_array($this->customer->getGroupId(), $customer_groups)))) {
                    $this->custom_units[$result['custom_unit_id']] = array(
                        'custom_unit_id' => $result['custom_unit_id'],
                        'base' => $result['base'],
                        'collective' => $result['collective'],
                        'value' => (floor($result['value']) != $result['value']) ? (float)$result['value'] : (int)$result['value'],
                        'decimal' => $result['decimal'],
                        'price_in' => $result['price_in'],
                        'order_in' => $result['order_in'],
                        'products' => unserialize($result['products']),
                        'categories' => unserialize($result['categories']),
                        'manufacturers' => unserialize($result['manufacturers']),
                        'login' => $result['login'],
                        'customer_groups' => $customer_groups,
                        'stores' => $stores
                    );
                }
            }
        }
    }

    public function getCustomUnit($product_id) {
        $product_query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) 
            WHERE p.product_id = '" . (int)$product_id . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

        if($this->custom_units && $product_query->num_rows) {
            $product_info = $product_query->row;

            $product_categories_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");
            
            $product_categories = $product_categories_query->rows;

            $custom_unit_id = 0;

            foreach ($this->custom_units as $custom_unit) {
                if (is_array($custom_unit['products']) && in_array($product_id, $custom_unit['products'])) {
                    $custom_unit_id = $custom_unit['custom_unit_id'];
                    break;
                }

                foreach ($product_categories as $product_category) {
                    if (is_array($custom_unit['categories']) && in_array($product_category['category_id'], $custom_unit['categories'])) {
                        $custom_unit_id = $custom_unit['custom_unit_id'];
                        break 2;
                    }
                }
                
                if (is_array($custom_unit['manufacturers']) && in_array($product_info['manufacturer_id'], $custom_unit['manufacturers'])) {
                    $custom_unit_id = $custom_unit['custom_unit_id'];
                    break;
                }
            }

            if($custom_unit_id) {
                $custom_unit = $this->custom_units[$custom_unit_id];

                return $custom_unit;
            }
        }
        return array();
    }
}
?>