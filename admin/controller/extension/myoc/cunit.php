<?php
class ControllerExtensionMyocCunit extends Controller
{
    private $error = array();
    const MYOC_CUNIT_VERSION = '2.1.0';

    public function index()
    {
        $this->load->language('extension/myoc/cunit');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/myoc/cunit');

        $this->getList();
    }
    
    public function add()
    {
        $this->load->language('extension/myoc/cunit');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/myoc/cunit');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $custom_unit_id = $this->model_extension_myoc_cunit->addCustomUnit($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function copy()
    {
        $this->load->language('extension/myoc/cunit');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/myoc/cunit');

        if (isset($this->request->post['selected']) && $this->validateList()) {
            foreach ($this->request->post['selected'] as $custom_unit_id) {
                $cunit = $this->model_extension_myoc_cunit->getCustomUnit($custom_unit_id);
                $cunit['status'] = 0;
                $this->model_extension_myoc_cunit->addCustomUnit($cunit);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'] . $url, true));
           }

        $this->getList();
    }

    public function edit()
    {
        $this->load->language('extension/myoc/cunit');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/myoc/cunit');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
              $this->model_extension_myoc_cunit->editCustomUnit($this->request->get['custom_unit_id'], $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete()
    {
        $this->load->language('extension/myoc/cunit');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/myoc/cunit');

        if (isset($this->request->post['selected']) && $this->validateList()) {
            foreach ($this->request->post['selected'] as $custom_unit_id) {
                $this->model_extension_myoc_cunit->deleteCustomUnit($custom_unit_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'] . $url, true));
           }

        $this->getList();
    }

    public function getList() {
        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'cd.base';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }
        
        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }
        
        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }
        
        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=myoc', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/myoc/cunit/sort', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['add'] = $this->url->link('extension/myoc/cunit/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['copy'] = $this->url->link('extension/myoc/cunit/copy', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('extension/myoc/cunit/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=myoc', true);

        $filter_data = array(
            'sort'  => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $cunit_total = $this->model_extension_myoc_cunit->getTotalCustomUnits();

        $results = $this->model_extension_myoc_cunit->getCustomUnits($filter_data);
        
        $data['cunits'] = array();

        foreach ($results as $result) {
            $data['cunits'][] = array(
                'custom_unit_id'    => $result['custom_unit_id'],
                'base'              => $result['base'],
                'collective'        => $result['collective'],
                'value'             => $result['value'],
                'status'            => $result['status'] ? 'enabled' : 'disabled',
                'selected'          => isset($this->request->post['selected']) && in_array($result['custom_unit_id'], $this->request->post['selected']),
                'edit'              => $this->url->link('extension/myoc/cunit/edit', 'user_token=' . $this->session->data['user_token'] . '&custom_unit_id=' . $result['custom_unit_id'] . $url, true)
            );
        }

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

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array)$this->request->post['selected'];
        } else {
            $data['selected'] = array();
        }

        $url = '';

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_base'] = $this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'] . '&sort=cd.base' . $url, true);
        $data['sort_collective'] = $this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'] . '&sort=cd.collective' . $url, true);
        $data['sort_value'] = $this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'] . '&sort=c.value' . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $cunit_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($cunit_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($cunit_total - $this->config->get('config_limit_admin'))) ? $cunit_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $cunit_total, ceil($cunit_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['text_version'] = $this->language->get('text_version') . self::MYOC_CUNIT_VERSION;
        $data['new_version'] = $this->check_version() ? $this->language->get('text_new_version') : '';

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/myoc/cunit_list', $data));
    }

    public function getForm() {
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

       if (isset($this->error['base'])) {
           $data['error_base'] = $this->error['base'];
       } else {
           $data['error_base'] = array();
       }

       if (isset($this->error['collective'])) {
           $data['error_collective'] = $this->error['collective'];
       } else {
           $data['error_collective'] = array();
       }

       if (isset($this->error['value'])) {
           $data['error_value'] = $this->error['value'];
       } else {
           $data['error_value'] = false;
       }

       if (isset($this->error['store'])) {
           $data['error_store'] = $this->error['store'];
       } else {
           $data['error_store'] = false;
       }

       $url = '';

       if (isset($this->request->get['sort'])) {
           $url .= '&sort=' . $this->request->get['sort'];
       }

       if (isset($this->request->get['order'])) {
           $url .= '&order=' . $this->request->get['order'];
       }

       if (isset($this->request->get['page'])) {
           $url .= '&page=' . $this->request->get['page'];
       }
        
        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=myoc', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        if (isset($this->request->get['custom_unit_id'])) {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('button_edit'),
                'href' => $this->url->link('extension/myoc/cunit/edit', 'user_token=' . $this->session->data['user_token'] . '&custom_unit_id=' . $this->request->get['custom_unit_id'], true)
            );
            $data['action'] = $this->url->link('extension/myoc/cunit/edit', 'user_token=' . $this->session->data['user_token'] . '&custom_unit_id=' . $this->request->get['custom_unit_id'] . $url, true);
        } else {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('button_add'),
                'href' => $this->url->link('extension/myoc/cunit/add', 'user_token=' . $this->session->data['user_token'], true)
            );
            $data['action'] = $this->url->link('extension/myoc/cunit/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        }

        $data['cancel'] = $this->url->link('extension/myoc/cunit', 'user_token=' . $this->session->data['user_token'], true);

        $data['user_token'] = $this->session->data['user_token'];

        $this->load->model('catalog/product');
        $this->load->model('catalog/category');
        $this->load->model('catalog/manufacturer');

        if (isset($this->request->get['custom_unit_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $cunit_info = $this->model_extension_myoc_cunit->getCustomUnit($this->request->get['custom_unit_id']);
        }

        if (isset($this->request->post['custom_unit_id'])) {
            $data['custom_unit_id'] = $this->request->post['custom_unit_id'];
        } elseif (isset($cunit_info['custom_unit_id'])) {
            $data['custom_unit_id'] = $cunit_info['custom_unit_id'];
        } else {
            $data['custom_unit_id'] = 0;
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (isset($cunit_info['status'])) {
            $data['status'] = $cunit_info['status'];
        } else {
            $data['status'] = 1;
        }

        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (isset($cunit_info['sort_order'])) {
            $data['sort_order'] = $cunit_info['sort_order'];
        } else {
            $data['sort_order'] = 0;
        }

        $this->load->model('localisation/language');
        
        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (isset($this->request->post['cunit_description'])) {
            $data['cunit_description'] = $this->request->post['cunit_description'];
        } elseif (isset($this->request->get['custom_unit_id'])) {
            $data['cunit_description'] = $cunit_info['cunit_description'];
        } else {
            $data['cunit_description'] = array();
        }

        if (isset($this->request->post['value'])) {
            $data['value'] = $this->request->post['value'];
        } elseif (isset($cunit_info['value'])) {
            $data['value'] = $cunit_info['value'];
        } else {
            $data['value'] = '1.0000';
        }

        if (isset($this->request->post['decimal'])) {
            $data['decimal'] = $this->request->post['decimal'];
        } elseif (isset($cunit_info['decimal'])) {
            $data['decimal'] = $cunit_info['decimal'];
        } else {
            $data['decimal'] = 0;
        }

        if (isset($this->request->post['price_in'])) {
            $data['price_in'] = $this->request->post['price_in'];
        } elseif (isset($cunit_info['price_in'])) {
            $data['price_in'] = $cunit_info['price_in'];
        } else {
            $data['price_in'] = 'b';
        }

        if (isset($this->request->post['order_in'])) {
            $data['order_in'] = $this->request->post['order_in'];
        } elseif (isset($cunit_info['order_in'])) {
            $data['order_in'] = $cunit_info['order_in'];
        } else {
            $data['order_in'] = 'c';
        }

        $data['products'] = array();

        if (isset($this->request->post['products'])) {
            foreach ($this->request->post['products'] as $product_id)
            {
                $data['products'][] = $this->model_catalog_product->getProduct($product_id);
            }
        } elseif (isset($cunit_info['products']) && $cunit_info['products']) {
            foreach ($cunit_info['products'] as $product_id)
            {
                $data['products'][] = $this->model_catalog_product->getProduct($product_id);
            }
        }

        $data['categories'] = array();

        if (isset($this->request->post['categories'])) {
            foreach ($this->request->post['categories'] as $category_id)
            {
                $category_info = $this->model_catalog_category->getCategory($category_id);
                if ($category_info) {
                    $data['categories'][] = array(
                        'category_id' => $category_info['category_id'],
                        'name'        => ($category_info['path']) ? $category_info['path'] . ' &gt; ' . $category_info['name'] : $category_info['name']
                    );
                }
            }
        } elseif (isset($cunit_info['categories']) && $cunit_info['categories']) {
            foreach ($cunit_info['categories'] as $category_id)
            {
                $category_info = $this->model_catalog_category->getCategory($category_id);
                if ($category_info) {
                    $data['categories'][] = array(
                        'category_id' => $category_info['category_id'],
                        'name'        => ($category_info['path']) ? $category_info['path'] . ' &gt; ' . $category_info['name'] : $category_info['name']
                    );
                }
            }
        }

        $data['manufacturers'] = array();

        if (isset($this->request->post['manufacturers'])) {
            foreach ($this->request->post['manufacturers'] as $manufacturer_id)
            {
                $data['manufacturers'][] = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);
            }
        } elseif (isset($cunit_info['manufacturers']) && $cunit_info['manufacturers']) {
            foreach ($cunit_info['manufacturers'] as $manufacturer_id)
            {
                $data['manufacturers'][] = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);
            }
        }

        if (isset($this->request->post['login'])) {
            $data['login'] = $this->request->post['login'];
        } elseif (isset($cunit_info['login'])) {
            $data['login'] = $cunit_info['login'];
        } else {
            $data['login'] = 0;
        }

        $this->load->model('customer/customer_group');

        $data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

        if (isset($this->request->post['customer_groups'])) {
            $data['cunit_customer_groups'] = $this->request->post['customer_groups'];
        } elseif (isset($cunit_info['customer_groups'])) {
            $data['cunit_customer_groups'] = $cunit_info['customer_groups'];
        } else {
            $data['cunit_customer_groups'] = array();
        }

        $this->load->model('setting/store');

        $data['stores'] = array();
        
        $data['stores'][] = array(
            'store_id' => 0,
            'name'     => $this->language->get('text_default')
        );
        
        $stores = $this->model_setting_store->getStores();

        foreach ($stores as $store) {
            $data['stores'][] = array(
                'store_id' => $store['store_id'],
                'name'     => $store['name']
            );
        }

        if (isset($this->request->post['stores'])) {
            $data['cunit_stores'] = $this->request->post['stores'];
        } elseif (isset($cunit_info['stores'])) {
            $data['cunit_stores'] = $cunit_info['stores'];
        } else {
            $data['cunit_stores'] = array(0);
        }

        $data['text_version'] = $this->language->get('text_version') . self::MYOC_CUNIT_VERSION;
        $data['new_version'] = $this->check_version() ? $this->language->get('text_new_version') : '';

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/myoc/cunit_form', $data));
    }

    protected function validateList() {
        if (!$this->user->hasPermission('modify', 'extension/myoc/cunit')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'extension/myoc/cunit')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        foreach ($this->request->post['cunit_description'] as $language_id => $value) {
            /*
            if(function_exists('utf8_strlen')) {
                if ((utf8_strlen($value['collective']) < 1) || (utf8_strlen($value['collective']) > 255)) {
                    $this->error['collective'][$language_id] = $this->language->get('error_collective');
                }
            } else {
                if ((strlen($value['collective']) < 1) || (strlen($value['collective']) > 255)) {
                    $this->error['collective'][$language_id] = $this->language->get('error_collective');
                }
            }
            */
        }

        if (is_null($this->request->post['value']) || !is_numeric($this->request->post['value'])) {
            $this->error['value'] = $this->language->get('error_value');
        }

        if (!isset($this->request->post['stores'])) {
            $this->error['store'] = $this->language->get('error_store');
        }
        
        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning');
        }

        return !$this->error;
    }

