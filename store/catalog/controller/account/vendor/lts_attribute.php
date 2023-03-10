<?php

class ControllerAccountVendorLtsAttribute extends Controller {

  private $error = array();

  public function index() {    

    if (!$this->customer->isLogged()) {
        $this->session->data['redirect'] = $this->url->link('account/account', '', true);

        $this->response->redirect($this->url->link('account/login', '', true));
    }

    if(!$this->config->get('module_lts_vendor_status')) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

    $this->load->model('account/vendor/lts_vendor');

    if($this->customer->isLogged()){
        $data['customer_id'] = $this->customer->getId();
    }
     
    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

    if(!$vendor_info) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

    $this->load->language('account/vendor/lts_attribute');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('account/vendor/lts_attribute');

    $this->getList();
  }

  public function add() {
    if (!$this->customer->isLogged()) {
        $this->session->data['redirect'] = $this->url->link('account/account', '', true);

        $this->response->redirect($this->url->link('account/login', '', true));
    }

    if(!$this->config->get('module_lts_vendor_status')) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

    $this->load->model('account/vendor/lts_vendor');

    if($this->customer->isLogged()){
        $data['customer_id'] = $this->customer->getId();
    }
     
    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

    if(!$vendor_info) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }
    
    $this->load->language('account/vendor/lts_attribute');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('account/vendor/lts_attribute');

    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
      $this->model_account_vendor_lts_attribute->addAttribute($vendor_info['vendor_id'], $this->request->post);

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

