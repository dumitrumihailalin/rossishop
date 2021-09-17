<?php
class ControllerExtensionTotalMyoc extends Controller {
    public function index() {
        $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=myoc', true));
    }

    public function install() {
        $this->load->model('setting/setting');

        $this->model_setting_setting->editSetting('total_myoc', array('total_myoc_status' => 1, 'total_myoc_sort_order' => 999));
    }
}
