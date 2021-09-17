<?php
class ModelExtensionPaymentCOD extends Model {
	public function getMethod($address, $total) {
		$this->load->language('extension/payment/cod');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payment_cod_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if ($this->config->get('payment_cod_total') > 0 && $this->config->get('payment_cod_total') > $total) {
			$status = false;
		} elseif (!$this->cart->hasShipping()) {
			$status = false;
		} elseif (!$this->config->get('payment_cod_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}


			if(isset($this->session->data['shipping_method']['code'])) {
			  if(strpos($this->session->data['shipping_method']['code'],'ickup')) {
					$status = false;
				}
				
				$no_cod = $this->config->get('total_cod_fee_total_no_cod');
			
				if(!empty($no_cod) && (round($this->cart->getSubTotal(),2) >=  $no_cod)) {
					$status = false;
				}
			}
			
		$method_data = array();

		if ($status) {
			$method_data = array(
				'code'       => 'cod',
				'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('payment_cod_sort_order')
			);
		}

		return $method_data;
	}
}
