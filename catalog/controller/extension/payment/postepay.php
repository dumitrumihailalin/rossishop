<?php
class ControllerExtensionPaymentPostepay extends Controller {
	public function index() {
		$this->load->language('extension/payment/postepay');

		$data['bank'] = nl2br($this->config->get('payment_postepay_bank' . $this->config->get('config_language_id')));
		$data['payment_postepay_nco'] = $this->language->get('text_payment_1') .': <b>'. nl2br($this->config->get('payment_postepay_nco')).'</b>';
		$data['payment_postepay_ni'] =  $this->language->get('text_payment_2') .': <b>'.nl2br($this->config->get('payment_postepay_ni')).'</b>';
		$data['payment_postepay_cf'] =  $this->language->get('text_payment_3') .': <b>'.nl2br($this->config->get('payment_postepay_cf')).'</b>';
 

		return $this->load->view('extension/payment/postepay', $data);
	}

	public function confirm() {
		$json = array();
		
		if ($this->session->data['payment_method']['code'] == 'postepay') {
			$this->load->language('extension/payment/postepay');

			$this->load->model('checkout/order');

			$comment  = $this->language->get('text_instruction') . "\n\n";
			$comment .= $this->config->get('payment_postepay_bank' . $this->config->get('config_language_id')) . "\n\n";
			$comment .=  $this->language->get('text_payment_1') .': '.$this->config->get('payment_postepay_nco'). "\n\n";
			$comment .= $this->language->get('text_payment_2') .': '.$this->config->get('payment_postepay_ni') . "\n\n";
			$comment .=  $this->language->get('text_payment_3') .': '.$this->config->get('payment_postepay_cf') . "\n\n";

		
			$comment .= $this->language->get('text_payment');

			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_postepay_order_status_id'), $comment, true);
		
			$json['redirect'] = $this->url->link('checkout/success');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}