<?php
class ModelExtensionMyocCunit extends Model
{
    public function addCustomUnit($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "myoc_cunit SET
            status = '" . (int)$data['status'] . "',
            sort_order = '" . (int)$data['sort_order'] . "',
            `value` = '" . (float)$data['value'] . "',
            `decimal` = '" . (int)$data['decimal'] . "',
            `price_in` = '" . $this->db->escape($data['price_in']) . "',
            `order_in` = '" . $this->db->escape($data['order_in']) . "',
            products = '" . serialize(isset($data['products']) ? $data['products'] : array()) . "',
            categories = '" . serialize(isset($data['categories']) ? $data['categories'] : array()) . "',
            manufacturers = '" . serialize(isset($data['manufacturers']) ? $data['manufacturers'] : array()) . "',
            login = '" . (int)$data['login'] . "',
            customer_groups = '" . serialize(isset($data['customer_groups']) ? $data['customer_groups'] : array()) . "',
            stores = '" . serialize(isset($data['stores']) ? $data['stores'] : array()) . "',
            date_added = NOW(),
            date_modified = NOW()");

        $custom_unit_id = $this->db->getLastId();

        foreach ($data['cunit_description'] as $language_id => $value) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "myoc_cunit_description SET custom_unit_id = '" . (int)$custom_unit_id . "', language_id = '" . (int)$language_id . "', base = '" . $this->db->escape($value['base']) . "', collective = '" . $this->db->escape($value['collective']) . "'");
        }

        return $custom_unit_id;
    }
    
    public function editCustomUnit($custom_unit_id, $data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "myoc_cunit SET
            status = '" . (int)$data['status'] . "',
            sort_order = '" . (int)$data['sort_order'] . "',
            `value` = '" . (float)$data['value'] . "',
            `decimal` = '" . (int)$data['decimal'] . "',
            `price_in` = '" . $this->db->escape($data['price_in']) . "',
            `order_in` = '" . $this->db->escape($data['order_in']) . "',
            products = '" . serialize(isset($data['products']) ? $data['products'] : array()) . "',
            categories = '" . serialize(isset($data['categories']) ? $data['categories'] : array()) . "',
            manufacturers = '" . serialize(isset($data['manufacturers']) ? $data['manufacturers'] : array()) . "',
            login = '" . (int)$data['login'] . "',
            customer_groups = '" . serialize(isset($data['customer_groups']) ? $data['customer_groups'] : array()) . "',
            stores = '" . serialize(isset($data['stores']) ? $data['stores'] : array()) . "',
            date_modified = NOW()
            WHERE custom_unit_id = '" . (int)$custom_unit_id . "'");

        $this->db->query("DELETE FROM " . DB_PREFIX . "myoc_cunit_description WHERE custom_unit_id = '" . (int)$custom_unit_id . "'");

        foreach ($data['cunit_description'] as $language_id => $value) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "myoc_cunit_description SET custom_unit_id = '" . (int)$custom_unit_id . "', language_id = '" . (int)$language_id . "', base = '" . $this->db->escape($value['base']) . "', collective = '" . $this->db->escape($value['collective']) . "'");
        }
    }
    
    public function deleteCustomUnit($custom_unit_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "myoc_cunit WHERE custom_unit_id = '" . (int)$custom_unit_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "myoc_cunit_description WHERE custom_unit_id = '" . (int)$custom_unit_id . "'");
    }
    
    public function getCustomUnit($custom_unit_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "myoc_cunit c LEFT JOIN " . DB_PREFIX . "myoc_cunit_description cd ON (c.custom_unit_id = cd.custom_unit_id) WHERE c.custom_unit_id = '" . (int)$custom_unit_id . "'");
        
        $descriptions = $this->getCustomUnitDescriptions($custom_unit_id);

        return array(
            'custom_unit_id'    => $query->row['custom_unit_id'],
            'status'            => $query->row['status'],
            'sort_order'        => $query->row['sort_order'],
            'value'             => $query->row['value'],
            'decimal'           => $query->row['decimal'],
            'price_in'          => $query->row['price_in'],
            'order_in'          => $query->row['order_in'],
            'products'          => unserialize($query->row['products']),
            'categories'        => unserialize($query->row['categories']),
            'manufacturers'     => unserialize($query->row['manufacturers']),
            'login'             => $query->row['login'],
            'customer_groups'   => unserialize($query->row['customer_groups']),
            'stores'            => unserialize($query->row['stores']),
            'cunit_description' => $descriptions,
        );
    }

    public function getCustomUnitDescriptions($custom_unit_id)
    {
        $cunit_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "myoc_cunit_description WHERE custom_unit_id = '" . (int)$custom_unit_id . "'");

        foreach ($query->rows as $result) {
            $cunit_data[$result['language_id']] = array(
                'base' => $result['base'],
                'collective' => $result['collective'],
            );
        }

        return $cunit_data;
    }

    public function getCustomUnits($data = array())
    {
        $sql = "SELECT * FROM " . DB_PREFIX . "myoc_cunit c LEFT JOIN " . DB_PREFIX . "myoc_cunit_description cd ON (c.custom_unit_id = cd.custom_unit_id) WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        $sort_data = array(
            'c.sort_order',
            'cd.base',
            'cd.collective',
            'c.value',
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY sort_order";
        }
            
        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }
        
        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }
            
            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }
    
    public function getTotalCustomUnits()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "myoc_cunit");
        
        return $query->row['total'];
    }


    public function installTable()
    {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "myoc_cunit` (
            `custom_unit_id` int(11) NOT NULL AUTO_INCREMENT,
            `status` tinyint(1) NOT NULL DEFAULT '0',
            `sort_order` int(11) NOT NULL DEFAULT '0',
            `value` decimal(11, 4) NOT NULL DEFAULT '1.0000',
            `decimal` tinyint(1) NOT NULL DEFAULT '0',
            `price_in` enum('b','c','a') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'b',
            `order_in` enum('b','c') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'c',
            `products` text COLLATE utf8mb4_unicode_ci NOT NULL,
            `categories` text COLLATE utf8mb4_unicode_ci NOT NULL,
            `manufacturers` text COLLATE utf8mb4_unicode_ci NOT NULL,
            `login` tinyint(1) NOT NULL DEFAULT '0',
            `customer_groups` text COLLATE utf8mb4_unicode_ci NOT NULL,
            `stores` text COLLATE utf8mb4_unicode_ci NOT NULL,
            `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
            `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
            PRIMARY KEY (`custom_unit_id`)
            ) ENGINE='MyISAM' COLLATE 'utf8mb4_unicode_ci';");
            
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "myoc_cunit_description` (
            `custom_unit_id` int(11) NOT NULL,
            `language_id` int(11) NOT NULL DEFAULT '0',
            `base` text COLLATE utf8mb4_unicode_ci NULL,
            `collective` text COLLATE utf8mb4_unicode_ci NULL,
            PRIMARY KEY (`custom_unit_id`,`language_id`)
            ) ENGINE='MyISAM' COLLATE 'utf8mb4_unicode_ci';");
    }

    public function uninstallTable()
    {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "myoc_cunit`, `" . DB_PREFIX . "myoc_cunit_description`;");
    }
}
?>