    function getOrderProductsCustomUnit(&$route, &$args, &$output)
    {
        if (!$this->config->get('myoc_cunit_status')) {
            return;
        }

        foreach ($output as $key => $order_product) {
            $matches = array();

            if (preg_match('/\[([0-9]+(\.[0-9]+)?)/', $order_product['name'], $matches) === 1) {
                $output[$key]['quantity'] = $matches[1];
            }
        }
    }

    public function install() {
        $this->load->model('extension/myoc/cunit');

        $this->model_extension_myoc_cunit->installTable();

        $this->load->model('setting/setting');

        $this->model_setting_setting->editSetting('myoc_cunit', array('myoc_cunit_status' => 1));

        $this->load->model('setting/event');

        $this->model_setting_event->deleteEventByCode('myoc_cunit');
        $this->model_setting_event->addEvent('myoc_cunit', 'admin/model/sale/order/getOrderProducts/after', 'extension/myoc/cunit/getOrderProductsCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/catalog/product/getProduct/after', 'extension/myoc/cunit/modifyProductPrice');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/catalog/product/getProducts/after', 'extension/myoc/cunit/modifyProductsPrice');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/catalog/product/getProductSpecials/after', 'extension/myoc/cunit/modifyProductsPrice');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/catalog/product/getLatestProducts/after', 'extension/myoc/cunit/modifyProductsPrice');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/catalog/product/getPopularProducts/after', 'extension/myoc/cunit/modifyProductsPrice');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/catalog/product/getBestSellerProducts/after', 'extension/myoc/cunit/modifyProductsPrice');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/catalog/product/getProductRelated/after', 'extension/myoc/cunit/modifyProductsPrice');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/product/product/before', 'extension/myoc/cunit/addProductCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/common/cart/before', 'extension/myoc/cunit/addCartCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/checkout/cart/before', 'extension/myoc/cunit/addCartCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/checkout/confirm/before', 'extension/myoc/cunit/addCartCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/extension/module/bestseller/before', 'extension/myoc/cunit/addProductListCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/extension/module/featured/before', 'extension/myoc/cunit/addProductListCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/extension/module/latest/before', 'extension/myoc/cunit/addProductListCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/extension/module/special/before', 'extension/myoc/cunit/addProductListCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/product/category/before', 'extension/myoc/cunit/addProductListCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/product/manufacturer_info/before', 'extension/myoc/cunit/addProductListCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/product/product/before', 'extension/myoc/cunit/addProductListCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/product/search/before', 'extension/myoc/cunit/addProductListCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/view/product/special/before', 'extension/myoc/cunit/addProductListCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/checkout/order/addOrder/before', 'extension/myoc/cunit/addOrderCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/checkout/order/editOrder/before', 'extension/myoc/cunit/addOrderCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/account/order/getOrderProduct/after', 'extension/myoc/cunit/getOrderProductCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/account/order/getOrderProducts/after', 'extension/myoc/cunit/getOrderProductsCustomUnit');
        $this->model_setting_event->addEvent('myoc_cunit', 'catalog/model/checkout/order/getOrderProducts/after', 'extension/myoc/cunit/getOrderProductsCustomUnit');

        $this->load->model('setting/modification');

        $modification = $this->model_setting_modification->getModificationByCode('myoc_cunit');

        if ($modification) {
            $this->model_setting_modification->enableModification($modification['modification_id']);
        
            $this->load->controller('marketplace/modification/refresh', array('redirect' => 'extension/extension/myoc'));
        }
    }

    public function uninstall() {
        $this->load->model('extension/myoc/cunit');

        $this->model_extension_myoc_cunit->uninstallTable();
        
        $this->load->model('setting/event');

        $this->model_setting_event->deleteEventByCode('myoc_cunit');

        $this->load->model('setting/modification');

        $modification = $this->model_setting_modification->getModificationByCode('myoc_cunit');

        if ($modification) {
            $this->model_setting_modification->disableModification($modification['modification_id']);
        
            $this->load->controller('marketplace/modification/refresh', array('redirect' => 'extension/extension/myoc'));
        }
    }

    public function check_version() {
        $defaults = array(
            CURLOPT_HEADER => FALSE,
            CURLOPT_URL => 'http://opencart.my/documentation/customunit/version.html',
            CURLOPT_FRESH_CONNECT => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_FORBID_REUSE => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_SSL_VERIFYHOST => FALSE
        );

        $ch = curl_init();
        curl_setopt_array($ch, $defaults);
        $version = curl_exec($ch);
        curl_close($ch);

        if ($version !== null && version_compare( self::MYOC_CUNIT_VERSION, $version ) === -1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}