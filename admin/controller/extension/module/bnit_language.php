<?php
class ControllerExtensionModuleBnitLanguage extends Controller {
	private $error = array();
	

	public function index() {		

		$this->load->language('extension/module/bnit_language');
		
		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		
		
		if (!$this->user->hasPermission('access', 'extension/module/bnit_language')) {
			$this->error['permission'] = true;
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		
		
		$data = array();

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/bnit_language', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['lnkcancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		//installation links
		$data['lnkinstallfull'] = $this->url->link('extension/module/bnit_language', 'user_token=' . $this->session->data['user_token'] . '&lnginstall=0', true);
		$data['lnkinstalleng'] = $this->url->link('extension/module/bnit_language', 'user_token=' . $this->session->data['user_token'] . '&lnginstall=1', true);
		$data['lnkinstallextraonly'] = $this->url->link('extension/module/bnit_language', 'user_token=' . $this->session->data['user_token'] . '&lnginstall=2', true);
		$data['lnklanguninstall'] = $this->url->link('extension/module/bnit_language', 'user_token=' . $this->session->data['user_token'] . '&lnginstall=3', true);




		//loading model
		$this->load->model('extension/module/bnit_language');
		


		/*
		int value for the Language installation
		lang_installation_status
		0 - Not Installed
		1 - Secondary language version (only main)
		2 - Full language Version installed
		3 -the language is already installed in opencart but the installation status is 0
		*/
		$data['lang_installation_status'] = empty($this->config->get('module_bnit_language_statuslang')) ? 0 : intval($this->config->get('module_bnit_language_statuslang'));

		//getting the version from the settings
		$data['lang_extension_version'] = $this->config->get('module_bnit_language_version');
		
		//checking if the language (from code) is already installed
		$islanguageinstalledbycode = $this->model_extension_module_bnit_language->islanguageinstalledbycode('it-it') > 0  ? true : false;
		/*
		if the language is already installed and the installation status is still 0 or empty
		3 - Language detected but not installed/configured with the extension
		*/
		if( $islanguageinstalledbycode && $data['lang_installation_status'] == 0) {
			$data['lang_installation_status'] = 3;
		}
		
		
		
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate()) {

			
			//installation requests
			if( isset($this->request->post['lnginstall']) ) {
				switch( $this->request->post['lnginstall'] ) {
				//Install FULL main+extra
				case 0:
					//install only if the installation status is 0
					if($data['lang_installation_status'] == 0) { 
						//installing full main+extra
						$this->model_extension_module_bnit_language->sqlinstall(0);
						$this->model_extension_module_bnit_language->sqlinstall(1);

						$this->model_extension_module_bnit_language->editSetting('module_bnit_language', ['module_bnit_language_statuslang'=>2]);
						//changing $data['lang_installation_status'] since we changed it
						$data['lang_installation_status'] = '2';
						
						$data['success'] = $this->language->get('text_success');
					} else {
						$this->error['langinstallation'] = true;
						$data['langinstallationerrcode'] = 0;
					}
				break;
				//Install main/eng shops only
				case 1:
					//install only if the installation status is 0
					if($data['lang_installation_status'] == 0) { 
						//installing main only - eng shops
						$this->model_extension_module_bnit_language->sqlinstall(0);

						$this->model_extension_module_bnit_language->editSetting('module_bnit_language', ['module_bnit_language_statuslang'=>1]);
						//changing $data['lang_installation_status'] since we changed it
						$data['lang_installation_status'] = '1';

						$data['success'] = $this->language->get('text_success');
					} else {
						$this->error['langinstallation'] = true;
						$data['langinstallationerrcode'] = 1;
					}
				break;
				case 2:
					//adding extra data if the installation status is 1 (main only)
					if($data['lang_installation_status'] == 1) { 
						//installing main only - eng shops
						$this->model_extension_module_bnit_language->sqlinstall(1);
						
						$this->model_extension_module_bnit_language->editSetting('module_bnit_language', ['module_bnit_language_statuslang'=>2]);
						//changing $data['lang_installation_status'] since we changed it
						$data['lang_installation_status'] = '2';
						
						$data['success'] = $this->language->get('text_success');
					} else {
						$this->error['langinstallation'] = true;
						$data['langinstallationerrcode'] = 2;
					}
				break;
				case 3:
					//delete installed language
					if($data['lang_installation_status'] !== 0) { 
						//installing main only - eng shops
						$this->model_extension_module_bnit_language->sqlinstall(2);

						$this->model_extension_module_bnit_language->editSetting('module_bnit_language', ['module_bnit_language_statuslang'=>0]);
						//changing $data['lang_installation_status'] since we changed it
						$data['lang_installation_status'] = '0';
						
						$data['success'] = $this->language->get('text_success');
					} else {
						$this->error['langinstallation'] = true;
						$data['langinstallationerrcode'] = 3;
					}
				break;
				case 4:
					//tries to restore a misconfigured installation
					if($data['lang_installation_status'] == 3) { 

						$detection = $this->model_extension_module_bnit_language->detectlanguageinstallation();
						
						if( empty($detection) ) {
													$this->error['langinstallation'] = true;
													$data['langinstallationerrcode'] = 'Cannot reconfigure';
						} else {
							$this->model_extension_module_bnit_language->editSetting('module_bnit_language', ['module_bnit_language_statuslang'=> $detection ]);
							//changing $data['lang_installation_status'] since we changed it
							$data['lang_installation_status'] = $detection;
							$data['success'] = $this->language->get('text_success');
						}
						
					} else {
						$this->error['langinstallation'] = true;
						$data['langinstallationerrcode'] = 3;
					}
				break;
				default:
					$this->error['langinstallation'] = true;
					$data['langinstallationerrcode'] = 'general';
				break;
				}
				
			}
		}

		
		$data['error'] = $this->error;	
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/module/bnit_language', $data));
	}

	public function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/bnit_language')) {
			$this->error['permission'] = true;
			return false;
		}
		
		/* no need to enable/disable the module
		if (!utf8_strlen($this->request->post['module_bnit_language_status'])) {
			$this->error['module_bnit_language_status'] = true;
		}
		*/

		return empty($this->error);
	}
	
	public function install() {
		$module_version = '0.0.3';
		$this->load->model('setting/setting');
		

		
		//enabling the status and adding the version
		$this->model_setting_setting->editSetting('module_bnit_language', ['module_bnit_language_status'=>'1','module_bnit_language_version'=>$module_version]);
	}
	
	public function uninstall() {
		
		$this->load->model('setting/setting');
		$this->model_setting_setting->deleteSetting('module_bnit_language');
	}
}
