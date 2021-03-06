<?php 
class ControllerExtensionTotalCodFee extends Controller { 
	private $error = array(); 
	 
	public function index() { 
		$this->load->language('extension/total/cod_fee');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('total_cod_fee', $this->request->post);
						
			$this->session->data['success'] = $this->language->get('text_success');
			
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true));
		}
		
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_none'] = $this->language->get('text_none');
		$data['text_fixed'] = $this->language->get('text_fixed');
		$data['text_perc'] = $this->language->get('text_perc');
		
		$data['entry_total_cod_free'] = $this->language->get('entry_total_cod_free');
		$data['entry_total_no_cod'] = $this->language->get('entry_total_no_cod');
		$data['help_total_cod_free'] = $this->language->get('help_total_cod_free');
		$data['help_total_no_cod'] = $this->language->get('help_total_no_cod');
		$data['entry_fee'] = $this->language->get('entry_fee');
		$data['help_fee'] = $this->language->get('help_fee');
		$data['entry_fee_min'] = $this->language->get('entry_fee_min');
		$data['help_fee_min'] = $this->language->get('help_fee_min');
		$data['entry_fee_max'] = $this->language->get('entry_fee_max');
		$data['help_fee_max'] = $this->language->get('help_fee_max');
		$data['entry_fee_type'] = $this->language->get('entry_fee_type');
		$data['entry_tax_class'] = $this->language->get('entry_tax_class');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
					
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

 		if (isset($this->error['fee'])) {
			$data['error_fee'] = $this->error['fee'];
		} else {
			$data['error_fee'] = '';
		}

   		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),      		
      		'separator' => false
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_total'),
			'href'      => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true),
      		'separator' => ' :: '
   		);
		
   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/total/cod_fee', 'user_token=' . $this->session->data['user_token'], true),
      		'separator' => ' :: '
   		);
		
		$data['action'] = $this->url->link('extension/total/cod_fee', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true);

		if (isset($this->request->post['total_cod_fee_total_cod_free'])) {
			$data['total_cod_fee_total_cod_free'] = $this->request->post['total_cod_fee_total_cod_free'];
		} else {
			$data['total_cod_fee_total_cod_free'] = $this->config->get('total_cod_fee_total_cod_free');
		}
		
		if (isset($this->request->post['total_cod_fee_total_no_cod'])) {
			$data['total_cod_fee_total_no_cod'] = $this->request->post['total_cod_fee_total_no_cod'];
		} else {
			$data['total_cod_fee_total_no_cod'] = $this->config->get('total_cod_fee_total_no_cod');
		}
		
		if (isset($this->request->post['total_cod_fee_fee'])) {
			$data['total_cod_fee_fee'] = $this->request->post['total_cod_fee_fee'];
		} else {
			$data['total_cod_fee_fee'] = $this->config->get('total_cod_fee_fee');
		}

		if (isset($this->request->post['total_cod_fee_fee_type'])) {
			$data['total_cod_fee_fee_type'] = $this->request->post['total_cod_fee_fee_type'];
		} else {
			$data['total_cod_fee_fee_type'] = $this->config->get('total_cod_fee_fee_type');
		}

		if (isset($this->request->post['total_cod_fee_fee_min'])) {
			$data['total_cod_fee_fee_min'] = $this->request->post['total_cod_fee_fee_min'];
		} else {
			$data['total_cod_fee_fee_min'] = $this->config->get('total_cod_fee_fee_min');
		}

		if (isset($this->request->post['total_cod_fee_fee_max'])) {
			$data['total_cod_fee_fee_max'] = $this->request->post['total_cod_fee_fee_max'];
		} else {
			$data['total_cod_fee_fee_max'] = $this->config->get('total_cod_fee_fee_max');
		}

		if (isset($this->request->post['total_cod_fee_tax_class_id'])) {
			$data['total_cod_fee_tax_class_id'] = $this->request->post['total_cod_fee_tax_class_id'];
		} else {
			$data['total_cod_fee_tax_class_id'] = $this->config->get('total_cod_fee_tax_class_id');
		}
		
		if (isset($this->request->post['total_cod_fee_status'])) {
			$data['total_cod_fee_status'] = $this->request->post['total_cod_fee_status'];
		} else {
			$data['total_cod_fee_status'] = $this->config->get('total_cod_fee_status');
		}

		if (isset($this->request->post['total_cod_fee_sort_order'])) {
			$data['total_cod_fee_sort_order'] = $this->request->post['total_cod_fee_sort_order'];
		} else {
			$data['total_cod_fee_sort_order'] = $this->config->get('total_cod_fee_sort_order');
		}
		
		$this->load->model('localisation/tax_class');
		
		$data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/total/cod_fee', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/total/cod_fee')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->request->post['total_cod_fee_fee']) {
			$this->error['fee'] = $this->language->get('error_fee');
		}
		
		if (!$this->error) {
			return true;
		} else {
			return false;
		}	
	}
}
?>