      $this->response->redirect($this->url->link('account/vendor/lts_attribute', $url,true));
    }

    $this->getForm();
  }

  public function edit() {
    if (!$this->customer->isLogged()) {
        $this->session->data['redirect'] = $this->url->link('account/account', '', true);

        $this->response->redirect($this->url->link('account/login', '', true));
    }

    if(!$this->config->get('module_lts_vendor_status')) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

    $this->load->model('account/vendor/lts_vendor');

    if($this->customer->isLogged()){
        $data['customer_id'] = $this->customer->getId();
    }
     
    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

    if(!$vendor_info) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }
   
    $this->load->language('account/vendor/lts_attribute');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('account/vendor/lts_attribute');

    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
      $this->model_account_vendor_lts_attribute->editAttribute($this->request->get['attribute_id'], $vendor_info['vendor_id'], $this->request->post);

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

      $this->response->redirect($this->url->link('account/vendor/lts_attribute', $url,true));
    }

    $this->getForm();
  }

  public function delete() {
    if (!$this->customer->isLogged()) {
        $this->session->data['redirect'] = $this->url->link('account/account', '', true);

        $this->response->redirect($this->url->link('account/login', '', true));
    }

    if(!$this->config->get('module_lts_vendor_status')) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

    $this->load->model('account/vendor/lts_vendor');

    if($this->customer->isLogged()){
        $data['customer_id'] = $this->customer->getId();
    }
     
    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

    if(!$vendor_info) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

    $this->load->language('account/vendor/lts_attribute');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('account/vendor/lts_attribute');

    if (isset($this->request->post['selected']) && $this->validateDelete()) {
      foreach ($this->request->post['selected'] as $attribute_id) {
        $this->model_account_vendor_lts_attribute->deleteAttribute($attribute_id, $vendor_info['vendor_id']);
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

      $this->response->redirect($this->url->link('account/vendor/lts_attribute', $url,true));
    }

    $this->getList();
  }

  protected function getList() {

    if (isset($this->request->get['sort'])) {
      $sort = $this->request->get['sort'];
    } else {
      $sort = 'ad.name';
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
        'href' => $this->url->link('account/vendor/lts_dashboard', '', true)
    );

    $data['breadcrumbs'][] = array(
        'text' => $this->language->get('heading_title'),
        'href' => $this->url->link('account/vendor/lts_attribute', $url, true)
    );

    $data['add'] = $this->url->link('account/vendor/lts_attribute/add', '', true);
    $data['delete'] = $this->url->link('account/vendor/lts_attribute/delete', '', true);

    $this->load->model('account/vendor/lts_vendor');

    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

    if(!$vendor_info) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

    $data['attributes'] = array();

    $filter_data = array(
        'sort' => $sort,
        'order' => $order,
        'start' => ($page - 1) * $this->config->get('config_limit_admin'),
        'limit' => $this->config->get('config_limit_admin'),
        'vendor_id' => $vendor_info['vendor_id']
    );

    $attribute_total = $this->model_account_vendor_lts_attribute->getTotalAttributes($filter_data);

    $results = $this->model_account_vendor_lts_attribute->getAttributes($filter_data);

    foreach ($results as $result) {
      $data['attributes'][] = array(
          'attribute_id' => $result['attribute_id'],
          'name' => $result['name'],
          'attribute_group' => $result['attribute_group'],
          'sort_order' => $result['sort_order'],
          'edit' => $this->url->link('account/vendor/lts_attribute/edit', '&attribute_id=' . $result['attribute_id'] . $url, true)
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
      $data['selected'] = (array) $this->request->post['selected'];
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

    $data['sort_name'] = $this->url->link('account/vendor/lts_attribute', '&sort=ad.name' . $url, true);
    $data['sort_attribute_group'] = $this->url->link('account/vendor/lts_attribute', '&sort=attribute_group' . $url, true);
    $data['sort_sort_order'] = $this->url->link('account/vendor/lts_attribute', '&sort=a.sort_order' . $url, true);

    $url = '';

    if (isset($this->request->get['sort'])) {
      $url .= '&sort=' . $this->request->get['sort'];
    }

    if (isset($this->request->get['order'])) {
      $url .= '&order=' . $this->request->get['order'];
    }

    $pagination = new Pagination();
    $pagination->total = $attribute_total;
    $pagination->page = $page;
    $pagination->limit = $this->config->get('config_limit_admin');
    $pagination->url = $this->url->link('account/vendor/lts_attribute', '&page={page}', true);

    $data['pagination'] = $pagination->render();

    $data['results'] = sprintf($this->language->get('text_pagination'), ($attribute_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($attribute_total - $this->config->get('config_limit_admin'))) ? $attribute_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $attribute_total, ceil($attribute_total / $this->config->get('config_limit_admin')));

    $data['sort'] = $sort;
    $data['order'] = $order;

    $this->load->controller('account/vendor/lts_header/script');
    $data['footer'] = $this->load->controller('account/vendor/lts_footer');
    $data['header'] = $this->load->controller('account/vendor/lts_header');
    $data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');


    $this->response->setOutput($this->load->view('account/vendor/lts_attribute_list', $data));
  }

  protected function getForm() {
    
   if (!$this->customer->isLogged()) {
       $this->session->data['redirect'] = $this->url->link('account/account', '', true);

       $this->response->redirect($this->url->link('account/login', '', true));
   }

   if(!$this->config->get('module_lts_vendor_status')) {
       $this->response->redirect($this->url->link('account/account', '', true));
   }

   $this->load->model('account/vendor/lts_vendor');

   if($this->customer->isLogged()){
       $data['customer_id'] = $this->customer->getId();
   }
    
   $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

   if(!$vendor_info) {
       $this->response->redirect($this->url->link('account/account', '', true));
   }


    $data['text_form'] = !isset($this->request->get['attribute_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

    if (isset($this->error['warning'])) {
      $data['error_warning'] = $this->error['warning'];
    } else {
      $data['error_warning'] = '';
    }

    if (isset($this->error['name'])) {
      $data['error_name'] = $this->error['name'];
    } else {
      $data['error_name'] = array();
    }

    if (isset($this->error['attribute_group'])) {
      $data['error_attribute_group'] = $this->error['attribute_group'];
    } else {
      $data['error_attribute_group'] = '';
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
        'href' => $this->url->link('account/vendor/lts_dashboard')
    );

    $data['breadcrumbs'][] = array(
        'text' => $this->language->get('heading_title'),
        'href' => $this->url->link('account/vendor/lts_attribute', $url, true)
    );

    if (!isset($this->request->get['attribute_id'])) {
      $data['action'] = $this->url->link('account/vendor/lts_attribute/add', $url, true);
    } else {
      $data['action'] = $this->url->link('account/vendor/lts_attribute/edit', '&attribute_id=' . $this->request->get['attribute_id'] . $url, true);
    }

    $data['cancel'] = $this->url->link('account/vendor/lts_attribute', $url, true);

    if (isset($this->request->get['attribute_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
      $attribute_info = $this->model_account_vendor_lts_attribute->getAttribute($this->request->get['attribute_id']);
    }

    $this->load->model('localisation/language');

    $data['languages'] = $this->model_localisation_language->getLanguages();

    if (isset($this->request->post['attribute_description'])) {
      $data['attribute_description'] = $this->request->post['attribute_description'];
    } elseif (isset($this->request->get['attribute_id'])) {
      $data['attribute_description'] = $this->model_account_vendor_lts_attribute->getAttributeDescriptions($this->request->get['attribute_id']);
    } else {
      $data['attribute_description'] = array();
    }

    if (isset($this->request->post['attribute_group_id'])) {
      $data['attribute_group_id'] = $this->request->post['attribute_group_id'];
    } elseif (!empty($attribute_info)) {
      $data['attribute_group_id'] = $attribute_info['attribute_group_id'];
    } else {
      $data['attribute_group_id'] = '';
    }

    $this->load->model('account/vendor/lts_attribute_group');
    $this->load->model('account/vendor/lts_vendor');
    $filter=$this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->getId());
    $data['attribute_groups'] = $this->model_account_vendor_lts_attribute_group->getAttributeGroups($filter);

    if (isset($this->request->post['sort_order'])) {
      $data['sort_order'] = $this->request->post['sort_order'];
    } elseif (!empty($attribute_info)) {
      $data['sort_order'] = $attribute_info['sort_order'];
    } else {
      $data['sort_order'] = '';
    }

    $this->load->controller('account/vendor/lts_header/script');
    $data['footer'] = $this->load->controller('account/vendor/lts_footer');
    $data['header'] = $this->load->controller('account/vendor/lts_header');
    $data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');

    $this->response->setOutput($this->load->view('account/vendor/lts_attribute_form', $data));
  }

  protected function validateForm() {

    if (!isset($this->request->post['attribute_group_id'])) {
    	$this->error['attribute_group'] = $this->language->get('error_attribute_group');
    }

    foreach ($this->request->post['attribute_description'] as $language_id => $value) {
      if ((utf8_strlen($value['name']) < 1) || (utf8_strlen($value['name']) > 64)) {
        $this->error['name'][$language_id] = $this->language->get('error_name');
      }
    }

    return !$this->error;
  }

  protected function validateDelete() {
    $this->load->model('account/vendor/lts_product');

    foreach ($this->request->post['selected'] as $attribute_id) {
      $product_total = $this->model_account_vendor_lts_product->getTotalProductsByAttributeId($attribute_id);

      if ($product_total) {
        $this->error['warning'] = sprintf($this->language->get('error_product'), $product_total);
      }
    }

    return !$this->error;
  }

  public function autocomplete() {
    $json = array();
    $this->load->model('account/vendor/lts_vendor');

    if($this->customer->isLogged()){
        $data['customer_id'] = $this->customer->getId();
    }
     
    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

    if(!$vendor_info) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

    if (isset($this->request->get['filter_name'])) {
      $this->load->model('account/vendor/lts_attribute');

      $filter_data = array(
          'filter_name' => $this->request->get['filter_name'],
          'start' => 0,
          'limit' => 5,
          'vendor_id'=>$vendor_info['vendor_id']
      );

      $results = $this->model_account_vendor_lts_attribute->getAttributes($filter_data);

      foreach ($results as $result) {
        $json[] = array(
            'attribute_id' => $result['attribute_id'],
            'name' => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
            'attribute_group' => $result['attribute_group']
        );
      }
    }

    $sort_order = array();

    foreach ($json as $key => $value) {
      $sort_order[$key] = $value['name'];
    }

    array_multisort($sort_order, SORT_ASC, $json);

    $this->response->addHeader('Content-Type: application/json');
    $this->response->setOutput(json_encode($json));
  }

}
