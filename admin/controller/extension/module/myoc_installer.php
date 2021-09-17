<?php
class ControllerExtensionModuleMyocInstaller extends Controller {
	private $error = array();
	const MYOC_EXT_INSTALLER_VERSION = '1.1.0';

	public function index() {
		$this->load->language('extension/module/myoc_installer');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_myoc_installer', $this->request->post['data']);

			$this->load->model('user/user_group');
			
			if ($this->request->post['data']['module_myoc_installer_status']) {
				$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/extension/myoc');
				$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/extension/myoc');
			} else {
				$this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/extension/myoc');
				$this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/extension/myoc');
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

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

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/myoc_installer', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/myoc_installer', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['user_token'] = $this->session->data['user_token'];

		$data['text_goto_myoc'] = sprintf($this->language->get('text_goto_myoc'), $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=myoc'));

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} else {
			$data['status'] = $this->config->get('module_myoc_installer_status');
		}

		if (isset($this->request->post['debug'])) {
			$data['debug'] = $this->request->post['debug'];
		} else {
			$data['debug'] = $this->config->get('module_myoc_installer_debug');
		}

		$data['text_version'] = sprintf($this->language->get('text_version'), self::MYOC_EXT_INSTALLER_VERSION);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/myoc_installer', $data));
	}

	public function install() {
		$this->load->model('user/user_group');

		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/myoc');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/myoc');

		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/extension/myoc');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/extension/myoc');

		$this->load->model('setting/extension');

		$extension_installs = $this->model_setting_extension->getExtensionInstalls(0, 999);

		if (array_search('myoc.installer.ocmod.zip', array_column($extension_installs, 'filename')) === FALSE) {
			$this->model_setting_extension->addExtensionInstall('myoc.installer.ocmod.zip');
		}

		$this->load->model('setting/setting');

		$data = array(
			'module_myoc_installer_status' => 1,
			'module_myoc_installer_debug' => 0
		);

		$this->model_setting_setting->editSetting('module_myoc_installer', $data);
	
		$this->response->redirect($this->url->link('extension/extension/myoc', 'user_token=' . $this->session->data['user_token'], true));
	}

	public function uninstall() {
		$this->load->model('user/user_group');

		$this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/myoc');
		$this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/myoc');

		$this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/extension/myoc');
		$this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/extension/myoc');

		$this->load->model('setting/setting');

		$this->model_setting_setting->deleteSetting('module_myoc_installer');

		$this->response->redirect($this->url->link('extension/extension/module', 'user_token=' . $this->session->data['user_token'], true));
	}

	protected function validate() {
		$this->request->post['data'] = array();
		
		$this->request->post['data']['module_myoc_installer_status'] = $this->request->post['status'];
		
		$this->request->post['data']['module_myoc_installer_debug'] = $this->request->post['debug'];
		
		if (!$this->user->hasPermission('modify', 'extension/module/myoc_installer')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
