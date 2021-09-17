<?php
class ControllerExtensionExtensionMyoc extends Controller {
	private $error = array();
	const MYOC_EXT_INSTALLER_VERSION = '1.1.0';

	public function index() {
		$this->load->language('extension/extension/myoc');

		$this->load->model('setting/extension');

		$this->load->model('setting/module');

		$this->getList();
	}

	public function install() {
		$this->load->language('extension/extension/myoc');

		$this->load->model('setting/extension');

		$this->load->model('setting/module');

		if ($this->validate()) {
			$this->model_setting_extension->install('myoc', $this->request->get['extension']);

			$extension_installs = $this->model_setting_extension->getExtensionInstalls(0, 999);
	
			$myoc_installer_extension_install_id = 0;

			$myoc_installer_extension_paths = array();

			if ($extension_installs) {
				foreach ($extension_installs as $myoc_installer_extension_install) {
					if ($myoc_installer_extension_install['filename'] == 'myoc.installer.ocmod.zip') {
						$myoc_installer_extension_install_id = $myoc_installer_extension_install['extension_install_id'];
						
						$extension_paths = $this->model_setting_extension->getExtensionPathsByExtensionInstallId($myoc_installer_extension_install['extension_install_id']);
						
						foreach ($extension_paths as $extension_path) {
							$myoc_installer_extension_paths[] = $extension_path['path'];
						}

						break;
					}
				}
				
				if ($myoc_installer_extension_install_id) {
					// Delete all myoc_installer extension paths in extension and add them back to the existing myoc_installer extension paths if not exist
					foreach ($extension_installs as $extension_install) {
						if ($extension_install['filename'] == 'myoc.' . str_replace('_', '', $this->request->get['extension']) . '.ocmod.zip') {
							$extension_paths = $this->model_setting_extension->getExtensionPathsByExtensionInstallId($extension_install['extension_install_id']);
							if ($extension_paths) {
								foreach ($extension_paths as $extension_path) {
									if (strpos(basename($extension_path['path']), $this->request->get['extension']) === FALSE) {
										$this->model_setting_extension->deleteExtensionPath($extension_path['extension_path_id']);
										
										if (!in_array($extension_path['path'], $myoc_installer_extension_paths)) {
											$this->model_setting_extension->addExtensionPath($myoc_installer_extension_install_id, $extension_path['path']);
										}
									}
								}
							}
							break;
						}
					}
				}
			}
			
			$this->load->model('user/user_group');

			$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/myoc/' . $this->request->get['extension']);
			$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/myoc/' . $this->request->get['extension']);

			// Call install method if it exsits
			$this->load->controller('extension/myoc/' . $this->request->get['extension'] . '/install');

			$this->session->data['success'] = $this->language->get('text_success');
		} else {
			$this->session->data['error'] = $this->error['warning'];
		}
	
		$this->getList();
	}

	public function uninstall() {
		$this->load->language('extension/extension/myoc');

		$this->load->model('setting/extension');

		$this->load->model('setting/module');

		if ($this->validate()) {
			$this->model_setting_extension->uninstall('myoc', $this->request->get['extension']);

			$this->model_setting_module->deleteModulesByCode('myoc_' . $this->request->get['extension']);
			
			// Call uninstall method if it exsits
			$this->load->controller('extension/myoc/' . $this->request->get['extension'] . '/uninstall');

			$this->session->data['success'] = $this->language->get('text_success');
		}

		$this->getList();
	}

	public function delete() {
		$this->load->language('extension/extension/myoc');

		$this->load->model('setting/extension');

		$this->load->model('setting/module');

		if (isset($this->request->get['module_id']) && $this->validate()) {
			$this->model_setting_module->deleteModule($this->request->get['module_id']);

			$this->session->data['success'] = $this->language->get('text_success');
		}
		
		$this->getList();
	}

	protected function getList() {
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$extensions = $this->model_setting_extension->getInstalled('myoc');

		foreach ($extensions as $key => $value) {
			if (!is_file(DIR_APPLICATION . 'controller/extension/myoc/' . $value . '.php') && !is_file(DIR_APPLICATION . 'controller/myoc/' . $value . '.php')) {
				$this->model_setting_extension->uninstall('myoc', $value);

				unset($extensions[$key]);
			}
		}

		$data['extensions'] = array();

		// Create a new language container so we don't pollute the current one
		$language = new Language($this->config->get('config_language'));
		
		// Compatibility code for old extension folders
		$files = glob(DIR_APPLICATION . 'controller/extension/myoc/*.php');

		if ($files) {
			foreach ($files as $file) {
				$extension = basename($file, '.php');

				$this->load->language('extension/myoc/' . $extension, 'extension');

				$module_data = array();

				$modules = $this->model_setting_module->getModulesByCode('myoc_' . $extension);

				foreach ($modules as $module) {
					if ($module['setting']) {
						$setting_info = json_decode($module['setting'], true);
					} else {
						$setting_info = array();
					}
					
					$module_data[] = array(
						'module_id'     => $module['module_id'],
						'name'          => $module['name'],
						'documentation' => $this->language->get('extension')->get('url_documentation'),
						'status'        => (isset($setting_info['status']) && $setting_info['status']) ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
						'edit'          => $this->url->link('extension/myoc/' . $extension, 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $module['module_id'], true),
						'delete'        => $this->url->link('extension/extension/myoc/delete', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $module['module_id'], true)
					);
				}

				$data['extensions'][] = array(
					'name'          => $this->language->get('extension')->get('heading_title'),
					'documentation' => $this->language->get('extension')->get('url_documentation'),
					'status'        => $this->config->get('myoc_' . $this->language->get('extension')->get('text_code') . '_status') ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
					'module'        => $module_data,
					'install'       => $this->url->link('extension/extension/myoc/install', 'user_token=' . $this->session->data['user_token'] . '&extension=' . $extension, true),
					'uninstall'     => $this->url->link('extension/extension/myoc/uninstall', 'user_token=' . $this->session->data['user_token'] . '&extension=' . $extension, true),
					'installed'     => in_array($extension, $extensions),
					'edit'          => $this->url->link('extension/myoc/' . $extension, 'user_token=' . $this->session->data['user_token'], true)
				);
			}
		}

		$sort_order = array();

		foreach ($data['extensions'] as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $data['extensions']);

		$data['text_version'] = sprintf($this->language->get('text_version'), self::MYOC_EXT_INSTALLER_VERSION);

		$this->response->setOutput($this->load->view('extension/extension/myoc', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/extension/myoc')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
