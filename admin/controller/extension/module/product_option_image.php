<?php
class ControllerExtensionModuleProductOptionImage extends Controller {
	private $error = array(); 
	
	public function index() {   
	
		$this->update();
	
		$this->load->language('extension/module/product_option_image');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');
				
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('product_option_image', $this->request->post);		
					
			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
				
		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

  		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

  		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/product_option_image', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/product_option_image', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/product_option_image', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/product_option_image', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		//START
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		
		$data['entry_product_image_selector'] = $this->language->get('entry_product_image_selector');
		
		if (isset($this->request->post['product_option_image_product_image_selector']))
		{
			$data['product_option_image_product_image_selector'] = $this->request->post['product_option_image_product_image_selector'];
		}
		elseif ($this->config->has('product_option_image_product_image_selector'))
		{ 
			$data['product_option_image_product_image_selector'] = $this->config->get('product_option_image_product_image_selector');
		}
		else
		{
			$data['product_option_image_product_image_selector'] = '#image, #zoom1 img, #ma-zoom1 img, #main-image, div.image a.colorbox-product img, div.image #wrap a img, .zoomPad > img, .product-info .image > img, .product-image img, #zoom_01, .thumbnail > img:first, #gallery_zoom, .owl-item .item img';
		}
		//END		

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/module/product_option_image', $data));
	}
	
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/product_option_image')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->error) {
			return true;
		} else {
			return false;
		}	
	}
	
	public function install()
	{
		$this->load->model('extension/tool/misc_util');
		
		if($this->model_extension_tool_misc_util->existColumn('product_option_value', 'image_product_option_value') == false)
		{
			$query = "ALTER TABLE " . DB_PREFIX . "product_option_value ";
			$query .= "ADD COLUMN image_product_option_value VARCHAR(255) NOT NULL DEFAULT ''";
					
			$this->db->query($query);
		}
		
		if($this->model_extension_tool_misc_util->existColumn('cart', 'option_image') == false)
		{
			$query = "ALTER TABLE " . DB_PREFIX . "cart ";
			$query .= "ADD COLUMN option_image VARCHAR(500) NOT NULL DEFAULT ''";
					
			$this->db->query($query);
		}
	}
	
	private function update()
	{
		$this->load->model('extension/tool/misc_util');
		
		if($this->model_extension_tool_misc_util->existColumn('cart', 'option_image') == false)
		{
			$query = "ALTER TABLE " . DB_PREFIX . "cart ";
			$query .= "ADD COLUMN option_image VARCHAR(500) NOT NULL DEFAULT ''";
					
			$this->db->query($query);
		}
		else			
		{
			$query = "ALTER TABLE " . DB_PREFIX . "cart ";
			$query .= "MODIFY COLUMN option_image VARCHAR(500) NOT NULL DEFAULT ''";
					
			$this->db->query($query);
		}
	}
	
	public function uninstall()
	{
		$this->load->model('extension/tool/misc_util');
		
		if($this->model_extension_tool_misc_util->existColumn('product_option_value', 'image_product_option_value') == false)
		{
			$this->model_extension_tool_misc_util->removeColumn('product_option_value', 'image_product_option_value');
		}
	}
}
?>