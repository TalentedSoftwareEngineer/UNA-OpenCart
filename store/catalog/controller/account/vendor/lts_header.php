<?php
class ControllerAccountVendorLtsHeader extends Controller {
  public function index() {

    $data['title'] = $this->document->getTitle();

    if ($this->request->server['HTTPS']) {
      $data['base'] = HTTPS_SERVER;
    } else {
      $data['base'] = HTTP_SERVER;
    }

    $this->load->language('account/vendor/lts_header');
    $data['text_logout']=$this->language->get('text_logout');
    $data['text_navigation']=$this->language->get('text_navigation');
    $data['text_documentation']=$this->language->get('text_documentation');
    $data['text_open_home']=$this->language->get('text_open_home');
    $data['text_support_form']=$this->language->get('text_support_form');
    $this->load->model('vendor/lts_mvendor');    
    $this->load->model('account/vendor/lts_vendor');


    $this->load->model('tool/image');

    $data['styles'] = $this->document->getStyles();
    $data['scripts'] = $this->document->getScripts('header');

    if($this->customer->isLogged()){
        $data['customer_id'] = $this->customer->getId();
    }
    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());   

      
    if ($vendor_info) {       
       
     // print_r($vendor_info); DIE;  
    $data['info']=$this->model_account_vendor_lts_vendor->get_vendor_name($vendor_info['customer_id']);
      $data['image']=$vendor_info['profile_image'];
      $data['logged']=$vendor_info['status'];
  
    if (is_file(DIR_IMAGE . $vendor_info['profile_image'])) {
          $data['image'] = $this->model_tool_image->resize($vendor_info['profile_image'], 45, 45);
           
        } else {
          $data['image'] = $this->model_tool_image->resize('profile.png', 45, 45);       
           
        }

        if(is_file(DIR_IMAGE . $vendor_info['logo'])) {         
          $data['logo']=$this->model_tool_image->resize($vendor_info['logo'], 100, 45);
        } else {         
          $data['logo'] = $this->model_tool_image->resize('no_image.png',100, 45);  
        }

    } else {
      
      $data['lastname'] = '';
      $data['image'] = '';
    }

    if ($vendor_info) {
      $data['logged'] = 'SSL';
      $data['profile'] = $this->url->link('account/vendor/lts_store','', true);
      $data['logout'] = $this->url->link('account/logout','', true);
     
    } else {
      $data['logged'] = '';
      $data['home'] = $this->url->link('vendor/lts_dashboard', '', 'SSL'); 
    }
    
    return $this->load->view('account/vendor/lts_header', $data);
  }

}
