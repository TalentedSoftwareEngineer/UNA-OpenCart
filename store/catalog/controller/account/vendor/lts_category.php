<?php
class ControllerAccountVendorLtsCategory extends Controller {

  private $error = array();

  public function index() {

    if (!$this->customer->isLogged()) {
        $this->session->data['redirect'] = $this->url->link('account/account','', true);

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
    
    $this->load->language('account/vendor/lts_category');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('account/vendor/lts_category');

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
    $this->load->language('account/vendor/lts_category');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('account/vendor/lts_category');
 
    
    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
    

      $result=$this->model_account_vendor_lts_category->addCategory($vendor_info['vendor_id'], $this->request->post);

      if($result==0)
      {        
       $this->session->data['error_success']=$this->language->get('text_cat_exist');
      }
      else
      {
      $this->session->data['success'] = $this->language->get('text_success');
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

      $this->response->redirect($this->url->link('account/vendor/lts_category&'.$this->error['cat_exist'],'',true));
    }

    $this->getForm();
  }

  public function edit() {

    if (!$this->customer->isLogged()) {
        $this->session->data['redirect'] = $this->url->link('account/account','', true);

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
    $this->load->language('account/vendor/lts_category');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('account/vendor/lts_category');
     
    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
       $result=$this->model_account_vendor_lts_category->editCategory($this->request->get['category_id'], $vendor_info['vendor_id'], $this->request->post);

      if($result==0)
      {        
       $this->session->data['error_success']=$this->language->get('text_cat_exist');
      }
      else
      {
      $this->session->data['success'] = $this->language->get('text_success');
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

      $this->response->redirect($this->url->link('account/vendor/lts_category','', true));
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

    $this->load->language('account/vendor/lts_category');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('account/vendor/lts_category');

    if (isset($this->request->post['selected'])) {
      foreach ($this->request->post['selected'] as $category_id) {

      $assin_val=$this->model_account_vendor_lts_category->get_admin_assin_cat($category_id);        
      if(isset($assin_val['assigned']) && !empty($assin_val['assigned']))
      {
        $assin_cat=$assin_val['assigned'];
      }
      else
      {
        $assin_cat=0;
      }


      $result=$this->model_account_vendor_lts_category->deleteCategory($category_id, $vendor_info['vendor_id'],$assin_cat);
       
      }
      if($result==1)
      {
      $this->session->data['error_delete_msg'] =$this->language->get('error_cat_vendor');
      }
      // else if($result==2)
      // {
      //   $this->session->data['error_delete_msg'] =$this->language->get('error_cat_assigned');
      // }
      else if($result==3)
      {
      $this->session->data['error_delete_msg'] =$this->language->get('error_cat_product_assigned');
      }
      else
      {
      $this->session->data['success'] = $this->language->get('text_success');        
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

      $this->response->redirect($this->url->link('account/vendor/lts_category', $url, true));
    }

    $this->getList();
  }

  public function repair() {
      $this->load->language('catalog/category');

      $this->document->setTitle($this->language->get('heading_title'));

      $this->load->model('catalog/category');

      if ($this->validateRepair()) {
        $this->model_catalog_category->repairCategories();

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

        $this->response->redirect($this->url->link('catalog/category', 'user_token=' . $this->session->data['user_token'] . $url, true));
      }

      $this->getList();
    }
  protected function getList() {

    $this->load->language('account/vendor/lts_category');
   
    if (isset($this->request->get['sort'])) {
      $sort = $this->request->get['sort'];
    } else {
      $sort = 'name';
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
        'href' => $this->url->link('account/vendor/lts_dashboard','',true)
    );

    $data['breadcrumbs'][] = array(
        'text' => $this->language->get('heading_title'),
        'href' => $this->url->link('account/vendor/lts_category','',true)
    );

    $data['add'] = $this->url->link('account/vendor/lts_category/add','',true);
    $data['delete'] = $this->url->link('account/vendor/lts_category/delete','',true);
    $data['repair'] = $this->url->link('account/vendor/lts_category/repair','',true);

     $this->load->model('account/vendor/lts_vendor');

   if($this->customer->isLogged()){
       $data['customer_id'] = $this->customer->getId();
   }
    
   $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

  $data['categories'] = array();

  $filter_data = array(
      'sort' => $sort,
      'order' => $order,
      'start' => ($page - 1) * $this->config->get('config_limit_admin'),
      'limit' => $this->config->get('config_limit_admin'),
      'vendor_id' => $vendor_info['vendor_id'],
  );

    $category_total = $this->model_account_vendor_lts_category->getTotalCategories($filter_data);

    $results = $this->model_account_vendor_lts_category->get_all_category($filter_data);
   
  
    foreach ($results as $result) {
      $data['categories'][] = array(
          'category_id' => $result['category_id'],
          'name' => $result['name'],
          'vendor_id'=>$result['vendor_id'],
          'approved'=>$result['approved'],
          'vendor_status'=>$result['approved']>0? $this->language->get('text_approval') : $this->language->get('text_for_approval'),
          'status' => $result['approved']==NULL? $this->language->get('text_approved') : $this->language->get('text_pending'),

          'sort_order' => $result['sort_order'],
          'edit' => $this->url->link('account/vendor/lts_category/edit', '&category_id=' . $result['category_id'],true)
      );
    }
      if(isset($vendor_info))
      {
        $data['cur_vendor_id']=$vendor_info['vendor_id'];
      }
      else
      {
        $data['cur_vendor_id']='';
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
    if (isset($this->session->data['error_success'])) {
      $data['error_success'] = $this->session->data['error_success'];

      unset($this->session->data['error_success']);
    } else {
      $data['error_success'] = '';
    }

    if (isset($this->session->data['error_delete_msg'])) {
      $data['error_delete_msg'] = $this->session->data['error_delete_msg'];

      unset($this->session->data['error_delete_msg']);
    } else {
      $data['error_delete_msg'] = '';
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

    $data['sort_name'] = $this->url->link("account/vendor/lts_category","&sort=name" . $url, true);
    $data['sort_sort_order'] = $this->url->link("account/vendor/lts_category","&sort=sort_order" . $url, true);

    $url = '';

    if (isset($this->request->get['sort'])) {
      $url .= '&sort=' . $this->request->get['sort'];
    }

    if (isset($this->request->get['order'])) {
      $url .= '&order=' . $this->request->get['order'];
    }

    $pagination = new Pagination();
    $pagination->total = $category_total;
    $pagination->page = $page;
    $pagination->limit = $this->config->get('config_limit_admin');
    $pagination->url = $this->url->link('account/vendor/lts_category', '&page={page}','',true);

    $data['pagination'] = $pagination->render();

   $data['results'] = sprintf($this->language->get('text_pagination'), ($category_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($category_total - $this->config->get('config_limit_admin'))) ? $category_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $category_total, ceil($category_total / $this->config->get('config_limit_admin')));

 
    $data['sort'] = $sort;

    $data['order'] = $order;

   $this->load->controller('account/vendor/lts_header/script');
    $data['footer'] = $this->load->controller('account/vendor/lts_footer');
    $data['header'] = $this->load->controller('account/vendor/lts_header');
    $data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');

    $this->response->setOutput($this->load->view('account/vendor/lts_category_list', $data));
  }

  protected function getForm() {
    $this->load->language('account/vendor/lts_category');
   
    $data['text_form'] = !isset($this->request->get['category_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

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

    if (isset($this->error['meta_title'])) {
      $data['error_meta_title'] = $this->error['meta_title'];
    } else {
      $data['error_meta_title'] = array();
    }

    if (isset($this->error['keyword'])) {
      $data['error_keyword'] = $this->error['keyword'];
    } else {
      $data['error_keyword'] = '';
    }

    if (isset($this->error['parent'])) {
      $data['error_parent'] = $this->error['parent'];
    } else {
      $data['error_parent'] = '';
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


    $this->document->addScript('catalog/view/javascript/vendor/codemirror/lib/codemirror.js');
    $this->document->addScript('catalog/view/javascript/vendor/codemirror/lib/xml.js');
    $this->document->addScript('catalog/view/javascript/vendor/codemirror/lib/formatting.js');
    $this->document->addScript('catalog/view/javascript/vendor/summernote/summernote.js');
    $this->document->addScript('catalog/view/javascript/vendor/summernote/summernote-image-attributes.js');
    $this->document->addScript('catalog/view/javascript/vendor/summernote/opencart.js');
    
    $this->document->addStyle('catalog/view/javascript/vendor/codemirror/lib/codemirror.css');
    $this->document->addStyle('catalog/view/javascript/vendor/codemirror/theme/monokai.css');
    $this->document->addStyle('catalog/view/javascript/vendor/codemirror/lib/codemirror.css');
    $this->document->addStyle('catalog/view/javascript/vendor/summernote/summernote.css');

    $data['breadcrumbs'] = array();

    $data['breadcrumbs'][] = array(
        'text' => $this->language->get('text_home'),
        'href' => $this->url->link('account/vendor/lts_dashboard','',true)
    );

    $data['breadcrumbs'][] = array(
        'text' => $this->language->get('heading_title'),
        'href' => $this->url->link('account/vendor/lts_category','',true)
    );

    if (!isset($this->request->get['category_id'])) {
      $data['action'] = $this->url->link('account/vendor/lts_category/add','', true);
    } else {
      $data['action'] = $this->url->link('account/vendor/lts_category/edit', '&category_id=' . $this->request->get['category_id'],'', true);
    }

    $data['cancel'] = $this->url->link('account/vendor/lts_category','',true);

    if (isset($this->request->get['category_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
      $category_info = $this->model_account_vendor_lts_category->getCategory($this->request->get['category_id']);
    }

    $this->load->model('localisation/language');

    $data['languages'] = $this->model_localisation_language->getLanguages();

    if (isset($this->request->post['category_description'])) {
      $data['category_description'] = $this->request->post['category_description'];
    } elseif (isset($this->request->get['category_id'])) {
      $data['category_description'] = $this->model_account_vendor_lts_category->getCategoryDescriptions($this->request->get['category_id']);
    } else {
      $data['category_description'] = array();
    }

    if (isset($this->request->post['path'])) {
      $data['path'] = $this->request->post['path'];
    } elseif (!empty($category_info)) {
      $data['path'] = $category_info['path'];
    } else {
      $data['path'] = '';
    }

    if (isset($this->request->post['parent_id'])) {
      $data['parent_id'] = $this->request->post['parent_id'];
    } elseif (!empty($category_info)) {
      $data['parent_id'] = $category_info['parent_id'];
    } else {
      $data['parent_id'] = 0;
    }

    $this->load->model('account/vendor/lts_filter');

    if (isset($this->request->post['category_filter'])) {
      $filters = $this->request->post['category_filter'];
    } elseif (isset($this->request->get['category_id'])) {
      $filters = $this->model_account_vendor_lts_category->getCategoryFilters($this->request->get['category_id']);
    } else {
      $filters = array();
    }

    $data['category_filters'] = array();

    foreach ($filters as $filter_id) {
      $filter_info = $this->model_account_vendor_lts_filter->getFilter($filter_id);

      if ($filter_info) {
        $data['category_filters'][] = array(
            'filter_id' => $filter_info['filter_id'],
            'name' => $filter_info['group'] . ' &gt; ' . $filter_info['name']
        );
      }
    }

    $this->load->model('setting/store');

    $data['stores'] = array();

    $data['stores'][] = array(
        'store_id' => 0,
        'name' => $this->language->get('text_default')
    );

    $stores = $this->model_setting_store->getStores();

    foreach ($stores as $store) {
      $data['stores'][] = array(
          'store_id' => $store['store_id'],
          'name' => $store['name']
      );
    }

    if (isset($this->request->post['category_store'])) {
      $data['category_store'] = $this->request->post['category_store'];
    } elseif (isset($this->request->get['category_id'])) {
      $data['category_store'] = $this->model_account_vendor_lts_category->getCategoryStores($this->request->get['category_id']);
    } else {
      $data['category_store'] = array(0);
    }

    if (isset($this->request->post['image'])) {
      $data['image'] = $this->request->post['image'];
    } elseif (!empty($category_info)) {
      $data['image'] = $category_info['image'];
    } else {
      $data['image'] = '';
    }

    $this->load->model('tool/image');

    if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
      $data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
    } elseif (!empty($category_info) && is_file(DIR_IMAGE . $category_info['image'])) {
      $data['thumb'] = $this->model_tool_image->resize($category_info['image'], 100, 100);
    } else {
      $data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
    }

    $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

    if (isset($this->request->post['column'])) {
      $data['column'] = $this->request->post['column'];
    } elseif (!empty($category_info)) {
      $data['column'] = $category_info['column'];
    } else {
      $data['column'] = 1;
    }

    if (isset($this->request->post['sort_order'])) {
      $data['sort_order'] = $this->request->post['sort_order'];
    } elseif (!empty($category_info)) {
      $data['sort_order'] = $category_info['sort_order'];
    } else {
      $data['sort_order'] = 0;
    }

    if (isset($this->request->post['status'])) {
      $data['status'] = $this->request->post['status'];
    } elseif (!empty($category_info)) {
      $data['status'] = $category_info['status'];
    } else {
      $data['status'] = true;
    }

    if (isset($this->request->post['category_seo_url'])) {
      $data['category_seo_url'] = $this->request->post['category_seo_url'];
    } elseif (isset($this->request->get['category_id'])) {
      $data['category_seo_url'] = $this->model_account_vendor_lts_category->getCategorySeoUrls($this->request->get['category_id']);
    } else {
      $data['category_seo_url'] = array();
    }

    if (isset($this->request->post['category_layout'])) {
      $data['category_layout'] = $this->request->post['category_layout'];
    } elseif (isset($this->request->get['category_id'])) {
      $data['category_layout'] = $this->model_account_vendor_lts_category->getCategoryLayouts($this->request->get['category_id']);
    } else {
      $data['category_layout'] = array();
    }

    $this->load->model('account/vendor/lts_layout');

    $data['layouts'] = $this->model_account_vendor_lts_layout->getLayouts();

    $this->load->controller('account/vendor/lts_header/script');
    $data['footer'] = $this->load->controller('account/vendor/lts_footer');
    $data['header'] = $this->load->controller('account/vendor/lts_header');
    $data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');

    $this->response->setOutput($this->load->view('account/vendor/lts_category_form', $data));
  }

  protected function validateForm() {
    foreach ($this->request->post['category_description'] as $language_id => $value) {
      if ((utf8_strlen($value['name']) < 1) || (utf8_strlen($value['name']) > 255)) {
        $this->error['name'][$language_id] = $this->language->get('error_name');
      }

      if ((utf8_strlen($value['meta_title']) < 1) || (utf8_strlen($value['meta_title']) > 255)) {
        $this->error['meta_title'][$language_id] = $this->language->get('error_meta_title');
      }
    }

    if (isset($this->request->get['category_id']) && $this->request->post['parent_id']) {
      $results = $this->model_account_vendor_lts_category->getCategoryPath($this->request->post['parent_id']);

      foreach ($results as $result) {
        if ($result['path_id'] == $this->request->get['category_id']) {
          $this->error['parent'] = $this->language->get('error_parent');

          break;
        }
      }
    }

    if ($this->request->post['category_seo_url']) {
      $this->load->model('account/vendor/lts_seo_url');

      foreach ($this->request->post['category_seo_url'] as $store_id => $language) {
        foreach ($language as $language_id => $keyword) {
          if (!empty($keyword)) {
            if (count(array_keys($language, $keyword)) > 1) {
              $this->error['keyword'][$store_id][$language_id] = $this->language->get('error_unique');
            }

            $seo_urls = $this->model_account_vendor_lts_seo_url->getSeoUrlsByKeyword($keyword);

            foreach ($seo_urls as $seo_url) {
              if (($seo_url['store_id'] == $store_id) && (!isset($this->request->get['category_id']) || ($seo_url['query'] != 'category_id=' . $this->request->get['category_id']))) {
                $this->error['keyword'][$store_id][$language_id] = $this->language->get('error_keyword');

                break;
              }
            }
          }
        }
      }
    }

    if ($this->error && !isset($this->error['warning'])) {
      $this->error['warning'] = $this->language->get('error_warning');
    }

    return !$this->error;
  }
  protected function validateDelete() {
    if (!$this->user->hasPermission('modify', 'catalog/category')) {
      $this->error['warning'] = $this->language->get('error_permission');
    }

    return !$this->error;
  }

  protected function validateRepair() {
    if (!$this->user->hasPermission('modify', 'catalog/category')) {
      $this->error['warning'] = $this->language->get('error_permission');
    }

    return !$this->error;
  }
  public function autocomplete() {


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
    $json = array();

    if (isset($this->request->get['filter_name'])) {
      $this->load->model('account/vendor/lts_category');

      $filter_data = array(
          'filter_name' => $this->request->get['filter_name'],
          'sort' => 'name',
          'order' => 'ASC',
          'start' => 0,
          'limit' => 6,
         
      );
      $results = $this->model_account_vendor_lts_category->get_all_approved_category($filter_data);

      
      foreach ($results as $result) {
        if(($result['approved']==NULL && $result['vendor_id']==NULL) OR ($result['approved']=='1' && $result['vendor_id']>0))
        {

          $json[] = array(
              'category_id' => $result['category_id'],
              'name' => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
          );
        }
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
