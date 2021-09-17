<?php
class ModelExtensionTotalMyoc extends Model {
    public function getTotal($total_data) {
        // Totals
        $this->load->model('setting/extension');

        $total_data['totals'] = array();
        $total_data['taxes'] = $this->cart->getTaxes();
        $total_data['total'] = 0;

        // Display prices
        if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
            $sort_order = array();

            $results = array_merge($this->model_setting_extension->getExtensions('total'), $this->model_setting_extension->getExtensions('myoc'));

            foreach ($results as $key => $value) {
                if ($value['type'] == 'myoc') {
                    $query_module = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE code = 'myoc_" . $value['code'] . "'");
                    if ($query_module->num_rows) {
                        foreach ($query_module->rows as $row) {
                            $setting = json_decode($row['setting'], true);
                            if (isset($setting['total_sort_order'])) {
                                $results[] = array(
                                    'module_id' => $row['module_id'],
                                    'type' => 'myoc',
                                    'code' => $value['code']
                                );

                                $sort_order[max(array_keys($results))] = $setting['total_sort_order'];
                            }
                        }
                    }
                    unset($results[$key]);
                } else {
                    $sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
                }
            }
            array_multisort($sort_order, SORT_ASC, $results);

            foreach ($results as $result) {
                if ($this->config->get($result['type'] . '_' . $result['code'] . '_status') && $result['code'] != 'myoc') {
                    $this->load->model('extension/' . $result['type'] . '/' . $result['code']);
                    
                    // We have to put the totals in an array so that they pass by reference.
                    $this->{'model_extension_' . $result['type'] . '_' . $result['code']}->getTotal($total_data, isset($result['module_id']) ? $result['module_id'] : false);
                }
            }
        }
    }
}