<?php
class ModelExtensionTotalCodFee extends Model {
	public function getTotal($total) {
		$cft = $this->config->get('total_cod_fee_total_cod_free');
		
		if ($this->cart->getSubTotal() && (empty($cft) || ($this->cart->getSubTotal() < $cft))) {
			$this->load->language('extension/total/cod_fee');
		 	
			if((isset($this->session->data['payment_method']) && ($this->session->data['payment_method']['code'] == 'cod')) || (isset($this->request->post['payment']) && ($this->request->post['payment']=='cod'))) {
				if($this->config->get('total_cod_fee_fee_type') == 'f') {
					$fee = $this->config->get('total_cod_fee_fee');
				} else {
					$min = $this->config->get('total_cod_fee_fee_min');
					$max = $this->config->get('total_cod_fee_fee_max');
					$fee = ($this->cart->getSubTotal() * $this->config->get('total_cod_fee_fee')) / 100;
					if(!empty($min) && ($fee < $min)) $fee = $min;
					if(!empty($max) && ($fee > $max)) $fee = $max;
				}
				
				$total['totals'][] = array( 
					'code'       => 'cod_fee',
					'title'      => $this->language->get('text_cod_fee'),
					'text'       => $this->currency->format($fee, $this->session->data['currency']),
					'value'      => $fee,
					'sort_order' => $this->config->get('total_cod_fee_sort_order')
				);
				
				if ($this->config->get('total_cod_fee_tax_class_id')) {
					$tax_rates = $this->tax->getRates($fee, $this->config->get('total_cod_fee_tax_class_id'));
					
					foreach ($tax_rates as $tax_rate) {
						if (!isset($total['taxes'][$tax_rate['tax_rate_id']])) {
							$total['taxes'][$tax_rate['tax_rate_id']] = $tax_rate['amount'];
						} else {
							$total['taxes'][$tax_rate['tax_rate_id']] += $tax_rate['amount'];
						}
					}
				}
				
				$total['total'] += $fee;
			}
		}
	}
}
?>